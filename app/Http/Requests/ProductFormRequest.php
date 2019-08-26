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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'id_type' => 'required|numeric',
            'description' => 'required|string',
            'unit_price' => 'required|numeric',
            'promotion_price' => 'required|numeric',
            'image' => 'required|url',
            'unit' => 'required|max:7',
            'new' => 'required',
        ];
    }
}
