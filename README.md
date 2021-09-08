# SwaggerClient-php
No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 2.0.0
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/ventureleap/leap-one-order-sdk.git"
    }
  ],
  "require": {
    "ventureleap/leap-one-order-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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
$uuid = "uuid_example"; // string | Resource identifier

try {
    $result = $apiInstance->getBillingAddressItem($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingAddressApi->getBillingAddressItem: ', $e->getMessage(), PHP_EOL;
}

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
$body = new \VentureLeap\OrderService\Model\BillingAddressJsonldBillingAddressWrite(); // \VentureLeap\OrderService\Model\BillingAddressJsonldBillingAddressWrite | The updated BillingAddress resource
$uuid = "uuid_example"; // string | Resource identifier

try {
    $result = $apiInstance->putBillingAddressItem($body, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingAddressApi->putBillingAddressItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to */*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BillingAddressApi* | [**getBillingAddressCollection**](docs/Api/BillingAddressApi.md#getbillingaddresscollection) | **GET** /order/billing_addresses | Retrieves the collection of BillingAddress resources.
*BillingAddressApi* | [**getBillingAddressItem**](docs/Api/BillingAddressApi.md#getbillingaddressitem) | **GET** /order/billing_addresses/{uuid} | Retrieves a BillingAddress resource.
*BillingAddressApi* | [**postBillingAddressCollection**](docs/Api/BillingAddressApi.md#postbillingaddresscollection) | **POST** /order/billing_addresses | Creates a BillingAddress resource.
*BillingAddressApi* | [**putBillingAddressItem**](docs/Api/BillingAddressApi.md#putbillingaddressitem) | **PUT** /order/billing_addresses/{uuid} | Replaces the BillingAddress resource.
*ConfigurationEntryApi* | [**deleteConfigurationEntryItem**](docs/Api/ConfigurationEntryApi.md#deleteconfigurationentryitem) | **DELETE** /order/configuration_entries/{uuid} | Removes the ConfigurationEntry resource.
*ConfigurationEntryApi* | [**getConfigurationEntryCollection**](docs/Api/ConfigurationEntryApi.md#getconfigurationentrycollection) | **GET** /order/configuration_entries | Retrieves the collection of ConfigurationEntry resources.
*ConfigurationEntryApi* | [**getConfigurationEntryItem**](docs/Api/ConfigurationEntryApi.md#getconfigurationentryitem) | **GET** /order/configuration_entries/{uuid} | Retrieves a ConfigurationEntry resource.
*ConfigurationEntryApi* | [**postConfigurationEntryCollection**](docs/Api/ConfigurationEntryApi.md#postconfigurationentrycollection) | **POST** /order/configuration_entries | Creates a ConfigurationEntry resource.
*ConfigurationEntryApi* | [**putConfigurationEntryItem**](docs/Api/ConfigurationEntryApi.md#putconfigurationentryitem) | **PUT** /order/configuration_entries/{uuid} | Replaces the ConfigurationEntry resource.
*OrderApi* | [**deleteOrderItem**](docs/Api/OrderApi.md#deleteorderitem) | **DELETE** /order/orders/{uuid} | Removes the Order resource.
*OrderApi* | [**getOrderCollection**](docs/Api/OrderApi.md#getordercollection) | **GET** /order/orders | Retrieves the collection of Order resources.
*OrderApi* | [**getOrderItem**](docs/Api/OrderApi.md#getorderitem) | **GET** /order/orders/{uuid} | Retrieves a Order resource.
*OrderApi* | [**postOrderCollection**](docs/Api/OrderApi.md#postordercollection) | **POST** /order/orders | Creates a Order resource.
*OrderApi* | [**putOrderItem**](docs/Api/OrderApi.md#putorderitem) | **PUT** /order/orders/{uuid} | Replaces the Order resource.
*OrderProductApi* | [**deleteOrderProductItem**](docs/Api/OrderProductApi.md#deleteorderproductitem) | **DELETE** /order/order_products/{uuid} | Removes the OrderProduct resource.
*OrderProductApi* | [**getOrderProductCollection**](docs/Api/OrderProductApi.md#getorderproductcollection) | **GET** /order/order_products | Retrieves the collection of OrderProduct resources.
*OrderProductApi* | [**getOrderProductItem**](docs/Api/OrderProductApi.md#getorderproductitem) | **GET** /order/order_products/{uuid} | Retrieves a OrderProduct resource.
*OrderProductApi* | [**postOrderProductCollection**](docs/Api/OrderProductApi.md#postorderproductcollection) | **POST** /order/order_products | Creates a OrderProduct resource.
*OrderProductApi* | [**putOrderProductItem**](docs/Api/OrderProductApi.md#putorderproductitem) | **PUT** /order/order_products/{uuid} | Replaces the OrderProduct resource.
*OrderVoucherApi* | [**deleteOrderVoucherItem**](docs/Api/OrderVoucherApi.md#deleteordervoucheritem) | **DELETE** /order/order_vouchers/{uuid} | Removes the OrderVoucher resource.
*OrderVoucherApi* | [**getOrderVoucherCollection**](docs/Api/OrderVoucherApi.md#getordervouchercollection) | **GET** /order/order_vouchers | Retrieves the collection of OrderVoucher resources.
*OrderVoucherApi* | [**getOrderVoucherItem**](docs/Api/OrderVoucherApi.md#getordervoucheritem) | **GET** /order/order_vouchers/{uuid} | Retrieves a OrderVoucher resource.
*OrderVoucherApi* | [**postOrderVoucherCollection**](docs/Api/OrderVoucherApi.md#postordervouchercollection) | **POST** /order/order_vouchers | Creates a OrderVoucher resource.
*OrderVoucherApi* | [**putOrderVoucherItem**](docs/Api/OrderVoucherApi.md#putordervoucheritem) | **PUT** /order/order_vouchers/{uuid} | Replaces the OrderVoucher resource.
*VoucherApi* | [**deleteVoucherItem**](docs/Api/VoucherApi.md#deletevoucheritem) | **DELETE** /order/vouchers/{uuid} | Removes the Voucher resource.
*VoucherApi* | [**getVoucherCollection**](docs/Api/VoucherApi.md#getvouchercollection) | **GET** /order/vouchers | Retrieves the collection of Voucher resources.
*VoucherApi* | [**getVoucherItem**](docs/Api/VoucherApi.md#getvoucheritem) | **GET** /order/vouchers/{uuid} | Retrieves a Voucher resource.
*VoucherApi* | [**postVoucherCollection**](docs/Api/VoucherApi.md#postvouchercollection) | **POST** /order/vouchers | Creates a Voucher resource.
*VoucherApi* | [**putVoucherItem**](docs/Api/VoucherApi.md#putvoucheritem) | **PUT** /order/vouchers/{uuid} | Replaces the Voucher resource.

## Documentation For Models

 - [BillingAddressJsonldBillingAddressWrite](docs/Model/BillingAddressJsonldBillingAddressWrite.md)
 - [BillingAddressJsonldOrderRead](docs/Model/BillingAddressJsonldOrderRead.md)
 - [BillingAddressJsonldOrderWrite](docs/Model/BillingAddressJsonldOrderWrite.md)
 - [ConfigurationEntryJsonldConfigurationRead](docs/Model/ConfigurationEntryJsonldConfigurationRead.md)
 - [ConfigurationEntryJsonldConfigurationWrite](docs/Model/ConfigurationEntryJsonldConfigurationWrite.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse2001](docs/Model/InlineResponse2001.md)
 - [InlineResponse2002](docs/Model/InlineResponse2002.md)
 - [InlineResponse2003](docs/Model/InlineResponse2003.md)
 - [InlineResponse2004](docs/Model/InlineResponse2004.md)
 - [InlineResponse2005](docs/Model/InlineResponse2005.md)
 - [InlineResponse200Hydrasearch](docs/Model/InlineResponse200Hydrasearch.md)
 - [InlineResponse200HydrasearchHydramapping](docs/Model/InlineResponse200HydrasearchHydramapping.md)
 - [InlineResponse200Hydraview](docs/Model/InlineResponse200Hydraview.md)
 - [OrderJsonldOrderRead](docs/Model/OrderJsonldOrderRead.md)
 - [OrderJsonldOrderWrite](docs/Model/OrderJsonldOrderWrite.md)
 - [OrderLogJsonldOrderRead](docs/Model/OrderLogJsonldOrderRead.md)
 - [OrderProductJsonldOrderProductRead](docs/Model/OrderProductJsonldOrderProductRead.md)
 - [OrderProductJsonldOrderProductWrite](docs/Model/OrderProductJsonldOrderProductWrite.md)
 - [OrderProductJsonldOrderRead](docs/Model/OrderProductJsonldOrderRead.md)
 - [OrderProductJsonldOrderWrite](docs/Model/OrderProductJsonldOrderWrite.md)
 - [OrderVoucherJsonldOrderRead](docs/Model/OrderVoucherJsonldOrderRead.md)
 - [OrderVoucherJsonldOrderVoucherRead](docs/Model/OrderVoucherJsonldOrderVoucherRead.md)
 - [OrderVoucherJsonldOrderVoucherWrite](docs/Model/OrderVoucherJsonldOrderVoucherWrite.md)
 - [OrderVoucherJsonldVoucherRead](docs/Model/OrderVoucherJsonldVoucherRead.md)
 - [VoucherJsonldVoucherRead](docs/Model/VoucherJsonldVoucherRead.md)
 - [VoucherJsonldVoucherWrite](docs/Model/VoucherJsonldVoucherWrite.md)

## Documentation For Authorization


## apiKey

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Author



