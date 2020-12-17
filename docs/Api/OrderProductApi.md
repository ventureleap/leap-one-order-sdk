# VentureLeap\OrderService\OrderProductApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteOrderProductItem**](OrderProductApi.md#deleteorderproductitem) | **DELETE** /order/order_products/{id} | Removes the OrderProduct resource.
[**getOrderProductCollection**](OrderProductApi.md#getorderproductcollection) | **GET** /order/order_products | Retrieves the collection of OrderProduct resources.
[**getOrderProductItem**](OrderProductApi.md#getorderproductitem) | **GET** /order/order_products/{id} | Retrieves a OrderProduct resource.
[**postOrderProductCollection**](OrderProductApi.md#postorderproductcollection) | **POST** /order/order_products | Creates a OrderProduct resource.
[**putOrderProductItem**](OrderProductApi.md#putorderproductitem) | **PUT** /order/order_products/{id} | Replaces the OrderProduct resource.

# **deleteOrderProductItem**
> deleteOrderProductItem($id)

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
$id = "id_example"; // string | 

try {
    $apiInstance->deleteOrderProductItem($id);
} catch (Exception $e) {
    echo 'Exception when calling OrderProductApi->deleteOrderProductItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderProductCollection**
> \VentureLeap\OrderService\Model\InlineResponse2001 getOrderProductCollection($properties, $name, $uom, $product_id, $page)

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
$properties = array("properties_example"); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$name = "name_example"; // string | 
$uom = "uom_example"; // string | 
$product_id = "product_id_example"; // string | 
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->getOrderProductCollection($properties, $name, $uom, $product_id, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderProductApi->getOrderProductCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional]
 **name** | **string**|  | [optional]
 **uom** | **string**|  | [optional]
 **product_id** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional] [default to 1]

### Return type

[**\VentureLeap\OrderService\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderProductItem**
> \VentureLeap\OrderService\Model\OrderProductJsonldProductRead getOrderProductItem($id)

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
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getOrderProductItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderProductApi->getOrderProductItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\VentureLeap\OrderService\Model\OrderProductJsonldProductRead**](../Model/OrderProductJsonldProductRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postOrderProductCollection**
> \VentureLeap\OrderService\Model\OrderProductJsonldProductRead postOrderProductCollection($body)

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
$body = new \VentureLeap\OrderService\Model\OrderProductJsonldProductWrite(); // \VentureLeap\OrderService\Model\OrderProductJsonldProductWrite | The new OrderProduct resource

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
 **body** | [**\VentureLeap\OrderService\Model\OrderProductJsonldProductWrite**](../Model/OrderProductJsonldProductWrite.md)| The new OrderProduct resource | [optional]

### Return type

[**\VentureLeap\OrderService\Model\OrderProductJsonldProductRead**](../Model/OrderProductJsonldProductRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putOrderProductItem**
> \VentureLeap\OrderService\Model\OrderProductJsonldProductRead putOrderProductItem($id, $body)

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
$id = "id_example"; // string | 
$body = new \VentureLeap\OrderService\Model\OrderProductJsonldProductWrite(); // \VentureLeap\OrderService\Model\OrderProductJsonldProductWrite | The updated OrderProduct resource

try {
    $result = $apiInstance->putOrderProductItem($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderProductApi->putOrderProductItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\VentureLeap\OrderService\Model\OrderProductJsonldProductWrite**](../Model/OrderProductJsonldProductWrite.md)| The updated OrderProduct resource | [optional]

### Return type

[**\VentureLeap\OrderService\Model\OrderProductJsonldProductRead**](../Model/OrderProductJsonldProductRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

