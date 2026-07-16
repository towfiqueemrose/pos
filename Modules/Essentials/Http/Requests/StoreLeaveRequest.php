<?php

namespace Modules\Essentials\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLeaveRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'essentials_leave_type_id' => 'required|integer|exists:essentials_leave_types,id',
            'start_date' => 'required|string',
            'end_date' => 'required|string',
            'reason' => 'nullable|string',
            'employees' => 'nullable|array',
            'employees.*' => 'integer|exists:users,id',
        ];
    }
}
