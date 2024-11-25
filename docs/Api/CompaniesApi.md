# Brevo\Client\CompaniesApi

All URIs are relative to https://api.brevo.com/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**companiesAttributesGet()**](CompaniesApi.md#companiesAttributesGet) | **GET** /companies/attributes | Get company attributes |
| [**companiesGet()**](CompaniesApi.md#companiesGet) | **GET** /companies | Get all Companies |
| [**companiesIdDelete()**](CompaniesApi.md#companiesIdDelete) | **DELETE** /companies/{id} | Delete a company |
| [**companiesIdGet()**](CompaniesApi.md#companiesIdGet) | **GET** /companies/{id} | Get a company |
| [**companiesIdPatch()**](CompaniesApi.md#companiesIdPatch) | **PATCH** /companies/{id} | Update a company |
| [**companiesImportPost()**](CompaniesApi.md#companiesImportPost) | **POST** /companies/import | Import companies(creation and updation) |
| [**companiesLinkUnlinkIdPatch()**](CompaniesApi.md#companiesLinkUnlinkIdPatch) | **PATCH** /companies/link-unlink/{id} | Link and Unlink company with contact and deal |
| [**companiesPost()**](CompaniesApi.md#companiesPost) | **POST** /companies | Create a company |


## `companiesAttributesGet()`

```php
companiesAttributesGet(): \Brevo\Client\Models\CompanyAttributesInner[]
```

Get company attributes

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


$apiInstance = new Brevo\Client\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->companiesAttributesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->companiesAttributesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Brevo\Client\Models\CompanyAttributesInner[]**](../Model/CompanyAttributesInner.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesGet()`

```php
companiesGet($filters, $linkedContactsIds, $linkedDealsIds, $page, $limit, $sort, $sortBy): \Brevo\Client\Models\CompaniesList
```

Get all Companies

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


$apiInstance = new Brevo\Client\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filters = 'filters_example'; // string | Filter by attrbutes. If you have filter for owner on your side please send it as {\"attributes.owner\":\"6299dcf3874a14eacbc65c46\"}
$linkedContactsIds = 56; // int | Filter by linked contacts ids
$linkedDealsIds = 'linkedDealsIds_example'; // string | Filter by linked Deals ids
$page = 56; // int | Index of the first document of the page
$limit = 56; // int | Number of documents per page
$sort = 'sort_example'; // string | Sort the results in the ascending/descending order. Default order is **descending** by creation if `sort` is not passed
$sortBy = 'sortBy_example'; // string | The field used to sort field names.

try {
    $result = $apiInstance->companiesGet($filters, $linkedContactsIds, $linkedDealsIds, $page, $limit, $sort, $sortBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->companiesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filters** | **string**| Filter by attrbutes. If you have filter for owner on your side please send it as {\&quot;attributes.owner\&quot;:\&quot;6299dcf3874a14eacbc65c46\&quot;} | [optional] |
| **linkedContactsIds** | **int**| Filter by linked contacts ids | [optional] |
| **linkedDealsIds** | **string**| Filter by linked Deals ids | [optional] |
| **page** | **int**| Index of the first document of the page | [optional] |
| **limit** | **int**| Number of documents per page | [optional] |
| **sort** | **string**| Sort the results in the ascending/descending order. Default order is **descending** by creation if &#x60;sort&#x60; is not passed | [optional] |
| **sortBy** | **string**| The field used to sort field names. | [optional] |

### Return type

[**\Brevo\Client\Models\CompaniesList**](../Model/CompaniesList.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesIdDelete()`

```php
companiesIdDelete($id)
```

Delete a company

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


$apiInstance = new Brevo\Client\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Company ID to delete

try {
    $apiInstance->companiesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->companiesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Company ID to delete | |

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

## `companiesIdGet()`

```php
companiesIdGet($id): \Brevo\Client\Models\Company
```

Get a company

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


$apiInstance = new Brevo\Client\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Get Company Details

try {
    $result = $apiInstance->companiesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->companiesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Get Company Details | |

### Return type

[**\Brevo\Client\Models\Company**](../Model/Company.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesIdPatch()`

```php
companiesIdPatch($id, $companiesIdPatchRequest): \Brevo\Client\Models\Company
```

Update a company

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


$apiInstance = new Brevo\Client\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$companiesIdPatchRequest = new \Brevo\Client\Models\CompaniesIdPatchRequest(); // \Brevo\Client\Models\CompaniesIdPatchRequest | Updated company details.

try {
    $result = $apiInstance->companiesIdPatch($id, $companiesIdPatchRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->companiesIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **companiesIdPatchRequest** | [**\Brevo\Client\Models\CompaniesIdPatchRequest**](../Model/CompaniesIdPatchRequest.md)| Updated company details. | |

### Return type

[**\Brevo\Client\Models\Company**](../Model/Company.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesImportPost()`

```php
companiesImportPost($file, $mapping): \Brevo\Client\Models\CompaniesImportPost200Response
```

Import companies(creation and updation)

Import companies from a CSV file with mapping options.

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


$apiInstance = new Brevo\Client\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "/path/to/file.txt"; // \SplFileObject | The CSV file to upload.The file should have the first row as the mapping attribute. Some default attribute names are (a) company_id [brevo mongoID to update deals] (b) associated_contact (c) associated_deal (f) any other attribute with internal name
$mapping = array('key' => new \stdClass); // object | The mapping options in JSON format. Here is an example of the JSON structure: ```json {   \\\"link_entities\\\": true, // Determines whether to link related entities during the import process   \\\"unlink_entities\\\": false, // Determines whether to unlink related entities during the import process   \\\"update_existing_records\\\": true, // Determines whether to update based on company ID or treat every row as create   \\\"unset_empty_attributes\\\": false // Determines whether to unset a specific attribute during update if the values input is blank } ```

try {
    $result = $apiInstance->companiesImportPost($file, $mapping);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->companiesImportPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file** | **\SplFileObject****\SplFileObject**| The CSV file to upload.The file should have the first row as the mapping attribute. Some default attribute names are (a) company_id [brevo mongoID to update deals] (b) associated_contact (c) associated_deal (f) any other attribute with internal name | [optional] |
| **mapping** | [**object**](../Model/object.md)| The mapping options in JSON format. Here is an example of the JSON structure: &#x60;&#x60;&#x60;json {   \\\&quot;link_entities\\\&quot;: true, // Determines whether to link related entities during the import process   \\\&quot;unlink_entities\\\&quot;: false, // Determines whether to unlink related entities during the import process   \\\&quot;update_existing_records\\\&quot;: true, // Determines whether to update based on company ID or treat every row as create   \\\&quot;unset_empty_attributes\\\&quot;: false // Determines whether to unset a specific attribute during update if the values input is blank } &#x60;&#x60;&#x60; | [optional] |

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

## `companiesLinkUnlinkIdPatch()`

```php
companiesLinkUnlinkIdPatch($id, $companiesLinkUnlinkIdPatchRequest)
```

Link and Unlink company with contact and deal

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


$apiInstance = new Brevo\Client\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$companiesLinkUnlinkIdPatchRequest = new \Brevo\Client\Models\CompaniesLinkUnlinkIdPatchRequest(); // \Brevo\Client\Models\CompaniesLinkUnlinkIdPatchRequest | Linked / Unlinked contacts and deals ids.

try {
    $apiInstance->companiesLinkUnlinkIdPatch($id, $companiesLinkUnlinkIdPatchRequest);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->companiesLinkUnlinkIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **companiesLinkUnlinkIdPatchRequest** | [**\Brevo\Client\Models\CompaniesLinkUnlinkIdPatchRequest**](../Model/CompaniesLinkUnlinkIdPatchRequest.md)| Linked / Unlinked contacts and deals ids. | |

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

## `companiesPost()`

```php
companiesPost($companiesPostRequest): \Brevo\Client\Models\CompaniesPost200Response
```

Create a company

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


$apiInstance = new Brevo\Client\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$companiesPostRequest = new \Brevo\Client\Models\CompaniesPostRequest(); // \Brevo\Client\Models\CompaniesPostRequest | Company create data.

try {
    $result = $apiInstance->companiesPost($companiesPostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->companiesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **companiesPostRequest** | [**\Brevo\Client\Models\CompaniesPostRequest**](../Model/CompaniesPostRequest.md)| Company create data. | |

### Return type

[**\Brevo\Client\Models\CompaniesPost200Response**](../Model/CompaniesPost200Response.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
