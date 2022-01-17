# # UpdateShippingProfileRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**name** | **string** |  | [optional]
**sourceCountryMarketCode** | **string** |  | [optional]
**createDestinations** | [**\WigandtTech\Refurbed\Model\UpdateShippingProfileRequestCreateDestination[]**](UpdateShippingProfileRequestCreateDestination.md) | Destinations to create. | [optional]
**updateDestinations** | [**\WigandtTech\Refurbed\Model\UpdateDestination[]**](UpdateDestination.md) | Destinations to update. | [optional]
**deleteDestinations** | **string[]** | Destinations to delete. Takes a list of market codes. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
