<?php

namespace audiophoneapp\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(){
        
        return true;
    
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(){

        return [
          
            'firstName' => 'required|string|min:1|max:10',
            'lastName' =>  'required|string|min:1|max:10',
            'codePhone' => 'required|numeric|min:1|max:2',
            'cellPhone' => 'required|numeric|min:1|max:10'

        ];
    }

    public function messages(){

        return [

            'firstName.required.string.min:1.max:10' => 'El campo :attribute, es obligatorio y solo admite desde 1 hasta 10 caracteres alfabéticos',
            'lastName.required.string.min:1.max:10' => 'El campo :attribute, es obligatorio y solo admite desde 1 hasta 10 caracteres alfabéticos',
            'codePhone.required.numeric.min:1.max:2' => 'El campo :attribute, es obligatorio y solo admite desde 1 hasta 2 caracteres numéricos',
            'cellPhone.required.numeric.min:1.max:10' => 'El campo :attribute, es obligatorio y solo admite desde 1 hasta 10 caracteres numéricos'
    
        ];
    }
    
}
