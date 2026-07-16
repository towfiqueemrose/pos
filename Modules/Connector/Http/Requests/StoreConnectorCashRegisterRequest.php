<?php

namespace Modules\Connector\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreConnectorCashRegisterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'location_id' => 'required|integer|exists:business_locations,id',
            'initial_amount' => 'nullable|numeric|min:0',
            'created_at' => 'nullable|date_format:Y-m-d H:i:s',
            'closed_at' => 'nullable|date_format:Y-m-d H:i:s',
            'status' => 'nullable|string|in:open,close',
            'closing_amount' => 'nullable|numeric|min:0',
            'total_card_slips' => 'nullable|integer|min:0',
            'total_cheques' => 'nullable|integer|min:0',
            'closing_note' => 'nullable|string',
            'transaction_ids' => 'nullable|string',
        ];
    }
}
