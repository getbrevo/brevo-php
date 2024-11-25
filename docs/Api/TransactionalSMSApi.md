# Brevo\Client\TransactionalSMSApi

All URIs are relative to https://api.brevo.com/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getSmsEvents()**](TransactionalSMSApi.md#getSmsEvents) | **GET** /transactionalSMS/statistics/events | Get all your SMS activity (unaggregated events) |
| [**getTransacAggregatedSmsReport()**](TransactionalSMSApi.md#getTransacAggregatedSmsReport) | **GET** /transactionalSMS/statistics/aggregatedReport | Get your SMS activity aggregated over a period of time |
| [**getTransacSmsReport()**](TransactionalSMSApi.md#getTransacSmsReport) | **GET** /transactionalSMS/statistics/reports | Get your SMS activity aggregated per day |
| [**sendTransacSms()**](TransactionalSMSApi.md#sendTransacSms) | **POST** /transactionalSMS/sms | Send SMS message to a mobile number |


## `getSmsEvents()`

```php
getSmsEvents($limit, $startDate, $endDate, $offset, $days, $phoneNumber, $event, $tags, $sort): \Brevo\Client\Models\GetSmsEventReport
```

Get all your SMS activity (unaggregated events)

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


$apiInstance = new Brevo\Client\Api\TransactionalSMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 50; // int | Number of documents per page
$startDate = 'startDate_example'; // string | **Mandatory if endDate is used.** Starting date (YYYY-MM-DD) of the report
$endDate = 'endDate_example'; // string | **Mandatory if startDate is used.** Ending date (YYYY-MM-DD) of the report
$offset = 0; // int | Index of the first document of the page
$days = 56; // int | Number of days in the past including today (positive integer). **Not compatible with 'startDate' and 'endDate'**
$phoneNumber = 'phoneNumber_example'; // string | Filter the report for a specific phone number
$event = 'event_example'; // string | Filter the report for specific events
$tags = 'tags_example'; // string | Filter the report for specific tags passed as a serialized urlencoded array
$sort = 'desc'; // string | Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed

try {
    $result = $apiInstance->getSmsEvents($limit, $startDate, $endDate, $offset, $days, $phoneNumber, $event, $tags, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalSMSApi->getSmsEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Number of documents per page | [optional] [default to 50] |
| **startDate** | **string**| **Mandatory if endDate is used.** Starting date (YYYY-MM-DD) of the report | [optional] |
| **endDate** | **string**| **Mandatory if startDate is used.** Ending date (YYYY-MM-DD) of the report | [optional] |
| **offset** | **int**| Index of the first document of the page | [optional] [default to 0] |
| **days** | **int**| Number of days in the past including today (positive integer). **Not compatible with &#39;startDate&#39; and &#39;endDate&#39;** | [optional] |
| **phoneNumber** | **string**| Filter the report for a specific phone number | [optional] |
| **event** | **string**| Filter the report for specific events | [optional] |
| **tags** | **string**| Filter the report for specific tags passed as a serialized urlencoded array | [optional] |
| **sort** | **string**| Sort the results in the ascending/descending order of record creation. Default order is **descending** if &#x60;sort&#x60; is not passed | [optional] [default to &#39;desc&#39;] |

### Return type

[**\Brevo\Client\Models\GetSmsEventReport**](../Model/GetSmsEventReport.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransacAggregatedSmsReport()`

```php
getTransacAggregatedSmsReport($startDate, $endDate, $days, $tag): \Brevo\Client\Models\GetTransacAggregatedSmsReport
```

Get your SMS activity aggregated over a period of time

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


$apiInstance = new Brevo\Client\Api\TransactionalSMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$startDate = 'startDate_example'; // string | **Mandatory if endDate is used.** Starting date (YYYY-MM-DD) of the report
$endDate = 'endDate_example'; // string | **Mandatory if startDate is used.** Ending date (YYYY-MM-DD) of the report
$days = 56; // int | Number of days in the past including today (positive integer). **Not compatible with startDate and endDate**
$tag = 'tag_example'; // string | Filter on a tag

try {
    $result = $apiInstance->getTransacAggregatedSmsReport($startDate, $endDate, $days, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalSMSApi->getTransacAggregatedSmsReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startDate** | **string**| **Mandatory if endDate is used.** Starting date (YYYY-MM-DD) of the report | [optional] |
| **endDate** | **string**| **Mandatory if startDate is used.** Ending date (YYYY-MM-DD) of the report | [optional] |
| **days** | **int**| Number of days in the past including today (positive integer). **Not compatible with startDate and endDate** | [optional] |
| **tag** | **string**| Filter on a tag | [optional] |

### Return type

[**\Brevo\Client\Models\GetTransacAggregatedSmsReport**](../Model/GetTransacAggregatedSmsReport.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransacSmsReport()`

```php
getTransacSmsReport($startDate, $endDate, $days, $tag, $sort): \Brevo\Client\Models\GetTransacSmsReport
```

Get your SMS activity aggregated per day

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


$apiInstance = new Brevo\Client\Api\TransactionalSMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$startDate = 'startDate_example'; // string | **Mandatory if endDate is used.** Starting date (YYYY-MM-DD) of the report
$endDate = 'endDate_example'; // string | **Mandatory if startDate is used.** Ending date (YYYY-MM-DD) of the report
$days = 56; // int | Number of days in the past including today (positive integer). **Not compatible with 'startDate' and 'endDate'**
$tag = 'tag_example'; // string | Filter on a tag
$sort = 'desc'; // string | Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed

try {
    $result = $apiInstance->getTransacSmsReport($startDate, $endDate, $days, $tag, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalSMSApi->getTransacSmsReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startDate** | **string**| **Mandatory if endDate is used.** Starting date (YYYY-MM-DD) of the report | [optional] |
| **endDate** | **string**| **Mandatory if startDate is used.** Ending date (YYYY-MM-DD) of the report | [optional] |
| **days** | **int**| Number of days in the past including today (positive integer). **Not compatible with &#39;startDate&#39; and &#39;endDate&#39;** | [optional] |
| **tag** | **string**| Filter on a tag | [optional] |
| **sort** | **string**| Sort the results in the ascending/descending order of record creation. Default order is **descending** if &#x60;sort&#x60; is not passed | [optional] [default to &#39;desc&#39;] |

### Return type

[**\Brevo\Client\Models\GetTransacSmsReport**](../Model/GetTransacSmsReport.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendTransacSms()`

```php
sendTransacSms($sendTransacSms): \Brevo\Client\Models\SendSms
```

Send SMS message to a mobile number

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


$apiInstance = new Brevo\Client\Api\TransactionalSMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sendTransacSms = new \Brevo\Client\Models\SendTransacSms(); // \Brevo\Client\Models\SendTransacSms | Values to send a transactional SMS

try {
    $result = $apiInstance->sendTransacSms($sendTransacSms);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalSMSApi->sendTransacSms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sendTransacSms** | [**\Brevo\Client\Models\SendTransacSms**](../Model/SendTransacSms.md)| Values to send a transactional SMS | |

### Return type

[**\Brevo\Client\Models\SendSms**](../Model/SendSms.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
