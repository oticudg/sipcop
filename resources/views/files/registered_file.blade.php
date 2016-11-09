@extends('layouts.app')
@section('content')
<div class="container">
 <ul id="myUL" class="collapsible popout" data-collapsible="accordion">
		<div class="container">
			<h5 class="header center orange-text">Expedientes Registrados</h5>
			<div class="btnplus">
				<a class="btn-floating btn-small waves-effect waves-light teal modal-trigger" href="#modal2">
					<i class="material-icons">add</i>
				</a>
			</div>
			<div class="input-field col s3 wis2">
				<input type="text" name="search" placeholder="Filtrar Busqueda">
			</div>
		</div>
	
	@foreach($expedientes as $expediente)	
	 <li class="white">
				<div class="collapsible-header">
					<i class="zmdi zmdi-folder-person zmdi-hc-fw"></i> 
						<span>Expediente #{{$expediente->codigo}}</span> 
							<span class="spanmar right">{{$expediente->estatus}}</span>
				</div> 
	  	<div class="collapsible-body center">  
				<div class="divchip">
					<h6 class="orange-text">Tipologia</h6>
						<div class="black-text center">
							{{$expediente->tipologia}}
						</div>	
				</div>
				<div class="divchip">
					<h6 class="orange-text">Fecha de Creacion</h6>
						<div class="black-text center">
							{{$expediente->fecha_registro}}
						</div>
				</div>
			@if($expediente->fecha_cierre)
			<div class="divchip">
					<h6 class="orange-text">Fecha de cierre</h6>
						<div class=" black-text center">
							{{$expediente->fecha_cierre}}		
						</div>
			</div>
			@endif
			<div class="divchip">
					<h6 class="orange-text">Involucrados</h6>
						<div class="black-text center">
							{{$expediente->investigados_count}}
						</div>
			</div>
			<div class="modal-footer marb">
				<a href="{{route('expedientes.show',['expediente' => $expediente->id])}}" class="waves-effect waves-light default btn ">Ver</a>
			</div>
		</div>
	</li>
	@endforeach	
</ul>	
	{{$expedientes->links()}}
</div>
@endsection
