# # RefundOrderItemRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The id of the order item to refund. |
**currencyCode** | [**\WigandtTech\Refurbed\Model\CurrencyCode**](CurrencyCode.md) |  | [optional]
**targetPaidAmount** | **string** | The desired paid amount of this order item. Example: if the customer paid 100EUR and the merchant wants to refund 10EUR, the target-paid-amount would be 90. 0 for a full refund. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
