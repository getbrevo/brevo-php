# ExportWebhooksHistory

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**days** | **int** | Number of days in the past including today (positive integer). _Not compatible with &#39;startDate&#39; and &#39;endDate&#39;_ | [optional] 
**startDate** | **string** | Mandatory if endDate is used. Starting date of the history (YYYY-MM-DD). Must be lower than equal to endDate | [optional] 
**endDate** | **string** | Mandatory if startDate is used. Ending date of the report (YYYY-MM-DD). Must be greater than equal to startDate | [optional] 
**sort** | **string** | Sorting order of records (asc or desc) | [optional] 
**event** | **string** | Filter the history for a specific event type | 
**notifyURL** | **string** | Webhook URL to receive CSV file link | 
**webhookId** | **int** | Filter the history for a specific webhook id | [optional] 
**email** | **string** | Filter the history for a specific email | [optional] 
**messageId** | **int** | Filter the history for a specific message id | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


