<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Expediente\Expediente;
use App\Repositories\InvestigadoRepository;
use Carbon\Carbon;

class ExpedienteController extends Controller
{
	protected $investigacion;

	public function __construct()
	{
		$this->investigacion = new InvestigadoRepository;
	}
		
    /**
     * Despliega la lista de expedientes.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {	
		/**
		 * Columnas a selecionar
		 */	
		$columns = [
			'expedientes.id',
			'expedientes.codigo',
			'expedientes.fecha_registro',
			'expedientes.fecha_cierre',
			'tipologias.nombre as tipologia',
			'estatus.nombre as estatus'
		];
				
		$expedientes = Expediente::join(
							'tipologias', 
							'tipologias.id', '=', 'expedientes.tipologia_id')
						->join(
							'estatus', 
							'estatus.id', '=', 'expedientes.estatu_id')
						->select($columns)
						->withCount('investigados')
						->paginate(10);

    	return $expedientes;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Registra un nuevo expediente
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {	
		$expediente = new Expediente;
		
		$date = isset($request->fecha) ?
				new Carbon($request->fecha):
				Carbon::now();
			
		$expediente->codigo = $request->codigo;
		$expediente->tipologia_id = $request->tipologia;
		$expediente->estatu_id = $request->estatus;
		$expediente->fecha_registro = $date;
		$expediente->user()->associate($request->user());
		$expediente->save();
			
    	$investigados = $this->investigacion->createInvestigaciones(
							$request->investigados);	
		$expediente->investigados()->saveMany($investigados);	
		
		return $expediente;
    }

    /**
     * Muestra un expediente
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {	
		/**
		 * COlumnas a seleccionar
		 */
		$columns = [
			'expedientes.id',
			'expedientes.codigo',
			'expedientes.fecha_registro',
			'expedientes.fecha_cierre',
			'tipologias.nombre as tipologia',
			'estatus.nombre as estatus',
		];
	

        $expediente = Expediente::where('expedientes.id', $id)
					  ->join('tipologias',
							'tipologias.id', '=', 'expedientes.tipologia_id')
					  ->join('estatus',
							'estatus.id', '=', 'expedientes.estatu_id')
					  ->select($columns)
					  ->with('investigados')
					  ->with('investigados.complicidade')
					  ->with('investigados.resultado')
					  ->with('investigados.decisorio') 
					  ->firstOrFail();

		return $expediente;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\Expediente\Expediente $expediente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expediente $expediente)
    {
    	$expediente->delete();	
    }
}
