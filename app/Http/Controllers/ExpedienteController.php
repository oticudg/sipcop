<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\StoreExpediente;
use App\Http\Requests\UpdateExpediente;
use App\Models\Expediente\Expediente;
use App\Repositories\InvestigadoRepository;
use Carbon\Carbon;

class ExpedienteController extends Controller
{
	protected $investigacion;
	protected $expediente;

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

    	return view('files.registered_file')->with(compact('expedientes'));
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
    public function store(StoreExpediente $request)
    {
		\Auth::loginUsingId(1);	
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
							$request->investigados, !$request->has('fecha'));	
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
		 * Columnas a seleccionar
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
					  ->withCount('investigados')
					  ->with('investigados.empleado')
					  ->with('investigados')
					  ->with('investigados.complicidade')
					  ->with('investigados.resultado')
					  ->with('investigados.decisorio') 
					  ->firstOrFail();

		return view('files.open_file')->with(compact('expediente'));
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
     * @param  App\Models\Expediente\Expediente $Expediente
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateExpediente $request, Expediente $expediente)
    {	
    	if($request->has('add_investigados')){
			
			$investigados = $this->investigacion
							->createInvestigaciones($request->add_investigados);
		
			$expediente->investigados()->saveMany($investigados);
		}
		
		if($request->has('edit_investigados')){
			$this->investigacion
			->updateInvestigaciones($request->edit_investigados);
		}

		if($request->has('tipologia')){	
			$expediente->tipologia_id = $request->tipologia; 
		}
			
		if($request->has('fecha')){	
			$expediente->fecha_registro = new Carbon($request->fecha);
		}		
		
		if($request->has('estatus')){	
			$expediente->estatu_id = $request->estatus;
		}
		
		$expediente->save();
		
		return $expediente;	
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
