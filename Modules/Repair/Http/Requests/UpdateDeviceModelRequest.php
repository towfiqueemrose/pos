<?php

namespace Modules\Repair\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDeviceModelRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'sometimes|required|string',
            'brand_id' => 'sometimes|required|integer|exists:brands,id',
            'device_id' => 'sometimes|required|integer|exists:categories,id',
            'repair_checklist' => 'nullable|string',
        ];
    }
}
