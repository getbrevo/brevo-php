# # CancelledTransaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier for the transaction. | [optional]
**status** | **string** | Current status of the transaction, indicating its state (draft/complete/cancelled/rejected/expired) | [optional]
**amount** | **float** | The monetary value of the transaction. | [optional]
**meta** | **object** | Additional metadata related to the transaction | [optional]
**rejectedAt** | **\DateTime** | Timestamp indicating when the transaction was rejected | [optional]
**rejectReason** | **string** | Reason for rejecting the transaction | [optional]
**expirationDate** | **\DateTime** | Date when the transaction expires if not completed. | [optional]
**completedAt** | **\DateTime** |  | [optional]
**cancelledAt** | **\DateTime** |  | [optional]
**createdAt** | **\DateTime** |  | [optional]
**updatedAt** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
