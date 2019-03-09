<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
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
            'name' => 'required|min:3',
            
            'startDate' => 'required|date|before_or_equal:endDate',
            
            'endDate' => 'required|date|after_or_equal:startDate'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El :attribute es requerido.',
            'name.min' => 'El :attribute debe tener al menos 3 caracteres.',

            'startDate.required' => 'Se requiere una fecha de inicio del periodo de la reserva.',
            'startDate.before_or_equal' => 'La fecha de inicio no puede ser posterior a la de finalización de la reserva.',
            'endDate.required' => 'Se requiere una fecha de finalización del periodo de la reserva.',
            'endDate.after_or_equal' => 'La fecha de finalización no puede ser anterior a la fecha de inicio de la reserva.',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'título de la reserva',
 
        ];
    }
}
