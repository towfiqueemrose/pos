<?php

namespace Modules\Essentials\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePayrollRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'essentials_duration' => 'sometimes|required|string',
            'essentials_amount_per_unit_duration' => 'sometimes|required|string',
            'final_total' => 'sometimes|required|numeric',
            'essentials_duration_unit' => 'nullable|string',
        ];
    }
}
