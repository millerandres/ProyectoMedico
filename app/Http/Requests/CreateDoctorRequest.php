<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateDoctorRequest extends FormRequest
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
                    'name'        => 'required|min:3',
                    'email'       => 'required|email|unique:users',
                    'dni'         => 'required|numeric|digits:8|unique:Users',
                    'addres'      => 'nullable|min:5',
                    'phone'       => 'nullable|digits:8|numeric'
               ];

         
    }

    public function messages()
    {
        return [
            'name.required' => '[Error nombre obligatorio]',
            'name.min' => ' [Error minimo tres caracteres]',
            'email.required' => '[Error Email obligatorio]',
            'email.email' => '[Error Email Invalido]',
            'dni.required' => '[Error dni obligatorio]',
            'dni.numeric' => ' [Error dni Solo numeros]',
            'dni.min' => ' [Error minimo ocho caracteres]',
            'addres.required' => '[Error direccion obligatorio]',
            'addres.min' => ' [Error minimo cinco caracteres]',
            'phone.required' => '[Error telefono obligatorio]',
            'phone.numeric' => ' [Error telefono solo numerico]',

               ];
    }
}
