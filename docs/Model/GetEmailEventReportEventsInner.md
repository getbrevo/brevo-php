# # GetEmailEventReportEventsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | Email address which generates the event |
**date** | **string** | UTC date-time on which the event has been generated |
**messageId** | **string** | Message ID which generated the event |
**event** | **string** | Event which occurred |
**subject** | **string** | Subject of the event | [optional]
**reason** | **string** | Reason of bounce (only available if the event is hardbounce or softbounce) | [optional]
**tag** | **string** | Tag of the email which generated the event | [optional]
**ip** | **string** | IP from which the user has opened the email or clicked on the link (only available if the event is opened or clicks) | [optional]
**link** | **string** | The link which is sent to the user (only available if the event is requests or opened or clicks) | [optional]
**from** | **string** | Sender email from which the emails are sent | [optional]
**templateId** | **int** | ID of the template (only available if the email is template based) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
