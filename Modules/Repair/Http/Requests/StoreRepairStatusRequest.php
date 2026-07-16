<?php

namespace Modules\Repair\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRepairStatusRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string',
            'color' => 'required|string',
            'sort_order' => 'nullable|integer',
            'sms_template' => 'nullable|string',
            'email_subject' => 'nullable|string',
            'email_body' => 'nullable|string',
            'is_completed_status' => 'nullable',
        ];
    }
}
