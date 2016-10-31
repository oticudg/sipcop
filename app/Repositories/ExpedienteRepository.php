<?php

namespace App\Repositories;

use App\Models\Expediente\Expediente;
use App\Models\Expediente\Investigado;

class ExpedienteRepository
{
	public function closeExpediente($expediente)
	{
		$resultados_count = Investigado::where('expediente_id', $expediente->id)
									   ->where('resultado_id', 2)
									   ->count();

		$investigados_count = $expediente->investigados()->count();
		
		if($investigados_count === $resultados_count){
			$expediente->estatu_id	= 3;
			$expediente->save();
			return true;
		}
		
		return false;	
	}	
}
