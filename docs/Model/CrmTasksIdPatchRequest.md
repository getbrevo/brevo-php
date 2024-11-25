# # CrmTasksIdPatchRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of task | [optional]
**duration** | **int** | Duration of task in milliseconds [1 minute &#x3D; 60000 ms] | [optional]
**taskTypeId** | **string** | Id for type of task e.g Call / Email / Meeting etc. | [optional]
**date** | **\DateTime** | Task date/time | [optional]
**notes** | **string** | Notes added to a task | [optional]
**done** | **bool** | Task marked as done | [optional]
**assignToId** | **string** | To assign a task to a user you can use either the account email or ID. | [optional]
**contactsIds** | **int[]** | Contact ids for contacts linked to this task | [optional]
**dealsIds** | **string[]** | Deal ids for deals a task is linked to | [optional]
**companiesIds** | **string[]** | Companies ids for companies a task is linked to | [optional]
**reminder** | [**\Brevo\Client\Models\TaskReminder**](TaskReminder.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
