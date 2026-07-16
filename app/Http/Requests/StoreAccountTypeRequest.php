<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class StoreAccountTypeRequest extends FormRequest {
    public function authorize() { return true; }
    public function rules() {
        return [
            'name' => 'required|string|max:255',
            'parent_account_type_id' => 'nullable|integer',
        ];
    }
}
