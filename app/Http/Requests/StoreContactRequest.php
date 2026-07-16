<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class StoreContactRequest extends FormRequest {
    public function authorize() { return true; }
    public function rules() {
        return [
            'type' => 'required|string|in:customer,supplier,lead',
            'supplier_business_name' => 'nullable|string|max:255',
            'first_name' => 'nullable|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'mobile' => 'nullable|string|max:20',
            'landline' => 'nullable|string|max:20',
            'alternate_number' => 'nullable|string|max:20',
            'tax_number' => 'nullable|string|max:255',
            'pay_term_number' => 'nullable|integer|min:0',
            'pay_term_type' => 'nullable|string|in:days,months',
            'credit_limit' => 'nullable|numeric|min:0',
            'opening_balance' => 'nullable|numeric',
            'city' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'zip_code' => 'nullable|string|max:255',
            'address_line_1' => 'nullable|string|max:255',
            'address_line_2' => 'nullable|string|max:255',
            'dob' => 'nullable|date',
            'gender' => 'nullable|string|in:male,female,other',
            'marital_status' => 'nullable|string',
            'blood_group' => 'nullable|string',
            'customer_group_id' => 'nullable|integer',
            'shipping_address' => 'nullable|string',
            'custom_field1' => 'nullable|string|max:255',
            'custom_field2' => 'nullable|string|max:255',
            'custom_field3' => 'nullable|string|max:255',
            'custom_field4' => 'nullable|string|max:255',
            'custom_field5' => 'nullable|string|max:255',
            'custom_field6' => 'nullable|string|max:255',
            'custom_field7' => 'nullable|string|max:255',
            'custom_field8' => 'nullable|string|max:255',
            'custom_field9' => 'nullable|string|max:255',
            'custom_field10' => 'nullable|string|max:255',
            'contact_id' => 'nullable|string|max:255',
            'is_default' => 'nullable|boolean',
            'document' => 'nullable|file|max:5120',
        ];
    }
}
