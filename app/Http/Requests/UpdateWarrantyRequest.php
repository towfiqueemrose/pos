<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class UpdateWarrantyRequest extends FormRequest {
    public function authorize() { return true; }
    public function rules() {
        return [
            'name' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
            'duration' => 'sometimes|required|integer|min:1',
            'duration_type' => 'sometimes|required|string|in:days,months,years',
        ];
    }
}
