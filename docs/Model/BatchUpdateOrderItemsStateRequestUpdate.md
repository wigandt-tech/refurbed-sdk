# # BatchUpdateOrderItemsStateRequestUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The id of the order item to refund. |
**state** | [**\WigandtTech\Refurbed\Model\OrderItemState**](OrderItemState.md) |  | [optional]
**parcelTrackingUrl** | **string** | Required for state SHIPPED. Must be a valid HTTP(S) URL. | [optional]
**itemIdentifier** | **string** | IMEI (if smartphone) or serial number (other product categories) of the item shipped. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
