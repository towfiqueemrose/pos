<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class StoreSellReturnRequest extends FormRequest {
    public function authorize() { return true; }
    public function rules() {
        return [
            'transaction_id' => 'required|integer',
            'location_id' => 'required|integer',
            'return_reason' => 'nullable|string',
            'returns' => 'required|array|min:1',
            'returns.*.product_id' => 'required|integer',
            'returns.*.variation_id' => 'required|integer',
            'returns.*.quantity' => 'required|numeric|min:0.001',
            'returns.*.unit_price' => 'required|numeric|min:0',
            'returns.*.tax_rate_id' => 'nullable|integer',
            'returns.*.item_tax' => 'nullable|numeric|min:0',
            'returns.*.discount_amount' => 'nullable|numeric|min:0',
        ];
    }
}
