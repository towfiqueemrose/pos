<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class StoreTaxRateRequest extends FormRequest {
    public function authorize() { return true; }
    public function rules() {
        return [
            'name' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0',
            'is_tax_group' => 'nullable|boolean',
        ];
    }
}
