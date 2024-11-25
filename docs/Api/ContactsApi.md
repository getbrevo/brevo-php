# Brevo\Client\ContactsApi

All URIs are relative to https://api.brevo.com/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addContactToList()**](ContactsApi.md#addContactToList) | **POST** /contacts/lists/{listId}/contacts/add | Add existing contacts to a list |
| [**createAttribute()**](ContactsApi.md#createAttribute) | **POST** /contacts/attributes/{attributeCategory}/{attributeName} | Create contact attribute |
| [**createContact()**](ContactsApi.md#createContact) | **POST** /contacts | Create a contact |
| [**createDoiContact()**](ContactsApi.md#createDoiContact) | **POST** /contacts/doubleOptinConfirmation | Create Contact via DOI (Double-Opt-In) Flow |
| [**createFolder()**](ContactsApi.md#createFolder) | **POST** /contacts/folders | Create a folder |
| [**createList()**](ContactsApi.md#createList) | **POST** /contacts/lists | Create a list |
| [**deleteAttribute()**](ContactsApi.md#deleteAttribute) | **DELETE** /contacts/attributes/{attributeCategory}/{attributeName} | Delete an attribute |
| [**deleteContact()**](ContactsApi.md#deleteContact) | **DELETE** /contacts/{identifier} | Delete a contact |
| [**deleteFolder()**](ContactsApi.md#deleteFolder) | **DELETE** /contacts/folders/{folderId} | Delete a folder (and all its lists) |
| [**deleteList()**](ContactsApi.md#deleteList) | **DELETE** /contacts/lists/{listId} | Delete a list |
| [**deleteMultiAttributeOptions()**](ContactsApi.md#deleteMultiAttributeOptions) | **DELETE** /contacts/attributes/{attributeType}/{multipleChoiceAttribute}/{multipleChoiceAttributeOption} | Delete a multiple-choice attribute option |
| [**getAttributes()**](ContactsApi.md#getAttributes) | **GET** /contacts/attributes | List all attributes |
| [**getContactInfo()**](ContactsApi.md#getContactInfo) | **GET** /contacts/{identifier} | Get a contact&#39;s details |
| [**getContactStats()**](ContactsApi.md#getContactStats) | **GET** /contacts/{identifier}/campaignStats | Get email campaigns&#39; statistics for a contact |
| [**getContacts()**](ContactsApi.md#getContacts) | **GET** /contacts | Get all the contacts |
| [**getContactsFromList()**](ContactsApi.md#getContactsFromList) | **GET** /contacts/lists/{listId}/contacts | Get contacts in a list |
| [**getFolder()**](ContactsApi.md#getFolder) | **GET** /contacts/folders/{folderId} | Returns a folder&#39;s details |
| [**getFolderLists()**](ContactsApi.md#getFolderLists) | **GET** /contacts/folders/{folderId}/lists | Get lists in a folder |
| [**getFolders()**](ContactsApi.md#getFolders) | **GET** /contacts/folders | Get all folders |
| [**getList()**](ContactsApi.md#getList) | **GET** /contacts/lists/{listId} | Get a list&#39;s details |
| [**getLists()**](ContactsApi.md#getLists) | **GET** /contacts/lists | Get all the lists |
| [**getSegments()**](ContactsApi.md#getSegments) | **GET** /contacts/segments | Get all the segments |
| [**importContacts()**](ContactsApi.md#importContacts) | **POST** /contacts/import | Import contacts |
| [**removeContactFromList()**](ContactsApi.md#removeContactFromList) | **POST** /contacts/lists/{listId}/contacts/remove | Delete a contact from a list |
| [**requestContactExport()**](ContactsApi.md#requestContactExport) | **POST** /contacts/export | Export contacts |
| [**updateAttribute()**](ContactsApi.md#updateAttribute) | **PUT** /contacts/attributes/{attributeCategory}/{attributeName} | Update contact attribute |
| [**updateBatchContacts()**](ContactsApi.md#updateBatchContacts) | **POST** /contacts/batch | Update multiple contacts |
| [**updateContact()**](ContactsApi.md#updateContact) | **PUT** /contacts/{identifier} | Update a contact |
| [**updateFolder()**](ContactsApi.md#updateFolder) | **PUT** /contacts/folders/{folderId} | Update a folder |
| [**updateList()**](ContactsApi.md#updateList) | **PUT** /contacts/lists/{listId} | Update a list |


## `addContactToList()`

```php
addContactToList($listId, $addContactToListRequest): \Brevo\Client\Models\PostContactInfo
```

Add existing contacts to a list

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


$apiInstance = new Brevo\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$listId = 56; // int | Id of the list
$addContactToListRequest = {"emails":["jeff32@example.com","jim56@example.com"]}; // \Brevo\Client\Models\AddContactToListRequest | Emails addresses OR IDs OR EXT_ID attributes of the contacts

try {
    $result = $apiInstance->addContactToList($listId, $addContactToListRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->addContactToList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **listId** | **int**| Id of the list | |
| **addContactToListRequest** | [**\Brevo\Client\Models\AddContactToListRequest**](../Model/AddContactToListRequest.md)| Emails addresses OR IDs OR EXT_ID attributes of the contacts | |

### Return type

[**\Brevo\Client\Models\PostContactInfo**](../Model/PostContactInfo.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAttribute()`

```php
createAttribute($attributeCategory, $attributeName, $createAttribute)
```

Create contact attribute

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


$apiInstance = new Brevo\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attributeCategory = 'attributeCategory_example'; // string | Category of the attribute
$attributeName = 'attributeName_example'; // string | Name of the attribute
$createAttribute = new \Brevo\Client\Models\CreateAttribute(); // \Brevo\Client\Models\CreateAttribute | Values to create an attribute

try {
    $apiInstance->createAttribute($attributeCategory, $attributeName, $createAttribute);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->createAttribute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attributeCategory** | **string**| Category of the attribute | |
| **attributeName** | **string**| Name of the attribute | |
| **createAttribute** | [**\Brevo\Client\Models\CreateAttribute**](../Model/CreateAttribute.md)| Values to create an attribute | |

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

## `createContact()`

```php
createContact($createContact): \Brevo\Client\Models\CreateUpdateContactModel
```

Create a contact

Creates new contacts on Brevo. Contacts can be created by passing either - <br><br> 1. email address of the contact (email_id),  <br> 2. phone number of the contact (to be passed as \"SMS\" field in \"attributes\" along with proper country code), For example- {\"SMS\":\"+91xxxxxxxxxx\"} or {\"SMS\":\"0091xxxxxxxxxx\"} <br> 3. ext_id <br>

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


$apiInstance = new Brevo\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createContact = new \Brevo\Client\Models\CreateContact(); // \Brevo\Client\Models\CreateContact | Values to create a contact

try {
    $result = $apiInstance->createContact($createContact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->createContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createContact** | [**\Brevo\Client\Models\CreateContact**](../Model/CreateContact.md)| Values to create a contact | |

### Return type

[**\Brevo\Client\Models\CreateUpdateContactModel**](../Model/CreateUpdateContactModel.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDoiContact()`

```php
createDoiContact($createDoiContact)
```

Create Contact via DOI (Double-Opt-In) Flow

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


$apiInstance = new Brevo\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createDoiContact = new \Brevo\Client\Models\CreateDoiContact(); // \Brevo\Client\Models\CreateDoiContact | Values to create the Double opt-in (DOI) contact

try {
    $apiInstance->createDoiContact($createDoiContact);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->createDoiContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createDoiContact** | [**\Brevo\Client\Models\CreateDoiContact**](../Model/CreateDoiContact.md)| Values to create the Double opt-in (DOI) contact | |

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

## `createFolder()`

```php
createFolder($createFolder): \Brevo\Client\Models\CreateModel
```

Create a folder

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


$apiInstance = new Brevo\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createFolder = new \Brevo\Client\Models\CreateUpdateFolder(); // \Brevo\Client\Models\CreateUpdateFolder | Name of the folder

try {
    $result = $apiInstance->createFolder($createFolder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->createFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createFolder** | [**\Brevo\Client\Models\CreateUpdateFolder**](../Model/CreateUpdateFolder.md)| Name of the folder | |

### Return type

[**\Brevo\Client\Models\CreateModel**](../Model/CreateModel.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createList()`

```php
createList($createList): \Brevo\Client\Models\CreateModel
```

Create a list

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


$apiInstance = new Brevo\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createList = new \Brevo\Client\Models\CreateList(); // \Brevo\Client\Models\CreateList | Values to create a list

try {
    $result = $apiInstance->createList($createList);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->createList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createList** | [**\Brevo\Client\Models\CreateList**](../Model/CreateList.md)| Values to create a list | |

### Return type

[**\Brevo\Client\Models\CreateModel**](../Model/CreateModel.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAttribute()`

```php
deleteAttribute($attributeCategory, $attributeName)
```

Delete an attribute

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


$apiInstance = new Brevo\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attributeCategory = 'attributeCategory_example'; // string | Category of the attribute
$attributeName = 'attributeName_example'; // string | Name of the existing attribute

try {
    $apiInstance->deleteAttribute($attributeCategory, $attributeName);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->deleteAttribute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attributeCategory** | **string**| Category of the attribute | |
| **attributeName** | **string**| Name of the existing attribute | |

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

## `deleteContact()`

```php
deleteContact($identifier, $identifierType)
```

Delete a contact

There are 2 ways to delete a contact <br><br> Option 1- https://api.brevo.com/v3/contacts/{identifier} <br><br> Option 2- https://api.brevo.com/v3/contacts/{identifier}?identifierType={} <br> <br> Option 1 only works if identifierType is email_id (for EMAIL) or contact_id (for ID of the contact),where you can directly pass the value of EMAIL and ID of the contact.   <br><br> Option 2 works for all identifierType, use email_id for EMAIL attribute, contact_id for ID of the contact, ext_id for EXT_ID attribute, phone_id for SMS attribute, whatsapp_id for WHATSAPP attribute, landline_number_id for LANDLINE_NUMBER attribute.

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


$apiInstance = new Brevo\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = new \Brevo\Client\Models\\Brevo\Client\Models\GetContactInfoIdentifierParameter(); // \Brevo\Client\Models\GetContactInfoIdentifierParameter | Email (urlencoded) OR ID of the contact OR EXT_ID attribute (urlencoded)
$identifierType = 'identifierType_example'; // string | email_id for Email, contact_id for ID of the contact, ext_id for EXT_ID attribute, phone_id for SMS attribute, whatsapp_id for WHATSAPP attribute, landline_number_id for LANDLINE_NUMBER attribute

try {
    $apiInstance->deleteContact($identifier, $identifierType);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->deleteContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **identifier** | [**\Brevo\Client\Models\GetContactInfoIdentifierParameter**](../Model/.md)| Email (urlencoded) OR ID of the contact OR EXT_ID attribute (urlencoded) | |
| **identifierType** | **string**| email_id for Email, contact_id for ID of the contact, ext_id for EXT_ID attribute, phone_id for SMS attribute, whatsapp_id for WHATSAPP attribute, landline_number_id for LANDLINE_NUMBER attribute | [optional] |

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

## `deleteFolder()`

```php
deleteFolder($folderId)
```

Delete a folder (and all its lists)

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


$apiInstance = new Brevo\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$folderId = 56; // int | Id of the folder

try {
    $apiInstance->deleteFolder($folderId);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->deleteFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **folderId** | **int**| Id of the folder | |

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

## `deleteList()`

```php
deleteList($listId)
```

Delete a list

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


$apiInstance = new Brevo\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$listId = 56; // int | Id of the list

try {
    $apiInstance->deleteList($listId);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->deleteList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **listId** | **int**| Id of the list | |

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

## `deleteMultiAttributeOptions()`

```php
deleteMultiAttributeOptions($attributeType, $multipleChoiceAttribute, $multipleChoiceAttributeOption)
```

Delete a multiple-choice attribute option

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


$apiInstance = new Brevo\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attributeType = 'attributeType_example'; // string | Type of the attribute
$multipleChoiceAttribute = 'multipleChoiceAttribute_example'; // string | Name of the existing muliple-choice attribute
$multipleChoiceAttributeOption = 'multipleChoiceAttributeOption_example'; // string | Name of the existing multiple-choice attribute option that you want to delete

try {
    $apiInstance->deleteMultiAttributeOptions($attributeType, $multipleChoiceAttribute, $multipleChoiceAttributeOption);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->deleteMultiAttributeOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attributeType** | **string**| Type of the attribute | |
| **multipleChoiceAttribute** | **string**| Name of the existing muliple-choice attribute | |
| **multipleChoiceAttributeOption** | **string**| Name of the existing multiple-choice attribute option that you want to delete | |

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

## `getAttributes()`

```php
getAttributes(): \Brevo\Client\Models\GetAttributes
```

List all attributes

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


$apiInstance = new Brevo\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAttributes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getAttributes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Brevo\Client\Models\GetAttributes**](../Model/GetAttributes.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactInfo()`

```php
getContactInfo($identifier, $identifierType, $startDate, $endDate): \Brevo\Client\Models\GetExtendedContactDetails
```

Get a contact's details

There are 2 ways to get a contact <br><br> Option 1- https://api.brevo.com/v3/contacts/{identifier} <br><br> Option 2- https://api.brevo.com/v3/contacts/{identifier}?identifierType={} <br> <br> Option 1 only works if identifierType is email_id (for EMAIL), phone_id (for SMS) or contact_id (for ID of the contact),where you can directly pass the value of EMAIL, SMS and ID of the contact.   <br><br> Option 2 works for all identifierType, use email_id for EMAIL attribute, phone_id for SMS attribute, contact_id for ID of the contact, ext_id for EXT_ID attribute, whatsapp_id for WHATSAPP attribute, landline_number_id for LANDLINE_NUMBER attribute <br><br>Along with the contact details, this endpoint will show the statistics of contact for the recent 90 days by default. To fetch the earlier statistics, please use Get contact campaign stats ``https://developers.brevo.com/reference/contacts-7#getcontactstats`` endpoint with the appropriate date ranges.

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


$apiInstance = new Brevo\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = new \Brevo\Client\Models\\Brevo\Client\Models\GetContactInfoIdentifierParameter(); // \Brevo\Client\Models\GetContactInfoIdentifierParameter | Email (urlencoded) OR ID of the contact OR its SMS attribute value OR EXT_ID attribute (urlencoded)
$identifierType = 'identifierType_example'; // string | email_id for Email, phone_id for SMS attribute, contact_id for ID of the contact, ext_id for EXT_ID attribute, whatsapp_id for WHATSAPP attribute, landline_number_id for LANDLINE_NUMBER attribute
$startDate = 'startDate_example'; // string | **Mandatory if endDate is used.** Starting date (YYYY-MM-DD) of the statistic events specific to campaigns. Must be lower than equal to endDate
$endDate = 'endDate_example'; // string | **Mandatory if startDate is used.** Ending date (YYYY-MM-DD) of the statistic events specific to campaigns. Must be greater than equal to startDate.

try {
    $result = $apiInstance->getContactInfo($identifier, $identifierType, $startDate, $endDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getContactInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **identifier** | [**\Brevo\Client\Models\GetContactInfoIdentifierParameter**](../Model/.md)| Email (urlencoded) OR ID of the contact OR its SMS attribute value OR EXT_ID attribute (urlencoded) | |
| **identifierType** | **string**| email_id for Email, phone_id for SMS attribute, contact_id for ID of the contact, ext_id for EXT_ID attribute, whatsapp_id for WHATSAPP attribute, landline_number_id for LANDLINE_NUMBER attribute | [optional] |
| **startDate** | **string**| **Mandatory if endDate is used.** Starting date (YYYY-MM-DD) of the statistic events specific to campaigns. Must be lower than equal to endDate | [optional] |
| **endDate** | **string**| **Mandatory if startDate is used.** Ending date (YYYY-MM-DD) of the statistic events specific to campaigns. Must be greater than equal to startDate. | [optional] |

### Return type

[**\Brevo\Client\Models\GetExtendedContactDetails**](../Model/GetExtendedContactDetails.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactStats()`

```php
getContactStats($identifier, $startDate, $endDate): \Brevo\Client\Models\GetContactCampaignStats
```

Get email campaigns' statistics for a contact

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


$apiInstance = new Brevo\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = new \Brevo\Client\Models\\Brevo\Client\Models\GetContactInfoIdentifierParameter(); // \Brevo\Client\Models\GetContactInfoIdentifierParameter | Email (urlencoded) OR ID of the contact
$startDate = 'startDate_example'; // string | **Mandatory if endDate is used.** Starting date (YYYY-MM-DD) of the statistic events specific to campaigns. Must be lower than equal to endDate
$endDate = 'endDate_example'; // string | **Mandatory if startDate is used.** Ending date (YYYY-MM-DD) of the statistic events specific to campaigns. Must be greater than equal to startDate. Maximum difference between startDate and endDate should not be greater than 90 days

try {
    $result = $apiInstance->getContactStats($identifier, $startDate, $endDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getContactStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **identifier** | [**\Brevo\Client\Models\GetContactInfoIdentifierParameter**](../Model/.md)| Email (urlencoded) OR ID of the contact | |
| **startDate** | **string**| **Mandatory if endDate is used.** Starting date (YYYY-MM-DD) of the statistic events specific to campaigns. Must be lower than equal to endDate | [optional] |
| **endDate** | **string**| **Mandatory if startDate is used.** Ending date (YYYY-MM-DD) of the statistic events specific to campaigns. Must be greater than equal to startDate. Maximum difference between startDate and endDate should not be greater than 90 days | [optional] |

### Return type

[**\Brevo\Client\Models\GetContactCampaignStats**](../Model/GetContactCampaignStats.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContacts()`

```php
getContacts($limit, $offset, $modifiedSince, $createdSince, $sort, $segmentId, $listIds, $filter): \Brevo\Client\Models\GetContacts
```

Get all the contacts

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


$apiInstance = new Brevo\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 50; // int | Number of documents per page
$offset = 0; // int | Index of the first document of the page
$modifiedSince = 'modifiedSince_example'; // string | Filter (urlencoded) the contacts modified after a given UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). **Prefer to pass your timezone in date-time format for accurate result.**
$createdSince = 'createdSince_example'; // string | Filter (urlencoded) the contacts created after a given UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). **Prefer to pass your timezone in date-time format for accurate result.**
$sort = 'desc'; // string | Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed
$segmentId = 56; // int | Id of the segment. **Either listIds or segmentId can be passed.**
$listIds = array(56); // int[] | Ids of the list. **Either listIds or segmentId can be passed.**
$filter = 'filter_example'; // string | Filter the contacts on the basis of attributes. **Allowed operator: equals. (e.g. filter=equals(FIRSTNAME,\"Antoine\"), filter=equals(B1, true), filter=equals(DOB, \"1989-11-23\"))**

try {
    $result = $apiInstance->getContacts($limit, $offset, $modifiedSince, $createdSince, $sort, $segmentId, $listIds, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Number of documents per page | [optional] [default to 50] |
| **offset** | **int**| Index of the first document of the page | [optional] [default to 0] |
| **modifiedSince** | **string**| Filter (urlencoded) the contacts modified after a given UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). **Prefer to pass your timezone in date-time format for accurate result.** | [optional] |
| **createdSince** | **string**| Filter (urlencoded) the contacts created after a given UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). **Prefer to pass your timezone in date-time format for accurate result.** | [optional] |
| **sort** | **string**| Sort the results in the ascending/descending order of record creation. Default order is **descending** if &#x60;sort&#x60; is not passed | [optional] [default to &#39;desc&#39;] |
| **segmentId** | **int**| Id of the segment. **Either listIds or segmentId can be passed.** | [optional] |
| **listIds** | [**int[]**](../Model/int.md)| Ids of the list. **Either listIds or segmentId can be passed.** | [optional] |
| **filter** | **string**| Filter the contacts on the basis of attributes. **Allowed operator: equals. (e.g. filter&#x3D;equals(FIRSTNAME,\&quot;Antoine\&quot;), filter&#x3D;equals(B1, true), filter&#x3D;equals(DOB, \&quot;1989-11-23\&quot;))** | [optional] |

### Return type

[**\Brevo\Client\Models\GetContacts**](../Model/GetContacts.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactsFromList()`

```php
getContactsFromList($listId, $modifiedSince, $limit, $offset, $sort): \Brevo\Client\Models\GetContacts
```

Get contacts in a list

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


$apiInstance = new Brevo\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$listId = 56; // int | Id of the list
$modifiedSince = 'modifiedSince_example'; // string | Filter (urlencoded) the contacts modified after a given UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). **Prefer to pass your timezone in date-time format for accurate result.**
$limit = 50; // int | Number of documents per page
$offset = 0; // int | Index of the first document of the page
$sort = 'desc'; // string | Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed

try {
    $result = $apiInstance->getContactsFromList($listId, $modifiedSince, $limit, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getContactsFromList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **listId** | **int**| Id of the list | |
| **modifiedSince** | **string**| Filter (urlencoded) the contacts modified after a given UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). **Prefer to pass your timezone in date-time format for accurate result.** | [optional] |
| **limit** | **int**| Number of documents per page | [optional] [default to 50] |
| **offset** | **int**| Index of the first document of the page | [optional] [default to 0] |
| **sort** | **string**| Sort the results in the ascending/descending order of record creation. Default order is **descending** if &#x60;sort&#x60; is not passed | [optional] [default to &#39;desc&#39;] |

### Return type

[**\Brevo\Client\Models\GetContacts**](../Model/GetContacts.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFolder()`

```php
getFolder($folderId): \Brevo\Client\Models\GetFolder
```

Returns a folder's details

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


$apiInstance = new Brevo\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$folderId = 56; // int | id of the folder

try {
    $result = $apiInstance->getFolder($folderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **folderId** | **int**| id of the folder | |

### Return type

[**\Brevo\Client\Models\GetFolder**](../Model/GetFolder.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFolderLists()`

```php
getFolderLists($folderId, $limit, $offset, $sort): \Brevo\Client\Models\GetFolderLists
```

Get lists in a folder

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


$apiInstance = new Brevo\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$folderId = 56; // int | Id of the folder
$limit = 10; // int | Number of documents per page
$offset = 0; // int | Index of the first document of the page
$sort = 'desc'; // string | Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed

try {
    $result = $apiInstance->getFolderLists($folderId, $limit, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getFolderLists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **folderId** | **int**| Id of the folder | |
| **limit** | **int**| Number of documents per page | [optional] [default to 10] |
| **offset** | **int**| Index of the first document of the page | [optional] [default to 0] |
| **sort** | **string**| Sort the results in the ascending/descending order of record creation. Default order is **descending** if &#x60;sort&#x60; is not passed | [optional] [default to &#39;desc&#39;] |

### Return type

[**\Brevo\Client\Models\GetFolderLists**](../Model/GetFolderLists.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFolders()`

```php
getFolders($limit, $offset, $sort): \Brevo\Client\Models\GetFolders
```

Get all folders

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


$apiInstance = new Brevo\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // int | Number of documents per page
$offset = 0; // int | Index of the first document of the page
$sort = 'desc'; // string | Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed

try {
    $result = $apiInstance->getFolders($limit, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getFolders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Number of documents per page | [optional] [default to 10] |
| **offset** | **int**| Index of the first document of the page | [optional] [default to 0] |
| **sort** | **string**| Sort the results in the ascending/descending order of record creation. Default order is **descending** if &#x60;sort&#x60; is not passed | [optional] [default to &#39;desc&#39;] |

### Return type

[**\Brevo\Client\Models\GetFolders**](../Model/GetFolders.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getList()`

```php
getList($listId, $startDate, $endDate): \Brevo\Client\Models\GetExtendedList
```

Get a list's details

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


$apiInstance = new Brevo\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$listId = 56; // int | Id of the list
$startDate = 'startDate_example'; // string | **Mandatory if endDate is used**. Ending (urlencoded) UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) to aggregate the sent email campaigns for a specific list id. **Prefer to pass your timezone in date-time format for accurate result**
$endDate = 'endDate_example'; // string | **Mandatory if startDate is used**. Ending (urlencoded) UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) to aggregate the sent email campaigns for a specific list id. **Prefer to pass your timezone in date-time format for accurate result**

try {
    $result = $apiInstance->getList($listId, $startDate, $endDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **listId** | **int**| Id of the list | |
| **startDate** | **string**| **Mandatory if endDate is used**. Ending (urlencoded) UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) to aggregate the sent email campaigns for a specific list id. **Prefer to pass your timezone in date-time format for accurate result** | [optional] |
| **endDate** | **string**| **Mandatory if startDate is used**. Ending (urlencoded) UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) to aggregate the sent email campaigns for a specific list id. **Prefer to pass your timezone in date-time format for accurate result** | [optional] |

### Return type

[**\Brevo\Client\Models\GetExtendedList**](../Model/GetExtendedList.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLists()`

```php
getLists($limit, $offset, $sort): \Brevo\Client\Models\GetLists
```

Get all the lists

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


$apiInstance = new Brevo\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // int | Number of documents per page
$offset = 0; // int | Index of the first document of the page
$sort = 'desc'; // string | Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed

try {
    $result = $apiInstance->getLists($limit, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getLists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Number of documents per page | [optional] [default to 10] |
| **offset** | **int**| Index of the first document of the page | [optional] [default to 0] |
| **sort** | **string**| Sort the results in the ascending/descending order of record creation. Default order is **descending** if &#x60;sort&#x60; is not passed | [optional] [default to &#39;desc&#39;] |

### Return type

[**\Brevo\Client\Models\GetLists**](../Model/GetLists.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSegments()`

```php
getSegments($limit, $offset, $sort): \Brevo\Client\Models\GetSegments
```

Get all the segments

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


$apiInstance = new Brevo\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // int | Number of documents per page
$offset = 0; // int | Index of the first document of the page
$sort = 'desc'; // string | Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed

try {
    $result = $apiInstance->getSegments($limit, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getSegments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Number of documents per page | [optional] [default to 10] |
| **offset** | **int**| Index of the first document of the page | [optional] [default to 0] |
| **sort** | **string**| Sort the results in the ascending/descending order of record creation. Default order is **descending** if &#x60;sort&#x60; is not passed | [optional] [default to &#39;desc&#39;] |

### Return type

[**\Brevo\Client\Models\GetSegments**](../Model/GetSegments.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importContacts()`

```php
importContacts($requestContactImport): \Brevo\Client\Models\CreatedProcessId
```

Import contacts

It returns the background process ID which on completion calls the notify URL that you have set in the input.  **Note**: - Any contact attribute that doesn't exist in your account will be ignored at import end.

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


$apiInstance = new Brevo\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$requestContactImport = new \Brevo\Client\Models\RequestContactImport(); // \Brevo\Client\Models\RequestContactImport | Values to import contacts in Brevo. To know more about the expected format, please have a look at ``https://help.brevo.com/hc/en-us/articles/209499265-Build-contacts-lists-for-your-email-marketing-campaigns``

try {
    $result = $apiInstance->importContacts($requestContactImport);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->importContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **requestContactImport** | [**\Brevo\Client\Models\RequestContactImport**](../Model/RequestContactImport.md)| Values to import contacts in Brevo. To know more about the expected format, please have a look at &#x60;&#x60;https://help.brevo.com/hc/en-us/articles/209499265-Build-contacts-lists-for-your-email-marketing-campaigns&#x60;&#x60; | |

### Return type

[**\Brevo\Client\Models\CreatedProcessId**](../Model/CreatedProcessId.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeContactFromList()`

```php
removeContactFromList($listId, $contactEmails): \Brevo\Client\Models\PostContactInfo
```

Delete a contact from a list

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


$apiInstance = new Brevo\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$listId = 56; // int | Id of the list
$contactEmails = {"emails":["jeff32@example.com","jim56@example.com"]}; // \Brevo\Client\Models\RemoveContactFromListRequest | Emails adresses OR IDs OR EXT_ID attributes of the contacts OR 'all' true

try {
    $result = $apiInstance->removeContactFromList($listId, $contactEmails);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->removeContactFromList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **listId** | **int**| Id of the list | |
| **contactEmails** | [**\Brevo\Client\Models\RemoveContactFromListRequest**](../Model/RemoveContactFromListRequest.md)| Emails adresses OR IDs OR EXT_ID attributes of the contacts OR &#39;all&#39; true | |

### Return type

[**\Brevo\Client\Models\PostContactInfo**](../Model/PostContactInfo.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requestContactExport()`

```php
requestContactExport($requestContactExport): \Brevo\Client\Models\CreatedProcessId
```

Export contacts

It returns the background process ID which on completion calls the notify URL that you have set in the input. File will be available in csv.

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


$apiInstance = new Brevo\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$requestContactExport = new \Brevo\Client\Models\RequestContactExport(); // \Brevo\Client\Models\RequestContactExport | Values to request a contact export

try {
    $result = $apiInstance->requestContactExport($requestContactExport);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->requestContactExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **requestContactExport** | [**\Brevo\Client\Models\RequestContactExport**](../Model/RequestContactExport.md)| Values to request a contact export | |

### Return type

[**\Brevo\Client\Models\CreatedProcessId**](../Model/CreatedProcessId.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAttribute()`

```php
updateAttribute($attributeCategory, $attributeName, $updateAttribute)
```

Update contact attribute

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


$apiInstance = new Brevo\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attributeCategory = 'attributeCategory_example'; // string | Category of the attribute
$attributeName = 'attributeName_example'; // string | Name of the existing attribute
$updateAttribute = new \Brevo\Client\Models\UpdateAttribute(); // \Brevo\Client\Models\UpdateAttribute | Values to update an attribute

try {
    $apiInstance->updateAttribute($attributeCategory, $attributeName, $updateAttribute);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->updateAttribute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attributeCategory** | **string**| Category of the attribute | |
| **attributeName** | **string**| Name of the existing attribute | |
| **updateAttribute** | [**\Brevo\Client\Models\UpdateAttribute**](../Model/UpdateAttribute.md)| Values to update an attribute | |

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

## `updateBatchContacts()`

```php
updateBatchContacts($updateBatchContacts)
```

Update multiple contacts

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


$apiInstance = new Brevo\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updateBatchContacts = new \Brevo\Client\Models\UpdateBatchContacts(); // \Brevo\Client\Models\UpdateBatchContacts | Values to update multiple contacts

try {
    $apiInstance->updateBatchContacts($updateBatchContacts);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->updateBatchContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **updateBatchContacts** | [**\Brevo\Client\Models\UpdateBatchContacts**](../Model/UpdateBatchContacts.md)| Values to update multiple contacts | |

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

## `updateContact()`

```php
updateContact($identifier, $updateContact, $identifierType)
```

Update a contact

There are 2 ways to update a contact <br><br> Option 1- https://api.brevo.com/v3/contacts/{identifier} <br><br> Option 2- https://api.brevo.com/v3/contacts/{identifier}?identifierType={} <br> <br> Option 1 only works if identifierType is email_id (for EMAIL) or contact_id (for ID of the contact),where you can directly pass the value of EMAIL and ID of the contact.   <br><br> Option 2 works for all identifierType, use email_id for EMAIL attribute, contact_id for ID of the contact, ext_id for EXT_ID attribute, phone_id for SMS attribute, whatsapp_id for WHATSAPP attribute, landline_number_id for LANDLINE attribute

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


$apiInstance = new Brevo\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = new \Brevo\Client\Models\\Brevo\Client\Models\GetContactInfoIdentifierParameter(); // \Brevo\Client\Models\GetContactInfoIdentifierParameter | Email (urlencoded) OR ID of the contact OR EXT_ID attribute (urlencoded) OR its SMS attribute value OR its WHATSAPP attribute value OR its LANDLINE attribute value
$updateContact = new \Brevo\Client\Models\UpdateContact(); // \Brevo\Client\Models\UpdateContact | Values to update a contact
$identifierType = 'identifierType_example'; // string | email_id for Email, contact_id for ID of the contact, ext_id for EXT_ID attribute, phone_id for SMS attribute, whatsapp_id for WHATSAPP attribute, landline_number_id for LANDLINE attribute

try {
    $apiInstance->updateContact($identifier, $updateContact, $identifierType);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->updateContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **identifier** | [**\Brevo\Client\Models\GetContactInfoIdentifierParameter**](../Model/.md)| Email (urlencoded) OR ID of the contact OR EXT_ID attribute (urlencoded) OR its SMS attribute value OR its WHATSAPP attribute value OR its LANDLINE attribute value | |
| **updateContact** | [**\Brevo\Client\Models\UpdateContact**](../Model/UpdateContact.md)| Values to update a contact | |
| **identifierType** | **string**| email_id for Email, contact_id for ID of the contact, ext_id for EXT_ID attribute, phone_id for SMS attribute, whatsapp_id for WHATSAPP attribute, landline_number_id for LANDLINE attribute | [optional] |

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

## `updateFolder()`

```php
updateFolder($folderId, $updateFolder)
```

Update a folder

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


$apiInstance = new Brevo\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$folderId = 56; // int | Id of the folder
$updateFolder = new \Brevo\Client\Models\CreateUpdateFolder(); // \Brevo\Client\Models\CreateUpdateFolder | Name of the folder

try {
    $apiInstance->updateFolder($folderId, $updateFolder);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->updateFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **folderId** | **int**| Id of the folder | |
| **updateFolder** | [**\Brevo\Client\Models\CreateUpdateFolder**](../Model/CreateUpdateFolder.md)| Name of the folder | |

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

## `updateList()`

```php
updateList($listId, $updateList)
```

Update a list

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


$apiInstance = new Brevo\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$listId = 56; // int | Id of the list
$updateList = new \Brevo\Client\Models\UpdateList(); // \Brevo\Client\Models\UpdateList | Values to update a list

try {
    $apiInstance->updateList($listId, $updateList);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->updateList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **listId** | **int**| Id of the list | |
| **updateList** | [**\Brevo\Client\Models\UpdateList**](../Model/UpdateList.md)| Values to update a list | |

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
