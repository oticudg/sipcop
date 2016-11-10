<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Repositories\EmpleadoRepository;

class EmpleadoController extends Controller
{
	public function searchEmpleado(Request $request)
	{
		$this->validate($request, [
			'cedula' => 'bail|required|integer|empleado'
		]);
		
		$empleado = new EmpleadoRepository;
		
		return response()->json($empleado->retrieveWithEadmon($request->cedula));
	}
}
