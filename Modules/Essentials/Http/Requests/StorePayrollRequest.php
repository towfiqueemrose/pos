<?php

namespace Modules\Essentials\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePayrollRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'transaction_date' => 'required|string',
            'payrolls' => 'required|array',
            'notify_employee' => 'nullable|boolean',
            'payroll_group_name' => 'nullable|string',
            'payroll_group_status' => 'nullable|string',
            'total_gross_amount' => 'nullable|string',
            'location_id' => 'nullable|integer|exists:business_locations,id',
        ];
    }
}
