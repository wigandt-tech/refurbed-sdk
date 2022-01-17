# # CreateOfferRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**instanceId** | **string** | The refurbed instance ID this offer should be created on. | [optional]
**gtin** | **string** | The GTIN-8, GTIN-12 or GTIN-13 of the instance the offer should be created on. Note that EAN-13 and UPC-A codes are GTINs.  Using this identifier will create the offer in state UNVERIFIED. | [optional]
**sku** | **string** |  |
**grading** | [**\WigandtTech\Refurbed\Model\OfferGrading**](OfferGrading.md) |  | [optional]
**warranty** | [**\WigandtTech\Refurbed\Model\OfferWarranty**](OfferWarranty.md) |  | [optional]
**stock** | **int** |  |
**shippingProfileId** | **string** |  |
**secondaryShippingProfileId** | **string** |  | [optional]
**taxation** | [**\WigandtTech\Refurbed\Model\OfferTaxation**](OfferTaxation.md) |  | [optional]
**referenceCurrencyCode** | [**\WigandtTech\Refurbed\Model\CurrencyCode**](CurrencyCode.md) |  | [optional]
**referencePrice** | **string** |  |
**referenceMinPrice** | **string** |  | [optional]
**createMarketPrices** | [**\WigandtTech\Refurbed\Model\CreateOfferRequestCreateMarketPrice[]**](CreateOfferRequestCreateMarketPrice.md) | Market prices to create. This is equal to a batch MarketOfferService.CreateMarketOffer. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
