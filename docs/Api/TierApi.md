# Brevo\Client\TierApi

All URIs are relative to https://api.brevo.com/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createTierForTierGroup()**](TierApi.md#createTierForTierGroup) | **POST** /loyalty/tier/programs/{loyaltyProgramId}/tier-groups/{tierGroupId}/tiers | Create new tier |
| [**createTierGroup()**](TierApi.md#createTierGroup) | **POST** /loyalty/tier/programs/{loyaltyProgramId}/tier-groups | Create tier group |
| [**deleteTierGroup()**](TierApi.md#deleteTierGroup) | **DELETE** /loyalty/tier/programs/{loyaltyProgramId}/tier-groups/{tierGroupId} | Delete tier group |
| [**getListOfTierGroups()**](TierApi.md#getListOfTierGroups) | **GET** /loyalty/tier/programs/{loyaltyProgramId}/tier-groups | Get tier group page |
| [**getLoyaltyProgramTier()**](TierApi.md#getLoyaltyProgramTier) | **GET** /loyalty/tier/programs/{loyaltyProgramId}/tiers | Get tier page |
| [**getTierGroup()**](TierApi.md#getTierGroup) | **GET** /loyalty/tier/programs/{loyaltyProgramId}/tier-groups/{tierGroupId} | Get tier group by Id |
| [**loyaltyTierProgramsLoyaltyProgramIdContactsContactIdTiersTierIdPost()**](TierApi.md#loyaltyTierProgramsLoyaltyProgramIdContactsContactIdTiersTierIdPost) | **POST** /loyalty/tier/programs/{loyaltyProgramId}/contacts/{contactId}/tiers/{tierId} | Add subscription to a tier |
| [**loyaltyTierProgramsLoyaltyProgramIdTiersTierIdDelete()**](TierApi.md#loyaltyTierProgramsLoyaltyProgramIdTiersTierIdDelete) | **DELETE** /loyalty/tier/programs/{loyaltyProgramId}/tiers/{tierId} | Delete tier |
| [**loyaltyTierProgramsLoyaltyProgramIdTiersTierIdPut()**](TierApi.md#loyaltyTierProgramsLoyaltyProgramIdTiersTierIdPut) | **PUT** /loyalty/tier/programs/{loyaltyProgramId}/tiers/{tierId} | Update tier |
| [**updateTierGroup()**](TierApi.md#updateTierGroup) | **PUT** /loyalty/tier/programs/{loyaltyProgramId}/tier-groups/{tierGroupId} | Update tier group |


## `createTierForTierGroup()`

```php
createTierForTierGroup($loyaltyProgramId, $tierGroupId, $tierRequest): \Brevo\Client\Models\Tier
```

Create new tier

Creates a new tier for the specified tier group

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


$apiInstance = new Brevo\Client\Api\TierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 'loyaltyProgramId_example'; // string | Loyalty Program Id
$tierGroupId = 'tierGroupId_example'; // string | Tier group Id
$tierRequest = new \Brevo\Client\Models\TierRequest(); // \Brevo\Client\Models\TierRequest

try {
    $result = $apiInstance->createTierForTierGroup($loyaltyProgramId, $tierGroupId, $tierRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TierApi->createTierForTierGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loyaltyProgramId** | **string**| Loyalty Program Id | |
| **tierGroupId** | **string**| Tier group Id | |
| **tierRequest** | [**\Brevo\Client\Models\TierRequest**](../Model/TierRequest.md)|  | |

### Return type

[**\Brevo\Client\Models\Tier**](../Model/Tier.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTierGroup()`

```php
createTierGroup($loyaltyProgramId, $createTierGroupRequest): \Brevo\Client\Models\TierGroup
```

Create tier group

Creates tier group for the specified loyalty program

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


$apiInstance = new Brevo\Client\Api\TierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 'loyaltyProgramId_example'; // string | Loyalty Program Id
$createTierGroupRequest = new \Brevo\Client\Models\CreateTierGroupRequest(); // \Brevo\Client\Models\CreateTierGroupRequest | Subscription Member information

try {
    $result = $apiInstance->createTierGroup($loyaltyProgramId, $createTierGroupRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TierApi->createTierGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loyaltyProgramId** | **string**| Loyalty Program Id | |
| **createTierGroupRequest** | [**\Brevo\Client\Models\CreateTierGroupRequest**](../Model/CreateTierGroupRequest.md)| Subscription Member information | |

### Return type

[**\Brevo\Client\Models\TierGroup**](../Model/TierGroup.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTierGroup()`

```php
deleteTierGroup($loyaltyProgramId, $tierGroupId)
```

Delete tier group

Deletes tier group for the specified loyalty program

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


$apiInstance = new Brevo\Client\Api\TierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 'loyaltyProgramId_example'; // string | Loyalty Program Id
$tierGroupId = 'tierGroupId_example'; // string | Tier group Id

try {
    $apiInstance->deleteTierGroup($loyaltyProgramId, $tierGroupId);
} catch (Exception $e) {
    echo 'Exception when calling TierApi->deleteTierGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loyaltyProgramId** | **string**| Loyalty Program Id | |
| **tierGroupId** | **string**| Tier group Id | |

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

## `getListOfTierGroups()`

```php
getListOfTierGroups($loyaltyProgramId, $version): \Brevo\Client\Models\TierGroupPage
```

Get tier group page

Return a list of tier groups for the specified loyalty program

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


$apiInstance = new Brevo\Client\Api\TierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 'loyaltyProgramId_example'; // string | Loyalty Program Id
$version = 'draft'; // string | Select 'active' to retrieve list of all tier groups which are live for clients. Select draft to retrieve list of all non deleted tier groups.

try {
    $result = $apiInstance->getListOfTierGroups($loyaltyProgramId, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TierApi->getListOfTierGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loyaltyProgramId** | **string**| Loyalty Program Id | |
| **version** | **string**| Select &#39;active&#39; to retrieve list of all tier groups which are live for clients. Select draft to retrieve list of all non deleted tier groups. | [optional] [default to &#39;draft&#39;] |

### Return type

[**\Brevo\Client\Models\TierGroupPage**](../Model/TierGroupPage.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLoyaltyProgramTier()`

```php
getLoyaltyProgramTier($loyaltyProgramId, $version): \Brevo\Client\Models\LoyaltyTierPage
```

Get tier page

Returns tier page

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


$apiInstance = new Brevo\Client\Api\TierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 'loyaltyProgramId_example'; // string | Loyalty Program Id
$version = 'draft'; // string | Select 'active' to retrieve list of all tiers which are live for clients. Select draft to retrieve list of all non deleted tiers.

try {
    $result = $apiInstance->getLoyaltyProgramTier($loyaltyProgramId, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TierApi->getLoyaltyProgramTier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loyaltyProgramId** | **string**| Loyalty Program Id | |
| **version** | **string**| Select &#39;active&#39; to retrieve list of all tiers which are live for clients. Select draft to retrieve list of all non deleted tiers. | [optional] [default to &#39;draft&#39;] |

### Return type

[**\Brevo\Client\Models\LoyaltyTierPage**](../Model/LoyaltyTierPage.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTierGroup()`

```php
getTierGroup($loyaltyProgramId, $tierGroupId, $version): \Brevo\Client\Models\TierGroup
```

Get tier group by Id

Returns the specified tier group for the specified loyalty program

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


$apiInstance = new Brevo\Client\Api\TierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 'loyaltyProgramId_example'; // string | Loyalty Program Id
$tierGroupId = 'tierGroupId_example'; // string | Tier group Id
$version = 'draft'; // string | Select active to retrieve active version of tier group. Select draft to retrieve latest changes in tier group.

try {
    $result = $apiInstance->getTierGroup($loyaltyProgramId, $tierGroupId, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TierApi->getTierGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loyaltyProgramId** | **string**| Loyalty Program Id | |
| **tierGroupId** | **string**| Tier group Id | |
| **version** | **string**| Select active to retrieve active version of tier group. Select draft to retrieve latest changes in tier group. | [optional] [default to &#39;draft&#39;] |

### Return type

[**\Brevo\Client\Models\TierGroup**](../Model/TierGroup.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loyaltyTierProgramsLoyaltyProgramIdContactsContactIdTiersTierIdPost()`

```php
loyaltyTierProgramsLoyaltyProgramIdContactsContactIdTiersTierIdPost($loyaltyProgramId, $contactId, $tierId): \Brevo\Client\Models\TierForContact
```

Add subscription to a tier

Assigns a subscription tier to a specific contact within a loyalty program

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


$apiInstance = new Brevo\Client\Api\TierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 'loyaltyProgramId_example'; // string | Loyalty Program Id
$contactId = 'contactId_example'; // string | Contact Id
$tierId = 'tierId_example'; // string | Tier Id

try {
    $result = $apiInstance->loyaltyTierProgramsLoyaltyProgramIdContactsContactIdTiersTierIdPost($loyaltyProgramId, $contactId, $tierId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TierApi->loyaltyTierProgramsLoyaltyProgramIdContactsContactIdTiersTierIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loyaltyProgramId** | **string**| Loyalty Program Id | |
| **contactId** | **string**| Contact Id | |
| **tierId** | **string**| Tier Id | |

### Return type

[**\Brevo\Client\Models\TierForContact**](../Model/TierForContact.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loyaltyTierProgramsLoyaltyProgramIdTiersTierIdDelete()`

```php
loyaltyTierProgramsLoyaltyProgramIdTiersTierIdDelete($loyaltyProgramId, $tierId)
```

Delete tier

Deletes an existing tier for the specified tier group

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


$apiInstance = new Brevo\Client\Api\TierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 'loyaltyProgramId_example'; // string | Loyalty Program Id
$tierId = 'tierId_example'; // string | Tier Id

try {
    $apiInstance->loyaltyTierProgramsLoyaltyProgramIdTiersTierIdDelete($loyaltyProgramId, $tierId);
} catch (Exception $e) {
    echo 'Exception when calling TierApi->loyaltyTierProgramsLoyaltyProgramIdTiersTierIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loyaltyProgramId** | **string**| Loyalty Program Id | |
| **tierId** | **string**| Tier Id | |

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

## `loyaltyTierProgramsLoyaltyProgramIdTiersTierIdPut()`

```php
loyaltyTierProgramsLoyaltyProgramIdTiersTierIdPut($loyaltyProgramId, $tierId, $tierRequest): \Brevo\Client\Models\Tier
```

Update tier

Modifies an existing tier for the specified tier group

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


$apiInstance = new Brevo\Client\Api\TierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 'loyaltyProgramId_example'; // string | Loyalty Program Id
$tierId = 'tierId_example'; // string | Tier Id
$tierRequest = new \Brevo\Client\Models\TierRequest(); // \Brevo\Client\Models\TierRequest

try {
    $result = $apiInstance->loyaltyTierProgramsLoyaltyProgramIdTiersTierIdPut($loyaltyProgramId, $tierId, $tierRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TierApi->loyaltyTierProgramsLoyaltyProgramIdTiersTierIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loyaltyProgramId** | **string**| Loyalty Program Id | |
| **tierId** | **string**| Tier Id | |
| **tierRequest** | [**\Brevo\Client\Models\TierRequest**](../Model/TierRequest.md)|  | |

### Return type

[**\Brevo\Client\Models\Tier**](../Model/Tier.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTierGroup()`

```php
updateTierGroup($loyaltyProgramId, $tierGroupId, $updateTierGroupRequest): \Brevo\Client\Models\TierGroup
```

Update tier group

Modifies an existing tier group for the specified loyalty program

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


$apiInstance = new Brevo\Client\Api\TierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 'loyaltyProgramId_example'; // string | Loyalty Program Id
$tierGroupId = 'tierGroupId_example'; // string | Tier group Id
$updateTierGroupRequest = new \Brevo\Client\Models\UpdateTierGroupRequest(); // \Brevo\Client\Models\UpdateTierGroupRequest

try {
    $result = $apiInstance->updateTierGroup($loyaltyProgramId, $tierGroupId, $updateTierGroupRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TierApi->updateTierGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loyaltyProgramId** | **string**| Loyalty Program Id | |
| **tierGroupId** | **string**| Tier group Id | |
| **updateTierGroupRequest** | [**\Brevo\Client\Models\UpdateTierGroupRequest**](../Model/UpdateTierGroupRequest.md)|  | |

### Return type

[**\Brevo\Client\Models\TierGroup**](../Model/TierGroup.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
