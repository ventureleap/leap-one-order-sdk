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
> \VentureLeap\OrderService\Model\InlineResponse2004 getOrderCollection($properties, $custom_data, $internal_comment, $customer_comment, $billing_address_full_name, $billing_address_company_name, $payment_comment, $order_code, $status, $payment_status, $customer_uuid, $payment_provider, $payment_method, $active, $deleted, $is_b_to_b, $date_of_validity_before, $date_of_validity_strictly_before, $date_of_validity_after, $date_of_validity_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $order_status, $order_payment_status, $order_created_at, $order_updated_at, $order_payment_date, $order_order_code, $order_customer_uuid, $page, $items_per_page, $pagination)

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
$custom_data = "custom_data_example"; // string | 
$internal_comment = "internal_comment_example"; // string | 
$customer_comment = "customer_comment_example"; // string | 
$billing_address_full_name = "billing_address_full_name_example"; // string | 
$billing_address_company_name = "billing_address_company_name_example"; // string | 
$payment_comment = "payment_comment_example"; // string | 
$order_code = "order_code_example"; // string | 
$status = "status_example"; // string | 
$payment_status = "payment_status_example"; // string | 
$customer_uuid = "customer_uuid_example"; // string | 
$payment_provider = "payment_provider_example"; // string | 
$payment_method = "payment_method_example"; // string | 
$active = true; // bool | 
$deleted = true; // bool | 
$is_b_to_b = true; // bool | 
$date_of_validity_before = "date_of_validity_before_example"; // string | 
$date_of_validity_strictly_before = "date_of_validity_strictly_before_example"; // string | 
$date_of_validity_after = "date_of_validity_after_example"; // string | 
$date_of_validity_strictly_after = "date_of_validity_strictly_after_example"; // string | 
$created_at_before = "created_at_before_example"; // string | 
$created_at_strictly_before = "created_at_strictly_before_example"; // string | 
$created_at_after = "created_at_after_example"; // string | 
$created_at_strictly_after = "created_at_strictly_after_example"; // string | 
$order_status = "order_status_example"; // string | 
$order_payment_status = "order_payment_status_example"; // string | 
$order_created_at = "order_created_at_example"; // string | 
$order_updated_at = "order_updated_at_example"; // string | 
$order_payment_date = "order_payment_date_example"; // string | 
$order_order_code = "order_order_code_example"; // string | 
$order_customer_uuid = "order_customer_uuid_example"; // string | 
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page
$pagination = true; // bool | Enable or disable pagination

try {
    $result = $apiInstance->getOrderCollection($properties, $custom_data, $internal_comment, $customer_comment, $billing_address_full_name, $billing_address_company_name, $payment_comment, $order_code, $status, $payment_status, $customer_uuid, $payment_provider, $payment_method, $active, $deleted, $is_b_to_b, $date_of_validity_before, $date_of_validity_strictly_before, $date_of_validity_after, $date_of_validity_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $order_status, $order_payment_status, $order_created_at, $order_updated_at, $order_payment_date, $order_order_code, $order_customer_uuid, $page, $items_per_page, $pagination);
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
 **custom_data** | **string**|  | [optional]
 **internal_comment** | **string**|  | [optional]
 **customer_comment** | **string**|  | [optional]
 **billing_address_full_name** | **string**|  | [optional]
 **billing_address_company_name** | **string**|  | [optional]
 **payment_comment** | **string**|  | [optional]
 **order_code** | **string**|  | [optional]
 **status** | **string**|  | [optional]
 **payment_status** | **string**|  | [optional]
 **customer_uuid** | **string**|  | [optional]
 **payment_provider** | **string**|  | [optional]
 **payment_method** | **string**|  | [optional]
 **active** | **bool**|  | [optional]
 **deleted** | **bool**|  | [optional]
 **is_b_to_b** | **bool**|  | [optional]
 **date_of_validity_before** | **string**|  | [optional]
 **date_of_validity_strictly_before** | **string**|  | [optional]
 **date_of_validity_after** | **string**|  | [optional]
 **date_of_validity_strictly_after** | **string**|  | [optional]
 **created_at_before** | **string**|  | [optional]
 **created_at_strictly_before** | **string**|  | [optional]
 **created_at_after** | **string**|  | [optional]
 **created_at_strictly_after** | **string**|  | [optional]
 **order_status** | **string**|  | [optional]
 **order_payment_status** | **string**|  | [optional]
 **order_created_at** | **string**|  | [optional]
 **order_updated_at** | **string**|  | [optional]
 **order_payment_date** | **string**|  | [optional]
 **order_order_code** | **string**|  | [optional]
 **order_customer_uuid** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional] [default to 1]
 **items_per_page** | **int**| The number of items per page | [optional] [default to 30]
 **pagination** | **bool**| Enable or disable pagination | [optional]

### Return type

[**\VentureLeap\OrderService\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

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
$body = new \VentureLeap\OrderService\Model\OrderJsonldOrderWrite(); // \VentureLeap\OrderService\Model\OrderJsonldOrderWrite | The new Order resource

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
 **body** | [**\VentureLeap\OrderService\Model\OrderJsonldOrderWrite**](../Model/OrderJsonldOrderWrite.md)| The new Order resource | [optional]

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
$body = new \VentureLeap\OrderService\Model\OrderJsonldOrderWrite(); // \VentureLeap\OrderService\Model\OrderJsonldOrderWrite | The updated Order resource

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
 **body** | [**\VentureLeap\OrderService\Model\OrderJsonldOrderWrite**](../Model/OrderJsonldOrderWrite.md)| The updated Order resource | [optional]

### Return type

[**\VentureLeap\OrderService\Model\OrderJsonldOrderRead**](../Model/OrderJsonldOrderRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

