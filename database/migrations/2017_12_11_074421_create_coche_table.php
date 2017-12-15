<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCocheTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('num_serie')->default(0);
            $table->string('marca')->default("0");
            $table->string('motorizacion')->default("0");
            $table->string('modelo')->default("0");
            $table->string('mensaje')->default("0");
            $table->rememberToken();
            $table->timestamps();
        });
        DB::table('cars')->insert(
        array(
            'num_serie' => 222,
            'marca' => "TOYOTA",
            'motorizacion' => "dAsda123",
            'modelo'=>"Celica",
            'mensaje'=>"Hola señorito",
        )
       
    );
         DB::table('cars')->insert(
         array(
            'num_serie'=>123,
            'marca'=>"FORD",
            'motorizacion' =>"asdw222",
            'modelo'=>"Mustang",
            'mensaje'=>"LOLOLOL",   
            )    
     );    
         DB::table('cars')->insert(
         array(
            'num_serie'=>111,
            'marca'=>"Bentley",
            'motorizacion' =>"W12",
            'modelo'=>"Continental GT",
            'mensaje'=>"Holi",   
            )    
     );    
        DB::table('cars')->insert(
         array(
            'num_serie'=>125,
            'marca'=>"Cadillac ",
            'motorizacion' =>"W14",
            'modelo'=>"SRX",
            'mensaje'=>"JEJE",   
            )    
     );    
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coche');
    }
}
