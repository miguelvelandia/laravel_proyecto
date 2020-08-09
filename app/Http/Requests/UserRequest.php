<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'name'=>'required|min:3|max:20',
            'email'=>'required|email:rfc',
            'password'=>'required|confirmed:password|alpha_num',
            'password_confirmation'=>'required'
        ];
    }

    public function attributes()
    {
        return [
            'email' => 'Correo Electronico',
            'password'=>'Contraseña'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'El :attribute es requerido',
            'confirmed'=>'La :attribute debe ser igual en la confirmación'
        ];
    }
}

