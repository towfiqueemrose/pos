<?php

namespace Modules\Manufacturing\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreManufacturingSettingsRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'ref_no_prefix' => 'nullable|string',
            'disable_editing_ingredient_qty' => 'nullable',
            'enable_updating_product_price' => 'nullable',
        ];
    }
}
