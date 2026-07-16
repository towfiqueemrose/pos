<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class StoreWarrantyRequest extends FormRequest {
    public function authorize() { return true; }
    public function rules() {
        return [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'duration' => 'required|integer|min:1',
            'duration_type' => 'required|string|in:days,months,years',
        ];
    }
}
