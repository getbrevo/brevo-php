# Brevo\Client\TransactionalWhatsAppApi

All URIs are relative to https://api.brevo.com/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getWhatsappEventReport()**](TransactionalWhatsAppApi.md#getWhatsappEventReport) | **GET** /whatsapp/statistics/events | Get all your WhatsApp activity (unaggregated events) |
| [**sendWhatsappMessage()**](TransactionalWhatsAppApi.md#sendWhatsappMessage) | **POST** /whatsapp/sendMessage | Send a WhatsApp message |


## `getWhatsappEventReport()`

```php
getWhatsappEventReport($limit, $offset, $startDate, $endDate, $days, $contactNumber, $event, $sort): \Brevo\Client\Models\GetWhatsappEventReport
```

Get all your WhatsApp activity (unaggregated events)

This endpoint will show the unaggregated statistics for WhatsApp activity (30 days by default if `startDate` and `endDate` or `days` is not passed. The date range can not exceed 90 days)

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


$apiInstance = new Brevo\Client\Api\TransactionalWhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 2500; // int | Number limitation for the result returned
$offset = 0; // int | Beginning point in the list to retrieve from
$startDate = 'startDate_example'; // string | **Mandatory if endDate is used.** Starting date of the report (YYYY-MM-DD). Must be lower than equal to endDate
$endDate = 'endDate_example'; // string | **Mandatory if startDate is used.** Ending date of the report (YYYY-MM-DD). Must be greater than equal to startDate
$days = 56; // int | Number of days in the past including today (positive integer). _Not compatible with 'startDate' and 'endDate'_
$contactNumber = 'contactNumber_example'; // string | Filter results for specific contact (WhatsApp Number with country code. Example, 85264318721)
$event = 'event_example'; // string | Filter the report for a specific event type
$sort = 'desc'; // string | Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed

try {
    $result = $apiInstance->getWhatsappEventReport($limit, $offset, $startDate, $endDate, $days, $contactNumber, $event, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalWhatsAppApi->getWhatsappEventReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Number limitation for the result returned | [optional] [default to 2500] |
| **offset** | **int**| Beginning point in the list to retrieve from | [optional] [default to 0] |
| **startDate** | **string**| **Mandatory if endDate is used.** Starting date of the report (YYYY-MM-DD). Must be lower than equal to endDate | [optional] |
| **endDate** | **string**| **Mandatory if startDate is used.** Ending date of the report (YYYY-MM-DD). Must be greater than equal to startDate | [optional] |
| **days** | **int**| Number of days in the past including today (positive integer). _Not compatible with &#39;startDate&#39; and &#39;endDate&#39;_ | [optional] |
| **contactNumber** | **string**| Filter results for specific contact (WhatsApp Number with country code. Example, 85264318721) | [optional] |
| **event** | **string**| Filter the report for a specific event type | [optional] |
| **sort** | **string**| Sort the results in the ascending/descending order of record creation. Default order is **descending** if &#x60;sort&#x60; is not passed | [optional] [default to &#39;desc&#39;] |

### Return type

[**\Brevo\Client\Models\GetWhatsappEventReport**](../Model/GetWhatsappEventReport.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendWhatsappMessage()`

```php
sendWhatsappMessage($sendWhatsappMessageRequest): \Brevo\Client\Models\SendWhatsappMessage201Response
```

Send a WhatsApp message

This endpoint is used to send a WhatsApp message. <br/>(**The first message you send using the API must contain a Template ID. You must create a template on WhatsApp on the Brevo platform to fetch the Template ID.**)

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


$apiInstance = new Brevo\Client\Api\TransactionalWhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sendWhatsappMessageRequest = new \Brevo\Client\Models\SendWhatsappMessageRequest(); // \Brevo\Client\Models\SendWhatsappMessageRequest | Values to send WhatsApp message

try {
    $result = $apiInstance->sendWhatsappMessage($sendWhatsappMessageRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalWhatsAppApi->sendWhatsappMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sendWhatsappMessageRequest** | [**\Brevo\Client\Models\SendWhatsappMessageRequest**](../Model/SendWhatsappMessageRequest.md)| Values to send WhatsApp message | |

### Return type

[**\Brevo\Client\Models\SendWhatsappMessage201Response**](../Model/SendWhatsappMessage201Response.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
