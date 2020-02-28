<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          User::create([
	        'name'=>'EventManager',
	        'email'=>'i@em.com',
	        'password'=>Hash::make('12345678')
        ]);
    }
}
