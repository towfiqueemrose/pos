<?php

namespace Modules\Manufacturing\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRecipeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'variation_id' => 'required',
            'ingredients' => 'nullable|array',
            'total' => 'nullable',
            'instructions' => 'nullable|string',
            'ingredients_cost' => 'nullable',
            'waste_percent' => 'nullable',
            'total_quantity' => 'nullable',
            'extra_cost' => 'nullable',
            'production_cost_type' => 'nullable|string',
            'sub_unit_id' => 'nullable|integer|exists:units,id',
        ];
    }
}
