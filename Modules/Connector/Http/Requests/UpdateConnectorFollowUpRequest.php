<?php

namespace Modules\Connector\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateConnectorFollowUpRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'sometimes|required|string|max:255',
            'contact_id' => 'sometimes|required|integer|exists:contacts,id',
            'description' => 'nullable|string',
            'schedule_type' => 'sometimes|required|string|in:call,sms,meeting,email',
            'user_id' => 'sometimes|required|array',
            'user_id.*' => 'integer|exists:users,id',
            'notify_before' => 'nullable|integer|min:0',
            'notify_type' => 'nullable|string|in:minute,hour,day',
            'status' => 'nullable|string|in:scheduled,open,canceled,completed',
            'notify_via' => 'nullable|array',
            'notify_via.sms' => 'nullable|boolean',
            'notify_via.mail' => 'nullable|boolean',
            'start_datetime' => 'sometimes|required|date_format:Y-m-d H:i:s',
            'end_datetime' => 'sometimes|required|date_format:Y-m-d H:i:s',
            'allow_notification' => 'nullable|boolean',
            'followup_additional_info' => 'nullable|array',
            'followup_category_id' => 'nullable|integer',
        ];
    }
}
