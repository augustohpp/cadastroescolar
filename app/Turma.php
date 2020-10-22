<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Turma extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $table = 'turmas';
    
    protected $fillable = [
        'turma',
        'nivel',
        'ano',
        'turno',
        'vagas',
        'professor_id'
    ];

    public function professor() {
        return $this->belongsTo('App\Professor');
    }

    public function aluno()
    {
        return $this->hasMany('App\Aluno');
    }
    
}
