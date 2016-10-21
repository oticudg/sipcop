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
}
