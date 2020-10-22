<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Aluno extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    
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
