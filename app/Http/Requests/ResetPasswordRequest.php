<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordRequest extends FormRequest
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
            'password' => 'required|confirmed|min:3',
            'password_confirmation' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'password.required' => 'Digite a nova senha',
            'password.confirmed' => 'Senhas não batem',
            'password_confirmation.required' => 'Confirme sua senha',
        ];
    }
}
