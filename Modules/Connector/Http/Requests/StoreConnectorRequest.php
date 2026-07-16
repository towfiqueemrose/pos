<?php

namespace Modules\Connector\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreConnectorRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [];
    }
}
