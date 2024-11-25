# # GetWebhook

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | URL of the webhook |
**id** | **int** | ID of the webhook |
**description** | **string** | Description of the webhook |
**events** | **string[]** |  |
**type** | **string** | Type of webhook (marketing or transactional) |
**createdAt** | **string** | Creation UTC date-time of the webhook (YYYY-MM-DDTHH:mm:ss.SSSZ) |
**modifiedAt** | **string** | Last modification UTC date-time of the webhook (YYYY-MM-DDTHH:mm:ss.SSSZ) |
**batched** | **bool** | Batching configuration of the webhook, we send batched webhooks if its true | [optional]
**auth** | **object** | Authentication header to be send with the webhook requests | [optional]
**headers** | **object[]** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
