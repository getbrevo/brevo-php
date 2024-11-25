# # CrmDealsIdPatchRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of deal | [optional]
**attributes** | **object** | Attributes for deal update  To assign owner of a Deal you can send attributes.deal_owner and utilize the account email or ID.  If you wish to update the pipeline of a deal you need to provide the &#x60;pipeline&#x60; and the &#x60;deal_stage&#x60;  Pipeline and deal_stage are ids you can fetch using this endpoint &#x60;/crm/pipeline/details/{pipelineID}&#x60; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
