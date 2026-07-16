<?php

namespace Modules\AssetManagement\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAssetSettingsRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'asset_code_prefix' => 'nullable|string|max:255',
            'allocation_code_prefix' => 'nullable|string|max:255',
            'revoke_code_prefix' => 'nullable|string|max:255',
            'asset_maintenance_prefix' => 'nullable|string|max:255',
            'send_for_maintenence_recipients' => 'nullable|array',
            'enable_asset_send_for_maintenance_email' => 'nullable|boolean',
            'enable_asset_assigned_for_maintenance_email' => 'nullable|boolean',
            'send_for_maintenance' => 'nullable|array',
            'send_for_maintenance.subject' => 'nullable|string|max:255',
            'send_for_maintenance.email_body' => 'nullable|string',
            'assigned_for_maintenance' => 'nullable|array',
            'assigned_for_maintenance.subject' => 'nullable|string|max:255',
            'assigned_for_maintenance.email_body' => 'nullable|string',
        ];
    }
}
