<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Professor extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

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
