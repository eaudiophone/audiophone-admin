<?php

namespace audiophoneapp\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class almacenarUsers extends FormRequest
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
            'lastName' => 'required|string|min:1|max:10',
            'codePhone' => 'required|numeric|min:1|max:2',
            'cellPhone' => 'required|numeric|min:1|max:10'

        ];
    }
    
}
