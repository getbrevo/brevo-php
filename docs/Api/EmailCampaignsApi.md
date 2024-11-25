# Brevo\Client\EmailCampaignsApi

All URIs are relative to https://api.brevo.com/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createEmailCampaign()**](EmailCampaignsApi.md#createEmailCampaign) | **POST** /emailCampaigns | Create an email campaign |
| [**deleteEmailCampaign()**](EmailCampaignsApi.md#deleteEmailCampaign) | **DELETE** /emailCampaigns/{campaignId} | Delete an email campaign |
| [**emailExportRecipients()**](EmailCampaignsApi.md#emailExportRecipients) | **POST** /emailCampaigns/{campaignId}/exportRecipients | Export the recipients of an email campaign |
| [**getAbTestCampaignResult()**](EmailCampaignsApi.md#getAbTestCampaignResult) | **GET** /emailCampaigns/{campaignId}/abTestCampaignResult | Get an A/B test email campaign results |
| [**getEmailCampaign()**](EmailCampaignsApi.md#getEmailCampaign) | **GET** /emailCampaigns/{campaignId} | Get an email campaign report |
| [**getEmailCampaigns()**](EmailCampaignsApi.md#getEmailCampaigns) | **GET** /emailCampaigns | Return all your created email campaigns |
| [**getSharedTemplateUrl()**](EmailCampaignsApi.md#getSharedTemplateUrl) | **GET** /emailCampaigns/{campaignId}/sharedUrl | Get a shared template url |
| [**sendEmailCampaignNow()**](EmailCampaignsApi.md#sendEmailCampaignNow) | **POST** /emailCampaigns/{campaignId}/sendNow | Send an email campaign immediately, based on campaignId |
| [**sendReport()**](EmailCampaignsApi.md#sendReport) | **POST** /emailCampaigns/{campaignId}/sendReport | Send the report of a campaign |
| [**sendTestEmail()**](EmailCampaignsApi.md#sendTestEmail) | **POST** /emailCampaigns/{campaignId}/sendTest | Send an email campaign to your test list |
| [**updateCampaignStatus()**](EmailCampaignsApi.md#updateCampaignStatus) | **PUT** /emailCampaigns/{campaignId}/status | Update an email campaign status |
| [**updateEmailCampaign()**](EmailCampaignsApi.md#updateEmailCampaign) | **PUT** /emailCampaigns/{campaignId} | Update an email campaign |
| [**uploadImageToGallery()**](EmailCampaignsApi.md#uploadImageToGallery) | **POST** /emailCampaigns/images | Upload an image to your account&#39;s image gallery |


## `createEmailCampaign()`

```php
createEmailCampaign($createEmailCampaign): \Brevo\Client\Models\CreateModel
```

Create an email campaign

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


$apiInstance = new Brevo\Client\Api\EmailCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createEmailCampaign = new \Brevo\Client\Models\CreateEmailCampaign(); // \Brevo\Client\Models\CreateEmailCampaign | Values to create a campaign

try {
    $result = $apiInstance->createEmailCampaign($createEmailCampaign);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignsApi->createEmailCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createEmailCampaign** | [**\Brevo\Client\Models\CreateEmailCampaign**](../Model/CreateEmailCampaign.md)| Values to create a campaign | |

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

## `deleteEmailCampaign()`

```php
deleteEmailCampaign($campaignId)
```

Delete an email campaign

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


$apiInstance = new Brevo\Client\Api\EmailCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 56; // int | id of the campaign

try {
    $apiInstance->deleteEmailCampaign($campaignId);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignsApi->deleteEmailCampaign: ', $e->getMessage(), PHP_EOL;
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

## `emailExportRecipients()`

```php
emailExportRecipients($campaignId, $emailExportRecipients): \Brevo\Client\Models\CreatedProcessId
```

Export the recipients of an email campaign

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


$apiInstance = new Brevo\Client\Api\EmailCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 56; // int | Id of the campaign
$emailExportRecipients = new \Brevo\Client\Models\EmailExportRecipients(); // \Brevo\Client\Models\EmailExportRecipients | Values to send for a recipient export request

try {
    $result = $apiInstance->emailExportRecipients($campaignId, $emailExportRecipients);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignsApi->emailExportRecipients: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **int**| Id of the campaign | |
| **emailExportRecipients** | [**\Brevo\Client\Models\EmailExportRecipients**](../Model/EmailExportRecipients.md)| Values to send for a recipient export request | [optional] |

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

## `getAbTestCampaignResult()`

```php
getAbTestCampaignResult($campaignId): \Brevo\Client\Models\AbTestCampaignResult
```

Get an A/B test email campaign results

Obtain winning version of an A/B test email campaign

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


$apiInstance = new Brevo\Client\Api\EmailCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 56; // int | Id of the A/B test campaign

try {
    $result = $apiInstance->getAbTestCampaignResult($campaignId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignsApi->getAbTestCampaignResult: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **int**| Id of the A/B test campaign | |

### Return type

[**\Brevo\Client\Models\AbTestCampaignResult**](../Model/AbTestCampaignResult.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailCampaign()`

```php
getEmailCampaign($campaignId, $statistics): \Brevo\Client\Models\GetEmailCampaign
```

Get an email campaign report

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


$apiInstance = new Brevo\Client\Api\EmailCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 56; // int | Id of the campaign
$statistics = 'statistics_example'; // string | Filter on the type of statistics required. Example **globalStats** value will only fetch globalStats info of the campaign in returned response.

try {
    $result = $apiInstance->getEmailCampaign($campaignId, $statistics);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignsApi->getEmailCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **int**| Id of the campaign | |
| **statistics** | **string**| Filter on the type of statistics required. Example **globalStats** value will only fetch globalStats info of the campaign in returned response. | [optional] |

### Return type

[**\Brevo\Client\Models\GetEmailCampaign**](../Model/GetEmailCampaign.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailCampaigns()`

```php
getEmailCampaigns($type, $status, $statistics, $startDate, $endDate, $limit, $offset, $sort, $excludeHtmlContent): \Brevo\Client\Models\GetEmailCampaigns
```

Return all your created email campaigns

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


$apiInstance = new Brevo\Client\Api\EmailCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | Filter on the type of the campaigns
$status = 'status_example'; // string | Filter on the status of the campaign
$statistics = 'statistics_example'; // string | Filter on the type of statistics required. Example **globalStats** value will only fetch globalStats info of the campaign in returned response.This option only returns data for events occurred in the last 6 months.For older campaigns, it’s advisable to use the **Get Campaign Report** endpoint.
$startDate = 'startDate_example'; // string | **Mandatory if endDate is used**. Starting (urlencoded) UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) to filter the sent email campaigns. **Prefer to pass your timezone in date-time format for accurate result** ( only available if either 'status' not passed and if passed is set to 'sent' )
$endDate = 'endDate_example'; // string | **Mandatory if startDate is used**. Ending (urlencoded) UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) to filter the sent email campaigns. **Prefer to pass your timezone in date-time format for accurate result** ( only available if either 'status' not passed and if passed is set to 'sent' )
$limit = 50; // int | Number of documents per page
$offset = 0; // int | Index of the first document in the page
$sort = 'desc'; // string | Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed
$excludeHtmlContent = True; // bool | Use this flag to exclude htmlContent from the response body. If set to **true**, htmlContent field will be returned as empty string in the response body

try {
    $result = $apiInstance->getEmailCampaigns($type, $status, $statistics, $startDate, $endDate, $limit, $offset, $sort, $excludeHtmlContent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignsApi->getEmailCampaigns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| Filter on the type of the campaigns | [optional] |
| **status** | **string**| Filter on the status of the campaign | [optional] |
| **statistics** | **string**| Filter on the type of statistics required. Example **globalStats** value will only fetch globalStats info of the campaign in returned response.This option only returns data for events occurred in the last 6 months.For older campaigns, it’s advisable to use the **Get Campaign Report** endpoint. | [optional] |
| **startDate** | **string**| **Mandatory if endDate is used**. Starting (urlencoded) UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) to filter the sent email campaigns. **Prefer to pass your timezone in date-time format for accurate result** ( only available if either &#39;status&#39; not passed and if passed is set to &#39;sent&#39; ) | [optional] |
| **endDate** | **string**| **Mandatory if startDate is used**. Ending (urlencoded) UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) to filter the sent email campaigns. **Prefer to pass your timezone in date-time format for accurate result** ( only available if either &#39;status&#39; not passed and if passed is set to &#39;sent&#39; ) | [optional] |
| **limit** | **int**| Number of documents per page | [optional] [default to 50] |
| **offset** | **int**| Index of the first document in the page | [optional] [default to 0] |
| **sort** | **string**| Sort the results in the ascending/descending order of record creation. Default order is **descending** if &#x60;sort&#x60; is not passed | [optional] [default to &#39;desc&#39;] |
| **excludeHtmlContent** | **bool**| Use this flag to exclude htmlContent from the response body. If set to **true**, htmlContent field will be returned as empty string in the response body | [optional] |

### Return type

[**\Brevo\Client\Models\GetEmailCampaigns**](../Model/GetEmailCampaigns.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSharedTemplateUrl()`

```php
getSharedTemplateUrl($campaignId): \Brevo\Client\Models\GetSharedTemplateUrl
```

Get a shared template url

Get a unique URL to share & import an email template from one Brevo account to another.

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


$apiInstance = new Brevo\Client\Api\EmailCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 56; // int | Id of the campaign or template

try {
    $result = $apiInstance->getSharedTemplateUrl($campaignId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignsApi->getSharedTemplateUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **int**| Id of the campaign or template | |

### Return type

[**\Brevo\Client\Models\GetSharedTemplateUrl**](../Model/GetSharedTemplateUrl.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendEmailCampaignNow()`

```php
sendEmailCampaignNow($campaignId)
```

Send an email campaign immediately, based on campaignId

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


$apiInstance = new Brevo\Client\Api\EmailCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 56; // int | Id of the campaign

try {
    $apiInstance->sendEmailCampaignNow($campaignId);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignsApi->sendEmailCampaignNow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **int**| Id of the campaign | |

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

## `sendReport()`

```php
sendReport($campaignId, $sendReport)
```

Send the report of a campaign

A PDF will be sent to the specified email addresses

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


$apiInstance = new Brevo\Client\Api\EmailCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 56; // int | Id of the campaign
$sendReport = new \Brevo\Client\Models\SendReport(); // \Brevo\Client\Models\SendReport | Values for send a report

try {
    $apiInstance->sendReport($campaignId, $sendReport);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignsApi->sendReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **int**| Id of the campaign | |
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

## `sendTestEmail()`

```php
sendTestEmail($campaignId, $sendTestEmail)
```

Send an email campaign to your test list

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


$apiInstance = new Brevo\Client\Api\EmailCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 56; // int | Id of the campaign
$sendTestEmail = new \Brevo\Client\Models\SendTestEmail(); // \Brevo\Client\Models\SendTestEmail

try {
    $apiInstance->sendTestEmail($campaignId, $sendTestEmail);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignsApi->sendTestEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **int**| Id of the campaign | |
| **sendTestEmail** | [**\Brevo\Client\Models\SendTestEmail**](../Model/SendTestEmail.md)|  | |

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

## `updateCampaignStatus()`

```php
updateCampaignStatus($campaignId, $updateCampaignStatus)
```

Update an email campaign status

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


$apiInstance = new Brevo\Client\Api\EmailCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 56; // int | Id of the campaign
$updateCampaignStatus = new \Brevo\Client\Models\UpdateCampaignStatus(); // \Brevo\Client\Models\UpdateCampaignStatus | Status of the campaign

try {
    $apiInstance->updateCampaignStatus($campaignId, $updateCampaignStatus);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignsApi->updateCampaignStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **int**| Id of the campaign | |
| **updateCampaignStatus** | [**\Brevo\Client\Models\UpdateCampaignStatus**](../Model/UpdateCampaignStatus.md)| Status of the campaign | |

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

## `updateEmailCampaign()`

```php
updateEmailCampaign($campaignId, $updateEmailCampaign)
```

Update an email campaign

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


$apiInstance = new Brevo\Client\Api\EmailCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 56; // int | Id of the campaign
$updateEmailCampaign = new \Brevo\Client\Models\UpdateEmailCampaign(); // \Brevo\Client\Models\UpdateEmailCampaign | Values to update a campaign

try {
    $apiInstance->updateEmailCampaign($campaignId, $updateEmailCampaign);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignsApi->updateEmailCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **int**| Id of the campaign | |
| **updateEmailCampaign** | [**\Brevo\Client\Models\UpdateEmailCampaign**](../Model/UpdateEmailCampaign.md)| Values to update a campaign | |

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

## `uploadImageToGallery()`

```php
uploadImageToGallery($uploadImageToGallery): \Brevo\Client\Models\UploadImageModel
```

Upload an image to your account's image gallery

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


$apiInstance = new Brevo\Client\Api\EmailCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uploadImageToGallery = new \Brevo\Client\Models\UploadImageToGallery(); // \Brevo\Client\Models\UploadImageToGallery | Parameters to upload an image

try {
    $result = $apiInstance->uploadImageToGallery($uploadImageToGallery);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignsApi->uploadImageToGallery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uploadImageToGallery** | [**\Brevo\Client\Models\UploadImageToGallery**](../Model/UploadImageToGallery.md)| Parameters to upload an image | |

### Return type

[**\Brevo\Client\Models\UploadImageModel**](../Model/UploadImageModel.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
