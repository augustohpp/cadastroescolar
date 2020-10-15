<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlunoRequest extends FormRequest
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
            'sobrenome' => 'required',
            'sexo' => 'required',
            'data_Nascimento' => 'required|date|min:10',
            'tel' => 'required|min:16',
            // 'tel2' => 'min:16',
            'email' => 'required|email'
        ];
    }

    public function messages(){
        return [
            'nome.required' => 'Insira o nome do aluno',
            'nome.min' => 'Insira um nome válido',
            'sobrenome.required' => 'Insira o sobrenome do aluno',
            'sobrenome.min' => 'Insira um nome válido',
            'sexo.required' => 'Selecione o sexo do aluno',
            'data_Nascimento.required' => 'Insira a data de nascimento do aluno',
            'data_Nascimento.min' => 'Data de nascimento inválida',
            'data_Nascimento.date' => 'Data de nascimento inválida',
            'tel.required' => 'Insira o telefone do aluno',
            'tel.min' => 'Número de telefone inválido',
            'tel2.min' => 'Número de telefone inválido',
            'email.required' => 'Insira o email do aluno',
            'email.email' => 'Email inválido',
        ];
    }
}
