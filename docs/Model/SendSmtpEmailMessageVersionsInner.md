# # SendSmtpEmailMessageVersionsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**to** | [**\Brevo\Client\Models\SendSmtpEmailToInner[]**](SendSmtpEmailToInner.md) | List of email addresses and names (_optional_) of the recipients. For example, **[{\&quot;name\&quot;:\&quot;Jimmy\&quot;, \&quot;email\&quot;:\&quot;jimmy98@example.com\&quot;}, {\&quot;name\&quot;:\&quot;Joe\&quot;, \&quot;email\&quot;:\&quot;joe@example.com\&quot;}]** |
**params** | **array<string,mixed>** | Pass the set of attributes to customize the template. For example, **{\&quot;FNAME\&quot;:\&quot;Joe\&quot;, \&quot;LNAME\&quot;:\&quot;Doe\&quot;}**. It&#39;s **considered only if template is in New Template Language format**. | [optional]
**bcc** | [**\Brevo\Client\Models\SendSmtpEmailBccInner[]**](SendSmtpEmailBccInner.md) | List of email addresses and names (_optional_) of the recipients in bcc | [optional]
**cc** | [**\Brevo\Client\Models\SendSmtpEmailCcInner[]**](SendSmtpEmailCcInner.md) | List of email addresses and names (_optional_) of the recipients in cc | [optional]
**replyTo** | [**\Brevo\Client\Models\SendSmtpEmailReplyTo**](SendSmtpEmailReplyTo.md) |  | [optional]
**subject** | **string** | Custom subject specific to message version | [optional]
**htmlContent** | **string** | HTML body of the message. **Mandatory if &#39;templateId&#39; is not passed, ignored if &#39;templateId&#39; is passed** | [optional]
**textContent** | **string** | Plain Text body of the message. **Ignored if &#39;templateId&#39; is passed** | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
