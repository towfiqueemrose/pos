<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class UpdateInvoiceSchemeRequest extends FormRequest {
    public function authorize() { return true; }
    public function rules() {
        return [
            'name' => 'sometimes|required|string|max:255',
            'scheme_type' => 'sometimes|required|string|in:blank,auto_generated',
            'prefix' => 'nullable|string|max:255',
            'start_number' => 'nullable|integer|min:1',
            'total_digits' => 'nullable|integer|min:1',
            'is_default' => 'nullable|boolean',
        ];
    }
}
