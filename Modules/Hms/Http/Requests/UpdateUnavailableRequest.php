<?php

namespace Modules\Hms\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUnavailableRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'room_id' => 'sometimes|required|integer|exists:hms_rooms,id',
            'date_from' => 'sometimes|required|string',
            'date_to' => 'sometimes|required|string',
            'unavailable_type' => 'sometimes|required|string|max:255',
        ];
    }
}
