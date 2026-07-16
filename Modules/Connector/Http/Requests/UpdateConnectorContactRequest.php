<?php

namespace Modules\Connector\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateConnectorContactRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'type' => 'sometimes|required|string|in:customer,supplier,both,lead',
            'supplier_business_name' => 'nullable|string|max:255',
            'prefix' => 'nullable|string|max:255',
            'first_name' => 'sometimes|required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'tax_number' => 'nullable|string|max:255',
            'pay_term_number' => 'nullable|numeric|min:0',
            'pay_term_type' => 'nullable|string|in:days,months',
            'mobile' => 'sometimes|required|string|max:255',
            'landline' => 'nullable|string|max:255',
            'alternate_number' => 'nullable|string|max:255',
            'address_line_1' => 'nullable|string|max:255',
            'address_line_2' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'zip_code' => 'nullable|string|max:255',
            'customer_group_id' => 'nullable|integer|exists:customer_groups,id',
            'contact_id' => 'nullable|string|max:255',
            'dob' => 'nullable|date_format:Y-m-d',
            'custom_field1' => 'nullable|string',
            'custom_field2' => 'nullable|string',
            'custom_field3' => 'nullable|string',
            'custom_field4' => 'nullable|string',
            'email' => 'nullable|email|max:255',
            'shipping_address' => 'nullable|string',
            'position' => 'nullable|string|max:255',
            'opening_balance' => 'nullable|numeric',
            'source_id' => 'nullable|integer',
            'life_stage_id' => 'nullable|integer',
            'assigned_to' => 'nullable|array',
            'assigned_to.*' => 'integer|exists:users,id',
        ];
    }
}
