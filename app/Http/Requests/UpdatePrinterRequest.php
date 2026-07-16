<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class UpdatePrinterRequest extends FormRequest {
    public function authorize() { return true; }
    public function rules() {
        return [
            'name' => 'sometimes|required|string|max:255',
            'connection_type' => 'sometimes|required|string|in:network,unix',
            'ip_address' => 'nullable|string|max:255',
            'port' => 'nullable|integer',
            'path' => 'nullable|string|max:255',
            'char_per_line' => 'nullable|integer|min:1',
        ];
    }
}
