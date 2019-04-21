<?php

namespace audiophoneapp\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeAccounts extends FormRequest
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
            
            'email' => 'required|email|min:1|max:20';
            'password' => 'required|string|min:1|max:15';
            
        ];
    }
}
