<?php

namespace App\Repositories;

use App\Models\Expediente\Empleado;
use DB;

class EmpleadoRepository
{
	/**
     * Crea un empleado usando la base de datos de EADMON,
	 * o de existir el empleado se regresa.
	 *
	 * @param int $cedula
	 * @return App\Models\Expediente\Empleado
	 */ 
	public function createWithEadmonOrRetrieve($cedula)
	{
		$empleado = Empleado::where('cedula', $cedula)->first();
		
		if(!$empleado){

			$empleado = new Empleado;
			$empleado_eadmon = $this->retrieveWithEadmon($cedula);	

			$empleado->cedula = $cedula;
			$empleado->nombres = $empleado_eadmon->nombres;
			$empleado->apellidos = $empleado_eadmon->apellidos;
			$empleado->cargo_actual = $empleado_eadmon->cargo;
			$empleado->ubicacion_actual = $empleado_eadmon->ubicacion;
			$empleado->relacion_actual = $empleado_eadmon->relacion;
			$empleado->telefono = "0261-78888";
			$empleado->save();
		}

		return $empleado;
	}

	/**
	 * Regresa un empleado utilizando eadmon 
	 *
	 * @param int $cedula
	 * @return array
	 */
	public function retrieveWithEadmon($cedula){

		$columns = [
			'nomh01.nombres',
			'nomh01.apellidos',
			'nomh01.cod_empleado as cedula',
			'nomh01.den_cargo as cargo',
			'nomh01.den_ubi as ubicacion',
			'noma14.des_nom as relacion'
		];		 
 
		$empleado =  DB::connection('eadmon')->table('nomh01')
		                ->join('noma14', 
							'noma14.tip_nom', '=', 'nomh01.tip_nom')
						->where('nomh01.cod_empleado', $cedula)
						->select($columns)
						->orderBy('nomh01.ano_eje', 'dec')
						->orderBy('nomh01.mes_eje', 'dec')
						->first();
		if($empleado){
			$empleado->nombres = trim($empleado->nombres);
			$empleado->apellidos = trim($empleado->apellidos);
			$empleado->cargo = trim($empleado->cargo);
			$empleado->ubicacion = trim($empleado->ubicacion);
			$empleado->relacion = trim($empleado->relacion);	
		}

		return $empleado;
	}
}
