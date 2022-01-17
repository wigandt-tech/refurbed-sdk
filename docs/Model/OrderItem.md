# # OrderItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Primary key. | [optional]
**name** | **string** | Human-readable name of the item sold. | [optional]
**state** | [**\WigandtTech\Refurbed\Model\OrderItemState**](OrderItemState.md) |  | [optional]
**sku** | **string** | Merchant SKU of the item. This can be empty string as it is/was possible for the merchant to create offers without SKU in the refurbed merchant management interface. | [optional]
**currencyCode** | [**\WigandtTech\Refurbed\Model\CurrencyCode**](CurrencyCode.md) |  | [optional]
**settlementCurrencyCode** | [**\WigandtTech\Refurbed\Model\CurrencyCode**](CurrencyCode.md) |  | [optional]
**totalCharged** | **string** | The total amount the customer was charged for this item, in order currency. This is the sum of total paid and total refunded. | [optional]
**settlementTotalCharged** | **string** | The total amount the customer was charged for this item, in order settlement currency. | [optional]
**totalChargedDynamic** | **string** | The dynamic price part of the amount the customer was charged (\&quot;dynamic pricing\&quot;). | [optional]
**settlementTotalChargedDynamic** | **string** | The dynamic price part of the amount the customer was charged, in order settlement currency. | [optional]
**totalPaid** | **string** | The total amount the customer paid for this item, in order currency. This value decreases on refund. | [optional]
**settlementTotalPaid** | **string** | The total amount the customer paid for this item, in order settlement currency. | [optional]
**totalRefunded** | **string** | The total amount the customer was refunded, in order currency. | [optional]
**settlementTotalRefunded** | **string** | The total amount the customer was refunded, in order settlement currency. | [optional]
**settlementTotalCommission** | **string** | Total commission paid by the merchant, in order settlement currency. | [optional]
**settlementBaseCommission** | **string** | Base commission paid by the merchant, in order settlement currency. | [optional]
**settlementPayoutCommission** | **string** | Payout commission paid by the merchant, in order settlement currency. | [optional]
**settlementDynamicCommission** | **string** | Dynamic commission paid by the merchant (commission of the dynamic part), in order settlement currency. | [optional]
**taxation** | [**\WigandtTech\Refurbed\Model\OrderItemTaxation**](OrderItemTaxation.md) |  | [optional]
**isRefundable** | **bool** | Indicates whether this item is currently refundable. | [optional]
**offerData** | [**\WigandtTech\Refurbed\Model\OfferData**](OfferData.md) |  | [optional]
**parcelTrackingUrl** | **string** | Parcel tracking link. Needs to be a valid HTTP(S) URL. | [optional]
**itemIdentifier** | **string** | IMEI (if smartphone) or serial number (other product categories) of the item shipped. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
