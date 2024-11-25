# # CreateSmtpTemplate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sender** | [**\Brevo\Client\Models\CreateSmtpTemplateSender**](CreateSmtpTemplateSender.md) |  |
**templateName** | **string** | Name of the template |
**subject** | **string** | Subject of the template |
**tag** | **string** | Tag of the template | [optional]
**htmlContent** | **string** | Body of the message (HTML version). The field must have more than 10 characters. **REQUIRED if htmlUrl is empty** | [optional]
**htmlUrl** | **string** | Url which contents the body of the email message. REQUIRED if htmlContent is empty | [optional]
**replyTo** | **string** | Email on which campaign recipients will be able to reply to | [optional]
**toField** | **string** | To personalize the **To** Field. If you want to include the first name and last name of your recipient, add **{FNAME} {LNAME}**. These contact attributes must already exist in your Brevo account. If input parameter **params** used please use **{{contact.FNAME}} {{contact.LNAME}}** for personalization | [optional]
**attachmentUrl** | **string** | Absolute url of the attachment (**no local file**). Extension allowed: #### xlsx, xls, ods, docx, docm, doc, csv, pdf, txt, gif, jpg, jpeg, png, tif, tiff, rtf, bmp, cgm, css, shtml, html, htm, zip, xml, ppt, pptx, tar, ez, ics, mobi, msg, pub and eps&#39; | [optional]
**isActive** | **bool** | Status of template. isActive &#x3D; true means template is active and isActive &#x3D; false means template is inactive | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
