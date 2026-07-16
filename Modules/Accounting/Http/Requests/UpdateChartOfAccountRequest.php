<?php

namespace Modules\Accounting\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateChartOfAccountRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => ['sometimes', 'required', 'string'],
            'gl_code' => ['sometimes', 'required', 'numeric', Rule::unique('chart_of_accounts', 'gl_code')->ignore($this->route('id'))],
            'currency_id' => ['sometimes', 'required', 'integer', 'exists:currencies,id'],
            'opening_balance' => ['sometimes', 'required', 'numeric'],
            'payment_type_id' => ['sometimes', 'required', 'integer', 'exists:payment_types,id'],
            'account_subtype_id' => ['sometimes', 'required', 'integer', 'exists:account_subtypes,id'],
            'detail_type_id' => ['sometimes', 'required', 'integer', 'exists:account_detail_types,id'],
            'parent_id' => ['nullable', 'integer', 'exists:chart_of_accounts,id'],
            'account_type' => ['nullable', 'string'],
            'allow_manual' => ['nullable', 'boolean'],
            'active' => ['nullable', 'boolean'],
            'notes' => ['nullable', 'string'],
        ];
    }
}
