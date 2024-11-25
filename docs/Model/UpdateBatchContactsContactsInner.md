# # UpdateBatchContactsContactsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | Email address of the user to be updated (For each operation only pass one of the supported contact identifiers. Email, id or sms) | [optional]
**id** | **int** | id of the user to be updated (For each operation only pass one of the supported contact identifiers. Email, id or sms) | [optional]
**sms** | **string** | SMS of the user to be updated (For each operation only pass one of the supported contact identifiers. Email, id or sms) | [optional]
**extId** | **string** | Pass your own Id to update ext_id of a contact. | [optional]
**attributes** | **array<string,mixed>** | Pass the set of attributes to be updated. **These attributes must be present in your account**. To update existing email address of a contact with the new one please pass EMAIL in attribtes. For example, **{ \&quot;EMAIL\&quot;:\&quot;newemail@domain.com\&quot;, \&quot;FNAME\&quot;:\&quot;Ellie\&quot;, \&quot;LNAME\&quot;:\&quot;Roger\&quot;}**. Keep in mind transactional attributes can be updated the same way as normal attributes. Mobile Number in **SMS** field should be passed with proper country code. For example: **{\&quot;SMS\&quot;:\&quot;+91xxxxxxxxxx\&quot;} or {\&quot;SMS\&quot;:\&quot;0091xxxxxxxxxx\&quot;}** | [optional]
**emailBlacklisted** | **bool** | Set/unset this field to blacklist/allow the contact for emails (emailBlacklisted &#x3D; true) | [optional]
**smsBlacklisted** | **bool** | Set/unset this field to blacklist/allow the contact for SMS (smsBlacklisted &#x3D; true) | [optional]
**listIds** | **int[]** | Ids of the lists to add the contact to | [optional]
**unlinkListIds** | **int[]** | Ids of the lists to remove the contact from | [optional]
**smtpBlacklistSender** | **string[]** | transactional email forbidden sender for contact. Use only for email Contact | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
