# # UpdateCouponCollectionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**defaultCoupon** | **string** | A default coupon to be used in case there are no coupons left | [optional]
**expirationDate** | **\DateTime** | Specify an expiration date for the coupon collection in RFC3339 format. Use null to remove the expiration date. | [optional]
**remainingDaysAlert** | **int** | Send a notification alert (email) when the remaining days until the expiration date are equal or fall bellow this number. Use null to disable alerts. | [optional]
**remainingCouponsAlert** | **int** | Send a notification alert (email) when the remaining coupons count is equal or fall bellow this number. Use null to disable alerts. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
