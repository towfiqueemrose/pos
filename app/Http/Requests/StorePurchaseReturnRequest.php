<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class StorePurchaseReturnRequest extends FormRequest {
    public function authorize() { return true; }
    public function rules() {
        return [
            'transaction_id' => 'required|integer',
            'returns' => 'required|array|min:1',
            'returns.*.product_id' => 'required|integer',
            'returns.*.variation_id' => 'required|integer',
            'returns.*.quantity' => 'required|numeric|min:0.001',
            'returns.*.purchase_price' => 'required|numeric|min:0',
            'returns.*.tax_rate_id' => 'nullable|integer',
            'returns.*.item_tax' => 'nullable|numeric|min:0',
            'tax_amount' => 'nullable|numeric|min:0',
            'ref_no' => 'nullable|string|max:255',
            'return_date' => 'nullable|date',
        ];
    }
}
