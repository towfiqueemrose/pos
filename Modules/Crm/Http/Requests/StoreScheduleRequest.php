<?php

namespace Modules\Crm\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreScheduleRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'contact_id' => ['required', 'integer', 'exists:contacts,id'],
            'start_datetime' => ['required', 'string'],
            'end_datetime' => ['required', 'string'],
            'status' => ['nullable', 'string'],
            'description' => ['nullable', 'string'],
            'schedule_type' => ['nullable', 'string'],
            'is_recursive' => ['nullable'],
            'follow_ups' => ['nullable', 'array'],
            'notify_type' => ['nullable', 'string'],
            'follow_up_by' => ['nullable', 'string'],
            'follow_up_by_value' => ['nullable', 'string'],
            'followup_category_id' => ['nullable'],
            'assigned_to' => ['nullable', 'array'],
            'follow_up_subject' => ['nullable', 'string'],
            'follow_up_description' => ['nullable', 'string'],
        ];
    }
}
