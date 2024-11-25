# # TierGroup

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Tier group unique identifier | [optional]
**name** | **string** | Tier group name | [optional]
**tierOrder** | **string[]** | Order of the tiers in the group in ascending order | [optional]
**loyaltyProgramId** | **string** | Associated loyalty program Id | [optional]
**upgradeStrategy** | **string** | Select real_time to upgrade tier on real time balance updates. Select anniversary to upgrade tier on subscription anniversary. | [optional] [default to 'real_time']
**downgradeStrategy** | **string** | Select real_time to downgrade tier on real time balance updates. Select anniversary to downgrade tier on subscription anniversary. | [optional] [default to 'real_time']
**createdAt** | **\DateTime** | Timestamp when the tier group was created | [optional]
**updatedAt** | **\DateTime** | Timestamp when the tier group was last updated | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
