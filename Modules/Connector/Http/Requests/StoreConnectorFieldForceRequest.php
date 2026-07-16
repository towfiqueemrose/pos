<?php

namespace Modules\Connector\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreConnectorFieldForceRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'contact_id' => 'nullable|integer|exists:contacts,id',
            'visit_to' => 'nullable|string|max:255',
            'visit_address' => 'nullable|string',
            'assigned_to' => 'required|integer|exists:users,id',
            'visit_on' => 'nullable|date_format:Y-m-d H:i:s',
            'visit_for' => 'nullable|string',
        ];
    }
}
