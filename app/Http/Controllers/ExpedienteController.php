<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Expediente\Expediente;
use DB;

class ExpedienteController extends Controller
{
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
