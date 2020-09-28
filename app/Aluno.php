<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $table = 'alunos';
    
    protected $fillable = [
        'nome',
        'sobrenome',
        'sexo',
        'data_Nascimento',
        'tel',
        'tel2',
        'email'
    ];

    public function endereco()
    {
        return $this->hasOne('App\Endereco');
    }

    public function turma()
    {
        return $this->belongsToMany('App\Turma', 'alunoturmas');
    }

}
