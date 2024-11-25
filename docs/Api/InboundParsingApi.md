# Brevo\Client\InboundParsingApi

All URIs are relative to https://api.brevo.com/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getInboundEmailAttachment()**](InboundParsingApi.md#getInboundEmailAttachment) | **GET** /inbound/attachments/{downloadToken} | Retrieve inbound attachment with download token. |
| [**getInboundEmailEvents()**](InboundParsingApi.md#getInboundEmailEvents) | **GET** /inbound/events | Get the list of all the events for the received emails. |
| [**getInboundEmailEventsByUuid()**](InboundParsingApi.md#getInboundEmailEventsByUuid) | **GET** /inbound/events/{uuid} | Fetch all events history for one particular received email. |


## `getInboundEmailAttachment()`

```php
getInboundEmailAttachment($downloadToken): \SplFileObject
```

Retrieve inbound attachment with download token.

This endpoint will retrieve inbound attachment with download token.

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


$apiInstance = new Brevo\Client\Api\InboundParsingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$downloadToken = 'downloadToken_example'; // string | Token to fetch a particular attachment

try {
    $result = $apiInstance->getInboundEmailAttachment($downloadToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundParsingApi->getInboundEmailAttachment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **downloadToken** | **string**| Token to fetch a particular attachment | |

### Return type

**\SplFileObject**

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInboundEmailEvents()`

```php
getInboundEmailEvents($sender, $startDate, $endDate, $limit, $offset, $sort): \Brevo\Client\Models\GetInboundEmailEvents
```

Get the list of all the events for the received emails.

This endpoint will show the list of all the events for the received emails.

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


$apiInstance = new Brevo\Client\Api\InboundParsingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender = 'sender_example'; // string | Email address of the sender.
$startDate = 'startDate_example'; // string | Mandatory if endDate is used. Starting date (YYYY-MM-DD or YYYY-MM-DDTHH:mm:ss.SSSZ) from which you want to fetch the list. Maximum time period that can be selected is one month.
$endDate = 'endDate_example'; // string | Mandatory if startDate is used. Ending date (YYYY-MM-DD or YYYY-MM-DDTHH:mm:ss.SSSZ) till which you want to fetch the list. Maximum time period that can be selected is one month.
$limit = 100; // int | Number of documents returned per page
$offset = 0; // int | Index of the first document on the page
$sort = 'desc'; // string | Sort the results in the ascending/descending order of record creation

try {
    $result = $apiInstance->getInboundEmailEvents($sender, $startDate, $endDate, $limit, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundParsingApi->getInboundEmailEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender** | **string**| Email address of the sender. | [optional] |
| **startDate** | **string**| Mandatory if endDate is used. Starting date (YYYY-MM-DD or YYYY-MM-DDTHH:mm:ss.SSSZ) from which you want to fetch the list. Maximum time period that can be selected is one month. | [optional] |
| **endDate** | **string**| Mandatory if startDate is used. Ending date (YYYY-MM-DD or YYYY-MM-DDTHH:mm:ss.SSSZ) till which you want to fetch the list. Maximum time period that can be selected is one month. | [optional] |
| **limit** | **int**| Number of documents returned per page | [optional] [default to 100] |
| **offset** | **int**| Index of the first document on the page | [optional] [default to 0] |
| **sort** | **string**| Sort the results in the ascending/descending order of record creation | [optional] [default to &#39;desc&#39;] |

### Return type

[**\Brevo\Client\Models\GetInboundEmailEvents**](../Model/GetInboundEmailEvents.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInboundEmailEventsByUuid()`

```php
getInboundEmailEventsByUuid($uuid): \Brevo\Client\Models\GetInboundEmailEventsByUuid
```

Fetch all events history for one particular received email.

This endpoint will show the list of all events history for one particular received email.

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


$apiInstance = new Brevo\Client\Api\InboundParsingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID to fetch events specific to recieved email

try {
    $result = $apiInstance->getInboundEmailEventsByUuid($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundParsingApi->getInboundEmailEventsByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID to fetch events specific to recieved email | |

### Return type

[**\Brevo\Client\Models\GetInboundEmailEventsByUuid**](../Model/GetInboundEmailEventsByUuid.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
