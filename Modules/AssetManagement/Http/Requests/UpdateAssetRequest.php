<?php

namespace Modules\AssetManagement\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAssetRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'sometimes|required|string|max:255',
            'quantity' => 'nullable|numeric',
            'model' => 'nullable|string|max:255',
            'serial_no' => 'nullable|string|max:255',
            'category_id' => 'nullable|exists:categories,id',
            'location_id' => 'nullable|exists:business_locations,id',
            'purchase_date' => 'nullable|date',
            'unit_price' => 'nullable|numeric',
            'depreciation' => 'nullable|numeric',
            'is_allocatable' => 'nullable|boolean',
            'description' => 'nullable|string',
            'purchase_type' => 'nullable|string|in:owned,rented,leased',
        ];
    }
}
