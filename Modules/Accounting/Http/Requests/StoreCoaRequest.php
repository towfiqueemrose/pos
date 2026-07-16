<?php

namespace Modules\Accounting\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCoaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => ['required', 'string'],
            'account_primary_type' => ['required', 'string'],
            'account_sub_type_id' => ['required', 'integer', 'exists:accounting_account_types,id'],
            'detail_type_id' => ['required', 'integer', 'exists:accounting_account_types,id'],
            'parent_account_id' => ['nullable'],
            'description' => ['nullable', 'string'],
            'gl_code' => ['nullable', 'string'],
            'balance' => ['nullable', 'numeric'],
            'balance_as_of' => ['nullable', 'date'],
        ];
    }
}
