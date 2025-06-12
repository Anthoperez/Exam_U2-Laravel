<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlumnoRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Permitir a todos los usuarios hacer esta solicitud
    }

    public function rules()
    {
        return [
            'nombre' => 'required|string|max:255',
            'curso' => 'required|string|max:255',
            'nota1' => 'required|numeric|min:0|max:20',
            'nota2' => 'required|numeric|min:0|max:20',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.max' => 'El nombre no puede exceder los 255 caracteres.',
            'curso.required' => 'El curso es obligatorio.',
            'curso.max' => 'El curso no puede exceder los 255 caracteres.',
            'nota1.required' => 'La nota 1 es obligatoria.',
            'nota1.numeric' => 'La nota 1 debe ser un número.',
            'nota1.min' => 'La nota 1 debe ser al menos 0.',
            'nota1.max' => 'La nota 1 no puede ser mayor a 20.',
            'nota2.required' => 'La nota 2 es obligatoria.',
            'nota2.numeric' => 'La nota 2 debe ser un número.',
            'nota2.min' => 'La nota 2 debe ser al menos 0.',
            'nota2.max' => 'La nota 2 no puede ser mayor a 20.',
        ];
    }
}