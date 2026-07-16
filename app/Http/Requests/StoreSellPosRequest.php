<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class StoreSellPosRequest extends FormRequest {
    public function authorize() { return true; }
    public function rules() {
        return [
            'contact_id' => 'nullable|integer',
            'location_id' => 'required|integer',
            'status' => 'required|string|in:draft,final,quotation,proforma,holds',
            'products' => 'required|array|min:1',
            'products.*.product_id' => 'required|integer',
            'products.*.variation_id' => 'required|integer',
            'products.*.quantity' => 'required|numeric|min:0.001',
            'products.*.unit_price' => 'required|numeric|min:0',
            'products.*.tax_rate_id' => 'nullable|integer',
            'products.*.discount_type' => 'nullable|in:fixed,percentage',
            'products.*.discount_amount' => 'nullable|numeric|min:0',
            'products.*.sub_unit_id' => 'nullable|integer',
            'payment' => 'nullable|array',
            'payment.*.amount' => 'required_with:payment|numeric|min:0',
            'payment.*.method' => 'required_with:payment|string|in:cash,card,cheque,bank_transfer,other,custom_pay_1,custom_pay_2,custom_pay_3,custom_pay_4,custom_pay_5,custom_pay_6,custom_pay_7',
            'discount_type' => 'nullable|in:fixed,percentage',
            'discount_amount' => 'nullable|numeric|min:0',
            'tax_rate_id' => 'nullable|integer',
            'tax_amount' => 'nullable|numeric|min:0',
            'shipping_charges' => 'nullable|numeric|min:0',
            'shipping_details' => 'nullable|string',
            'additional_notes' => 'nullable|string',
            'staff_note' => 'nullable|string',
            'final_total' => 'required|numeric',
            'exchange_rate' => 'nullable|numeric|min:0.0001',
            'commission_agent' => 'nullable|integer',
            'is_suspend' => 'nullable|boolean',
            'is_recurring' => 'nullable|boolean',
            'invoice_scheme_id' => 'nullable|integer',
            'invoice_layout_id' => 'nullable|integer',
            'types_of_service_id' => 'nullable|integer',
            'packing_charge' => 'nullable|numeric|min:0',
            'packing_charge_type' => 'nullable|in:fixed,percentage',
            'rp_redeemed' => 'nullable|integer|min:0',
            'is_credit_sale' => 'nullable|boolean',
            'change_return' => 'nullable|numeric|min:0',
        ];
    }
}
