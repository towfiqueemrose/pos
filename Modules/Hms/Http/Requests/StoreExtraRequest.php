<?php

namespace Modules\Hms\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreExtraRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'price_per' => 'required|string|max:255',
            'is_active' => 'nullable|boolean',
        ];
    }
}
