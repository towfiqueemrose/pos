<?php

namespace Modules\Connector\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateConnectorExpenseRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'final_total' => 'sometimes|required|numeric|min:0',
            'transaction_date' => 'nullable|date_format:Y-m-d H:i:s',
            'tax_rate_id' => 'nullable|integer|exists:tax_rates,id',
            'expense_for' => 'nullable|integer|exists:users,id',
            'contact_id' => 'nullable|integer|exists:contacts,id',
            'expense_category_id' => 'nullable|integer|exists:expense_categories,id',
            'expense_sub_category_id' => 'nullable|integer',
            'additional_notes' => 'nullable|string',
            'is_recurring' => 'nullable|boolean',
            'recur_interval' => 'nullable|integer|min:0',
            'recur_interval_type' => 'nullable|string|in:days,months,years',
            'subscription_repeat_on' => 'nullable|integer|min:1|max:30',
            'subscription_no' => 'nullable|string|max:255',
            'recur_repetitions' => 'nullable|integer|min:0',
            'payment' => 'nullable|array',
            'payment.*.amount' => 'required_with:payment|numeric|min:0',
            'payment.*.method' => 'nullable|string|in:cash,card,cheque,bank_transfer,other,custom_pay_1,custom_pay_2,custom_pay_3',
            'payment.*.account_id' => 'nullable|integer',
            'payment.*.card_number' => 'nullable|string|max:255',
            'payment.*.card_holder_name' => 'nullable|string|max:255',
            'payment.*.card_transaction_number' => 'nullable|string|max:255',
            'payment.*.card_type' => 'nullable|string|max:255',
            'payment.*.card_month' => 'nullable|string|max:255',
            'payment.*.card_year' => 'nullable|string|max:255',
            'payment.*.card_security' => 'nullable|string|max:255',
            'payment.*.transaction_no_1' => 'nullable|string|max:255',
            'payment.*.transaction_no_2' => 'nullable|string|max:255',
            'payment.*.transaction_no_3' => 'nullable|string|max:255',
            'payment.*.note' => 'nullable|string',
            'payment.*.cheque_number' => 'nullable|string|max:255',
        ];
    }
}
