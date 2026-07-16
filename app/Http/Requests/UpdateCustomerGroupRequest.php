<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class UpdateCustomerGroupRequest extends FormRequest {
    public function authorize() { return true; }
    public function rules() {
        return [
            'name' => 'sometimes|required|string|max:255',
            'amount' => 'nullable|numeric|min:0',
            'price_calculation_type' => 'nullable|in:fixed,percentage',
            'selling_price_group_id' => 'nullable|integer',
        ];
    }
}
