# # RemoveContactFromListRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**emails** | **string[]** | **Required if &#39;all&#39; is false and &#39;ids&#39;, &#39;extIds&#39; are empty.** Emails to remove from a list. You can pass a **maximum of 150 emails** for removal in one request. | [optional]
**ids** | **int[]** | **Required if &#39;all&#39; is false and &#39;emails&#39;, &#39;extIds&#39; are empty.** IDs to remove from a list. You can pass a **maximum of 150 IDs** for removal in one request. | [optional]
**all** | **bool** | **Required if &#39;emails&#39;, &#39;extIds&#39; and &#39;ids&#39; are empty.** Remove all existing contacts from a list. A process will be created in this scenario. You can fetch the process details to know about the progress | [optional]
**extIds** | **string[]** | **Required if &#39;all&#39; is false, &#39;ids&#39; and &#39;emails&#39; are empty.** EXT_ID attributes to remove from a list. You can pass a **maximum of 150 EXT_ID attributes** for removal in one request. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
