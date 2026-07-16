<?php

namespace Modules\AssetManagement\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAssetAllocationRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'ref_no' => 'nullable|string|max:255',
            'asset_id' => 'required|exists:assets,id',
            'quantity' => 'required|numeric',
            'receiver' => 'required|exists:users,id',
            'transaction_datetime' => 'nullable|date',
            'reason' => 'nullable|string',
            'allocated_upto' => 'nullable|date',
        ];
    }
}
