<?php

namespace Modules\Hms\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRoomRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'type' => 'sometimes|required|string|max:255',
            'no_of_adult' => 'sometimes|required|integer|min:0',
            'no_of_child' => 'sometimes|required|integer|min:0',
            'max_occupancy' => 'sometimes|required|integer|min:0',
            'description' => 'nullable|string',
            'amenities' => 'nullable|array',
            'amenities.*' => 'integer|exists:categories,id',
            'rooms' => 'nullable|array',
            'rooms.*.id' => 'nullable|integer',
            'rooms.*.name' => 'required_with:rooms|string|max:255',
            'submit_type' => 'nullable|string|max:255',
        ];
    }
}
