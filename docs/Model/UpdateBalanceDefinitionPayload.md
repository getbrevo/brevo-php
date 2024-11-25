# # UpdateBalanceDefinitionPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name for the balance definition |
**unit** | **string** | The unit for this balance definition. |
**description** | **string** | Description for the balance definition | [optional]
**meta** | **object** | Additional metadata related to the balance definition. | [optional]
**minAmount** | **float** | Minimum possible amount for balance | [optional]
**maxAmount** | **float** | Maximum possible amount for balance | [optional]
**maxCreditAmountLimit** | **float** | Maximum credit amount limit per operation | [optional]
**maxDebitAmountLimit** | **float** | Maximum debit amount limit per operation | [optional]
**balanceOptionAmountOvertakingStrategy** | **string** | Select partial to enable partial credit of balance if maximum balance limit is reaching. Select strict to reject the transaction if it will breach the max credit amount limit. | [optional] [default to 'strict']
**balanceOptionCreditRounding** | **string** | Select natural to round to nearest integer. Select upper to round up . Select lower to round down | [optional] [default to 'natural']
**balanceOptionDebitRounding** | **string** | Select natural to round to nearest integer. Select upper to round up . Select lower to round down | [optional] [default to 'natural']
**balanceAvailabilityDurationValue** | **float** | Number of days/weeks/month/year for balance expiry | [optional]
**balanceAvailabilityDurationUnit** | **string** | Unit of time for the balance&#39;s availability (e.g., day/week/month/year). | [optional] [default to 'day']
**balanceAvailabilityDurationModifier** | **string** | Select startOfPeriod to configure balance expiry on start of day/week/month/year. Select endOfPeriod to configure balance expiry on end of day/week/month/year, else select noModification | [optional] [default to 'noModification']
**balanceExpirationDate** | **string** | Date when the balance expires and can no longer be used, in dd/mm format. The balance will be expired when this date appears next in the calendar and only one of balanceExpirationDate or balance availability fields can be used. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
