<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name_category' => 'required',
        ];
    }

    public function messages(){
        return [
            'name_category.required' => 'tên loại sản phẩm không được để trống',
        ];

    }
}
