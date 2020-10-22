<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Endereco extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

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