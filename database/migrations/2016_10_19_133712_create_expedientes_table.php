<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpedientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('expedientes', function (Blueprint $table) {
            $table->increments('id');
			$table->string('codigo')->unique();
			$table->integer('user_id')->unsigned();
			$table->integer('tipologia_id')->unsigned();
			$table->integer('estatu_id')->unsigned();
			$table->date('fecha_registro');
			$table->date('fecha_cierre')->nullable();
            $table->timestamps();			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expedientes');
    }
}
