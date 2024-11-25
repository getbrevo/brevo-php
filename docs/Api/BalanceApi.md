# Brevo\Client\BalanceApi

All URIs are relative to https://api.brevo.com/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**beginTransaction()**](BalanceApi.md#beginTransaction) | **POST** /loyalty/balance/programs/{loyaltyProgramId}/transactions | Create new transaction |
| [**cancelTransaction()**](BalanceApi.md#cancelTransaction) | **POST** /loyalty/balance/programs/{loyaltyProgramId}/transactions/{transactionId}/cancel | Cancel transaction |
| [**completeTransaction()**](BalanceApi.md#completeTransaction) | **POST** /loyalty/balance/programs/{loyaltyProgramId}/transactions/{transactionId}/complete | Complete transaction |
| [**createBalanceOrder()**](BalanceApi.md#createBalanceOrder) | **POST** /loyalty/balance/programs/{loyaltyProgramId}/create-order | Create balance order |
| [**getBalanceDefinitionList()**](BalanceApi.md#getBalanceDefinitionList) | **GET** /loyalty/balance/programs/{loyaltyProgramId}/balance-definitions | Get balance definition list |
| [**getContactBalances()**](BalanceApi.md#getContactBalances) | **GET** /loyalty/balance/programs/{loyaltyProgramId}/contact-balances | Get balance list |
| [**getSubscriptionBalances()**](BalanceApi.md#getSubscriptionBalances) | **GET** /loyalty/balance/programs/{loyaltyProgramId}/subscriptions/{contactId}/balances | Get subscription balances |
| [**loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsBalanceDefinitionIdDelete()**](BalanceApi.md#loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsBalanceDefinitionIdDelete) | **DELETE** /loyalty/balance/programs/{loyaltyProgramId}/balance-definitions/{balanceDefinitionId} | Delete balance definition |
| [**loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsBalanceDefinitionIdGet()**](BalanceApi.md#loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsBalanceDefinitionIdGet) | **GET** /loyalty/balance/programs/{loyaltyProgramId}/balance-definitions/{balanceDefinitionId} | Get balance definition |
| [**loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsBalanceDefinitionIdLimitsBalanceLimitIdDelete()**](BalanceApi.md#loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsBalanceDefinitionIdLimitsBalanceLimitIdDelete) | **DELETE** /loyalty/balance/programs/{loyaltyProgramId}/balance-definitions/{balanceDefinitionId}/limits/{balanceLimitId} | Delete balance limit |
| [**loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsBalanceDefinitionIdLimitsBalanceLimitIdGet()**](BalanceApi.md#loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsBalanceDefinitionIdLimitsBalanceLimitIdGet) | **GET** /loyalty/balance/programs/{loyaltyProgramId}/balance-definitions/{balanceDefinitionId}/limits/{balanceLimitId} | Get balance limits |
| [**loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsBalanceDefinitionIdLimitsBalanceLimitIdPut()**](BalanceApi.md#loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsBalanceDefinitionIdLimitsBalanceLimitIdPut) | **PUT** /loyalty/balance/programs/{loyaltyProgramId}/balance-definitions/{balanceDefinitionId}/limits/{balanceLimitId} | Updates balance limit |
| [**loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsBalanceDefinitionIdLimitsPost()**](BalanceApi.md#loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsBalanceDefinitionIdLimitsPost) | **POST** /loyalty/balance/programs/{loyaltyProgramId}/balance-definitions/{balanceDefinitionId}/limits | Create balance limits |
| [**loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsBalanceDefinitionIdPut()**](BalanceApi.md#loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsBalanceDefinitionIdPut) | **PUT** /loyalty/balance/programs/{loyaltyProgramId}/balance-definitions/{balanceDefinitionId} | Update balance definition |
| [**loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsPost()**](BalanceApi.md#loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsPost) | **POST** /loyalty/balance/programs/{loyaltyProgramId}/balance-definitions | Create balance definition |


## `beginTransaction()`

```php
beginTransaction($loyaltyProgramId, $createTransactionPayload): \Brevo\Client\Models\Transaction
```

Create new transaction

Creates new transaction and returns information

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


$apiInstance = new Brevo\Client\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 'loyaltyProgramId_example'; // string | Loyalty Program Id
$createTransactionPayload = new \Brevo\Client\Models\CreateTransactionPayload(); // \Brevo\Client\Models\CreateTransactionPayload | Transaction information

try {
    $result = $apiInstance->beginTransaction($loyaltyProgramId, $createTransactionPayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->beginTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loyaltyProgramId** | **string**| Loyalty Program Id | |
| **createTransactionPayload** | [**\Brevo\Client\Models\CreateTransactionPayload**](../Model/CreateTransactionPayload.md)| Transaction information | [optional] |

### Return type

[**\Brevo\Client\Models\Transaction**](../Model/Transaction.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelTransaction()`

```php
cancelTransaction($loyaltyProgramId, $transactionId): \Brevo\Client\Models\CancelledTransaction
```

Cancel transaction

Cancels transaction

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


$apiInstance = new Brevo\Client\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 'loyaltyProgramId_example'; // string | Loyalty program Id
$transactionId = 'transactionId_example'; // string | Transaction Id

try {
    $result = $apiInstance->cancelTransaction($loyaltyProgramId, $transactionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->cancelTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loyaltyProgramId** | **string**| Loyalty program Id | |
| **transactionId** | **string**| Transaction Id | |

### Return type

[**\Brevo\Client\Models\CancelledTransaction**](../Model/CancelledTransaction.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `completeTransaction()`

```php
completeTransaction($loyaltyProgramId, $transactionId, $completeTransactionPayload): \Brevo\Client\Models\CompletedTransaction
```

Complete transaction

Completes transaction

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


$apiInstance = new Brevo\Client\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 'loyaltyProgramId_example'; // string | Loyalty Program Id
$transactionId = 'transactionId_example'; // string | Transaction Id
$completeTransactionPayload = new \Brevo\Client\Models\CompleteTransactionPayload(); // \Brevo\Client\Models\CompleteTransactionPayload | Transaction information

try {
    $result = $apiInstance->completeTransaction($loyaltyProgramId, $transactionId, $completeTransactionPayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->completeTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loyaltyProgramId** | **string**| Loyalty Program Id | |
| **transactionId** | **string**| Transaction Id | |
| **completeTransactionPayload** | [**\Brevo\Client\Models\CompleteTransactionPayload**](../Model/CompleteTransactionPayload.md)| Transaction information | [optional] |

### Return type

[**\Brevo\Client\Models\CompletedTransaction**](../Model/CompletedTransaction.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createBalanceOrder()`

```php
createBalanceOrder($loyaltyProgramId, $createOrderPayload): \Brevo\Client\Models\CreateOrderPayload
```

Create balance order

Returns created order

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


$apiInstance = new Brevo\Client\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 'loyaltyProgramId_example'; // string | Loyalty Program Id
$createOrderPayload = new \Brevo\Client\Models\CreateOrderPayload(); // \Brevo\Client\Models\CreateOrderPayload | Create order information

try {
    $result = $apiInstance->createBalanceOrder($loyaltyProgramId, $createOrderPayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->createBalanceOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loyaltyProgramId** | **string**| Loyalty Program Id | |
| **createOrderPayload** | [**\Brevo\Client\Models\CreateOrderPayload**](../Model/CreateOrderPayload.md)| Create order information | [optional] |

### Return type

[**\Brevo\Client\Models\CreateOrderPayload**](../Model/CreateOrderPayload.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBalanceDefinitionList()`

```php
getBalanceDefinitionList($loyaltyProgramId, $limit, $offset, $sortField, $sort, $version): \Brevo\Client\Models\BalanceDefinitionPage
```

Get balance definition list

Returns balance definition page

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


$apiInstance = new Brevo\Client\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 'loyaltyProgramId_example'; // string | Loyalty Program Id
$limit = 50; // int | Number of documents per page
$offset = 0; // int | Index of the first document in the page
$sortField = 'name'; // string | Sort documents by field
$sort = 'desc'; // string | Sort the documents in the ascending or descending order
$version = 'draft'; // string | Select 'active' to retrieve list of all balances which are live for clients. Select draft to retrieve list of all non deleted balances.

try {
    $result = $apiInstance->getBalanceDefinitionList($loyaltyProgramId, $limit, $offset, $sortField, $sort, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->getBalanceDefinitionList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loyaltyProgramId** | **string**| Loyalty Program Id | |
| **limit** | **int**| Number of documents per page | [optional] [default to 50] |
| **offset** | **int**| Index of the first document in the page | [optional] [default to 0] |
| **sortField** | **string**| Sort documents by field | [optional] [default to &#39;name&#39;] |
| **sort** | **string**| Sort the documents in the ascending or descending order | [optional] [default to &#39;desc&#39;] |
| **version** | **string**| Select &#39;active&#39; to retrieve list of all balances which are live for clients. Select draft to retrieve list of all non deleted balances. | [optional] [default to &#39;draft&#39;] |

### Return type

[**\Brevo\Client\Models\BalanceDefinitionPage**](../Model/BalanceDefinitionPage.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactBalances()`

```php
getContactBalances($loyaltyProgramId, $balanceDefinitionId, $limit, $offset, $sort, $sortField): \Brevo\Client\Models\ContactBalances
```

Get balance list

Returns balance list

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


$apiInstance = new Brevo\Client\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 'loyaltyProgramId_example'; // string | Loyalty program id
$balanceDefinitionId = 'balanceDefinitionId_example'; // string | Balance Definition Id
$limit = 100; // int | Number of documents per page
$offset = 0; // int | Index of the first document in the page
$sort = 'desc'; // string | Sort the documents in the ascending or descending order
$sortField = 'updatedAt'; // string | Sort documents by field

try {
    $result = $apiInstance->getContactBalances($loyaltyProgramId, $balanceDefinitionId, $limit, $offset, $sort, $sortField);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->getContactBalances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loyaltyProgramId** | **string**| Loyalty program id | |
| **balanceDefinitionId** | **string**| Balance Definition Id | |
| **limit** | **int**| Number of documents per page | [optional] [default to 100] |
| **offset** | **int**| Index of the first document in the page | [optional] [default to 0] |
| **sort** | **string**| Sort the documents in the ascending or descending order | [optional] [default to &#39;desc&#39;] |
| **sortField** | **string**| Sort documents by field | [optional] [default to &#39;updatedAt&#39;] |

### Return type

[**\Brevo\Client\Models\ContactBalances**](../Model/ContactBalances.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubscriptionBalances()`

```php
getSubscriptionBalances($loyaltyProgramId, $contactId): \Brevo\Client\Models\BalancePage
```

Get subscription balances

Returns subscription balances

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


$apiInstance = new Brevo\Client\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 'loyaltyProgramId_example'; // string | Loyalty Program Id
$contactId = 'contactId_example'; // string | Contact id

try {
    $result = $apiInstance->getSubscriptionBalances($loyaltyProgramId, $contactId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->getSubscriptionBalances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loyaltyProgramId** | **string**| Loyalty Program Id | |
| **contactId** | **string**| Contact id | |

### Return type

[**\Brevo\Client\Models\BalancePage**](../Model/BalancePage.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsBalanceDefinitionIdDelete()`

```php
loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsBalanceDefinitionIdDelete($loyaltyProgramId, $balanceDefinitionId)
```

Delete balance definition

Delete Balance definition

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


$apiInstance = new Brevo\Client\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 'loyaltyProgramId_example'; // string | Loyalty Program Id
$balanceDefinitionId = 'balanceDefinitionId_example'; // string | Balance Definition Id

try {
    $apiInstance->loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsBalanceDefinitionIdDelete($loyaltyProgramId, $balanceDefinitionId);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsBalanceDefinitionIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loyaltyProgramId** | **string**| Loyalty Program Id | |
| **balanceDefinitionId** | **string**| Balance Definition Id | |

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

## `loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsBalanceDefinitionIdGet()`

```php
loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsBalanceDefinitionIdGet($loyaltyProgramId, $balanceDefinitionId, $version): \Brevo\Client\Models\BalanceDefinition
```

Get balance definition

Returns balance definition

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


$apiInstance = new Brevo\Client\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 'loyaltyProgramId_example'; // string | Loyalty Program Id
$balanceDefinitionId = 'balanceDefinitionId_example'; // string | Balance Definition Id
$version = 'draft'; // string | Select active to get balance definition configuration which is live for the clients. Select draft to retrieve balance definition configuration with the recent edits

try {
    $result = $apiInstance->loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsBalanceDefinitionIdGet($loyaltyProgramId, $balanceDefinitionId, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsBalanceDefinitionIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loyaltyProgramId** | **string**| Loyalty Program Id | |
| **balanceDefinitionId** | **string**| Balance Definition Id | |
| **version** | **string**| Select active to get balance definition configuration which is live for the clients. Select draft to retrieve balance definition configuration with the recent edits | [optional] [default to &#39;draft&#39;] |

### Return type

[**\Brevo\Client\Models\BalanceDefinition**](../Model/BalanceDefinition.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsBalanceDefinitionIdLimitsBalanceLimitIdDelete()`

```php
loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsBalanceDefinitionIdLimitsBalanceLimitIdDelete($loyaltyProgramId, $balanceDefinitionId, $balanceLimitId)
```

Delete balance limit

Delete balance limit

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


$apiInstance = new Brevo\Client\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 'loyaltyProgramId_example'; // string | Loyalty Program Id
$balanceDefinitionId = 'balanceDefinitionId_example'; // string | Balance Definition Id
$balanceLimitId = 'balanceLimitId_example'; // string | Id of the limit to be deleted

try {
    $apiInstance->loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsBalanceDefinitionIdLimitsBalanceLimitIdDelete($loyaltyProgramId, $balanceDefinitionId, $balanceLimitId);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsBalanceDefinitionIdLimitsBalanceLimitIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loyaltyProgramId** | **string**| Loyalty Program Id | |
| **balanceDefinitionId** | **string**| Balance Definition Id | |
| **balanceLimitId** | **string**| Id of the limit to be deleted | |

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

## `loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsBalanceDefinitionIdLimitsBalanceLimitIdGet()`

```php
loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsBalanceDefinitionIdLimitsBalanceLimitIdGet($loyaltyProgramId, $balanceDefinitionId, $balanceLimitId, $version): \Brevo\Client\Models\BalanceLimitPayload
```

Get balance limits

Fetches balance limits and send the created UUID along with the data

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


$apiInstance = new Brevo\Client\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 'loyaltyProgramId_example'; // string | Loyalty Program Id
$balanceDefinitionId = 'balanceDefinitionId_example'; // string | Balance definition id
$balanceLimitId = 'balanceLimitId_example'; // string | Balance limit id
$version = 'draft'; // string | Select active to get balance definition configuration which is live for the clients. Select draft to retrieve balance definition configuration with the recent edits

try {
    $result = $apiInstance->loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsBalanceDefinitionIdLimitsBalanceLimitIdGet($loyaltyProgramId, $balanceDefinitionId, $balanceLimitId, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsBalanceDefinitionIdLimitsBalanceLimitIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loyaltyProgramId** | **string**| Loyalty Program Id | |
| **balanceDefinitionId** | **string**| Balance definition id | |
| **balanceLimitId** | **string**| Balance limit id | |
| **version** | **string**| Select active to get balance definition configuration which is live for the clients. Select draft to retrieve balance definition configuration with the recent edits | [optional] [default to &#39;draft&#39;] |

### Return type

[**\Brevo\Client\Models\BalanceLimitPayload**](../Model/BalanceLimitPayload.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsBalanceDefinitionIdLimitsBalanceLimitIdPut()`

```php
loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsBalanceDefinitionIdLimitsBalanceLimitIdPut($loyaltyProgramId, $balanceDefinitionId, $balanceLimitId, $balanceLimit): \Brevo\Client\Models\BalanceLimitPayload
```

Updates balance limit

Updates balance limit

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


$apiInstance = new Brevo\Client\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 'loyaltyProgramId_example'; // string | Loyalty Program Id
$balanceDefinitionId = 'balanceDefinitionId_example'; // string | Balance Definition Id
$balanceLimitId = 'balanceLimitId_example'; // string | Balance Limit Id
$balanceLimit = new \Brevo\Client\Models\BalanceLimit(); // \Brevo\Client\Models\BalanceLimit | Balance limit request

try {
    $result = $apiInstance->loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsBalanceDefinitionIdLimitsBalanceLimitIdPut($loyaltyProgramId, $balanceDefinitionId, $balanceLimitId, $balanceLimit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsBalanceDefinitionIdLimitsBalanceLimitIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loyaltyProgramId** | **string**| Loyalty Program Id | |
| **balanceDefinitionId** | **string**| Balance Definition Id | |
| **balanceLimitId** | **string**| Balance Limit Id | |
| **balanceLimit** | [**\Brevo\Client\Models\BalanceLimit**](../Model/BalanceLimit.md)| Balance limit request | [optional] |

### Return type

[**\Brevo\Client\Models\BalanceLimitPayload**](../Model/BalanceLimitPayload.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsBalanceDefinitionIdLimitsPost()`

```php
loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsBalanceDefinitionIdLimitsPost($loyaltyProgramId, $balanceDefinitionId, $balanceLimit): \Brevo\Client\Models\BalanceLimitPayload
```

Create balance limits

Creates balance limit and send the created UUID along with the data

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


$apiInstance = new Brevo\Client\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 'loyaltyProgramId_example'; // string | Loyalty Program Id
$balanceDefinitionId = 'balanceDefinitionId_example'; // string | Balance Definition Id
$balanceLimit = new \Brevo\Client\Models\BalanceLimit(); // \Brevo\Client\Models\BalanceLimit | Balance definition information

try {
    $result = $apiInstance->loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsBalanceDefinitionIdLimitsPost($loyaltyProgramId, $balanceDefinitionId, $balanceLimit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsBalanceDefinitionIdLimitsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loyaltyProgramId** | **string**| Loyalty Program Id | |
| **balanceDefinitionId** | **string**| Balance Definition Id | |
| **balanceLimit** | [**\Brevo\Client\Models\BalanceLimit**](../Model/BalanceLimit.md)| Balance definition information | [optional] |

### Return type

[**\Brevo\Client\Models\BalanceLimitPayload**](../Model/BalanceLimitPayload.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsBalanceDefinitionIdPut()`

```php
loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsBalanceDefinitionIdPut($loyaltyProgramId, $balanceDefinitionId, $updateBalanceDefinitionPayload): \Brevo\Client\Models\BalanceDefinition
```

Update balance definition

Updates Balance definition

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


$apiInstance = new Brevo\Client\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 'loyaltyProgramId_example'; // string | Loyalty Program Id
$balanceDefinitionId = 'balanceDefinitionId_example'; // string | Balance Definition Id
$updateBalanceDefinitionPayload = new \Brevo\Client\Models\UpdateBalanceDefinitionPayload(); // \Brevo\Client\Models\UpdateBalanceDefinitionPayload | Balance definition information

try {
    $result = $apiInstance->loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsBalanceDefinitionIdPut($loyaltyProgramId, $balanceDefinitionId, $updateBalanceDefinitionPayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsBalanceDefinitionIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loyaltyProgramId** | **string**| Loyalty Program Id | |
| **balanceDefinitionId** | **string**| Balance Definition Id | |
| **updateBalanceDefinitionPayload** | [**\Brevo\Client\Models\UpdateBalanceDefinitionPayload**](../Model/UpdateBalanceDefinitionPayload.md)| Balance definition information | [optional] |

### Return type

[**\Brevo\Client\Models\BalanceDefinition**](../Model/BalanceDefinition.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsPost()`

```php
loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsPost($loyaltyProgramId, $createBalanceDefinitionPayload): \Brevo\Client\Models\BalanceDefinition
```

Create balance definition

Creates balance definition and returns information

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


$apiInstance = new Brevo\Client\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 'loyaltyProgramId_example'; // string | Loyalty Program Id
$createBalanceDefinitionPayload = new \Brevo\Client\Models\CreateBalanceDefinitionPayload(); // \Brevo\Client\Models\CreateBalanceDefinitionPayload | Balance definition information

try {
    $result = $apiInstance->loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsPost($loyaltyProgramId, $createBalanceDefinitionPayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loyaltyProgramId** | **string**| Loyalty Program Id | |
| **createBalanceDefinitionPayload** | [**\Brevo\Client\Models\CreateBalanceDefinitionPayload**](../Model/CreateBalanceDefinitionPayload.md)| Balance definition information | |

### Return type

[**\Brevo\Client\Models\BalanceDefinition**](../Model/BalanceDefinition.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
