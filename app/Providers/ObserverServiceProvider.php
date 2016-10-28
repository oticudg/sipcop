<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Expediente\Expediente;

class ObserverServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
    	Expediente::deleting(function($expediente){
			$expediente->investigados()->delete();
		});	
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
