<?php

use Illuminate\Database\Seeder;
use App\Message;

class MessageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
    	Message::create([
	        'from_id' => 1,
	        'to_id' => 2,
	        'content' => 'Hola Aleja'
	    ]);
	    Message::create([
	        'from_id' => 2,
	        'to_id' => 1,
	        'content' => 'Hola Dian'
	    ]);
	    Message::create([
	        'from_id' => 1,
	        'to_id' => 3,
	        'content' => 'Hola Fran'
	    ]);
	    Message::create([
	        'from_id' => 3,
	        'to_id' => 1,
	        'content' => 'Hola Diego'
	    ]);
    }
}
