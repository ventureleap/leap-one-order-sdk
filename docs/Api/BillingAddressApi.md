# VentureLeap\OrderService\BillingAddressApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBillingAddressCollection**](BillingAddressApi.md#getbillingaddresscollection) | **GET** /order/billing_addresses | Retrieves the collection of BillingAddress resources.
[**getBillingAddressItem**](BillingAddressApi.md#getbillingaddressitem) | **GET** /order/billing_addresses/{id} | Retrieves a BillingAddress resource.
[**postBillingAddressCollection**](BillingAddressApi.md#postbillingaddresscollection) | **POST** /order/billing_addresses | Creates a BillingAddress resource.
[**putBillingAddressItem**](BillingAddressApi.md#putbillingaddressitem) | **PUT** /order/billing_addresses/{id} | Replaces the BillingAddress resource.

# **getBillingAddressCollection**
> \VentureLeap\OrderService\Model\InlineResponse200 getBillingAddressCollection($page)

Retrieves the collection of BillingAddress resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = VentureLeap\OrderService\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\OrderService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VentureLeap\OrderService\Api\BillingAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->getBillingAddressCollection($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingAddressApi->getBillingAddressCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional] [default to 1]

### Return type

[**\VentureLeap\OrderService\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBillingAddressItem**
> \VentureLeap\OrderService\Model\BillingAddressJsonldBillingAddressRead getBillingAddressItem($id)

Retrieves a BillingAddress resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = VentureLeap\OrderService\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\OrderService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VentureLeap\OrderService\Api\BillingAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getBillingAddressItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingAddressApi->getBillingAddressItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\VentureLeap\OrderService\Model\BillingAddressJsonldBillingAddressRead**](../Model/BillingAddressJsonldBillingAddressRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postBillingAddressCollection**
> \VentureLeap\OrderService\Model\BillingAddressJsonldBillingAddressRead postBillingAddressCollection($body)

Creates a BillingAddress resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = VentureLeap\OrderService\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\OrderService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VentureLeap\OrderService\Api\BillingAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \VentureLeap\OrderService\Model\BillingAddressJsonldBillingAddressWrite(); // \VentureLeap\OrderService\Model\BillingAddressJsonldBillingAddressWrite | The new BillingAddress resource

try {
    $result = $apiInstance->postBillingAddressCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingAddressApi->postBillingAddressCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\VentureLeap\OrderService\Model\BillingAddressJsonldBillingAddressWrite**](../Model/BillingAddressJsonldBillingAddressWrite.md)| The new BillingAddress resource | [optional]

### Return type

[**\VentureLeap\OrderService\Model\BillingAddressJsonldBillingAddressRead**](../Model/BillingAddressJsonldBillingAddressRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putBillingAddressItem**
> \VentureLeap\OrderService\Model\BillingAddressJsonldBillingAddressRead putBillingAddressItem($id, $body)

Replaces the BillingAddress resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = VentureLeap\OrderService\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\OrderService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VentureLeap\OrderService\Api\BillingAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$body = new \VentureLeap\OrderService\Model\BillingAddressJsonldBillingAddressWrite(); // \VentureLeap\OrderService\Model\BillingAddressJsonldBillingAddressWrite | The updated BillingAddress resource

try {
    $result = $apiInstance->putBillingAddressItem($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingAddressApi->putBillingAddressItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\VentureLeap\OrderService\Model\BillingAddressJsonldBillingAddressWrite**](../Model/BillingAddressJsonldBillingAddressWrite.md)| The updated BillingAddress resource | [optional]

### Return type

[**\VentureLeap\OrderService\Model\BillingAddressJsonldBillingAddressRead**](../Model/BillingAddressJsonldBillingAddressRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

