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
        //
        User::create([
        	'name' => 'Sergio',		
            'email' => 'frezee13@gmail.com',
            'password' => bcrypt ('erika#$18'),
            'admin' => true
        ]);
    }
}
