<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TurmaRequest extends FormRequest
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
            'turma' => 'required',
            'nivel' => 'required',
            'ano' => 'required',
            'turno' => 'required',
            'vagas' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'turma.required' => 'Digite o nome da turma',
            'nivel.required' => 'Selecione um nível',
            'ano.required' => 'Selecione um ano',
            'turno.required' => 'Selecione um turno',
            'vagas.required' => 'Informe o número de vagas',
            'vagas.integer' => 'Utilize apenas números',
        ];
    }
}
