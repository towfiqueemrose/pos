<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class StoreStockAdjustmentRequest extends FormRequest {
    public function authorize() { return true; }
    public function rules() {
        return [
            'location_id' => 'required|integer',
            'adjustment_type' => 'required|string|in:_NORMAL,-,+',
            'final_total' => 'nullable|numeric|min:0',
            'additional_notes' => 'nullable|string',
            'products' => 'required|array|min:1',
            'products.*.product_id' => 'required|integer',
            'products.*.variation_id' => 'required|integer',
            'products.*.quantity' => 'required|numeric|min:0.001',
        ];
    }
}
