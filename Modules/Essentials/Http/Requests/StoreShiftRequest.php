<?php

namespace Modules\Essentials\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreShiftRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string',
            'type' => 'required|string',
            'holidays' => 'nullable|array',
            'holidays.*' => 'string',
            'start_time' => 'nullable|string',
            'end_time' => 'nullable|string',
            'is_allowed_auto_clockout' => 'nullable|boolean',
            'auto_clockout_time' => 'nullable|string',
        ];
    }
}
