<?php

namespace App\Models\Expediente;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empleado extends Model
{
	use SoftDeletes;

	/**
	 * The attributes that should be mutated to dates.
	 *
     * @var array
	 */
	protected $dates = ['deleted_at']; 
	
	/**
	 * Obtiene las investigaciones de un empleado
     */
	public function investigaciones()
	{
		return $this->hasMany('App\Models\Expediente\Investigado');
	} 
}
