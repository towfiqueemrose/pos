<?php

namespace Modules\Hms\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUnavailableRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'rooms' => 'required|array',
            'rooms.*' => 'integer|exists:hms_rooms,id',
            'date_from' => 'required|string',
            'date_to' => 'required|string',
            'unavailable_type' => 'required|string|max:255',
        ];
    }
}
