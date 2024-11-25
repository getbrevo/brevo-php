# Brevo\Client\ProcessApi

All URIs are relative to https://api.brevo.com/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getProcess()**](ProcessApi.md#getProcess) | **GET** /processes/{processId} | Return the informations for a process |
| [**getProcesses()**](ProcessApi.md#getProcesses) | **GET** /processes | Return all the processes for your account |


## `getProcess()`

```php
getProcess($processId): \Brevo\Client\Models\GetProcess
```

Return the informations for a process

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


$apiInstance = new Brevo\Client\Api\ProcessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$processId = 56; // int | Id of the process

try {
    $result = $apiInstance->getProcess($processId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessApi->getProcess: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **processId** | **int**| Id of the process | |

### Return type

[**\Brevo\Client\Models\GetProcess**](../Model/GetProcess.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProcesses()`

```php
getProcesses($limit, $offset, $sort): \Brevo\Client\Models\GetProcesses
```

Return all the processes for your account

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


$apiInstance = new Brevo\Client\Api\ProcessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // int | Number limitation for the result returned
$offset = 0; // int | Beginning point in the list to retrieve from.
$sort = 'desc'; // string | Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed

try {
    $result = $apiInstance->getProcesses($limit, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessApi->getProcesses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Number limitation for the result returned | [optional] [default to 10] |
| **offset** | **int**| Beginning point in the list to retrieve from. | [optional] [default to 0] |
| **sort** | **string**| Sort the results in the ascending/descending order of record creation. Default order is **descending** if &#x60;sort&#x60; is not passed | [optional] [default to &#39;desc&#39;] |

### Return type

[**\Brevo\Client\Models\GetProcesses**](../Model/GetProcesses.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
