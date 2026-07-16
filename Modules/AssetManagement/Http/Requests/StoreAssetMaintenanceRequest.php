<?php

namespace Modules\AssetManagement\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAssetMaintenanceRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'status' => 'nullable|string',
            'priority' => 'nullable|string',
            'asset_id' => 'required|exists:assets,id',
            'maintenance_note' => 'nullable|string',
        ];
    }
}
