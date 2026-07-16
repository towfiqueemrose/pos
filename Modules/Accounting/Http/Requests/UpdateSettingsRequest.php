<?php

namespace Modules\Accounting\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingsRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'journal_entry_prefix' => ['nullable', 'string'],
            'transfer_prefix' => ['nullable', 'string'],
            'accounting_default_map' => ['nullable', 'array'],
        ];
    }
}
