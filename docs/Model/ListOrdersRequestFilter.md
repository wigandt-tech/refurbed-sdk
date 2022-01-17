# # ListOrdersRequestFilter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | [**\WigandtTech\Refurbed\Model\Int64Filter**](Int64Filter.md) |  | [optional]
**releasedAt** | [**\WigandtTech\Refurbed\Model\TimestampRangeFilter**](TimestampRangeFilter.md) |  | [optional]
**state** | [**\WigandtTech\Refurbed\Model\OrderStateFilter**](OrderStateFilter.md) |  | [optional]
**labels** | [**\WigandtTech\Refurbed\Model\OrderLabelCollectionFilter**](OrderLabelCollectionFilter.md) |  | [optional]
**customerEmail** | [**\WigandtTech\Refurbed\Model\OrderCustomerEmailFilter**](OrderCustomerEmailFilter.md) |  | [optional]
**address** | [**\WigandtTech\Refurbed\Model\OrderAddressFilter**](OrderAddressFilter.md) |  | [optional]
**addressPhoneNumber** | [**\WigandtTech\Refurbed\Model\OrderAddressPhoneNumberFilter**](OrderAddressPhoneNumberFilter.md) |  | [optional]
**shippingAddressEntity** | [**\WigandtTech\Refurbed\Model\AddressEntityFilter**](AddressEntityFilter.md) |  | [optional]
**shippingAddressCountryCode** | [**\WigandtTech\Refurbed\Model\CountryCodeFilter**](CountryCodeFilter.md) |  | [optional]
**invoiceAddress** | [**\WigandtTech\Refurbed\Model\OrderAddressFilter**](OrderAddressFilter.md) |  | [optional]
**invoiceAddressEntity** | [**\WigandtTech\Refurbed\Model\AddressEntityFilter**](AddressEntityFilter.md) |  | [optional]
**invoiceAddressVatin** | [**\WigandtTech\Refurbed\Model\OrderAddressVATINFilter**](OrderAddressVATINFilter.md) |  | [optional]
**invoiceAddressCountryCode** | [**\WigandtTech\Refurbed\Model\CountryCodeFilter**](CountryCodeFilter.md) |  | [optional]
**currencyCode** | [**\WigandtTech\Refurbed\Model\CurrencyCodeFilter**](CurrencyCodeFilter.md) |  | [optional]
**settlementCurrencyCode** | [**\WigandtTech\Refurbed\Model\CurrencyCodeFilter**](CurrencyCodeFilter.md) |  | [optional]
**totalCharged** | [**\WigandtTech\Refurbed\Model\NumericRangeFilter**](NumericRangeFilter.md) |  | [optional]
**settlementTotalCharged** | [**\WigandtTech\Refurbed\Model\NumericRangeFilter**](NumericRangeFilter.md) |  | [optional]
**totalPaid** | [**\WigandtTech\Refurbed\Model\NumericRangeFilter**](NumericRangeFilter.md) |  | [optional]
**settlementTotalPaid** | [**\WigandtTech\Refurbed\Model\NumericRangeFilter**](NumericRangeFilter.md) |  | [optional]
**totalRefunded** | [**\WigandtTech\Refurbed\Model\NumericRangeFilter**](NumericRangeFilter.md) |  | [optional]
**settlementTotalRefunded** | [**\WigandtTech\Refurbed\Model\NumericRangeFilter**](NumericRangeFilter.md) |  | [optional]
**isInvoiceable** | [**\WigandtTech\Refurbed\Model\BoolFilter**](BoolFilter.md) |  | [optional]
**hasInvoice** | [**\WigandtTech\Refurbed\Model\BoolFilter**](BoolFilter.md) |  | [optional]
**itemName** | [**\WigandtTech\Refurbed\Model\ListOrdersRequestFilterOrderItemNameFilter**](ListOrdersRequestFilterOrderItemNameFilter.md) |  | [optional]
**itemSku** | [**\WigandtTech\Refurbed\Model\OfferSKUFilter**](OfferSKUFilter.md) |  | [optional]
**itemOfferId** | [**\WigandtTech\Refurbed\Model\Int64Filter**](Int64Filter.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
