@extends('layouts.app')
@section('content')
<div ng-controller="editCtr" ng-cloak>
		<div class="card-panel cyan darken-1 z-depth-1 white-text marexp center">Expediente #{{$expediente->codigo}} <i class="zmdi zmdi-file-text"></i>
			<a class="btn-floating btn waves-effect waves-light cyan darken-2 edimar tooltipped" data-tooltip="Editar Expediente">
				<i class="zmdi zmdi-edit" ng-click="edit()"></i>
			</a>
			<a class="btn-floating btn waves-effect waves-light cyan darken-2 edimar tooltipped" data-tooltip="Eliminar Expediente">
				<i class="zmdi zmdi-delete"></i>
			</a>
		</div>				
		<div class="mrr">
			<div class="divchip2 orange-text center">
				<div class="input-field col s3">
					<select ng-model="data.tipologia" class="browser-default" ng-disabled="!state">
						@foreach($tipologias as $tipologia)
							<option value="{{$tipologia->id}}">{{$tipologia->nombre}}</option>
						@endforeach
					</select>
					<label class="active" for="icon_prefix2">Tipologia</label>
				</div>
			</div>
			<div class="divchip2 orange-text center">
				<div>
					<div class="input-field col s3">
						<input type="text" class="datepicker" placeholder="Fecha de Apertura" ng-model="data.fecha" ng-disabled="!state">
					</div>	
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
				<div class="input-field col s3">
					<select ng-model="data.estatus" class="browser-default" ng-disabled="!state">
						@foreach($estatus as $estatu)
							<option value="{{$estatu->id}}">{{$estatu->nombre}}</option>
						@endforeach
					</select>
					<label class="active" for="icon_prefix2">Estatus</label>
				</div>
			</div>
		</div>
		<div class="input-field col s3 wis">
			<input type="text" name="search" placeholder="Filtrar Busqueda" ng-model="search">
		</div>
		<div class="container">
			<ul class="collapsible" data-collapsible="accordion">
				<li dir-paginate="investigado in investigados |filter:search| itemsPerPage:5">
					<div class="collapsible-header cyan-text">
						<i class="zmdi zmdi-account"></i>
						<span class="">@{{investigado.empleado.nombres}} @{{investigado.empleado.apellidos}}</span>
					</div>
					<div class="collapsible-body container">
						<button ng-click="addEditInvestigado(investigado)" ng-show="state">Añadir a Edición</button>
						<div class="row">
							<form class="col s12">
								<div class="row">
									<div class="input-field col s6">
										<input disabled id="inid" type="text"  ng-model="investigado.empleado.cedula" class="validate">
										<label class="active" for="inid">Cedula</label>		
									</div>
									<div class="input-field col s6">
										<input disabled id="inape" type="text" ng-model="investigado.empleado.apellidos" class="validate">
										<label class="active" for="inape">Apellidos</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s6">
										<input disabled id="innom" type="text" ng-model="investigado.empleado.nombres" class="validate">
										<label class="active" for="innom">Nombres</label>
									</div>
									<div class="input-field col s6">
										<input disabled id="ininv" type="text" ng-model="investigado.cargo" class="validate">
										<label class="active" for="ininv">Cargo en la investigacion</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s6">
										<input disabled id="inubi" type="text" ng-model="investigado.ubicacion" class="validate">
										<label class="active" for="inubi">Ubicacion en la investigacion</label>
									</div>
									<div class="input-field col s6">
										<input disabled id="ininv" type="text" ng-model="investigado.relacion" class="validate">
										<label class="active" for="ininv">Relacion en la investigacion</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s6">
										<select ng-model="investigado.complicidade.id" convert-to-number class="browser-default" ng-disabled="!state">
											@foreach($complicidades as $complicidad)
												<option value="{{$complicidad->id}}">{{$complicidad->nombre}}</option>
											@endforeach
										</select>
										<label class="active">Complicidad</label>
									</div>
									<div class="input-field col s6">
										<select ng-model="investigado.resultado.id" convert-to-number class="browser-default" ng-disabled="!state">
											@foreach($resultados as $resultado)
												<option value="{{$resultado->id}}">{{$resultado->nombre}}</option>
											@endforeach
										</select>
										<label class="active">resultado</label>
									</div>	
								</div>
								<div class="row">
									<div class="input-field col s6">
										<select ng-model="investigado.decisorio.id" convert-to-number class="browser-default" ng-disabled="!state">
											@foreach($decisorios as $decisorio)
												<option value="{{$decisorio->id}}">{{$decisorio->nombre}}</option>
											@endforeach
										</select>
										<label class="active">Decisorio</label>
									</div>	
									<div class="input-field col s6">
										<input type="text" class="datepicker" placeholder="Fecha de Apertura" ng-model="investigado.fecha" ng-disabled="!state">
									</div>
								</div>
							</form>
						</div>
					</div>
				</li>
			</ul>
			<div class="col s12 center">
				<dir-pagination-controls template-url="/templates/dirPagination.tpl.html"></dir-pagination-controls>
			</div>	
			<div class="row">
				<form class="">
					<div class="">
						<div class="input-field push-s2 col s8">
							<i class="material-icons prefix">info_outline</i>
							<textarea id="icon_prefix2" class="materialize-textarea" ng-model="data.resumen" ng-disabled="!state"></textarea>
							<label class="active" for="icon_prefix2">Resumen</label>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div ng-show="state">	
			<button ng-click="save()">guardar</button>
		</div>
</div>

<script type="text/javascript">
	var expediente = {!! $expediente !!};
</script>

@endsection
