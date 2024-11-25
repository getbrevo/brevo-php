# Brevo\Client\CouponsApi

All URIs are relative to https://api.brevo.com/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCouponCollection()**](CouponsApi.md#createCouponCollection) | **POST** /couponCollections | Create а coupon collection |
| [**createCoupons()**](CouponsApi.md#createCoupons) | **POST** /coupons | Create coupons for a coupon collection |
| [**getCouponCollection()**](CouponsApi.md#getCouponCollection) | **GET** /couponCollections/{id} | Get a coupon collection by id |
| [**getCouponCollections()**](CouponsApi.md#getCouponCollections) | **GET** /couponCollections | Get all your coupon collections |
| [**updateCouponCollection()**](CouponsApi.md#updateCouponCollection) | **PATCH** /couponCollections/{id} | Update a coupon collection by id |


## `createCouponCollection()`

```php
createCouponCollection($createCouponCollectionRequest): \Brevo\Client\Models\CreateCouponCollection201Response
```

Create а coupon collection

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


$apiInstance = new Brevo\Client\Api\CouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createCouponCollectionRequest = new \Brevo\Client\Models\CreateCouponCollectionRequest(); // \Brevo\Client\Models\CreateCouponCollectionRequest | Values to create a coupon collection

try {
    $result = $apiInstance->createCouponCollection($createCouponCollectionRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponsApi->createCouponCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createCouponCollectionRequest** | [**\Brevo\Client\Models\CreateCouponCollectionRequest**](../Model/CreateCouponCollectionRequest.md)| Values to create a coupon collection | |

### Return type

[**\Brevo\Client\Models\CreateCouponCollection201Response**](../Model/CreateCouponCollection201Response.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCoupons()`

```php
createCoupons($createCouponsRequest)
```

Create coupons for a coupon collection

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


$apiInstance = new Brevo\Client\Api\CouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createCouponsRequest = new \Brevo\Client\Models\CreateCouponsRequest(); // \Brevo\Client\Models\CreateCouponsRequest | Values to create coupons

try {
    $apiInstance->createCoupons($createCouponsRequest);
} catch (Exception $e) {
    echo 'Exception when calling CouponsApi->createCoupons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createCouponsRequest** | [**\Brevo\Client\Models\CreateCouponsRequest**](../Model/CreateCouponsRequest.md)| Values to create coupons | |

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

## `getCouponCollection()`

```php
getCouponCollection($id): \Brevo\Client\Models\GetCouponCollection
```

Get a coupon collection by id

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


$apiInstance = new Brevo\Client\Api\CouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Id of the collection to return

try {
    $result = $apiInstance->getCouponCollection($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponsApi->getCouponCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Id of the collection to return | |

### Return type

[**\Brevo\Client\Models\GetCouponCollection**](../Model/GetCouponCollection.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCouponCollections()`

```php
getCouponCollections($limit, $offset, $sort, $sortBy): \Brevo\Client\Models\GetCouponCollection
```

Get all your coupon collections

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


$apiInstance = new Brevo\Client\Api\CouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 50; // int | Number of documents returned per page
$offset = 0; // int | Index of the first document on the page
$sort = 'desc'; // string | Sort the results by creation time in ascending/descending order
$sortBy = 'createdAt'; // string | The field used to sort coupon collections

try {
    $result = $apiInstance->getCouponCollections($limit, $offset, $sort, $sortBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponsApi->getCouponCollections: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Number of documents returned per page | [optional] [default to 50] |
| **offset** | **int**| Index of the first document on the page | [optional] [default to 0] |
| **sort** | **string**| Sort the results by creation time in ascending/descending order | [optional] [default to &#39;desc&#39;] |
| **sortBy** | **string**| The field used to sort coupon collections | [optional] [default to &#39;createdAt&#39;] |

### Return type

[**\Brevo\Client\Models\GetCouponCollection**](../Model/GetCouponCollection.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCouponCollection()`

```php
updateCouponCollection($id, $updateCouponCollectionRequest): \Brevo\Client\Models\UpdateCouponCollection200Response
```

Update a coupon collection by id

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


$apiInstance = new Brevo\Client\Api\CouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Id of the collection to update
$updateCouponCollectionRequest = new \Brevo\Client\Models\UpdateCouponCollectionRequest(); // \Brevo\Client\Models\UpdateCouponCollectionRequest | Values to update the coupon collection

try {
    $result = $apiInstance->updateCouponCollection($id, $updateCouponCollectionRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponsApi->updateCouponCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Id of the collection to update | |
| **updateCouponCollectionRequest** | [**\Brevo\Client\Models\UpdateCouponCollectionRequest**](../Model/UpdateCouponCollectionRequest.md)| Values to update the coupon collection | [optional] |

### Return type

[**\Brevo\Client\Models\UpdateCouponCollection200Response**](../Model/UpdateCouponCollection200Response.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
