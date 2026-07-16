<?php

namespace Modules\Crm\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactLoginRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'crm_contact_id' => ['required', 'integer', 'exists:contacts,id'],
            'surname' => ['nullable', 'string'],
            'first_name' => ['required', 'string'],
            'last_name' => ['nullable', 'string'],
            'email' => ['required', 'email'],
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
            'contact_no' => ['nullable', 'string'],
            'alt_number' => ['nullable', 'string'],
            'family_number' => ['nullable', 'string'],
            'crm_department' => ['nullable', 'string'],
            'crm_designation' => ['nullable', 'string'],
            'cmmsn_percent' => ['nullable', 'numeric'],
            'is_active' => ['nullable'],
            'allow_login' => ['nullable'],
        ];
    }
}
