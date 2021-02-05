<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConfigurationRequest extends FormRequest
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
            'idioma' => 'required',
            'pais' => 'required',
            'estado' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'idioma' => 'Please fill the idioma',
            'pais' => 'Please fill the pais',
            'estado' => 'Please fill the estado'
        ];
    }
}
