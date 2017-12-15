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
         //$this->call(UsersTableSeeder::class);
    	DB::table("coche")->insert([

    		'num_serie'=> str_random(10),
			'marca'=>str_random(4),
			'motorizacion'=>str_random(4),
			'modelo'=>str_random(10),
			'mensaje'=>str_random(10),

    		]);

    	
    }
}
