<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class StoreNotificationTemplateRequest extends FormRequest {
    public function authorize() { return true; }
    public function rules() {
        return [
            'template_data' => 'required|array',
            'template_data.*.subject' => 'nullable|string',
            'template_data.*.email_body' => 'nullable|string',
            'template_data.*.sms_body' => 'nullable|string',
        ];
    }
}
