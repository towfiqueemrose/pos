<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class StoreDiscountRequest extends FormRequest {
    public function authorize() { return true; }
    public function rules() {
        return [
            'name' => 'required|string|max:255',
            'brand_id' => 'nullable|integer',
            'category_id' => 'nullable|integer',
            'location_id' => 'nullable|integer',
            'discount_type' => 'required|in:fixed,percentage',
            'discount_amount' => 'required|numeric|min:0',
            'variation_ids' => 'nullable|array',
            'starts_at' => 'nullable|date',
            'ends_at' => 'nullable|date|after_or_equal:starts_at',
        ];
    }
}
