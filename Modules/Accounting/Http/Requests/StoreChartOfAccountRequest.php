<?php

namespace Modules\Accounting\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreChartOfAccountRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => ['required', 'string'],
            'gl_code' => ['required', 'numeric', 'unique:chart_of_accounts,gl_code'],
            'currency_id' => ['required', 'integer', 'exists:currencies,id'],
            'opening_balance' => ['sometimes', 'required', 'numeric'],
            'payment_type_id' => ['sometimes', 'required', 'integer', 'exists:payment_types,id'],
            'account_subtype_id' => ['required', 'integer', 'exists:account_subtypes,id'],
            'detail_type_id' => ['required', 'integer', 'exists:account_detail_types,id'],
            'parent_id' => ['nullable', 'integer', 'exists:chart_of_accounts,id'],
            'account_type' => ['nullable', 'string'],
            'allow_manual' => ['nullable', 'boolean'],
            'active' => ['nullable', 'boolean'],
            'notes' => ['nullable', 'string'],
            'cheque_number' => ['nullable', 'string'],
            'receipt' => ['nullable', 'string'],
            'account_number' => ['nullable', 'string'],
            'bank_name' => ['nullable', 'string'],
            'routing_code' => ['nullable', 'string'],
            'date' => ['nullable', 'date'],
            'reference' => ['nullable', 'string'],
        ];
    }
}
