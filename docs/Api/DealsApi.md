# Brevo\Client\DealsApi

All URIs are relative to https://api.brevo.com/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**crmAttributesDealsGet()**](DealsApi.md#crmAttributesDealsGet) | **GET** /crm/attributes/deals | Get deal attributes |
| [**crmDealsGet()**](DealsApi.md#crmDealsGet) | **GET** /crm/deals | Get all deals |
| [**crmDealsIdDelete()**](DealsApi.md#crmDealsIdDelete) | **DELETE** /crm/deals/{id} | Delete a deal |
| [**crmDealsIdGet()**](DealsApi.md#crmDealsIdGet) | **GET** /crm/deals/{id} | Get a deal |
| [**crmDealsIdPatch()**](DealsApi.md#crmDealsIdPatch) | **PATCH** /crm/deals/{id} | Update a deal |
| [**crmDealsImportPost()**](DealsApi.md#crmDealsImportPost) | **POST** /crm/deals/import | Import deals(creation and updation) |
| [**crmDealsLinkUnlinkIdPatch()**](DealsApi.md#crmDealsLinkUnlinkIdPatch) | **PATCH** /crm/deals/link-unlink/{id} | Link and Unlink a deal with contacts and companies |
| [**crmDealsPost()**](DealsApi.md#crmDealsPost) | **POST** /crm/deals | Create a deal |
| [**crmPipelineDetailsAllGet()**](DealsApi.md#crmPipelineDetailsAllGet) | **GET** /crm/pipeline/details/all | Get all pipelines |
| [**crmPipelineDetailsGet()**](DealsApi.md#crmPipelineDetailsGet) | **GET** /crm/pipeline/details | Get pipeline stages |
| [**crmPipelineDetailsPipelineIDGet()**](DealsApi.md#crmPipelineDetailsPipelineIDGet) | **GET** /crm/pipeline/details/{pipelineID} | Get a pipeline |


## `crmAttributesDealsGet()`

```php
crmAttributesDealsGet(): \Brevo\Client\Models\DealAttributesInner[]
```

Get deal attributes

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


$apiInstance = new Brevo\Client\Api\DealsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->crmAttributesDealsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealsApi->crmAttributesDealsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Brevo\Client\Models\DealAttributesInner[]**](../Model/DealAttributesInner.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `crmDealsGet()`

```php
crmDealsGet($filtersAttributesDealName, $filtersLinkedCompaniesIds, $filtersLinkedContactsIds, $offset, $limit, $sort): \Brevo\Client\Models\DealsList
```

Get all deals

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


$apiInstance = new Brevo\Client\Api\DealsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filtersAttributesDealName = 'filtersAttributesDealName_example'; // string | Filter by attributes. If you have a filter for the owner on your end, please send it as filters[attributes.deal_owner] and utilize the account email for the filtering.
$filtersLinkedCompaniesIds = 'filtersLinkedCompaniesIds_example'; // string | Filter by linked companies ids
$filtersLinkedContactsIds = 'filtersLinkedContactsIds_example'; // string | Filter by linked companies ids
$offset = 56; // int | Index of the first document of the page
$limit = 56; // int | Number of documents per page
$sort = 'sort_example'; // string | Sort the results in the ascending/descending order. Default order is **descending** by creation if `sort` is not passed

try {
    $result = $apiInstance->crmDealsGet($filtersAttributesDealName, $filtersLinkedCompaniesIds, $filtersLinkedContactsIds, $offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealsApi->crmDealsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filtersAttributesDealName** | **string**| Filter by attributes. If you have a filter for the owner on your end, please send it as filters[attributes.deal_owner] and utilize the account email for the filtering. | [optional] |
| **filtersLinkedCompaniesIds** | **string**| Filter by linked companies ids | [optional] |
| **filtersLinkedContactsIds** | **string**| Filter by linked companies ids | [optional] |
| **offset** | **int**| Index of the first document of the page | [optional] |
| **limit** | **int**| Number of documents per page | [optional] |
| **sort** | **string**| Sort the results in the ascending/descending order. Default order is **descending** by creation if &#x60;sort&#x60; is not passed | [optional] |

### Return type

[**\Brevo\Client\Models\DealsList**](../Model/DealsList.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `crmDealsIdDelete()`

```php
crmDealsIdDelete($id)
```

Delete a deal

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


$apiInstance = new Brevo\Client\Api\DealsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->crmDealsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling DealsApi->crmDealsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

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

## `crmDealsIdGet()`

```php
crmDealsIdGet($id): \Brevo\Client\Models\Deal
```

Get a deal

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


$apiInstance = new Brevo\Client\Api\DealsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->crmDealsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealsApi->crmDealsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Brevo\Client\Models\Deal**](../Model/Deal.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `crmDealsIdPatch()`

```php
crmDealsIdPatch($id, $crmDealsIdPatchRequest)
```

Update a deal

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


$apiInstance = new Brevo\Client\Api\DealsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$crmDealsIdPatchRequest = new \Brevo\Client\Models\CrmDealsIdPatchRequest(); // \Brevo\Client\Models\CrmDealsIdPatchRequest | Updated deal details.

try {
    $apiInstance->crmDealsIdPatch($id, $crmDealsIdPatchRequest);
} catch (Exception $e) {
    echo 'Exception when calling DealsApi->crmDealsIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **crmDealsIdPatchRequest** | [**\Brevo\Client\Models\CrmDealsIdPatchRequest**](../Model/CrmDealsIdPatchRequest.md)| Updated deal details. | |

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

## `crmDealsImportPost()`

```php
crmDealsImportPost($file, $mapping): \Brevo\Client\Models\CompaniesImportPost200Response
```

Import deals(creation and updation)

Import deals from a CSV file with mapping options.

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


$apiInstance = new Brevo\Client\Api\DealsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "/path/to/file.txt"; // \SplFileObject | The CSV file to upload.The file should have the first row as the mapping attribute. Some default attribute names are (a) deal_id [brevo mongoID to update deals] (b) associated_contact (c) associated_company (f) any other attribute with internal name
$mapping = array('key' => new \stdClass); // object | The mapping options in JSON format. Here is an example of the JSON structure:   ```json {   \\\"link_entities\\\": true, // Determines whether to link related entities during the import process   \\\"unlink_entities\\\": false, // Determines whether to unlink related entities during the import process   \\\"update_existing_records\\\": true, // Determines whether to update based on company ID or treat every row as create   \\\"unset_empty_attributes\\\": false // Determines whether to unset a specific attribute during update if the values input is blank }  ```

try {
    $result = $apiInstance->crmDealsImportPost($file, $mapping);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealsApi->crmDealsImportPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file** | **\SplFileObject****\SplFileObject**| The CSV file to upload.The file should have the first row as the mapping attribute. Some default attribute names are (a) deal_id [brevo mongoID to update deals] (b) associated_contact (c) associated_company (f) any other attribute with internal name | [optional] |
| **mapping** | [**object**](../Model/object.md)| The mapping options in JSON format. Here is an example of the JSON structure:   &#x60;&#x60;&#x60;json {   \\\&quot;link_entities\\\&quot;: true, // Determines whether to link related entities during the import process   \\\&quot;unlink_entities\\\&quot;: false, // Determines whether to unlink related entities during the import process   \\\&quot;update_existing_records\\\&quot;: true, // Determines whether to update based on company ID or treat every row as create   \\\&quot;unset_empty_attributes\\\&quot;: false // Determines whether to unset a specific attribute during update if the values input is blank }  &#x60;&#x60;&#x60; | [optional] |

### Return type

[**\Brevo\Client\Models\CompaniesImportPost200Response**](../Model/CompaniesImportPost200Response.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `crmDealsLinkUnlinkIdPatch()`

```php
crmDealsLinkUnlinkIdPatch($id, $crmDealsLinkUnlinkIdPatchRequest)
```

Link and Unlink a deal with contacts and companies

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


$apiInstance = new Brevo\Client\Api\DealsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$crmDealsLinkUnlinkIdPatchRequest = new \Brevo\Client\Models\CrmDealsLinkUnlinkIdPatchRequest(); // \Brevo\Client\Models\CrmDealsLinkUnlinkIdPatchRequest | Linked / Unlinked contacts and companies ids.

try {
    $apiInstance->crmDealsLinkUnlinkIdPatch($id, $crmDealsLinkUnlinkIdPatchRequest);
} catch (Exception $e) {
    echo 'Exception when calling DealsApi->crmDealsLinkUnlinkIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **crmDealsLinkUnlinkIdPatchRequest** | [**\Brevo\Client\Models\CrmDealsLinkUnlinkIdPatchRequest**](../Model/CrmDealsLinkUnlinkIdPatchRequest.md)| Linked / Unlinked contacts and companies ids. | |

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

## `crmDealsPost()`

```php
crmDealsPost($crmDealsPostRequest): \Brevo\Client\Models\CrmDealsPost201Response
```

Create a deal

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


$apiInstance = new Brevo\Client\Api\DealsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$crmDealsPostRequest = new \Brevo\Client\Models\CrmDealsPostRequest(); // \Brevo\Client\Models\CrmDealsPostRequest | Deal create data.

try {
    $result = $apiInstance->crmDealsPost($crmDealsPostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealsApi->crmDealsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **crmDealsPostRequest** | [**\Brevo\Client\Models\CrmDealsPostRequest**](../Model/CrmDealsPostRequest.md)| Deal create data. | |

### Return type

[**\Brevo\Client\Models\CrmDealsPost201Response**](../Model/CrmDealsPost201Response.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `crmPipelineDetailsAllGet()`

```php
crmPipelineDetailsAllGet(): \Brevo\Client\Models\Pipeline[]
```

Get all pipelines

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


$apiInstance = new Brevo\Client\Api\DealsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->crmPipelineDetailsAllGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealsApi->crmPipelineDetailsAllGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Brevo\Client\Models\Pipeline[]**](../Model/Pipeline.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `crmPipelineDetailsGet()`

```php
crmPipelineDetailsGet(): \Brevo\Client\Models\Pipeline
```

Get pipeline stages

This endpoint is deprecated. Prefer /crm/pipeline/details/{pipelineID} instead.

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


$apiInstance = new Brevo\Client\Api\DealsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->crmPipelineDetailsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealsApi->crmPipelineDetailsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Brevo\Client\Models\Pipeline**](../Model/Pipeline.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `crmPipelineDetailsPipelineIDGet()`

```php
crmPipelineDetailsPipelineIDGet($pipelineID): \Brevo\Client\Models\Pipeline[]
```

Get a pipeline

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


$apiInstance = new Brevo\Client\Api\DealsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pipelineID = 'pipelineID_example'; // string

try {
    $result = $apiInstance->crmPipelineDetailsPipelineIDGet($pipelineID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealsApi->crmPipelineDetailsPipelineIDGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pipelineID** | **string**|  | |

### Return type

[**\Brevo\Client\Models\Pipeline[]**](../Model/Pipeline.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
