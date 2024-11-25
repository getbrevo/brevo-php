# # CorporateSubAccountSsoTokenPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Id of the sub-account organization |
**email** | **string** | User email of sub-account organization | [optional]
**target** | **string** | **Set target after login success** * **automation** - Redirect to Automation after login * **email_campaign** - Redirect to Email Campaign after login * **contacts** - Redirect to Contacts after login * **landing_pages** - Redirect to Landing Pages after login * **email_transactional** - Redirect to Email Transactional after login * **senders** - Redirect to Senders after login * **sms_campaign** - Redirect to Sms Campaign after login * **sms_transactional** - Redirect to Sms Transactional after login | [optional]
**url** | **string** | Set the full target URL after login success. The user will land directly on this target URL after login | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
