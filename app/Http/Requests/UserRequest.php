<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|unique',
            'cpf' => 'required|min:14',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|confirmed',
            'categoria' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Insira um nome',
            'email.required' => 'Insira um email',
            'cpf.required' => 'Insira um cpf',
            'cpf.cpf' => 'Cpf inválido',
            'password.required' => 'Insira uma senha',
            'password_confirmation.required' => 'Confirme sua senha',
            'categoria.required' => 'Selecione a categoria do usuário',
        ];
    }
}
