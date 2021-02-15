# VentureLeap\OrderService\VoucherApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteVoucherItem**](VoucherApi.md#deletevoucheritem) | **DELETE** /order/vouchers/{id} | Removes the Voucher resource.
[**getVoucherCollection**](VoucherApi.md#getvouchercollection) | **GET** /order/vouchers | Retrieves the collection of Voucher resources.
[**getVoucherItem**](VoucherApi.md#getvoucheritem) | **GET** /order/vouchers/{id} | Retrieves a Voucher resource.
[**postVoucherCollection**](VoucherApi.md#postvouchercollection) | **POST** /order/vouchers | Creates a Voucher resource.
[**putVoucherItem**](VoucherApi.md#putvoucheritem) | **PUT** /order/vouchers/{id} | Replaces the Voucher resource.

# **deleteVoucherItem**
> deleteVoucherItem($id)

Removes the Voucher resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = VentureLeap\OrderService\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\OrderService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VentureLeap\OrderService\Api\VoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $apiInstance->deleteVoucherItem($id);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->deleteVoucherItem: ', $e->getMessage(), PHP_EOL;
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

# **getVoucherCollection**
> \VentureLeap\OrderService\Model\InlineResponse2004 getVoucherCollection($properties, $custom_data, $voucher_code, $voucher_type, $value, $quantity, $quantity_per_person, $active, $deleted, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $valid_from_before, $valid_from_strictly_before, $valid_from_after, $valid_from_strictly_after, $valid_to_before, $valid_to_strictly_before, $valid_to_after, $valid_to_strictly_after, $order_voucher_type, $order_voucher_code, $order_created_at, $order_updated_at, $order_active, $order_deleted, $order_valid_from, $order_valid_to, $page)

Retrieves the collection of Voucher resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = VentureLeap\OrderService\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\OrderService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VentureLeap\OrderService\Api\VoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$properties = array("properties_example"); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$custom_data = "custom_data_example"; // string | 
$voucher_code = "voucher_code_example"; // string | 
$voucher_type = "voucher_type_example"; // string | 
$value = "value_example"; // string | 
$quantity = "quantity_example"; // string | 
$quantity_per_person = "quantity_per_person_example"; // string | 
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
$valid_from_before = "valid_from_before_example"; // string | 
$valid_from_strictly_before = "valid_from_strictly_before_example"; // string | 
$valid_from_after = "valid_from_after_example"; // string | 
$valid_from_strictly_after = "valid_from_strictly_after_example"; // string | 
$valid_to_before = "valid_to_before_example"; // string | 
$valid_to_strictly_before = "valid_to_strictly_before_example"; // string | 
$valid_to_after = "valid_to_after_example"; // string | 
$valid_to_strictly_after = "valid_to_strictly_after_example"; // string | 
$order_voucher_type = "order_voucher_type_example"; // string | 
$order_voucher_code = "order_voucher_code_example"; // string | 
$order_created_at = "order_created_at_example"; // string | 
$order_updated_at = "order_updated_at_example"; // string | 
$order_active = "order_active_example"; // string | 
$order_deleted = "order_deleted_example"; // string | 
$order_valid_from = "order_valid_from_example"; // string | 
$order_valid_to = "order_valid_to_example"; // string | 
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->getVoucherCollection($properties, $custom_data, $voucher_code, $voucher_type, $value, $quantity, $quantity_per_person, $active, $deleted, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $valid_from_before, $valid_from_strictly_before, $valid_from_after, $valid_from_strictly_after, $valid_to_before, $valid_to_strictly_before, $valid_to_after, $valid_to_strictly_after, $order_voucher_type, $order_voucher_code, $order_created_at, $order_updated_at, $order_active, $order_deleted, $order_valid_from, $order_valid_to, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->getVoucherCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional]
 **custom_data** | **string**|  | [optional]
 **voucher_code** | **string**|  | [optional]
 **voucher_type** | **string**|  | [optional]
 **value** | **string**|  | [optional]
 **quantity** | **string**|  | [optional]
 **quantity_per_person** | **string**|  | [optional]
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
 **valid_from_before** | **string**|  | [optional]
 **valid_from_strictly_before** | **string**|  | [optional]
 **valid_from_after** | **string**|  | [optional]
 **valid_from_strictly_after** | **string**|  | [optional]
 **valid_to_before** | **string**|  | [optional]
 **valid_to_strictly_before** | **string**|  | [optional]
 **valid_to_after** | **string**|  | [optional]
 **valid_to_strictly_after** | **string**|  | [optional]
 **order_voucher_type** | **string**|  | [optional]
 **order_voucher_code** | **string**|  | [optional]
 **order_created_at** | **string**|  | [optional]
 **order_updated_at** | **string**|  | [optional]
 **order_active** | **string**|  | [optional]
 **order_deleted** | **string**|  | [optional]
 **order_valid_from** | **string**|  | [optional]
 **order_valid_to** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional] [default to 1]

### Return type

[**\VentureLeap\OrderService\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVoucherItem**
> \VentureLeap\OrderService\Model\VoucherJsonldVoucherRead getVoucherItem($id)

Retrieves a Voucher resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = VentureLeap\OrderService\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\OrderService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VentureLeap\OrderService\Api\VoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getVoucherItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->getVoucherItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\VentureLeap\OrderService\Model\VoucherJsonldVoucherRead**](../Model/VoucherJsonldVoucherRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postVoucherCollection**
> \VentureLeap\OrderService\Model\VoucherJsonldVoucherRead postVoucherCollection($body)

Creates a Voucher resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = VentureLeap\OrderService\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\OrderService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VentureLeap\OrderService\Api\VoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \VentureLeap\OrderService\Model\VoucherJsonldVoucherWrite(); // \VentureLeap\OrderService\Model\VoucherJsonldVoucherWrite | The new Voucher resource

try {
    $result = $apiInstance->postVoucherCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->postVoucherCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\VentureLeap\OrderService\Model\VoucherJsonldVoucherWrite**](../Model/VoucherJsonldVoucherWrite.md)| The new Voucher resource | [optional]

### Return type

[**\VentureLeap\OrderService\Model\VoucherJsonldVoucherRead**](../Model/VoucherJsonldVoucherRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putVoucherItem**
> \VentureLeap\OrderService\Model\VoucherJsonldVoucherRead putVoucherItem($id, $body)

Replaces the Voucher resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = VentureLeap\OrderService\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\OrderService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VentureLeap\OrderService\Api\VoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$body = new \VentureLeap\OrderService\Model\VoucherJsonldVoucherWrite(); // \VentureLeap\OrderService\Model\VoucherJsonldVoucherWrite | The updated Voucher resource

try {
    $result = $apiInstance->putVoucherItem($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->putVoucherItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\VentureLeap\OrderService\Model\VoucherJsonldVoucherWrite**](../Model/VoucherJsonldVoucherWrite.md)| The updated Voucher resource | [optional]

### Return type

[**\VentureLeap\OrderService\Model\VoucherJsonldVoucherRead**](../Model/VoucherJsonldVoucherRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

