# OrderJsonldOrderWrite

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**context** | **string** |  | [optional] 
**id** | **string** |  | [optional] 
**type** | **string** |  | [optional] 
**status** | **string** |  | 
**payment_status** | **string** |  | 
**payment_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**customer_uuid** | **string** |  | 
**internal_comment** | **string** |  | [optional] 
**customer_comment** | **string** |  | [optional] 
**order_products** | [**\VentureLeap\OrderService\Model\OrderProductJsonldOrderWrite[]**](OrderProductJsonldOrderWrite.md) |  | [optional] 
**date_of_validity** | [**\DateTime**](\DateTime.md) |  | [optional] 
**billing_address** | [**\VentureLeap\OrderService\Model\BillingAddressJsonldOrderWrite**](BillingAddressJsonldOrderWrite.md) |  | [optional] 
**payment_provider** | **string** |  | [optional] 
**payment_method** | **string** |  | [optional] 
**payment_reference** | **string** |  | [optional] 
**payment_comment** | **string** |  | [optional] 
**is_b_to_b** | **bool** |  | [optional] 
**active** | **bool** |  | [optional] [default to true]
**deleted** | **bool** |  | [optional] 
**custom_data** | **object** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

