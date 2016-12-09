@extends('layouts.app')
@section('content')
<div class="card-panel cyan darken-1 white-text marexp center z-depth-1">Creacion de Expediente <i class="zmdi zmdi-file-plus"></i></div>
	<div class="white" ng-controller="registerCtr">
		<div class="">
			<div class="left mitad1">
				<div class="card-panel col s6 cyan white-text center">Datos de Expediente <i class="zmdi zmdi-search-in-file"></i></div>
					<div class="row">
						<div class="input-field col s3">
							<select ng-model="data.tipologia">
								<option value="" disabled selected>Tipologia</option>
								@foreach($tipologias as $tipologia)
									<option value="{{$tipologia->id}}">{{$tipologia->nombre}}</option>
								@endforeach
							</select>
							<label>Tipologia</label>
						</div>
						<div class="input-field col s3">
							<select ng-model="data.estatus">
								<option value="" disabled selected>Estatus</option>
								@foreach($estatus as $estatu)
									<option value="{{$estatu->id}}">{{$estatu->nombre}}</option>
								@endforeach
							</select>
							<label>Estatus</label>
						</div>
					</div>
				<div class="row">
					<form class="col s12">
						<div class="row">
							<div class="input-field col s12">
								<textarea id="textarea1" class="materialize-textarea" ng-model="data.resumen"></textarea>
								<label for="textarea1">Resumen</label>
							</div>
						</div>
					</form>
				</div>
			</div>

			<div class="right mitad2" ng-cloak>
				<div class="card-panel col s6 cyan white-text center">Inclusion de Involucrados <i class="zmdi zmdi-account-add"></i></div>
				<div class="row">
					<form ng-submit="empleadoSearch()">
						<div class="input-field col s3">
							<input type="text" name="search" autocomplete="off" ng-model="cedula" placeholder="Cedula Involucrado">
						</div>
					</form>
					<div ng-show="status">
						<div class="input-field col s3">
							<input  id="first_name2" type="text" class="validate" ng-model="empleado.nombres">
							<label class="active" for="first_name2">Nombres</label>
						</div>
						<div class="input-field col s3">
							<input id="first_name2" type="text" class="validate" ng-model="empleado.apellidos">
							<label class="active" for="first_name2">Apellidos</label>
						</div>
						<div class="input-field col s3">
							<input id="first_name2" type="text" class="validate" ng-model="empleado.cargo">
							<label class="active" for="first_name2">Cargo</label>
						</div>
						<div class="input-field col s3">
							<input id="first_name2" type="text" class="validate" ng-model="empleado.ubicacion">
							<label class="active" for="first_name2">Ubicacion</label>
						</div>
						<div class="input-field col s3">
							<input id="first_name2" type="text" class="validate" ng-model="empleado.relacion">
							<label class="active" for="first_name2">Relacion Laboral</label>
						</div>
						<div class="input-field col s3">
							<input value="Alvin" id="first_name2" type="text" class="validate">
							<label class="active" for="first_name2">Telefono</label>
						</div>
						<div class="input-field col s3">
							<select ng-model="empleado.complicidad">
								<option value="" disabled selected>Complicidad</option>
								@foreach($complicidades as $complicidad)
									<option value="{{$complicidad->id}}">{{$complicidad->nombre}}</option>
								@endforeach
							</select>
							<label>Complicidad</label>
						</div>
						<div class="input-field col s3">
							<select ng-model="empleado.resultado">
								<option value="" disabled selected>Resultado</option>
								@foreach($resultados as $resultado)
									<option value="{{$resultado->id}}">{{$resultado->nombre}}</option>
								@endforeach
							</select>
							<label>Resultado</label>
						</div>
						<div class="input-field col s3">
							<select ng-model="empleado.decisorio">
								<option value="" disabled selected>Decisorio</option>
								@foreach($decisorios as $decisorio)
									<option value="{{$decisorio->id}}">{{$decisorio->nombre}}</option>
								@endforeach
							</select>
							<label>Decisorio</label>
						</div>
						<div class="input-field col s3">
							<a class="waves-effect waves-light cyan darken-1 btn btnaddex" ng-click="agregar()">Agregar</a>
						</div>
					</div>

					<div class="row col s12 center">	
						<div class="col s4 marchip" ng-repeat="investigado in investigados">	
							<div class="chip cyan white-text hoverable">
								<span class="tooltipped" data-position="left" data-tooltip="@{{investigado.nombre}}">CI: @{{investigado.cedula}}</span>
								<i class="material-icons" ng-click="deleteInvestigado($index)">close</i>
							</div>
						</div>	
					</div>
					<div class="row col s12">
						<div class="col s12 center">
							<ul class="pagination">
								<li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
								<li class="active"><a href="#!">1</a></li>
								<li class="waves-effect"><a href="#!">2</a></li>
								<li class="waves-effect"><a href="#!">3</a></li>
								<li class="waves-effect"><a href="#!">4</a></li>
								<li class="waves-effect"><a href="#!">5</a></li>
								<li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
							</ul>
						</div>	
					</div>
				</div>
				<div class="posag">
					<a class="waves-effect waves-light cyan darken-1 btn" ng-click="guardar()">Guardar</a>
				</div>		
		</div>	
	</div>	
</div>
@endsection
