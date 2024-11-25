# Brevo\Client\RewardsApi

All URIs are relative to https://api.brevo.com/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**attributeReward()**](RewardsApi.md#attributeReward) | **POST** /loyalty/offer/programs/{loyaltyProgramId}/rewards/attribute | Attribute reward to a contact |
| [**getOffersList()**](RewardsApi.md#getOffersList) | **GET** /loyalty/offer/programs/{loyaltyProgramId}/offers | Get Reward list |
| [**redeemReward()**](RewardsApi.md#redeemReward) | **POST** /loyalty/offer/programs/{loyaltyProgramId}/rewards/redeem | Redeem reward |
| [**revokeReward()**](RewardsApi.md#revokeReward) | **DELETE** /loyalty/offer/programs/{loyaltyProgramId}/rewards/revoke | Revoke reward |
| [**validateReward()**](RewardsApi.md#validateReward) | **POST** /loyalty/offer/programs/{loyaltyProgramId}/rewards/validate | Validates a voucher |


## `attributeReward()`

```php
attributeReward($loyaltyProgramId, $attributeRewardPayload): \Brevo\Client\Models\RewardAttributionResponse
```

Attribute reward to a contact

Attributes reward to a new contact

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


$apiInstance = new Brevo\Client\Api\RewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 'loyaltyProgramId_example'; // string | Loyalty Program Id
$attributeRewardPayload = new \Brevo\Client\Models\AttributeRewardPayload(); // \Brevo\Client\Models\AttributeRewardPayload | Attribute reward information (One of contactId and loyaltySubscriptionId must be provided.)

try {
    $result = $apiInstance->attributeReward($loyaltyProgramId, $attributeRewardPayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardsApi->attributeReward: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loyaltyProgramId** | **string**| Loyalty Program Id | |
| **attributeRewardPayload** | [**\Brevo\Client\Models\AttributeRewardPayload**](../Model/AttributeRewardPayload.md)| Attribute reward information (One of contactId and loyaltySubscriptionId must be provided.) | |

### Return type

[**\Brevo\Client\Models\RewardAttributionResponse**](../Model/RewardAttributionResponse.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOffersList()`

```php
getOffersList($loyaltyProgramId, $limit, $offset, $rewardState, $rewardVersion): \Brevo\Client\Models\OffersListResponse
```

Get Reward list

Returns a list of rewards for a given loyalty program

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


$apiInstance = new Brevo\Client\Api\RewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 'loyaltyProgramId_example'; // string | Loyalty Program Id
$limit = 100; // int | Number of documents per page
$offset = 0; // int | Index of the first document in the page
$rewardState = 'all'; // string | State of the reward
$rewardVersion = 'draft'; // string | Select 'active' to retrieve list of all rewards which are live for clients. Select draft to retrieve list of all non deleted rewards.

try {
    $result = $apiInstance->getOffersList($loyaltyProgramId, $limit, $offset, $rewardState, $rewardVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardsApi->getOffersList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loyaltyProgramId** | **string**| Loyalty Program Id | |
| **limit** | **int**| Number of documents per page | [optional] [default to 100] |
| **offset** | **int**| Index of the first document in the page | [optional] [default to 0] |
| **rewardState** | **string**| State of the reward | [optional] [default to &#39;all&#39;] |
| **rewardVersion** | **string**| Select &#39;active&#39; to retrieve list of all rewards which are live for clients. Select draft to retrieve list of all non deleted rewards. | [optional] [default to &#39;draft&#39;] |

### Return type

[**\Brevo\Client\Models\OffersListResponse**](../Model/OffersListResponse.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `redeemReward()`

```php
redeemReward($loyaltyProgramId, $redeemRewardPayload): \Brevo\Client\Models\RewardRedeemResponse
```

Redeem reward

Redeems/Burn a reward for a contact

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


$apiInstance = new Brevo\Client\Api\RewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 'loyaltyProgramId_example'; // string | Loyalty Program Id
$redeemRewardPayload = new \Brevo\Client\Models\RedeemRewardPayload(); // \Brevo\Client\Models\RedeemRewardPayload | Redeemed reward information (Either contactId or loyaltySubscriptionId must be present.)

try {
    $result = $apiInstance->redeemReward($loyaltyProgramId, $redeemRewardPayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardsApi->redeemReward: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loyaltyProgramId** | **string**| Loyalty Program Id | |
| **redeemRewardPayload** | [**\Brevo\Client\Models\RedeemRewardPayload**](../Model/RedeemRewardPayload.md)| Redeemed reward information (Either contactId or loyaltySubscriptionId must be present.) | |

### Return type

[**\Brevo\Client\Models\RewardRedeemResponse**](../Model/RewardRedeemResponse.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `revokeReward()`

```php
revokeReward($loyaltyProgramId, $attributedRewardId)
```

Revoke reward

Revokes reward

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


$apiInstance = new Brevo\Client\Api\RewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 'loyaltyProgramId_example'; // string | Loyalty Program Id
$attributedRewardId = 'attributedRewardId_example'; // string | Attributed Reward Id

try {
    $apiInstance->revokeReward($loyaltyProgramId, $attributedRewardId);
} catch (Exception $e) {
    echo 'Exception when calling RewardsApi->revokeReward: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loyaltyProgramId** | **string**| Loyalty Program Id | |
| **attributedRewardId** | **string**| Attributed Reward Id | |

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

## `validateReward()`

```php
validateReward($loyaltyProgramId, $validateRewardPayload): \Brevo\Client\Models\ValidatedRewardResponse
```

Validates a voucher

Validates a reward for a contact and return the response

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


$apiInstance = new Brevo\Client\Api\RewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltyProgramId = 'loyaltyProgramId_example'; // string | Loyalty Program Id
$validateRewardPayload = new \Brevo\Client\Models\ValidateRewardPayload(); // \Brevo\Client\Models\ValidateRewardPayload | Validate reward information (One of contactId and loyaltySubscriptionId must be present, or one of code and attributedRewardId must be present.)

try {
    $result = $apiInstance->validateReward($loyaltyProgramId, $validateRewardPayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardsApi->validateReward: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loyaltyProgramId** | **string**| Loyalty Program Id | |
| **validateRewardPayload** | [**\Brevo\Client\Models\ValidateRewardPayload**](../Model/ValidateRewardPayload.md)| Validate reward information (One of contactId and loyaltySubscriptionId must be present, or one of code and attributedRewardId must be present.) | |

### Return type

[**\Brevo\Client\Models\ValidatedRewardResponse**](../Model/ValidatedRewardResponse.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
