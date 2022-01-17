# # ShippingProfile

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Primary key. | [optional]
**version** | **string** | Version of the shipping profile. | [optional]
**isCurrent** | **bool** | Indicates whether this is the currently available (latest and non-deleted). version. | [optional]
**createdAt** | **\DateTime** | When the shipping profile was created. | [optional]
**name** | **string** | Shipping profile name. | [optional]
**sourceCountryMarketCode** | **string** | Code if the country market the parcel is being shipped from. | [optional]
**sourceCountryMarketName** | **string** | Name of the country market the parcel is being shipped from. | [optional]
**isDeletable** | **bool** | Indicates whether the shipping profile can be deleted. Will always be false on historic versions. | [optional]
**numOffersAssigned** | **int** | Number of offers this shipping profile is assigned to. Has to be 0 for the shipping profile to be deletable. Set on current version only. | [optional]
**destinations** | [**\WigandtTech\Refurbed\Model\Destination[]**](Destination.md) | Destinations by market code. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
