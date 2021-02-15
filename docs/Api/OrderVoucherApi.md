# VentureLeap\OrderService\OrderVoucherApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteOrderVoucherItem**](OrderVoucherApi.md#deleteordervoucheritem) | **DELETE** /order/order_vouchers/{id} | Removes the OrderVoucher resource.
[**getOrderVoucherCollection**](OrderVoucherApi.md#getordervouchercollection) | **GET** /order/order_vouchers | Retrieves the collection of OrderVoucher resources.
[**getOrderVoucherItem**](OrderVoucherApi.md#getordervoucheritem) | **GET** /order/order_vouchers/{id} | Retrieves a OrderVoucher resource.
[**postOrderVoucherCollection**](OrderVoucherApi.md#postordervouchercollection) | **POST** /order/order_vouchers | Creates a OrderVoucher resource.
[**putOrderVoucherItem**](OrderVoucherApi.md#putordervoucheritem) | **PUT** /order/order_vouchers/{id} | Replaces the OrderVoucher resource.

# **deleteOrderVoucherItem**
> deleteOrderVoucherItem($id)

Removes the OrderVoucher resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = VentureLeap\OrderService\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\OrderService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VentureLeap\OrderService\Api\OrderVoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $apiInstance->deleteOrderVoucherItem($id);
} catch (Exception $e) {
    echo 'Exception when calling OrderVoucherApi->deleteOrderVoucherItem: ', $e->getMessage(), PHP_EOL;
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

# **getOrderVoucherCollection**
> \VentureLeap\OrderService\Model\InlineResponse2002 getOrderVoucherCollection($properties, $custom_data, $voucher_code, $voucher_code, $value, $value, $voucher_type, $voucher_type, $valid_from, $valid_from, $valid_to, $valid_to, $uuid, $uuid, $application_id, $application_id, $created_at, $created_at, $updated_at, $updated_at, $active, $active, $deleted, $deleted, $custom_data, $custom_data, $active, $deleted, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $order_created_at, $order_updated_at, $order_active, $order_deleted, $page)

Retrieves the collection of OrderVoucher resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = VentureLeap\OrderService\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\OrderService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VentureLeap\OrderService\Api\OrderVoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$properties = array("properties_example"); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$custom_data = "custom_data_example"; // string | 
$voucher_code = "voucher_code_example"; // string | 
$voucher_code = array("voucher_code_example"); // string[] | 
$value = 56; // int | 
$value = array(56); // int[] | 
$voucher_type = "voucher_type_example"; // string | 
$voucher_type = array("voucher_type_example"); // string[] | 
$valid_from = "valid_from_example"; // string | 
$valid_from = "valid_from_example"; // string | 
$valid_to = "valid_to_example"; // string | 
$valid_to = "valid_to_example"; // string | 
$uuid = "uuid_example"; // string | 
$uuid = array("uuid_example"); // string[] | 
$application_id = "application_id_example"; // string | 
$application_id = array("application_id_example"); // string[] | 
$created_at = "created_at_example"; // string | 
$created_at = "created_at_example"; // string | 
$updated_at = "updated_at_example"; // string | 
$updated_at = "updated_at_example"; // string | 
$active = true; // bool | 
$active = array(True); // bool[] | 
$deleted = true; // bool | 
$deleted = array(True); // bool[] | 
$custom_data = "custom_data_example"; // string | 
$custom_data = array("custom_data_example"); // string[] | 
$active = true; // bool | 
$deleted = true; // bool | 
$created_at_before = "created_at_before_example"; // string | 
$created_at_strictly_before = "created_at_strictly_before_example"; // string | 
$created_at_after = "created_at_after_example"; // string | 
$created_at_strictly_after = "created_at_strictly_after_example"; // string | 
$updated_at_before = "updated_at_before_example"; // string | 
$updated_at_strictly_before = "updated_at_strictly_before_example"; // string | 
$updated_at_after = "updated_at_after_example"; // string | 
$updated_at_strictly_after = "updated_at_strictly_after_example"; // string | 
$order_created_at = "order_created_at_example"; // string | 
$order_updated_at = "order_updated_at_example"; // string | 
$order_active = "order_active_example"; // string | 
$order_deleted = "order_deleted_example"; // string | 
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->getOrderVoucherCollection($properties, $custom_data, $voucher_code, $voucher_code, $value, $value, $voucher_type, $voucher_type, $valid_from, $valid_from, $valid_to, $valid_to, $uuid, $uuid, $application_id, $application_id, $created_at, $created_at, $updated_at, $updated_at, $active, $active, $deleted, $deleted, $custom_data, $custom_data, $active, $deleted, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $order_created_at, $order_updated_at, $order_active, $order_deleted, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderVoucherApi->getOrderVoucherCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional]
 **custom_data** | **string**|  | [optional]
 **voucher_code** | **string**|  | [optional]
 **voucher_code** | [**string[]**](../Model/string.md)|  | [optional]
 **value** | **int**|  | [optional]
 **value** | [**int[]**](../Model/int.md)|  | [optional]
 **voucher_type** | **string**|  | [optional]
 **voucher_type** | [**string[]**](../Model/string.md)|  | [optional]
 **valid_from** | **string**|  | [optional]
 **valid_from** | **string**|  | [optional]
 **valid_to** | **string**|  | [optional]
 **valid_to** | **string**|  | [optional]
 **uuid** | **string**|  | [optional]
 **uuid** | [**string[]**](../Model/string.md)|  | [optional]
 **application_id** | **string**|  | [optional]
 **application_id** | [**string[]**](../Model/string.md)|  | [optional]
 **created_at** | **string**|  | [optional]
 **created_at** | **string**|  | [optional]
 **updated_at** | **string**|  | [optional]
 **updated_at** | **string**|  | [optional]
 **active** | **bool**|  | [optional]
 **active** | [**bool[]**](../Model/bool.md)|  | [optional]
 **deleted** | **bool**|  | [optional]
 **deleted** | [**bool[]**](../Model/bool.md)|  | [optional]
 **custom_data** | **string**|  | [optional]
 **custom_data** | [**string[]**](../Model/string.md)|  | [optional]
 **active** | **bool**|  | [optional]
 **deleted** | **bool**|  | [optional]
 **created_at_before** | **string**|  | [optional]
 **created_at_strictly_before** | **string**|  | [optional]
 **created_at_after** | **string**|  | [optional]
 **created_at_strictly_after** | **string**|  | [optional]
 **updated_at_before** | **string**|  | [optional]
 **updated_at_strictly_before** | **string**|  | [optional]
 **updated_at_after** | **string**|  | [optional]
 **updated_at_strictly_after** | **string**|  | [optional]
 **order_created_at** | **string**|  | [optional]
 **order_updated_at** | **string**|  | [optional]
 **order_active** | **string**|  | [optional]
 **order_deleted** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional] [default to 1]

### Return type

[**\VentureLeap\OrderService\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderVoucherItem**
> \VentureLeap\OrderService\Model\OrderVoucherJsonldOrderVoucherRead getOrderVoucherItem($id)

Retrieves a OrderVoucher resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = VentureLeap\OrderService\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\OrderService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VentureLeap\OrderService\Api\OrderVoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getOrderVoucherItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderVoucherApi->getOrderVoucherItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\VentureLeap\OrderService\Model\OrderVoucherJsonldOrderVoucherRead**](../Model/OrderVoucherJsonldOrderVoucherRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postOrderVoucherCollection**
> \VentureLeap\OrderService\Model\OrderVoucherJsonldOrderVoucherRead postOrderVoucherCollection($body)

Creates a OrderVoucher resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = VentureLeap\OrderService\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\OrderService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VentureLeap\OrderService\Api\OrderVoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \VentureLeap\OrderService\Model\OrderVoucherJsonldOrderVoucherWrite(); // \VentureLeap\OrderService\Model\OrderVoucherJsonldOrderVoucherWrite | The new OrderVoucher resource

try {
    $result = $apiInstance->postOrderVoucherCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderVoucherApi->postOrderVoucherCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\VentureLeap\OrderService\Model\OrderVoucherJsonldOrderVoucherWrite**](../Model/OrderVoucherJsonldOrderVoucherWrite.md)| The new OrderVoucher resource | [optional]

### Return type

[**\VentureLeap\OrderService\Model\OrderVoucherJsonldOrderVoucherRead**](../Model/OrderVoucherJsonldOrderVoucherRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putOrderVoucherItem**
> \VentureLeap\OrderService\Model\OrderVoucherJsonldOrderVoucherRead putOrderVoucherItem($id, $body)

Replaces the OrderVoucher resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = VentureLeap\OrderService\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\OrderService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VentureLeap\OrderService\Api\OrderVoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$body = new \VentureLeap\OrderService\Model\OrderVoucherJsonldOrderVoucherWrite(); // \VentureLeap\OrderService\Model\OrderVoucherJsonldOrderVoucherWrite | The updated OrderVoucher resource

try {
    $result = $apiInstance->putOrderVoucherItem($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderVoucherApi->putOrderVoucherItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\VentureLeap\OrderService\Model\OrderVoucherJsonldOrderVoucherWrite**](../Model/OrderVoucherJsonldOrderVoucherWrite.md)| The updated OrderVoucher resource | [optional]

### Return type

[**\VentureLeap\OrderService\Model\OrderVoucherJsonldOrderVoucherRead**](../Model/OrderVoucherJsonldOrderVoucherRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

