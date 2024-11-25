# # CreateTransactionPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **float** | Enter positive value for credit transaction and negative value for debit transaction |
**balanceDefinitionId** | **string** | Balance definition id for which the transaction is made |
**contactId** | **float** | Contact id |
**meta** | **object** | Additional metadata related to the transaction. | [optional]
**ttl** | **int** | Time to live for the transaction in seconds. This defines how long the transaction remains valid before it expires. | [optional] [default to 300]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
