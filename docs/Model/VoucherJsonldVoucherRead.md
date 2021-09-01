# VoucherJsonldVoucherRead

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**context** | [**OneOfVoucherJsonldVoucherReadContext**](OneOfVoucherJsonldVoucherReadContext.md) |  | [optional] 
**id** | **string** |  | [optional] 
**type** | **string** |  | [optional] 
**uuid** | **string** |  | [optional] 
**voucher_code** | **string** |  | [optional] 
**voucher_comment** | **string** |  | [optional] 
**value** | **int** |  | 
**voucher_type** | **string** | percentage/ammount | 
**valid_from** | [**\DateTime**](\DateTime.md) |  | 
**valid_to** | [**\DateTime**](\DateTime.md) |  | 
**quantity** | **int** |  | [default to 1]
**quantity_per_person** | **int** |  | [default to 1]
**order_vouchers** | [**\VentureLeap\OrderService\Model\OrderVoucherJsonldVoucherRead[]**](OrderVoucherJsonldVoucherRead.md) |  | [optional] 
**application_id** | **string** |  | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**active** | **bool** |  | [optional] [default to true]
**deleted** | **bool** |  | [optional] 
**custom_data** | **object** |  | [optional] 
**quantity_used** | **int** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

