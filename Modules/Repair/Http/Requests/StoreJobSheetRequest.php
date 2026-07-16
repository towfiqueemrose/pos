<?php

namespace Modules\Repair\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJobSheetRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'contact_id' => 'required|integer|exists:contacts,id',
            'service_type' => 'required|string',
            'brand_id' => 'nullable|integer|exists:brands,id',
            'device_id' => 'nullable|integer|exists:categories,id',
            'device_model_id' => 'nullable|integer|exists:repair_device_models,id',
            'security_pwd' => 'nullable|string',
            'security_pattern' => 'nullable|string',
            'serial_no' => 'nullable|string',
            'status_id' => 'required|integer|exists:repair_statuses,id',
            'delivery_date' => 'nullable|date',
            'estimated_cost' => 'nullable|numeric',
            'product_configuration' => 'nullable|string',
            'defects' => 'nullable|string',
            'product_condition' => 'nullable|string',
            'service_staff' => 'nullable|integer|exists:users,id',
            'location_id' => 'nullable|integer|exists:business_locations,id',
            'pick_up_on_site_addr' => 'nullable|string',
            'comment_by_ss' => 'nullable|string',
            'custom_field_1' => 'nullable|string',
            'custom_field_2' => 'nullable|string',
            'custom_field_3' => 'nullable|string',
            'custom_field_4' => 'nullable|string',
            'custom_field_5' => 'nullable|string',
        ];
    }
}
