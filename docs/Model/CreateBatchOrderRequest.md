# CreateBatchOrderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**orders** | [**\Brevo\Client\Model\Order[]**](Order.md) | Array of order objects |
**historical** | **bool** | If true, orders are treated as historical data and will not trigger automation workflows. | [optional] [default to true]
**notifyUrl** | **string** | Notify URL to receive batch processing status updates. | [optional]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
