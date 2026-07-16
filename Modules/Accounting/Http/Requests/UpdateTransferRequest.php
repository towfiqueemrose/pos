<?php

namespace Modules\Accounting\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTransferRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'from_account' => ['sometimes', 'required', 'integer', 'exists:accounting_accounts,id'],
            'to_account' => ['sometimes', 'required', 'integer', 'exists:accounting_accounts,id'],
            'amount' => ['sometimes', 'required', 'numeric'],
            'operation_date' => ['sometimes', 'required', 'date'],
            'ref_no' => ['nullable', 'string'],
            'note' => ['nullable', 'string'],
        ];
    }
}
