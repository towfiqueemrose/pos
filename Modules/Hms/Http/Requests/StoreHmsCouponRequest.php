<?php

namespace Modules\Hms\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHmsCouponRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'hms_room_type_id' => 'required|integer|exists:hms_room_types,id',
            'start_date' => 'required|string',
            'end_date' => 'required|string',
            'coupon_code' => 'required|string|max:255',
            'discount' => 'required|numeric|min:0',
            'discount_type' => 'required|string|max:255',
        ];
    }
}
