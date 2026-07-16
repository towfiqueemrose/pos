<?php

namespace Modules\Accounting\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTransferRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'from_account' => ['required', 'integer', 'exists:accounting_accounts,id'],
            'to_account' => ['required', 'integer', 'exists:accounting_accounts,id'],
            'amount' => ['required', 'numeric'],
            'operation_date' => ['required', 'date'],
            'ref_no' => ['nullable', 'string'],
            'note' => ['nullable', 'string'],
        ];
    }
}
