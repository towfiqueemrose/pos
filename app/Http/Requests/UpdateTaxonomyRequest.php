<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class UpdateTaxonomyRequest extends FormRequest {
    public function authorize() { return true; }
    public function rules() {
        return [
            'name' => 'sometimes|required|string|max:255',
            'short_code' => 'nullable|string|max:255',
            'category_type' => 'nullable|string',
            'parent_id' => 'nullable|integer',
        ];
    }
}
