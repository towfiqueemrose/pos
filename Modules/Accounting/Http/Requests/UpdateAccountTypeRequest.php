<?php

namespace Modules\Accounting\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAccountTypeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => ['sometimes', 'required', 'string'],
            'description' => ['nullable', 'string'],
            'parent_id' => ['nullable', 'integer', 'exists:accounting_account_types,id'],
        ];
    }
}
