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
            'nome' => 'required',
            'sobrenome' => 'required',
            'sexo' => 'required',
            'data_Nascimento' => 'required',
            'tel' => 'required',
            'email' => 'required|email'
        ];
    }

    public function messages(){
        return [
            'nome.required' => 'Insira o nome do aluno',
            'sobrenome.required' => 'Insira o sobrenome do aluno',
            'sexo.required' => 'Selecione o sexo do aluno',
            'data_Nascimento.required' => 'Insira a data de nascimento do aluno',
            'data_Nascimento.date' => 'Data de nascimento inválida',
            'tel.required' => 'Insira o telefone do aluno',
            'email.required' => 'Insira o email do aluno',
        ];
    }
}
