# # BuyboxInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**siteMarketCompetitorPrice** | **string** | Total gross price of the competitor offer that currently has the BuyBox. This is the price shown to customers and includes shipping costs. In site market currency. | [optional]
**siteMarketSuggestedOfferPrice** | **string** | The suggested gross price (excl. shipping costs that might have been converted) for this offer that would make it get the BuyBox. In site market currency.  If you want to automatically underbid your competitors, set the offer minimum price and do not try to keep up by constantly pushing offer price updates yourself. | [optional]
**siteMarketSuggestedOfferPriceDiff** | **string** | Absolute difference between the current offer price (MIN(price, min price)) and the suggested offer price, in site market currency. | [optional]
**suggestedOfferPrice** | **string** | Same as site_market_suggested_offer_price but in offer price currency. | [optional]
**suggestedOfferPriceDiff** | **string** | Absolute difference between the current offer price (MIN(price, min price)) and the suggested offer price, in site market currency. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
