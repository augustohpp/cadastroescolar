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
    }
}
