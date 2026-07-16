<?php

namespace Modules\Accounting\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCoaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => ['sometimes', 'required', 'string'],
            'account_primary_type' => ['sometimes', 'required', 'string'],
            'account_sub_type_id' => ['sometimes', 'required', 'integer', 'exists:accounting_account_types,id'],
            'detail_type_id' => ['sometimes', 'required', 'integer', 'exists:accounting_account_types,id'],
            'parent_account_id' => ['nullable'],
            'description' => ['nullable', 'string'],
            'gl_code' => ['nullable', 'string'],
        ];
    }
}
