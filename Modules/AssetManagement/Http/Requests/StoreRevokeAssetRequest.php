<?php

namespace Modules\AssetManagement\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRevokeAssetRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'ref_no' => 'nullable|string|max:255',
            'parent_id' => 'required|exists:asset_transactions,id',
            'asset_id' => 'required|exists:assets,id',
            'quantity' => 'required|numeric',
            'transaction_datetime' => 'nullable|date',
            'reason' => 'nullable|string',
        ];
    }
}
