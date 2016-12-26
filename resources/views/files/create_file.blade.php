@extends('layouts.app')
@section('content')
<div class="card-panel cyan darken-2 white-text marexp center z-depth-1">Creacion de Expediente <i class="zmdi zmdi-file-plus"></i></div>
	<div class="white" ng-controller="registerCtr">
		<div>
		  <div class="left mitad1">
				<div class="card-panel z-depth-1 col s6 cyan white-text center">Datos de Expediente <i class="zmdi zmdi-search-in-file"></i></div>
			  <div class="card-content white contentcard z-depth-1">
					<div class="row">
						<div class="input-field col s3">
							<select ng-model="data.tipologia">
								<option value="" disabled selected>Seleccione Tipologia</option>
								@foreach($tipologias as $tipologia)
									<option value="{{$tipologia->id}}">{{$tipologia->nombre}}</option>
								@endforeach
							</select>
							<label><i class="zmdi zmdi-assignment"></i> Tipologia</label>
						</div>
						<div class="input-field col s3">
							<select ng-model="data.estatus">
								<option value="" disabled selected>Seleccione Estatus</option>
								@foreach($estatus as $estatu)
									<option value="{{$estatu->id}}">{{$estatu->nombre}}</option>
								@endforeach
							</select>
							<label><i class="zmdi zmdi-assignment-check"></i> Estatus</label>
						</div>
						<div class="input-field col s3">
							<input type="date" class="datepicker" placeholder="Fecha de Apertura" ng-model="data.fecha">
							<label for="fechaex"><i class="zmdi zmdi-calendar-alt"></i> Fecha de Apertura</label>
						</div>
					</div>
				<div class="row">
					<form class="col s12">
						<div class="row">
							<div class="input-field col s11">
								<i class="material-icons prefix">edit</i>
								<textarea id="textarea1" class="materialize-textarea" length="900" ng-model="data.resumen"></textarea>
								<label for="textarea1">Resumen</label>
							</div>
						</div>
					</form>
				</div>
			  </div>
	   	  </div>	

			<div class="right mitad2" ng-cloak>
				<div class="card-panel z-depth-1 col s6 cyan white-text center">Inclusion de Involucrados <i class="zmdi zmdi-account-add"></i></div>
				<div class="card-content white contentcard z-depth-1">
				<div class="row">
					<form ng-submit="empleadoSearch()">
						<div class="input-field col s3">
							<label for="search"><i class="zmdi zmdi-search"></i> Buscar Cedula</label>
							<input id="search" type="text" name="search" autocomplete="off" ng-model="cedula" class="validate">
						</div>
					</form>
					<div ng-show="status">
						<div class="input-field col s3">
							<input readonly id="firstn" type="text" placeholder="Nombres" class="validate" ng-model="empleado.nombres">
							<label for="firstn"><i class="zmdi zmdi-account"></i> Nombres</label>
						</div>
						<div class="input-field col s3">
							<input readonly id="secondn" type="text" placeholder="Apellidos" class="validate" ng-model="empleado.apellidos">
							<label for="secondn"><i class="zmdi zmdi-account-o"></i> Apellidos</label>
						</div>
						<div class="input-field col s3">
							<input readonly id="position" type="text" placeholder="Cargo" class="validate" ng-model="empleado.cargo">
							<label for="position"><i class="zmdi zmdi-group-work"></i> Cargo</label>
						</div>
						<div class="input-field col s3">
							<input readonly id="location" type="text" placeholder="Unicacion" class="validate" ng-model="empleado.ubicacion">
							<label for="location"><i class="zmdi zmdi-square-right"></i> Ubicacion</label>
						</div>
						<div class="input-field col s3">
							<input readonly id="relationship" type="text" placeholder="Relacion Laboral" class="validate" ng-model="empleado.relacion">
							<label for="relationship"><i class="zmdi zmdi-folder-outline"></i> Relacion Laboral</label>
						</div>
						<div class="input-field col s3">
							<label for="phone"><i class="zmdi zmdi-phone"></i> Telefono</label>
							<input value="" id="phone" type="text" class="validate">
						</div>
						<div class="input-field col s3">
							<select ng-model="empleado.complicidad">
								<option value="" disabled selected>Seleccione Complicidad</option>
								@foreach($complicidades as $complicidad)
									<option value="{{$complicidad->id}}">{{$complicidad->nombre}}</option>
								@endforeach
							</select>
							<label><i class="zmdi zmdi-library"></i> Complicidad</label>
						</div>
						<div class="input-field col s3">
							<select ng-model="empleado.resultado">
								<option value="" disabled selected>Seleccione Resultado</option>
								@foreach($resultados as $resultado)
									<option value="{{$resultado->id}}">{{$resultado->nombre}}</option>
								@endforeach
							</select>
							<label><i class="zmdi zmdi-check"></i> Resultado</label>
						</div>
						<div class="input-field col s3">
							<select ng-model="empleado.decisorio">
								<option value="" disabled selected>Seleccione Decisorio</option>
								@foreach($decisorios as $decisorio)
									<option value="{{$decisorio->id}}">{{$decisorio->nombre}}</option>
								@endforeach
							</select>
							<label><i class="zmdi zmdi-check-all"></i> Decisorio</label>
						</div>
						
						<div class="input-field col s3">
							<label for="fechaem"><i class="zmdi zmdi-calendar-alt"></i> Fecha de Inclusion</label>
							<input id ="fechaem" type="date" class="datepicker" ng-model="empleado.fecha">
						</div>
						<div class="input-field col s3 btnag">
							<a class="waves-effect waves-light cyan darken-1 btn-large" ng-click="agregar()">Agregar</a>
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
			<a class="waves-effect waves-light cyan darken-1 btn" ng-click="guardar()">Guardar</a>
		</div>
	</div>	
</div>
@endsection
