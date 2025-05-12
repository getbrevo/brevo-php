# SendSmtpEmailMessageVersions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**to** | [**\Brevo\Client\Model\SendSmtpEmailTo1[]**](SendSmtpEmailTo1.md) | List of email addresses and names (_optional_) of the recipients. For example, [{\"name\":\"Jimmy\", \"email\":\"jimmy98@example.com\"}, {\"name\":\"Joe\", \"email\":\"joe@example.com\"}] | 
**params** | **map[string,object]** | Pass the set of attributes to customize the template. For example, {\"FNAME\":\"Joe\", \"LNAME\":\"Doe\"}. It&#39;s considered only if template is in New Template Language format. | [optional] 
**bcc** | [**\Brevo\Client\Model\SendSmtpEmailBcc[]**](SendSmtpEmailBcc.md) | List of email addresses and names (optional) of the recipients in bcc | [optional] 
**cc** | [**\Brevo\Client\Model\SendSmtpEmailCc[]**](SendSmtpEmailCc.md) | List of email addresses and names (optional) of the recipients in cc | [optional] 
**replyTo** | [**\Brevo\Client\Model\SendSmtpEmailReplyTo1**](SendSmtpEmailReplyTo1.md) |  | [optional] 
**subject** | **string** | Custom subject specific to message version | [optional] 
**htmlContent** | **string** | HTML body of the message. **Mandatory if &#x27;templateId&#x27; is not passed, ignored if &#x27;templateId&#x27; is passed** | [optional] 
**textContent** | **string** | Plain Text body of the message. **Ignored if &#x27;templateId&#x27; is passed** | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


