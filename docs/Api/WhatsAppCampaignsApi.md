# Brevo\Client\WhatsAppCampaignsApi

All URIs are relative to https://api.brevo.com/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createWhatsAppCampaign()**](WhatsAppCampaignsApi.md#createWhatsAppCampaign) | **POST** /whatsappCampaigns | Create and Send a WhatsApp campaign |
| [**createWhatsAppTemplate()**](WhatsAppCampaignsApi.md#createWhatsAppTemplate) | **POST** /whatsappCampaigns/template | Create a WhatsApp template |
| [**deleteWhatsAppCampaign()**](WhatsAppCampaignsApi.md#deleteWhatsAppCampaign) | **DELETE** /whatsappCampaigns/{campaignId} | Delete a WhatsApp campaign |
| [**getWhatsAppCampaign()**](WhatsAppCampaignsApi.md#getWhatsAppCampaign) | **GET** /whatsappCampaigns/{campaignId} | Get a WhatsApp campaign |
| [**getWhatsAppCampaigns()**](WhatsAppCampaignsApi.md#getWhatsAppCampaigns) | **GET** /whatsappCampaigns | Return all your created WhatsApp campaigns |
| [**getWhatsAppConfig()**](WhatsAppCampaignsApi.md#getWhatsAppConfig) | **GET** /whatsappCampaigns/config | Get your WhatsApp API account information |
| [**getWhatsAppTemplates()**](WhatsAppCampaignsApi.md#getWhatsAppTemplates) | **GET** /whatsappCampaigns/template-list | Return all your created WhatsApp templates |
| [**sendWhatsAppTemplateApproval()**](WhatsAppCampaignsApi.md#sendWhatsAppTemplateApproval) | **POST** /whatsappCampaigns/template/approval/{templateId} | Send your WhatsApp template for approval |
| [**updateWhatsAppCampaign()**](WhatsAppCampaignsApi.md#updateWhatsAppCampaign) | **PUT** /whatsappCampaigns/{campaignId} | Update a WhatsApp campaign |


## `createWhatsAppCampaign()`

```php
createWhatsAppCampaign($createWhatsAppCampaign): \Brevo\Client\Models\CreateModel
```

Create and Send a WhatsApp campaign

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


$apiInstance = new Brevo\Client\Api\WhatsAppCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createWhatsAppCampaign = new \Brevo\Client\Models\CreateWhatsAppCampaign(); // \Brevo\Client\Models\CreateWhatsAppCampaign | Values to create a WhatsApp Campaign

try {
    $result = $apiInstance->createWhatsAppCampaign($createWhatsAppCampaign);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppCampaignsApi->createWhatsAppCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createWhatsAppCampaign** | [**\Brevo\Client\Models\CreateWhatsAppCampaign**](../Model/CreateWhatsAppCampaign.md)| Values to create a WhatsApp Campaign | |

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

## `createWhatsAppTemplate()`

```php
createWhatsAppTemplate($createWhatsAppTemplate): \Brevo\Client\Models\CreateModel
```

Create a WhatsApp template

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


$apiInstance = new Brevo\Client\Api\WhatsAppCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createWhatsAppTemplate = new \Brevo\Client\Models\CreateWhatsAppTemplate(); // \Brevo\Client\Models\CreateWhatsAppTemplate | Values to create a WhatsApp template

try {
    $result = $apiInstance->createWhatsAppTemplate($createWhatsAppTemplate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppCampaignsApi->createWhatsAppTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createWhatsAppTemplate** | [**\Brevo\Client\Models\CreateWhatsAppTemplate**](../Model/CreateWhatsAppTemplate.md)| Values to create a WhatsApp template | |

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

## `deleteWhatsAppCampaign()`

```php
deleteWhatsAppCampaign($campaignId)
```

Delete a WhatsApp campaign

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


$apiInstance = new Brevo\Client\Api\WhatsAppCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 56; // int | id of the campaign

try {
    $apiInstance->deleteWhatsAppCampaign($campaignId);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppCampaignsApi->deleteWhatsAppCampaign: ', $e->getMessage(), PHP_EOL;
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

## `getWhatsAppCampaign()`

```php
getWhatsAppCampaign($campaignId): \Brevo\Client\Models\GetWhatsappCampaignOverview
```

Get a WhatsApp campaign

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


$apiInstance = new Brevo\Client\Api\WhatsAppCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 56; // int | Id of the campaign

try {
    $result = $apiInstance->getWhatsAppCampaign($campaignId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppCampaignsApi->getWhatsAppCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **int**| Id of the campaign | |

### Return type

[**\Brevo\Client\Models\GetWhatsappCampaignOverview**](../Model/GetWhatsappCampaignOverview.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWhatsAppCampaigns()`

```php
getWhatsAppCampaigns($startDate, $endDate, $limit, $offset, $sort): \Brevo\Client\Models\GetWhatsappCampaigns
```

Return all your created WhatsApp campaigns

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


$apiInstance = new Brevo\Client\Api\WhatsAppCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$startDate = 'startDate_example'; // string | **Mandatory if endDate is used**. Starting (urlencoded) UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) to filter the WhatsApp campaigns created. **Prefer to pass your timezone in date-time format for accurate result**
$endDate = 'endDate_example'; // string | **Mandatory if startDate is used**. Ending (urlencoded) UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) to filter the WhatsApp campaigns created. **Prefer to pass your timezone in date-time format for accurate result**
$limit = 50; // int | Number of documents per page
$offset = 0; // int | Index of the first document in the page
$sort = 'desc'; // string | Sort the results in the ascending/descending order of record modification. Default order is **descending** if `sort` is not passed

try {
    $result = $apiInstance->getWhatsAppCampaigns($startDate, $endDate, $limit, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppCampaignsApi->getWhatsAppCampaigns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startDate** | **string**| **Mandatory if endDate is used**. Starting (urlencoded) UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) to filter the WhatsApp campaigns created. **Prefer to pass your timezone in date-time format for accurate result** | [optional] |
| **endDate** | **string**| **Mandatory if startDate is used**. Ending (urlencoded) UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) to filter the WhatsApp campaigns created. **Prefer to pass your timezone in date-time format for accurate result** | [optional] |
| **limit** | **int**| Number of documents per page | [optional] [default to 50] |
| **offset** | **int**| Index of the first document in the page | [optional] [default to 0] |
| **sort** | **string**| Sort the results in the ascending/descending order of record modification. Default order is **descending** if &#x60;sort&#x60; is not passed | [optional] [default to &#39;desc&#39;] |

### Return type

[**\Brevo\Client\Models\GetWhatsappCampaigns**](../Model/GetWhatsappCampaigns.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWhatsAppConfig()`

```php
getWhatsAppConfig(): \Brevo\Client\Models\GetWhatsAppConfig
```

Get your WhatsApp API account information

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


$apiInstance = new Brevo\Client\Api\WhatsAppCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWhatsAppConfig();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppCampaignsApi->getWhatsAppConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Brevo\Client\Models\GetWhatsAppConfig**](../Model/GetWhatsAppConfig.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWhatsAppTemplates()`

```php
getWhatsAppTemplates($startDate, $endDate, $limit, $offset, $sort, $source): \Brevo\Client\Models\GetWhatsappTemplates
```

Return all your created WhatsApp templates

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


$apiInstance = new Brevo\Client\Api\WhatsAppCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$startDate = 'startDate_example'; // string | **Mandatory if endDate is used**. Starting (urlencoded) UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) to filter the templates created. **Prefer to pass your timezone in date-time format for accurate result**
$endDate = 'endDate_example'; // string | **Mandatory if startDate is used**. Ending (urlencoded) UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) to filter the templates created. **Prefer to pass your timezone in date-time format for accurate result**
$limit = 50; // int | Number of documents per page
$offset = 0; // int | Index of the first document in the page
$sort = 'desc'; // string | Sort the results in the ascending/descending order of record modification. Default order is **descending** if `sort` is not passed
$source = 'source_example'; // string | source of the template

try {
    $result = $apiInstance->getWhatsAppTemplates($startDate, $endDate, $limit, $offset, $sort, $source);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppCampaignsApi->getWhatsAppTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startDate** | **string**| **Mandatory if endDate is used**. Starting (urlencoded) UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) to filter the templates created. **Prefer to pass your timezone in date-time format for accurate result** | [optional] |
| **endDate** | **string**| **Mandatory if startDate is used**. Ending (urlencoded) UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) to filter the templates created. **Prefer to pass your timezone in date-time format for accurate result** | [optional] |
| **limit** | **int**| Number of documents per page | [optional] [default to 50] |
| **offset** | **int**| Index of the first document in the page | [optional] [default to 0] |
| **sort** | **string**| Sort the results in the ascending/descending order of record modification. Default order is **descending** if &#x60;sort&#x60; is not passed | [optional] [default to &#39;desc&#39;] |
| **source** | **string**| source of the template | [optional] |

### Return type

[**\Brevo\Client\Models\GetWhatsappTemplates**](../Model/GetWhatsappTemplates.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendWhatsAppTemplateApproval()`

```php
sendWhatsAppTemplateApproval($templateId)
```

Send your WhatsApp template for approval

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


$apiInstance = new Brevo\Client\Api\WhatsAppCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$templateId = 56; // int | id of the template

try {
    $apiInstance->sendWhatsAppTemplateApproval($templateId);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppCampaignsApi->sendWhatsAppTemplateApproval: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **templateId** | **int**| id of the template | |

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

## `updateWhatsAppCampaign()`

```php
updateWhatsAppCampaign($campaignId, $updateWhatsAppCampaign)
```

Update a WhatsApp campaign

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


$apiInstance = new Brevo\Client\Api\WhatsAppCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 56; // int | id of the campaign
$updateWhatsAppCampaign = new \Brevo\Client\Models\UpdateWhatsAppCampaign(); // \Brevo\Client\Models\UpdateWhatsAppCampaign | Values to update a WhatsApp Campaign

try {
    $apiInstance->updateWhatsAppCampaign($campaignId, $updateWhatsAppCampaign);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppCampaignsApi->updateWhatsAppCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **int**| id of the campaign | |
| **updateWhatsAppCampaign** | [**\Brevo\Client\Models\UpdateWhatsAppCampaign**](../Model/UpdateWhatsAppCampaign.md)| Values to update a WhatsApp Campaign | |

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
