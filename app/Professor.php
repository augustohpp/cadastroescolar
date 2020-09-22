<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $table = 'professores';

    protected $fillable = [
        'nome',
        'sobrenome',
        'sexo',
        'data_Nascimento',
        'tel',
        'tel2',
        'email'
    ];
    
    public function turma()
    {
        return $this->hasMany('App\Turma');
    }
}
