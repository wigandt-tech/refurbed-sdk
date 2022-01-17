# # OfferMarketPrice

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**offerId** | **string** | Id of the offer the price is set for. | [optional]
**marketCode** | **string** | Code of the market the price is set for. | [optional]
**marketName** | **string** | Name of the market the price is set for. | [optional]
**isSiteMarket** | **bool** | Indicates whether there exists a refurbed website for this market. | [optional]
**isCalculated** | **bool** | Indicates whether the price was calculated by a rule or set manually by the merchant. | [optional]
**currencyCode** | [**\WigandtTech\Refurbed\Model\CurrencyCode**](CurrencyCode.md) |  | [optional]
**price** | **string** | Gross price of this offer. Either set by merchant, or calculated by refurbed. | [optional]
**minPrice** | **string** | Optional minimum price in market currency for automatic repricing. Either set by merchant, or calculated by refurbed. | [optional]
**siteMarketCurrencyCode** | [**\WigandtTech\Refurbed\Model\CurrencyCode**](CurrencyCode.md) |  | [optional]
**siteMarketPrice** | **string** | Price in currency of the site market. Only set for site markets. | [optional]
**siteMarketMinPrice** | **string** | Minimum price in currency of the site market. Only set for site markets. | [optional]
**visibility** | [**\WigandtTech\Refurbed\Model\OfferVisibility**](OfferVisibility.md) |  | [optional]
**instanceBuyboxState** | [**\WigandtTech\Refurbed\Model\OfferBuyboxState**](OfferBuyboxState.md) |  | [optional]
**instanceBuyboxInfo** | [**\WigandtTech\Refurbed\Model\BuyboxInfo**](BuyboxInfo.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
