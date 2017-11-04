<?php

use Illuminate\Database\Seeder;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        static $password;
        DB::table('users')->insert([
        
	    	'nombre' => 'Crissel',
	        'apellido' => 'Campos',
	        'email' => 'crissel_corina@hotmail.com',
	        'cedula' => '25827935',
	        'nivel' => '2',
	        'acceso' => '1',
	        'telefono' => '04144774239',
	        'password' => $password ?: $password = bcrypt('123123123'),
	        'remember_token' => str_random(10)

    	]);


        DB::table('users')->insert([
        
	    	'nombre' => 'Fidel',
	        'apellido' => 'Marcano',
	        'email' => 'fidelmedinam2@gmail.com',
	        'cedula' => '25447110',
	        'nivel' => '2',
	        'acceso' => '1',
	        'telefono' => '04265331773',
	        'password' => $password ?: $password = bcrypt('123123123'),
	        'remember_token' => str_random(10)

    	]);

    	DB::table('users')->insert([
        
	    	'nombre' => 'User1',
	        'apellido' => 'Uno',
	        'email' => 'test1@gmail.com',
	        'cedula' => '25442110',
	        'acceso' => '1',
	        'nivel' => '1',
	        'telefono' => '04265331774',
	        'password' => $password ?: $password = bcrypt('123123123'),
	        'remember_token' => str_random(10)

    	]);

    	DB::table('users')->insert([
        
	    	'nombre' => 'User2',
	        'apellido' => 'Dos',
	        'email' => 'test2@gmail.com',
	        'cedula' => '25442111',
	        'acceso' => '0',
	        'nivel' => '0',
	        'telefono' => '04245331774',
	        'password' => $password ?: $password = bcrypt('123123123'),
	        'remember_token' => str_random(10)

    	]);
    }
}
