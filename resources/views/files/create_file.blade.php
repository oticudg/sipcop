@extends('layouts.app')
@section('content')
<div class="card-panel cyan darken-2 white-text marexp center z-depth-1">Creación de expediente <i class="zmdi zmdi-file-plus"></i></div>
	<div class="white" ng-controller="registerCtr">
		<div>
		  <div class="left mitad1">
				<div class="card-panel z-depth-1 col s6 cyan white-text center">Datos de expediente <i class="zmdi zmdi-search-in-file"></i></div>
			  <div class="card-content white contentcard z-depth-1">
					<div class="row">
						<div class="input-field col s3">
							<select ng-model="data.tipologia" required>
								<option value="" disabled selected>Seleccione tipología</option>
								@foreach($tipologias as $tipologia)
									<option value="{{$tipologia->id}}">{{$tipologia->nombre}}</option>
								@endforeach
							</select>
							<label><i class="zmdi zmdi-assignment zmdi-hc-lg"></i> Tipología</label>
						</div>
						<div class="input-field col s3">
							<select ng-model="data.estatus" required>
								<option value="" disabled selected>Seleccione estatus</option>
								@foreach($estatus as $estatu)
									<option value="{{$estatu->id}}">{{$estatu->nombre}}</option>
								@endforeach
							</select>
							<label><i class="zmdi zmdi-assignment-check zmdi-hc-lg"></i> Estatus</label>
						</div>
						<div class="input-field col s3">
							<label for="fechaex"><i class="zmdi zmdi-calendar-alt zmdi-hc-lg"></i> Fecha de apertura</label>
							<input id="fechaex" type="text" class="datepicker" placeholder="Ingrese una fecha" ng-model="data.fecha" required>
						</div>
					</div>
				<div class="row">
					<form class="col s12">
						<div class="row">
							<div class="input-field col s11">
								<i class="material-icons prefix">edit</i>
								<textarea id="textarea1" class="materialize-textarea" maxlength="900" length="900" ng-model="data.resumen"></textarea>
								<label for="textarea1">Resumen</label>
							</div>
						</div>
					</form>
				</div>
			  </div>
	   	  </div>	

			<div class="right mitad2" ng-cloak>
				<div class="card-panel z-depth-1 col s6 cyan white-text center">Inclusión de involucrados <i class="zmdi zmdi-account-add"></i></div>
				<div class="card-content white contentcard z-depth-1">
				<div class="row">
					<form ng-submit="empleadoSearch()">
						<div class="input-field col s3">
							<label for="search"><i class="zmdi zmdi-search zmdi-hc-lg"></i> Buscar cédula</label>
							<input id="search" type="text" name="search" autocomplete="off" ng-model="cedula" class="validate" required>
						</div>
					</form>
					<div ng-show="status">
						<div class="input-field col s3">
							<input readonly id="firstn" type="text" placeholder="Nombres" class="validate" ng-model="empleado.nombres">
							<label for="firstn"><i class="zmdi zmdi-account zmdi-hc-lg"></i> Nombres</label>
						</div>
						<div class="input-field col s3">
							<input readonly id="secondn" type="text" placeholder="Apellidos" class="validate" ng-model="empleado.apellidos">
							<label for="secondn"><i class="zmdi zmdi-account-o zmdi-hc-lg"></i> Apellidos</label>
						</div>
						<div class="input-field col s3">
							<input readonly id="position" type="text" placeholder="Cargo" class="validate" ng-model="empleado.cargo">
							<label for="position"><i class="zmdi zmdi-group-work zmdi-hc-lg"></i> Cargo</label>
						</div>
						<div class="input-field col s3">
							<input readonly id="location" type="text" placeholder="Unicacion" class="validate" ng-model="empleado.ubicacion">
							<label for="location"><i class="zmdi zmdi-square-right zmdi-hc-lg"></i> Ubicación</label>
						</div>
						<div class="input-field col s3">
							<input readonly id="relationship" type="text" placeholder="Relacion Laboral" class="validate" ng-model="empleado.relacion">
							<label for="relationship"><i class="zmdi zmdi-folder-outline zmdi-hc-lg"></i> Relación laboral</label>
						</div>
						<div class="input-field col s3">
							<label for="phone"><i class="zmdi zmdi-phone zmdi-hc-lg"></i> Teléfono</label>
							<input value="" id="phone" type="text" class="validate" ng-model="empleado.telefono">
						</div>
						<div class="input-field col s3">
							<select ng-model="empleado.complicidad" required>
								<option value="" disabled selected>Seleccione complicidad</option>
								@foreach($complicidades as $complicidad)
									<option value="{{$complicidad->id}}">{{$complicidad->nombre}}</option>
								@endforeach
							</select>
							<label><i class="zmdi zmdi-library zmdi-hc-lg"></i> Complicidad</label>
						</div>
						<div class="input-field col s3">
							<select ng-model="empleado.resultado" required>
								<option value="" disabled selected>Seleccione resultado</option>
								@foreach($resultados as $resultado)
									<option value="{{$resultado->id}}">{{$resultado->nombre}}</option>
								@endforeach
							</select>
							<label><i class="zmdi zmdi-check zmdi-hc-lg"></i> Resultado</label>
						</div>
						<div class="input-field col s3">
							<select ng-model="empleado.decisorio" required>
								<option value="" disabled selected>Seleccione decisorio</option>
								@foreach($decisorios as $decisorio)
									<option value="{{$decisorio->id}}">{{$decisorio->nombre}}</option>
								@endforeach
							</select>
							<label><i class="zmdi zmdi-check-all zmdi-hc-lg"></i> Decisorio</label>
						</div>
						
						<div class="input-field col s3">
							<label for="fechaem"><i class="zmdi zmdi-calendar-alt zmdi-hc-lg"></i> Fecha de inclusión</label>
							<input id ="fechaem" type="text" placeholder="Ingrese una fecha" class="datepicker" ng-model="empleado.fecha" required>
						</div>
						<div class="input-field col s3 btnag">
							<a class="waves-effect waves-light cyan darken-1 btn-large tooltipped" data-tooltip="Agregar involucrado" ng-click="agregar()">Agregar &nbsp;<i class="zmdi zmdi-plus"></i></a>
						</div>
					</div>

					<div class="row col s12 center">	
						<div class="col s4 marchip" dir-paginate="investigado in investigados | itemsPerPage:9">	
							<div class="chip cyan white-text hoverable">
								<span class="tooltipped" data-position="left" data-tooltip="@{{investigado.nombre}}">CI: @{{investigado.cedula}}</span>
								<i class="material-icons" ng-click="deleteInvestigado($index)">close</i>
							</div>
						</div>	
					</div>
					<div class="row col s12">
						<div class="col s12 center">
							<dir-pagination-controls template-url="/templates/dirPagination.tpl.html"></dir-pagination-controls>

						</div>	
					</div>
				</div>
			</div>
		</div>	
		<div class="posag">
			<a class="waves-effect waves-light cyan darken-1 btn tooltipped" data-tooltip="Guardar expediente" ng-click="guardar()">Guardar &nbsp;<i class="zmdi zmdi-save"></i></a>
		</div>
	</div>	
</div>
@endsection
