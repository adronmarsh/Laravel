<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccountRequest extends FormRequest
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
            'birthday' => ['required', 'date'],
        ];
    }

    public function messages()
    {
        return [
            'birthday.required' => 'El campo de fecha de nacimiento es obligatorio',
            'birthday.date' => 'El campo de fecha de nacimiento debe contener el siguiente formato: YYYY-MM-DD',
        ];
    }
}
