<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string|max:255',
            'hour' => 'required|date_format:H:i',
            'date' => 'required|date|after_or_equal:' . date('Y-m-d') . '|before_or_equal:2999-12-31',
            'tags' => 'nullable|string',
            'visible' => 'required|boolean',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre es obligatorio.',
            'name.string' => 'El nombre debe ser una cadena de caracteres.',
            'name.max' => 'El nombre no debe ser mayor de 255 caracteres.',

            'description.required' => 'La descripción es obligatoria.',
            'description.string' => 'La descripción debe ser una cadena de caracteres.',

            'location.required' => 'La ubicación es obligatoria.',
            'location.string' => 'La ubicación debe ser una cadena de caracteres.',
            'location.max' => 'La ubicación no debe ser mayor de 255 caracteres.',

            'hour.required' => 'La hora es obligatoria.',
            'hour.date_format' => 'La hora no tiene un formato válido.',

            'date.required' => 'La fecha es obligatoria.',
            'date.date' => 'La fecha no tiene un formato válido.',
            'date.after_or_equal' => 'La fecha debe ser posterior o igual al día de hoy.',
            'date.before_or_equal' => 'La fecha no puede ser posterior al 31 de diciembre del año 2999.',

            'tags.string' => 'Los tags deben ser una cadena de caracteres.',

            'visible.required' => 'La visibilidad es obligatoria.',
            'visible.boolean' => 'La visibilidad debe ser 0 o 1.',
        ];
    }
}
