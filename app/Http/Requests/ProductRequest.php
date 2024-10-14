<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name_product' => 'required',
            'price' => 'required',
            'view' => 'required',
            'description' => 'required'
        ];
    }

    public function messages(){
        return [
            'name_product.required' => 'tên sản phẩm không được để trống',
            'price.required' => 'giá sản phẩm không được để trống',
            'view.required' => 'view không được để trống',
            'description.required' => 'description không được để trống'
        ];

    }
}
