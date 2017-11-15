<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title'  =>  'required|unique:posts',
            'body'  =>  'required',
            'category_id'   =>  'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' =>  'El titulo es requerido',
            'title.unique'   =>  'El titulo del post ya esta registrado',
            'body.required'          =>  'La descripció es requerida',
            'category_id.required'  =>  'La categoria es requerida',
        ];
    }
}
