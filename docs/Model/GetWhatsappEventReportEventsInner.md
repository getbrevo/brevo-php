# # GetWhatsappEventReportEventsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contactNumber** | **string** | WhatsApp Number with country code. Example, 85264318721 |
**date** | **string** | UTC date-time on which the event has been generated |
**messageId** | **string** | Message ID which generated the event |
**event** | **string** | Event which occurred |
**senderNumber** | **string** | WhatsApp Number with country code. Example, 85264318721 |
**reason** | **string** | Reason for the event (will be there in case of &#x60;error&#x60; and &#x60;soft-bounce&#x60; events) | [optional]
**body** | **string** | Text of the reply (will be there only in case of &#x60;reply&#x60; event with text) | [optional]
**mediaUrl** | **string** | Url of the media reply (will be there only in case of &#x60;reply&#x60; event with media) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
