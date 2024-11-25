# Brevo\Client\DomainsApi

All URIs are relative to https://api.brevo.com/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**authenticateDomain()**](DomainsApi.md#authenticateDomain) | **PUT** /senders/domains/{domainName}/authenticate | Authenticate a domain |
| [**createDomain()**](DomainsApi.md#createDomain) | **POST** /senders/domains | Create a new domain |
| [**deleteDomain()**](DomainsApi.md#deleteDomain) | **DELETE** /senders/domains/{domainName} | Delete a domain |
| [**getDomainConfiguration()**](DomainsApi.md#getDomainConfiguration) | **GET** /senders/domains/{domainName} | Validate domain configuration |
| [**getDomains()**](DomainsApi.md#getDomains) | **GET** /senders/domains | Get the list of all your domains |


## `authenticateDomain()`

```php
authenticateDomain($domainName): \Brevo\Client\Models\AuthenticateDomainModel
```

Authenticate a domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = Brevo\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Brevo\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

// Configure API key authorization: partner-key
$config = Brevo\Client\Configuration::getDefaultConfiguration()->setApiKey('partner-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Brevo\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('partner-key', 'Bearer');


$apiInstance = new Brevo\Client\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domainName = 'domainName_example'; // string | Domain name

try {
    $result = $apiInstance->authenticateDomain($domainName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->authenticateDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domainName** | **string**| Domain name | |

### Return type

[**\Brevo\Client\Models\AuthenticateDomainModel**](../Model/AuthenticateDomainModel.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDomain()`

```php
createDomain($domain): \Brevo\Client\Models\CreateDomainModel
```

Create a new domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = Brevo\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Brevo\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

// Configure API key authorization: partner-key
$config = Brevo\Client\Configuration::getDefaultConfiguration()->setApiKey('partner-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Brevo\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('partner-key', 'Bearer');


$apiInstance = new Brevo\Client\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = new \Brevo\Client\Models\CreateDomain(); // \Brevo\Client\Models\CreateDomain | domain's name

try {
    $result = $apiInstance->createDomain($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->createDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | [**\Brevo\Client\Models\CreateDomain**](../Model/CreateDomain.md)| domain&#39;s name | [optional] |

### Return type

[**\Brevo\Client\Models\CreateDomainModel**](../Model/CreateDomainModel.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDomain()`

```php
deleteDomain($domainName)
```

Delete a domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = Brevo\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Brevo\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

// Configure API key authorization: partner-key
$config = Brevo\Client\Configuration::getDefaultConfiguration()->setApiKey('partner-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Brevo\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('partner-key', 'Bearer');


$apiInstance = new Brevo\Client\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domainName = 'domainName_example'; // string | Domain name

try {
    $apiInstance->deleteDomain($domainName);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->deleteDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domainName** | **string**| Domain name | |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDomainConfiguration()`

```php
getDomainConfiguration($domainName): \Brevo\Client\Models\GetDomainConfigurationModel
```

Validate domain configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = Brevo\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Brevo\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

// Configure API key authorization: partner-key
$config = Brevo\Client\Configuration::getDefaultConfiguration()->setApiKey('partner-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Brevo\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('partner-key', 'Bearer');


$apiInstance = new Brevo\Client\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domainName = 'domainName_example'; // string | Domain name

try {
    $result = $apiInstance->getDomainConfiguration($domainName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->getDomainConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domainName** | **string**| Domain name | |

### Return type

[**\Brevo\Client\Models\GetDomainConfigurationModel**](../Model/GetDomainConfigurationModel.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDomains()`

```php
getDomains(): \Brevo\Client\Models\GetDomainsList
```

Get the list of all your domains

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = Brevo\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Brevo\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

// Configure API key authorization: partner-key
$config = Brevo\Client\Configuration::getDefaultConfiguration()->setApiKey('partner-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Brevo\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('partner-key', 'Bearer');


$apiInstance = new Brevo\Client\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getDomains();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->getDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Brevo\Client\Models\GetDomainsList**](../Model/GetDomainsList.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
