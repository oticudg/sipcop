@extends('layouts.app')
@section('content')
<div class="card-panel marexp cyan darken-1 z-depth-1 white-text center">Expedientes Registrados <i class="zmdi zmdi-format-list-bulleted"></i>
</div>
<div class="container">
 <ul id="myUL" class="collapsible popout" data-collapsible="accordion">
		<div class="container" style="margin-top:3%;">
			@can(['expediente.register'])
				<div class="btnplus">
					<a class="btn-floating btn-small waves-effect waves-light cyan darken-1 tooltipped" data-tooltip="Agregar Expediente" data-position="top" href="/expedientes/create">
						<i class="material-icons">add</i>
					</a>
				</div>	
			@endcan()
			<div class="row">
				<form action="/expedientes" method="GET" id="search">
					<div class="input-field btnpos">				
						<a class="btn btn-small waves-effect tooltipped waves-light cyan darken-1" data-tooltip="Filtrar" data-position="right" href="#" onclick="document.getElementById('search').submit()">
							<i class="zmdi zmdi-search  zmdi-hc-2x"></i>
						</a>
					</div>
					<div class="input-field col s2 wis2 pull-s2">
						<label for="cedula"><i class="zmdi zmdi-search zmdi-hc-lg"></i> Filtrar Cedula</label>				
						<input type="text" id="cedula" name="cedula" autocomplete="off" class="validate">
					</div>
					<div class="input-field col s2 wis2 pull-s2">
						<label for="search2"><i class="zmdi zmdi-search zmdi-hc-lg"></i> Palabra Clave</label>				
						<input type="text" id="search2" name="resumen" autocomplete="off" class="validate">
					</div>
					<div class="input-field col s2 wis2 pull-s2">
							<select name="estatus">
								<option value="" disabled selected>Estatus</option>
								@foreach($estatus as $estatu)
									<option value="{{$estatu->id}}">{{$estatu->nombre}}</option>
								@endforeach
							</select>
						<label><i class="zmdi zmdi-search zmdi-hc-lg"></i> Filtrar Estatus</label>				
					</div>
					<div class="input-field col s2 wis2 pull-s2">				
							<select name="tipologia">
								<option value="" disabled selected>Tipologia</option>
								@foreach($tipologias as $tipologia)
									<option value="{{$tipologia->id}}">{{$tipologia->nombre}}</option>
								@endforeach
							</select>
							<label><i class="zmdi zmdi-search zmdi-hc-lg"></i> Filtrar Tipologia</label>
					</div>
					<div class="input-field col s2 wis2 pull-s2">				
							<label for="fechaex"><i class="zmdi zmdi-calendar-alt zmdi-hc-lg"></i> Fecha desde</label>
							<input id="fechaex" type="date"  name="desde" class="datepicker">
					</div>
					<div class="input-field col s2 wis2 pull-s2">				
							<label for="fechaex2"><i class="zmdi zmdi-calendar-alt zmdi-hc-lg"></i> Fecha hasta</label>
							<input id="fechaex2" type="date" name="hasta" class="datepicker">
					</div>
				</form>
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
							<textarea readonly id="icon_prefix2" class="materialize-textarea validate" maxlength="900" length="900">{{$expediente->resumen}}</textarea>
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
