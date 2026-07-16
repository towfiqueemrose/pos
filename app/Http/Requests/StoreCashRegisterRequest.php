<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class StoreCashRegisterRequest extends FormRequest {
    public function authorize() { return true; }
    public function rules() {
        return [
            'amount' => 'required|numeric|min:0',
            'location_id' => 'required|integer',
        ];
    }
}
