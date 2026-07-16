<?php

namespace Modules\Essentials\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateToDoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'task' => 'sometimes|required|string',
            'date' => 'sometimes|required|string',
            'description' => 'nullable|string',
            'estimated_hours' => 'nullable|numeric',
            'priority' => 'nullable|string',
            'status' => 'nullable|string',
            'end_date' => 'nullable|string',
            'users' => 'nullable|array',
            'users.*' => 'integer|exists:users,id',
            'only_status' => 'nullable|boolean',
        ];
    }
}
