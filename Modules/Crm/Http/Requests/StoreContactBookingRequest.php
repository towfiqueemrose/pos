<?php

namespace Modules\Crm\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactBookingRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'booking_start' => ['required', 'string'],
            'booking_end' => ['required', 'string'],
            'location_id' => ['required', 'integer', 'exists:business_locations,id'],
            'contact_id' => ['required', 'integer', 'exists:contacts,id'],
        ];
    }
}
