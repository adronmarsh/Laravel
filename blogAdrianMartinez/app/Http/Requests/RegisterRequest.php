<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class RegisterRequest extends FormRequest
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
            'username' => ['required', 'string', 'min:5', 'max:20', 'unique:users'],
            'name' => ['required', 'string', 'min:2', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ];
    }

    public function messages()
    {
        return[
            'username.required' => 'El nombre de usuario es obligatorio.',
            'username.min' => 'El nombre de usuario debe tener como mínimo 5 caracteres.',
            'username.max' => 'El nombre de usuario debe tener como máximo 255 caracteres.',
            'userame.unique' => 'El nombre de usuario ya existe.',
            'name.required' => 'El nombre completo es obligatorio',
            'name.unique' => 'El nombre completo ya existe.',
            'name.max' => 'El nombre completo debe tener como máximo 255 caracteres.',
            'email.required' => 'El email de usuario es obligatorio.',
            'email.max' => 'El email debe tener como máximo 255 caracteres.',
            'email.unique' => 'El email ya existe.',
            'password.required' => 'La contraseña es obligatoria.',
            'password.confirmed' => 'Las contraseñas no coinciden.',
            'password.min' => 'La contraseña debe tener al menos 8 caracteres.',
        ];
    }
}
