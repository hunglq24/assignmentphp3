<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:3'
        ];
    }

    public function messages() {
     return [
            'name.required' => 'name không được để trống',
            'email.required' => 'email không đc để trống',
            'email.email' => 'email không đúng định dạng',
            'password.required' => 'password không đc để trống',
            'password.min' => 'password quá ngắn'
     ];
    }
}
