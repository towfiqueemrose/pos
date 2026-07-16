<?php

namespace Modules\Crm\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateScheduleRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'contact_id' => ['sometimes', 'required', 'integer', 'exists:contacts,id'],
            'start_datetime' => ['sometimes', 'required', 'string'],
            'end_datetime' => ['sometimes', 'required', 'string'],
            'status' => ['nullable', 'string'],
            'description' => ['nullable', 'string'],
            'schedule_type' => ['nullable', 'string'],
            'is_recursive' => ['nullable'],
            'notify_type' => ['nullable', 'string'],
            'follow_up_by' => ['nullable', 'string'],
            'follow_up_by_value' => ['nullable', 'string'],
            'followup_category_id' => ['nullable'],
            'assigned_to' => ['nullable', 'array'],
        ];
    }
}
