# # Order

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Primary key. | [optional]
**releasedAt** | **\DateTime** | When the order was released to the merchant. | [optional]
**state** | [**\WigandtTech\Refurbed\Model\OrderState**](OrderState.md) |  | [optional]
**labels** | [**\WigandtTech\Refurbed\Model\OrderLabel[]**](OrderLabel.md) | Order labels. | [optional]
**customerEmail** | **string** | The customer&#39;s email address. | [optional]
**shippingAddress** | [**\WigandtTech\Refurbed\Model\Address**](Address.md) |  | [optional]
**invoiceAddress** | [**\WigandtTech\Refurbed\Model\Address**](Address.md) |  | [optional]
**currencyCode** | [**\WigandtTech\Refurbed\Model\CurrencyCode**](CurrencyCode.md) |  | [optional]
**settlementCurrencyCode** | [**\WigandtTech\Refurbed\Model\CurrencyCode**](CurrencyCode.md) |  | [optional]
**settlementExchangeRate** | **string** | Exchange rate applied to convert amounts from currency to settlement currency. | [optional]
**totalCharged** | **string** | The total amount the customer was charged. This is the sum of all of the order item&#39;s total charged values; it is also the sum of total paid and total refunded. | [optional]
**settlementTotalCharged** | **string** | The total amount the customer was charged, in settlement currency. | [optional]
**totalPaid** | **string** | The total amount the user paid for this order. This is the sum of all the order item&#39;s total paid values. | [optional]
**settlementTotalPaid** | **string** | The total amount the user paid for this order, in settlement currency. | [optional]
**totalRefunded** | **string** | The total amount the customer was refunded. This is the sum of all of the order item&#39;s total refunded values. | [optional]
**settlementTotalRefunded** | **string** | The total amount the customer was refunded, in settlement currency. | [optional]
**isRefundable** | **bool** | Indicates whether this order is currently refundable. | [optional]
**isInvoiceable** | **bool** | Indicates whether an invoice can be uploaded. Will turn false ~30 days after order release. | [optional]
**hasInvoice** | **bool** | Indicates whether an invoice was uploaded. | [optional]
**items** | [**\WigandtTech\Refurbed\Model\OrderItem[]**](OrderItem.md) | All items of this order. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
