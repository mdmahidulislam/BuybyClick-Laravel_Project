<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'productname' => 'required|alpha_num|max:10',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|numeric|min:1'
        ];
    }

    public function messages()
    {
        return [
            'productname.required' => 'Product name is required',
            'price.required' => 'You must enter a price',
            'price.required' => 'Price should min 1',
            'price.numeric' => 'Price must be a number',
            'quantity.numeric' => 'Quantity must be a number',
            'quantity.required' => 'Quantity should min 1',
            'quantity.required' => 'You must enter valid quantity'
        ];
    }
}
