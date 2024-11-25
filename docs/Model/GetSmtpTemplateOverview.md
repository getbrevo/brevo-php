# # GetSmtpTemplateOverview

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | ID of the template |
**name** | **string** | Name of the template |
**subject** | **string** | Subject of the template |
**isActive** | **bool** | Status of template (true&#x3D;active, false&#x3D;inactive) |
**testSent** | **bool** | Status of test sending for the template (true&#x3D;test email has been sent, false&#x3D;test email has not been sent) |
**sender** | [**\Brevo\Client\Models\GetSmtpTemplateOverviewSender**](GetSmtpTemplateOverviewSender.md) |  |
**replyTo** | **string** | Email defined as the \&quot;Reply to\&quot; for the template |
**toField** | **string** | Customisation of the \&quot;to\&quot; field for the template |
**tag** | **string** | Tag of the template |
**htmlContent** | **string** | HTML content of the template |
**createdAt** | **string** | Creation UTC date-time of the template (YYYY-MM-DDTHH:mm:ss.SSSZ) |
**modifiedAt** | **string** | Last modification UTC date-time of the template (YYYY-MM-DDTHH:mm:ss.SSSZ) |
**doiTemplate** | **bool** | It is true if template is a valid Double opt-in (DOI) template, otherwise it is false. This field will be available only in case of single template detail call. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
