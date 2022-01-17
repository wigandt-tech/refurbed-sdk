# WigandtTech\Refurbed\ShippingProfileServiceApi

All URIs are relative to https://api.refurbed.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createShippingProfile()**](ShippingProfileServiceApi.md#createShippingProfile) | **POST** /refb.merchant.v1.ShippingProfileService/CreateShippingProfile | Creates a shipping profile.
[**deleteShippingProfile()**](ShippingProfileServiceApi.md#deleteShippingProfile) | **POST** /refb.merchant.v1.ShippingProfileService/DeleteShippingProfile | Deletes a shipping profile. Only shipping profiles marked as deletable can be deleted.
[**getShippingProfile()**](ShippingProfileServiceApi.md#getShippingProfile) | **POST** /refb.merchant.v1.ShippingProfileService/GetShippingProfile | Gets a single shipping profile. If no version is defined, its current version is returned.
[**listShippingProfiles()**](ShippingProfileServiceApi.md#listShippingProfiles) | **POST** /refb.merchant.v1.ShippingProfileService/ListShippingProfiles | Lists all current shipping profiles.
[**updateShippingProfile()**](ShippingProfileServiceApi.md#updateShippingProfile) | **POST** /refb.merchant.v1.ShippingProfileService/UpdateShippingProfile | Updates a shipping profile.


## `createShippingProfile()`

```php
createShippingProfile($body): \WigandtTech\Refurbed\Model\CreateShippingProfileResponse
```

Creates a shipping profile.

Known errors: - UNAUTHENTICATED   - when no authorization header is sent   - when authorization header is malformed or invalid - PERMISSION_DENIED   - when the authorized user does not have permissions for this operation - INVALID_ARGUMENT   - when unknown source country market code is provided   - when unknown destination market code is provided   - when invalid shipping costs amount   - when unknown currency code is provided   - when invalid min/max delivery days

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyAuth
$config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WigandtTech\Refurbed\Api\ShippingProfileServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WigandtTech\Refurbed\Model\CreateShippingProfileRequest(); // \WigandtTech\Refurbed\Model\CreateShippingProfileRequest

try {
    $result = $apiInstance->createShippingProfile($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingProfileServiceApi->createShippingProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WigandtTech\Refurbed\Model\CreateShippingProfileRequest**](../Model/CreateShippingProfileRequest.md)|  |

### Return type

[**\WigandtTech\Refurbed\Model\CreateShippingProfileResponse**](../Model/CreateShippingProfileResponse.md)

### Authorization

[APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteShippingProfile()`

```php
deleteShippingProfile($body): object
```

Deletes a shipping profile. Only shipping profiles marked as deletable can be deleted.

Known errors: - UNAUTHENTICATED   - when no authorization header is sent   - when authorization header is malformed or invalid - PERMISSION_DENIED   - when the authorized user does not have permissions for this operation - INVALID_ARGUMENT   - when unknown source country market code is provided

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyAuth
$config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WigandtTech\Refurbed\Api\ShippingProfileServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WigandtTech\Refurbed\Model\DeleteShippingProfileRequest(); // \WigandtTech\Refurbed\Model\DeleteShippingProfileRequest

try {
    $result = $apiInstance->deleteShippingProfile($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingProfileServiceApi->deleteShippingProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WigandtTech\Refurbed\Model\DeleteShippingProfileRequest**](../Model/DeleteShippingProfileRequest.md)|  |

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

## `getShippingProfile()`

```php
getShippingProfile($body): \WigandtTech\Refurbed\Model\GetShippingProfileResponse
```

Gets a single shipping profile. If no version is defined, its current version is returned.

Known errors: - UNAUTHENTICATED   - when no authorization header is sent   - when authorization header is malformed or invalid - PERMISSION_DENIED   - when the authorized user does not have permissions for this operation - NOT_FOUND   - when the shipping profile is not found   - when the shipping profile has been deleted and no version is given as     parameter even though the individual historic versions are still     accessible

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyAuth
$config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WigandtTech\Refurbed\Api\ShippingProfileServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WigandtTech\Refurbed\Model\GetShippingProfileRequest(); // \WigandtTech\Refurbed\Model\GetShippingProfileRequest

try {
    $result = $apiInstance->getShippingProfile($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingProfileServiceApi->getShippingProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WigandtTech\Refurbed\Model\GetShippingProfileRequest**](../Model/GetShippingProfileRequest.md)|  |

### Return type

[**\WigandtTech\Refurbed\Model\GetShippingProfileResponse**](../Model/GetShippingProfileResponse.md)

### Authorization

[APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listShippingProfiles()`

```php
listShippingProfiles($body): \WigandtTech\Refurbed\Model\ListShippingProfilesResponse
```

Lists all current shipping profiles.

Known errors: - UNAUTHENTICATED   - when no authorization header is sent   - when authorization header is malformed or invalid - PERMISSION_DENIED   - when the authorized user does not have permissions for this operation - INVALID_ARGUMENT   - when pagination limit is too large (>100)   - when both \"ending_before\" and \"starting_after\" are specified in pagination

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyAuth
$config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WigandtTech\Refurbed\Api\ShippingProfileServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WigandtTech\Refurbed\Model\ListShippingProfilesRequest(); // \WigandtTech\Refurbed\Model\ListShippingProfilesRequest

try {
    $result = $apiInstance->listShippingProfiles($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingProfileServiceApi->listShippingProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WigandtTech\Refurbed\Model\ListShippingProfilesRequest**](../Model/ListShippingProfilesRequest.md)|  |

### Return type

[**\WigandtTech\Refurbed\Model\ListShippingProfilesResponse**](../Model/ListShippingProfilesResponse.md)

### Authorization

[APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateShippingProfile()`

```php
updateShippingProfile($body): \WigandtTech\Refurbed\Model\UpdateShippingProfileResponse
```

Updates a shipping profile.

Known errors: - UNAUTHENTICATED   - when no authorization header is sent   - when authorization header is malformed or invalid - PERMISSION_DENIED   - when the authorized user does not have permissions for this operation - INVALID_ARGUMENT   - when unknown source country market code is provided   - when unknown destination market code is provided   - when invalid shipping costs amount   - when unknown currency code is provided   - when invalid min/max delivery days - ALREADY_EXISTS   - when destination already exists for provided market code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyAuth
$config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WigandtTech\Refurbed\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WigandtTech\Refurbed\Api\ShippingProfileServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \WigandtTech\Refurbed\Model\UpdateShippingProfileRequest(); // \WigandtTech\Refurbed\Model\UpdateShippingProfileRequest

try {
    $result = $apiInstance->updateShippingProfile($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingProfileServiceApi->updateShippingProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\WigandtTech\Refurbed\Model\UpdateShippingProfileRequest**](../Model/UpdateShippingProfileRequest.md)|  |

### Return type

[**\WigandtTech\Refurbed\Model\UpdateShippingProfileResponse**](../Model/UpdateShippingProfileResponse.md)

### Authorization

[APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
