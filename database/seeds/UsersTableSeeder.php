<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate(); //para vaciar la tabla usuarios

        $user = new User;
        $user->name = 'elias';
        $user->email = 'elias@elias.com';
        $user->rol = 'jefe';
        $user->password = bcrypt('123123');
        $user->save();

        $user = new User;
        $user->name = 'empleado';
        $user->email = 'empleado@empleado.com';
        $user->rol = 'empleado';
        $user->password = bcrypt('empleado');
        $user->save();
    }
}
