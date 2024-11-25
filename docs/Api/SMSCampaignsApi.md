# Brevo\Client\SMSCampaignsApi

All URIs are relative to https://api.brevo.com/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSmsCampaign()**](SMSCampaignsApi.md#createSmsCampaign) | **POST** /smsCampaigns | Creates an SMS campaign |
| [**deleteSmsCampaign()**](SMSCampaignsApi.md#deleteSmsCampaign) | **DELETE** /smsCampaigns/{campaignId} | Delete an SMS campaign |
| [**getSmsCampaign()**](SMSCampaignsApi.md#getSmsCampaign) | **GET** /smsCampaigns/{campaignId} | Get an SMS campaign |
| [**getSmsCampaigns()**](SMSCampaignsApi.md#getSmsCampaigns) | **GET** /smsCampaigns | Returns the information for all your created SMS campaigns |
| [**requestSmsRecipientExport()**](SMSCampaignsApi.md#requestSmsRecipientExport) | **POST** /smsCampaigns/{campaignId}/exportRecipients | Export an SMS campaign&#39;s recipients |
| [**sendSmsCampaignNow()**](SMSCampaignsApi.md#sendSmsCampaignNow) | **POST** /smsCampaigns/{campaignId}/sendNow | Send your SMS campaign immediately |
| [**sendSmsReport()**](SMSCampaignsApi.md#sendSmsReport) | **POST** /smsCampaigns/{campaignId}/sendReport | Send an SMS campaign&#39;s report |
| [**sendTestSms()**](SMSCampaignsApi.md#sendTestSms) | **POST** /smsCampaigns/{campaignId}/sendTest | Send a test SMS campaign |
| [**updateSmsCampaign()**](SMSCampaignsApi.md#updateSmsCampaign) | **PUT** /smsCampaigns/{campaignId} | Update an SMS campaign |
| [**updateSmsCampaignStatus()**](SMSCampaignsApi.md#updateSmsCampaignStatus) | **PUT** /smsCampaigns/{campaignId}/status | Update a campaign&#39;s status |


## `createSmsCampaign()`

```php
createSmsCampaign($createSmsCampaign): \Brevo\Client\Models\CreateModel
```

Creates an SMS campaign

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


$apiInstance = new Brevo\Client\Api\SMSCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createSmsCampaign = new \Brevo\Client\Models\CreateSmsCampaign(); // \Brevo\Client\Models\CreateSmsCampaign | Values to create an SMS Campaign

try {
    $result = $apiInstance->createSmsCampaign($createSmsCampaign);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSCampaignsApi->createSmsCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createSmsCampaign** | [**\Brevo\Client\Models\CreateSmsCampaign**](../Model/CreateSmsCampaign.md)| Values to create an SMS Campaign | |

### Return type

[**\Brevo\Client\Models\CreateModel**](../Model/CreateModel.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSmsCampaign()`

```php
deleteSmsCampaign($campaignId)
```

Delete an SMS campaign

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


$apiInstance = new Brevo\Client\Api\SMSCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 56; // int | id of the SMS campaign

try {
    $apiInstance->deleteSmsCampaign($campaignId);
} catch (Exception $e) {
    echo 'Exception when calling SMSCampaignsApi->deleteSmsCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **int**| id of the SMS campaign | |

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

## `getSmsCampaign()`

```php
getSmsCampaign($campaignId): \Brevo\Client\Models\GetSmsCampaign
```

Get an SMS campaign

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


$apiInstance = new Brevo\Client\Api\SMSCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 56; // int | id of the SMS campaign

try {
    $result = $apiInstance->getSmsCampaign($campaignId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSCampaignsApi->getSmsCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **int**| id of the SMS campaign | |

### Return type

[**\Brevo\Client\Models\GetSmsCampaign**](../Model/GetSmsCampaign.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSmsCampaigns()`

```php
getSmsCampaigns($status, $startDate, $endDate, $limit, $offset, $sort): \Brevo\Client\Models\GetSmsCampaigns
```

Returns the information for all your created SMS campaigns

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


$apiInstance = new Brevo\Client\Api\SMSCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = 'status_example'; // string | Status of campaign.
$startDate = 'startDate_example'; // string | **Mandatory if endDate is used.** Starting (urlencoded) UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) to filter the sent sms campaigns. **Prefer to pass your timezone in date-time format for accurate result** ( only available if either 'status' not passed and if passed is set to 'sent' )
$endDate = 'endDate_example'; // string | **Mandatory if startDate is used.** Ending (urlencoded) UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) to filter the sent sms campaigns. **Prefer to pass your timezone in date-time format for accurate result** ( only available if either 'status' not passed and if passed is set to 'sent' )
$limit = 500; // int | Number limitation for the result returned
$offset = 0; // int | Beginning point in the list to retrieve from.
$sort = 'desc'; // string | Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed

try {
    $result = $apiInstance->getSmsCampaigns($status, $startDate, $endDate, $limit, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSCampaignsApi->getSmsCampaigns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **status** | **string**| Status of campaign. | [optional] |
| **startDate** | **string**| **Mandatory if endDate is used.** Starting (urlencoded) UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) to filter the sent sms campaigns. **Prefer to pass your timezone in date-time format for accurate result** ( only available if either &#39;status&#39; not passed and if passed is set to &#39;sent&#39; ) | [optional] |
| **endDate** | **string**| **Mandatory if startDate is used.** Ending (urlencoded) UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) to filter the sent sms campaigns. **Prefer to pass your timezone in date-time format for accurate result** ( only available if either &#39;status&#39; not passed and if passed is set to &#39;sent&#39; ) | [optional] |
| **limit** | **int**| Number limitation for the result returned | [optional] [default to 500] |
| **offset** | **int**| Beginning point in the list to retrieve from. | [optional] [default to 0] |
| **sort** | **string**| Sort the results in the ascending/descending order of record creation. Default order is **descending** if &#x60;sort&#x60; is not passed | [optional] [default to &#39;desc&#39;] |

### Return type

[**\Brevo\Client\Models\GetSmsCampaigns**](../Model/GetSmsCampaigns.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requestSmsRecipientExport()`

```php
requestSmsRecipientExport($campaignId, $recipientExport): \Brevo\Client\Models\CreatedProcessId
```

Export an SMS campaign's recipients

It returns the background process ID which on completion calls the notify URL that you have set in the input.

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


$apiInstance = new Brevo\Client\Api\SMSCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 56; // int | id of the campaign
$recipientExport = new \Brevo\Client\Models\RequestSmsRecipientExport(); // \Brevo\Client\Models\RequestSmsRecipientExport | Values to send for a recipient export request

try {
    $result = $apiInstance->requestSmsRecipientExport($campaignId, $recipientExport);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSCampaignsApi->requestSmsRecipientExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **int**| id of the campaign | |
| **recipientExport** | [**\Brevo\Client\Models\RequestSmsRecipientExport**](../Model/RequestSmsRecipientExport.md)| Values to send for a recipient export request | [optional] |

### Return type

[**\Brevo\Client\Models\CreatedProcessId**](../Model/CreatedProcessId.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendSmsCampaignNow()`

```php
sendSmsCampaignNow($campaignId)
```

Send your SMS campaign immediately

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


$apiInstance = new Brevo\Client\Api\SMSCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 56; // int | id of the campaign

try {
    $apiInstance->sendSmsCampaignNow($campaignId);
} catch (Exception $e) {
    echo 'Exception when calling SMSCampaignsApi->sendSmsCampaignNow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **int**| id of the campaign | |

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

## `sendSmsReport()`

```php
sendSmsReport($campaignId, $sendReport)
```

Send an SMS campaign's report

Send report of Sent and Archived campaign, to the specified email addresses, with respective data and a pdf attachment in detail.

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


$apiInstance = new Brevo\Client\Api\SMSCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 56; // int | id of the campaign
$sendReport = new \Brevo\Client\Models\SendReport(); // \Brevo\Client\Models\SendReport | Values for send a report

try {
    $apiInstance->sendSmsReport($campaignId, $sendReport);
} catch (Exception $e) {
    echo 'Exception when calling SMSCampaignsApi->sendSmsReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **int**| id of the campaign | |
| **sendReport** | [**\Brevo\Client\Models\SendReport**](../Model/SendReport.md)| Values for send a report | |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendTestSms()`

```php
sendTestSms($campaignId, $sendTestSms)
```

Send a test SMS campaign

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


$apiInstance = new Brevo\Client\Api\SMSCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 56; // int | Id of the SMS campaign
$sendTestSms = new \Brevo\Client\Models\SendTestSms(); // \Brevo\Client\Models\SendTestSms | Mobile number of the recipient with the country code. This number **must belong to one of your contacts in Brevo account and must not be blacklisted**

try {
    $apiInstance->sendTestSms($campaignId, $sendTestSms);
} catch (Exception $e) {
    echo 'Exception when calling SMSCampaignsApi->sendTestSms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **int**| Id of the SMS campaign | |
| **sendTestSms** | [**\Brevo\Client\Models\SendTestSms**](../Model/SendTestSms.md)| Mobile number of the recipient with the country code. This number **must belong to one of your contacts in Brevo account and must not be blacklisted** | |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSmsCampaign()`

```php
updateSmsCampaign($campaignId, $updateSmsCampaign)
```

Update an SMS campaign

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


$apiInstance = new Brevo\Client\Api\SMSCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 56; // int | id of the SMS campaign
$updateSmsCampaign = new \Brevo\Client\Models\UpdateSmsCampaign(); // \Brevo\Client\Models\UpdateSmsCampaign | Values to update an SMS Campaign

try {
    $apiInstance->updateSmsCampaign($campaignId, $updateSmsCampaign);
} catch (Exception $e) {
    echo 'Exception when calling SMSCampaignsApi->updateSmsCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **int**| id of the SMS campaign | |
| **updateSmsCampaign** | [**\Brevo\Client\Models\UpdateSmsCampaign**](../Model/UpdateSmsCampaign.md)| Values to update an SMS Campaign | |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSmsCampaignStatus()`

```php
updateSmsCampaignStatus($campaignId, $status)
```

Update a campaign's status

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


$apiInstance = new Brevo\Client\Api\SMSCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 56; // int | id of the campaign
$status = new \Brevo\Client\Models\UpdateCampaignStatus(); // \Brevo\Client\Models\UpdateCampaignStatus | Status of the campaign.

try {
    $apiInstance->updateSmsCampaignStatus($campaignId, $status);
} catch (Exception $e) {
    echo 'Exception when calling SMSCampaignsApi->updateSmsCampaignStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **int**| id of the campaign | |
| **status** | [**\Brevo\Client\Models\UpdateCampaignStatus**](../Model/UpdateCampaignStatus.md)| Status of the campaign. | |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
