<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfessorRequest extends FormRequest
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
            'nome' => 'required|min:3',
            'sobrenome' => 'required|min:3',
            'sexo' => 'required',
            'data_Nascimento' => 'required|date|min:10',
            'tel' => 'required|min:16',
            'tel2' => 'min:16',
            'email' => 'required|email',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Insira o nome',
            'nome.min' => 'Insira um nome válido',
            'sobrenome.required' => 'Insira o sobrenome',
            'sobrenome.min' => 'Insira um nome válido',
            'sexo.required' => 'Selecione o sexo',
            'data_Nascimento.required' => 'Insira a data de nascimento',
            'data_Nascimento.min' => 'Insira uma data válida',
            'data_Nascimento.date' => 'Insira uma data válida',
            'tel.required' => 'Insira um telefone',
            'tel.min' => 'Número de telefone inválido',
            'tel2.min' => 'Número de telefone inválido',
            'email.required' => 'Insira um email',
            'email.email' => 'Email inválido',
        ];
    }
}
