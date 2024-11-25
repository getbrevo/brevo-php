# # Order

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique ID of the order. |
**createdAt** | **string** | Event occurrence UTC date-time (YYYY-MM-DDTHH:mm:ssZ), when order is actually created. |
**updatedAt** | **string** | Event updated UTC date-time (YYYY-MM-DDTHH:mm:ssZ), when the status of the order is actually changed/updated. |
**status** | **string** | State of the order. |
**amount** | **float** | Total amount of the order, including all shipping expenses, tax and the price of items. |
**products** | [**\Brevo\Client\Models\OrderProductsInner[]**](OrderProductsInner.md) |  |
**storeId** | **string** | ID of store where the order is placed | [optional]
**identifiers** | [**\Brevo\Client\Models\OrderIdentifiers**](OrderIdentifiers.md) |  | [optional]
**billing** | [**\Brevo\Client\Models\OrderBilling**](OrderBilling.md) |  | [optional]
**coupons** | **string[]** | Coupons applied to the order. Stored case insensitive. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
