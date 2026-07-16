<?php

namespace Modules\AssetManagement\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRevokeAssetRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'parent_id' => 'sometimes|required|exists:asset_transactions,id',
            'asset_id' => 'sometimes|required|exists:assets,id',
            'quantity' => 'sometimes|required|numeric',
            'transaction_datetime' => 'nullable|date',
            'reason' => 'nullable|string',
        ];
    }
}
