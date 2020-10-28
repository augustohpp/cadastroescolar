<?php

use App\Turma;
use Illuminate\Database\Seeder;

class TurmasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $class = new Turma;
        $class->turma = '1C';
        $class->nivel = 'Médio';
        $class->ano = '1° ano';
        $class->turno = 'Integral';
        $class->vagas = 5;
        $class->professor_id = 1;
        $class->save();
    }
}
