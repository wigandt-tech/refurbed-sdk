# WigandtTech\Refurbed\CurrencyServiceApi

All URIs are relative to https://api.refurbed.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCurrency()**](CurrencyServiceApi.md#getCurrency) | **POST** /refb.merchant.v1.CurrencyService/GetCurrency | Gets a single supported currency.
[**listCurrencies()**](CurrencyServiceApi.md#listCurrencies) | **POST** /refb.merchant.v1.CurrencyService/ListCurrencies | Lists all supported currencies.


## `getCurrency()`

```php
getCurrency($body): \WigandtTech\Refurbed\Model\GetCurrencyResponse
```

Gets a single supported currency.

Known errors: - UNAUTHENTICATED   - when no authorization header is sent   - when authorization header is malformed or invalid - PERMISSION_DENIED   - when the authorized user does not have permissions for this operation - INVALID_ARGUMENT   - when the currency code is invalid - NOT_FOUND   - when the currency is not found in our system

### Example

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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WigandtTech\Refurbed\Model\GetCurrencyRequest**](../Model/GetCurrencyRequest.md)|  |

### Return type

[**\WigandtTech\Refurbed\Model\GetCurrencyResponse**](../Model/GetCurrencyResponse.md)

### Authorization

[APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCurrencies()`

```php
listCurrencies($body): \WigandtTech\Refurbed\Model\ListCurrenciesResponse
```

Lists all supported currencies.

Known errors: - UNAUTHENTICATED   - when no authorization header is sent   - when authorization header is malformed or invalid - PERMISSION_DENIED   - when the authorized user does not have permissions for this operation - INVALID_ARGUMENT   - when pagination limit is too large (>100)   - when both \"ending_before\" and \"starting_after\" are specified in pagination

### Example

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
$body = new \WigandtTech\Refurbed\Model\ListCurrenciesRequest(); // \WigandtTech\Refurbed\Model\ListCurrenciesRequest

try {
    $result = $apiInstance->listCurrencies($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrencyServiceApi->listCurrencies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WigandtTech\Refurbed\Model\ListCurrenciesRequest**](../Model/ListCurrenciesRequest.md)|  |

### Return type

[**\WigandtTech\Refurbed\Model\ListCurrenciesResponse**](../Model/ListCurrenciesResponse.md)

### Authorization

[APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
