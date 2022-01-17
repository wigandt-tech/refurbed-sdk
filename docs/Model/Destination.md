# # Destination

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**marketCode** | **string** | Code of the market the price is set for. | [optional]
**marketName** | **string** | Name of the market the price is set for. | [optional]
**isSiteMarket** | **bool** | Indicates whether there exists a refurbed website for this market. | [optional]
**currencyCode** | [**\WigandtTech\Refurbed\Model\CurrencyCode**](CurrencyCode.md) |  | [optional]
**shippingCosts** | **string** | Shipping costs to add to the offer price. This is merely for convenience; refurbed does not display any shipping costs to customers.  Merchants are *not* allowed to show shipping costs in their invoices to customers. | [optional]
**siteMarketCurrencyCode** | [**\WigandtTech\Refurbed\Model\CurrencyCode**](CurrencyCode.md) |  | [optional]
**siteMarketShippingCosts** | **string** | Shipping costs in the site market&#39;s currency. This is only set if market is a site market. Equal to shipping costs set by the merchant if the currencies match.  This depends on the latest exchange rates and therefore is a snapshot in time. There is no guarantee that new orders will apply the same exchange rate. | [optional]
**minDeliveryDays** | **int** | Minimum number of days the parcel delivery will take. Between 1 and 30. | [optional]
**maxDeliveryDays** | **int** | Maximum number of days the parcel delivery will take. Between min. delivery days and 30. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
