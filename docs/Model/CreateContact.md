# CreateContact

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | Email address of the user. **Mandatory if \"ext_id\";  &amp; \"SMS\"; field is not passed.** | [optional] 
**extId** | **string** | Pass your own Id to create a contact. | [optional] 
**attributes** | **map[string,object]** | Pass the set of attributes and their values. These attributes must be present in your Brevo account. For eg. {\&quot;FNAME\&quot;:\&quot;Elly\&quot;, \&quot;LNAME\&quot;:\&quot;Roger\&quot;, \&quot;COUNTRIES\&quot;:[\&quot;India\&quot;,\&quot;China\&quot;]} | [optional] 
**emailBlacklisted** | **bool** | Set this field to blacklist the contact for emails (emailBlacklisted &#x3D; true) | [optional] 
**smsBlacklisted** | **bool** | Set this field to blacklist the contact for SMS (smsBlacklisted &#x3D; true) | [optional] 
**listIds** | **int[]** | Ids of the lists to add the contact to | [optional] 
**updateEnabled** | **bool** | Facilitate to update the existing contact in the same request (updateEnabled &#x3D; true) | [optional] [default to false]
**smtpBlacklistSender** | **string[]** | transactional email forbidden sender for contact. Use only for email Contact ( only available if updateEnabled &#x3D; true ) | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

