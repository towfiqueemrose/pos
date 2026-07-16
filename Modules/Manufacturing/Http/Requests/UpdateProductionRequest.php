<?php

namespace Modules\Manufacturing\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductionRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'transaction_date' => 'sometimes|required',
            'location_id' => 'sometimes|required',
            'final_total' => 'sometimes|required',
        ];
    }
}
