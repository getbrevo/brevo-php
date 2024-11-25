# # BalanceDefinition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier for the balance definition. | [optional]
**name** | **string** | Name for the balance definition | [optional]
**description** | **string** | Description for the balance definition | [optional]
**meta** | **object** | Additional metadata related to the balance definition. | [optional]
**unit** | **string** | The unit for this balance definition | [optional]
**minAmount** | **float** | Minimum possible amount for balance | [optional]
**maxAmount** | **float** | Maximum possible amount for balance | [optional]
**maximumCreditAmountLimit** | **float** | Maximum credit amount limit per operation | [optional]
**maximumDebitAmountLimit** | **float** | Maximum debit amount limit per operation | [optional]
**balanceOptionAmountOvertakingStrategy** | **string** | Partial enables partial credit of balance if maximum balance limit is reaching. Strict enables rejection of transaction if it will breach the max credit amount limit. | [optional]
**balanceOptionCreditRounding** | **string** |  | [optional]
**balanceOptionDebitRounding** | **string** |  | [optional]
**balanceAvailabilityDurationValue** | **float** | Number of days/weeks/month/year for balance expiry | [optional]
**balanceAvailabilityDurationUnit** | **string** | Unit of time for the balance&#39;s availability (e.g., day/week/month/year). | [optional]
**balanceAvailabilityDurationModifier** | **string** | startOfPeriod depicts the balancy expiry on start of day/week/month/year. endOfPeriod depicts the balancy expiry on end of day/week/month/year | [optional]
**balanceExpirationDate** | **\DateTime** | Date when the balance expires and can no longer be used, in dd/mm format. The balance will be expired when this date appears next in the calendar and only one of balanceExpirationDate or balance availability fields can be used. | [optional]
**createdAt** | **\DateTime** |  | [optional]
**updatedAt** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
