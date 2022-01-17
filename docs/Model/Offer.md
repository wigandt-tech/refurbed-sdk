# # Offer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Primary key. | [optional]
**version** | **string** | Version of this offer. | [optional]
**isCurrent** | **bool** | Indicates whether this is the currently available version. | [optional]
**createdAt** | **\DateTime** | When the offer was initially created. | [optional]
**instanceId** | **string** | The refurbed instance id (\&quot;product variant\&quot;) this offer is for. | [optional]
**instanceName** | **string** | Human-readable name of the instance this offer is for. | [optional]
**state** | [**\WigandtTech\Refurbed\Model\OfferState**](OfferState.md) |  | [optional]
**sku** | **string** | The merchant&#39;s SKU.  Max. length is 256 unicode characters. SKUs cannot have leading or trailing whitespace characters.  Can be empty string for old offers that did not require SKU to be set. | [optional]
**grading** | [**\WigandtTech\Refurbed\Model\OfferGrading**](OfferGrading.md) |  | [optional]
**warranty** | [**\WigandtTech\Refurbed\Model\OfferWarranty**](OfferWarranty.md) |  | [optional]
**stock** | **int** | The item&#39;s stock. | [optional]
**shippingProfileId** | **string** | The shipping profile connected to this offer. This determines in what markets the offer is sold and what the shipping costs are. | [optional]
**shippingProfileName** | **string** | Name of shipping profile. | [optional]
**secondaryShippingProfileId** | **string** | An optional secondary shipping profile id. Can be used to offer express shipping next to standard shipping. Has to be different from the primary shipping profile. | [optional]
**secondaryShippingProfileName** | **string** | Name of secondary shipping profile. Only returned if secondary shipping profile is set. | [optional]
**taxation** | [**\WigandtTech\Refurbed\Model\OfferTaxation**](OfferTaxation.md) |  | [optional]
**realTaxation** | [**\WigandtTech\Refurbed\Model\OfferTaxation**](OfferTaxation.md) |  | [optional]
**referenceCurrencyCode** | [**\WigandtTech\Refurbed\Model\CurrencyCode**](CurrencyCode.md) |  | [optional]
**referencePrice** | **string** | Reference gross price of this offer. The reference price is used to calculate prices of calculated offer market prices (the ones that haven&#39;t been defined manually). | [optional]
**referenceMinPrice** | **string** | Optional reference minimum price in market currency for automatic repricing. The reference minimum price is used to calculate minimum prices of calculated offer market prices (the ones that haven&#39;t been defined manually). | [optional]
**setMarketPrices** | [**\WigandtTech\Refurbed\Model\OfferMarketPrice[]**](OfferMarketPrice.md) | Configured market prices. Unique by market code. | [optional]
**calculatedMarketPrices** | [**\WigandtTech\Refurbed\Model\OfferMarketPrice[]**](OfferMarketPrice.md) | Calculated market prices for all markets on which prices have not been defined manually. Unique by market code. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
