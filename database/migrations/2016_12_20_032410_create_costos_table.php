<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCostosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('costos', function (Blueprint $table){
            $table->increments('id');
            $table->integer('porcentaje');
            $table->string('ene-feb');
            $table->string('mar-abr');
            $table->string('may-jun');
            $table->string('jul-ago');
            $table->string('sep-oct');
            $table->string('nov-dic');
            $table->string('anual');
            $table->string('paneles');
            $table->string('rango_inversion');
            $table->integer('rango_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('costos', function($table){
            $table->foreign('rango_id')->reference('id')->on('rangos');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('costos');
    }
}
