# Brevo\Client\ProgramApi

All URIs are relative to https://api.brevo.com/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNewLP()**](ProgramApi.md#createNewLP) | **POST** /loyalty/config/programs | Create loyalty program |
| [**deleteContactMembers()**](ProgramApi.md#deleteContactMembers) | **DELETE** /loyalty/config/programs/{loyaltyProgramId}/subscriptions-members | Delete subscription member |
| [**deleteLoyaltyProgram()**](ProgramApi.md#deleteLoyaltyProgram) | **DELETE** /loyalty/config/programs/{loyaltyProgramId} | Delete Loyalty Program |
| [**deleteSubscriptionMember()**](ProgramApi.md#deleteSubscriptionMember) | **DELETE** /loyalty/config/programs/{loyaltyProgramId}/contact/{contactId} | Delete subscription |
| [**getLPList()**](ProgramApi.md#getLPList) | **GET** /loyalty/config/programs | Get loyalty program list |
| [**getLoyaltyProgramInfo()**](ProgramApi.md#getLoyaltyProgramInfo) | **GET** /loyalty/config/programs/{loyaltyProgramId} | Get loyalty program Info |
| [**getParameterSubscriptionInfo()**](ProgramApi.md#getParameterSubscriptionInfo) | **GET** /loyalty/config/programs/{loyaltyProgramId}/account-info | Get Subscription Data |
| [**getSubscriptionMember()**](ProgramApi.md#getSubscriptionMember) | **GET** /loyalty/config/programs/{loyaltyProgramId}/contact/{contactId} | Get subscription info |
| [**partiallyUpdateLoyaltyProgram()**](ProgramApi.md#partiallyUpdateLoyaltyProgram) | **PATCH** /loyalty/config/programs/{loyaltyProgramId} | Partially update loyalty program |
| [**publishLoyaltyProgram()**](ProgramApi.md#publishLoyaltyProgram) | **POST** /loyalty/config/programs/{loyaltyProgramId}/publish | Publish loyalty program |
| [**subscribeMemberToASubscription()**](ProgramApi.md#subscribeMemberToASubscription) | **POST** /loyalty/config/programs/{loyaltyProgramId}/subscriptions-members | Create subscription member |
| [**subscribeToLoyaltyProgram()**](ProgramApi.md#subscribeToLoyaltyProgram) | **POST** /loyalty/config/programs/{loyaltyProgramId}/subscriptions | Create subscription |
| [**updateLoyaltyProgram()**](ProgramApi.md#updateLoyaltyProgram) | **PUT** /loyalty/config/programs/{loyaltyProgramId} | Update loyalty program |


## `createNewLP()`

```php
createNewLP($createLoyaltyProgramPayload): \Brevo\Client\Models\LoyaltyProgram
```

Create loyalty program

Creates loyalty program

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


$apiInstance = new Brevo\Client\Api\ProgramApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createLoyaltyProgramPayload = new \Brevo\Client\Models\CreateLoyaltyProgramPayload(); // \Brevo\Client\Models\CreateLoyaltyProgramPayload | Loyalty Program information

try {
    $result = $apiInstance->createNewLP($createLoyaltyProgramPayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramApi->createNewLP: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createLoyaltyProgramPayload** | [**\Brevo\Client\Models\CreateLoyaltyProgramPayload**](../Model/CreateLoyaltyProgramPayload.md)| Loyalty Program information | [optional] |

### Return type

[**\Brevo\Client\Models\LoyaltyProgram**](../Model/LoyaltyProgram.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteContactMembers()`

```php
deleteContactMembers($loyaltyProgramId, $contactId, $memberContactIds)
```

Delete subscription member

Deletes member from a subscription

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


$apiInstance = new Brevo\Client\Api\ProgramApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 'loyaltyProgramId_example'; // string | Loyalty Program Id
$contactId = 56; // int | Contact Id
$memberContactIds = 56; // int | Member Contact Ids, comma-seperated

try {
    $apiInstance->deleteContactMembers($loyaltyProgramId, $contactId, $memberContactIds);
} catch (Exception $e) {
    echo 'Exception when calling ProgramApi->deleteContactMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loyaltyProgramId** | **string**| Loyalty Program Id | |
| **contactId** | **int**| Contact Id | |
| **memberContactIds** | **int**| Member Contact Ids, comma-seperated | |

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

## `deleteLoyaltyProgram()`

```php
deleteLoyaltyProgram($loyaltyProgramId)
```

Delete Loyalty Program

Deletes Loyalty Program

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


$apiInstance = new Brevo\Client\Api\ProgramApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 'loyaltyProgramId_example'; // string | Loyalty Program Id

try {
    $apiInstance->deleteLoyaltyProgram($loyaltyProgramId);
} catch (Exception $e) {
    echo 'Exception when calling ProgramApi->deleteLoyaltyProgram: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loyaltyProgramId** | **string**| Loyalty Program Id | |

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

## `deleteSubscriptionMember()`

```php
deleteSubscriptionMember($loyaltyProgramId, $contactId)
```

Delete subscription

Deletes subscription

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


$apiInstance = new Brevo\Client\Api\ProgramApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 'loyaltyProgramId_example'; // string | Loyalty Program Id
$contactId = 'contactId_example'; // string | Contact Id

try {
    $apiInstance->deleteSubscriptionMember($loyaltyProgramId, $contactId);
} catch (Exception $e) {
    echo 'Exception when calling ProgramApi->deleteSubscriptionMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loyaltyProgramId** | **string**| Loyalty Program Id | |
| **contactId** | **string**| Contact Id | |

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

## `getLPList()`

```php
getLPList($limit, $offset, $sortField, $sort): \Brevo\Client\Models\LoyaltyProgramPage
```

Get loyalty program list

Returns list of loyalty programs

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


$apiInstance = new Brevo\Client\Api\ProgramApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 200; // int | Number of documents per page
$offset = 0; // int | Index of the first document in the page
$sortField = 'updatedAt'; // string | Sort documents by field
$sort = 'desc'; // string | Sort the documents in the ascending or descending order

try {
    $result = $apiInstance->getLPList($limit, $offset, $sortField, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramApi->getLPList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Number of documents per page | [optional] [default to 200] |
| **offset** | **int**| Index of the first document in the page | [optional] [default to 0] |
| **sortField** | **string**| Sort documents by field | [optional] [default to &#39;updatedAt&#39;] |
| **sort** | **string**| Sort the documents in the ascending or descending order | [optional] [default to &#39;desc&#39;] |

### Return type

[**\Brevo\Client\Models\LoyaltyProgramPage**](../Model/LoyaltyProgramPage.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLoyaltyProgramInfo()`

```php
getLoyaltyProgramInfo($loyaltyProgramId): \Brevo\Client\Models\LoyaltyProgram
```

Get loyalty program Info

Returns loyalty program

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


$apiInstance = new Brevo\Client\Api\ProgramApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 'loyaltyProgramId_example'; // string | Loyalty Program Id

try {
    $result = $apiInstance->getLoyaltyProgramInfo($loyaltyProgramId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramApi->getLoyaltyProgramInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loyaltyProgramId** | **string**| Loyalty Program Id | |

### Return type

[**\Brevo\Client\Models\LoyaltyProgram**](../Model/LoyaltyProgram.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getParameterSubscriptionInfo()`

```php
getParameterSubscriptionInfo($loyaltyProgramId, $contactId, $loyaltySubscriptionId, $params): \Brevo\Client\Models\GetSubscriptionInfoResponse
```

Get Subscription Data

Get Information of balances, tiers, rewards and subscription members for a subscription

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


$apiInstance = new Brevo\Client\Api\ProgramApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 'loyaltyProgramId_example'; // string | Loyalty Program Id
$contactId = 56; // int | One of contact id or loyalty subscription id is required
$loyaltySubscriptionId = 'loyaltySubscriptionId_example'; // string | Loyalty Subscription Id
$params = array('params_example'); // string[] | Add query params (balance, tier, reward, or member)

try {
    $result = $apiInstance->getParameterSubscriptionInfo($loyaltyProgramId, $contactId, $loyaltySubscriptionId, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramApi->getParameterSubscriptionInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loyaltyProgramId** | **string**| Loyalty Program Id | |
| **contactId** | **int**| One of contact id or loyalty subscription id is required | |
| **loyaltySubscriptionId** | **string**| Loyalty Subscription Id | [optional] |
| **params** | [**string[]**](../Model/string.md)| Add query params (balance, tier, reward, or member) | [optional] |

### Return type

[**\Brevo\Client\Models\GetSubscriptionInfoResponse**](../Model/GetSubscriptionInfoResponse.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubscriptionMember()`

```php
getSubscriptionMember($loyaltyProgramId, $contactId): \Brevo\Client\Models\GetSubscriptionMemberResponse
```

Get subscription info

Get subscription info

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


$apiInstance = new Brevo\Client\Api\ProgramApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 'loyaltyProgramId_example'; // string | Loyalty Program Id
$contactId = 'contactId_example'; // string | Contact Id

try {
    $result = $apiInstance->getSubscriptionMember($loyaltyProgramId, $contactId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramApi->getSubscriptionMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loyaltyProgramId** | **string**| Loyalty Program Id | |
| **contactId** | **string**| Contact Id | |

### Return type

[**\Brevo\Client\Models\GetSubscriptionMemberResponse**](../Model/GetSubscriptionMemberResponse.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `partiallyUpdateLoyaltyProgram()`

```php
partiallyUpdateLoyaltyProgram($loyaltyProgramId, $patchLoyaltyProgramPayload): \Brevo\Client\Models\LoyaltyProgram
```

Partially update loyalty program

Partially updates loyalty program

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


$apiInstance = new Brevo\Client\Api\ProgramApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 'loyaltyProgramId_example'; // string | Loyalty Program Id
$patchLoyaltyProgramPayload = new \Brevo\Client\Models\PatchLoyaltyProgramPayload(); // \Brevo\Client\Models\PatchLoyaltyProgramPayload | Loyalty Program information

try {
    $result = $apiInstance->partiallyUpdateLoyaltyProgram($loyaltyProgramId, $patchLoyaltyProgramPayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramApi->partiallyUpdateLoyaltyProgram: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loyaltyProgramId** | **string**| Loyalty Program Id | |
| **patchLoyaltyProgramPayload** | [**\Brevo\Client\Models\PatchLoyaltyProgramPayload**](../Model/PatchLoyaltyProgramPayload.md)| Loyalty Program information | [optional] |

### Return type

[**\Brevo\Client\Models\LoyaltyProgram**](../Model/LoyaltyProgram.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `publishLoyaltyProgram()`

```php
publishLoyaltyProgram($loyaltyProgramId)
```

Publish loyalty program

Publishes loyalty program

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


$apiInstance = new Brevo\Client\Api\ProgramApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 'loyaltyProgramId_example'; // string | Loyalty Program Id

try {
    $apiInstance->publishLoyaltyProgram($loyaltyProgramId);
} catch (Exception $e) {
    echo 'Exception when calling ProgramApi->publishLoyaltyProgram: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loyaltyProgramId** | **string**| Loyalty Program Id | |

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

## `subscribeMemberToASubscription()`

```php
subscribeMemberToASubscription($loyaltyProgramId, $createSubscriptionMemberPayload): \Brevo\Client\Models\CreateSubscriptionMemberResponse
```

Create subscription member

Add member to a subscription

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


$apiInstance = new Brevo\Client\Api\ProgramApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 'loyaltyProgramId_example'; // string | Loyalty Program Id
$createSubscriptionMemberPayload = new \Brevo\Client\Models\CreateSubscriptionMemberPayload(); // \Brevo\Client\Models\CreateSubscriptionMemberPayload | Subscription Member information

try {
    $result = $apiInstance->subscribeMemberToASubscription($loyaltyProgramId, $createSubscriptionMemberPayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramApi->subscribeMemberToASubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loyaltyProgramId** | **string**| Loyalty Program Id | |
| **createSubscriptionMemberPayload** | [**\Brevo\Client\Models\CreateSubscriptionMemberPayload**](../Model/CreateSubscriptionMemberPayload.md)| Subscription Member information | [optional] |

### Return type

[**\Brevo\Client\Models\CreateSubscriptionMemberResponse**](../Model/CreateSubscriptionMemberResponse.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subscribeToLoyaltyProgram()`

```php
subscribeToLoyaltyProgram($loyaltyProgramId, $createSubscriptionPayload): \Brevo\Client\Models\CreateSubscriptionResponse
```

Create subscription

Subscribes to a loyalty program

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


$apiInstance = new Brevo\Client\Api\ProgramApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 'loyaltyProgramId_example'; // string | Loyalty Program ID
$createSubscriptionPayload = new \Brevo\Client\Models\CreateSubscriptionPayload(); // \Brevo\Client\Models\CreateSubscriptionPayload | Subscription information

try {
    $result = $apiInstance->subscribeToLoyaltyProgram($loyaltyProgramId, $createSubscriptionPayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramApi->subscribeToLoyaltyProgram: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loyaltyProgramId** | **string**| Loyalty Program ID | |
| **createSubscriptionPayload** | [**\Brevo\Client\Models\CreateSubscriptionPayload**](../Model/CreateSubscriptionPayload.md)| Subscription information | |

### Return type

[**\Brevo\Client\Models\CreateSubscriptionResponse**](../Model/CreateSubscriptionResponse.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLoyaltyProgram()`

```php
updateLoyaltyProgram($loyaltyProgramId, $updateLoyaltyProgramPayload): \Brevo\Client\Models\LoyaltyProgram
```

Update loyalty program

Updates loyalty program

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


$apiInstance = new Brevo\Client\Api\ProgramApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 'loyaltyProgramId_example'; // string | Loyalty Program Id
$updateLoyaltyProgramPayload = new \Brevo\Client\Models\UpdateLoyaltyProgramPayload(); // \Brevo\Client\Models\UpdateLoyaltyProgramPayload | Loyalty Program information

try {
    $result = $apiInstance->updateLoyaltyProgram($loyaltyProgramId, $updateLoyaltyProgramPayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramApi->updateLoyaltyProgram: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loyaltyProgramId** | **string**| Loyalty Program Id | |
| **updateLoyaltyProgramPayload** | [**\Brevo\Client\Models\UpdateLoyaltyProgramPayload**](../Model/UpdateLoyaltyProgramPayload.md)| Loyalty Program information | [optional] |

### Return type

[**\Brevo\Client\Models\LoyaltyProgram**](../Model/LoyaltyProgram.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
