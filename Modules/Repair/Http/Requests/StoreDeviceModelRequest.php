<?php

namespace Modules\Repair\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDeviceModelRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string',
            'brand_id' => 'required|integer|exists:brands,id',
            'device_id' => 'required|integer|exists:categories,id',
            'repair_checklist' => 'nullable|string',
        ];
    }
}
