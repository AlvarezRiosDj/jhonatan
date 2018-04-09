<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('users')->insert([
        	'first_name'=>'david',
            'last_name'=>'alvarez',
        	'email'=>'alvarez.rios.dj@gmail.com',
            'password'=>bcrypt('a'),
        	'privilege'=>'administrador',
            'img'=>'vacio'
        ]);
    

    }
}
