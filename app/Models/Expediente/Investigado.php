<?php

namespace App\Models\Expediente;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Investigado extends Model
{
	use SoftDeletes;
	
	/**
	 * The attributes that should be mutated to dates.
	 *
	 * @var array
	 */
	protected $dates = ['deleted_at'];
	
	/**
	 * The attributes that aren't mass assignable
	 *
	 * @var array
	 */
	protected $guarded = ['id']; 
	
	/**
	 * Obtiene el expediente al cual pertenece.
	 */
	public function expediente()
	{
		return $this->belongsTo('App\Models\Expediente\Expediente');
	}
	
	/**
	 * Obtiene el empleado al cual pertenece.
	 */
	public function empleado()
	{
		return $this->belongsTo('App\Models\Expediente\Empleado');
	}

	/**
	 * Obtiene la complicidad del investigado
     */
	public function complicidade()
	{
		return $this->belongsTo('App\Models\Expediente\Complicidade');
	}

	/**
	 * Obtiene el resultado del investigado
	 */
	public function resultado()
	{
		return $this->belongsTo('App\Models\Expediente\Resultado');
	} 
	
	/**
     * Obtiene el decisorio del investigado
	 */
	public function decisorio()
	{
		return $this->belongsTo('App\Models\Expediente\Decisorio');
	}
}
