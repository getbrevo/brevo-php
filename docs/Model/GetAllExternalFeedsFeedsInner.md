# # GetAllExternalFeedsFeedsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID of the feed |
**name** | **string** | Name of the feed |
**url** | **string** | URL of the feed |
**authType** | **string** | Auth type of the feed: * &#x60;basic&#x60; * &#x60;token&#x60; * &#x60;noAuth&#x60; |
**headers** | [**\Brevo\Client\Models\GetExternalFeedByUUIDHeadersInner[]**](GetExternalFeedByUUIDHeadersInner.md) | Custom headers for the feed |
**maxRetries** | **int** | Maximum number of retries on the feed url | [default to 5]
**cache** | **bool** | Toggle caching of feed url response |
**createdAt** | **\DateTime** | Datetime on which the feed was created |
**modifiedAt** | **\DateTime** | Datetime on which the feed was modified |
**username** | **string** | Username for authType &#x60;basic&#x60; | [optional]
**password** | **string** | Password for authType &#x60;basic&#x60; | [optional]
**token** | **string** | Token for authType &#x60;token&#x60; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
