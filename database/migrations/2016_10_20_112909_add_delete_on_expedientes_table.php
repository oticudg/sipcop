<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDeleteOnExpedientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('expedientes', function (Blueprint $table) {
			$table->dropForeign('expedientes_user_id_foreign');
			$table->dropForeign('expedientes_tipologia_id_foreign');
			$table->dropForeign('expedientes_estatu_id_foreign');

        	$table->foreign('user_id')->references('id')
			->on('users')->onDelete('cascade')->change();
			
			$table->foreign('tipologia_id')->references('id')
			->on('tipologias')->onDelete('cascade')->change();
			
			$table->foreign('estatu_id')->references('id')
			->on('estatus')->onDelete('cascade')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('expedientes', function (Blueprint $table) {
			$table->dropForeign('expedientes_user_id_foreign');
			$table->dropForeign('expedientes_tipologia_id_foreign');
			$table->dropForeign('expedientes_estatu_id_foreign');
			
			$table->foreign('user_id')->references('id')
			->on('users')->change();
			
			$table->foreign('tipologia_id')->references('id')
			->on('tipologias')->change();
			
			$table->foreign('estatu_id')->references('id')
			->on('estatus')->change();
        });
    }
}
