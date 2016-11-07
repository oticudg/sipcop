@extends('layouts.app')
@include('navs.side')
@section('content')
	<!-- contenedor global-->
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
						<a href="{{route('expedientes.index')}}" class="tile-link waves-effect cyan waves-light">Ver detalles &nbsp; 
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
						<a href="#" class="tile-link waves-effect cyan waves-light">Ver detalles &nbsp; 
							<i class="zmdi zmdi-eye"></i>
						</a>
					</div>
					<div class="tile hoverable">
						<div class="tile-icon light-blue-text">
							<i class="zmdi zmdi-shield-check animated animatedicon pulse"></i>
						</div>
						<div class="tile-caption">
							<span class="center-align orange-text">17</span>
							<p class="center-align black-text">Movimientos Auditados</p>   
						</div>
						<a href="#" class="tile-link waves-effect cyan waves-light">Ver detalles &nbsp; <i class="zmdi zmdi-eye"></i></a>
					</div>				
			 	</div>  
			</article>
		</div>
@endsection
