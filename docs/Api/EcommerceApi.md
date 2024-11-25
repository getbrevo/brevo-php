# Brevo\Client\EcommerceApi

All URIs are relative to https://api.brevo.com/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createBatchOrder()**](EcommerceApi.md#createBatchOrder) | **POST** /orders/status/batch | Create orders in batch |
| [**createOrder()**](EcommerceApi.md#createOrder) | **POST** /orders/status | Managing the status of the order |
| [**createUpdateBatchCategory()**](EcommerceApi.md#createUpdateBatchCategory) | **POST** /categories/batch | Create categories in batch |
| [**createUpdateBatchProducts()**](EcommerceApi.md#createUpdateBatchProducts) | **POST** /products/batch | Create products in batch |
| [**createUpdateCategory()**](EcommerceApi.md#createUpdateCategory) | **POST** /categories | Create/Update a category |
| [**createUpdateProduct()**](EcommerceApi.md#createUpdateProduct) | **POST** /products | Create/Update a product |
| [**ecommerceActivatePost()**](EcommerceApi.md#ecommerceActivatePost) | **POST** /ecommerce/activate | Activate the eCommerce app |
| [**ecommerceAttributionMetricsConversionSourceConversionSourceIdGet()**](EcommerceApi.md#ecommerceAttributionMetricsConversionSourceConversionSourceIdGet) | **GET** /ecommerce/attribution/metrics/{conversionSource}/{conversionSourceId} | Get detailed attribution metrics for a single Brevo campaign |
| [**ecommerceAttributionMetricsGet()**](EcommerceApi.md#ecommerceAttributionMetricsGet) | **GET** /ecommerce/attribution/metrics | Get attribution metrics for one or more Brevo campaigns |
| [**ecommerceAttributionProductsConversionSourceConversionSourceIdGet()**](EcommerceApi.md#ecommerceAttributionProductsConversionSourceConversionSourceIdGet) | **GET** /ecommerce/attribution/products/{conversionSource}/{conversionSourceId} | Get attributed product sales for a single Brevo campaign |
| [**ecommerceConfigDisplayCurrencyGet()**](EcommerceApi.md#ecommerceConfigDisplayCurrencyGet) | **GET** /ecommerce/config/displayCurrency | Get the ISO 4217 compliant display currency code for your Brevo account |
| [**getCategories()**](EcommerceApi.md#getCategories) | **GET** /categories | Return all your categories |
| [**getCategoryInfo()**](EcommerceApi.md#getCategoryInfo) | **GET** /categories/{id} | Get a category details |
| [**getOrders()**](EcommerceApi.md#getOrders) | **GET** /orders | Get order details |
| [**getProductInfo()**](EcommerceApi.md#getProductInfo) | **GET** /products/{id} | Get a product&#39;s details |
| [**getProducts()**](EcommerceApi.md#getProducts) | **GET** /products | Return all your products |
| [**setConfigDisplayCurrency()**](EcommerceApi.md#setConfigDisplayCurrency) | **POST** /ecommerce/config/displayCurrency | Set the ISO 4217 compliant display currency code for your Brevo account |


## `createBatchOrder()`

```php
createBatchOrder($orderBatch): \Brevo\Client\Models\CreatedBatchId
```

Create orders in batch

Create multiple orders at one time instead of one order at a time

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


$apiInstance = new Brevo\Client\Api\EcommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderBatch = new \Brevo\Client\Models\OrderBatch(); // \Brevo\Client\Models\OrderBatch

try {
    $result = $apiInstance->createBatchOrder($orderBatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceApi->createBatchOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderBatch** | [**\Brevo\Client\Models\OrderBatch**](../Model/OrderBatch.md)|  | |

### Return type

[**\Brevo\Client\Models\CreatedBatchId**](../Model/CreatedBatchId.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrder()`

```php
createOrder($order)
```

Managing the status of the order

Manages the transactional status of the order

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


$apiInstance = new Brevo\Client\Api\EcommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order = new \Brevo\Client\Models\Order(); // \Brevo\Client\Models\Order

try {
    $apiInstance->createOrder($order);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceApi->createOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order** | [**\Brevo\Client\Models\Order**](../Model/Order.md)|  | |

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

## `createUpdateBatchCategory()`

```php
createUpdateBatchCategory($createUpdateBatchCategory): \Brevo\Client\Models\CreateUpdateBatchCategoryModel
```

Create categories in batch

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


$apiInstance = new Brevo\Client\Api\EcommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createUpdateBatchCategory = new \Brevo\Client\Models\CreateUpdateBatchCategory(); // \Brevo\Client\Models\CreateUpdateBatchCategory | Values to create a batch of categories

try {
    $result = $apiInstance->createUpdateBatchCategory($createUpdateBatchCategory);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceApi->createUpdateBatchCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createUpdateBatchCategory** | [**\Brevo\Client\Models\CreateUpdateBatchCategory**](../Model/CreateUpdateBatchCategory.md)| Values to create a batch of categories | |

### Return type

[**\Brevo\Client\Models\CreateUpdateBatchCategoryModel**](../Model/CreateUpdateBatchCategoryModel.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createUpdateBatchProducts()`

```php
createUpdateBatchProducts($createUpdateBatchProducts): \Brevo\Client\Models\CreateUpdateBatchProductsModel
```

Create products in batch

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


$apiInstance = new Brevo\Client\Api\EcommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createUpdateBatchProducts = new \Brevo\Client\Models\CreateUpdateBatchProducts(); // \Brevo\Client\Models\CreateUpdateBatchProducts | Values to create a batch of products

try {
    $result = $apiInstance->createUpdateBatchProducts($createUpdateBatchProducts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceApi->createUpdateBatchProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createUpdateBatchProducts** | [**\Brevo\Client\Models\CreateUpdateBatchProducts**](../Model/CreateUpdateBatchProducts.md)| Values to create a batch of products | |

### Return type

[**\Brevo\Client\Models\CreateUpdateBatchProductsModel**](../Model/CreateUpdateBatchProductsModel.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createUpdateCategory()`

```php
createUpdateCategory($createUpdateCategory): \Brevo\Client\Models\CreateCategoryModel
```

Create/Update a category

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


$apiInstance = new Brevo\Client\Api\EcommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createUpdateCategory = new \Brevo\Client\Models\CreateUpdateCategory(); // \Brevo\Client\Models\CreateUpdateCategory | Values to create/update a category

try {
    $result = $apiInstance->createUpdateCategory($createUpdateCategory);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceApi->createUpdateCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createUpdateCategory** | [**\Brevo\Client\Models\CreateUpdateCategory**](../Model/CreateUpdateCategory.md)| Values to create/update a category | |

### Return type

[**\Brevo\Client\Models\CreateCategoryModel**](../Model/CreateCategoryModel.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createUpdateProduct()`

```php
createUpdateProduct($createUpdateProduct): \Brevo\Client\Models\CreateProductModel
```

Create/Update a product

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


$apiInstance = new Brevo\Client\Api\EcommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createUpdateProduct = new \Brevo\Client\Models\CreateUpdateProduct(); // \Brevo\Client\Models\CreateUpdateProduct | Values to create/update a product

try {
    $result = $apiInstance->createUpdateProduct($createUpdateProduct);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceApi->createUpdateProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createUpdateProduct** | [**\Brevo\Client\Models\CreateUpdateProduct**](../Model/CreateUpdateProduct.md)| Values to create/update a product | |

### Return type

[**\Brevo\Client\Models\CreateProductModel**](../Model/CreateProductModel.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ecommerceActivatePost()`

```php
ecommerceActivatePost()
```

Activate the eCommerce app

Getting access to Brevo eCommerce.

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


$apiInstance = new Brevo\Client\Api\EcommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->ecommerceActivatePost();
} catch (Exception $e) {
    echo 'Exception when calling EcommerceApi->ecommerceActivatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `ecommerceAttributionMetricsConversionSourceConversionSourceIdGet()`

```php
ecommerceAttributionMetricsConversionSourceConversionSourceIdGet($conversionSource, $conversionSourceId): \Brevo\Client\Models\EcommerceAttributionMetricsConversionSourceConversionSourceIdGet200Response
```

Get detailed attribution metrics for a single Brevo campaign

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


$apiInstance = new Brevo\Client\Api\EcommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversionSource = 'conversionSource_example'; // string | The Brevo campaign type for which data will be retrieved
$conversionSourceId = 1; // float | The Brevo campaign id for which data will be retrieved

try {
    $result = $apiInstance->ecommerceAttributionMetricsConversionSourceConversionSourceIdGet($conversionSource, $conversionSourceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceApi->ecommerceAttributionMetricsConversionSourceConversionSourceIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **conversionSource** | **string**| The Brevo campaign type for which data will be retrieved | |
| **conversionSourceId** | **float**| The Brevo campaign id for which data will be retrieved | |

### Return type

[**\Brevo\Client\Models\EcommerceAttributionMetricsConversionSourceConversionSourceIdGet200Response**](../Model/EcommerceAttributionMetricsConversionSourceConversionSourceIdGet200Response.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ecommerceAttributionMetricsGet()`

```php
ecommerceAttributionMetricsGet($periodFrom, $periodTo, $emailCampaignId): \Brevo\Client\Models\EcommerceAttributionMetricsGet200Response
```

Get attribution metrics for one or more Brevo campaigns

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


$apiInstance = new Brevo\Client\Api\EcommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$periodFrom = 2022-01-02T00:00Z; // \DateTime | When getting metrics for a specific period, define the starting datetime in RFC3339 format
$periodTo = 2022-01-03T00:00Z; // \DateTime | When getting metrics for a specific period, define the end datetime in RFC3339 format
$emailCampaignId = array(3.4); // float[] | The email campaign id(s) to get metrics for

try {
    $result = $apiInstance->ecommerceAttributionMetricsGet($periodFrom, $periodTo, $emailCampaignId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceApi->ecommerceAttributionMetricsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **periodFrom** | **\DateTime**| When getting metrics for a specific period, define the starting datetime in RFC3339 format | [optional] |
| **periodTo** | **\DateTime**| When getting metrics for a specific period, define the end datetime in RFC3339 format | [optional] |
| **emailCampaignId** | [**float[]**](../Model/float.md)| The email campaign id(s) to get metrics for | [optional] |

### Return type

[**\Brevo\Client\Models\EcommerceAttributionMetricsGet200Response**](../Model/EcommerceAttributionMetricsGet200Response.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ecommerceAttributionProductsConversionSourceConversionSourceIdGet()`

```php
ecommerceAttributionProductsConversionSourceConversionSourceIdGet($conversionSource, $conversionSourceId): \Brevo\Client\Models\EcommerceAttributionProductsConversionSourceConversionSourceIdGet200Response
```

Get attributed product sales for a single Brevo campaign

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


$apiInstance = new Brevo\Client\Api\EcommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversionSource = 'conversionSource_example'; // string | The Brevo campaign type for which data will be retrieved
$conversionSourceId = 1; // float | The Brevo campaign id for which data will be retrieved

try {
    $result = $apiInstance->ecommerceAttributionProductsConversionSourceConversionSourceIdGet($conversionSource, $conversionSourceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceApi->ecommerceAttributionProductsConversionSourceConversionSourceIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **conversionSource** | **string**| The Brevo campaign type for which data will be retrieved | |
| **conversionSourceId** | **float**| The Brevo campaign id for which data will be retrieved | |

### Return type

[**\Brevo\Client\Models\EcommerceAttributionProductsConversionSourceConversionSourceIdGet200Response**](../Model/EcommerceAttributionProductsConversionSourceConversionSourceIdGet200Response.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ecommerceConfigDisplayCurrencyGet()`

```php
ecommerceConfigDisplayCurrencyGet(): \Brevo\Client\Models\EcommerceConfigDisplayCurrencyGet200Response
```

Get the ISO 4217 compliant display currency code for your Brevo account

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


$apiInstance = new Brevo\Client\Api\EcommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->ecommerceConfigDisplayCurrencyGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceApi->ecommerceConfigDisplayCurrencyGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Brevo\Client\Models\EcommerceConfigDisplayCurrencyGet200Response**](../Model/EcommerceConfigDisplayCurrencyGet200Response.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCategories()`

```php
getCategories($limit, $offset, $sort, $ids, $name, $modifiedSince, $createdSince): \Brevo\Client\Models\GetCategories
```

Return all your categories

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


$apiInstance = new Brevo\Client\Api\EcommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 50; // int | Number of documents per page
$offset = 0; // int | Index of the first document in the page
$sort = 'desc'; // string | Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed
$ids = array('ids_example'); // string[] | Filter by category ids
$name = 'name_example'; // string | Filter by category name
$modifiedSince = 'modifiedSince_example'; // string | Filter (urlencoded) the categories modified after a given UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). **Prefer to pass your timezone in date-time format for accurate result.**
$createdSince = 'createdSince_example'; // string | Filter (urlencoded) the categories created after a given UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). **Prefer to pass your timezone in date-time format for accurate result.**

try {
    $result = $apiInstance->getCategories($limit, $offset, $sort, $ids, $name, $modifiedSince, $createdSince);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceApi->getCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Number of documents per page | [optional] [default to 50] |
| **offset** | **int**| Index of the first document in the page | [optional] [default to 0] |
| **sort** | **string**| Sort the results in the ascending/descending order of record creation. Default order is **descending** if &#x60;sort&#x60; is not passed | [optional] [default to &#39;desc&#39;] |
| **ids** | [**string[]**](../Model/string.md)| Filter by category ids | [optional] |
| **name** | **string**| Filter by category name | [optional] |
| **modifiedSince** | **string**| Filter (urlencoded) the categories modified after a given UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). **Prefer to pass your timezone in date-time format for accurate result.** | [optional] |
| **createdSince** | **string**| Filter (urlencoded) the categories created after a given UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). **Prefer to pass your timezone in date-time format for accurate result.** | [optional] |

### Return type

[**\Brevo\Client\Models\GetCategories**](../Model/GetCategories.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCategoryInfo()`

```php
getCategoryInfo($id): \Brevo\Client\Models\GetCategoryDetails
```

Get a category details

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


$apiInstance = new Brevo\Client\Api\EcommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Category ID

try {
    $result = $apiInstance->getCategoryInfo($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceApi->getCategoryInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Category ID | |

### Return type

[**\Brevo\Client\Models\GetCategoryDetails**](../Model/GetCategoryDetails.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrders()`

```php
getOrders($limit, $offset, $sort, $modifiedSince, $createdSince)
```

Get order details

Get all the orders

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


$apiInstance = new Brevo\Client\Api\EcommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 50; // int | Number of documents per page
$offset = 0; // int | Index of the first document in the page
$sort = 'desc'; // string | Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed
$modifiedSince = 'modifiedSince_example'; // string | Filter (urlencoded) the orders modified after a given UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). **Prefer to pass your timezone in date-time format for accurate result.**
$createdSince = 'createdSince_example'; // string | Filter (urlencoded) the orders created after a given UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). **Prefer to pass your timezone in date-time format for accurate result.**

try {
    $apiInstance->getOrders($limit, $offset, $sort, $modifiedSince, $createdSince);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceApi->getOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Number of documents per page | [optional] [default to 50] |
| **offset** | **int**| Index of the first document in the page | [optional] [default to 0] |
| **sort** | **string**| Sort the results in the ascending/descending order of record creation. Default order is **descending** if &#x60;sort&#x60; is not passed | [optional] [default to &#39;desc&#39;] |
| **modifiedSince** | **string**| Filter (urlencoded) the orders modified after a given UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). **Prefer to pass your timezone in date-time format for accurate result.** | [optional] |
| **createdSince** | **string**| Filter (urlencoded) the orders created after a given UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). **Prefer to pass your timezone in date-time format for accurate result.** | [optional] |

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

## `getProductInfo()`

```php
getProductInfo($id): \Brevo\Client\Models\GetProductDetails
```

Get a product's details

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


$apiInstance = new Brevo\Client\Api\EcommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Product ID

try {
    $result = $apiInstance->getProductInfo($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceApi->getProductInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Product ID | |

### Return type

[**\Brevo\Client\Models\GetProductDetails**](../Model/GetProductDetails.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProducts()`

```php
getProducts($limit, $offset, $sort, $ids, $name, $priceLte, $priceGte, $priceLt, $priceGt, $priceEq, $priceNe, $categories, $modifiedSince, $createdSince): \Brevo\Client\Models\GetProducts
```

Return all your products

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


$apiInstance = new Brevo\Client\Api\EcommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 50; // int | Number of documents per page
$offset = 0; // int | Index of the first document in the page
$sort = 'desc'; // string | Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed
$ids = array('ids_example'); // string[] | Filter by product ids
$name = 'name_example'; // string | Filter by product name, minimum 3 characters should be present for search
$priceLte = 3.4; // float | Price filter for products less than and equals to particular amount
$priceGte = 3.4; // float | Price filter for products greater than and equals to particular amount
$priceLt = 3.4; // float | Price filter for products less than particular amount
$priceGt = 3.4; // float | Price filter for products greater than particular amount
$priceEq = 3.4; // float | Price filter for products equals to particular amount
$priceNe = 3.4; // float | Price filter for products not equals to particular amount
$categories = array('categories_example'); // string[] | Filter by product categories
$modifiedSince = 'modifiedSince_example'; // string | Filter (urlencoded) the orders modified after a given UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). **Prefer to pass your timezone in date-time format for accurate result.**
$createdSince = 'createdSince_example'; // string | Filter (urlencoded) the orders created after a given UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). **Prefer to pass your timezone in date-time format for accurate result.**

try {
    $result = $apiInstance->getProducts($limit, $offset, $sort, $ids, $name, $priceLte, $priceGte, $priceLt, $priceGt, $priceEq, $priceNe, $categories, $modifiedSince, $createdSince);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceApi->getProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Number of documents per page | [optional] [default to 50] |
| **offset** | **int**| Index of the first document in the page | [optional] [default to 0] |
| **sort** | **string**| Sort the results in the ascending/descending order of record creation. Default order is **descending** if &#x60;sort&#x60; is not passed | [optional] [default to &#39;desc&#39;] |
| **ids** | [**string[]**](../Model/string.md)| Filter by product ids | [optional] |
| **name** | **string**| Filter by product name, minimum 3 characters should be present for search | [optional] |
| **priceLte** | **float**| Price filter for products less than and equals to particular amount | [optional] |
| **priceGte** | **float**| Price filter for products greater than and equals to particular amount | [optional] |
| **priceLt** | **float**| Price filter for products less than particular amount | [optional] |
| **priceGt** | **float**| Price filter for products greater than particular amount | [optional] |
| **priceEq** | **float**| Price filter for products equals to particular amount | [optional] |
| **priceNe** | **float**| Price filter for products not equals to particular amount | [optional] |
| **categories** | [**string[]**](../Model/string.md)| Filter by product categories | [optional] |
| **modifiedSince** | **string**| Filter (urlencoded) the orders modified after a given UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). **Prefer to pass your timezone in date-time format for accurate result.** | [optional] |
| **createdSince** | **string**| Filter (urlencoded) the orders created after a given UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). **Prefer to pass your timezone in date-time format for accurate result.** | [optional] |

### Return type

[**\Brevo\Client\Models\GetProducts**](../Model/GetProducts.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setConfigDisplayCurrency()`

```php
setConfigDisplayCurrency($ecommerceConfigDisplayCurrencyGet200Response): \Brevo\Client\Models\EcommerceConfigDisplayCurrencyGet200Response
```

Set the ISO 4217 compliant display currency code for your Brevo account

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


$apiInstance = new Brevo\Client\Api\EcommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ecommerceConfigDisplayCurrencyGet200Response = new \Brevo\Client\Models\EcommerceConfigDisplayCurrencyGet200Response(); // \Brevo\Client\Models\EcommerceConfigDisplayCurrencyGet200Response | set ISO 4217 compliant display currency code payload

try {
    $result = $apiInstance->setConfigDisplayCurrency($ecommerceConfigDisplayCurrencyGet200Response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceApi->setConfigDisplayCurrency: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ecommerceConfigDisplayCurrencyGet200Response** | [**\Brevo\Client\Models\EcommerceConfigDisplayCurrencyGet200Response**](../Model/EcommerceConfigDisplayCurrencyGet200Response.md)| set ISO 4217 compliant display currency code payload | [optional] |

### Return type

[**\Brevo\Client\Models\EcommerceConfigDisplayCurrencyGet200Response**](../Model/EcommerceConfigDisplayCurrencyGet200Response.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
