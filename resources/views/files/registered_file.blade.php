@extends('layouts.app')
@section('content')
<div class="card-panel marexp cyan darken-1 z-depth-1 white-text center">Expedientes Registrados <i class="zmdi zmdi-format-list-bulleted"></i>
</div>
<div class="container">
 <ul id="myUL" class="collapsible popout" data-collapsible="accordion">
		<div class="container">
			@can(['expediente.register'])
			@endcan()
			<div class="row">
				<form>
					<div class="input-field col s2 wis2 pull-s2">
						<label for="search"><i class="zmdi zmdi-search zmdi-hc-lg"></i> Filtrar Cedula</label>				
						<input type="text" id="search" name="search" autocomplete="off" class="validate">
					</div>
					<div class="input-field col s2 wis2 pull-s2">
						<label for="search2"><i class="zmdi zmdi-search zmdi-hc-lg"></i> Palabra Clave</label>				
						<input type="text" id="search2" name="search2" autocomplete="off" class="validate">
					</div>
					<div class="input-field col s2 wis2 pull-s2">
							<select>
								<option value="" disabled selected>Estatus</option>
								<option value="1">Option 1</option>
								<option value="2">Option 2</option>
								<option value="3">Option 3</option>
							</select>
						<label><i class="zmdi zmdi-search zmdi-hc-lg"></i> Filtrar Estatus</label>				
					</div>
					<div class="input-field col s2 wis2 pull-s2">				
							<select>
								<option value="" disabled selected>Tipologia</option>
								<option value="1">Option 1</option>
								<option value="2">Option 2</option>
								<option value="3">Option 3</option>
							</select>
							<label><i class="zmdi zmdi-search zmdi-hc-lg"></i> Filtrar Tipologia</label>
					</div>
					<div class="input-field col s2 wis2 pull-s2">				
							<label for="fechaex"><i class="zmdi zmdi-calendar-alt zmdi-hc-lg"></i> Fecha desde</label>
							<input id="fechaex" type="date" class="datepicker">
					</div>
					<div class="input-field col s2 wis2 pull-s2">				
							<label for="fechaex2"><i class="zmdi zmdi-calendar-alt zmdi-hc-lg"></i> Fecha hasta</label>
							<input id="fechaex2" type="date" class="datepicker">
					</div>
					<div class="input-field col s2 pull-s2">				
						<a class="btn btn-small waves-effect waves-light cyan darken-1" href="#">
							<i class="zmdi zmdi-search  zmdi-hc-2x"></i>
						</a>
					</div>
				</form>
				<div class="btnplus">
					<a class="btn-floating btn-small waves-effect waves-light cyan darken-1 tooltipped" data-tooltip="Agregar Expediente" data-position="top" href="/expedientes/create">
						<i class="material-icons">add</i>
					</a>
				</div>	
			</div>
		</div>
	@foreach($expedientes as $expediente)	
	 <li class="white textsize">
		 <div class="collapsible-header white cyan-text">
					<i class="zmdi zmdi-folder-person zmdi-hc-fw"></i> 
						<span>Expediente #{{$expediente->codigo}}</span> 
							<span class="spanmar right">{{$expediente->estatus}}</span>
				</div> 
	  	<div class="collapsible-body center">  
				<div class="divchip">
					<h6 class="orange-text">Tipologia</h6>
						<div class="white-text center chip cyan">
							{{$expediente->tipologia}}
						</div>	
				</div>
				<div class="divchip">
					<h6 class="orange-text">Fecha de Creacion</h6>
						<div class="white-text center chip cyan">
							{{$expediente->fecha_registro}}
						</div>
				</div>
			@if($expediente->fecha_cierre)
			<div class="divchip">
					<h6 class="orange-text">Fecha de cierre</h6>
						<div class="white-text center chip cyan">
							{{$expediente->fecha_cierre}}		
						</div>
			</div>
			@endif
			<div class="divchip">
					<h6 class="orange-text">Involucrados</h6>
						<div class="white-text center chip cyan">
							{{$expediente->investigados_count}}
						</div>
			</div>
				<form class="">
					<div class="row">
						<div class="input-field push-s2 col s8 center">
							<i class="material-icons prefix">info_outline</i>
							<textarea readonly id="icon_prefix2" class="materialize-textarea validate" length="900">{{$expediente->resumen}}</textarea>
							<label for="icon_prefix2" class="active">Resumen</label>
						</div>
					</div>
				</form>

			<div class="modal-footer marb">
				<a href="{{route('expedientes.show',['expediente' => $expediente->id])}}" class="waves-effect waves-light cyan darken-1 default btn ">Ver</a>
			</div>
		</div>
	</li>
	@endforeach	
</ul>	
	{{$expedientes->links()}}	
</div>
@endsection
