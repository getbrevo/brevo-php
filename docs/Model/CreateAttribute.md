# # CreateAttribute

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**value** | **string** | Value of the attribute. **Use only if the attribute&#39;s category is &#39;calculated&#39; or &#39;global&#39;** | [optional]
**isRecurring** | **bool** | Type of the attribute. **Use only if the attribute&#39;s category is &#39;calculated&#39; or &#39;global&#39;** | [optional]
**enumeration** | [**\Brevo\Client\Models\CreateAttributeEnumerationInner[]**](CreateAttributeEnumerationInner.md) | List of values and labels that the attribute can take. **Use only if the attribute&#39;s category is \&quot;category\&quot;**. For example: **[{\&quot;value\&quot;:1, \&quot;label\&quot;:\&quot;male\&quot;}, {\&quot;value\&quot;:2, \&quot;label\&quot;:\&quot;female\&quot;}]** | [optional]
**multiCategoryOptions** | **string[]** | List of options you want to add for multiple-choice attribute. **Use only if the attribute&#39;s category is \&quot;normal\&quot; and attribute&#39;s type is \&quot;multiple-choice\&quot;.** For example: **[\&quot;USA\&quot;,\&quot;INDIA\&quot;]** | [optional]
**type** | **string** | Type of the attribute. **Use only if the attribute&#39;s category is &#39;normal&#39;, &#39;category&#39; or &#39;transactional&#39;** Type **boolean and multiple-choice** is only available if the category is **normal** attribute Type **id** is only available if the category is **transactional** attribute Type **category** is only available if the category is **category** attribute | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
