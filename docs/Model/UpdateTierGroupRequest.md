# # UpdateTierGroupRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the tier group | [optional]
**tierOrder** | **string** | Order of the tiers in the group in ascending order | [optional]
**upgradeStrategy** | **string** | Select real_time to upgrade tier on real time balance updates. Select anniversary to upgrade tier on subscription anniversary. | [optional] [default to 'real_time']
**downgradeStrategy** | **string** | Select real_time to downgrade tier on real time balance updates. Select anniversary to downgrade tier on subscription anniversary. | [optional] [default to 'real_time']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
