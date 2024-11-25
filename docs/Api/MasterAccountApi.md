# Brevo\Client\MasterAccountApi

All URIs are relative to https://api.brevo.com/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**corporateGroupIdDelete()**](MasterAccountApi.md#corporateGroupIdDelete) | **DELETE** /corporate/group/{id} | Delete a group |
| [**corporateGroupIdGet()**](MasterAccountApi.md#corporateGroupIdGet) | **GET** /corporate/group/{id} | GET a group details |
| [**corporateGroupIdPut()**](MasterAccountApi.md#corporateGroupIdPut) | **PUT** /corporate/group/{id} | Update a group of sub-accounts |
| [**corporateGroupPost()**](MasterAccountApi.md#corporateGroupPost) | **POST** /corporate/group | Create a group of sub-accounts |
| [**corporateGroupUnlinkGroupIdSubAccountsPut()**](MasterAccountApi.md#corporateGroupUnlinkGroupIdSubAccountsPut) | **PUT** /corporate/group/unlink/{groupId}/subAccounts | Delete sub-account from group |
| [**corporateIpGet()**](MasterAccountApi.md#corporateIpGet) | **GET** /corporate/ip | List of all IPs |
| [**corporateMasterAccountGet()**](MasterAccountApi.md#corporateMasterAccountGet) | **GET** /corporate/masterAccount | Get the details of requested master account |
| [**corporateSsoTokenPost()**](MasterAccountApi.md#corporateSsoTokenPost) | **POST** /corporate/ssoToken | Generate SSO token to access admin account |
| [**corporateSubAccountGet()**](MasterAccountApi.md#corporateSubAccountGet) | **GET** /corporate/subAccount | Get the list of all the sub-accounts of the master account. |
| [**corporateSubAccountIdApplicationsTogglePut()**](MasterAccountApi.md#corporateSubAccountIdApplicationsTogglePut) | **PUT** /corporate/subAccount/{id}/applications/toggle | Enable/disable sub-account application(s) |
| [**corporateSubAccountIdDelete()**](MasterAccountApi.md#corporateSubAccountIdDelete) | **DELETE** /corporate/subAccount/{id} | Delete a sub-account |
| [**corporateSubAccountIdGet()**](MasterAccountApi.md#corporateSubAccountIdGet) | **GET** /corporate/subAccount/{id} | Get sub-account details |
| [**corporateSubAccountIdPlanPut()**](MasterAccountApi.md#corporateSubAccountIdPlanPut) | **PUT** /corporate/subAccount/{id}/plan | Update sub-account plan |
| [**corporateSubAccountIpAssociatePost()**](MasterAccountApi.md#corporateSubAccountIpAssociatePost) | **POST** /corporate/subAccount/ip/associate | Associate an IP to sub-accounts |
| [**corporateSubAccountIpDissociatePut()**](MasterAccountApi.md#corporateSubAccountIpDissociatePut) | **PUT** /corporate/subAccount/ip/dissociate | Dissociate an IP to sub-accounts |
| [**corporateSubAccountKeyPost()**](MasterAccountApi.md#corporateSubAccountKeyPost) | **POST** /corporate/subAccount/key | Create an API key for a sub-account |
| [**corporateSubAccountPost()**](MasterAccountApi.md#corporateSubAccountPost) | **POST** /corporate/subAccount | Create a new sub-account under a master account. |
| [**corporateSubAccountSsoTokenPost()**](MasterAccountApi.md#corporateSubAccountSsoTokenPost) | **POST** /corporate/subAccount/ssoToken | Generate SSO token to access sub-account |
| [**corporateUserEmailPermissionsPut()**](MasterAccountApi.md#corporateUserEmailPermissionsPut) | **PUT** /corporate/user/{email}/permissions | Change admin user permissions |
| [**corporateUserInvitationActionEmailPut()**](MasterAccountApi.md#corporateUserInvitationActionEmailPut) | **PUT** /corporate/user/invitation/{action}/{email} | Resend / cancel admin user invitation |
| [**corporateUserRevokeEmailDelete()**](MasterAccountApi.md#corporateUserRevokeEmailDelete) | **DELETE** /corporate/user/revoke/{email} | Revoke an admin user |
| [**getAccountActivity_0()**](MasterAccountApi.md#getAccountActivity_0) | **GET** /organization/activities | Get user activity logs |
| [**getCorporateInvitedUsersList()**](MasterAccountApi.md#getCorporateInvitedUsersList) | **GET** /corporate/invited/users | Get the list of all admin users |
| [**getCorporateUserPermission()**](MasterAccountApi.md#getCorporateUserPermission) | **GET** /corporate/user/{email}/permissions | Check admin user permissions |
| [**getSubAccountGroups()**](MasterAccountApi.md#getSubAccountGroups) | **GET** /corporate/groups | Get the list of groups |
| [**inviteAdminUser()**](MasterAccountApi.md#inviteAdminUser) | **POST** /corporate/user/invitation/send | Send invitation to an admin user |


## `corporateGroupIdDelete()`

```php
corporateGroupIdDelete($id)
```

Delete a group

This endpoint allows you to delete a group of sub-organizations. When a group is deleted, the sub-organizations are no longer part of this group. The users associated with the group are no longer associated with the group once deleted.

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


$apiInstance = new Brevo\Client\Api\MasterAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Id of the group

try {
    $apiInstance->corporateGroupIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling MasterAccountApi->corporateGroupIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Id of the group | |

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

## `corporateGroupIdGet()`

```php
corporateGroupIdGet($id): \Brevo\Client\Models\CorporateGroupDetailsResponse
```

GET a group details

This endpoint allows you to retrieve a specific group’s information such as the list of sub-organizations and the user associated with the group.

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


$apiInstance = new Brevo\Client\Api\MasterAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Id of the group of sub-organization

try {
    $result = $apiInstance->corporateGroupIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MasterAccountApi->corporateGroupIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Id of the group of sub-organization | |

### Return type

[**\Brevo\Client\Models\CorporateGroupDetailsResponse**](../Model/CorporateGroupDetailsResponse.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `corporateGroupIdPut()`

```php
corporateGroupIdPut($id, $corporateGroupIdPutRequest)
```

Update a group of sub-accounts

This endpoint allows to update a group of sub-accounts

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


$apiInstance = new Brevo\Client\Api\MasterAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Id of the group
$corporateGroupIdPutRequest = new \Brevo\Client\Models\CorporateGroupIdPutRequest(); // \Brevo\Client\Models\CorporateGroupIdPutRequest | Group details to be updated.

try {
    $apiInstance->corporateGroupIdPut($id, $corporateGroupIdPutRequest);
} catch (Exception $e) {
    echo 'Exception when calling MasterAccountApi->corporateGroupIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Id of the group | |
| **corporateGroupIdPutRequest** | [**\Brevo\Client\Models\CorporateGroupIdPutRequest**](../Model/CorporateGroupIdPutRequest.md)| Group details to be updated. | |

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

## `corporateGroupPost()`

```php
corporateGroupPost($corporateGroupPostRequest): \Brevo\Client\Models\CorporateGroupPost201Response
```

Create a group of sub-accounts

This endpoint allows to create a group of sub-accounts

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


$apiInstance = new Brevo\Client\Api\MasterAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporateGroupPostRequest = new \Brevo\Client\Models\CorporateGroupPostRequest(); // \Brevo\Client\Models\CorporateGroupPostRequest

try {
    $result = $apiInstance->corporateGroupPost($corporateGroupPostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MasterAccountApi->corporateGroupPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporateGroupPostRequest** | [**\Brevo\Client\Models\CorporateGroupPostRequest**](../Model/CorporateGroupPostRequest.md)|  | [optional] |

### Return type

[**\Brevo\Client\Models\CorporateGroupPost201Response**](../Model/CorporateGroupPost201Response.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `corporateGroupUnlinkGroupIdSubAccountsPut()`

```php
corporateGroupUnlinkGroupIdSubAccountsPut($groupId, $corporateGroupUnlinkGroupIdSubAccountsPutRequest)
```

Delete sub-account from group

This endpoint allows you to remove a sub-organization from a group.

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


$apiInstance = new Brevo\Client\Api\MasterAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = 'groupId_example'; // string | Group id
$corporateGroupUnlinkGroupIdSubAccountsPutRequest = new \Brevo\Client\Models\CorporateGroupUnlinkGroupIdSubAccountsPutRequest(); // \Brevo\Client\Models\CorporateGroupUnlinkGroupIdSubAccountsPutRequest | List of sub-account ids

try {
    $apiInstance->corporateGroupUnlinkGroupIdSubAccountsPut($groupId, $corporateGroupUnlinkGroupIdSubAccountsPutRequest);
} catch (Exception $e) {
    echo 'Exception when calling MasterAccountApi->corporateGroupUnlinkGroupIdSubAccountsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **groupId** | **string**| Group id | |
| **corporateGroupUnlinkGroupIdSubAccountsPutRequest** | [**\Brevo\Client\Models\CorporateGroupUnlinkGroupIdSubAccountsPutRequest**](../Model/CorporateGroupUnlinkGroupIdSubAccountsPutRequest.md)| List of sub-account ids | |

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

## `corporateIpGet()`

```php
corporateIpGet(): \Brevo\Client\Models\CorporateIpGet200ResponseInner[]
```

List of all IPs

This endpoint allows you to retrieve the list of active IPs on your Admin account

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


$apiInstance = new Brevo\Client\Api\MasterAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->corporateIpGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MasterAccountApi->corporateIpGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Brevo\Client\Models\CorporateIpGet200ResponseInner[]**](../Model/CorporateIpGet200ResponseInner.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `corporateMasterAccountGet()`

```php
corporateMasterAccountGet(): \Brevo\Client\Models\MasterDetailsResponse
```

Get the details of requested master account

This endpoint will provide the details of the master account.

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


$apiInstance = new Brevo\Client\Api\MasterAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->corporateMasterAccountGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MasterAccountApi->corporateMasterAccountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Brevo\Client\Models\MasterDetailsResponse**](../Model/MasterDetailsResponse.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `corporateSsoTokenPost()`

```php
corporateSsoTokenPost($corporateSsoTokenPostRequest): \Brevo\Client\Models\GetSsoToken
```

Generate SSO token to access admin account

This endpoint generates an SSO token to authenticate and access the admin account using the endpoint https://account-app.brevo.com/account/login/corporate/sso/[token], where [token] will be replaced by the actual token.

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


$apiInstance = new Brevo\Client\Api\MasterAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporateSsoTokenPostRequest = new \Brevo\Client\Models\CorporateSsoTokenPostRequest(); // \Brevo\Client\Models\CorporateSsoTokenPostRequest

try {
    $result = $apiInstance->corporateSsoTokenPost($corporateSsoTokenPostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MasterAccountApi->corporateSsoTokenPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporateSsoTokenPostRequest** | [**\Brevo\Client\Models\CorporateSsoTokenPostRequest**](../Model/CorporateSsoTokenPostRequest.md)|  | [optional] |

### Return type

[**\Brevo\Client\Models\GetSsoToken**](../Model/GetSsoToken.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `corporateSubAccountGet()`

```php
corporateSubAccountGet($offset, $limit): \Brevo\Client\Models\SubAccountsResponse
```

Get the list of all the sub-accounts of the master account.

This endpoint will provide the list all the sub-accounts of the master account.

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


$apiInstance = new Brevo\Client\Api\MasterAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int | Index of the first sub-account in the page
$limit = 56; // int | Number of sub-accounts to be displayed on each page

try {
    $result = $apiInstance->corporateSubAccountGet($offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MasterAccountApi->corporateSubAccountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**| Index of the first sub-account in the page | |
| **limit** | **int**| Number of sub-accounts to be displayed on each page | |

### Return type

[**\Brevo\Client\Models\SubAccountsResponse**](../Model/SubAccountsResponse.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `corporateSubAccountIdApplicationsTogglePut()`

```php
corporateSubAccountIdApplicationsTogglePut($id, $subAccountAppsToggleRequest)
```

Enable/disable sub-account application(s)

API endpoints for the Corporate owner to enable/disable applications on the sub-account

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


$apiInstance = new Brevo\Client\Api\MasterAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Id of the sub-account organization (mandatory)
$subAccountAppsToggleRequest = new \Brevo\Client\Models\SubAccountAppsToggleRequest(); // \Brevo\Client\Models\SubAccountAppsToggleRequest | List of applications to activate or deactivate on a sub-account

try {
    $apiInstance->corporateSubAccountIdApplicationsTogglePut($id, $subAccountAppsToggleRequest);
} catch (Exception $e) {
    echo 'Exception when calling MasterAccountApi->corporateSubAccountIdApplicationsTogglePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Id of the sub-account organization (mandatory) | |
| **subAccountAppsToggleRequest** | [**\Brevo\Client\Models\SubAccountAppsToggleRequest**](../Model/SubAccountAppsToggleRequest.md)| List of applications to activate or deactivate on a sub-account | |

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

## `corporateSubAccountIdDelete()`

```php
corporateSubAccountIdDelete($id)
```

Delete a sub-account

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


$apiInstance = new Brevo\Client\Api\MasterAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Id of the sub-account organization to be deleted

try {
    $apiInstance->corporateSubAccountIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling MasterAccountApi->corporateSubAccountIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Id of the sub-account organization to be deleted | |

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

## `corporateSubAccountIdGet()`

```php
corporateSubAccountIdGet($id): \Brevo\Client\Models\SubAccountDetailsResponse
```

Get sub-account details

This endpoint will provide the details for the specified sub-account company

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


$apiInstance = new Brevo\Client\Api\MasterAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Id of the sub-account organization

try {
    $result = $apiInstance->corporateSubAccountIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MasterAccountApi->corporateSubAccountIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Id of the sub-account organization | |

### Return type

[**\Brevo\Client\Models\SubAccountDetailsResponse**](../Model/SubAccountDetailsResponse.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `corporateSubAccountIdPlanPut()`

```php
corporateSubAccountIdPlanPut($id, $subAccountUpdatePlanRequest)
```

Update sub-account plan

This endpoint will update the sub-account plan. On the Corporate solution new version v2, you can set an unlimited number of credits in your sub-organization. Please pass the value “-1\" to set the consumable in unlimited mode.

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


$apiInstance = new Brevo\Client\Api\MasterAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Id of the sub-account organization
$subAccountUpdatePlanRequest = new \Brevo\Client\Models\SubAccountUpdatePlanRequest(); // \Brevo\Client\Models\SubAccountUpdatePlanRequest | Values to update a sub-account plan

try {
    $apiInstance->corporateSubAccountIdPlanPut($id, $subAccountUpdatePlanRequest);
} catch (Exception $e) {
    echo 'Exception when calling MasterAccountApi->corporateSubAccountIdPlanPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Id of the sub-account organization | |
| **subAccountUpdatePlanRequest** | [**\Brevo\Client\Models\SubAccountUpdatePlanRequest**](../Model/SubAccountUpdatePlanRequest.md)| Values to update a sub-account plan | |

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

## `corporateSubAccountIpAssociatePost()`

```php
corporateSubAccountIpAssociatePost($corporateSubAccountIpAssociatePostRequest): object
```

Associate an IP to sub-accounts

This endpoint allows to associate an IP to sub-accounts

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


$apiInstance = new Brevo\Client\Api\MasterAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporateSubAccountIpAssociatePostRequest = new \Brevo\Client\Models\CorporateSubAccountIpAssociatePostRequest(); // \Brevo\Client\Models\CorporateSubAccountIpAssociatePostRequest

try {
    $result = $apiInstance->corporateSubAccountIpAssociatePost($corporateSubAccountIpAssociatePostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MasterAccountApi->corporateSubAccountIpAssociatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporateSubAccountIpAssociatePostRequest** | [**\Brevo\Client\Models\CorporateSubAccountIpAssociatePostRequest**](../Model/CorporateSubAccountIpAssociatePostRequest.md)|  | [optional] |

### Return type

**object**

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `corporateSubAccountIpDissociatePut()`

```php
corporateSubAccountIpDissociatePut($corporateSubAccountIpDissociatePutRequest)
```

Dissociate an IP to sub-accounts

This endpoint allows to dissociate an IP from sub-accounts

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


$apiInstance = new Brevo\Client\Api\MasterAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporateSubAccountIpDissociatePutRequest = new \Brevo\Client\Models\CorporateSubAccountIpDissociatePutRequest(); // \Brevo\Client\Models\CorporateSubAccountIpDissociatePutRequest

try {
    $apiInstance->corporateSubAccountIpDissociatePut($corporateSubAccountIpDissociatePutRequest);
} catch (Exception $e) {
    echo 'Exception when calling MasterAccountApi->corporateSubAccountIpDissociatePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporateSubAccountIpDissociatePutRequest** | [**\Brevo\Client\Models\CorporateSubAccountIpDissociatePutRequest**](../Model/CorporateSubAccountIpDissociatePutRequest.md)|  | [optional] |

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

## `corporateSubAccountKeyPost()`

```php
corporateSubAccountKeyPost($corporateSubAccountKeyPostRequest): \Brevo\Client\Models\CreateApiKeyResponse
```

Create an API key for a sub-account

This endpoint will generate an API v3 key for a sub account

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


$apiInstance = new Brevo\Client\Api\MasterAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporateSubAccountKeyPostRequest = new \Brevo\Client\Models\CorporateSubAccountKeyPostRequest(); // \Brevo\Client\Models\CorporateSubAccountKeyPostRequest

try {
    $result = $apiInstance->corporateSubAccountKeyPost($corporateSubAccountKeyPostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MasterAccountApi->corporateSubAccountKeyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporateSubAccountKeyPostRequest** | [**\Brevo\Client\Models\CorporateSubAccountKeyPostRequest**](../Model/CorporateSubAccountKeyPostRequest.md)|  | [optional] |

### Return type

[**\Brevo\Client\Models\CreateApiKeyResponse**](../Model/CreateApiKeyResponse.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `corporateSubAccountPost()`

```php
corporateSubAccountPost($createSubAccount): \Brevo\Client\Models\CreateSubAccountResponse
```

Create a new sub-account under a master account.

This endpoint will create a new sub-account under a master account

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


$apiInstance = new Brevo\Client\Api\MasterAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createSubAccount = new \Brevo\Client\Models\CreateSubAccount(); // \Brevo\Client\Models\CreateSubAccount | Request body with sub-account organization name

try {
    $result = $apiInstance->corporateSubAccountPost($createSubAccount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MasterAccountApi->corporateSubAccountPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createSubAccount** | [**\Brevo\Client\Models\CreateSubAccount**](../Model/CreateSubAccount.md)| Request body with sub-account organization name | |

### Return type

[**\Brevo\Client\Models\CreateSubAccountResponse**](../Model/CreateSubAccountResponse.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `corporateSubAccountSsoTokenPost()`

```php
corporateSubAccountSsoTokenPost($corporateSubAccountSsoTokenPostRequest): \Brevo\Client\Models\GetSsoToken
```

Generate SSO token to access sub-account

This endpoint generates an sso token to authenticate and access a sub-account of the master using the account endpoint https://account-app.brevo.com/account/login/sub-account/sso/[token], where [token] will be replaced by the actual token.

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


$apiInstance = new Brevo\Client\Api\MasterAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporateSubAccountSsoTokenPostRequest = new \Brevo\Client\Models\CorporateSubAccountSsoTokenPostRequest(); // \Brevo\Client\Models\CorporateSubAccountSsoTokenPostRequest

try {
    $result = $apiInstance->corporateSubAccountSsoTokenPost($corporateSubAccountSsoTokenPostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MasterAccountApi->corporateSubAccountSsoTokenPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporateSubAccountSsoTokenPostRequest** | [**\Brevo\Client\Models\CorporateSubAccountSsoTokenPostRequest**](../Model/CorporateSubAccountSsoTokenPostRequest.md)|  | [optional] |

### Return type

[**\Brevo\Client\Models\GetSsoToken**](../Model/GetSsoToken.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `corporateUserEmailPermissionsPut()`

```php
corporateUserEmailPermissionsPut($email, $corporateUserEmailPermissionsPutRequest)
```

Change admin user permissions

This endpoint will allow you to change the permissions of Admin users of your Admin account

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


$apiInstance = new Brevo\Client\Api\MasterAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = 'email_example'; // string | Email address of Admin user
$corporateUserEmailPermissionsPutRequest = {"all_features_access":false,"privileges":[{"feature":"user_management","permissions":["all"]},{"feature":"api","permissions":["all"]},{"feature":"my_plan","permissions":["none"]},{"feature":"apps_management","permissions":["all"]},{"feature":"create_sub_organizations","permissions":["all"]},{"feature":"sub_organization_groups","permissions":["create","edit_delete"]},{"feature":"manage_sub_organizations","permissions":["all"]},{"feature":"security","permissions":["none"]},{"feature":"analytics","permissions":["create_alerts","download_data","my_looks","explore_create"]}]}; // \Brevo\Client\Models\CorporateUserEmailPermissionsPutRequest | Values to update an admin user permissions

try {
    $apiInstance->corporateUserEmailPermissionsPut($email, $corporateUserEmailPermissionsPutRequest);
} catch (Exception $e) {
    echo 'Exception when calling MasterAccountApi->corporateUserEmailPermissionsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**| Email address of Admin user | |
| **corporateUserEmailPermissionsPutRequest** | [**\Brevo\Client\Models\CorporateUserEmailPermissionsPutRequest**](../Model/CorporateUserEmailPermissionsPutRequest.md)| Values to update an admin user permissions | |

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

## `corporateUserInvitationActionEmailPut()`

```php
corporateUserInvitationActionEmailPut($action, $email): \Brevo\Client\Models\CorporateUserInvitationActionEmailPut200Response
```

Resend / cancel admin user invitation

This endpoint will allow the user to: - Resend an admin user invitation - Cancel an admin user invitation

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


$apiInstance = new Brevo\Client\Api\MasterAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$action = 'action_example'; // string | Action to be performed (cancel / resend)
$email = 'email_example'; // string | Email address of the recipient

try {
    $result = $apiInstance->corporateUserInvitationActionEmailPut($action, $email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MasterAccountApi->corporateUserInvitationActionEmailPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **action** | **string**| Action to be performed (cancel / resend) | |
| **email** | **string**| Email address of the recipient | |

### Return type

[**\Brevo\Client\Models\CorporateUserInvitationActionEmailPut200Response**](../Model/CorporateUserInvitationActionEmailPut200Response.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `corporateUserRevokeEmailDelete()`

```php
corporateUserRevokeEmailDelete($email)
```

Revoke an admin user

This endpoint allows to revoke/remove an invited member of your Admin account

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


$apiInstance = new Brevo\Client\Api\MasterAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = 'email_example'; // string | Email of the invited user

try {
    $apiInstance->corporateUserRevokeEmailDelete($email);
} catch (Exception $e) {
    echo 'Exception when calling MasterAccountApi->corporateUserRevokeEmailDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**| Email of the invited user | |

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

## `getAccountActivity_0()`

```php
getAccountActivity_0($startDate, $endDate, $limit, $offset): \Brevo\Client\Models\GetAccountActivity
```

Get user activity logs

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


$apiInstance = new Brevo\Client\Api\MasterAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$startDate = 'startDate_example'; // string | Mandatory if endDate is used. Enter start date in UTC date (YYYY-MM-DD) format to filter the activity in your account. Maximum time period that can be selected is one month. Additionally, you can retrieve activity logs from the past 12 months from the date of your search.
$endDate = 'endDate_example'; // string | Mandatory if startDate is used. Enter end date in UTC date (YYYY-MM-DD) format to filter the activity in your account. Maximum time period that can be selected is one month.
$limit = 10; // int | Number of documents per page
$offset = 0; // int | Index of the first document in the page.

try {
    $result = $apiInstance->getAccountActivity_0($startDate, $endDate, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MasterAccountApi->getAccountActivity_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startDate** | **string**| Mandatory if endDate is used. Enter start date in UTC date (YYYY-MM-DD) format to filter the activity in your account. Maximum time period that can be selected is one month. Additionally, you can retrieve activity logs from the past 12 months from the date of your search. | [optional] |
| **endDate** | **string**| Mandatory if startDate is used. Enter end date in UTC date (YYYY-MM-DD) format to filter the activity in your account. Maximum time period that can be selected is one month. | [optional] |
| **limit** | **int**| Number of documents per page | [optional] [default to 10] |
| **offset** | **int**| Index of the first document in the page. | [optional] [default to 0] |

### Return type

[**\Brevo\Client\Models\GetAccountActivity**](../Model/GetAccountActivity.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporateInvitedUsersList()`

```php
getCorporateInvitedUsersList(): \Brevo\Client\Models\GetCorporateInvitedUsersList
```

Get the list of all admin users

This endpoint allows you to list all Admin users of your Admin account

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


$apiInstance = new Brevo\Client\Api\MasterAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCorporateInvitedUsersList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MasterAccountApi->getCorporateInvitedUsersList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Brevo\Client\Models\GetCorporateInvitedUsersList**](../Model/GetCorporateInvitedUsersList.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporateUserPermission()`

```php
getCorporateUserPermission($email): \Brevo\Client\Models\GetCorporateUserPermission
```

Check admin user permissions

This endpoint will provide the list of admin user permissions

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


$apiInstance = new Brevo\Client\Api\MasterAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = 'email_example'; // string | Email of the invited user.

try {
    $result = $apiInstance->getCorporateUserPermission($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MasterAccountApi->getCorporateUserPermission: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**| Email of the invited user. | |

### Return type

[**\Brevo\Client\Models\GetCorporateUserPermission**](../Model/GetCorporateUserPermission.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubAccountGroups()`

```php
getSubAccountGroups(): \Brevo\Client\Models\GetSubAccountGroups200ResponseInner[]
```

Get the list of groups

This endpoint allows you to list all groups created on your Admin account.

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


$apiInstance = new Brevo\Client\Api\MasterAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSubAccountGroups();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MasterAccountApi->getSubAccountGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Brevo\Client\Models\GetSubAccountGroups200ResponseInner[]**](../Model/GetSubAccountGroups200ResponseInner.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inviteAdminUser()`

```php
inviteAdminUser($inviteAdminUser): \Brevo\Client\Models\CorporateGroupPost201Response
```

Send invitation to an admin user

`This endpoint allows you to invite a member to manage the Admin account  Features and their respective permissions are as below:  - `my_plan`:   - \"all\" - `api`:   - \"none\" - `user_management`:   - \"all\" - `app_management` | Not available in ENTv2:   - \"all\" - `sub_organization_groups`   - \"create\"   - \"edit_delete\" - `create_sub_organizations`   - \"all\" - `manage_sub_organizations`   - \"all\" - `analytics`   - \"download_data\"   - \"create_alerts\"   - \"my_looks\"   - \"explore_create\" - `security`   - \"all\"  **Note**: - If `all_features_access: false` then only privileges are required otherwise if `true` then it's assumed that all permissions will be there for the invited admin user.

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


$apiInstance = new Brevo\Client\Api\MasterAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inviteAdminUser = new \Brevo\Client\Models\InviteAdminUser(); // \Brevo\Client\Models\InviteAdminUser | Payload to send an invitation

try {
    $result = $apiInstance->inviteAdminUser($inviteAdminUser);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MasterAccountApi->inviteAdminUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **inviteAdminUser** | [**\Brevo\Client\Models\InviteAdminUser**](../Model/InviteAdminUser.md)| Payload to send an invitation | |

### Return type

[**\Brevo\Client\Models\CorporateGroupPost201Response**](../Model/CorporateGroupPost201Response.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
