<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HeadquarterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return tru;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'  =>  'required|unique:headquarter',
            'address_id'    =>  'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' =>  'El nombre de la sede es requerido',
            'name.uniqued'  =>  'El nombre de esta sede ya esta registrado, por favor prueba con otro',
            'address_id'    =>  ''
        ];
    }
}
