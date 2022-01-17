# WigandtTech\Refurbed\OrderServiceApi

All URIs are relative to https://api.refurbed.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**calculateRefundOrder()**](OrderServiceApi.md#calculateRefundOrder) | **POST** /refb.merchant.v1.OrderService/CalculateRefundOrder | Calculate values for a refund of all refundable items of an order at once, i.e. using the RefundOrder method.
[**deleteOrderInvoice()**](OrderServiceApi.md#deleteOrderInvoice) | **POST** /refb.merchant.v1.OrderService/DeleteOrderInvoice | Deletes the order&#39;s invoice. Order needs to be invoiceable.
[**getOrder()**](OrderServiceApi.md#getOrder) | **POST** /refb.merchant.v1.OrderService/GetOrder | Gets a single order using its identifier.
[**getOrderInvoice()**](OrderServiceApi.md#getOrderInvoice) | **POST** /refb.merchant.v1.OrderService/GetOrderInvoice | Gets the order&#39;s invoice. The URL access token is valid for 24h.
[**listOrders()**](OrderServiceApi.md#listOrders) | **POST** /refb.merchant.v1.OrderService/ListOrders | Lists orders.
[**refundOrder()**](OrderServiceApi.md#refundOrder) | **POST** /refb.merchant.v1.OrderService/RefundOrder | Refunds all refundable items of an order at once.
[**setOrderInvoiceStream()**](OrderServiceApi.md#setOrderInvoiceStream) | **POST** /refb.merchant.v1.OrderService/SetOrderInvoiceStream | Uploads an invoice for an order.


## `calculateRefundOrder()`

```php
calculateRefundOrder($body): \WigandtTech\Refurbed\Model\CalculateRefundOrderResponse
```

Calculate values for a refund of all refundable items of an order at once, i.e. using the RefundOrder method.

Known errors: - UNAUTHENTICATED   - when no authorization header is sent   - when authorization header is malformed or invalid - PERMISSION_DENIED   - when the authorized user does not have permissions for this operation - NOT_FOUND   - when the order is not found - INVALID_ARGUMENT   - invalid input refund data is provided - FAILED_PRECONDITION   - when order is not refundable

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyAuth
$config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WigandtTech\Refurbed\Api\OrderServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WigandtTech\Refurbed\Model\CalculateRefundOrderRequest(); // \WigandtTech\Refurbed\Model\CalculateRefundOrderRequest

try {
    $result = $apiInstance->calculateRefundOrder($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderServiceApi->calculateRefundOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WigandtTech\Refurbed\Model\CalculateRefundOrderRequest**](../Model/CalculateRefundOrderRequest.md)|  |

### Return type

[**\WigandtTech\Refurbed\Model\CalculateRefundOrderResponse**](../Model/CalculateRefundOrderResponse.md)

### Authorization

[APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOrderInvoice()`

```php
deleteOrderInvoice($body): object
```

Deletes the order's invoice. Order needs to be invoiceable.

Known errors: - UNAUTHENTICATED   - when no authorization header is sent   - when authorization header is malformed or invalid - PERMISSION_DENIED   - when the authorized user does not have permissions for this operation - NOT_FOUND   - when the order is not found for the merchant   - when no invoice is found in the order - FAILED_PRECONDITION   - when the order is not invoiceable

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyAuth
$config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WigandtTech\Refurbed\Api\OrderServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WigandtTech\Refurbed\Model\DeleteOrderInvoiceRequest(); // \WigandtTech\Refurbed\Model\DeleteOrderInvoiceRequest

try {
    $result = $apiInstance->deleteOrderInvoice($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderServiceApi->deleteOrderInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WigandtTech\Refurbed\Model\DeleteOrderInvoiceRequest**](../Model/DeleteOrderInvoiceRequest.md)|  |

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

## `getOrder()`

```php
getOrder($body): \WigandtTech\Refurbed\Model\GetOrderResponse
```

Gets a single order using its identifier.

Known errors: - UNAUTHENTICATED   - when no authorization header is sent   - when authorization header is malformed or invalid - PERMISSION_DENIED   - when the authorized user does not have permissions for this operation - NOT_FOUND   - when the order is not found

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyAuth
$config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WigandtTech\Refurbed\Api\OrderServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WigandtTech\Refurbed\Model\GetOrderRequest(); // \WigandtTech\Refurbed\Model\GetOrderRequest

try {
    $result = $apiInstance->getOrder($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderServiceApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WigandtTech\Refurbed\Model\GetOrderRequest**](../Model/GetOrderRequest.md)|  |

### Return type

[**\WigandtTech\Refurbed\Model\GetOrderResponse**](../Model/GetOrderResponse.md)

### Authorization

[APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderInvoice()`

```php
getOrderInvoice($body): \WigandtTech\Refurbed\Model\GetOrderInvoiceResponse
```

Gets the order's invoice. The URL access token is valid for 24h.

Known errors: - UNAUTHENTICATED   - when no authorization header is sent   - when authorization header is malformed or invalid - PERMISSION_DENIED   - when the authorized user does not have permissions for this operation - NOT_FOUND   - when the order is not found for the merchant   - when no invoice is found in the order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyAuth
$config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WigandtTech\Refurbed\Api\OrderServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WigandtTech\Refurbed\Model\GetOrderInvoiceRequest(); // \WigandtTech\Refurbed\Model\GetOrderInvoiceRequest

try {
    $result = $apiInstance->getOrderInvoice($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderServiceApi->getOrderInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WigandtTech\Refurbed\Model\GetOrderInvoiceRequest**](../Model/GetOrderInvoiceRequest.md)|  |

### Return type

[**\WigandtTech\Refurbed\Model\GetOrderInvoiceResponse**](../Model/GetOrderInvoiceResponse.md)

### Authorization

[APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOrders()`

```php
listOrders($body): \WigandtTech\Refurbed\Model\ListOrdersResponse
```

Lists orders.

Known errors: - UNAUTHENTICATED   - when no authorization header is sent   - when authorization header is malformed or invalid - PERMISSION_DENIED   - when the authorized user does not have permissions for this operation - INVALID_ARGUMENT   - when pagination limit is too large (>100)   - when both \"ending_before\" and \"starting_after\" are specified in pagination

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyAuth
$config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WigandtTech\Refurbed\Api\OrderServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WigandtTech\Refurbed\Model\ListOrdersRequest(); // \WigandtTech\Refurbed\Model\ListOrdersRequest

try {
    $result = $apiInstance->listOrders($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderServiceApi->listOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WigandtTech\Refurbed\Model\ListOrdersRequest**](../Model/ListOrdersRequest.md)|  |

### Return type

[**\WigandtTech\Refurbed\Model\ListOrdersResponse**](../Model/ListOrdersResponse.md)

### Authorization

[APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refundOrder()`

```php
refundOrder($body): \WigandtTech\Refurbed\Model\RefundOrderResponse
```

Refunds all refundable items of an order at once.

Known errors: - UNAUTHENTICATED   - when no authorization header is sent   - when authorization header is malformed or invalid - PERMISSION_DENIED   - when the authorized user does not have permissions for this operation - NOT_FOUND   - when the order is not found - INVALID_ARGUMENT   - invalid input refund data is provided - FAILED_PRECONDITION   - when order is not refundable

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyAuth
$config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WigandtTech\Refurbed\Api\OrderServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WigandtTech\Refurbed\Model\RefundOrderRequest(); // \WigandtTech\Refurbed\Model\RefundOrderRequest

try {
    $result = $apiInstance->refundOrder($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderServiceApi->refundOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WigandtTech\Refurbed\Model\RefundOrderRequest**](../Model/RefundOrderRequest.md)|  |

### Return type

[**\WigandtTech\Refurbed\Model\RefundOrderResponse**](../Model/RefundOrderResponse.md)

### Authorization

[APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setOrderInvoiceStream()`

```php
setOrderInvoiceStream($body): \WigandtTech\Refurbed\Model\SetOrderInvoiceResponse
```

Uploads an invoice for an order.

Overrides a possibly already existing invoice. Order needs to be invoiceable.  Known errors: - UNAUTHENTICATED   - when no authorization header is sent   - when authorization header is malformed or invalid - PERMISSION_DENIED   - when the authorized user does not have permissions for this operation - NOT_FOUND   - when the order is not found for the merchant - FAILED_PRECONDITION   - when the invoice exceeds the permitted size   - when the order is not invoiceable - INVALID_ARGUMENT   - when the invoice format is not supported

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyAuth
$config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WigandtTech\Refurbed\Api\OrderServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \stdClass); // object[] | (streaming inputs)

try {
    $result = $apiInstance->setOrderInvoiceStream($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderServiceApi->setOrderInvoiceStream: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object[]**](../Model/object.md)| (streaming inputs) |

### Return type

[**\WigandtTech\Refurbed\Model\SetOrderInvoiceResponse**](../Model/SetOrderInvoiceResponse.md)

### Authorization

[APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
