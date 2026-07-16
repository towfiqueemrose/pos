<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class StorePurchaseOrderRequest extends FormRequest {
    public function authorize() { return true; }
    public function rules() {
        return [
            'contact_id' => 'required|integer',
            'location_id' => 'required|integer',
            'transaction_date' => 'required|date',
            'status' => 'required|string|in:pending,ordered',
            'ref_no' => 'nullable|string|max:255',
            'total_before_tax' => 'required|numeric|min:0',
            'tax_id' => 'nullable|integer',
            'tax_amount' => 'nullable|numeric|min:0',
            'discount_type' => 'nullable|in:fixed,percentage',
            'discount_amount' => 'nullable|numeric|min:0',
            'shipping_charges' => 'nullable|numeric|min:0',
            'shipping_details' => 'nullable|string',
            'final_total' => 'required|numeric',
            'additional_notes' => 'nullable|string',
            'staff_note' => 'nullable|string',
            'exchange_rate' => 'nullable|numeric|min:0.0001',
            'pay_term_number' => 'nullable|integer|min:0',
            'pay_term_type' => 'nullable|string|in:days,months',
            'delivery_date' => 'nullable|date',
            'purchases' => 'required|array|min:1',
            'purchases.*.product_id' => 'required|integer',
            'purchases.*.variation_id' => 'required|integer',
            'purchases.*.quantity' => 'required|numeric|min:0.001',
            'purchases.*.purchase_price' => 'required|numeric|min:0',
            'purchases.*.tax_rate_id' => 'nullable|integer',
            'purchases.*.item_tax' => 'nullable|numeric|min:0',
            'document' => 'nullable|file|max:5120',
        ];
    }
}
