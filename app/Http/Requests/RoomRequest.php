<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoomRequest extends FormRequest
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
            'title' => 'required|min:5',
            'owner' => 'required|exists:owner,id',
            'type' => 'required|min:3',
            'address' => 'required|exists:address,id',
            'prize' => 'required'
            'description' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required'=> 'El :attribute es requerido.',
            'title.min' => 'El :attribute debe tener al menos 3 caracteres.',

            'owner.required' => 'El :attribute es requerido.',
            'owner.exists' => 'El :attribute debe ser un usuario registrado en al base de datos.',

            'type.required' => 'El :attribute es requerido.',

            'adress.required' => 'El campo de :attribute no puede estar vacío.'
            'adress.exists' => 'Debe introducir una :attribute ya registrada en la base de datos.',

            'description.required' => 'La :attribute es requerida.',

            'prize.required' => 'Se requiere especificar un :attribute de la sala.'
        ];
    }

    public function attributes()
    {
        return [
            'title' => 'título de la sala',
            'owner' => 'propietario de la sala',
            'type' => 'tipo de la sala',
            'address' => 'dirección',
            'prize' => 'precio'
            'description' => 'descripción de la sala'
        ];
    }
}
