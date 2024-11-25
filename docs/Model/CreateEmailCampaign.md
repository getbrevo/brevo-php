# # CreateEmailCampaign

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sender** | [**\Brevo\Client\Models\CreateEmailCampaignSender**](CreateEmailCampaignSender.md) |  |
**name** | **string** | Name of the campaign |
**tag** | **string** | Tag of the campaign | [optional]
**htmlContent** | **string** | Mandatory if htmlUrl and templateId are empty. Body of the message (HTML). | [optional]
**htmlUrl** | **string** | **Mandatory if htmlContent and templateId are empty**. Url to the message (HTML). For example: **https://html.domain.com** | [optional]
**templateId** | **int** | **Mandatory if htmlContent and htmlUrl are empty**. Id of the transactional email template with status _active_. Used to copy only its content fetched from htmlContent/htmlUrl to an email campaign for RSS feature. | [optional]
**scheduledAt** | **string** | Sending UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). **Prefer to pass your timezone in date-time format for accurate result**. If sendAtBestTime is set to true, your campaign will be sent according to the date passed (ignoring the time part). For example: **2017-06-01T12:30:00+02:00** | [optional]
**subject** | **string** | Subject of the campaign. **Mandatory if abTesting is false**. Ignored if abTesting is true. | [optional]
**previewText** | **string** | Preview text or preheader of the email campaign | [optional]
**replyTo** | **string** | Email on which the campaign recipients will be able to reply to | [optional]
**toField** | **string** | To personalize the **To** Field. If you want to include the first name and last name of your recipient, add **{FNAME} {LNAME}**. These contact attributes must already exist in your Brevo account. If input parameter **params** used please use **{{contact.FNAME}} {{contact.LNAME}}** for personalization | [optional]
**recipients** | [**\Brevo\Client\Models\CreateEmailCampaignRecipients**](CreateEmailCampaignRecipients.md) |  | [optional]
**attachmentUrl** | **string** | Absolute url of the attachment (no local file). Extension allowed: #### xlsx, xls, ods, docx, docm, doc, csv, pdf, txt, gif, jpg, jpeg, png, tif, tiff, rtf, bmp, cgm, css, shtml, html, htm, zip, xml, ppt, pptx, tar, ez, ics, mobi, msg, pub and eps | [optional]
**inlineImageActivation** | **bool** | Use true to embedded the images in your email. Final size of the email should be less than **4MB**. Campaigns with embedded images can _not be sent to more than 5000 contacts_ | [optional] [default to false]
**mirrorActive** | **bool** | Use true to enable the mirror link | [optional]
**footer** | **string** | Footer of the email campaign | [optional]
**header** | **string** | Header of the email campaign | [optional]
**utmCampaign** | **string** | Customize the utm_campaign value. If this field is empty, the campaign name will be used. Only alphanumeric characters and spaces are allowed | [optional]
**params** | **array<string,mixed>** | Pass the set of attributes to customize the type classic campaign. For example: **{\&quot;FNAME\&quot;:\&quot;Joe\&quot;, \&quot;LNAME\&quot;:\&quot;Doe\&quot;}**. Only available if **type** is **classic**. It&#39;s considered only if campaign is in _New Template Language format_. The New Template Language is dependent on the values of **subject, htmlContent/htmlUrl, sender.name &amp; toField** | [optional]
**sendAtBestTime** | **bool** | Set this to true if you want to send your campaign at best time. | [optional] [default to false]
**abTesting** | **bool** | Status of A/B Test. abTesting &#x3D; false means it is disabled &amp; abTesting &#x3D; true means it is enabled. **subjectA, subjectB, splitRule, winnerCriteria &amp; winnerDelay** will be considered when abTesting is set to true. subjectA &amp; subjectB are mandatory together &amp; subject if passed is ignored. **Can be set to true only if sendAtBestTime is false**. You will be able to set up two subject lines for your campaign and send them to a random sample of your total recipients. Half of the test group will receive version A, and the other half will receive version B | [optional] [default to false]
**subjectA** | **string** | Subject A of the campaign. **Mandatory if abTesting &#x3D; true**. subjectA &amp; subjectB should have unique value | [optional]
**subjectB** | **string** | Subject B of the campaign. **Mandatory if abTesting &#x3D; true**. subjectA &amp; subjectB should have unique value | [optional]
**splitRule** | **int** | Add the size of your test groups. **Mandatory if abTesting &#x3D; true &amp; &#39;recipients&#39; is passed**. We&#39;ll send version A and B to a random sample of recipients, and then the winning version to everyone else | [optional]
**winnerCriteria** | **string** | Choose the metrics that will determinate the winning version. **Mandatory if _splitRule_ &gt;&#x3D; 1 and &lt; 50**. If splitRule &#x3D; 50, &#x60;winnerCriteria&#x60; is ignored if passed | [optional]
**winnerDelay** | **int** | Choose the duration of the test in hours. Maximum is 7 days, pass 24*7 &#x3D; 168 hours. The winning version will be sent at the end of the test. **Mandatory if _splitRule_ &gt;&#x3D; 1 and &lt; 50**. If splitRule &#x3D; 50, &#x60;winnerDelay&#x60; is ignored if passed | [optional]
**ipWarmupEnable** | **bool** | **Available for dedicated ip clients**. Set this to true if you wish to warm up your ip. | [optional] [default to false]
**initialQuota** | **int** | **Mandatory if ipWarmupEnable is set to true**. Set an initial quota greater than 1 for warming up your ip. We recommend you set a value of 3000. | [optional]
**increaseRate** | **int** | **Mandatory if ipWarmupEnable is set to true**. Set a percentage increase rate for warming up your ip. We recommend you set the increase rate to 30% per day. If you want to send the same number of emails every day, set the daily increase value to 0%. | [optional]
**unsubscriptionPageId** | **string** | Enter an unsubscription page id. The page id is a 24 digit alphanumeric id that can be found in the URL when editing the page. If not entered, then the default unsubscription page will be used. | [optional]
**updateFormId** | **string** | **Mandatory if templateId is used containing the {{ update_profile }} tag**. Enter an update profile form id. The form id is a 24 digit alphanumeric id that can be found in the URL when editing the form. If not entered, then the default update profile form will be used. | [optional]
**emailExpirationDate** | [**\Brevo\Client\Models\CreateEmailCampaignEmailExpirationDate**](CreateEmailCampaignEmailExpirationDate.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
