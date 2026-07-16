<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class StoreStockTransferRequest extends FormRequest {
    public function authorize() { return true; }
    public function rules() {
        return [
            'location_id' => 'required|integer',
            'transfer_location_id' => 'required|integer|different:location_id',
            'status' => 'nullable|string|in:pending,completed,in_transit',
            'shipping_charges' => 'nullable|numeric|min:0',
            'additional_notes' => 'nullable|string',
            'final_total' => 'nullable|numeric',
            'products' => 'required|array|min:1',
            'products.*.product_id' => 'required|integer',
            'products.*.variation_id' => 'required|integer',
            'products.*.quantity' => 'required|numeric|min:0.001',
        ];
    }
}
