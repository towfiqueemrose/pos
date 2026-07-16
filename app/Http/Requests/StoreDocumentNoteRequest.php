<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class StoreDocumentNoteRequest extends FormRequest {
    public function authorize() { return true; }
    public function rules() {
        return [
            'documentable_id' => 'required|integer',
            'documentable_type' => 'required|string',
            'note' => 'nullable|string',
            'document' => 'nullable|file|max:10240',
        ];
    }
}
