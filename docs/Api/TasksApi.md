# Brevo\Client\TasksApi

All URIs are relative to https://api.brevo.com/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**crmTasksGet()**](TasksApi.md#crmTasksGet) | **GET** /crm/tasks | Get all tasks |
| [**crmTasksIdDelete()**](TasksApi.md#crmTasksIdDelete) | **DELETE** /crm/tasks/{id} | Delete a task |
| [**crmTasksIdGet()**](TasksApi.md#crmTasksIdGet) | **GET** /crm/tasks/{id} | Get a task |
| [**crmTasksIdPatch()**](TasksApi.md#crmTasksIdPatch) | **PATCH** /crm/tasks/{id} | Update a task |
| [**crmTasksPost()**](TasksApi.md#crmTasksPost) | **POST** /crm/tasks | Create a task |
| [**crmTasktypesGet()**](TasksApi.md#crmTasktypesGet) | **GET** /crm/tasktypes | Get all task types |


## `crmTasksGet()`

```php
crmTasksGet($filterType, $filterStatus, $filterDate, $filterAssignTo, $filterContacts, $filterDeals, $filterCompanies, $dateFrom, $dateTo, $offset, $limit, $sort, $sortBy): \Brevo\Client\Models\TaskList
```

Get all tasks

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


$apiInstance = new Brevo\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filterType = 'filterType_example'; // string | Filter by task type (ID)
$filterStatus = 'filterStatus_example'; // string | Filter by task status
$filterDate = 'filterDate_example'; // string | Filter by date
$filterAssignTo = 'filterAssignTo_example'; // string | Filter by the \"assignTo\" ID. You can utilize account emails for the \"assignTo\" attribute.
$filterContacts = 'filterContacts_example'; // string | Filter by contact ids
$filterDeals = 'filterDeals_example'; // string | Filter by deals ids
$filterCompanies = 'filterCompanies_example'; // string | Filter by companies ids
$dateFrom = 56; // int | dateFrom to date range filter type (timestamp in milliseconds)
$dateTo = 56; // int | dateTo to date range filter type (timestamp in milliseconds)
$offset = 56; // int | Index of the first document of the page
$limit = 50; // int | Number of documents per page
$sort = 'sort_example'; // string | Sort the results in the ascending/descending order. Default order is **descending** by creation if `sort` is not passed
$sortBy = name; // string | The field used to sort field names.

try {
    $result = $apiInstance->crmTasksGet($filterType, $filterStatus, $filterDate, $filterAssignTo, $filterContacts, $filterDeals, $filterCompanies, $dateFrom, $dateTo, $offset, $limit, $sort, $sortBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->crmTasksGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filterType** | **string**| Filter by task type (ID) | [optional] |
| **filterStatus** | **string**| Filter by task status | [optional] |
| **filterDate** | **string**| Filter by date | [optional] |
| **filterAssignTo** | **string**| Filter by the \&quot;assignTo\&quot; ID. You can utilize account emails for the \&quot;assignTo\&quot; attribute. | [optional] |
| **filterContacts** | **string**| Filter by contact ids | [optional] |
| **filterDeals** | **string**| Filter by deals ids | [optional] |
| **filterCompanies** | **string**| Filter by companies ids | [optional] |
| **dateFrom** | **int**| dateFrom to date range filter type (timestamp in milliseconds) | [optional] |
| **dateTo** | **int**| dateTo to date range filter type (timestamp in milliseconds) | [optional] |
| **offset** | **int**| Index of the first document of the page | [optional] |
| **limit** | **int**| Number of documents per page | [optional] [default to 50] |
| **sort** | **string**| Sort the results in the ascending/descending order. Default order is **descending** by creation if &#x60;sort&#x60; is not passed | [optional] |
| **sortBy** | **string**| The field used to sort field names. | [optional] |

### Return type

[**\Brevo\Client\Models\TaskList**](../Model/TaskList.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `crmTasksIdDelete()`

```php
crmTasksIdDelete($id)
```

Delete a task

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


$apiInstance = new Brevo\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->crmTasksIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->crmTasksIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `crmTasksIdGet()`

```php
crmTasksIdGet($id): \Brevo\Client\Models\Task
```

Get a task

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


$apiInstance = new Brevo\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->crmTasksIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->crmTasksIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Brevo\Client\Models\Task**](../Model/Task.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `crmTasksIdPatch()`

```php
crmTasksIdPatch($id, $crmTasksIdPatchRequest)
```

Update a task

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


$apiInstance = new Brevo\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$crmTasksIdPatchRequest = new \Brevo\Client\Models\CrmTasksIdPatchRequest(); // \Brevo\Client\Models\CrmTasksIdPatchRequest | Updated task details.

try {
    $apiInstance->crmTasksIdPatch($id, $crmTasksIdPatchRequest);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->crmTasksIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **crmTasksIdPatchRequest** | [**\Brevo\Client\Models\CrmTasksIdPatchRequest**](../Model/CrmTasksIdPatchRequest.md)| Updated task details. | |

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

## `crmTasksPost()`

```php
crmTasksPost($crmTasksPostRequest): \Brevo\Client\Models\CrmTasksPost201Response
```

Create a task

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


$apiInstance = new Brevo\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$crmTasksPostRequest = new \Brevo\Client\Models\CrmTasksPostRequest(); // \Brevo\Client\Models\CrmTasksPostRequest | Task name.

try {
    $result = $apiInstance->crmTasksPost($crmTasksPostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->crmTasksPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **crmTasksPostRequest** | [**\Brevo\Client\Models\CrmTasksPostRequest**](../Model/CrmTasksPostRequest.md)| Task name. | |

### Return type

[**\Brevo\Client\Models\CrmTasksPost201Response**](../Model/CrmTasksPost201Response.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `crmTasktypesGet()`

```php
crmTasktypesGet(): \Brevo\Client\Models\TaskTypes
```

Get all task types

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


$apiInstance = new Brevo\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->crmTasktypesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->crmTasktypesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Brevo\Client\Models\TaskTypes**](../Model/TaskTypes.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
