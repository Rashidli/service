<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MehsulaxtaranRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'add_type' => 'required|integer',
            'person_name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email',
            'product_name' => 'required|string',
            'product_price' => 'required|string',
            'product_address' => 'required|string',
            'details' => 'required|string',
            'product_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ];
    }
}
