<?php

namespace Modules\Hms\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHmsBookingRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'arrival_date' => 'sometimes|required|string',
            'arrival_time' => 'sometimes|required|string',
            'departure_date' => 'sometimes|required|string',
            'departure_time' => 'sometimes|required|string',
            'status' => 'sometimes|required|string',
            'contact_id' => 'sometimes|required|integer|exists:contacts,id',
            'total_booking_amount' => 'nullable|numeric|min:0',
            'total_discount' => 'nullable|numeric|min:0',
            'coupon_id' => 'nullable|integer|exists:hms_coupons,id',
            'discount_type' => 'nullable|string|max:255',
            'rooms' => 'nullable|array',
            'rooms.*.room_id' => 'required_with:rooms|integer|exists:hms_rooms,id',
            'rooms.*.type_id' => 'required_with:rooms|integer|exists:hms_room_types,id',
            'rooms.*.no_of_adult' => 'required_with:rooms|integer|min:0',
            'rooms.*.no_of_child' => 'required_with:rooms|integer|min:0',
            'rooms.*.price' => 'required_with:rooms|numeric|min:0',
            'rooms.*.total_price' => 'required_with:rooms|numeric|min:0',
            'extras' => 'nullable|array',
            'extras.*.id' => 'required_with:extras|integer|exists:hms_extras,id',
            'extras.*.price' => 'required_with:extras|numeric|min:0',
            'payment' => 'nullable|array',
            'change_return' => 'nullable|numeric',
            'change_return_id' => 'nullable|integer',
        ];
    }
}
