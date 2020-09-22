<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $table = 'enderecos';

    protected $fillable = [
        'cep',
        'cidade',
        'bairro',
        'rua',
        'numero',
        'complemento'
    ];

    public function morador(){
        return $this->belongsTo('App\Aluno');
    }
}