<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class StoreBarcodeRequest extends FormRequest {
    public function authorize() { return true; }
    public function rules() {
        return [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'width' => 'required|integer|min:1',
            'height' => 'required|integer|min:1',
            'stickers_in_one_row' => 'required|integer|min:1',
            'paper_width' => 'nullable|numeric',
            'paper_height' => 'nullable|numeric',
            'margin_top' => 'nullable|numeric',
            'margin_bottom' => 'nullable|numeric',
            'margin_left' => 'nullable|numeric',
            'margin_right' => 'nullable|numeric',
        ];
    }
}
