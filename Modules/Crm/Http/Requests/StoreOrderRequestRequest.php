<?php

namespace Modules\Crm\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequestRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'location_id' => ['required', 'integer', 'exists:business_locations,id'],
            'products' => ['required', 'array'],
            'price_group' => ['nullable'],
            'default_price_group' => ['nullable'],
        ];
    }
}
