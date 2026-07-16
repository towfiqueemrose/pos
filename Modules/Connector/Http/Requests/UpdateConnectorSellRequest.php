<?php

namespace Modules\Connector\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateConnectorSellRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'contact_id' => 'sometimes|required|integer|exists:contacts,id',
            'transaction_date' => 'nullable|date_format:Y-m-d H:i:s',
            'status' => 'nullable|string|in:final,draft',
            'sub_status' => 'nullable|string|in:quotation,proforma',
            'is_quotation' => 'nullable|boolean',
            'tax_rate_id' => 'nullable|integer|exists:tax_rates,id',
            'discount_amount' => 'nullable|numeric|min:0',
            'discount_type' => 'nullable|string|in:fixed,percentage',
            'sale_note' => 'nullable|string',
            'source' => 'nullable|string|max:255',
            'staff_note' => 'nullable|string',
            'is_suspend' => 'nullable|boolean',
            'commission_agent' => 'nullable|integer|exists:users,id',
            'shipping_details' => 'nullable|string',
            'shipping_address' => 'nullable|string',
            'shipping_status' => 'nullable|string|in:ordered,packed,shipped,delivered,cancelled',
            'delivered_to' => 'nullable|string|max:255',
            'shipping_charges' => 'nullable|numeric|min:0',
            'packing_charge' => 'nullable|numeric|min:0',
            'exchange_rate' => 'nullable|numeric|min:0',
            'selling_price_group_id' => 'nullable|integer',
            'pay_term_number' => 'nullable|integer|min:0',
            'pay_term_type' => 'nullable|string|in:days,months',
            'is_recurring' => 'nullable|boolean',
            'recur_interval' => 'nullable|integer|min:0',
            'recur_interval_type' => 'nullable|string|in:days,months,years',
            'subscription_repeat_on' => 'nullable|integer|min:1|max:30',
            'subscription_no' => 'nullable|string|max:255',
            'recur_repetitions' => 'nullable|integer|min:0',
            'rp_redeemed' => 'nullable|integer|min:0',
            'rp_redeemed_amount' => 'nullable|numeric|min:0',
            'types_of_service_id' => 'nullable|integer|exists:types_of_services,id',
            'service_custom_field_1' => 'nullable|string',
            'service_custom_field_2' => 'nullable|string',
            'service_custom_field_3' => 'nullable|string',
            'service_custom_field_4' => 'nullable|string',
            'service_custom_field_5' => 'nullable|string',
            'service_custom_field_6' => 'nullable|string',
            'round_off_amount' => 'nullable|numeric',
            'table_id' => 'nullable|integer',
            'service_staff_id' => 'nullable|integer|exists:users,id',
            'change_return' => 'nullable|numeric|min:0',
            'change_return_id' => 'nullable|integer',
            'products' => 'sometimes|required|array',
            'products.*.sell_line_id' => 'nullable|integer',
            'products.*.product_id' => 'required_with:products|integer|exists:products,id',
            'products.*.variation_id' => 'required_with:products|integer|exists:variations,id',
            'products.*.quantity' => 'required_with:products|numeric|min:0',
            'products.*.unit_price' => 'nullable|numeric|min:0',
            'products.*.tax_rate_id' => 'nullable|integer|exists:tax_rates,id',
            'products.*.discount_amount' => 'nullable|numeric|min:0',
            'products.*.discount_type' => 'nullable|string|in:fixed,percentage',
            'products.*.sub_unit_id' => 'nullable|integer',
            'products.*.res_service_staff_id' => 'nullable|integer|exists:users,id',
            'products.*.note' => 'nullable|string',
            'payments' => 'nullable|array',
            'payments.*.payment_id' => 'nullable|integer',
            'payments.*.amount' => 'required_with:payments|numeric|min:0',
            'payments.*.method' => 'nullable|string|in:cash,card,cheque,bank_transfer,other,custom_pay_1,custom_pay_2,custom_pay_3',
            'payments.*.account_id' => 'nullable|integer',
            'payments.*.card_number' => 'nullable|string|max:255',
            'payments.*.card_holder_name' => 'nullable|string|max:255',
            'payments.*.card_transaction_number' => 'nullable|string|max:255',
            'payments.*.card_type' => 'nullable|string|max:255',
            'payments.*.card_month' => 'nullable|string|max:255',
            'payments.*.card_year' => 'nullable|string|max:255',
            'payments.*.card_security' => 'nullable|string|max:255',
            'payments.*.transaction_no_1' => 'nullable|string|max:255',
            'payments.*.transaction_no_2' => 'nullable|string|max:255',
            'payments.*.transaction_no_3' => 'nullable|string|max:255',
            'payments.*.note' => 'nullable|string',
            'payments.*.cheque_number' => 'nullable|string|max:255',
            'payments.*.bank_account_number' => 'nullable|string|max:255',
        ];
    }
}
