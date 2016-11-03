<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
use Request;
use Carbon\Carbon;
use DB;

class CustomValidationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
    	Validator::extend('date_after_expediente', 
			function($attribute, $value, $parameters, $validator){
				
				$fecha = Request::input($parameters[0]);
				
				$expediente =  new Carbon($fecha); 
				$investigado = new Carbon($value);	

				return $expediente->lte($investigado);
		});

		Validator::extend('empleado', function($attribute, $value){
			
			$empleado = DB::connection('eadmon')
				->table('noma09')
				->where('cod_empleado', $value)
				->where('edo_emp','A')
				->value('cod_empleado');
			
			return $empleado;
							
		});
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
