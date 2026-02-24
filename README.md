# Brevo PHP Library

![](https://raw.githubusercontent.com/getbrevo/brevo-node/v4/banner.png)

[![fern shield](https://img.shields.io/badge/%F0%9F%8C%BF-Built%20with%20Fern-brightgreen)](https://buildwithfern.com?utm_source=github&utm_medium=github&utm_campaign=readme&utm_source=https%3A%2F%2Fgithub.com%2Fmourraille%2Ffern-sdk)
[![php shield](https://img.shields.io/badge/php-packagist-pink)](https://packagist.org/packages/getbrevo/brevo-php)

Official SDK for the Brevo API.

## Table of Contents

- [Documentation](#documentation)
- [Requirements](#requirements)
- [Installation](#installation)
- [Migration From V1X](#migration-from-v1x)
- [Usage](#usage)
- [Exception Handling](#exception-handling)
- [Advanced](#advanced)
  - [Custom Client](#custom-client)
  - [Retries](#retries)
  - [Timeouts](#timeouts)
- [Contributing](#contributing)

## Documentation

API reference documentation is available [here](https://developers.brevo.com).

## Requirements

This SDK requires PHP ^8.1.

## Installation

```sh
composer require getbrevo/brevo-php
```

## Migration from v1.x

> **Warning**: The legacy v1.x SDK will continue to receive critical security updates but no new features. We recommend migrating to v4.x.

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

**v4.x:**
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

$client = new Brevo(options: [
    'client' => $customClient
]);

// Or using Symfony HttpClient:
// $customClient = (new \Symfony\Component\HttpClient\Psr18Client())
//     ->withOptions(['timeout' => 5.0]);
//
// $client = new Brevo(options: [
//     'client' => $customClient
// ]);
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

The SDK defaults to a 30 second timeout. Use the `timeout` option to configure this behavior.

```php
$response = $client->transactionalEmails->sendTransacEmail(
    ...,
    options: [
        'timeout' => 3.0 // Override timeout at the request level
    ]
);
```

## Contributing

While we value open-source contributions to this SDK, this library is generated programmatically.
Additions made directly to this library would have to be moved over to our generation code,
otherwise they would be overwritten upon the next generated release. Feel free to open a PR as
a proof of concept, but know that we will not be able to merge it as-is. We suggest opening
an issue first to discuss with us!

On the other hand, contributions to the README are always very welcome!
