# Brevo\Client\ConversationsApi

All URIs are relative to https://api.brevo.com/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**conversationsAgentOnlinePingPost()**](ConversationsApi.md#conversationsAgentOnlinePingPost) | **POST** /conversations/agentOnlinePing | Sets agent’s status to online for 2-3 minutes |
| [**conversationsMessagesIdDelete()**](ConversationsApi.md#conversationsMessagesIdDelete) | **DELETE** /conversations/messages/{id} | Delete a message sent by an agent |
| [**conversationsMessagesIdGet()**](ConversationsApi.md#conversationsMessagesIdGet) | **GET** /conversations/messages/{id} | Get a message |
| [**conversationsMessagesIdPut()**](ConversationsApi.md#conversationsMessagesIdPut) | **PUT** /conversations/messages/{id} | Update a message sent by an agent |
| [**conversationsMessagesPost()**](ConversationsApi.md#conversationsMessagesPost) | **POST** /conversations/messages | Send a message as an agent |
| [**conversationsPushedMessagesIdDelete()**](ConversationsApi.md#conversationsPushedMessagesIdDelete) | **DELETE** /conversations/pushedMessages/{id} | Delete an automated message |
| [**conversationsPushedMessagesIdGet()**](ConversationsApi.md#conversationsPushedMessagesIdGet) | **GET** /conversations/pushedMessages/{id} | Get an automated message |
| [**conversationsPushedMessagesIdPut()**](ConversationsApi.md#conversationsPushedMessagesIdPut) | **PUT** /conversations/pushedMessages/{id} | Update an automated message |
| [**conversationsPushedMessagesPost()**](ConversationsApi.md#conversationsPushedMessagesPost) | **POST** /conversations/pushedMessages | Send an automated message to a visitor |


## `conversationsAgentOnlinePingPost()`

```php
conversationsAgentOnlinePingPost($conversationsAgentOnlinePingPostRequest)
```

Sets agent’s status to online for 2-3 minutes

We recommend pinging this endpoint every minute for as long as the agent has to be considered online.

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


$apiInstance = new Brevo\Client\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationsAgentOnlinePingPostRequest = {"agentId":"d9nKoegKSjmCtyK78"}; // \Brevo\Client\Models\ConversationsAgentOnlinePingPostRequest

try {
    $apiInstance->conversationsAgentOnlinePingPost($conversationsAgentOnlinePingPostRequest);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsAgentOnlinePingPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **conversationsAgentOnlinePingPostRequest** | [**\Brevo\Client\Models\ConversationsAgentOnlinePingPostRequest**](../Model/ConversationsAgentOnlinePingPostRequest.md)|  | |

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

## `conversationsMessagesIdDelete()`

```php
conversationsMessagesIdDelete($id)
```

Delete a message sent by an agent

Only agents’ messages can be deleted.

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


$apiInstance = new Brevo\Client\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID of the message

try {
    $apiInstance->conversationsMessagesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsMessagesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID of the message | |

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

## `conversationsMessagesIdGet()`

```php
conversationsMessagesIdGet($id): \Brevo\Client\Models\ConversationsMessage
```

Get a message

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


$apiInstance = new Brevo\Client\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID of the message

try {
    $result = $apiInstance->conversationsMessagesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsMessagesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID of the message | |

### Return type

[**\Brevo\Client\Models\ConversationsMessage**](../Model/ConversationsMessage.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `conversationsMessagesIdPut()`

```php
conversationsMessagesIdPut($id, $conversationsMessagesIdPutRequest): \Brevo\Client\Models\ConversationsMessage
```

Update a message sent by an agent

Only agents’ messages can be edited.

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


$apiInstance = new Brevo\Client\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID of the message
$conversationsMessagesIdPutRequest = {"text":"Good morning! How can I help you?"}; // \Brevo\Client\Models\ConversationsMessagesIdPutRequest

try {
    $result = $apiInstance->conversationsMessagesIdPut($id, $conversationsMessagesIdPutRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsMessagesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID of the message | |
| **conversationsMessagesIdPutRequest** | [**\Brevo\Client\Models\ConversationsMessagesIdPutRequest**](../Model/ConversationsMessagesIdPutRequest.md)|  | |

### Return type

[**\Brevo\Client\Models\ConversationsMessage**](../Model/ConversationsMessage.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `conversationsMessagesPost()`

```php
conversationsMessagesPost($conversationsMessagesPostRequest): \Brevo\Client\Models\ConversationsMessage
```

Send a message as an agent

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


$apiInstance = new Brevo\Client\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationsMessagesPostRequest = {"visitorId":"kZMvWhf8npAu3H6qd57w2Hv6nh6rnxvg","text":"Hello! How can I help you?","agentId":"d9nKoegKSjmCtyK78"}; // \Brevo\Client\Models\ConversationsMessagesPostRequest

try {
    $result = $apiInstance->conversationsMessagesPost($conversationsMessagesPostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsMessagesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **conversationsMessagesPostRequest** | [**\Brevo\Client\Models\ConversationsMessagesPostRequest**](../Model/ConversationsMessagesPostRequest.md)|  | |

### Return type

[**\Brevo\Client\Models\ConversationsMessage**](../Model/ConversationsMessage.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `conversationsPushedMessagesIdDelete()`

```php
conversationsPushedMessagesIdDelete($id)
```

Delete an automated message

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


$apiInstance = new Brevo\Client\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID of the message

try {
    $apiInstance->conversationsPushedMessagesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsPushedMessagesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID of the message | |

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

## `conversationsPushedMessagesIdGet()`

```php
conversationsPushedMessagesIdGet($id): \Brevo\Client\Models\ConversationsMessage
```

Get an automated message

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


$apiInstance = new Brevo\Client\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID of the message sent previously

try {
    $result = $apiInstance->conversationsPushedMessagesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsPushedMessagesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID of the message sent previously | |

### Return type

[**\Brevo\Client\Models\ConversationsMessage**](../Model/ConversationsMessage.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `conversationsPushedMessagesIdPut()`

```php
conversationsPushedMessagesIdPut($id, $conversationsMessagesIdPutRequest): \Brevo\Client\Models\ConversationsMessage
```

Update an automated message

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


$apiInstance = new Brevo\Client\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID of the message
$conversationsMessagesIdPutRequest = {"text":"Your order has shipped! Here’s your tracking number: 9114 5847 4668 7775 9233 54"}; // \Brevo\Client\Models\ConversationsMessagesIdPutRequest

try {
    $result = $apiInstance->conversationsPushedMessagesIdPut($id, $conversationsMessagesIdPutRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsPushedMessagesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID of the message | |
| **conversationsMessagesIdPutRequest** | [**\Brevo\Client\Models\ConversationsMessagesIdPutRequest**](../Model/ConversationsMessagesIdPutRequest.md)|  | |

### Return type

[**\Brevo\Client\Models\ConversationsMessage**](../Model/ConversationsMessage.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `conversationsPushedMessagesPost()`

```php
conversationsPushedMessagesPost($conversationsPushedMessagesPostRequest): \Brevo\Client\Models\ConversationsMessage
```

Send an automated message to a visitor

Example of automated messages: order status, announce new features in your web app, etc.

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


$apiInstance = new Brevo\Client\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationsPushedMessagesPostRequest = {"visitorId":"kZMvWhf8npAu3H6qd57w2Hv6nh6rnxvg","text":"Your order has shipped! Here’s your tracking number: 9114 5847 3325 9667 4328 88"}; // \Brevo\Client\Models\ConversationsPushedMessagesPostRequest

try {
    $result = $apiInstance->conversationsPushedMessagesPost($conversationsPushedMessagesPostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsPushedMessagesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **conversationsPushedMessagesPostRequest** | [**\Brevo\Client\Models\ConversationsPushedMessagesPostRequest**](../Model/ConversationsPushedMessagesPostRequest.md)|  | |

### Return type

[**\Brevo\Client\Models\ConversationsMessage**](../Model/ConversationsMessage.md)

### Authorization

[api-key](../../README.md#api-key), [partner-key](../../README.md#partner-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
