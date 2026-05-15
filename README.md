# Brevo PHP Library

![Brevo](banner.png)

[![fern shield](https://img.shields.io/badge/%F0%9F%8C%BF-Built%20with%20Fern-brightgreen)](https://buildwithfern.com?utm_source=github&utm_medium=github&utm_campaign=readme&utm_source=https%3A%2F%2Fgithub.com%2Fmourraille%2Ffern-sdk)
[![php shield](https://img.shields.io/badge/php-packagist-pink)](https://packagist.org/packages/getbrevo/brevo-php)

Official SDK for the Brevo API.

## Table of Contents

- [Documentation](#documentation)
- [Requirements](#requirements)
- [Installation](#installation)
- [Upgrading from v4.x](#upgrading-from-v4x)
- [Migration from v1.x](#migration-from-v1x)
- [Usage](#usage)
- [Exception Handling](#exception-handling)
- [Advanced](#advanced)
  - [Custom Client](#custom-client)
  - [Retries](#retries)
  - [Timeouts](#timeouts)
  - [Logging](#logging)
- [Contributing](#contributing)

## Documentation

API reference documentation is available [here](https://developers.brevo.com).

## Requirements

This SDK requires PHP ^8.1.

## Installation

```sh
composer require getbrevo/brevo-php
```

## Upgrading from v4.x

v5 is a major release. Most breaking changes come from an internal effort at Brevo to make endpoints, parameters and models more **self-descriptive** — so names, shapes and required fields convey intent without needing to cross-reference external docs (both for developers and for AI agents working against the Brevo API).

v4.x remains supported. If you need to hold on v4 temporarily, pin it:

```bash
composer require getbrevo/brevo-php:^4.0
```

<details>
<summary>View v4 → v5 migration guide</summary>

### Breaking changes

**Companies — `GetCompaniesRequest::filters` renamed**
- `filters` is renamed to `filtersAttributesName` to match the wire format.
- Existing code passing `'filters' => ...` does not throw, but the filter is silently ignored server-side and the response is unfiltered. Audit every call site.

**Events — `Event::createBatchEvents` payload shape changed**
```php
// v4
$client->event->createBatchEvents($eventsArray);

// v5
use Brevo\Event\Requests\CreateBatchEventsRequest;

$client->event->createBatchEvents(
    new CreateBatchEventsRequest(['events' => $eventsArray])
);
```

**Balance — `getActiveBalancesApi` response shape changed**
- Return type changed from `?BalanceLimit` to `?GetLoyaltyBalanceProgramsPidActiveBalanceResponse`.

**Balance — `getContactBalances` requires `balanceDefinitionId`**
- `$request` no longer defaults to empty; `balanceDefinitionId` is required.

**Balance — `BeginTransactionRequest::eventTime` type tightened**
- Changed from `?string` to `?DateTime`. ISO strings now cause `TypeError`.

**CRM — `Tasks::getAllTaskTypes` returns an array** (`?array<GetCrmTasktypesResponseItem>` instead of `?GetCrmTasktypesResponse`).

**Email campaigns — `utmIdActive` renamed**
- `EmailCampaigns\GetEmailCampaignResponse::utmIdActive` renamed to `utmId` (wire key `utmIDActive` → `utmID`, type `?bool` → `?int`). Same change on `GetEmailCampaignsResponseCampaignsItem`.

**Model fields removed**: `GetAccountResponse::dateTimePreferences`, `Webhook::channel`, `GetProcessResponseInfo::export`, `GetProcessResponse::error/createdAt/completedAt`, and several `ExternalFeeds` response fields.

**Model field types tightened**:
- `Process\GetProcessResponseInfoImport` count fields: `?int` → `?string` (now URLs to CSV reports) — affects `invalidEmails`, `duplicateContactId`, `duplicateExtId`, etc.
- `Ecommerce\CreateUpdateProductResponse::id` and `CreateUpdateCategoryResponse::id`: `?int` → `?string`.
- Several `string` date fields tightened to `?DateTime` (`Program::*`, `Reward::*`, `BalanceLimit::createdAt`/`updatedAt`).

**Model fields renamed**: `ConversationsMessageAttachmentsItem::fileName` → `name`, `::inlineId` → `link`.

**Custom objects — associations union flattened**: `UpsertrecordsRequestRecordsItemAssociationsItem` is now a single class with an `action: 'link' | 'unlink'` discriminator. Seven old variant classes have been deleted.

### Added

- New optional fields and filters across `contacts->createContact`, `contacts->updateContact`, `emailCampaigns->getEmailCampaigns`, `ecommerce->getProducts`, and several other endpoints.
- Tier groups support upgrade and downgrade schedule fields.

</details>

## Migration from v1.x

> **Warning**: The legacy v1.x SDK will continue to receive critical security updates but no new features. We recommend migrating to v5.x.

<details>
<summary>View migration guide</summary>

**Key changes:**
- Unified `Brevo` client with namespaced resources
- Standardized error handling via `BrevoApiException`
- PSR-18 HTTP client support

**v1.x:**
```php
use Brevo\Client\Configuration;
use Brevo\Client\Api\TransactionalEmailsApi;
use Brevo\Client\Model\SendSmtpEmail;

$config = Configuration::getDefaultConfiguration()->setApiKey('api-key', 'xkeysib-xxx');
$api = new TransactionalEmailsApi(new \GuzzleHttp\Client(), $config);

$message = new SendSmtpEmail();
$message->setSubject('First email');
$message->setTextContent('Hello world!');
$message->setSender(['name' => 'Bob Wilson', 'email' => 'bob.wilson@example.com']);
$message->setTo([['email' => 'sarah.davis@example.com', 'name' => 'Sarah Davis']]);

$api->sendTransacEmail($message);
```

**v5.x:**
```php
use Brevo\Brevo;
use Brevo\TransactionalEmails\Requests\SendTransacEmailRequest;
use Brevo\TransactionalEmails\Types\SendTransacEmailRequestSender;
use Brevo\TransactionalEmails\Types\SendTransacEmailRequestToItem;

$brevo = new Brevo('xkeysib-xxx');

$brevo->transactionalEmails->sendTransacEmail(
    new SendTransacEmailRequest([
        'subject' => 'First email',
        'textContent' => 'Hello world!',
        'sender' => new SendTransacEmailRequestSender([
            'name' => 'Bob Wilson',
            'email' => 'bob.wilson@example.com',
        ]),
        'to' => [
            new SendTransacEmailRequestToItem([
                'email' => 'sarah.davis@example.com',
                'name' => 'Sarah Davis',
            ]),
        ],
    ])
);
```

</details>


## Usage

Instantiate and use the client with the following:

```php
<?php

namespace Example;

use Brevo\Brevo;
use Brevo\TransactionalEmails\Requests\SendTransacEmailRequest;
use Brevo\TransactionalEmails\Types\SendTransacEmailRequestSender;
use Brevo\TransactionalEmails\Types\SendTransacEmailRequestToItem;

$client = new Brevo(
    apiKey: '<value>',
);
$client->transactionalEmails->sendTransacEmail(
    new SendTransacEmailRequest([
        'htmlContent' => '<html><head></head><body><p>Hello,</p>This is my first transactional email sent from Brevo.</p></body></html>',
        'sender' => new SendTransacEmailRequestSender([
            'email' => 'hello@brevo.com',
            'name' => 'Alex from Brevo',
        ]),
        'subject' => 'Hello from Brevo!',
        'to' => [
            new SendTransacEmailRequestToItem([
                'email' => 'johndoe@example.com',
                'name' => 'John Doe',
            ]),
        ],
    ]),
);

```

## Exception Handling

When the API returns a non-success status code (4xx or 5xx response), an exception will be thrown.

```php
use Brevo\Exceptions\BrevoApiException;
use Brevo\Exceptions\BrevoException;

try {
    $response = $client->transactionalEmails->sendTransacEmail(...);
} catch (BrevoApiException $e) {
    echo 'API Exception occurred: ' . $e->getMessage() . "\n";
    echo 'Status Code: ' . $e->getCode() . "\n";
    echo 'Response Body: ' . $e->getBody() . "\n";
    // Optionally, rethrow the exception or handle accordingly.
}
```

## Advanced

### Custom Client

This SDK is built to work with any HTTP client that implements the [PSR-18](https://www.php-fig.org/psr/psr-18/) `ClientInterface`.
By default, if no client is provided, the SDK will use `php-http/discovery` to find an installed HTTP client.
However, you can pass your own client that adheres to `ClientInterface`:

```php
use Brevo\Brevo;

// Pass any PSR-18 compatible HTTP client implementation.
// For example, using Guzzle:
$customClient = new \GuzzleHttp\Client([
    'timeout' => 5.0,
]);

$client = new Brevo(
    apiKey: 'xkeysib-xxx',
    options: ['client' => $customClient],
);

// Or using Symfony HttpClient:
// $customClient = (new \Symfony\Component\HttpClient\Psr18Client())
//     ->withOptions(['timeout' => 5.0]);
//
// $client = new Brevo(
//     apiKey: 'xkeysib-xxx',
//     options: ['client' => $customClient],
// );
```

### Retries

The SDK is instrumented with automatic retries with exponential backoff. A request will be retried as long
as the request is deemed retryable and the number of retry attempts has not grown larger than the configured
retry limit (default: 2).

A request is deemed retryable when any of the following HTTP status codes is returned:

- [408](https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/408) (Timeout)
- [429](https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/429) (Too Many Requests)
- [5XX](https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/500) (Internal Server Errors)

Use the `maxRetries` request option to configure this behavior.

```php
$response = $client->transactionalEmails->sendTransacEmail(
    ...,
    options: [
        'maxRetries' => 0 // Override maxRetries at the request level
    ]
);
```

### Timeouts

The SDK does not configure a default timeout. Unless you set one, the underlying HTTP client's default applies (Guzzle, for example, defaults to no timeout). Set an explicit `timeout` (in seconds) at the client or request level:

```php
// Client-level
$client = new Brevo('xkeysib-xxx', ['timeout' => 30.0]);

// Request-level (overrides client setting)
$response = $client->transactionalEmails->sendTransacEmail(
    ...,
    options: [
        'timeout' => 3.0
    ]
);
```

> Timeout forwarding is supported for Guzzle and Symfony HttpClient. Other PSR-18 clients ignore the `timeout` option.

### Logging

The SDK does not ship a built-in logger. Because the `client` option accepts any PSR-18 HTTP client, you can plug in **any PSR-3 logger** (Monolog, Symfony Logger, Laravel's `Log` facade) by wrapping that client with logging middleware. This keeps the SDK lean and lets you reuse the logger your application already configures.

```php
use Brevo\Brevo;
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\MessageFormatter;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$logger = new Logger('brevo');
$logger->pushHandler(new StreamHandler('php://stderr', Logger::DEBUG));

$stack = HandlerStack::create();
$stack->push(Middleware::log(
    $logger,
    new MessageFormatter('{method} {uri} → {code}')
));

$client = new Brevo('xkeysib-xxx', [
    'client' => new Client(['handler' => $stack, 'timeout' => 5.0]),
]);
```

Logging happens at the HTTP layer, so each SDK call produces one log line per HTTP request — **including retries**, which the SDK performs internally.

> **Warning**: The `api-key` header is sent on every request. If your message formatter includes request headers (`{req_headers}`), redact it before writing to disk or shipping to an external sink.

## Contributing

While we value open-source contributions to this SDK, this library is generated programmatically.
Additions made directly to this library would have to be moved over to our generation code,
otherwise they would be overwritten upon the next generated release. Feel free to open a PR as
a proof of concept, but know that we will not be able to merge it as-is. We suggest opening
an issue first to discuss with us!

On the other hand, contributions to the README are always very welcome!
