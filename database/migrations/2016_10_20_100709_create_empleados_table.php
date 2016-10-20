<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('cedula')->unsigned()->unique();
			$table->string('nombres');
			$table->string('apellidos');
			$table->string('cargo_actual', 100);
			$table->string('ubicacion_actual', 100);
			$table->string('relacion_actual', 100);
			$table->string('telefono', 10);
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
        Schema::dropIfExists('empleados');
    }
}
