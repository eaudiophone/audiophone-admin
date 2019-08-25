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
          
            'firstName' => 'required|string|min:1',
            'lastName' =>  'required|string|min:1',
            'codePhone' => 'required|numeric|min:1',
            'cellPhone' => 'required|numeric|min:1'

        ];
    }


    public function attributes(){

        return [

            'firstName' => 'Nombre',
            'lastName' =>  'Apellido',
            'codePhone' => 'Código telefónico',
            'cellPhone' => 'Teléfono Celular'    

        ];
    }

    public function messages(){

        return [

            'firstName.required' => 'El campo :attribute, es obligatorio y solo admite desde 1 hasta 10 caracteres alfabéticos',
            'lastName.required' => 'El campo :attribute, es obligatorio y solo admite desde 1 hasta 10 caracteres alfabéticos',
            'codePhone.required' => 'El campo :attribute, es obligatorio y solo admite desde 1 hasta 2 caracteres numéricos',
            'cellPhone.required' => 'El campo :attribute, es obligatorio y solo admite desde 1 hasta 10 caracteres numéricos'
    
        ];
    }
    
}
