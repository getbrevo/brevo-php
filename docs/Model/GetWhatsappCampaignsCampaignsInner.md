# # GetWhatsappCampaignsCampaignsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | ID of the WhatsApp Campaign |
**campaignName** | **string** | Name of the WhatsApp Campaign |
**templateId** | **string** | Id of the WhatsApp template |
**campaignStatus** | **string** | Status of the WhatsApp Campaign |
**scheduledAt** | **string** | UTC date-time on which WhatsApp campaign is scheduled. Should be in YYYY-MM-DDTHH:mm:ss.SSSZ format |
**createdAt** | **string** | Creation UTC date-time of the WhatsApp template (YYYY-MM-DDTHH:mm:ss.SSSZ) |
**modifiedAt** | **string** | UTC date-time of last modification of the WhatsApp template (YYYY-MM-DDTHH:mm:ss.SSSZ) |
**errorReason** | **string** | Error Reason associated with the WhatsApp campaign sending | [optional]
**invalidatedContacts** | **int** | Count of invalidated contacts | [optional]
**readPercentage** | **float** | Read percentage of the the WhatsApp campaign created | [optional]
**stats** | [**\Brevo\Client\Models\WhatsappCampStats**](WhatsappCampStats.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
