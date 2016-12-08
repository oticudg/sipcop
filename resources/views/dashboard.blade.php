@extends('layouts.app')
@section('content')
<!-- contenedor global-->

<div class="card-panel cyan darken-1 white-text marexp center z-depth-1">Dashboard <i class="zmdi zmdi-view-dashboard"></i></div>
<div class="row">
<div class="">

	
	
</div>
</div>
<div class="row">	
			<article class="col s12">
				<div class="full-width center-align" style="margin: 40px 0;">
					<div class="tile hoverable">
						<div class="tile-icon light-blue-text">
							<i class="zmdi zmdi-file-text animated animatedicon pulse"></i>
						</div>
						<div class="tile-caption">
							<span class="center-align orange-text">{{$expedientes}}</span>
							<p class="center-align black-text">Expedientes</p>   
						</div>
						<a href="{{route('expedientes.index')}}" class="tile-link waves-effect waves-light cyan darken-1 waves-light">Ver detalles &nbsp; 
							<i class="zmdi zmdi-eye"></i>
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
						<a href="#" class="tile-link waves-effect waves-light cyan darken-1">Ver detalles &nbsp; 
							<i class="zmdi zmdi-eye"></i>
						</a>
					</div>	
					<div class="tile hoverable">	
						<div class="tile-icon light-blue-text">
							<i class="zmdi zmdi-account-circle animated animatedicon pulse"></i>
						</div>
						<div class="tile-caption">
							<span class="center-align orange-text">6</span>
							<p class="center-align black-text">Usuarios</p>   
						</div>
						<a href="#" class="tile-link waves-effect waves-light cyan darken-1">Ver detalles &nbsp; 
							<i class="zmdi zmdi-eye"></i>
						</a>
					</div>						
			 	</div>   	
			</article>
</div>
@endsection
