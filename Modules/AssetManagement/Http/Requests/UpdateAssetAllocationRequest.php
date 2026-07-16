<?php

namespace Modules\AssetManagement\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAssetAllocationRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'asset_id' => 'sometimes|required|exists:assets,id',
            'quantity' => 'sometimes|required|numeric',
            'receiver' => 'sometimes|required|exists:users,id',
            'transaction_datetime' => 'nullable|date',
            'reason' => 'nullable|string',
            'allocated_upto' => 'nullable|date',
        ];
    }
}
