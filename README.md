# Refurbed

The refurbed merchant API allows to access and manage markets, currencies, instances, shipping profiles, offers, market offers, orders and order items.


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/wigandt-tech/refurbed-sdk.git"
    }
  ],
  "require": {
    "wigandt-tech/refurbed-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/Refurbed/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: APIKeyAuth
$config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WigandtTech\Refurbed\Api\CurrencyServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WigandtTech\Refurbed\Model\GetCurrencyRequest(); // \WigandtTech\Refurbed\Model\GetCurrencyRequest

try {
    $result = $apiInstance->getCurrency($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrencyServiceApi->getCurrency: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.refurbed.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CurrencyServiceApi* | [**getCurrency**](docs/Api/CurrencyServiceApi.md#getcurrency) | **POST** /refb.merchant.v1.CurrencyService/GetCurrency | Gets a single supported currency.
*CurrencyServiceApi* | [**listCurrencies**](docs/Api/CurrencyServiceApi.md#listcurrencies) | **POST** /refb.merchant.v1.CurrencyService/ListCurrencies | Lists all supported currencies.
*InstanceServiceApi* | [**getInstance**](docs/Api/InstanceServiceApi.md#getinstance) | **POST** /refb.merchant.v1.InstanceService/GetInstance | Gets a single instance.
*MarketOfferServiceApi* | [**batchCreateMarketOffer**](docs/Api/MarketOfferServiceApi.md#batchcreatemarketoffer) | **POST** /refb.merchant.v1.MarketOfferService/BatchCreateMarketOffer | Batch creates market offers / offer market prices of offers.
*MarketOfferServiceApi* | [**batchDeleteMarketOffer**](docs/Api/MarketOfferServiceApi.md#batchdeletemarketoffer) | **POST** /refb.merchant.v1.MarketOfferService/BatchDeleteMarketOffer | Batch deletes market offers / offer market prices of offers.
*MarketOfferServiceApi* | [**batchGetMarketOffer**](docs/Api/MarketOfferServiceApi.md#batchgetmarketoffer) | **POST** /refb.merchant.v1.MarketOfferService/BatchGetMarketOffer | Batch gets market offers / offer market prices of offers.
*MarketOfferServiceApi* | [**batchUpdateMarketOffer**](docs/Api/MarketOfferServiceApi.md#batchupdatemarketoffer) | **POST** /refb.merchant.v1.MarketOfferService/BatchUpdateMarketOffer | Batch updates market offers / offer market prices of offers.
*MarketOfferServiceApi* | [**createMarketOffer**](docs/Api/MarketOfferServiceApi.md#createmarketoffer) | **POST** /refb.merchant.v1.MarketOfferService/CreateMarketOffer | Creates a single market offer / an offer market price of an offer.
*MarketOfferServiceApi* | [**deleteMarketOffer**](docs/Api/MarketOfferServiceApi.md#deletemarketoffer) | **POST** /refb.merchant.v1.MarketOfferService/DeleteMarketOffer | Deletes a single market offer / an offer market price of an offer.
*MarketOfferServiceApi* | [**getMarketOffer**](docs/Api/MarketOfferServiceApi.md#getmarketoffer) | **POST** /refb.merchant.v1.MarketOfferService/GetMarketOffer | Gets a single market offer.
*MarketOfferServiceApi* | [**listMarketOffers**](docs/Api/MarketOfferServiceApi.md#listmarketoffers) | **POST** /refb.merchant.v1.MarketOfferService/ListMarketOffers | Lists all market offers.
*MarketOfferServiceApi* | [**listMarketOffersByOffer**](docs/Api/MarketOfferServiceApi.md#listmarketoffersbyoffer) | **POST** /refb.merchant.v1.MarketOfferService/ListMarketOffersByOffer | Lists all market offers of a specific offer and version.
*MarketOfferServiceApi* | [**updateMarketOffer**](docs/Api/MarketOfferServiceApi.md#updatemarketoffer) | **POST** /refb.merchant.v1.MarketOfferService/UpdateMarketOffer | Updates a single market offer / an offer market price of an offer.
*MarketServiceApi* | [**getMarket**](docs/Api/MarketServiceApi.md#getmarket) | **POST** /refb.merchant.v1.MarketService/GetMarket | Gets a single market.
*MarketServiceApi* | [**listMarkets**](docs/Api/MarketServiceApi.md#listmarkets) | **POST** /refb.merchant.v1.MarketService/ListMarkets | Lists all markets.
*OfferServiceApi* | [**batchCreateOffers**](docs/Api/OfferServiceApi.md#batchcreateoffers) | **POST** /refb.merchant.v1.OfferService/BatchCreateOffers | Batch creates offers.
*OfferServiceApi* | [**batchDeleteOffers**](docs/Api/OfferServiceApi.md#batchdeleteoffers) | **POST** /refb.merchant.v1.OfferService/BatchDeleteOffers | Batch deletes offers.
*OfferServiceApi* | [**batchGetOffers**](docs/Api/OfferServiceApi.md#batchgetoffers) | **POST** /refb.merchant.v1.OfferService/BatchGetOffers | Batch gets single offers.
*OfferServiceApi* | [**batchUpdateOffers**](docs/Api/OfferServiceApi.md#batchupdateoffers) | **POST** /refb.merchant.v1.OfferService/BatchUpdateOffers | Batch updates offers.
*OfferServiceApi* | [**createOffer**](docs/Api/OfferServiceApi.md#createoffer) | **POST** /refb.merchant.v1.OfferService/CreateOffer | Creates a single offer.
*OfferServiceApi* | [**deleteOffer**](docs/Api/OfferServiceApi.md#deleteoffer) | **POST** /refb.merchant.v1.OfferService/DeleteOffer | Deletes a single offer.
*OfferServiceApi* | [**getOffer**](docs/Api/OfferServiceApi.md#getoffer) | **POST** /refb.merchant.v1.OfferService/GetOffer | Gets a single offer.
*OfferServiceApi* | [**listOffers**](docs/Api/OfferServiceApi.md#listoffers) | **POST** /refb.merchant.v1.OfferService/ListOffers | Lists all offers.
*OfferServiceApi* | [**updateOffer**](docs/Api/OfferServiceApi.md#updateoffer) | **POST** /refb.merchant.v1.OfferService/UpdateOffer | Updates a single offer.
*OrderItemServiceApi* | [**batchUpdateOrderItems**](docs/Api/OrderItemServiceApi.md#batchupdateorderitems) | **POST** /refb.merchant.v1.OrderItemService/BatchUpdateOrderItems | Batch updates order items.
*OrderItemServiceApi* | [**batchUpdateOrderItemsState**](docs/Api/OrderItemServiceApi.md#batchupdateorderitemsstate) | **POST** /refb.merchant.v1.OrderItemService/BatchUpdateOrderItemsState | Batch updates order items&#39; state.
*OrderItemServiceApi* | [**calculateRefundOrderItem**](docs/Api/OrderItemServiceApi.md#calculaterefundorderitem) | **POST** /refb.merchant.v1.OrderItemService/CalculateRefundOrderItem | Calculate values for a refund of a single order item, i.e. using the RefundOrderItem method.
*OrderItemServiceApi* | [**getOrderItem**](docs/Api/OrderItemServiceApi.md#getorderitem) | **POST** /refb.merchant.v1.OrderItemService/GetOrderItem | Gets a single order item.
*OrderItemServiceApi* | [**listOrderItemsByOrder**](docs/Api/OrderItemServiceApi.md#listorderitemsbyorder) | **POST** /refb.merchant.v1.OrderItemService/ListOrderItemsByOrder | Lists all order items of a specific order.
*OrderItemServiceApi* | [**refundOrderItem**](docs/Api/OrderItemServiceApi.md#refundorderitem) | **POST** /refb.merchant.v1.OrderItemService/RefundOrderItem | Refunds a single order item. Item needs to be refundable.
*OrderItemServiceApi* | [**updateOrderItem**](docs/Api/OrderItemServiceApi.md#updateorderitem) | **POST** /refb.merchant.v1.OrderItemService/UpdateOrderItem | Updates a single order item.
*OrderItemServiceApi* | [**updateOrderItemState**](docs/Api/OrderItemServiceApi.md#updateorderitemstate) | **POST** /refb.merchant.v1.OrderItemService/UpdateOrderItemState | Updates the state of a single order item.
*OrderServiceApi* | [**calculateRefundOrder**](docs/Api/OrderServiceApi.md#calculaterefundorder) | **POST** /refb.merchant.v1.OrderService/CalculateRefundOrder | Calculate values for a refund of all refundable items of an order at once, i.e. using the RefundOrder method.
*OrderServiceApi* | [**deleteOrderInvoice**](docs/Api/OrderServiceApi.md#deleteorderinvoice) | **POST** /refb.merchant.v1.OrderService/DeleteOrderInvoice | Deletes the order&#39;s invoice. Order needs to be invoiceable.
*OrderServiceApi* | [**getOrder**](docs/Api/OrderServiceApi.md#getorder) | **POST** /refb.merchant.v1.OrderService/GetOrder | Gets a single order using its identifier.
*OrderServiceApi* | [**getOrderInvoice**](docs/Api/OrderServiceApi.md#getorderinvoice) | **POST** /refb.merchant.v1.OrderService/GetOrderInvoice | Gets the order&#39;s invoice. The URL access token is valid for 24h.
*OrderServiceApi* | [**listOrders**](docs/Api/OrderServiceApi.md#listorders) | **POST** /refb.merchant.v1.OrderService/ListOrders | Lists orders.
*OrderServiceApi* | [**refundOrder**](docs/Api/OrderServiceApi.md#refundorder) | **POST** /refb.merchant.v1.OrderService/RefundOrder | Refunds all refundable items of an order at once.
*OrderServiceApi* | [**setOrderInvoiceStream**](docs/Api/OrderServiceApi.md#setorderinvoicestream) | **POST** /refb.merchant.v1.OrderService/SetOrderInvoiceStream | Uploads an invoice for an order.
*ShippingProfileServiceApi* | [**createShippingProfile**](docs/Api/ShippingProfileServiceApi.md#createshippingprofile) | **POST** /refb.merchant.v1.ShippingProfileService/CreateShippingProfile | Creates a shipping profile.
*ShippingProfileServiceApi* | [**deleteShippingProfile**](docs/Api/ShippingProfileServiceApi.md#deleteshippingprofile) | **POST** /refb.merchant.v1.ShippingProfileService/DeleteShippingProfile | Deletes a shipping profile. Only shipping profiles marked as deletable can be deleted.
*ShippingProfileServiceApi* | [**getShippingProfile**](docs/Api/ShippingProfileServiceApi.md#getshippingprofile) | **POST** /refb.merchant.v1.ShippingProfileService/GetShippingProfile | Gets a single shipping profile. If no version is defined, its current version is returned.
*ShippingProfileServiceApi* | [**listShippingProfiles**](docs/Api/ShippingProfileServiceApi.md#listshippingprofiles) | **POST** /refb.merchant.v1.ShippingProfileService/ListShippingProfiles | Lists all current shipping profiles.
*ShippingProfileServiceApi* | [**updateShippingProfile**](docs/Api/ShippingProfileServiceApi.md#updateshippingprofile) | **POST** /refb.merchant.v1.ShippingProfileService/UpdateShippingProfile | Updates a shipping profile.

## Models

- [Address](docs/Model/Address.md)
- [AddressEntity](docs/Model/AddressEntity.md)
- [AddressEntityFilter](docs/Model/AddressEntityFilter.md)
- [Any](docs/Model/Any.md)
- [BatchCreateMarketOffersRequest](docs/Model/BatchCreateMarketOffersRequest.md)
- [BatchCreateMarketOffersRequestCreate](docs/Model/BatchCreateMarketOffersRequestCreate.md)
- [BatchCreateMarketOffersResponse](docs/Model/BatchCreateMarketOffersResponse.md)
- [BatchCreateMarketOffersResponseResult](docs/Model/BatchCreateMarketOffersResponseResult.md)
- [BatchCreateOffersRequest](docs/Model/BatchCreateOffersRequest.md)
- [BatchCreateOffersRequestCreate](docs/Model/BatchCreateOffersRequestCreate.md)
- [BatchCreateOffersResponse](docs/Model/BatchCreateOffersResponse.md)
- [BatchCreateOffersResponseResult](docs/Model/BatchCreateOffersResponseResult.md)
- [BatchDeleteMarketOffersRequest](docs/Model/BatchDeleteMarketOffersRequest.md)
- [BatchDeleteMarketOffersRequestDelete](docs/Model/BatchDeleteMarketOffersRequestDelete.md)
- [BatchDeleteMarketOffersResponse](docs/Model/BatchDeleteMarketOffersResponse.md)
- [BatchDeleteMarketOffersResponseResult](docs/Model/BatchDeleteMarketOffersResponseResult.md)
- [BatchDeleteOffersRequest](docs/Model/BatchDeleteOffersRequest.md)
- [BatchDeleteOffersRequestDelete](docs/Model/BatchDeleteOffersRequestDelete.md)
- [BatchDeleteOffersResponse](docs/Model/BatchDeleteOffersResponse.md)
- [BatchDeleteOffersResponseResult](docs/Model/BatchDeleteOffersResponseResult.md)
- [BatchGetMarketOffersRequest](docs/Model/BatchGetMarketOffersRequest.md)
- [BatchGetMarketOffersRequestGet](docs/Model/BatchGetMarketOffersRequestGet.md)
- [BatchGetMarketOffersResponse](docs/Model/BatchGetMarketOffersResponse.md)
- [BatchGetMarketOffersResponseResult](docs/Model/BatchGetMarketOffersResponseResult.md)
- [BatchGetOffersRequest](docs/Model/BatchGetOffersRequest.md)
- [BatchGetOffersRequestGet](docs/Model/BatchGetOffersRequestGet.md)
- [BatchGetOffersResponse](docs/Model/BatchGetOffersResponse.md)
- [BatchGetOffersResponseResult](docs/Model/BatchGetOffersResponseResult.md)
- [BatchUpdateMarketOffersRequest](docs/Model/BatchUpdateMarketOffersRequest.md)
- [BatchUpdateMarketOffersRequestUpdate](docs/Model/BatchUpdateMarketOffersRequestUpdate.md)
- [BatchUpdateMarketOffersResponse](docs/Model/BatchUpdateMarketOffersResponse.md)
- [BatchUpdateMarketOffersResponseResult](docs/Model/BatchUpdateMarketOffersResponseResult.md)
- [BatchUpdateOffersRequest](docs/Model/BatchUpdateOffersRequest.md)
- [BatchUpdateOffersRequestUpdate](docs/Model/BatchUpdateOffersRequestUpdate.md)
- [BatchUpdateOffersResponse](docs/Model/BatchUpdateOffersResponse.md)
- [BatchUpdateOffersResponseResult](docs/Model/BatchUpdateOffersResponseResult.md)
- [BatchUpdateOrderItemsRequest](docs/Model/BatchUpdateOrderItemsRequest.md)
- [BatchUpdateOrderItemsRequestUpdate](docs/Model/BatchUpdateOrderItemsRequestUpdate.md)
- [BatchUpdateOrderItemsResponse](docs/Model/BatchUpdateOrderItemsResponse.md)
- [BatchUpdateOrderItemsResponseResult](docs/Model/BatchUpdateOrderItemsResponseResult.md)
- [BatchUpdateOrderItemsStateRequest](docs/Model/BatchUpdateOrderItemsStateRequest.md)
- [BatchUpdateOrderItemsStateRequestUpdate](docs/Model/BatchUpdateOrderItemsStateRequestUpdate.md)
- [BatchUpdateOrderItemsStateResponse](docs/Model/BatchUpdateOrderItemsStateResponse.md)
- [BatchUpdateOrderItemsStateResponseResult](docs/Model/BatchUpdateOrderItemsStateResponseResult.md)
- [BoolFilter](docs/Model/BoolFilter.md)
- [BuyboxInfo](docs/Model/BuyboxInfo.md)
- [CalculateRefundOrderItemRequest](docs/Model/CalculateRefundOrderItemRequest.md)
- [CalculateRefundOrderItemResponse](docs/Model/CalculateRefundOrderItemResponse.md)
- [CalculateRefundOrderRequest](docs/Model/CalculateRefundOrderRequest.md)
- [CalculateRefundOrderResponse](docs/Model/CalculateRefundOrderResponse.md)
- [CountryCode](docs/Model/CountryCode.md)
- [CountryCodeFilter](docs/Model/CountryCodeFilter.md)
- [CreateCreateMarketPrice](docs/Model/CreateCreateMarketPrice.md)
- [CreateCreateOfferMarketPrice](docs/Model/CreateCreateOfferMarketPrice.md)
- [CreateMarketOfferRequest](docs/Model/CreateMarketOfferRequest.md)
- [CreateMarketOfferRequestCreateOfferMarketPrice](docs/Model/CreateMarketOfferRequestCreateOfferMarketPrice.md)
- [CreateMarketOfferResponse](docs/Model/CreateMarketOfferResponse.md)
- [CreateOfferRequest](docs/Model/CreateOfferRequest.md)
- [CreateOfferRequestCreateMarketPrice](docs/Model/CreateOfferRequestCreateMarketPrice.md)
- [CreateOfferResponse](docs/Model/CreateOfferResponse.md)
- [CreateShippingProfileRequest](docs/Model/CreateShippingProfileRequest.md)
- [CreateShippingProfileRequestCreateDestination](docs/Model/CreateShippingProfileRequestCreateDestination.md)
- [CreateShippingProfileResponse](docs/Model/CreateShippingProfileResponse.md)
- [Currency](docs/Model/Currency.md)
- [CurrencyCode](docs/Model/CurrencyCode.md)
- [CurrencyCodeFilter](docs/Model/CurrencyCodeFilter.md)
- [CurrencyCodePagination](docs/Model/CurrencyCodePagination.md)
- [DeleteMarketOfferRequest](docs/Model/DeleteMarketOfferRequest.md)
- [DeleteOfferRequest](docs/Model/DeleteOfferRequest.md)
- [DeleteOrderInvoiceRequest](docs/Model/DeleteOrderInvoiceRequest.md)
- [DeleteShippingProfileRequest](docs/Model/DeleteShippingProfileRequest.md)
- [Destination](docs/Model/Destination.md)
- [ExchangeRate](docs/Model/ExchangeRate.md)
- [GetCurrencyRequest](docs/Model/GetCurrencyRequest.md)
- [GetCurrencyResponse](docs/Model/GetCurrencyResponse.md)
- [GetInstanceRequest](docs/Model/GetInstanceRequest.md)
- [GetInstanceResponse](docs/Model/GetInstanceResponse.md)
- [GetMarketOfferRequest](docs/Model/GetMarketOfferRequest.md)
- [GetMarketOfferResponse](docs/Model/GetMarketOfferResponse.md)
- [GetMarketRequest](docs/Model/GetMarketRequest.md)
- [GetMarketResponse](docs/Model/GetMarketResponse.md)
- [GetOfferRequest](docs/Model/GetOfferRequest.md)
- [GetOfferResponse](docs/Model/GetOfferResponse.md)
- [GetOrderInvoiceRequest](docs/Model/GetOrderInvoiceRequest.md)
- [GetOrderInvoiceResponse](docs/Model/GetOrderInvoiceResponse.md)
- [GetOrderItemRequest](docs/Model/GetOrderItemRequest.md)
- [GetOrderItemResponse](docs/Model/GetOrderItemResponse.md)
- [GetOrderRequest](docs/Model/GetOrderRequest.md)
- [GetOrderResponse](docs/Model/GetOrderResponse.md)
- [GetShippingProfileRequest](docs/Model/GetShippingProfileRequest.md)
- [GetShippingProfileResponse](docs/Model/GetShippingProfileResponse.md)
- [Instance](docs/Model/Instance.md)
- [Int64Filter](docs/Model/Int64Filter.md)
- [Int64Pagination](docs/Model/Int64Pagination.md)
- [ListCurrenciesRequest](docs/Model/ListCurrenciesRequest.md)
- [ListCurrenciesRequestFilter](docs/Model/ListCurrenciesRequestFilter.md)
- [ListCurrenciesRequestSort](docs/Model/ListCurrenciesRequestSort.md)
- [ListCurrenciesRequestSortBy](docs/Model/ListCurrenciesRequestSortBy.md)
- [ListCurrenciesResponse](docs/Model/ListCurrenciesResponse.md)
- [ListMarketOffersByOfferRequest](docs/Model/ListMarketOffersByOfferRequest.md)
- [ListMarketOffersByOfferRequestFilter](docs/Model/ListMarketOffersByOfferRequestFilter.md)
- [ListMarketOffersByOfferRequestSort](docs/Model/ListMarketOffersByOfferRequestSort.md)
- [ListMarketOffersByOfferRequestSortBy](docs/Model/ListMarketOffersByOfferRequestSortBy.md)
- [ListMarketOffersByOfferResponse](docs/Model/ListMarketOffersByOfferResponse.md)
- [ListMarketOffersRequest](docs/Model/ListMarketOffersRequest.md)
- [ListMarketOffersRequestFilter](docs/Model/ListMarketOffersRequestFilter.md)
- [ListMarketOffersRequestFilterOfferNameFilter](docs/Model/ListMarketOffersRequestFilterOfferNameFilter.md)
- [ListMarketOffersRequestSort](docs/Model/ListMarketOffersRequestSort.md)
- [ListMarketOffersRequestSortBy](docs/Model/ListMarketOffersRequestSortBy.md)
- [ListMarketOffersResponse](docs/Model/ListMarketOffersResponse.md)
- [ListMarketsRequest](docs/Model/ListMarketsRequest.md)
- [ListMarketsRequestFilter](docs/Model/ListMarketsRequestFilter.md)
- [ListMarketsRequestSort](docs/Model/ListMarketsRequestSort.md)
- [ListMarketsRequestSortBy](docs/Model/ListMarketsRequestSortBy.md)
- [ListMarketsResponse](docs/Model/ListMarketsResponse.md)
- [ListOffersRequest](docs/Model/ListOffersRequest.md)
- [ListOffersRequestFilter](docs/Model/ListOffersRequestFilter.md)
- [ListOffersRequestFilterOfferNameFilter](docs/Model/ListOffersRequestFilterOfferNameFilter.md)
- [ListOffersRequestSort](docs/Model/ListOffersRequestSort.md)
- [ListOffersRequestSortBy](docs/Model/ListOffersRequestSortBy.md)
- [ListOffersResponse](docs/Model/ListOffersResponse.md)
- [ListOrderItemsByOrderRequest](docs/Model/ListOrderItemsByOrderRequest.md)
- [ListOrderItemsByOrderRequestFilter](docs/Model/ListOrderItemsByOrderRequestFilter.md)
- [ListOrderItemsByOrderRequestFilterOrderItemNameFilter](docs/Model/ListOrderItemsByOrderRequestFilterOrderItemNameFilter.md)
- [ListOrderItemsByOrderRequestSort](docs/Model/ListOrderItemsByOrderRequestSort.md)
- [ListOrderItemsByOrderRequestSortBy](docs/Model/ListOrderItemsByOrderRequestSortBy.md)
- [ListOrderItemsByOrderResponse](docs/Model/ListOrderItemsByOrderResponse.md)
- [ListOrdersRequest](docs/Model/ListOrdersRequest.md)
- [ListOrdersRequestFilter](docs/Model/ListOrdersRequestFilter.md)
- [ListOrdersRequestFilterOrderItemNameFilter](docs/Model/ListOrdersRequestFilterOrderItemNameFilter.md)
- [ListOrdersRequestSort](docs/Model/ListOrdersRequestSort.md)
- [ListOrdersRequestSortBy](docs/Model/ListOrdersRequestSortBy.md)
- [ListOrdersResponse](docs/Model/ListOrdersResponse.md)
- [ListShippingProfilesRequest](docs/Model/ListShippingProfilesRequest.md)
- [ListShippingProfilesRequestFilter](docs/Model/ListShippingProfilesRequestFilter.md)
- [ListShippingProfilesRequestSort](docs/Model/ListShippingProfilesRequestSort.md)
- [ListShippingProfilesRequestSortBy](docs/Model/ListShippingProfilesRequestSortBy.md)
- [ListShippingProfilesResponse](docs/Model/ListShippingProfilesResponse.md)
- [Market](docs/Model/Market.md)
- [MarketOffer](docs/Model/MarketOffer.md)
- [MarketOfferIdentifier](docs/Model/MarketOfferIdentifier.md)
- [MarketOfferIdentifierFilter](docs/Model/MarketOfferIdentifierFilter.md)
- [MarketOfferIdentifierPagination](docs/Model/MarketOfferIdentifierPagination.md)
- [MarketType](docs/Model/MarketType.md)
- [MarketTypeFilter](docs/Model/MarketTypeFilter.md)
- [Meta](docs/Model/Meta.md)
- [NumericRangeFilter](docs/Model/NumericRangeFilter.md)
- [Offer](docs/Model/Offer.md)
- [OfferBuyboxState](docs/Model/OfferBuyboxState.md)
- [OfferBuyboxStateFilter](docs/Model/OfferBuyboxStateFilter.md)
- [OfferData](docs/Model/OfferData.md)
- [OfferGrading](docs/Model/OfferGrading.md)
- [OfferGradingFilter](docs/Model/OfferGradingFilter.md)
- [OfferIdentifier](docs/Model/OfferIdentifier.md)
- [OfferMarketPrice](docs/Model/OfferMarketPrice.md)
- [OfferSKUFilter](docs/Model/OfferSKUFilter.md)
- [OfferState](docs/Model/OfferState.md)
- [OfferStateFilter](docs/Model/OfferStateFilter.md)
- [OfferTaxation](docs/Model/OfferTaxation.md)
- [OfferTaxationFilter](docs/Model/OfferTaxationFilter.md)
- [OfferVisibility](docs/Model/OfferVisibility.md)
- [OfferVisibilityFilter](docs/Model/OfferVisibilityFilter.md)
- [OfferWarranty](docs/Model/OfferWarranty.md)
- [OfferWarrantyFilter](docs/Model/OfferWarrantyFilter.md)
- [OptionalInt64Filter](docs/Model/OptionalInt64Filter.md)
- [OptionalNumericRangeFilter](docs/Model/OptionalNumericRangeFilter.md)
- [Order](docs/Model/Order.md)
- [OrderAddressFilter](docs/Model/OrderAddressFilter.md)
- [OrderAddressPhoneNumberFilter](docs/Model/OrderAddressPhoneNumberFilter.md)
- [OrderAddressVATINFilter](docs/Model/OrderAddressVATINFilter.md)
- [OrderCustomerEmailFilter](docs/Model/OrderCustomerEmailFilter.md)
- [OrderItem](docs/Model/OrderItem.md)
- [OrderItemState](docs/Model/OrderItemState.md)
- [OrderItemStateFilter](docs/Model/OrderItemStateFilter.md)
- [OrderItemTaxation](docs/Model/OrderItemTaxation.md)
- [OrderItemTaxationFilter](docs/Model/OrderItemTaxationFilter.md)
- [OrderLabel](docs/Model/OrderLabel.md)
- [OrderLabelCollectionFilter](docs/Model/OrderLabelCollectionFilter.md)
- [OrderState](docs/Model/OrderState.md)
- [OrderStateFilter](docs/Model/OrderStateFilter.md)
- [RefundOrderItemRequest](docs/Model/RefundOrderItemRequest.md)
- [RefundOrderItemResponse](docs/Model/RefundOrderItemResponse.md)
- [RefundOrderRequest](docs/Model/RefundOrderRequest.md)
- [RefundOrderResponse](docs/Model/RefundOrderResponse.md)
- [SetOrderInvoiceRequestInner](docs/Model/SetOrderInvoiceRequestInner.md)
- [SetOrderInvoiceResponse](docs/Model/SetOrderInvoiceResponse.md)
- [ShippingProfile](docs/Model/ShippingProfile.md)
- [ShippingProfileNameFilter](docs/Model/ShippingProfileNameFilter.md)
- [SortOrder](docs/Model/SortOrder.md)
- [Status](docs/Model/Status.md)
- [StringFilter](docs/Model/StringFilter.md)
- [StringPagination](docs/Model/StringPagination.md)
- [TimestampRangeFilter](docs/Model/TimestampRangeFilter.md)
- [UInt32RangeFilter](docs/Model/UInt32RangeFilter.md)
- [UpdateDestination](docs/Model/UpdateDestination.md)
- [UpdateMarketOfferRequest](docs/Model/UpdateMarketOfferRequest.md)
- [UpdateMarketOfferRequestUpdateOfferMarketPrice](docs/Model/UpdateMarketOfferRequestUpdateOfferMarketPrice.md)
- [UpdateMarketOfferResponse](docs/Model/UpdateMarketOfferResponse.md)
- [UpdateOfferRequest](docs/Model/UpdateOfferRequest.md)
- [UpdateOfferResponse](docs/Model/UpdateOfferResponse.md)
- [UpdateOrderItemRequest](docs/Model/UpdateOrderItemRequest.md)
- [UpdateOrderItemResponse](docs/Model/UpdateOrderItemResponse.md)
- [UpdateOrderItemStateRequest](docs/Model/UpdateOrderItemStateRequest.md)
- [UpdateOrderItemStateResponse](docs/Model/UpdateOrderItemStateResponse.md)
- [UpdateShippingProfileRequest](docs/Model/UpdateShippingProfileRequest.md)
- [UpdateShippingProfileRequestCreateDestination](docs/Model/UpdateShippingProfileRequestCreateDestination.md)
- [UpdateShippingProfileResponse](docs/Model/UpdateShippingProfileResponse.md)
- [UpdateUpdateOfferMarketPrice](docs/Model/UpdateUpdateOfferMarketPrice.md)

## Authorization

### APIKeyAuth

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

integrations@refurbed.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0`
    - Package version: `1.1.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
