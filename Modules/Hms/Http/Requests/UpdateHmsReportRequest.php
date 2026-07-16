<?php

namespace Modules\Hms\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHmsReportRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'date_to' => 'nullable|string',
            'date_from' => 'nullable|string',
        ];
    }
}
