<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'adm';
        $user->cpf = '123.456.789-12';
        $user->email = 'adm@gmail.com';
        $user->password = Hash::make('admin1234');
        $user->categoria = 1;
        $user->save();

        $user = new User();
        $user->name = 'gestor';
        $user->cpf = '234.567.891-23';
        $user->email = 'gestor@gmail.com';
        $user->password = Hash::make('gestor1234');
        $user->categoria = 2;
        $user->save();

        $user = new User();
        $user->name = 'operador';
        $user->cpf = '345.678.912-34';
        $user->email = 'operador@gmail.com';
        $user->password = Hash::make('operador1234');
        $user->categoria = 3;
        $user->save();
    }
}
