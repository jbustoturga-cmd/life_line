<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUsuarioRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $id = $this->route('usuario')->id; // importante: usar el id del modelo

        return [
            'username' => [
                'required',
                'string',
                'max:50',
                Rule::unique('usuarios', 'username')->ignore($id)
            ],
            'password' => 'nullable|string|min:6|max:100',
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'El nombre de usuario es obligatorio.',
            'username.unique'   => 'Este usuario ya existe.',
        ];
    }
}
