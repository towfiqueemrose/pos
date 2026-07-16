<?php

namespace Modules\Crm\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLeadRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'type' => ['sometimes', 'required', 'string'],
            'prefix' => ['nullable', 'string'],
            'first_name' => ['sometimes', 'required', 'string'],
            'middle_name' => ['nullable', 'string'],
            'last_name' => ['nullable', 'string'],
            'tax_number' => ['nullable', 'string'],
            'mobile' => ['nullable', 'string'],
            'landline' => ['nullable', 'string'],
            'alternate_number' => ['nullable', 'string'],
            'email' => ['nullable', 'email'],
            'city' => ['nullable', 'string'],
            'state' => ['nullable', 'string'],
            'country' => ['nullable', 'string'],
            'landmark' => ['nullable', 'string'],
            'address_line_1' => ['nullable', 'string'],
            'address_line_2' => ['nullable', 'string'],
            'zip_code' => ['nullable', 'string'],
            'contact_id' => ['nullable'],
            'crm_source' => ['nullable', 'string'],
            'crm_life_stage' => ['nullable', 'string'],
            'dob' => ['nullable', 'string'],
            'supplier_business_name' => ['nullable', 'string'],
            'shipping_custom_field_details' => ['nullable', 'string'],
            'custom_field1' => ['nullable'],
            'custom_field2' => ['nullable'],
            'custom_field3' => ['nullable'],
            'custom_field4' => ['nullable'],
            'custom_field5' => ['nullable'],
            'custom_field6' => ['nullable'],
            'custom_field7' => ['nullable'],
            'custom_field8' => ['nullable'],
            'custom_field9' => ['nullable'],
            'custom_field10' => ['nullable'],
            'is_export' => ['nullable'],
            'export_custom_field_1' => ['nullable'],
            'export_custom_field_2' => ['nullable'],
            'export_custom_field_3' => ['nullable'],
            'export_custom_field_4' => ['nullable'],
            'export_custom_field_5' => ['nullable'],
            'export_custom_field_6' => ['nullable'],
            'user_id' => ['nullable', 'array'],
        ];
    }
}
