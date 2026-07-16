<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class StoreTaxonomyRequest extends FormRequest {
    public function authorize() { return true; }
    public function rules() {
        return [
            'name' => 'required|string|max:255',
            'short_code' => 'nullable|string|max:255',
            'category_type' => 'nullable|string',
            'parent_id' => 'nullable|integer',
        ];
    }
}
