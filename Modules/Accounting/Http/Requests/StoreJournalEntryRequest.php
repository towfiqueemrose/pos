<?php

namespace Modules\Accounting\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJournalEntryRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'location_id' => ['required', 'integer', 'exists:business_locations,id'],
            'currency_id' => ['required', 'integer', 'exists:currencies,id'],
            'journal_entry_data' => ['required', 'array'],
            'journal_entry_data.*.debit' => ['required', 'integer', 'exists:chart_of_accounts,id'],
            'journal_entry_data.*.credit' => ['required', 'integer', 'exists:chart_of_accounts,id'],
            'journal_entry_data.*.amount' => ['required', 'numeric'],
            'journal_entry_data.*.notes' => ['nullable', 'string'],
            'date' => ['required', 'date'],
            'payment_type_id' => ['nullable', 'integer', 'exists:payment_types,id'],
        ];
    }
}
