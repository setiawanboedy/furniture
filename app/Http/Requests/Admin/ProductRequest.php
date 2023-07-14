<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'suplier_id'=>'required',
            'name'=>'required|max:255',
            'category'=>'required|max:255',
            'image'=>'required|image',
            'price'=>'required|integer',
            'desc'=>'required',
        ];
    }
}
