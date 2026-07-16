<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class UpdateExpenseCategoryRequest extends FormRequest {
    public function authorize() { return true; }
    public function rules() {
        return [
            'name' => 'sometimes|required|string|max:255',
            'code' => 'nullable|string|max:255',
            'parent_id' => 'nullable|integer',
        ];
    }
}
