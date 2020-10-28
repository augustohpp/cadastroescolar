<?php

use App\Endereco;
use Illuminate\Database\Seeder;

class EnderecoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $endereco = new Endereco();
        $endereco->cep = '93010-030';
        $endereco->cidade = 'São Leopoldo';
        $endereco->bairro =  'Centro';
        $endereco->rua = 'Rua Brasil';
        $endereco->numero = '50';
        $endereco->complemento = 'ap 202';
        $endereco->aluno_id = 1;
        $endereco->save();

        $endereco = new Endereco();
        $endereco->cep = null;
        $endereco->cidade = null;
        $endereco->bairro =  null;
        $endereco->rua = null;
        $endereco->numero = null;
        $endereco->complemento = null;
        $endereco->aluno_id = 2;
        $endereco->save();

        $endereco = new Endereco();
        $endereco->cep = null;
        $endereco->cidade = null;
        $endereco->bairro =  null;
        $endereco->rua = null;
        $endereco->numero = null;
        $endereco->complemento = null;
        $endereco->aluno_id = 3;
        $endereco->save();

        $endereco = new Endereco();
        $endereco->cep = null;
        $endereco->cidade = null;
        $endereco->bairro =  null;
        $endereco->rua = null;
        $endereco->numero = null;
        $endereco->complemento = null;
        $endereco->aluno_id = 4;
        $endereco->save();

        $endereco = new Endereco();
        $endereco->cep = null;
        $endereco->cidade = null;
        $endereco->bairro =  null;
        $endereco->rua = null;
        $endereco->numero = null;
        $endereco->complemento = null;
        $endereco->aluno_id = 5;
        $endereco->save();
    }
}
