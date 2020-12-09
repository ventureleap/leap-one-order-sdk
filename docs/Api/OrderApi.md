# VentureLeap\OrderService\OrderApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteOrderItem**](OrderApi.md#deleteorderitem) | **DELETE** /order/orders/{id} | Removes the Order resource.
[**getOrderCollection**](OrderApi.md#getordercollection) | **GET** /order/orders | Retrieves the collection of Order resources.
[**getOrderItem**](OrderApi.md#getorderitem) | **GET** /order/orders/{id} | Retrieves a Order resource.
[**postOrderCollection**](OrderApi.md#postordercollection) | **POST** /order/orders | Creates a Order resource.
[**putOrderItem**](OrderApi.md#putorderitem) | **PUT** /order/orders/{id} | Replaces the Order resource.

# **deleteOrderItem**
> deleteOrderItem($id)

Removes the Order resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = VentureLeap\OrderService\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\OrderService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VentureLeap\OrderService\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $apiInstance->deleteOrderItem($id);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->deleteOrderItem: ', $e->getMessage(), PHP_EOL;
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

# **getOrderCollection**
> \VentureLeap\OrderService\Model\InlineResponse2002 getOrderCollection($properties, $uuid, $uuid, $application_id, $application_id, $order_code, $order_code, $status, $status, $payment_status, $payment_status, $payment_date, $payment_date, $customer_uuid, $customer_uuid, $internal_comment, $internal_comment, $customer_comment, $customer_comment, $created_at, $created_at, $updated_at, $updated_at, $active, $active, $deleted, $deleted, $additional_properties, $additional_properties, $page)

Retrieves the collection of Order resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = VentureLeap\OrderService\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\OrderService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VentureLeap\OrderService\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$properties = array("properties_example"); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$uuid = "uuid_example"; // string | 
$uuid = array("uuid_example"); // string[] | 
$application_id = "application_id_example"; // string | 
$application_id = array("application_id_example"); // string[] | 
$order_code = "order_code_example"; // string | 
$order_code = array("order_code_example"); // string[] | 
$status = "status_example"; // string | 
$status = array("status_example"); // string[] | 
$payment_status = "payment_status_example"; // string | 
$payment_status = array("payment_status_example"); // string[] | 
$payment_date = "payment_date_example"; // string | 
$payment_date = "payment_date_example"; // string | 
$customer_uuid = "customer_uuid_example"; // string | 
$customer_uuid = array("customer_uuid_example"); // string[] | 
$internal_comment = "internal_comment_example"; // string | 
$internal_comment = array("internal_comment_example"); // string[] | 
$customer_comment = "customer_comment_example"; // string | 
$customer_comment = array("customer_comment_example"); // string[] | 
$created_at = "created_at_example"; // string | 
$created_at = "created_at_example"; // string | 
$updated_at = "updated_at_example"; // string | 
$updated_at = "updated_at_example"; // string | 
$active = true; // bool | 
$active = array(True); // bool[] | 
$deleted = true; // bool | 
$deleted = array(True); // bool[] | 
$additional_properties = "additional_properties_example"; // string | 
$additional_properties = array("additional_properties_example"); // string[] | 
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->getOrderCollection($properties, $uuid, $uuid, $application_id, $application_id, $order_code, $order_code, $status, $status, $payment_status, $payment_status, $payment_date, $payment_date, $customer_uuid, $customer_uuid, $internal_comment, $internal_comment, $customer_comment, $customer_comment, $created_at, $created_at, $updated_at, $updated_at, $active, $active, $deleted, $deleted, $additional_properties, $additional_properties, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getOrderCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional]
 **uuid** | **string**|  | [optional]
 **uuid** | [**string[]**](../Model/string.md)|  | [optional]
 **application_id** | **string**|  | [optional]
 **application_id** | [**string[]**](../Model/string.md)|  | [optional]
 **order_code** | **string**|  | [optional]
 **order_code** | [**string[]**](../Model/string.md)|  | [optional]
 **status** | **string**|  | [optional]
 **status** | [**string[]**](../Model/string.md)|  | [optional]
 **payment_status** | **string**|  | [optional]
 **payment_status** | [**string[]**](../Model/string.md)|  | [optional]
 **payment_date** | **string**|  | [optional]
 **payment_date** | **string**|  | [optional]
 **customer_uuid** | **string**|  | [optional]
 **customer_uuid** | [**string[]**](../Model/string.md)|  | [optional]
 **internal_comment** | **string**|  | [optional]
 **internal_comment** | [**string[]**](../Model/string.md)|  | [optional]
 **customer_comment** | **string**|  | [optional]
 **customer_comment** | [**string[]**](../Model/string.md)|  | [optional]
 **created_at** | **string**|  | [optional]
 **created_at** | **string**|  | [optional]
 **updated_at** | **string**|  | [optional]
 **updated_at** | **string**|  | [optional]
 **active** | **bool**|  | [optional]
 **active** | [**bool[]**](../Model/bool.md)|  | [optional]
 **deleted** | **bool**|  | [optional]
 **deleted** | [**bool[]**](../Model/bool.md)|  | [optional]
 **additional_properties** | **string**|  | [optional]
 **additional_properties** | [**string[]**](../Model/string.md)|  | [optional]
 **page** | **int**| The collection page number | [optional] [default to 1]

### Return type

[**\VentureLeap\OrderService\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderItem**
> \VentureLeap\OrderService\Model\OrderJsonldOrderRead getOrderItem($id)

Retrieves a Order resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = VentureLeap\OrderService\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\OrderService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VentureLeap\OrderService\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getOrderItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getOrderItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\VentureLeap\OrderService\Model\OrderJsonldOrderRead**](../Model/OrderJsonldOrderRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postOrderCollection**
> \VentureLeap\OrderService\Model\OrderJsonldOrderRead postOrderCollection($body)

Creates a Order resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = VentureLeap\OrderService\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\OrderService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VentureLeap\OrderService\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \VentureLeap\OrderService\Model\map(); // map[string,object] | The new Order resource

try {
    $result = $apiInstance->postOrderCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->postOrderCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**map[string,object]**](../Model/map.md)| The new Order resource | [optional]

### Return type

[**\VentureLeap\OrderService\Model\OrderJsonldOrderRead**](../Model/OrderJsonldOrderRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putOrderItem**
> \VentureLeap\OrderService\Model\OrderJsonldOrderRead putOrderItem($id, $body)

Replaces the Order resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = VentureLeap\OrderService\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\OrderService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VentureLeap\OrderService\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$body = new \VentureLeap\OrderService\Model\map(); // map[string,object] | The updated Order resource

try {
    $result = $apiInstance->putOrderItem($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->putOrderItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**map[string,object]**](../Model/map.md)| The updated Order resource | [optional]

### Return type

[**\VentureLeap\OrderService\Model\OrderJsonldOrderRead**](../Model/OrderJsonldOrderRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
