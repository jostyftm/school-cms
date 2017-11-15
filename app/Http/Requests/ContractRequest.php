<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContractRequest extends FormRequest
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
            'name'  =>  'required|unique:contracts',
            'description'   =>  'required',
            'created_at'    =>  'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre del contraro es requerido',
            'name.unique'   =>  'El nombre para este contrato ya esta registrado',
            'description.required'  =>  'La descripción es requerida',
            'created_at.required'   =>  'La fecha es requerida',
        ]; 
    }
}
