@extends('layouts.app')
@section('content')
<div ng-controller="editCtr" ng-cloak>
		<div class="card-panel cyan darken-1 z-depth-1 white-text marexp center">Expediente #{{$expediente->codigo}} <i class="zmdi zmdi-file-text"></i>
			
			@can(['expediente.edit'])	
				<a href="#modal4" class="btn-floating btn waves-effect waves-light cyan darken-2 edimar modal-trigger tooltipped" data-tooltip="Agregar involucrados">
					<i class="zmdi zmdi-accounts-add"></i>
				</a>
			@endcan
			
			<a ng-show="state" ng-click="save()" class="btn-floating btn waves-effect waves-light cyan darken-2 edimar tooltipped" data-tooltip="Guardar cambios">
				<i class="zmdi zmdi-save"></i>
			</a>

			@can(['expediente.edit'])
				<a class="btn-floating btn waves-effect waves-light cyan darken-2 edimar tooltipped" data-tooltip="Editar expediente">
					<i class="zmdi zmdi-edit" ng-click="edit()"></i>
				</a>
			@endcan

			@can(['expediente.delete'])
				<a class="btn-floating btn waves-effect waves-light cyan darken-2 edimar tooltipped" data-tooltip="Eliminar expediente" ng-click="delete()">
					<i class="zmdi zmdi-delete"></i>
				</a>
			@endcan
		</div>				
	<div class="container martp">
		<div class="row">
			<div class="center">
				<div class="input-field col s2">
					<label class="validate" for="search4"><i class="zmdi zmdi-search zmdi-hc-lg"></i> Buscar cédula</label>
					<input id="search4" type="text" name="search" ng-model="search" class="validate">
				</div>
			</div>
			<div class="orange-text center">
				<div class="input-field col s2">
					<select ng-model="data.tipologia" class="browser-default" ng-disabled="!state">
						@foreach($tipologias as $tipologia)
							<option value="{{$tipologia->id}}">{{$tipologia->nombre}}</option>
						@endforeach
					</select>
					<label class="active labelmov"><i class="zmdi zmdi-assignment zmdi-hc-lg"></i> Tipología</label>
				</div>
			</div>
			<div class="orange-text center">
				<div>
					<div class="input-field col s2">
						<label class="labelmov" for="fechadd"><i class="zmdi zmdi-calendar-alt zmdi-hc-lg"></i> Fecha de apertura</label>
						<input id="fechadd" type="text" class="datepicker" placeholder="Fecha de Apertura" ng-model="data.fecha" ng-disabled="!state">
					</div>	
				</div>
			</div>
			@if($expediente->fecha_cierre)
			<div class="orange-text cyan center col s2">
				<h6>Fecha de cierre</h6>
				<div class="chip center cyan white-text">
					{{$expediente->fecha_cierre}}
				</div>
			</div>
			@endif
			<div class="orange-text center">
				<div class="input-field col s2">
					<select ng-model="data.estatus" class="browser-default" ng-disabled="!state">
						@foreach($estatus as $estatu)
							<option value="{{$estatu->id}}">{{$estatu->nombre}}</option>
						@endforeach
					</select>
					<label class="active labelmov"><i class="zmdi zmdi-calendar-alt zmdi-hc-lg"></i> Estatus</label>
				</div>
			</div>
			<div class="orange-text center col s2">
				<h6>Involucrados</h6>
				<div class="chip center cyan white-text">
					{{$expediente->investigados_count}}
				</div>
			</div>
	</div>
  </div>
		<div class="container">
			<ul class="collapsible" data-collapsible="accordion">
				<li dir-paginate="investigado in investigados |filter:search| itemsPerPage:5">
					<div class="collapsible-header cyan-text">
						<i class="zmdi zmdi-account"></i>
						<span class="">@{{investigado.empleado.nombres}} @{{investigado.empleado.apellidos}}</span>
					</div>
					<div class="collapsible-body container">
						<button class="btn-floating btn waves-effect waves-light cyan darken-2 edimar3 tooltipped" data-tooltip="Aplicar cambios" data-position="left" ng-click="addEditInvestigado(investigado)" ng-show="state"><i class="zmdi zmdi-collection-plus"></i></button>
						<div class="row">
							<form class="col s12">
								<div class="row">
									<div class="input-field col s6">
										<input readonly id="inid" type="text"  ng-model="investigado.empleado.cedula" class="validate">
										<label class="active" for="inid"><i class="zmdi zmdi-view-web"></i> Cédula</label>		
									</div>
									<div class="input-field col s6">
										<input readonly id="innom" type="text" ng-model="investigado.empleado.nombres" class="validate">
										<label class="active" for="innom"><i class="zmdi zmdi-account zmdi-hc-lg"></i> Nombres</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s6">
										<input readonly id="inape" type="text" ng-model="investigado.empleado.apellidos" class="validate">
										<label class="active" for="inape"><i class="zmdi zmdi-account-o zmdi-hc-lg"></i> Apellidos</label>
									</div>
									<div class="input-field col s6">
										<input readonly id="ininv" type="text" ng-model="investigado.cargo" class="validate">
										<label class="active" for="ininv"><i class="zmdi zmdi-group-work zmdi-hc-lg"></i> Cargo en la investigación</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s6">
										<input readonly id="inubi" type="text" ng-model="investigado.ubicacion" class="validate">
										<label class="active" for="inubi"><i class="zmdi zmdi-square-right zmdi-hc-lg"></i> Ubicación en la investigación</label>
									</div>
									<div class="input-field col s6">
										<input readonly id="ininv" type="text" ng-model="investigado.relacion" class="validate">
										<label class="active" for="ininv"><i class="zmdi zmdi-folder-outline zmdi-hc-lg"></i> Relación en la investigación</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s6">
										<select ng-model="investigado.complicidade.id" convert-to-number class="browser-default" ng-disabled="!state">
											@foreach($complicidades as $complicidad)
												<option value="{{$complicidad->id}}">{{$complicidad->nombre}}</option>
											@endforeach
										</select>
										<label class="active labelmov"><i class="zmdi zmdi-library zmdi-hc-lg"></i> Complicidad</label>
									</div>
									<div class="input-field col s6">
										<select ng-model="investigado.resultado.id" convert-to-number class="browser-default" ng-disabled="!state">
											@foreach($resultados as $resultado)
												<option value="{{$resultado->id}}">{{$resultado->nombre}}</option>
											@endforeach
										</select>
										<label class="active labelmov"><i class="zmdi zmdi-check zmdi-hc-lg"></i> Resultado</label>
									</div>	
								</div>
								<div class="row">
									<div class="input-field col s6">
										<select ng-model="investigado.decisorio.id" convert-to-number class="browser-default" ng-disabled="!state">
											@foreach($decisorios as $decisorio)
												<option value="{{$decisorio->id}}">{{$decisorio->nombre}}</option>
											@endforeach
										</select>
										<label class="active labelmov"><i class="zmdi zmdi-check-all zmdi-hc-lg"></i> Decisorio</label>
									</div>	
									<div class="input-field col s6">
										<label class="labelmov" for="fechape"><i class="zmdi zmdi-calendar-alt zmdi-hc-lg"></i> Fecha de inclusión</label>
										<input id="fechape" type="text" class="datepicker" placeholder="Fecha de Apertura" ng-model="investigado.fecha" ng-disabled="!state">
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
			<div class="row" ng-hide="state">
				<a href="#modal6" class="waves-effect waves-light btn cyan darken-2 edimar4 modal-trigger tooltipped" data-tooltip="Resumen de expediente"> Resumen <i class="zmdi zmdi-collection-text"></i></a>
			</div>
			<div class="row" ng-show="state">
				<form class="">
						<div class="input-field push-s2 col s8">
							<i class="material-icons prefix">info_outline</i>
							<textarea style="min-height:220px;" id="icon_prefix2" class="materialize-textarea" ng-model="data.resumen" maxlength="900" length="900"></textarea>
							<label class="active" for="icon_prefix2">Resumen</label>
						</div>
				</form>
			</div>
		</div>

		@include('modals.addinvo_modal')
		@include('modals.summary_modal')
</div>

<script type="text/javascript">
	var expediente = {!! $expediente !!};
</script>

@endsection
