<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class StoreAccountRequest extends FormRequest {
    public function authorize() { return true; }
    public function rules() {
        return [
            'name' => 'required|string|max:255',
            'account_number' => 'nullable|string|max:255',
            'account_type_id' => 'required|integer',
            'opening_balance' => 'nullable|numeric',
            'notes' => 'nullable|string',
            'is_default' => 'nullable|boolean',
        ];
    }
}
