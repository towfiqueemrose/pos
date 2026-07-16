<?php

namespace Modules\Repair\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRepairStatusRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'sometimes|required|string',
            'color' => 'sometimes|required|string',
            'sort_order' => 'nullable|integer',
            'sms_template' => 'nullable|string',
            'email_subject' => 'nullable|string',
            'email_body' => 'nullable|string',
            'is_completed_status' => 'nullable',
        ];
    }
}
