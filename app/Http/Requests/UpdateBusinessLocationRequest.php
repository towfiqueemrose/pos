<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class UpdateBusinessLocationRequest extends FormRequest {
    public function authorize() { return true; }
    public function rules() {
        return [
            'name' => 'sometimes|required|string|max:255',
            'landmark' => 'nullable|string|max:255',
            'country' => 'sometimes|required|string|max:255',
            'state' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'zip_code' => 'nullable|string|max:255',
            'mobile' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255',
            'invoice_scheme_id' => 'sometimes|required|integer',
            'invoice_layout_id' => 'sometimes|required|integer',
            'selling_price_group_id' => 'nullable|integer',
        ];
    }
}
