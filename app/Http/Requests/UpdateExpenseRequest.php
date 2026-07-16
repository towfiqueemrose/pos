<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class UpdateExpenseRequest extends FormRequest {
    public function authorize() { return true; }
    public function rules() {
        return [
            'expense_category_id' => 'sometimes|required|integer',
            'location_id' => 'sometimes|required|integer',
            'transaction_date' => 'sometimes|required|date',
            'final_total' => 'sometimes|required|numeric|min:0.01',
            'additional_notes' => 'nullable|string',
            'staff_note' => 'nullable|string',
            'ref_no' => 'nullable|string|max:255',
            'payment' => 'nullable|array',
            'payment.*.amount' => 'required_with:payment|numeric|min:0',
            'payment.*.method' => 'required_with:payment|string',
            'payment.*.paid_on' => 'required_with:payment|date',
            'custom_field_1' => 'nullable|string|max:255',
            'custom_field_2' => 'nullable|string|max:255',
            'custom_field_3' => 'nullable|string|max:255',
            'custom_field_4' => 'nullable|string|max:255',
            'document' => 'nullable|file|max:5120',
        ];
    }
}
