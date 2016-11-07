<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
use Request;
use Carbon\Carbon;
use DB;
use App\Models\Expediente\Investigado;
use App\Models\Expediente\Empleado;

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
			
			return (bool) $empleado;
							
		});
	
		Validator::extend('in_expediente', function($attribute, $value){
			
			$expediente = Request::route('expediente.id');	
			
			return (bool) Investigado::where('id', $value)
									   ->where('expediente_id', $expediente)
									   ->value('id');	
		});

		Validator::extend('empleado_not_expediente', 
			function($attribute, $value){
				
				$expediente = Request::route('expediente.id');	
				
				$investigado = Empleado::where('cedula', $value)
							   ->first()
							   ->investigaciones()
							   ->where('expediente_id', $expediente)
							   ->value('id');	

				return ! (bool) $investigado;
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
