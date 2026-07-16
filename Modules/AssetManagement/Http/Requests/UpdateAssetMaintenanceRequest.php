<?php

namespace Modules\AssetManagement\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAssetMaintenanceRequest extends FormRequest
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
            'details' => 'nullable|string',
            'assigned_to' => 'nullable|exists:users,id',
        ];
    }
}
