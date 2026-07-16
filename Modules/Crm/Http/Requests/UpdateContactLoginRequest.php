<?php

namespace Modules\Crm\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContactLoginRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'crm_contact_id' => ['sometimes', 'required', 'integer', 'exists:contacts,id'],
            'surname' => ['nullable', 'string'],
            'first_name' => ['sometimes', 'required', 'string'],
            'last_name' => ['nullable', 'string'],
            'email' => ['sometimes', 'required', 'email'],
            'username' => ['sometimes', 'required', 'string'],
            'password' => ['nullable', 'string'],
            'contact_no' => ['nullable', 'string'],
            'alt_number' => ['nullable', 'string'],
            'family_number' => ['nullable', 'string'],
            'crm_department' => ['nullable', 'string'],
            'crm_designation' => ['nullable', 'string'],
            'cmmsn_percent' => ['nullable', 'numeric'],
            'is_active' => ['nullable'],
        ];
    }
}
