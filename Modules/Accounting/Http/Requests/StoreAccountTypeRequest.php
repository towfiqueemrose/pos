<?php

namespace Modules\Accounting\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAccountTypeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => ['required', 'string'],
            'description' => ['nullable', 'string'],
            'account_type' => ['required', 'string', 'in:sub_type,detail_type'],
            'parent_id' => ['nullable', 'integer', 'exists:accounting_account_types,id'],
            'account_primary_type' => ['nullable', 'string'],
        ];
    }
}
