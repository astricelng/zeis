<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBannerRequest extends FormRequest
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
            'banner' => 'required|mimes:jpeg,jpg,png,gif|max:1000|dimensions:width=1920,height600'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Debe ingresar el nombre del evento',
            'banner.required' => 'Debe subir un banner',
            'banner.mimes' => 'El banner debe ser de tipo .jpg, .png o .gif',
            'banner.max' => 'El banner no debe ser mayor a 1mb',
            'banner.dimensions' => 'Las dimensiones del banner deben ser de 1920px de ancho y 600px de alto'
        ];
    }
}
