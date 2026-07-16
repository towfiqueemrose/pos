<?php

namespace Modules\Essentials\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAttendanceRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'clock_in_time' => 'sometimes|required|string',
            'clock_out_time' => 'nullable|string',
            'ip_address' => 'nullable|string',
            'clock_in_note' => 'nullable|string',
            'clock_out_note' => 'nullable|string',
        ];
    }
}
