<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class StoreProductRequest extends FormRequest {
    public function authorize() { return true; }
    public function rules() {
        return [
            'name' => 'required|string|max:255',
            'type' => 'required|string|in:single,variable,combo',
            'unit_id' => 'required|integer',
            'brand_id' => 'nullable|integer',
            'category_id' => 'nullable|integer',
            'sub_category_id' => 'nullable|integer',
            'tax' => 'nullable|numeric|min:0',
            'tax_type' => 'nullable|in:inclusive,exclusive',
            'barcode_type' => 'nullable|string',
            'sku' => 'nullable|string|max:255',
            'alert_quantity' => 'nullable|numeric|min:0',
            'weight' => 'nullable|numeric|min:0',
            'product_description' => 'nullable|string',
            'sub_unit_ids' => 'nullable|array',
            'enable_stock' => 'nullable|boolean',
            'not_for_selling' => 'nullable|boolean',
            'expiry_period' => 'nullable|integer|min:0',
            'expiry_period_type' => 'nullable|string|in:days,months,years',
            'enable_sr_no' => 'nullable|boolean',
            'warranty_id' => 'nullable|integer',
            'image' => 'nullable|image|max:2048',
            'preparation_time_in_minutes' => 'nullable|integer|min:0',
            'variations' => 'required_if:type,variable|array',
            'variations.*.name' => 'required_with:variations|string|max:255',
            'variations.*.variations_values' => 'nullable|array',
            'product_custom_field1' => 'nullable|string|max:255',
            'product_custom_field2' => 'nullable|string|max:255',
            'product_custom_field3' => 'nullable|string|max:255',
            'product_custom_field4' => 'nullable|string|max:255',
            'product_custom_field5' => 'nullable|string|max:255',
        ];
    }
}
