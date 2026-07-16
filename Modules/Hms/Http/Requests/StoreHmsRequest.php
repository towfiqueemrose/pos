<?php

namespace Modules\Hms\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHmsRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            //
        ];
    }
}
