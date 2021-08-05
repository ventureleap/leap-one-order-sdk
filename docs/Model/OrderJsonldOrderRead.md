# OrderJsonldOrderRead

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**context** | **string** |  | [optional] 
**id** | **string** |  | [optional] 
**type** | **string** |  | [optional] 
**uuid** | **string** |  | [optional] 
**order_code** | **string** |  | [optional] 
**status** | **string** |  | 
**payment_status** | **string** |  | 
**payment_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**customer_uuid** | **string** |  | 
**internal_comment** | **string** |  | [optional] 
**customer_comment** | **string** |  | [optional] 
**order_products** | [**\VentureLeap\OrderService\Model\OrderProductJsonldOrderRead[]**](OrderProductJsonldOrderRead.md) |  | [optional] 
**logs** | [**\VentureLeap\OrderService\Model\OrderLogJsonldOrderRead[]**](OrderLogJsonldOrderRead.md) |  | [optional] 
**date_of_validity** | [**\DateTime**](\DateTime.md) |  | [optional] 
**billing_address** | [**\VentureLeap\OrderService\Model\BillingAddressJsonldOrderRead**](BillingAddressJsonldOrderRead.md) |  | 
**order_vouchers** | [**\VentureLeap\OrderService\Model\OrderVoucherJsonldOrderRead[]**](OrderVoucherJsonldOrderRead.md) |  | [optional] 
**payment_provider** | **string** |  | [optional] 
**payment_method** | **string** |  | [optional] 
**payment_reference** | **string** |  | [optional] 
**payment_comment** | **string** |  | [optional] 
**is_b_to_b** | **bool** |  | [optional] 
**application_id** | **string** |  | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**active** | **bool** |  | [optional] 
**deleted** | **bool** |  | [optional] 
**custom_data** | **object** |  | [optional] 
**total_gross_amount** | **int** |  | [optional] 
**total_net_amount** | **int** |  | [optional] 
**total_vat_amount** | **int** |  | [optional] 
**total_voucher_gross_amount** | **int** |  | [optional] 
**total_voucher_net_amount** | **int** |  | [optional] 
**total_voucher_vat_amount** | **int** |  | [optional] 
**total_products_gross_amount** | **int** |  | [optional] 
**total_products_net_amount** | **int** |  | [optional] 
**total_products_vat_amount** | **int** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

