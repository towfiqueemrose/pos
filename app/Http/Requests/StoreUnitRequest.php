<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class StoreUnitRequest extends FormRequest {
    public function authorize() { return true; }
    public function rules() {
        return [
            'actual_name' => 'required|string|max:255',
            'short_name' => 'required|string|max:255',
            'allow_decimal' => 'nullable|boolean',
        ];
    }
}
