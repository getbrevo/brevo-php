# UpdateWhatsAppCampaign

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**campaignName** | **string** | Name of the campaign | [optional] 
**campaignStatus** | **string** | Status of the campaign | [optional] [default to 'scheduled']
**rescheduleFor** | **string** | Reschedule the sending UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) of campaign. **Prefer to pass your timezone in date-time format for accurate result.For example: **2017-06-01T12:30:00+02:00** Use this field to update the scheduledAt of any existing draft or scheduled WhatsApp campaign. | [optional] 
**recipients** | [**\Brevo\Client\Model\CreateWhatsAppCampaignRecipients**](CreateWhatsAppCampaignRecipients.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


