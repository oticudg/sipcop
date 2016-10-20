<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeysOnInvestigadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('investigados', function (Blueprint $table) {	

			$table->foreign('empleado_id')->references('id')
			->on('empleados')->onDelete('cascade');

			$table->foreign('expediente_id')->references('id')
			->on('expedientes')->onDelete('cascade');

			$table->foreign('complicidade_id')->references('id')
			->on('complicidades')->onDelete('cascade');

			$table->foreign('resultado_id')->references('id')
			->on('resultados')->onDelete('cascade');

			$table->foreign('decisorio_id')->references('id')
			->on('decisorios')->onDelete('cascade');	
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('investigados', function (Blueprint $table) {
            $table->dropForeign('investigados_empleado_id_foreign');
			$table->dropForeign('investigados_expediente_id_foreign');
			$table->dropForeign('investigados_complicidade_id_foreign');
			$table->dropForeign('investigados_resultado_id_foreign');
			$table->dropForeign('investigados_decisorio_id_foreign');
        });
    }
}
