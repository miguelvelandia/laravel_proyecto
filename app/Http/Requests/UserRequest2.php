<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest2 extends FormRequest
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
            'name'=>'required|min:3|max:20',
            'email'=>'required|email:rfc',
            'password'=>'required|confirmed:password|alpha_num',
            'password_confirmation'=>'required'
        ];
    }

    public function attributes()
    {
        return [
            'name'=>'Nombre',
            'email' => 'Correo Electronico',
            'password'=>'Contraseña'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'El :attribute es requerido',
            'min'=>'El :attribute no puede tener menos de 3 letras',
            'confirmed'=>'La :attribute debe ser igual en la confirmación',
            'email'=>'El :attribute no tiene formato valido'
        ];
    }

    
}
