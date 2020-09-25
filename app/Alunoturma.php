<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alunoturma extends Model
{
    protected $table = 'alunoturmas';

    protected $fillable = [
        'aluno_id',
        'turma_id'
    ];
}
