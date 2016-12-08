@extends('layouts.app')
@section('content')
		<div class="card-panel cyan darken-1 z-depth-1 white-text marexp center">Expediente #{{$expediente->codigo}} <i class="zmdi zmdi-file-text"></i>
			<a class="btn-floating btn waves-effect waves-light cyan darken-2 edimar tooltipped" data-tooltip="Editar Expediente">
				<i class="zmdi zmdi-edit"></i>
			</a>
			<a class="btn-floating btn waves-effect waves-light cyan darken-2 edimar tooltipped" data-tooltip="Eliminar Expediente">
				<i class="zmdi zmdi-delete"></i>
			</a>
		</div>				
		<div class="mrr">
			<div class="divchip2 orange-text center">
				<h6>Tipologia</h6>
				<div class="chip center cyan white-text">
					{{$expediente->tipologia}}
				</div>
			</div>
			<div class="divchip2 orange-text center">
				<h6>Fecha de Creacion</h6>
				<div class="chip center cyan white-text">
					{{$expediente->fecha_registro}}
				</div>
			</div>
			@if($expediente->fecha_cierre)
			<div class="divchip2 orange-text cyan center">
				<h6>Fecha de cierre</h6>
				<div class="chip center cyan white-text">
					{{$expediente->fecha_cierre}}
				</div>
			</div>
			@endif
			<div class="divchip2 orange-text center">
				<h6>Involucrados</h6>
				<div class="chip center cyan white-text">
					{{$expediente->investigados_count}}
				</div>
			</div>
			<div class="divchip2 orange-text center">
				<h6>Estado</h6>
				<div class="chip center cyan white-text">
					{{$expediente->estatus}}
				</div>
			</div>
		</div>
		<div class="input-field col s3 wis">
			<input type="text" name="search" placeholder="Filtrar Busqueda">
		</div>
		<div class="container">
			<ul class="collapsible" data-collapsible="accordion">
			  @foreach( $expediente->investigados as $investigado)
				<li>
					<div class="collapsible-header cyan-text">
						<i class="zmdi zmdi-account"></i>
						<span class="">Investigado 1</span>
					</div>
					<div class="collapsible-body container">
						<div class="row">
							<form class="col s12">
								<div class="row">
									<div class="input-field col s6">
										<input disabled id="inid" type="text" value="{{$investigado->empleado->cedula}}" class="validate">
										<label for="inid">Cedula</label>		
									</div>
									<div class="input-field col s6">
										<input disabled id="inape" type="text" value="{{$investigado->empleado->apellidos}}" class="validate">
										<label for="inape">Apellidos</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s6">
										<input disabled id="innom" type="text" value="{{$investigado->empleado->nombres}}" class="validate">
										<label for="innom">Nombres</label>
									</div>
									<div class="input-field col s6">
										<input id="ininv" type="text" value="{{$investigado->cargo}}" class="validate">
										<label for="ininv">Cargo en la investigacion</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s6">
										<input id="inubi" type="text" value="{{$investigado->ubicacion}}" class="validate">
										<label for="inubi">Ubicacion en la investigacion</label>
									</div>
									<div class="input-field col s6">
										<input id="ininv" type="text" value="{{$investigado->relacion}}" class="validate">
										<label for="ininv">Relacion en la investigacion</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s6">
										<input disabled id="incom" type="text" value="{{$investigado->complicidade->nombre}}" class="validate">
										<label for="incom">Complicidad</label>
									</div>
									<div class="input-field col s6">
										<input disabled id="inres" type="text" value="{{$investigado->resultado->nombre}}" class="validate">
										<label for="inres">Resultado</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s6">
										<input disabled id="indec" type="text" value="{{$investigado->decisorio->nombre}}" class="validate">
										<label for="indec">Decisorio</label>
									</div>
									<div class="input-field col s6">
										<input id="infec" type="text" placeholder="asda" value="{{$investigado->fecha}}" class="validate">
										<label for="infe">Fecha de adicion</label>
									</div>
								</div>
							</form>
						</div>
					</div>
				</li>
				@endforeach
			</ul>
			<ul class="pagination center">
				<li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
				<li class="active"><a href="#!">1</a></li>
				<li class="waves-effect"><a href="#!">2</a></li>
				<li class="waves-effect"><a href="#!">3</a></li>
				<li class="waves-effect"><a href="#!">4</a></li>
				<li class="waves-effect"><a href="#!">5</a></li>
				<li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
			</ul>
		</div>
@endsection
