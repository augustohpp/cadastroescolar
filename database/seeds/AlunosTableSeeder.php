<?php

use App\Aluno;
use Illuminate\Database\Seeder;

class AlunosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $aluno = new Aluno();
        $aluno->nome = 'George';
        $aluno->sobrenome = 'Franklin';
        $aluno->sexo = 'Masculino';
        $aluno->data_Nascimento = '17/04/2002';
        $aluno->tel = '(51) 9 9654-1547';
        $aluno->tel2 = null;
        $aluno->email = 'georgefranklin@gmail.com';
        $aluno->turma_id = 1;
        $aluno->save();

        $aluno2 = new Aluno();
        $aluno2->nome = 'Michele';
        $aluno2->sobrenome = 'Ackermann';
        $aluno2->sexo = 'Feminino';
        $aluno2->data_Nascimento = '25/09/2002';
        $aluno2->tel = '(51) 9 8451-9671';
        $aluno2->tel2 = null;
        $aluno2->email = 'micheleackermann@gmail.com';
        $aluno2->turma_id = 1;
        $aluno2->save();

        $aluno3 = new Aluno();
        $aluno3->nome = 'Natália';
        $aluno3->sobrenome = 'Alves';
        $aluno3->sexo = 'Feminino';
        $aluno3->data_Nascimento = '07/05/2002';
        $aluno3->tel = '(51) 9 9942-4167';
        $aluno3->tel2 = null;
        $aluno3->email = 'alvesnatalia@gmail.com';
        $aluno3->turma_id = 1;
        $aluno3->save();

        $aluno4 = new Aluno();
        $aluno4->nome = 'Thiago';
        $aluno4->sobrenome = 'Andrade';
        $aluno4->sexo = 'Masculino';
        $aluno4->data_Nascimento = '23/02/2002';
        $aluno4->tel = '(51) 9 9167-4173';
        $aluno4->tel2 = null;
        $aluno4->email = 'thiaguerandrade@gmail.com';
        $aluno4->turma_id = 1;
        $aluno4->save();

        $aluno = new Aluno();
        $aluno->nome = 'Abrodolph';
        $aluno->sobrenome = 'Lincoler';
        $aluno->sexo = 'Masculino';
        $aluno->data_Nascimento = '25/07/2002';
        $aluno->tel = '(51) 9 9426-6155';
        $aluno->tel2 = null;
        $aluno->email = 'abrodolphlincoler@gmail.com';
        $aluno->turma_id = 1;
        $aluno->save();
    }
}
