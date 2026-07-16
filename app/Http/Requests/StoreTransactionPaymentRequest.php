<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class StoreTransactionPaymentRequest extends FormRequest {
    public function authorize() { return true; }
    public function rules() {
        return [
            'transaction_id' => 'required|integer',
            'amount' => 'required|numeric|min:0.01',
            'method' => 'required|string|in:cash,card,cheque,bank_transfer,other,custom_pay_1,custom_pay_2,custom_pay_3,custom_pay_4,custom_pay_5,custom_pay_6,custom_pay_7',
            'paid_on' => 'required|date',
            'note' => 'nullable|string',
            'card_number' => 'nullable|string|max:255',
            'card_holder_name' => 'nullable|string|max:255',
            'card_transaction_number' => 'nullable|string|max:255',
            'card_type' => 'nullable|string|max:255',
            'card_month' => 'nullable|string|max:255',
            'card_year' => 'nullable|string|max:255',
            'card_security' => 'nullable|string|max:255',
            'cheque_number' => 'nullable|string|max:255',
            'bank_account_number' => 'nullable|string|max:255',
            'account_id' => 'nullable|integer',
            'payment_for' => 'nullable|string',
            'document' => 'nullable|file|max:5120',
        ];
    }
}
