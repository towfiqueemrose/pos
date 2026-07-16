<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class UpdateDiscountRequest extends FormRequest {
    public function authorize() { return true; }
    public function rules() {
        return [
            'name' => 'sometimes|required|string|max:255',
            'brand_id' => 'nullable|integer',
            'category_id' => 'nullable|integer',
            'location_id' => 'nullable|integer',
            'discount_type' => 'sometimes|required|in:fixed,percentage',
            'discount_amount' => 'sometimes|required|numeric|min:0',
            'variation_ids' => 'nullable|array',
            'starts_at' => 'nullable|date',
            'ends_at' => 'nullable|date|after_or_equal:starts_at',
        ];
    }
}
