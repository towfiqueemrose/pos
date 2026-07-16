<?php

namespace Modules\Crm\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProposalRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'contact_id' => ['sometimes', 'required', 'integer', 'exists:contacts,id'],
            'subject' => ['sometimes', 'required', 'string'],
            'body' => ['sometimes', 'required', 'string'],
            'cc' => ['nullable', 'string'],
            'bcc' => ['nullable', 'string'],
        ];
    }
}
