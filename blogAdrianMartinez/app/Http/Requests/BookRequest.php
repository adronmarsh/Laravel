<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'title' => 'required|min:3|max:255',
            'content' => 'required|max:1000',
            'autor' => 'required|exists:writers,id'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Debes rellenar el título',
            'title.min' => 'El título debe tener al menos 3 caracteres',
            'title.max' => 'El título no puede tener más de 255 caracteres',
            'content.required' => 'Debes rellenar el contenido',
            'content.max' => 'El contenido no puedo tener más de 1000 caracteres',
            'autor.required' => 'Debes indicar el autor del post',
            'autor.exists' => 'Este autor no existe'
        ];
    }
}
