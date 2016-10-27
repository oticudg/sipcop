<?php

namespace App\Repositories;

use App\Models\Expediente\Empleado;

class EmpleadoRepository
{
	/**
     * Crea un empleado usando la base de datos de EADMON,
	 * o de existir el empleado se regresa.
	 *
	 * @param int
	 * @return App\Models\Expediente\Empleado
	 */ 
	public function createWithEadmonOrRetrieve($cedula)
	{
		$empleado = Empleado::where('cedula', $cedula)->first();
		
		if(!$empleado){

			$empleado = new Empleado;
			$empleado->cedula = $cedula;
			$empleado->nombres = "sdfsdfdsfsdfd sdfsdfsdf";
			$empleado->apellidos = "sdfsdfsdfsdf sdfsdfds";
			$empleado->cargo_actual = "sdfsdfdsfsfdsf";
			$empleado->ubicacion_actual = "sdfdsfsdfsdfsdf";
			$empleado->relacion_actual = "dsfsdfdssdfds";
			$empleado->telefono = "1234567893";
			$empleado->save();
		}

		return $empleado;
	}
}
