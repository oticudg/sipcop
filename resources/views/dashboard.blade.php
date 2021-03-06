@extends('layouts.app')
@section('content')
<!-- contenedor global-->
<div class="card-panel cyan darken-1 white-text marexp center z-depth-1">Tablero <i class="zmdi zmdi-view-dashboard"></i></div>
<div class="row">	
			<article class="col s12">
				<div class="full-width center-align">
					<div class="tile hoverable">
						<div class="tile-icon light-blue-text">
							<i class="zmdi zmdi-file-text animated animatedicon pulse"></i>
					</div>
						<div class="tile-caption">
							<span class="center-align orange-text">{{$expedientes}}</span>
							<p class="center-align black-text">Expedientes</p>   
						</div>
						<a href="#" disabled class="tile-link point cyan darken-1">&nbsp; 
						</a>
					</div>
					<div class="tile hoverable">	
						<div class="tile-icon light-blue-text">
							<i class="zmdi zmdi-accounts animated animatedicon pulse"></i>
						</div>
						<div class="tile-caption">
							<span class="center-align orange-text">{{$investigados}}</span>
							<p class="center-align black-text">Investigados</p>   
						</div>
						<a href="#" disabled class="tile-link point cyan darken-1">&nbsp; 
						</a>
					</div>	
					<div class="tile hoverable">	
						<div class="tile-icon light-blue-text">
							<i class="zmdi zmdi-account-circle animated animatedicon pulse"></i>
						</div>
						<div class="tile-caption">
							<span class="center-align orange-text">{{$usuarios}}</span>
							<p class="center-align black-text">Usuarios</p>   
						</div>
						<a href="#" disabled class="tile-link point cyan darken-1">&nbsp; 
						</a>
					</div>						
			 	</div>   	
			</article>
</div>
@endsection
