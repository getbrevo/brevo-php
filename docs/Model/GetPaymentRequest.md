# # GetPaymentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reference** | **string** | Reference of the payment request, it will appear on the payment page. |
**status** | **string** | Status of the payment request. |
**cart** | [**\Brevo\Client\Models\Cart**](Cart.md) |  |
**notification** | [**\Brevo\Client\Models\Notification**](Notification.md) |  |
**configuration** | [**\Brevo\Client\Models\Configuration**](Configuration.md) |  | [optional]
**contactId** | **int** | Brevo ID of the contact requested to pay. | [optional]
**numberOfRemindersSent** | **int** | number of reminders sent. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
