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
            'data_Nascimento' => 'required|date_format:dd/mm/yyyy|min:8',
            'tel' => 'required',
            'email' => 'required|email',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Insira o nome',
            'sobrenome.required' => 'Insira o sobrenome',
            'sexo.required' => 'Selecione o sexo',
            'data_Nascimento.required' => 'Insira a data de nascimento',
            'data_Nascimento.min' => 'Insira uma data válida',
            'tel.required' => 'Insira um telefone',
            'email.required' => 'Insira um email',
        ];
    }
}
