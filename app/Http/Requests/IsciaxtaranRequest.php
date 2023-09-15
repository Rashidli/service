<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IsciaxtaranRequest extends FormRequest
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
            'company_name' => 'required|string',
            'phone' => 'required|string',
            'salary' => 'required|string',
            'email' => 'required|email',
            'position' => 'required|string',
            'gender' => 'required|string',
            'country' => 'required|string',
            'experience' => 'required|string',
            'education' => 'required|string',
            'candidate_requirements' => 'required',
            'about_vacancy' => 'required',
        ];
    }
}
