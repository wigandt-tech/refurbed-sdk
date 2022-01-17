# WigandtTech\Refurbed\OfferServiceApi

All URIs are relative to https://api.refurbed.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchCreateOffers()**](OfferServiceApi.md#batchCreateOffers) | **POST** /refb.merchant.v1.OfferService/BatchCreateOffers | Batch creates offers.
[**batchDeleteOffers()**](OfferServiceApi.md#batchDeleteOffers) | **POST** /refb.merchant.v1.OfferService/BatchDeleteOffers | Batch deletes offers.
[**batchGetOffers()**](OfferServiceApi.md#batchGetOffers) | **POST** /refb.merchant.v1.OfferService/BatchGetOffers | Batch gets single offers.
[**batchUpdateOffers()**](OfferServiceApi.md#batchUpdateOffers) | **POST** /refb.merchant.v1.OfferService/BatchUpdateOffers | Batch updates offers.
[**createOffer()**](OfferServiceApi.md#createOffer) | **POST** /refb.merchant.v1.OfferService/CreateOffer | Creates a single offer.
[**deleteOffer()**](OfferServiceApi.md#deleteOffer) | **POST** /refb.merchant.v1.OfferService/DeleteOffer | Deletes a single offer.
[**getOffer()**](OfferServiceApi.md#getOffer) | **POST** /refb.merchant.v1.OfferService/GetOffer | Gets a single offer.
[**listOffers()**](OfferServiceApi.md#listOffers) | **POST** /refb.merchant.v1.OfferService/ListOffers | Lists all offers.
[**updateOffer()**](OfferServiceApi.md#updateOffer) | **POST** /refb.merchant.v1.OfferService/UpdateOffer | Updates a single offer.


## `batchCreateOffers()`

```php
batchCreateOffers($body): \WigandtTech\Refurbed\Model\BatchCreateOffersResponse
```

Batch creates offers.

Known errors:  - identical to the CreateOffer operation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyAuth
$config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WigandtTech\Refurbed\Api\OfferServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WigandtTech\Refurbed\Model\BatchCreateOffersRequest(); // \WigandtTech\Refurbed\Model\BatchCreateOffersRequest

try {
    $result = $apiInstance->batchCreateOffers($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferServiceApi->batchCreateOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WigandtTech\Refurbed\Model\BatchCreateOffersRequest**](../Model/BatchCreateOffersRequest.md)|  |

### Return type

[**\WigandtTech\Refurbed\Model\BatchCreateOffersResponse**](../Model/BatchCreateOffersResponse.md)

### Authorization

[APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `batchDeleteOffers()`

```php
batchDeleteOffers($body): \WigandtTech\Refurbed\Model\BatchDeleteOffersResponse
```

Batch deletes offers.

Known errors:  - identical to the DeleteOffer operation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyAuth
$config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WigandtTech\Refurbed\Api\OfferServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WigandtTech\Refurbed\Model\BatchDeleteOffersRequest(); // \WigandtTech\Refurbed\Model\BatchDeleteOffersRequest

try {
    $result = $apiInstance->batchDeleteOffers($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferServiceApi->batchDeleteOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WigandtTech\Refurbed\Model\BatchDeleteOffersRequest**](../Model/BatchDeleteOffersRequest.md)|  |

### Return type

[**\WigandtTech\Refurbed\Model\BatchDeleteOffersResponse**](../Model/BatchDeleteOffersResponse.md)

### Authorization

[APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `batchGetOffers()`

```php
batchGetOffers($body): \WigandtTech\Refurbed\Model\BatchGetOffersResponse
```

Batch gets single offers.

If no version is defined, its current version is returned.  Note that if an offer has been deleted and no version is given as parameter, NOT_FOUND will be returned - even though the individual historic versions are still accessible.  Known errors:  - identical to the GetOffer operation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyAuth
$config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WigandtTech\Refurbed\Api\OfferServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WigandtTech\Refurbed\Model\BatchGetOffersRequest(); // \WigandtTech\Refurbed\Model\BatchGetOffersRequest

try {
    $result = $apiInstance->batchGetOffers($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferServiceApi->batchGetOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WigandtTech\Refurbed\Model\BatchGetOffersRequest**](../Model/BatchGetOffersRequest.md)|  |

### Return type

[**\WigandtTech\Refurbed\Model\BatchGetOffersResponse**](../Model/BatchGetOffersResponse.md)

### Authorization

[APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `batchUpdateOffers()`

```php
batchUpdateOffers($body): \WigandtTech\Refurbed\Model\BatchUpdateOffersResponse
```

Batch updates offers.

Known errors:  - identical to the UpdateOffer operation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyAuth
$config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WigandtTech\Refurbed\Api\OfferServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WigandtTech\Refurbed\Model\BatchUpdateOffersRequest(); // \WigandtTech\Refurbed\Model\BatchUpdateOffersRequest

try {
    $result = $apiInstance->batchUpdateOffers($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferServiceApi->batchUpdateOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WigandtTech\Refurbed\Model\BatchUpdateOffersRequest**](../Model/BatchUpdateOffersRequest.md)|  |

### Return type

[**\WigandtTech\Refurbed\Model\BatchUpdateOffersResponse**](../Model/BatchUpdateOffersResponse.md)

### Authorization

[APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOffer()`

```php
createOffer($body): \WigandtTech\Refurbed\Model\CreateOfferResponse
```

Creates a single offer.

Known errors: - UNAUTHENTICATED   - when no authorization header is sent   - when authorization header is malformed or invalid - PERMISSION_DENIED   - when the authorized user does not have permissions for this operation - INVALID_ARGUMENT   - when the unknown instance is provided   - invalid input offer data is provided

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyAuth
$config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WigandtTech\Refurbed\Api\OfferServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WigandtTech\Refurbed\Model\CreateOfferRequest(); // \WigandtTech\Refurbed\Model\CreateOfferRequest

try {
    $result = $apiInstance->createOffer($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferServiceApi->createOffer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WigandtTech\Refurbed\Model\CreateOfferRequest**](../Model/CreateOfferRequest.md)|  |

### Return type

[**\WigandtTech\Refurbed\Model\CreateOfferResponse**](../Model/CreateOfferResponse.md)

### Authorization

[APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOffer()`

```php
deleteOffer($body): object
```

Deletes a single offer.

Known errors: - UNAUTHENTICATED   - when no authorization header is sent   - when authorization header is malformed or invalid - PERMISSION_DENIED   - when the authorized user does not have permissions for this operation - NOT_FOUND   - when offer is not found - INVALID_ARGUMENT   - when the unknown instance is provided   - invalid input offer data is provided

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyAuth
$config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WigandtTech\Refurbed\Api\OfferServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WigandtTech\Refurbed\Model\DeleteOfferRequest(); // \WigandtTech\Refurbed\Model\DeleteOfferRequest

try {
    $result = $apiInstance->deleteOffer($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferServiceApi->deleteOffer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WigandtTech\Refurbed\Model\DeleteOfferRequest**](../Model/DeleteOfferRequest.md)|  |

### Return type

**object**

### Authorization

[APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOffer()`

```php
getOffer($body): \WigandtTech\Refurbed\Model\GetOfferResponse
```

Gets a single offer.

If no version is defined, its current version is returned.  Known errors: - UNAUTHENTICATED   - when no authorization header is sent   - when authorization header is malformed or invalid - PERMISSION_DENIED   - when the authorized user does not have permissions for this operation - NOT_FOUND   - when the offer is not found   - when an offer has been deleted and no version is given as parameter     even though the individual historic versions are still accessible

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyAuth
$config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WigandtTech\Refurbed\Api\OfferServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WigandtTech\Refurbed\Model\GetOfferRequest(); // \WigandtTech\Refurbed\Model\GetOfferRequest

try {
    $result = $apiInstance->getOffer($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferServiceApi->getOffer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WigandtTech\Refurbed\Model\GetOfferRequest**](../Model/GetOfferRequest.md)|  |

### Return type

[**\WigandtTech\Refurbed\Model\GetOfferResponse**](../Model/GetOfferResponse.md)

### Authorization

[APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOffers()`

```php
listOffers($body): \WigandtTech\Refurbed\Model\ListOffersResponse
```

Lists all offers.

Returns the current offer versions only.  Known errors: - UNAUTHENTICATED   - when no authorization header is sent   - when authorization header is malformed or invalid - PERMISSION_DENIED   - when the authorized user does not have permissions for this operation - INVALID_ARGUMENT   - when pagination limit is too large (>100)   - when both \"ending_before\" and \"starting_after\" are specified in pagination

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyAuth
$config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WigandtTech\Refurbed\Api\OfferServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WigandtTech\Refurbed\Model\ListOffersRequest(); // \WigandtTech\Refurbed\Model\ListOffersRequest

try {
    $result = $apiInstance->listOffers($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferServiceApi->listOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WigandtTech\Refurbed\Model\ListOffersRequest**](../Model/ListOffersRequest.md)|  |

### Return type

[**\WigandtTech\Refurbed\Model\ListOffersResponse**](../Model/ListOffersResponse.md)

### Authorization

[APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOffer()`

```php
updateOffer($body): \WigandtTech\Refurbed\Model\UpdateOfferResponse
```

Updates a single offer.

Known errors: - UNAUTHENTICATED   - when no authorization header is sent   - when authorization header is malformed or invalid - PERMISSION_DENIED   - when the authorized user does not have permissions for this operation - NOT_FOUND   - when offer is not found - INVALID_ARGUMENT   - when the unknown instance is provided   - invalid input offer data is provided

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyAuth
$config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WigandtTech\Refurbed\Api\OfferServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WigandtTech\Refurbed\Model\UpdateOfferRequest(); // \WigandtTech\Refurbed\Model\UpdateOfferRequest

try {
    $result = $apiInstance->updateOffer($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferServiceApi->updateOffer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WigandtTech\Refurbed\Model\UpdateOfferRequest**](../Model/UpdateOfferRequest.md)|  |

### Return type

[**\WigandtTech\Refurbed\Model\UpdateOfferResponse**](../Model/UpdateOfferResponse.md)

### Authorization

[APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
