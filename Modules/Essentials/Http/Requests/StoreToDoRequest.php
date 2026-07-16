<?php

namespace Modules\Essentials\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreToDoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'task' => 'required|string',
            'date' => 'required|string',
            'description' => 'nullable|string',
            'estimated_hours' => 'nullable|numeric',
            'priority' => 'nullable|string',
            'status' => 'nullable|string',
            'end_date' => 'nullable|string',
            'users' => 'nullable|array',
            'users.*' => 'integer|exists:users,id',
        ];
    }
}
