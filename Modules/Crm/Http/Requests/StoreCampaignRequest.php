<?php

namespace Modules\Crm\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCampaignRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => ['required', 'string'],
            'campaign_type' => ['required', 'string', 'in:email,sms'],
            'subject' => ['nullable', 'string'],
            'email_body' => ['nullable', 'string'],
            'sms_body' => ['nullable', 'string'],
            'contact_id' => ['nullable', 'array'],
            'lead_id' => ['nullable', 'array'],
            'contact' => ['nullable', 'array'],
            'to' => ['nullable', 'string'],
            'trans_activity' => ['nullable', 'string'],
            'in_days' => ['nullable', 'string'],
            'send_notification' => ['nullable'],
        ];
    }
}
