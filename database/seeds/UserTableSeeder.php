<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
    	User::create([
	        'name' => 'Diego',
	        'email' => 'diego.rojas0640@gmail.com',
	        'password' => bcrypt('2020')
 		]);
        User::create([
            'name' => 'Aleja',
            'email' => 'aleesuarez0909@gmail.com',
            'password' => bcrypt('2020')
        ]);
        User::create([
            'name' => 'Fran',
            'email' => 'franyeliz@gmail.com',
            'password' => bcrypt('2020')
        ]);
    }
}
