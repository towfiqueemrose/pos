<?php

namespace Modules\Repair\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRepairSettingsRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'barcode_id' => 'nullable|integer|exists:barcodes,id',
            'default_product' => 'nullable|integer|exists:variations,id',
            'barcode_type' => 'nullable|string',
            'repair_tc_condition' => 'nullable|string',
            'job_sheet_prefix' => 'nullable|string',
            'problem_reported_by_customer' => 'nullable|string',
            'product_condition' => 'nullable|string',
            'product_configuration' => 'nullable|string',
            'job_sheet_custom_field_1' => 'nullable|string',
            'job_sheet_custom_field_2' => 'nullable|string',
            'job_sheet_custom_field_3' => 'nullable|string',
            'job_sheet_custom_field_4' => 'nullable|string',
            'job_sheet_custom_field_5' => 'nullable|string',
            'default_repair_checklist' => 'nullable|string',
            'default_status' => 'nullable',
        ];
    }
}
