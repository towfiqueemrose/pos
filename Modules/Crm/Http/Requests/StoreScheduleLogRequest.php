<?php

namespace Modules\Crm\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreScheduleLogRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'schedule_id' => ['required', 'integer', 'exists:crm_schedules,id'],
            'log_type' => ['nullable', 'string'],
            'subject' => ['nullable', 'string'],
            'description' => ['nullable', 'string'],
            'start_datetime' => ['required', 'string'],
            'end_datetime' => ['required', 'string'],
            'status' => ['nullable', 'string'],
        ];
    }
}
