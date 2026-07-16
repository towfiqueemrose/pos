<?php

namespace Modules\Essentials\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLeaveTypeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'leave_type' => 'sometimes|required|string',
            'max_leave_count' => 'sometimes|required|numeric',
            'leave_count_interval' => 'nullable|string',
        ];
    }
}
