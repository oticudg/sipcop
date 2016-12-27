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
		/**
		 * Valida que al registrar un expediente la fecha del expediente 
		 * sea menor o igual a las fechas de los investigados
	     */
    	Validator::extend('date_after_expediente', 
			function($attribute, $value, $parameters, $validator){
				
				$fecha = Request::input($parameters[0]);
				
				$expediente =  new Carbon($fecha); 
				$investigado = new Carbon($value);	

				return $expediente->lte($investigado);
		});
		
		/**
         * Valida que la cedula pasada sea la de un empleado activo del
		 * sahum 
         */
		Validator::extend('empleado', function($attribute, $value){
			
			$empleado = DB::connection('eadmon')
				->table('noma09')
				->where('cod_empleado', $value)
				->where('edo_emp','A')
				->value('cod_empleado');
			
			return (bool) $empleado;
							
		});
		
		/**
         * Valida que el investigado a editar este en el expediente en el 
		 * que se realiza la edicion
		 */	
		Validator::extend('in_expediente', function($attribute, $value){
			
			$expediente = Request::route('expediente.id');	
			
			return (bool) Investigado::where('id', $value)
									   ->where('expediente_id', $expediente)
									   ->value('id');	
		});
		
		/**
         * Valida que el empleado no tenga investigacion en el expediente
		 * en el que se realiza la edicion
         */
		Validator::extend('empleado_not_expediente', 
			function($attribute, $value){
				
				$expediente = Request::route('expediente.id');	

				$investigado = Empleado::where('cedula', $value)
							   ->first();

				if(!$investigado)
					return true;
				
				return !(bool) $investigado
							   ->investigaciones()
							   ->where('expediente_id', $expediente)
							   ->value('id');	
		});
		
		/**
         * Valida que la fechas de los investigados sean mayor o
		 * igual al expediente en el que se realiza la edicion
         */	
		Validator::extend('date_after_expediente_update', 
			function($attribute, $value){
				
				$fecha = Request::route('expediente.fecha_registro');
				
				$expediente  = new Carbon($fecha);	
			    $investigado = new Carbon($value);	
				
				return $expediente->lte($investigado);
		});
		
		/**
		 * Valida que la fecha del expediente a editar sea menor 
		 * o igual a la fecha de los investigados que estan en el expediente 
         */
		Validator::extend('date_before_investigados_update',
			function($attribute, $value){
	
				$expediente = Request::route('expediente.id');	
				
				return !(bool) Investigado::where('expediente_id', $expediente)
							->whereDate('fecha', '<', $value)
							->value('id');

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
