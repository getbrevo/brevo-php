# RemoveContactFromList

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**emails** | **string[]** | Required if &#39;all&#39; is false and EXT_ID attributes, IDs are not passed. Emails to remove from a list. You can pass a maximum of 150 emails for removal in one request. | [optional] 
**ids** | **int[]** | Mandatory if Emails, EXT_ID attributes are not passed, ignored otherwise. Contact IDs to add to a list. You can pass a maximum of 150 Ids for addition in one request. If you need to add the emails in bulk, please prefer /contacts/import api. | [optional] 
**extIds** | **string[]** | Mandatory if &#39;all&#39; is false and Emails, IDs are not passed, ignored otherwise. EXT_ID attributes to add to a list. You can pass a maximum of 150 extIds for addition in one request. If you need to add the emails in bulk, please prefer /contacts/import api. | [optional] 
**all** | **bool** | Required if none of &#x39;emails&#x39;, EXT_ID attributes or &#x39;ids&#x39; are passed. Remove all existing contacts from a list.  A process will be created in this scenario. You can fetch the process details to know about the progress | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

