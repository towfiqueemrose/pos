<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class StoreManageUserRequest extends FormRequest {
    public function authorize() { return true; }
    public function rules() {
        return [
            'surname' => 'nullable|string|max:255',
            'first_name' => 'required|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'username' => 'nullable|string|max:255',
            'password' => 'required|string|min:6',
            'role' => 'required|integer',
            'cmmsn_percent' => 'nullable|numeric|min:0|max:100',
            'max_sales_discount_percent' => 'nullable|numeric|min:0|max:100',
            'locations' => 'nullable|array',
            'is_service_staff' => 'nullable|boolean',
        ];
    }
}
