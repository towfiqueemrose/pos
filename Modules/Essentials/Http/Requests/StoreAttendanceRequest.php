<?php

namespace Modules\Essentials\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAttendanceRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'attendance' => 'required|array',
            'attendance.*.clock_in_time' => 'nullable|string',
            'attendance.*.clock_out_time' => 'nullable|string',
            'attendance.*.ip_address' => 'nullable|string',
            'attendance.*.clock_in_note' => 'nullable|string',
            'attendance.*.clock_out_note' => 'nullable|string',
            'attendance.*.essentials_shift_id' => 'nullable|integer|exists:essentials_shifts,id',
        ];
    }
}
