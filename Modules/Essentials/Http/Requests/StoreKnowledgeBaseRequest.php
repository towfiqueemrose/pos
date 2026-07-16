<?php

namespace Modules\Essentials\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreKnowledgeBaseRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|string',
            'content' => 'nullable|string',
            'kb_type' => 'nullable|string',
            'parent_id' => 'nullable|integer|exists:essentials_knowledge_bases,id',
            'share_with' => 'nullable|string',
            'user_ids' => 'nullable|array',
            'user_ids.*' => 'integer|exists:users,id',
        ];
    }
}
