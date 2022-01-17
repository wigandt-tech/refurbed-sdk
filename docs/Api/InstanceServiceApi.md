# WigandtTech\Refurbed\InstanceServiceApi

All URIs are relative to https://api.refurbed.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getInstance()**](InstanceServiceApi.md#getInstance) | **POST** /refb.merchant.v1.InstanceService/GetInstance | Gets a single instance.


## `getInstance()`

```php
getInstance($body): \WigandtTech\Refurbed\Model\GetInstanceResponse
```

Gets a single instance.

Known errors: - UNAUTHENTICATED   - when no authorization header is sent   - when authorization header is malformed or invalid - PERMISSION_DENIED   - when the authorized user does not have permissions for this operation - NOT_FOUND   - when the instance is not found - INVALID_ARGUMENT   - when invalid GTIN is provided

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyAuth
$config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WigandtTech\Refurbed\Api\InstanceServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WigandtTech\Refurbed\Model\GetInstanceRequest(); // \WigandtTech\Refurbed\Model\GetInstanceRequest

try {
    $result = $apiInstance->getInstance($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstanceServiceApi->getInstance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WigandtTech\Refurbed\Model\GetInstanceRequest**](../Model/GetInstanceRequest.md)|  |

### Return type

[**\WigandtTech\Refurbed\Model\GetInstanceResponse**](../Model/GetInstanceResponse.md)

### Authorization

[APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
