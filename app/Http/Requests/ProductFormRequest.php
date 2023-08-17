<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'category_id' => [
                'required',
                'integer'
            ],
            'meats_id' => [
                'required',
                'integer'
            ],
            'original_price' => [
                'required',
                'integer'
            ],
            'selling_price' => [
                'required',
                'integer'
            ],
            'quantity' => [
                'required',
                'integer'
            ],
            'status' => [
                'required',
                'integer'
            ],
            'trending' => [
                'required',
                'integer'
            ],
            'meta_title' => [
                'required',
                'string'
            ],
            'meta_keyword' => [
                'required',
                'string'
            ],
            'meta_description' => [
                'required',
                'string'
            ],
            'description' => [
                'required',
                'string'
            ],
            'small_description' => [
                'required',
                'string'
            ],
            'meat' => [
                'required',
                'string',
                'max:255'
            ],
            'weight' => [
                'required',
                'integer'
            ],
            'name' => [
                'required',
                'string'
            ],
            

        ];
    }
}
