# # CreateDoiContact

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | Email address where the confirmation email will be sent. This email address will be the identifier for all other contact attributes. |
**includeListIds** | **int[]** | Lists under user account where contact should be added |
**templateId** | **int** | Id of the Double opt-in (DOI) template |
**redirectionUrl** | **string** | URL of the web page that user will be redirected to after clicking on the double opt in URL. When editing your DOI template you can reference this URL by using the tag **{{ params.DOIurl }}**. |
**attributes** | [**array<string,\Brevo\Client\Models\CreateDoiContactAttributesValue>**](CreateDoiContactAttributesValue.md) | Pass the set of attributes and their values. **These attributes must be present in your Brevo account**. For eg. **{&#39;FNAME&#39;:&#39;Elly&#39;, &#39;LNAME&#39;:&#39;Roger&#39;, &#39;COUNTRIES&#39;:[&#39;India&#39;,&#39;China&#39;]}** | [optional]
**excludeListIds** | **int[]** | Lists under user account where contact should not be added | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
