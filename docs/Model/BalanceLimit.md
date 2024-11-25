# # BalanceLimit

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**constraintType** | **string** | Select amount to define constraints on amount and transaction to define constraints on transaction | [optional] [default to 'amount']
**transactionType** | **string** | Select debit to configure limit for debit transaction type. Select credit to configure limit for credit transaction type | [optional] [default to 'debit']
**durationValue** | **int** | Number of days/weeks/month/year for balance limit | [optional]
**durationUnit** | **string** | Unit for the balance&#39;s availability | [optional] [default to 'day']
**value** | **float** | The value or amount associated with the balance limit. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
