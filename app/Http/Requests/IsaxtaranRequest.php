<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IsaxtaranRequest extends FormRequest
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
            'salary' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email',
            'position' => 'required|string',
            'gender' => 'required|string',
            'country' => 'required|string',
            'experience' => 'required|string',
            'education' => 'required|string',
            'about_education' => 'required',
            'language_knowledge' => 'required',
            'details' => 'required',
        ];
    }
}
