# # UpdateSmtpTemplate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tag** | **string** | Tag of the template | [optional]
**sender** | [**\Brevo\Client\Models\UpdateSmtpTemplateSender**](UpdateSmtpTemplateSender.md) |  | [optional]
**templateName** | **string** | Name of the template | [optional]
**htmlContent** | **string** | **Required if htmlUrl is empty**. If the template is designed using Drag &amp; Drop editor via HTML content, then the design page will not have Drag &amp; Drop editor access for that template. Body of the message (HTML must have more than 10 characters) | [optional]
**htmlUrl** | **string** | **Required if htmlContent is empty**. URL to the body of the email (HTML) | [optional]
**subject** | **string** | Subject of the email | [optional]
**replyTo** | **string** | Email on which campaign recipients will be able to reply to | [optional]
**toField** | **string** | To personalize the **To** Field. If you want to include the first name and last name of your recipient, add **{FNAME} {LNAME}**. These contact attributes must already exist in your Brevo account. If input parameter **params** used please use **{{contact.FNAME}} {{contact.LNAME}}** for personalization | [optional]
**attachmentUrl** | **string** | Absolute url of the attachment (**no local file**). Extensions allowed: #### xlsx, xls, ods, docx, docm, doc, csv, pdf, txt, gif, jpg, jpeg, png, tif, tiff, rtf, bmp, cgm, css, shtml, html, htm, zip, xml, ppt, pptx, tar, ez, ics, mobi, msg, pub and eps | [optional]
**isActive** | **bool** | Status of the template. isActive &#x3D; false means template is inactive, isActive &#x3D; true means template is active | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
