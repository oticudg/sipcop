<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvestigadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investigados', function (Blueprint $table) {
            $table->increments('id');
			$table->date('fecha');
			$table->string('cargo', 100);
			$table->string('ubicacion', 100);
			$table->string('relacion', 100);
			$table->integer('empleado_id')->unsigned();
			$table->integer('expediente_id')->unsigned();
			$table->integer('complicidade_id')->unsigned();
			$table->integer('resultado_id')->unsigned();
			$table->integer('decisorio_id')->unsigned();
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
        Schema::dropIfExists('investigados');
    }
}
