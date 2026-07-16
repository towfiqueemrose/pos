<?php

namespace Modules\Essentials\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReminderRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string',
            'date' => 'required|string',
            'repeat' => 'required|string',
            'time' => 'required|string',
            'end_time' => 'nullable|string',
        ];
    }
}
