<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    protected $table = 'turmas';
    
    protected $fillable = [
        'turma',
        'nivel',
        'ano',
        'turno',
        'vagas',
        'professor'
    ];

    public function professor() {
        return $this->hasOne('App\Professor', 'id');
    }
}
