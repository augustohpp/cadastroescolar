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
        'email',
        'turma_id'
    ];

    public function endereco()
    {
        return $this->hasOne('App\Endereco');
    }

    public function turma()
    {
        return $this->belongsTo('App\Turma');
    }

}
