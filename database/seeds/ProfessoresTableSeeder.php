<?php

use App\Professor;
use Illuminate\Database\Seeder;

class ProfessoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prof = new Professor();
        $prof->nome = 'Roberto';
        $prof->sobrenome = 'Lopes';
        $prof->sexo = 'Masculino';
        $prof->data_Nascimento = '12-12-1979';
        $prof->tel = '(51) 9 9856-4512';
        $prof->tel2 = null;
        $prof->email = 'robertolopes@gmail.com';
        $prof->save();
    }
}
