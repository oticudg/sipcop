<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDeletedAtColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       	Schema::table('users', function(Blueprint $table){
			$table->softDeletes();
		});
		
		Schema::table('tipologias', function(Blueprint $table){
			$table->softDeletes();
		});
		
		Schema::table('estatus', function(Blueprint $table){
			$table->softDeletes();
		});
		
		Schema::table('expedientes', function(Blueprint $table){
			$table->softDeletes();
		});
		
		Schema::table('complicidades', function(Blueprint $table){
			$table->softDeletes();
		});
		
		Schema::table('investigados', function(Blueprint $table){
			$table->softDeletes();
		});
		
		Schema::table('resultados', function(Blueprint $table){
			$table->softDeletes();
		});
		
		Schema::table('decisorios', function(Blueprint $table){
			$table->softDeletes();
		});
		
		Schema::table('empleados', function(Blueprint $table){
			$table->softDeletes();
		});
		
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(Blueprint $table){
			$table->dropColumn('deleted_at');
		});
	
		Schema::table('tipologias', function(Blueprint $table){
			$table->dropColumn('deleted_at');
		});

		Schema::table('estatus', function(Blueprint $table){
			$table->dropColumn('deleted_at');
		});

		Schema::table('expedientes', function(Blueprint $table){
			$table->dropColumn('deleted_at');
		});

		Schema::table('complicidades', function(Blueprint $table){
			$table->dropColumn('deleted_at');
		});

		Schema::table('investigados', function(Blueprint $table){
			$table->dropColumn('deleted_at');
		});

		Schema::table('resultados', function(Blueprint $table){
			$table->dropColumn('deleted_at');
		});

		Schema::table('decisorios', function(Blueprint $table){
			$table->dropColumn('deleted_at');
		});

		Schema::table('empleados', function(Blueprint $table){
			$table->dropColumn('deleted_at');
		});
    }
}
