<?php

namespace Modules\Connector\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreConnectorSellRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'sells' => 'required|array',
            'sells.*.location_id' => 'required|integer|exists:business_locations,id',
            'sells.*.contact_id' => 'required|integer|exists:contacts,id',
            'sells.*.transaction_date' => 'nullable|date_format:Y-m-d H:i:s',
            'sells.*.invoice_no' => 'nullable|string|max:255',
            'sells.*.source' => 'nullable|string|max:255',
            'sells.*.status' => 'nullable|string|in:final,draft',
            'sells.*.sub_status' => 'nullable|string|in:quotation,proforma',
            'sells.*.is_quotation' => 'nullable|boolean',
            'sells.*.tax_rate_id' => 'nullable|integer|exists:tax_rates,id',
            'sells.*.discount_amount' => 'nullable|numeric|min:0',
            'sells.*.discount_type' => 'nullable|string|in:fixed,percentage',
            'sells.*.sale_note' => 'nullable|string',
            'sells.*.staff_note' => 'nullable|string',
            'sells.*.commission_agent' => 'nullable|integer|exists:users,id',
            'sells.*.shipping_details' => 'nullable|string',
            'sells.*.shipping_address' => 'nullable|string',
            'sells.*.shipping_status' => 'nullable|string|in:ordered,packed,shipped,delivered,cancelled',
            'sells.*.delivered_to' => 'nullable|string|max:255',
            'sells.*.shipping_charges' => 'nullable|numeric|min:0',
            'sells.*.packing_charge' => 'nullable|numeric|min:0',
            'sells.*.exchange_rate' => 'nullable|numeric|min:0',
            'sells.*.selling_price_group_id' => 'nullable|integer',
            'sells.*.pay_term_number' => 'nullable|integer|min:0',
            'sells.*.pay_term_type' => 'nullable|string|in:days,months',
            'sells.*.is_suspend' => 'nullable|boolean',
            'sells.*.is_recurring' => 'nullable|boolean',
            'sells.*.recur_interval' => 'nullable|integer|min:0',
            'sells.*.recur_interval_type' => 'nullable|string|in:days,months,years',
            'sells.*.subscription_repeat_on' => 'nullable|integer|min:1|max:30',
            'sells.*.subscription_no' => 'nullable|string|max:255',
            'sells.*.recur_repetitions' => 'nullable|integer|min:0',
            'sells.*.rp_redeemed' => 'nullable|integer|min:0',
            'sells.*.rp_redeemed_amount' => 'nullable|numeric|min:0',
            'sells.*.types_of_service_id' => 'nullable|integer|exists:types_of_services,id',
            'sells.*.service_custom_field_1' => 'nullable|string',
            'sells.*.service_custom_field_2' => 'nullable|string',
            'sells.*.service_custom_field_3' => 'nullable|string',
            'sells.*.service_custom_field_4' => 'nullable|string',
            'sells.*.service_custom_field_5' => 'nullable|string',
            'sells.*.service_custom_field_6' => 'nullable|string',
            'sells.*.round_off_amount' => 'nullable|numeric',
            'sells.*.table_id' => 'nullable|integer',
            'sells.*.service_staff_id' => 'nullable|integer|exists:users,id',
            'sells.*.change_return' => 'nullable|numeric|min:0',
            'sells.*.products' => 'required|array',
            'sells.*.products.*.product_id' => 'required|integer|exists:products,id',
            'sells.*.products.*.variation_id' => 'required|integer|exists:variations,id',
            'sells.*.products.*.quantity' => 'required|numeric|min:0',
            'sells.*.products.*.unit_price' => 'nullable|numeric|min:0',
            'sells.*.products.*.tax_rate_id' => 'nullable|integer|exists:tax_rates,id',
            'sells.*.products.*.discount_amount' => 'nullable|numeric|min:0',
            'sells.*.products.*.discount_type' => 'nullable|string|in:fixed,percentage',
            'sells.*.products.*.sub_unit_id' => 'nullable|integer',
            'sells.*.products.*.res_service_staff_id' => 'nullable|integer|exists:users,id',
            'sells.*.products.*.note' => 'nullable|string',
            'sells.*.payments' => 'nullable|array',
            'sells.*.payments.*.amount' => 'required_with:sells.*.payments|numeric|min:0',
            'sells.*.payments.*.method' => 'nullable|string|in:cash,card,cheque,bank_transfer,other,custom_pay_1,custom_pay_2,custom_pay_3',
            'sells.*.payments.*.account_id' => 'nullable|integer',
            'sells.*.payments.*.card_number' => 'nullable|string|max:255',
            'sells.*.payments.*.card_holder_name' => 'nullable|string|max:255',
            'sells.*.payments.*.card_transaction_number' => 'nullable|string|max:255',
            'sells.*.payments.*.card_type' => 'nullable|string|max:255',
            'sells.*.payments.*.card_month' => 'nullable|string|max:255',
            'sells.*.payments.*.card_year' => 'nullable|string|max:255',
            'sells.*.payments.*.card_security' => 'nullable|string|max:255',
            'sells.*.payments.*.transaction_no_1' => 'nullable|string|max:255',
            'sells.*.payments.*.transaction_no_2' => 'nullable|string|max:255',
            'sells.*.payments.*.transaction_no_3' => 'nullable|string|max:255',
            'sells.*.payments.*.bank_account_number' => 'nullable|string|max:255',
            'sells.*.payments.*.note' => 'nullable|string',
            'sells.*.payments.*.cheque_number' => 'nullable|string|max:255',
        ];
    }
}
