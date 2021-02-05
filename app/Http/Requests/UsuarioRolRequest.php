<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioRolRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'rol_id' => 'required',
            'usuario_id' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'rol_id' => 'Please fill the rol_id',
            'usuario_id' => 'Please fill the usuario_id',
        ];
    }
}
