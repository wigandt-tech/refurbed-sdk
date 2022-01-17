# WigandtTech\Refurbed\OrderItemServiceApi

All URIs are relative to https://api.refurbed.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchUpdateOrderItems()**](OrderItemServiceApi.md#batchUpdateOrderItems) | **POST** /refb.merchant.v1.OrderItemService/BatchUpdateOrderItems | Batch updates order items.
[**batchUpdateOrderItemsState()**](OrderItemServiceApi.md#batchUpdateOrderItemsState) | **POST** /refb.merchant.v1.OrderItemService/BatchUpdateOrderItemsState | Batch updates order items&#39; state.
[**calculateRefundOrderItem()**](OrderItemServiceApi.md#calculateRefundOrderItem) | **POST** /refb.merchant.v1.OrderItemService/CalculateRefundOrderItem | Calculate values for a refund of a single order item, i.e. using the RefundOrderItem method.
[**getOrderItem()**](OrderItemServiceApi.md#getOrderItem) | **POST** /refb.merchant.v1.OrderItemService/GetOrderItem | Gets a single order item.
[**listOrderItemsByOrder()**](OrderItemServiceApi.md#listOrderItemsByOrder) | **POST** /refb.merchant.v1.OrderItemService/ListOrderItemsByOrder | Lists all order items of a specific order.
[**refundOrderItem()**](OrderItemServiceApi.md#refundOrderItem) | **POST** /refb.merchant.v1.OrderItemService/RefundOrderItem | Refunds a single order item. Item needs to be refundable.
[**updateOrderItem()**](OrderItemServiceApi.md#updateOrderItem) | **POST** /refb.merchant.v1.OrderItemService/UpdateOrderItem | Updates a single order item.
[**updateOrderItemState()**](OrderItemServiceApi.md#updateOrderItemState) | **POST** /refb.merchant.v1.OrderItemService/UpdateOrderItemState | Updates the state of a single order item.


## `batchUpdateOrderItems()`

```php
batchUpdateOrderItems($body): \WigandtTech\Refurbed\Model\BatchUpdateOrderItemsResponse
```

Batch updates order items.

Known errors: Errors are identical to the UpdateOrderItem operation per each individual order item update and: - INVALID_ARGUMENT   - when more than 50 updates are attempted

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyAuth
$config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WigandtTech\Refurbed\Api\OrderItemServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WigandtTech\Refurbed\Model\BatchUpdateOrderItemsRequest(); // \WigandtTech\Refurbed\Model\BatchUpdateOrderItemsRequest

try {
    $result = $apiInstance->batchUpdateOrderItems($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemServiceApi->batchUpdateOrderItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WigandtTech\Refurbed\Model\BatchUpdateOrderItemsRequest**](../Model/BatchUpdateOrderItemsRequest.md)|  |

### Return type

[**\WigandtTech\Refurbed\Model\BatchUpdateOrderItemsResponse**](../Model/BatchUpdateOrderItemsResponse.md)

### Authorization

[APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `batchUpdateOrderItemsState()`

```php
batchUpdateOrderItemsState($body): \WigandtTech\Refurbed\Model\BatchUpdateOrderItemsStateResponse
```

Batch updates order items' state.

Known errors: Errors are identical to the UpdateOrderItemState operation per each individual order item state update and: - INVALID_ARGUMENT   - when more than 50 updates are attempted

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyAuth
$config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WigandtTech\Refurbed\Api\OrderItemServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WigandtTech\Refurbed\Model\BatchUpdateOrderItemsStateRequest(); // \WigandtTech\Refurbed\Model\BatchUpdateOrderItemsStateRequest

try {
    $result = $apiInstance->batchUpdateOrderItemsState($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemServiceApi->batchUpdateOrderItemsState: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WigandtTech\Refurbed\Model\BatchUpdateOrderItemsStateRequest**](../Model/BatchUpdateOrderItemsStateRequest.md)|  |

### Return type

[**\WigandtTech\Refurbed\Model\BatchUpdateOrderItemsStateResponse**](../Model/BatchUpdateOrderItemsStateResponse.md)

### Authorization

[APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `calculateRefundOrderItem()`

```php
calculateRefundOrderItem($body): \WigandtTech\Refurbed\Model\CalculateRefundOrderItemResponse
```

Calculate values for a refund of a single order item, i.e. using the RefundOrderItem method.

Known errors: - UNAUTHENTICATED   - when no authorization header is sent   - when authorization header is malformed or invalid - PERMISSION_DENIED   - when the authorized user does not have permissions for this operation - NOT_FOUND   - when the order item is not found - INVALID_ARGUMENT   - invalid input refund data is provided - FAILED_PRECONDITION   - when order item is not refundable

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyAuth
$config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WigandtTech\Refurbed\Api\OrderItemServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WigandtTech\Refurbed\Model\CalculateRefundOrderItemRequest(); // \WigandtTech\Refurbed\Model\CalculateRefundOrderItemRequest

try {
    $result = $apiInstance->calculateRefundOrderItem($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemServiceApi->calculateRefundOrderItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WigandtTech\Refurbed\Model\CalculateRefundOrderItemRequest**](../Model/CalculateRefundOrderItemRequest.md)|  |

### Return type

[**\WigandtTech\Refurbed\Model\CalculateRefundOrderItemResponse**](../Model/CalculateRefundOrderItemResponse.md)

### Authorization

[APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderItem()`

```php
getOrderItem($body): \WigandtTech\Refurbed\Model\GetOrderItemResponse
```

Gets a single order item.

Known errors: - UNAUTHENTICATED   - when no authorization header is sent   - when authorization header is malformed or invalid - PERMISSION_DENIED   - when the authorized user does not have permissions for this operation - NOT_FOUND   - when the order item is not found

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyAuth
$config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WigandtTech\Refurbed\Api\OrderItemServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WigandtTech\Refurbed\Model\GetOrderItemRequest(); // \WigandtTech\Refurbed\Model\GetOrderItemRequest

try {
    $result = $apiInstance->getOrderItem($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemServiceApi->getOrderItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WigandtTech\Refurbed\Model\GetOrderItemRequest**](../Model/GetOrderItemRequest.md)|  |

### Return type

[**\WigandtTech\Refurbed\Model\GetOrderItemResponse**](../Model/GetOrderItemResponse.md)

### Authorization

[APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOrderItemsByOrder()`

```php
listOrderItemsByOrder($body): \WigandtTech\Refurbed\Model\ListOrderItemsByOrderResponse
```

Lists all order items of a specific order.

Known errors: - UNAUTHENTICATED   - when no authorization header is sent   - when authorization header is malformed or invalid - PERMISSION_DENIED   - when the authorized user does not have permissions for this operation - INVALID_ARGUMENT   - when pagination limit is too large (>100)   - when both \"ending_before\" and \"starting_after\" are specified in pagination

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyAuth
$config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WigandtTech\Refurbed\Api\OrderItemServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WigandtTech\Refurbed\Model\ListOrderItemsByOrderRequest(); // \WigandtTech\Refurbed\Model\ListOrderItemsByOrderRequest

try {
    $result = $apiInstance->listOrderItemsByOrder($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemServiceApi->listOrderItemsByOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WigandtTech\Refurbed\Model\ListOrderItemsByOrderRequest**](../Model/ListOrderItemsByOrderRequest.md)|  |

### Return type

[**\WigandtTech\Refurbed\Model\ListOrderItemsByOrderResponse**](../Model/ListOrderItemsByOrderResponse.md)

### Authorization

[APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refundOrderItem()`

```php
refundOrderItem($body): \WigandtTech\Refurbed\Model\RefundOrderItemResponse
```

Refunds a single order item. Item needs to be refundable.

Known errors: - UNAUTHENTICATED   - when no authorization header is sent   - when authorization header is malformed or invalid - PERMISSION_DENIED   - when the authorized user does not have permissions for this operation - NOT_FOUND   - when the order item is not found - INVALID_ARGUMENT   - invalid input refund data is provided - FAILED_PRECONDITION   - when order item is not refundable

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyAuth
$config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WigandtTech\Refurbed\Api\OrderItemServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WigandtTech\Refurbed\Model\RefundOrderItemRequest(); // \WigandtTech\Refurbed\Model\RefundOrderItemRequest

try {
    $result = $apiInstance->refundOrderItem($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemServiceApi->refundOrderItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WigandtTech\Refurbed\Model\RefundOrderItemRequest**](../Model/RefundOrderItemRequest.md)|  |

### Return type

[**\WigandtTech\Refurbed\Model\RefundOrderItemResponse**](../Model/RefundOrderItemResponse.md)

### Authorization

[APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrderItem()`

```php
updateOrderItem($body): \WigandtTech\Refurbed\Model\UpdateOrderItemResponse
```

Updates a single order item.

Known errors: - UNAUTHENTICATED   - when no authorization header is sent   - when authorization header is malformed or invalid - PERMISSION_DENIED   - when the authorized user does not have permissions for this operation - NOT_FOUND   - when the updated order item is not found - INVALID_ARGUMENT   - when invalid parcel tracking url is provided

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyAuth
$config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WigandtTech\Refurbed\Api\OrderItemServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WigandtTech\Refurbed\Model\UpdateOrderItemRequest(); // \WigandtTech\Refurbed\Model\UpdateOrderItemRequest

try {
    $result = $apiInstance->updateOrderItem($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemServiceApi->updateOrderItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WigandtTech\Refurbed\Model\UpdateOrderItemRequest**](../Model/UpdateOrderItemRequest.md)|  |

### Return type

[**\WigandtTech\Refurbed\Model\UpdateOrderItemResponse**](../Model/UpdateOrderItemResponse.md)

### Authorization

[APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrderItemState()`

```php
updateOrderItemState($body): \WigandtTech\Refurbed\Model\UpdateOrderItemStateResponse
```

Updates the state of a single order item.

Known errors: - UNAUTHENTICATED   - when no authorization header is sent   - when authorization header is malformed or invalid - PERMISSION_DENIED   - when the authorized user does not have permissions for this operation - NOT_FOUND   - when the updated order item is not found - INVALID_ARGUMENT   - when illegal state transition is attempted   - when no parcel tracking url is set when transitioning to SHIPPED state   - when invalid parcel tracking url is provided

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyAuth
$config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WigandtTech\Refurbed\Api\OrderItemServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WigandtTech\Refurbed\Model\UpdateOrderItemStateRequest(); // \WigandtTech\Refurbed\Model\UpdateOrderItemStateRequest

try {
    $result = $apiInstance->updateOrderItemState($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderItemServiceApi->updateOrderItemState: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WigandtTech\Refurbed\Model\UpdateOrderItemStateRequest**](../Model/UpdateOrderItemStateRequest.md)|  |

### Return type

[**\WigandtTech\Refurbed\Model\UpdateOrderItemStateResponse**](../Model/UpdateOrderItemStateResponse.md)

### Authorization

[APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
