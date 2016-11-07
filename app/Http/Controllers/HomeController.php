<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expediente\Expediente;
use App\Models\Expediente\Investigado;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index');
		$this->middleware('guest')->only('index');
    }

	/**
     * Show the application root
	 */	
	public function index()
	{
		return view('index');
	}

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
		$expedientes = Expediente::count();
		$investigados = Investigado::count();

        return view('dashboard')->with(compact('expedientes', 'investigados'));
    }
}
