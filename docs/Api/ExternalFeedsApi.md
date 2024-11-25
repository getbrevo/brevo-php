# Brevo\Client\ExternalFeedsApi

All URIs are relative to https://api.brevo.com/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createExternalFeed()**](ExternalFeedsApi.md#createExternalFeed) | **POST** /feeds | Create an external feed |
| [**deleteExternalFeed()**](ExternalFeedsApi.md#deleteExternalFeed) | **DELETE** /feeds/{uuid} | Delete an external feed |
| [**getAllExternalFeeds()**](ExternalFeedsApi.md#getAllExternalFeeds) | **GET** /feeds | Fetch all external feeds |
| [**getExternalFeedByUUID()**](ExternalFeedsApi.md#getExternalFeedByUUID) | **GET** /feeds/{uuid} | Get an external feed by UUID |
| [**updateExternalFeed()**](ExternalFeedsApi.md#updateExternalFeed) | **PUT** /feeds/{uuid} | Update an external feed |


## `createExternalFeed()`

```php
createExternalFeed($createExternalFeed): \Brevo\Client\Models\CreateExternalFeed201Response
```

Create an external feed

This endpoint will create an external feed.

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


$apiInstance = new Brevo\Client\Api\ExternalFeedsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createExternalFeed = new \Brevo\Client\Models\CreateExternalFeed(); // \Brevo\Client\Models\CreateExternalFeed | Values to create a feed

try {
    $result = $apiInstance->createExternalFeed($createExternalFeed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalFeedsApi->createExternalFeed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createExternalFeed** | [**\Brevo\Client\Models\CreateExternalFeed**](../Model/CreateExternalFeed.md)| Values to create a feed | |

### Return type

[**\Brevo\Client\Models\CreateExternalFeed201Response**](../Model/CreateExternalFeed201Response.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteExternalFeed()`

```php
deleteExternalFeed($uuid)
```

Delete an external feed

This endpoint will delete an external feed.

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


$apiInstance = new Brevo\Client\Api\ExternalFeedsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 38f351fb-6e77-4b38-979a-a2465260449e; // string | UUID of the feed to delete

try {
    $apiInstance->deleteExternalFeed($uuid);
} catch (Exception $e) {
    echo 'Exception when calling ExternalFeedsApi->deleteExternalFeed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the feed to delete | |

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

## `getAllExternalFeeds()`

```php
getAllExternalFeeds($search, $startDate, $endDate, $sort, $authType, $limit, $offset): \Brevo\Client\Models\GetAllExternalFeeds
```

Fetch all external feeds

This endpoint can fetch all created external feeds.

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


$apiInstance = new Brevo\Client\Api\ExternalFeedsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = search; // string | Can be used to filter records by search keyword on feed name
$startDate = 2022-09-04; // \DateTime | Mandatory if `endDate` is used. Starting date (YYYY-MM-DD) from which you want to fetch the list. Can be maximum 30 days older than current date.
$endDate = 2022-10-01; // \DateTime | Mandatory if `startDate` is used. Ending date (YYYY-MM-DD) till which you want to fetch the list. Maximum time period that can be selected is one month.
$sort = 'desc'; // string | Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed.
$authType = 'authType_example'; // string | Filter the records by `authType` of the feed.
$limit = 100; // int | Number of documents returned per page.
$offset = 0; // int | Index of the first document on the page.

try {
    $result = $apiInstance->getAllExternalFeeds($search, $startDate, $endDate, $sort, $authType, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalFeedsApi->getAllExternalFeeds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search** | **string**| Can be used to filter records by search keyword on feed name | [optional] |
| **startDate** | **\DateTime**| Mandatory if &#x60;endDate&#x60; is used. Starting date (YYYY-MM-DD) from which you want to fetch the list. Can be maximum 30 days older than current date. | [optional] |
| **endDate** | **\DateTime**| Mandatory if &#x60;startDate&#x60; is used. Ending date (YYYY-MM-DD) till which you want to fetch the list. Maximum time period that can be selected is one month. | [optional] |
| **sort** | **string**| Sort the results in the ascending/descending order of record creation. Default order is **descending** if &#x60;sort&#x60; is not passed. | [optional] [default to &#39;desc&#39;] |
| **authType** | **string**| Filter the records by &#x60;authType&#x60; of the feed. | [optional] |
| **limit** | **int**| Number of documents returned per page. | [optional] [default to 50] |
| **offset** | **int**| Index of the first document on the page. | [optional] [default to 0] |

### Return type

[**\Brevo\Client\Models\GetAllExternalFeeds**](../Model/GetAllExternalFeeds.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExternalFeedByUUID()`

```php
getExternalFeedByUUID($uuid): \Brevo\Client\Models\GetExternalFeedByUUID
```

Get an external feed by UUID

This endpoint will update an external feed.

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


$apiInstance = new Brevo\Client\Api\ExternalFeedsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 38f351fb-6e77-4b38-979a-a2465260449e; // string | UUID of the feed to fetch

try {
    $result = $apiInstance->getExternalFeedByUUID($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalFeedsApi->getExternalFeedByUUID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the feed to fetch | |

### Return type

[**\Brevo\Client\Models\GetExternalFeedByUUID**](../Model/GetExternalFeedByUUID.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateExternalFeed()`

```php
updateExternalFeed($uuid, $updateExternalFeed)
```

Update an external feed

This endpoint will update an external feed.

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


$apiInstance = new Brevo\Client\Api\ExternalFeedsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 38f351fb-6e77-4b38-979a-a2465260449e; // string | UUID of the feed to update
$updateExternalFeed = new \Brevo\Client\Models\UpdateExternalFeed(); // \Brevo\Client\Models\UpdateExternalFeed | Values to update a feed

try {
    $apiInstance->updateExternalFeed($uuid, $updateExternalFeed);
} catch (Exception $e) {
    echo 'Exception when calling ExternalFeedsApi->updateExternalFeed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the feed to update | |
| **updateExternalFeed** | [**\Brevo\Client\Models\UpdateExternalFeed**](../Model/UpdateExternalFeed.md)| Values to update a feed | |

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
