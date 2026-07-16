<?php

namespace Modules\Hms\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRoomRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'type' => 'required|string|max:255',
            'no_of_adult' => 'required|integer|min:0',
            'no_of_child' => 'required|integer|min:0',
            'max_occupancy' => 'required|integer|min:0',
            'description' => 'nullable|string',
            'amenities' => 'nullable|array',
            'amenities.*' => 'integer|exists:categories,id',
            'rooms' => 'nullable|array',
            'rooms.*' => 'string|max:255',
            'submit_type' => 'nullable|string|max:255',
        ];
    }
}
