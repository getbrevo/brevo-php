# # AbTestCampaignResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**winningVersion** | **string** | Winning Campaign Info. pending &#x3D; Campaign has been picked for sending and winning version is yet to be decided, tie &#x3D; A tie happened between both the versions, notAvailable &#x3D; Campaign has not yet been picked for sending. | [optional]
**winningCriteria** | **string** | Criteria choosen for winning version (Open/Click) | [optional]
**winningSubjectLine** | **string** | Subject Line of current winning version | [optional]
**openRate** | **string** | Open rate for current winning version | [optional]
**clickRate** | **string** | Click rate for current winning version | [optional]
**winningVersionRate** | **string** | Open/Click rate for the winner version | [optional]
**statistics** | [**\Brevo\Client\Models\AbTestCampaignResultStatistics**](AbTestCampaignResultStatistics.md) |  | [optional]
**clickedLinks** | [**\Brevo\Client\Models\AbTestCampaignResultClickedLinks**](AbTestCampaignResultClickedLinks.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
