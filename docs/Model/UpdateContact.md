# UpdateContact

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**attributes** | **map[string,object]** | Pass the set of attributes to be updated. These attributes must be present in your account. Values that don&#x39;t match the attribute type (e.g. text or string in a date attribute) will be ignored.To update existing email address of a contact with the new one please pass EMAIL in attributes. For example, &#x60;{ \&quot;EMAIL\&quot;:\&quot;newemail@domain.com\&quot;, \&quot;FNAME\&quot;:\&quot;Ellie\&quot;, \&quot;LNAME\&quot;:\&quot;Roger\&quot;, \&quot;COUNTRIES\&quot;:[\&quot;India\&quot;,\&quot;China\&quot;]}&#x60;. The attribute&#x39;s parameter should be passed in capital letter while updating a contact. Keep in mind transactional attributes can be updated the same way as normal attributes. Mobile Number in \&quot;SMS\&quot; field should be passed with proper country code. For example {\&quot;SMS\&quot;:\&quot;+91xxxxxxxxxx\&quot;} or {\&quot;SMS\&quot;:\&quot;0091xxxxxxxxxx\&quot;} | [optional] 
**extId** | **string** | Pass your own Id to update ext_id of a contact. | [optional] 
**emailBlacklisted** | **bool** | Set/unset this field to blacklist/allow the contact for emails (emailBlacklisted &#x3D; true) | [optional] 
**smsBlacklisted** | **bool** | Set/unset this field to blacklist/allow the contact for SMS (smsBlacklisted &#x3D; true) | [optional] 
**listIds** | **int[]** | Ids of the lists to add the contact to | [optional] 
**unlinkListIds** | **int[]** | Ids of the lists to remove the contact from | [optional] 
**smtpBlacklistSender** | **string[]** | transactional email forbidden sender for contact. Use only for email Contact | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

