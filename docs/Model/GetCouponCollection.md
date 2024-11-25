# # GetCouponCollection

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The id of the collection. |
**name** | **string** | The name of the collection. |
**defaultCoupon** | **string** | The default coupon of the collection. |
**createdAt** | **\DateTime** | Datetime on which the collection was created. |
**totalCoupons** | **int** | Total number of coupons in the collection. |
**remainingCoupons** | **int** | Number of coupons that have not been sent yet. |
**expirationDate** | **\DateTime** | Expiration date for the coupon collection in RFC3339 format. | [optional]
**remainingDaysAlert** | **int** | If present, an email notification is going to be sent the defined amount of days before to the expiration date. | [optional]
**remainingCouponsAlert** | **int** | If present, an email notification is going to be sent when the total number of available coupons falls below the defined threshold. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
