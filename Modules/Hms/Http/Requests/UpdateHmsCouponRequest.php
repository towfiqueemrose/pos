<?php

namespace Modules\Hms\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHmsCouponRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'hms_room_type_id' => 'sometimes|required|integer|exists:hms_room_types,id',
            'start_date' => 'sometimes|required|string',
            'end_date' => 'sometimes|required|string',
            'coupon_code' => 'sometimes|required|string|max:255',
            'discount' => 'sometimes|required|numeric|min:0',
            'discount_type' => 'sometimes|required|string|max:255',
        ];
    }
}
