<?php

namespace Modules\Essentials\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLeaveTypeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'leave_type' => 'required|string',
            'max_leave_count' => 'required|numeric',
            'leave_count_interval' => 'nullable|string',
        ];
    }
}
