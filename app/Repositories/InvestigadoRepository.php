<?php

namespace App\Repositories;

use App\Models\Expediente\Investigado;
use App\Repositories\EmpleadoRepository;
use Carbon\Carbon;

class InvestigadoRepository
{
	protected $empleado;

	public function __construct(){
		$this->empleado = new EmpleadoRepository;		
	}
	
	/**
     * Crea un arreglo de instancias de Investigado,
	 * no persiste las instancias
	 *
	 * @param  array $investigados $investigados
	 * @return array
	 */ 
	public function createInvestigaciones($investigados){
		
		$investigaciones = [];
		
		foreach($investigados as $investigado){
			
			//Trae un empleado o lo crea si no existe	
			$empleado  = $this->empleado
						  ->createWithEadmonOrRetrieve($investigado['cedula']);
			
			//Fecha de la investigacion	
			$date = isset($investigado['fecha']) ? 
					new Carbon($investigado['fecha']):
					Carbon::now();	
			
			$investigacion = new Investigado;
			$investigacion->fecha = $date;
			$investigacion->cargo = $empleado->cargo_actual;
			$investigacion->ubicacion = $empleado->ubicacion_actual;
			$investigacion->relacion = $empleado->relacion_actual;	
			$investigacion->empleado_id = $empleado->id;
			$investigacion->complicidade_id = $investigado['complicidad'];
			$investigacion->resultado_id = $investigado['resultado'];
			$investigacion->decisorio_id = $investigado['decisorio'];

			array_push($investigaciones, $investigacion);
		}
		
		return $investigaciones;
	}
	
	public function updateInvestigaciones($investigados)
	{
		foreach($investigados as $investigado){
		
			$investigacion = Investigado::find($investigado['investigacion']);	
			
			if( isset($investigado['fecha']) ){
				$investigacion->fecha = new Carbon($investigado['fecha']);
			}

			if( isset($investigado['complicidad']) ){
				$investigacion->complicidade_id = $investigado['complicidad'];
			}

			if( isset($investigado['resultado']) ){
				$investigacion->resultado_id = $investigado['resultado'];
			}
			
			if( isset($investigado['decisorio']) ){
				$investigacion->decisorio_id = $investigado['decisorio'];
			}
			
			$investigacion->save();
		}
	}
			
}
