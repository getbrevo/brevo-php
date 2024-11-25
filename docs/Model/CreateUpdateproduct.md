# # CreateUpdateProduct

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Product ID for which you requested the details |
**name** | **string** | Mandatory in case of creation**. Name of the product for which you requested the details |
**url** | **string** | URL to the product | [optional]
**imageUrl** | **string** | Absolute URL to the cover image of the product | [optional]
**sku** | **string** | Product identifier from the shop | [optional]
**price** | **float** | Price of the product | [optional]
**categories** | **string[]** | Category ID-s of the product | [optional]
**parentId** | **string** | Parent product id of the product | [optional]
**metaInfo** | [**array<string,\Brevo\Client\Models\GetContactInfoIdentifierParameter>**](GetContactInfoIdentifierParameter.md) | Meta data of product such as description, vendor, producer, stock level. The size of cumulative metaInfo shall not exceed **1000 KB**. Maximum length of metaInfo object can be 10. | [optional]
**updateEnabled** | **bool** | Facilitate to update the existing category in the same request (updateEnabled &#x3D; true) | [optional] [default to false]
**deletedAt** | **string** | UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) of the product deleted from the shop&#39;s database | [optional]
**isDeleted** | **bool** | product deleted from the shop&#39;s database | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
