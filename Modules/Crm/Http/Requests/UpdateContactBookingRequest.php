<?php

namespace Modules\Crm\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContactBookingRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'booking_start' => ['sometimes', 'required', 'string'],
            'booking_end' => ['sometimes', 'required', 'string'],
            'location_id' => ['sometimes', 'required', 'integer', 'exists:business_locations,id'],
            'contact_id' => ['sometimes', 'required', 'integer', 'exists:contacts,id'],
        ];
    }
}
