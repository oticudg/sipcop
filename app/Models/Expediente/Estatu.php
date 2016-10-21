<?php

namespace App\Models\Expediente;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estatu extends Model
{
	use SoftDeletes;
	
	/**
     * The attributes that should be mutated to dates.
	 *
     * @var array
     */
	protected $dates = ['deleted_at'];
	
	/**
	 * Obtiene los expedientes del estatu.
	 */
	public function expedientes()
	{
		return $this->hasMany('App\Models\Expediente\Expediente');
	}	
}
