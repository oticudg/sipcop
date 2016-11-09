<?php

namespace App\Models\Expediente;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Expediente extends Model
{
    use SoftDeletes;
	
	/**
	 * The attributes that should be mutated to dates
	 *
	 * @var array
	 */
	protected $dates = ['deleted_at'];
	
	/**
	 * Obtiene el usuario al que pertenece el Expediente
     */ 
	public function user()
	{
		return $this->belongsTo('App\User');
	}
	
	/**
	 * Obtiene la tipologia del expediente.
	 */
	public function tipologia()
	{
		return $this->belongsTo('App\Models\Expediente\Tipologia');
	}
	
	/**
	 * Obtiene el estatu del expediente.
	 */
	public function estatu()
	{
		return $this->belongsTo('App\Models\Expediente\Estatu');
	}
	
	/**
	 * Obtiene los investigados del expediente
	 */
	public function investigados(){
		return $this->hasMany('App\Models\Expediente\Investigado');
	} 
	
	/**
     * Accesor que genera el codigo del expediente
     */
	public function getCodigoAttribute(){
		return "DSH-PCP/{$this->fecha_registro}-{$this->id}";
	} 
}
