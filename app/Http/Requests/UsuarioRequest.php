<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioRequest extends FormRequest
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
            'nombre_usuario' => 'required',
            'nombre_completo' => 'required',
            'email' => 'required',
            'telefono' => 'required',
            'edad' => 'required',
            'fecha_nacimiento' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'nombre_usuario' => 'Please fill the nombre_usuario',
            'nombre_completo' => 'Please fill the nombre_completo',
            'email' => 'Please fill the email',
            'telefono' => 'Please fill the telefono',
            'edad' => 'Please fill the edad',
            'fecha_nacimiento' => 'Please fill the fecha_nacimiento',
        ];
    }
}
