# VentureLeap\OrderService\OrderProductApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteOrderProductItem**](OrderProductApi.md#deleteorderproductitem) | **DELETE** /order/order_products/{uuid} | Removes the OrderProduct resource.
[**getOrderProductCollection**](OrderProductApi.md#getorderproductcollection) | **GET** /order/order_products | Retrieves the collection of OrderProduct resources.
[**getOrderProductItem**](OrderProductApi.md#getorderproductitem) | **GET** /order/order_products/{uuid} | Retrieves a OrderProduct resource.
[**postOrderProductCollection**](OrderProductApi.md#postorderproductcollection) | **POST** /order/order_products | Creates a OrderProduct resource.
[**putOrderProductItem**](OrderProductApi.md#putorderproductitem) | **PUT** /order/order_products/{uuid} | Replaces the OrderProduct resource.

# **deleteOrderProductItem**
> deleteOrderProductItem($uuid)

Removes the OrderProduct resource.

Removes the OrderProduct resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = VentureLeap\OrderService\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\OrderService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VentureLeap\OrderService\Api\OrderProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | Resource identifier

try {
    $apiInstance->deleteOrderProductItem($uuid);
} catch (Exception $e) {
    echo 'Exception when calling OrderProductApi->deleteOrderProductItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| Resource identifier |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderProductCollection**
> \VentureLeap\OrderService\Model\InlineResponse2002 getOrderProductCollection($page, $name, $uom, $product_id, $properties)

Retrieves the collection of OrderProduct resources.

Retrieves the collection of OrderProduct resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = VentureLeap\OrderService\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\OrderService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VentureLeap\OrderService\Api\OrderProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$name = "name_example"; // string | 
$uom = "uom_example"; // string | 
$product_id = "product_id_example"; // string | 
$properties = array("properties_example"); // string[] | 

try {
    $result = $apiInstance->getOrderProductCollection($page, $name, $uom, $product_id, $properties);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderProductApi->getOrderProductCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional] [default to 1]
 **name** | **string**|  | [optional]
 **uom** | **string**|  | [optional]
 **product_id** | **string**|  | [optional]
 **properties** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

[**\VentureLeap\OrderService\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderProductItem**
> \VentureLeap\OrderService\Model\OrderProductJsonldOrderProductRead getOrderProductItem($uuid)

Retrieves a OrderProduct resource.

Retrieves a OrderProduct resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = VentureLeap\OrderService\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\OrderService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VentureLeap\OrderService\Api\OrderProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | Resource identifier

try {
    $result = $apiInstance->getOrderProductItem($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderProductApi->getOrderProductItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| Resource identifier |

### Return type

[**\VentureLeap\OrderService\Model\OrderProductJsonldOrderProductRead**](../Model/OrderProductJsonldOrderProductRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postOrderProductCollection**
> \VentureLeap\OrderService\Model\OrderProductJsonldOrderProductRead postOrderProductCollection($body)

Creates a OrderProduct resource.

Creates a OrderProduct resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = VentureLeap\OrderService\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\OrderService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VentureLeap\OrderService\Api\OrderProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \VentureLeap\OrderService\Model\OrderProductJsonldOrderProductWrite(); // \VentureLeap\OrderService\Model\OrderProductJsonldOrderProductWrite | The new OrderProduct resource

try {
    $result = $apiInstance->postOrderProductCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderProductApi->postOrderProductCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\VentureLeap\OrderService\Model\OrderProductJsonldOrderProductWrite**](../Model/OrderProductJsonldOrderProductWrite.md)| The new OrderProduct resource |

### Return type

[**\VentureLeap\OrderService\Model\OrderProductJsonldOrderProductRead**](../Model/OrderProductJsonldOrderProductRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putOrderProductItem**
> \VentureLeap\OrderService\Model\OrderProductJsonldOrderProductRead putOrderProductItem($body, $uuid)

Replaces the OrderProduct resource.

Replaces the OrderProduct resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = VentureLeap\OrderService\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\OrderService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VentureLeap\OrderService\Api\OrderProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \VentureLeap\OrderService\Model\OrderProductJsonldOrderProductWrite(); // \VentureLeap\OrderService\Model\OrderProductJsonldOrderProductWrite | The updated OrderProduct resource
$uuid = "uuid_example"; // string | Resource identifier

try {
    $result = $apiInstance->putOrderProductItem($body, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderProductApi->putOrderProductItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\VentureLeap\OrderService\Model\OrderProductJsonldOrderProductWrite**](../Model/OrderProductJsonldOrderProductWrite.md)| The updated OrderProduct resource |
 **uuid** | **string**| Resource identifier |

### Return type

[**\VentureLeap\OrderService\Model\OrderProductJsonldOrderProductRead**](../Model/OrderProductJsonldOrderProductRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

