<?php

namespace audiophoneapp\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccountsRequest extends FormRequest
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
            
            'email' => 'required|email|min:1';
            'password' => 'required|string|min:1';
            
        ];
    }


    public function attributes(){

        return [

            'email' => 'Email',
            'password' => 'Contraseña'

        ];
    }

    public function messages(){

        return [

            'email.required' => 'El campo :attribute, es obligatorio y solo admite desde 1 hasta 10 caracteres alfabéticos',
            'password.required' => 'El campo :attribute, es obligatorio y solo admite desde 1 hasta 10 caracteres alfabéticos'

        ];
    }
        
}
