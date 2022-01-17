# WigandtTech\Refurbed\MarketOfferServiceApi

All URIs are relative to https://api.refurbed.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchCreateMarketOffer()**](MarketOfferServiceApi.md#batchCreateMarketOffer) | **POST** /refb.merchant.v1.MarketOfferService/BatchCreateMarketOffer | Batch creates market offers / offer market prices of offers.
[**batchDeleteMarketOffer()**](MarketOfferServiceApi.md#batchDeleteMarketOffer) | **POST** /refb.merchant.v1.MarketOfferService/BatchDeleteMarketOffer | Batch deletes market offers / offer market prices of offers.
[**batchGetMarketOffer()**](MarketOfferServiceApi.md#batchGetMarketOffer) | **POST** /refb.merchant.v1.MarketOfferService/BatchGetMarketOffer | Batch gets market offers / offer market prices of offers.
[**batchUpdateMarketOffer()**](MarketOfferServiceApi.md#batchUpdateMarketOffer) | **POST** /refb.merchant.v1.MarketOfferService/BatchUpdateMarketOffer | Batch updates market offers / offer market prices of offers.
[**createMarketOffer()**](MarketOfferServiceApi.md#createMarketOffer) | **POST** /refb.merchant.v1.MarketOfferService/CreateMarketOffer | Creates a single market offer / an offer market price of an offer.
[**deleteMarketOffer()**](MarketOfferServiceApi.md#deleteMarketOffer) | **POST** /refb.merchant.v1.MarketOfferService/DeleteMarketOffer | Deletes a single market offer / an offer market price of an offer.
[**getMarketOffer()**](MarketOfferServiceApi.md#getMarketOffer) | **POST** /refb.merchant.v1.MarketOfferService/GetMarketOffer | Gets a single market offer.
[**listMarketOffers()**](MarketOfferServiceApi.md#listMarketOffers) | **POST** /refb.merchant.v1.MarketOfferService/ListMarketOffers | Lists all market offers.
[**listMarketOffersByOffer()**](MarketOfferServiceApi.md#listMarketOffersByOffer) | **POST** /refb.merchant.v1.MarketOfferService/ListMarketOffersByOffer | Lists all market offers of a specific offer and version.
[**updateMarketOffer()**](MarketOfferServiceApi.md#updateMarketOffer) | **POST** /refb.merchant.v1.MarketOfferService/UpdateMarketOffer | Updates a single market offer / an offer market price of an offer.


## `batchCreateMarketOffer()`

```php
batchCreateMarketOffer($body): \WigandtTech\Refurbed\Model\BatchCreateMarketOffersResponse
```

Batch creates market offers / offer market prices of offers.

Known errors:  - identical to the CreateMarketOffer operation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyAuth
$config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WigandtTech\Refurbed\Api\MarketOfferServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WigandtTech\Refurbed\Model\BatchCreateMarketOffersRequest(); // \WigandtTech\Refurbed\Model\BatchCreateMarketOffersRequest

try {
    $result = $apiInstance->batchCreateMarketOffer($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketOfferServiceApi->batchCreateMarketOffer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WigandtTech\Refurbed\Model\BatchCreateMarketOffersRequest**](../Model/BatchCreateMarketOffersRequest.md)|  |

### Return type

[**\WigandtTech\Refurbed\Model\BatchCreateMarketOffersResponse**](../Model/BatchCreateMarketOffersResponse.md)

### Authorization

[APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `batchDeleteMarketOffer()`

```php
batchDeleteMarketOffer($body): \WigandtTech\Refurbed\Model\BatchDeleteMarketOffersResponse
```

Batch deletes market offers / offer market prices of offers.

Known errors:  - identical to the DeleteMarketOffer operation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyAuth
$config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WigandtTech\Refurbed\Api\MarketOfferServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WigandtTech\Refurbed\Model\BatchDeleteMarketOffersRequest(); // \WigandtTech\Refurbed\Model\BatchDeleteMarketOffersRequest

try {
    $result = $apiInstance->batchDeleteMarketOffer($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketOfferServiceApi->batchDeleteMarketOffer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WigandtTech\Refurbed\Model\BatchDeleteMarketOffersRequest**](../Model/BatchDeleteMarketOffersRequest.md)|  |

### Return type

[**\WigandtTech\Refurbed\Model\BatchDeleteMarketOffersResponse**](../Model/BatchDeleteMarketOffersResponse.md)

### Authorization

[APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `batchGetMarketOffer()`

```php
batchGetMarketOffer($body): \WigandtTech\Refurbed\Model\BatchGetMarketOffersResponse
```

Batch gets market offers / offer market prices of offers.

If no version is defined, its current version is returned.  Note that if an offer has been deleted and no version is given as parameter, NOT_FOUND will be returned - even though the individual historic versions are still accessible.  Known errors:  - identical to the GetMarketOffer operation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyAuth
$config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WigandtTech\Refurbed\Api\MarketOfferServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WigandtTech\Refurbed\Model\BatchGetMarketOffersRequest(); // \WigandtTech\Refurbed\Model\BatchGetMarketOffersRequest

try {
    $result = $apiInstance->batchGetMarketOffer($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketOfferServiceApi->batchGetMarketOffer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WigandtTech\Refurbed\Model\BatchGetMarketOffersRequest**](../Model/BatchGetMarketOffersRequest.md)|  |

### Return type

[**\WigandtTech\Refurbed\Model\BatchGetMarketOffersResponse**](../Model/BatchGetMarketOffersResponse.md)

### Authorization

[APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `batchUpdateMarketOffer()`

```php
batchUpdateMarketOffer($body): \WigandtTech\Refurbed\Model\BatchUpdateMarketOffersResponse
```

Batch updates market offers / offer market prices of offers.

Known errors:  - identical to the UpdateMarketOffer operation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyAuth
$config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WigandtTech\Refurbed\Api\MarketOfferServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WigandtTech\Refurbed\Model\BatchUpdateMarketOffersRequest(); // \WigandtTech\Refurbed\Model\BatchUpdateMarketOffersRequest

try {
    $result = $apiInstance->batchUpdateMarketOffer($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketOfferServiceApi->batchUpdateMarketOffer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WigandtTech\Refurbed\Model\BatchUpdateMarketOffersRequest**](../Model/BatchUpdateMarketOffersRequest.md)|  |

### Return type

[**\WigandtTech\Refurbed\Model\BatchUpdateMarketOffersResponse**](../Model/BatchUpdateMarketOffersResponse.md)

### Authorization

[APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createMarketOffer()`

```php
createMarketOffer($body): \WigandtTech\Refurbed\Model\CreateMarketOfferResponse
```

Creates a single market offer / an offer market price of an offer.

Known errors: - UNAUTHENTICATED   - when no authorization header is sent   - when authorization header is malformed or invalid - PERMISSION_DENIED   - when the authorized user does not have permissions for this operation - ALREADY_EXISTS   - when market offer already exists, i.e. market price is defined for     given offer and market combination - INVALID_ARGUMENT   - when the unknown offer is provided   - invalid input market offer data is provided

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyAuth
$config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WigandtTech\Refurbed\Api\MarketOfferServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WigandtTech\Refurbed\Model\CreateMarketOfferRequest(); // \WigandtTech\Refurbed\Model\CreateMarketOfferRequest

try {
    $result = $apiInstance->createMarketOffer($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketOfferServiceApi->createMarketOffer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WigandtTech\Refurbed\Model\CreateMarketOfferRequest**](../Model/CreateMarketOfferRequest.md)|  |

### Return type

[**\WigandtTech\Refurbed\Model\CreateMarketOfferResponse**](../Model/CreateMarketOfferResponse.md)

### Authorization

[APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteMarketOffer()`

```php
deleteMarketOffer($body): object
```

Deletes a single market offer / an offer market price of an offer.

Known errors: - UNAUTHENTICATED   - when no authorization header is sent   - when authorization header is malformed or invalid - PERMISSION_DENIED   - when the authorized user does not have permissions for this operation - NOT_FOUND   - when market offer does not exists - INVALID_ARGUMENT   - invalid market offer identifier is provided

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyAuth
$config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WigandtTech\Refurbed\Api\MarketOfferServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WigandtTech\Refurbed\Model\DeleteMarketOfferRequest(); // \WigandtTech\Refurbed\Model\DeleteMarketOfferRequest

try {
    $result = $apiInstance->deleteMarketOffer($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketOfferServiceApi->deleteMarketOffer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WigandtTech\Refurbed\Model\DeleteMarketOfferRequest**](../Model/DeleteMarketOfferRequest.md)|  |

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

## `getMarketOffer()`

```php
getMarketOffer($body): \WigandtTech\Refurbed\Model\GetMarketOfferResponse
```

Gets a single market offer.

If no version is defined, its current version is returned.  Known errors: - UNAUTHENTICATED   - when no authorization header is sent   - when authorization header is malformed or invalid - PERMISSION_DENIED   - when the authorized user does not have permissions for this operation - NOT_FOUND   - when the offer is not found   - when an offer has been deleted and no version is given as parameter     even though the individual historic versions are still accessible

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyAuth
$config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WigandtTech\Refurbed\Api\MarketOfferServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WigandtTech\Refurbed\Model\GetMarketOfferRequest(); // \WigandtTech\Refurbed\Model\GetMarketOfferRequest

try {
    $result = $apiInstance->getMarketOffer($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketOfferServiceApi->getMarketOffer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WigandtTech\Refurbed\Model\GetMarketOfferRequest**](../Model/GetMarketOfferRequest.md)|  |

### Return type

[**\WigandtTech\Refurbed\Model\GetMarketOfferResponse**](../Model/GetMarketOfferResponse.md)

### Authorization

[APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMarketOffers()`

```php
listMarketOffers($body): \WigandtTech\Refurbed\Model\ListMarketOffersResponse
```

Lists all market offers.

Returns the current offer versions only.  Known errors: - UNAUTHENTICATED   - when no authorization header is sent   - when authorization header is malformed or invalid - PERMISSION_DENIED   - when the authorized user does not have permissions for this operation - INVALID_ARGUMENT   - when pagination limit is too large (>100)   - when both \"ending_before\" and \"starting_after\" are specified in pagination

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyAuth
$config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WigandtTech\Refurbed\Api\MarketOfferServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WigandtTech\Refurbed\Model\ListMarketOffersRequest(); // \WigandtTech\Refurbed\Model\ListMarketOffersRequest

try {
    $result = $apiInstance->listMarketOffers($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketOfferServiceApi->listMarketOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WigandtTech\Refurbed\Model\ListMarketOffersRequest**](../Model/ListMarketOffersRequest.md)|  |

### Return type

[**\WigandtTech\Refurbed\Model\ListMarketOffersResponse**](../Model/ListMarketOffersResponse.md)

### Authorization

[APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMarketOffersByOffer()`

```php
listMarketOffersByOffer($body): \WigandtTech\Refurbed\Model\ListMarketOffersByOfferResponse
```

Lists all market offers of a specific offer and version.

Known errors: - UNAUTHENTICATED   - when no authorization header is sent   - when authorization header is malformed or invalid - PERMISSION_DENIED   - when the authorized user does not have permissions for this operation - INVALID_ARGUMENT   - when offer identifier is not valid   - when pagination limit is too large (>100)   - when both \"ending_before\" and \"starting_after\" are specified in pagination

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyAuth
$config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WigandtTech\Refurbed\Api\MarketOfferServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WigandtTech\Refurbed\Model\ListMarketOffersByOfferRequest(); // \WigandtTech\Refurbed\Model\ListMarketOffersByOfferRequest

try {
    $result = $apiInstance->listMarketOffersByOffer($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketOfferServiceApi->listMarketOffersByOffer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WigandtTech\Refurbed\Model\ListMarketOffersByOfferRequest**](../Model/ListMarketOffersByOfferRequest.md)|  |

### Return type

[**\WigandtTech\Refurbed\Model\ListMarketOffersByOfferResponse**](../Model/ListMarketOffersByOfferResponse.md)

### Authorization

[APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMarketOffer()`

```php
updateMarketOffer($body): \WigandtTech\Refurbed\Model\UpdateMarketOfferResponse
```

Updates a single market offer / an offer market price of an offer.

Known errors: - UNAUTHENTICATED   - when no authorization header is sent   - when authorization header is malformed or invalid - PERMISSION_DENIED   - when the authorized user does not have permissions for this operation - NOT_FOUND   - when market offer does not exists - INVALID_ARGUMENT   - when the unknown offer is provided   - invalid input market offer data is provided

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyAuth
$config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WigandtTech\Refurbed\Api\MarketOfferServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WigandtTech\Refurbed\Model\UpdateMarketOfferRequest(); // \WigandtTech\Refurbed\Model\UpdateMarketOfferRequest

try {
    $result = $apiInstance->updateMarketOffer($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketOfferServiceApi->updateMarketOffer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WigandtTech\Refurbed\Model\UpdateMarketOfferRequest**](../Model/UpdateMarketOfferRequest.md)|  |

### Return type

[**\WigandtTech\Refurbed\Model\UpdateMarketOfferResponse**](../Model/UpdateMarketOfferResponse.md)

### Authorization

[APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
