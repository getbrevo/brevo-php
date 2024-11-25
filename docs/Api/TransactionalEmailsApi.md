# Brevo\Client\TransactionalEmailsApi

All URIs are relative to https://api.brevo.com/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**blockNewDomain()**](TransactionalEmailsApi.md#blockNewDomain) | **POST** /smtp/blockedDomains | Add a new domain to the list of blocked domains |
| [**createSmtpTemplate()**](TransactionalEmailsApi.md#createSmtpTemplate) | **POST** /smtp/templates | Create an email template |
| [**deleteBlockedDomain()**](TransactionalEmailsApi.md#deleteBlockedDomain) | **DELETE** /smtp/blockedDomains/{domain} | Unblock an existing domain from the list of blocked domains |
| [**deleteHardbounces()**](TransactionalEmailsApi.md#deleteHardbounces) | **POST** /smtp/deleteHardbounces | Delete hardbounces |
| [**deleteScheduledEmailById()**](TransactionalEmailsApi.md#deleteScheduledEmailById) | **DELETE** /smtp/email/{identifier} | Delete scheduled emails by batchId or messageId |
| [**deleteSmtpTemplate()**](TransactionalEmailsApi.md#deleteSmtpTemplate) | **DELETE** /smtp/templates/{templateId} | Delete an inactive email template |
| [**getAggregatedSmtpReport()**](TransactionalEmailsApi.md#getAggregatedSmtpReport) | **GET** /smtp/statistics/aggregatedReport | Get your transactional email activity aggregated over a period of time |
| [**getBlockedDomains()**](TransactionalEmailsApi.md#getBlockedDomains) | **GET** /smtp/blockedDomains | Get the list of blocked domains |
| [**getEmailEventReport()**](TransactionalEmailsApi.md#getEmailEventReport) | **GET** /smtp/statistics/events | Get all your transactional email activity (unaggregated events) |
| [**getScheduledEmailById()**](TransactionalEmailsApi.md#getScheduledEmailById) | **GET** /smtp/emailStatus/{identifier} | Fetch scheduled emails by batchId or messageId |
| [**getSmtpReport()**](TransactionalEmailsApi.md#getSmtpReport) | **GET** /smtp/statistics/reports | Get your transactional email activity aggregated per day |
| [**getSmtpTemplate()**](TransactionalEmailsApi.md#getSmtpTemplate) | **GET** /smtp/templates/{templateId} | Returns the template information |
| [**getSmtpTemplates()**](TransactionalEmailsApi.md#getSmtpTemplates) | **GET** /smtp/templates | Get the list of email templates |
| [**getTransacBlockedContacts()**](TransactionalEmailsApi.md#getTransacBlockedContacts) | **GET** /smtp/blockedContacts | Get the list of blocked or unsubscribed transactional contacts |
| [**getTransacEmailContent()**](TransactionalEmailsApi.md#getTransacEmailContent) | **GET** /smtp/emails/{uuid} | Get the personalized content of a sent transactional email |
| [**getTransacEmailsList()**](TransactionalEmailsApi.md#getTransacEmailsList) | **GET** /smtp/emails | Get the list of transactional emails on the basis of allowed filters |
| [**sendTestTemplate()**](TransactionalEmailsApi.md#sendTestTemplate) | **POST** /smtp/templates/{templateId}/sendTest | Send a template to your test list |
| [**sendTransacEmail()**](TransactionalEmailsApi.md#sendTransacEmail) | **POST** /smtp/email | Send a transactional email |
| [**smtpBlockedContactsEmailDelete()**](TransactionalEmailsApi.md#smtpBlockedContactsEmailDelete) | **DELETE** /smtp/blockedContacts/{email} | Unblock or resubscribe a transactional contact |
| [**smtpLogIdentifierDelete()**](TransactionalEmailsApi.md#smtpLogIdentifierDelete) | **DELETE** /smtp/log/{identifier} | Delete an SMTP transactional log |
| [**updateSmtpTemplate()**](TransactionalEmailsApi.md#updateSmtpTemplate) | **PUT** /smtp/templates/{templateId} | Update an email template |


## `blockNewDomain()`

```php
blockNewDomain($blockDomain)
```

Add a new domain to the list of blocked domains

Blocks a new domain in order to avoid messages being sent to the same

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


$apiInstance = new Brevo\Client\Api\TransactionalEmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockDomain = new \Brevo\Client\Models\BlockDomain(); // \Brevo\Client\Models\BlockDomain | Name of the domain to be blocked

try {
    $apiInstance->blockNewDomain($blockDomain);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalEmailsApi->blockNewDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockDomain** | [**\Brevo\Client\Models\BlockDomain**](../Model/BlockDomain.md)| Name of the domain to be blocked | |

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

## `createSmtpTemplate()`

```php
createSmtpTemplate($createSmtpTemplate): \Brevo\Client\Models\CreateModel
```

Create an email template

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


$apiInstance = new Brevo\Client\Api\TransactionalEmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createSmtpTemplate = new \Brevo\Client\Models\CreateSmtpTemplate(); // \Brevo\Client\Models\CreateSmtpTemplate | values to update in transactional email template

try {
    $result = $apiInstance->createSmtpTemplate($createSmtpTemplate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalEmailsApi->createSmtpTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createSmtpTemplate** | [**\Brevo\Client\Models\CreateSmtpTemplate**](../Model/CreateSmtpTemplate.md)| values to update in transactional email template | |

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

## `deleteBlockedDomain()`

```php
deleteBlockedDomain($domain)
```

Unblock an existing domain from the list of blocked domains

Unblocks an existing domain from the list of blocked domains

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


$apiInstance = new Brevo\Client\Api\TransactionalEmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = 'domain_example'; // string | The name of the domain to be deleted

try {
    $apiInstance->deleteBlockedDomain($domain);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalEmailsApi->deleteBlockedDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| The name of the domain to be deleted | |

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

## `deleteHardbounces()`

```php
deleteHardbounces($deleteHardbounces)
```

Delete hardbounces

Delete hardbounces. To use carefully (e.g. in case of temporary ISP failures)

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


$apiInstance = new Brevo\Client\Api\TransactionalEmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deleteHardbounces = new \Brevo\Client\Models\DeleteHardbounces(); // \Brevo\Client\Models\DeleteHardbounces | values to delete hardbounces

try {
    $apiInstance->deleteHardbounces($deleteHardbounces);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalEmailsApi->deleteHardbounces: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **deleteHardbounces** | [**\Brevo\Client\Models\DeleteHardbounces**](../Model/DeleteHardbounces.md)| values to delete hardbounces | [optional] |

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

## `deleteScheduledEmailById()`

```php
deleteScheduledEmailById($identifier)
```

Delete scheduled emails by batchId or messageId

Delete scheduled batch of emails by batchId or single scheduled email by messageId

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


$apiInstance = new Brevo\Client\Api\TransactionalEmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = 4320f270-a4e3-4a2e-b591-edfe30a5e627; // string | The `batchId` of scheduled emails batch (Should be a valid UUIDv4) or the `messageId` of scheduled email.

try {
    $apiInstance->deleteScheduledEmailById($identifier);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalEmailsApi->deleteScheduledEmailById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **identifier** | **string**| The &#x60;batchId&#x60; of scheduled emails batch (Should be a valid UUIDv4) or the &#x60;messageId&#x60; of scheduled email. | |

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

## `deleteSmtpTemplate()`

```php
deleteSmtpTemplate($templateId)
```

Delete an inactive email template

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


$apiInstance = new Brevo\Client\Api\TransactionalEmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$templateId = 56; // int | id of the template

try {
    $apiInstance->deleteSmtpTemplate($templateId);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalEmailsApi->deleteSmtpTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **templateId** | **int**| id of the template | |

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

## `getAggregatedSmtpReport()`

```php
getAggregatedSmtpReport($startDate, $endDate, $days, $tag): \Brevo\Client\Models\GetAggregatedReport
```

Get your transactional email activity aggregated over a period of time

This endpoint will show the aggregated stats for past 90 days by default if `startDate` and `endDate` OR `days` is not passed. The date range can not exceed 90 days

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


$apiInstance = new Brevo\Client\Api\TransactionalEmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$startDate = 'startDate_example'; // string | **Mandatory if endDate is used.** Starting date of the report (YYYY-MM-DD). Must be lower than equal to endDate
$endDate = 'endDate_example'; // string | **Mandatory if startDate is used.** Ending date of the report (YYYY-MM-DD). Must be greater than equal to startDate
$days = 56; // int | Number of days in the past including today (positive integer). _Not compatible with 'startDate' and 'endDate'_
$tag = 'tag_example'; // string | Tag of the emails

try {
    $result = $apiInstance->getAggregatedSmtpReport($startDate, $endDate, $days, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalEmailsApi->getAggregatedSmtpReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startDate** | **string**| **Mandatory if endDate is used.** Starting date of the report (YYYY-MM-DD). Must be lower than equal to endDate | [optional] |
| **endDate** | **string**| **Mandatory if startDate is used.** Ending date of the report (YYYY-MM-DD). Must be greater than equal to startDate | [optional] |
| **days** | **int**| Number of days in the past including today (positive integer). _Not compatible with &#39;startDate&#39; and &#39;endDate&#39;_ | [optional] |
| **tag** | **string**| Tag of the emails | [optional] |

### Return type

[**\Brevo\Client\Models\GetAggregatedReport**](../Model/GetAggregatedReport.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBlockedDomains()`

```php
getBlockedDomains(): \Brevo\Client\Models\GetBlockedDomains
```

Get the list of blocked domains

Get the list of blocked domains

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


$apiInstance = new Brevo\Client\Api\TransactionalEmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getBlockedDomains();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalEmailsApi->getBlockedDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Brevo\Client\Models\GetBlockedDomains**](../Model/GetBlockedDomains.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailEventReport()`

```php
getEmailEventReport($limit, $offset, $startDate, $endDate, $days, $email, $event, $tags, $messageId, $templateId, $sort): \Brevo\Client\Models\GetEmailEventReport
```

Get all your transactional email activity (unaggregated events)

This endpoint will show the aggregated stats for past 30 days by default if `startDate` and `endDate` OR `days` is not passed. The date range can not exceed 90 days

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


$apiInstance = new Brevo\Client\Api\TransactionalEmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 2500; // int | Number limitation for the result returned
$offset = 0; // int | Beginning point in the list to retrieve from.
$startDate = 'startDate_example'; // string | **Mandatory if endDate is used.** Starting date of the report (YYYY-MM-DD). Must be lower than equal to endDate
$endDate = 'endDate_example'; // string | **Mandatory if startDate is used.** Ending date of the report (YYYY-MM-DD). Must be greater than equal to startDate
$days = 56; // int | Number of days in the past including today (positive integer). _Not compatible with 'startDate' and 'endDate'_
$email = 'email_example'; // string | Filter the report for a specific email addresses
$event = 'event_example'; // string | Filter the report for a specific event type
$tags = 'tags_example'; // string | Filter the report for tags (serialized and urlencoded array). To pass multiple tags, a format of string separated by commas is used such as **\"one, two, three\"**
$messageId = 'messageId_example'; // string | Filter on a specific message id
$templateId = 56; // int | Filter on a specific template id
$sort = 'desc'; // string | Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed

try {
    $result = $apiInstance->getEmailEventReport($limit, $offset, $startDate, $endDate, $days, $email, $event, $tags, $messageId, $templateId, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalEmailsApi->getEmailEventReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Number limitation for the result returned | [optional] [default to 2500] |
| **offset** | **int**| Beginning point in the list to retrieve from. | [optional] [default to 0] |
| **startDate** | **string**| **Mandatory if endDate is used.** Starting date of the report (YYYY-MM-DD). Must be lower than equal to endDate | [optional] |
| **endDate** | **string**| **Mandatory if startDate is used.** Ending date of the report (YYYY-MM-DD). Must be greater than equal to startDate | [optional] |
| **days** | **int**| Number of days in the past including today (positive integer). _Not compatible with &#39;startDate&#39; and &#39;endDate&#39;_ | [optional] |
| **email** | **string**| Filter the report for a specific email addresses | [optional] |
| **event** | **string**| Filter the report for a specific event type | [optional] |
| **tags** | **string**| Filter the report for tags (serialized and urlencoded array). To pass multiple tags, a format of string separated by commas is used such as **\&quot;one, two, three\&quot;** | [optional] |
| **messageId** | **string**| Filter on a specific message id | [optional] |
| **templateId** | **int**| Filter on a specific template id | [optional] |
| **sort** | **string**| Sort the results in the ascending/descending order of record creation. Default order is **descending** if &#x60;sort&#x60; is not passed | [optional] [default to &#39;desc&#39;] |

### Return type

[**\Brevo\Client\Models\GetEmailEventReport**](../Model/GetEmailEventReport.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getScheduledEmailById()`

```php
getScheduledEmailById($identifier, $startDate, $endDate, $sort, $status, $limit, $offset): \Brevo\Client\Models\GetScheduledEmailById200Response
```

Fetch scheduled emails by batchId or messageId

Fetch scheduled batch of emails by batchId or single scheduled email by messageId (Can retrieve data upto 30 days old)

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


$apiInstance = new Brevo\Client\Api\TransactionalEmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = 4320f270-a4e3-4a2e-b591-edfe30a5e627; // string | The `batchId` of scheduled emails batch (Should be a valid UUIDv4) or the `messageId` of scheduled email.
$startDate = 2022-02-02; // \DateTime | Mandatory if `endDate` is used. Starting date (YYYY-MM-DD) from which you want to fetch the list. Can be maximum 30 days older tha current date.
$endDate = 2022-03-02; // \DateTime | Mandatory if `startDate` is used. Ending date (YYYY-MM-DD) till which you want to fetch the list. Maximum time period that can be selected is one month.
$sort = 'desc'; // string | Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed. Not valid when identifier is `messageId`.
$status = 'status_example'; // string | Filter the records by `status` of the scheduled email batch or message. Not valid when identifier is `messageId`.
$limit = 100; // int | Number of documents returned per page. Not valid when identifier is `messageId`.
$offset = 0; // int | Index of the first document on the page.  Not valid when identifier is `messageId`.

try {
    $result = $apiInstance->getScheduledEmailById($identifier, $startDate, $endDate, $sort, $status, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalEmailsApi->getScheduledEmailById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **identifier** | **string**| The &#x60;batchId&#x60; of scheduled emails batch (Should be a valid UUIDv4) or the &#x60;messageId&#x60; of scheduled email. | |
| **startDate** | **\DateTime**| Mandatory if &#x60;endDate&#x60; is used. Starting date (YYYY-MM-DD) from which you want to fetch the list. Can be maximum 30 days older tha current date. | [optional] |
| **endDate** | **\DateTime**| Mandatory if &#x60;startDate&#x60; is used. Ending date (YYYY-MM-DD) till which you want to fetch the list. Maximum time period that can be selected is one month. | [optional] |
| **sort** | **string**| Sort the results in the ascending/descending order of record creation. Default order is **descending** if &#x60;sort&#x60; is not passed. Not valid when identifier is &#x60;messageId&#x60;. | [optional] [default to &#39;desc&#39;] |
| **status** | **string**| Filter the records by &#x60;status&#x60; of the scheduled email batch or message. Not valid when identifier is &#x60;messageId&#x60;. | [optional] |
| **limit** | **int**| Number of documents returned per page. Not valid when identifier is &#x60;messageId&#x60;. | [optional] [default to 100] |
| **offset** | **int**| Index of the first document on the page.  Not valid when identifier is &#x60;messageId&#x60;. | [optional] [default to 0] |

### Return type

[**\Brevo\Client\Models\GetScheduledEmailById200Response**](../Model/GetScheduledEmailById200Response.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSmtpReport()`

```php
getSmtpReport($limit, $offset, $startDate, $endDate, $days, $tag, $sort): \Brevo\Client\Models\GetReports
```

Get your transactional email activity aggregated per day

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


$apiInstance = new Brevo\Client\Api\TransactionalEmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // int | Number of documents returned per page
$offset = 0; // int | Index of the first document on the page
$startDate = 'startDate_example'; // string | **Mandatory if endDate is used.** Starting date of the report (YYYY-MM-DD)
$endDate = 'endDate_example'; // string | **Mandatory if startDate is used.** Ending date of the report (YYYY-MM-DD)
$days = 56; // int | Number of days in the past including today (positive integer). _Not compatible with 'startDate' and 'endDate'_
$tag = 'tag_example'; // string | Tag of the emails
$sort = 'desc'; // string | Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed

try {
    $result = $apiInstance->getSmtpReport($limit, $offset, $startDate, $endDate, $days, $tag, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalEmailsApi->getSmtpReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Number of documents returned per page | [optional] [default to 10] |
| **offset** | **int**| Index of the first document on the page | [optional] [default to 0] |
| **startDate** | **string**| **Mandatory if endDate is used.** Starting date of the report (YYYY-MM-DD) | [optional] |
| **endDate** | **string**| **Mandatory if startDate is used.** Ending date of the report (YYYY-MM-DD) | [optional] |
| **days** | **int**| Number of days in the past including today (positive integer). _Not compatible with &#39;startDate&#39; and &#39;endDate&#39;_ | [optional] |
| **tag** | **string**| Tag of the emails | [optional] |
| **sort** | **string**| Sort the results in the ascending/descending order of record creation. Default order is **descending** if &#x60;sort&#x60; is not passed | [optional] [default to &#39;desc&#39;] |

### Return type

[**\Brevo\Client\Models\GetReports**](../Model/GetReports.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSmtpTemplate()`

```php
getSmtpTemplate($templateId): \Brevo\Client\Models\GetSmtpTemplateOverview
```

Returns the template information

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


$apiInstance = new Brevo\Client\Api\TransactionalEmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$templateId = 56; // int | id of the template

try {
    $result = $apiInstance->getSmtpTemplate($templateId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalEmailsApi->getSmtpTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **templateId** | **int**| id of the template | |

### Return type

[**\Brevo\Client\Models\GetSmtpTemplateOverview**](../Model/GetSmtpTemplateOverview.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSmtpTemplates()`

```php
getSmtpTemplates($templateStatus, $limit, $offset, $sort): \Brevo\Client\Models\GetSmtpTemplates
```

Get the list of email templates

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


$apiInstance = new Brevo\Client\Api\TransactionalEmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$templateStatus = True; // bool | Filter on the status of the template. Active = true, inactive = false
$limit = 50; // int | Number of documents returned per page
$offset = 0; // int | Index of the first document in the page
$sort = 'desc'; // string | Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed

try {
    $result = $apiInstance->getSmtpTemplates($templateStatus, $limit, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalEmailsApi->getSmtpTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **templateStatus** | **bool**| Filter on the status of the template. Active &#x3D; true, inactive &#x3D; false | [optional] |
| **limit** | **int**| Number of documents returned per page | [optional] [default to 50] |
| **offset** | **int**| Index of the first document in the page | [optional] [default to 0] |
| **sort** | **string**| Sort the results in the ascending/descending order of record creation. Default order is **descending** if &#x60;sort&#x60; is not passed | [optional] [default to &#39;desc&#39;] |

### Return type

[**\Brevo\Client\Models\GetSmtpTemplates**](../Model/GetSmtpTemplates.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransacBlockedContacts()`

```php
getTransacBlockedContacts($startDate, $endDate, $limit, $offset, $senders, $sort): \Brevo\Client\Models\GetTransacBlockedContacts
```

Get the list of blocked or unsubscribed transactional contacts

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


$apiInstance = new Brevo\Client\Api\TransactionalEmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$startDate = 'startDate_example'; // string | **Mandatory if endDate is used.** Starting date (YYYY-MM-DD) from which you want to fetch the blocked or unsubscribed contacts
$endDate = 'endDate_example'; // string | **Mandatory if startDate is used.** Ending date (YYYY-MM-DD) till which you want to fetch the blocked or unsubscribed contacts
$limit = 50; // int | Number of documents returned per page
$offset = 0; // int | Index of the first document on the page
$senders = array('senders_example'); // string[] | Comma separated list of emails of the senders from which contacts are blocked or unsubscribed
$sort = 'desc'; // string | Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed

try {
    $result = $apiInstance->getTransacBlockedContacts($startDate, $endDate, $limit, $offset, $senders, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalEmailsApi->getTransacBlockedContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startDate** | **string**| **Mandatory if endDate is used.** Starting date (YYYY-MM-DD) from which you want to fetch the blocked or unsubscribed contacts | [optional] |
| **endDate** | **string**| **Mandatory if startDate is used.** Ending date (YYYY-MM-DD) till which you want to fetch the blocked or unsubscribed contacts | [optional] |
| **limit** | **int**| Number of documents returned per page | [optional] [default to 50] |
| **offset** | **int**| Index of the first document on the page | [optional] [default to 0] |
| **senders** | [**string[]**](../Model/string.md)| Comma separated list of emails of the senders from which contacts are blocked or unsubscribed | [optional] |
| **sort** | **string**| Sort the results in the ascending/descending order of record creation. Default order is **descending** if &#x60;sort&#x60; is not passed | [optional] [default to &#39;desc&#39;] |

### Return type

[**\Brevo\Client\Models\GetTransacBlockedContacts**](../Model/GetTransacBlockedContacts.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransacEmailContent()`

```php
getTransacEmailContent($uuid): \Brevo\Client\Models\GetTransacEmailContent
```

Get the personalized content of a sent transactional email

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


$apiInstance = new Brevo\Client\Api\TransactionalEmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | Unique id of the transactional email that has been sent to a particular contact

try {
    $result = $apiInstance->getTransacEmailContent($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalEmailsApi->getTransacEmailContent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| Unique id of the transactional email that has been sent to a particular contact | |

### Return type

[**\Brevo\Client\Models\GetTransacEmailContent**](../Model/GetTransacEmailContent.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransacEmailsList()`

```php
getTransacEmailsList($email, $templateId, $messageId, $startDate, $endDate, $sort, $limit, $offset): \Brevo\Client\Models\GetTransacEmailsList
```

Get the list of transactional emails on the basis of allowed filters

This endpoint will show the list of emails for past 30 days by default. To retrieve emails before that time, please pass startDate and endDate in query filters.

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


$apiInstance = new Brevo\Client\Api\TransactionalEmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = 'email_example'; // string | **Mandatory if templateId and messageId are not passed in query filters.** Email address to which transactional email has been sent.
$templateId = 56; // int | **Mandatory if email and messageId are not passed in query filters.** Id of the template that was used to compose transactional email.
$messageId = 'messageId_example'; // string | **Mandatory if templateId and email are not passed in query filters.** Message ID of the transactional email sent.
$startDate = 'startDate_example'; // string | **Mandatory if endDate is used.** Starting date (YYYY-MM-DD) from which you want to fetch the list. **Maximum time period that can be selected is one month**.
$endDate = 'endDate_example'; // string | **Mandatory if startDate is used.** Ending date (YYYY-MM-DD) till which you want to fetch the list. **Maximum time period that can be selected is one month.**
$sort = 'desc'; // string | Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed
$limit = 500; // int | Number of documents returned per page
$offset = 0; // int | Index of the first document in the page

try {
    $result = $apiInstance->getTransacEmailsList($email, $templateId, $messageId, $startDate, $endDate, $sort, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalEmailsApi->getTransacEmailsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**| **Mandatory if templateId and messageId are not passed in query filters.** Email address to which transactional email has been sent. | [optional] |
| **templateId** | **int**| **Mandatory if email and messageId are not passed in query filters.** Id of the template that was used to compose transactional email. | [optional] |
| **messageId** | **string**| **Mandatory if templateId and email are not passed in query filters.** Message ID of the transactional email sent. | [optional] |
| **startDate** | **string**| **Mandatory if endDate is used.** Starting date (YYYY-MM-DD) from which you want to fetch the list. **Maximum time period that can be selected is one month**. | [optional] |
| **endDate** | **string**| **Mandatory if startDate is used.** Ending date (YYYY-MM-DD) till which you want to fetch the list. **Maximum time period that can be selected is one month.** | [optional] |
| **sort** | **string**| Sort the results in the ascending/descending order of record creation. Default order is **descending** if &#x60;sort&#x60; is not passed | [optional] [default to &#39;desc&#39;] |
| **limit** | **int**| Number of documents returned per page | [optional] [default to 500] |
| **offset** | **int**| Index of the first document in the page | [optional] [default to 0] |

### Return type

[**\Brevo\Client\Models\GetTransacEmailsList**](../Model/GetTransacEmailsList.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendTestTemplate()`

```php
sendTestTemplate($templateId, $sendTestEmail)
```

Send a template to your test list

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


$apiInstance = new Brevo\Client\Api\TransactionalEmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$templateId = 56; // int | Id of the template
$sendTestEmail = new \Brevo\Client\Models\SendTestEmail(); // \Brevo\Client\Models\SendTestEmail

try {
    $apiInstance->sendTestTemplate($templateId, $sendTestEmail);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalEmailsApi->sendTestTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **templateId** | **int**| Id of the template | |
| **sendTestEmail** | [**\Brevo\Client\Models\SendTestEmail**](../Model/SendTestEmail.md)|  | |

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

## `sendTransacEmail()`

```php
sendTransacEmail($sendSmtpEmail): \Brevo\Client\Models\CreateSmtpEmail
```

Send a transactional email

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


$apiInstance = new Brevo\Client\Api\TransactionalEmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sendSmtpEmail = new \Brevo\Client\Models\SendSmtpEmail(); // \Brevo\Client\Models\SendSmtpEmail | Values to send a transactional email

try {
    $result = $apiInstance->sendTransacEmail($sendSmtpEmail);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalEmailsApi->sendTransacEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sendSmtpEmail** | [**\Brevo\Client\Models\SendSmtpEmail**](../Model/SendSmtpEmail.md)| Values to send a transactional email | |

### Return type

[**\Brevo\Client\Models\CreateSmtpEmail**](../Model/CreateSmtpEmail.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `smtpBlockedContactsEmailDelete()`

```php
smtpBlockedContactsEmailDelete($email)
```

Unblock or resubscribe a transactional contact

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


$apiInstance = new Brevo\Client\Api\TransactionalEmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = 'email_example'; // string | contact email (urlencoded) to unblock.

try {
    $apiInstance->smtpBlockedContactsEmailDelete($email);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalEmailsApi->smtpBlockedContactsEmailDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**| contact email (urlencoded) to unblock. | |

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

## `smtpLogIdentifierDelete()`

```php
smtpLogIdentifierDelete($identifier)
```

Delete an SMTP transactional log

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


$apiInstance = new Brevo\Client\Api\TransactionalEmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = 'identifier_example'; // string | MessageId or Email of the transactional log(s) to delete

try {
    $apiInstance->smtpLogIdentifierDelete($identifier);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalEmailsApi->smtpLogIdentifierDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **identifier** | **string**| MessageId or Email of the transactional log(s) to delete | |

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

## `updateSmtpTemplate()`

```php
updateSmtpTemplate($templateId, $updateSmtpTemplate)
```

Update an email template

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


$apiInstance = new Brevo\Client\Api\TransactionalEmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$templateId = 56; // int | id of the template
$updateSmtpTemplate = new \Brevo\Client\Models\UpdateSmtpTemplate(); // \Brevo\Client\Models\UpdateSmtpTemplate | values to update in transactional email template

try {
    $apiInstance->updateSmtpTemplate($templateId, $updateSmtpTemplate);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalEmailsApi->updateSmtpTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **templateId** | **int**| id of the template | |
| **updateSmtpTemplate** | [**\Brevo\Client\Models\UpdateSmtpTemplate**](../Model/UpdateSmtpTemplate.md)| values to update in transactional email template | |

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
