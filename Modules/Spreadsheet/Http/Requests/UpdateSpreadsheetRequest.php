<?php

namespace Modules\Spreadsheet\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSpreadsheetRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'nullable|string',
            'sheet_data' => 'nullable',
        ];
    }
}
