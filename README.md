# Brevo PHP SDK

![](banner.png)

[![fern shield](https://img.shields.io/badge/%F0%9F%8C%BF-Built%20with%20Fern-brightgreen)](https://buildwithfern.com?utm_source=github&utm_medium=github&utm_campaign=readme&utm_content=brevo-php)
![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)
[![Packagist Version](https://img.shields.io/packagist/v/getbrevo/brevo-php)](https://packagist.org/packages/getbrevo/brevo-php)
[![Packagist Downloads](https://img.shields.io/packagist/dm/getbrevo/brevo-php)](https://packagist.org/packages/getbrevo/brevo-php)

[Website](https://brevo.com) • [API Reference](https://developers.brevo.com) • [Support](mailto:support@brevo.com)

---

## Requirements

- PHP ^8.1
- `ext-json` (included in most PHP installations)

## Installation

```bash
composer require getbrevo/brevo-php
```

The SDK requires a PSR-18 HTTP client. Composer will prompt you to choose one if none is installed. Guzzle is recommended:

```bash
composer require getbrevo/brevo-php guzzlehttp/guzzle
```

## Quick Start

```php
<?php

require_once __DIR__ . '/vendor/autoload.php';

use Brevo\Brevo;
use Brevo\TransactionalEmails\Requests\SendTransacEmailRequest;
use Brevo\TransactionalEmails\Types\SendTransacEmailRequestSender;
use Brevo\TransactionalEmails\Types\SendTransacEmailRequestToItem;

$brevo = new Brevo('your-api-key');

$result = $brevo->transactionalEmails->sendTransacEmail(
    new SendTransacEmailRequest([
        'subject' => 'Hello',
        'textContent' => 'Hello world!',
        'sender' => new SendTransacEmailRequestSender([
            'name' => 'Sender',
            'email' => 'sender@example.com',
        ]),
        'to' => [
            new SendTransacEmailRequestToItem(['email' => 'recipient@example.com']),
        ],
    ])
);

echo 'Email sent: ' . $result->messageId . PHP_EOL;
```

---

## Configuration

```php
$brevo = new Brevo('your-api-key', [
    'timeout' => 30,      // 30 seconds (default)
    'maxRetries' => 3,    // Default: 2
]);
```

---

## Error Handling

The SDK throws `BrevoApiException` for non-2xx API responses. Use the status code to handle specific cases.

```php
use Brevo\Brevo;
use Brevo\Exceptions\BrevoApiException;
use Brevo\Exceptions\BrevoException;

try {
    $brevo->transactionalEmails->sendTransacEmail(...);
} catch (BrevoApiException $e) {
    $statusCode = $e->getCode();
    $body = $e->getBody();

    if ($statusCode === 401) {
        echo 'Invalid API key';
    } elseif ($statusCode === 429) {
        echo 'Rate limited. Check Retry-After header in response.';
    } else {
        echo "API Error {$statusCode}: " . $e->getMessage();
    }
} catch (BrevoException $e) {
    echo 'SDK Error: ' . $e->getMessage();
}
```

**Status codes:**
- `400` - Bad Request
- `401` - Unauthorized
- `403` - Forbidden
- `404` - Not Found
- `422` - Unprocessable Entity
- `429` - Too Many Requests
- `500+` - Internal Server Error

<details>
<summary>Exception properties</summary>

`BrevoApiException` provides:
- `getCode()`: HTTP status code
- `getMessage()`: Error message
- `getBody()`: Parsed error response body

</details>

---

## Retries

Automatic retries with exponential backoff are enabled by default (2 retries).

```php
// Client-level
$brevo = new Brevo('your-api-key', [
    'maxRetries' => 3,
]);

// Request-level
$brevo->transactionalEmails->sendTransacEmail($request, [
    'maxRetries' => 5,
]);
```

**Retryable status codes:** `408`, `429`, `500`, `502`, `503`, `504`

<details>
<summary>How retries work</summary>

- Exponential backoff: ~1s, ~2s, ~4s (with jitter)
- Respects `Retry-After` header for rate limits
- Can be disabled per request with `maxRetries: 0`

</details>

---

## Timeouts

Default timeout is 60 seconds. Configure at client or request level.

```php
// Client-level
$brevo = new Brevo('your-api-key', [
    'timeout' => 30,
]);

// Request-level
$brevo->transactionalEmails->sendTransacEmail($request, [
    'timeout' => 10,
]);
```

**Recommended values:**
- Standard API calls: `30-60s` (default)
- Quick operations: `10-15s`
- Bulk operations: `120-300s`
- Real-time: `5-10s`

---

## Request Options

### Additional Headers

```php
$brevo->transactionalEmails->sendTransacEmail($request, [
    'headers' => [
        'X-Custom-Header' => 'custom-value',
    ],
]);
```

### Query Parameters

Query parameters are passed via the request object:

```php
use Brevo\Contacts\Requests\GetContactsRequest;

$brevo->contacts->getContacts(new GetContactsRequest([
    'limit' => 50,
    'offset' => 0,
]));
```

---

## Custom HTTP Client

The SDK uses any PSR-18 compatible HTTP client. By default, it auto-discovers an installed client via `php-http/discovery`. Override with your own:

```php
use Brevo\Brevo;
use GuzzleHttp\Client;

$customClient = new Client([
    'timeout' => 5.0,
]);

$brevo = new Brevo('your-api-key', [
    'client' => $customClient,
]);
```

<details>
<summary>Common use cases</summary>

**Guzzle:**
```php
use GuzzleHttp\Client;

$brevo = new Brevo('your-api-key', [
    'client' => new Client(['timeout' => 5.0]),
]);
```

**Symfony HttpClient:**
```php
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpClient\Psr18Client;

$brevo = new Brevo('your-api-key', [
    'client' => new Psr18Client(HttpClient::create(['timeout' => 5.0])),
]);
```

</details>

---

## Binary Responses

The `getInboundEmailAttachment` method returns the raw file content as a string:

```php
$content = $brevo->inboundParsing->getInboundEmailAttachment($downloadToken);

// Save to file
file_put_contents('path/to/file', $content);
```

---

## Type Safety

All request and response types are strongly typed. Use the generated request classes:

```php
use Brevo\TransactionalEmails\Requests\SendTransacEmailRequest;
use Brevo\TransactionalEmails\Types\SendTransacEmailRequestSender;
use Brevo\TransactionalEmails\Types\SendTransacEmailRequestToItem;

$request = new SendTransacEmailRequest([
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
]);
```

---

## Runtime Compatibility

- PHP 8.1+
- Laravel
- Symfony
- Any framework or plain PHP with Composer

---

## PHP-specific Considerations

### API Key from Environment

Avoid hardcoding API keys. Use environment variables:

```php
$brevo = new Brevo($_ENV['BREVO_API_KEY'] ?? getenv('BREVO_API_KEY'));
```

In Laravel, use `config('services.brevo.api_key')`. In Symfony, use `$_ENV['BREVO_API_KEY']` or service parameters.

### Memory Limits

For large operations (bulk exports, large attachments), PHP's `memory_limit` may be exceeded. Increase it or process in chunks:

```php
ini_set('memory_limit', '256M');
// or process large responses in a streaming fashion
```

### Running Tests

```bash
composer install
./vendor/bin/phpunit
```

---

## Migration from v1.x

<details>
<summary>View migration guide</summary>

This version includes breaking changes:

**Key changes:**
- New client initialization
- Unified `Brevo` client with namespaced resources
- Standardized error handling
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

> [!WARNING]
> The legacy v1.x SDK will continue to receive critical security updates but no new features. We recommend migrating to v4.x.

---

## Contributing

This library is generated programmatically. Changes made directly to the library would be overwritten. Please open an issue first to discuss changes.

Contributions to this README are always welcome.

---

## Support

- [API Reference](https://developers.brevo.com)
- [GitHub Issues](https://github.com/getbrevo/brevo-php/issues)
- [Email Support](mailto:support@brevo.com)
