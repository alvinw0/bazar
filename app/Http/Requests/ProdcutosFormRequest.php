<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdcutosFormRequest extends FormRequest
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
            'id'=>'required',
            'descripcion'=>'max:512',
            'precio_propuesto'=>'required|numeric',
            'precio_vendido'=>'required|numeric',
            'consignado'=>'max:512',
            'disponibles'=>'mimes:jpeg,bmp,png'
        ];
    }
}
