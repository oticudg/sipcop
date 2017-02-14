{{-- Modal estructura --}} 
<div id="modal4" class="modal">
	<div class="modal-content">
		<a href="#" class="modal-action modal-close right"><i class="zmdi zmdi-close zmdi-hc-2x"></i></a>
		<div class="container center-align">
			<div style="margin-top:-30px;">
				<h1 class="light-blue-text"> 
					<i class="zmdi zmdi-accounts-add animated animatedicon pulse"></i> 
				</h1>
				<div style="margin-top:-30px;">
					<h5 class="orange-text">Adicion de Involucrado</h5>
				</div>   
			</div>
			<div>
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
								<label for="relationship"><i class="zmdi zmdi-folder-outline zmdi-hc-lg"></i> Relación Laboral</label>
							</div>
							<div class="input-field col s3">
								<label for="phone"><i class="zmdi zmdi-phone zmdi-hc-lg"></i> Teléfono</label>
								<input value="" id="phone" type="text" class="validate" ng-model="empleado.telefono">
							</div>
							<div class="input-field col s3">
								<select ng-model="empleado.complicidad">
									<option value="" disabled selected>Seleccione complicidad</option>
									@foreach($complicidades as $complicidad)
									<option value="{{$complicidad->id}}">{{$complicidad->nombre}}</option>
									@endforeach
								</select>
								<label><i class="zmdi zmdi-library zmdi-hc-lg"></i> Complicidad</label>
							</div>
							<div class="input-field col s3">
								<select ng-model="empleado.resultado">
									<option value="" disabled selected>Seleccione resultado</option>
									@foreach($resultados as $resultado)
									<option value="{{$resultado->id}}">{{$resultado->nombre}}</option>
									@endforeach
								</select>
								<label><i class="zmdi zmdi-check zmdi-hc-lg"></i> Resultado</label>
							</div>
							<div class="input-field col s3">
								<select ng-model="empleado.decisorio">
									<option value="" disabled selected>Seleccione decisorio</option>
									@foreach($decisorios as $decisorio)
									<option value="{{$decisorio->id}}">{{$decisorio->nombre}}</option>
									@endforeach
								</select>
								<label><i class="zmdi zmdi-check-all zmdi-hc-lg"></i> Decisorio</label>
							</div>
							<div class="input-field col s3">
								<label for="fechaem"><i class="zmdi zmdi-calendar-alt zmdi-hc-lg"></i> Fecha de inclusión</label>
								<input id ="fechaem" type="text" class="datepicker" placeholder="Ingrese una fecha" ng-model="empleado.fecha">
							</div>
							<div class="input-field col s3 btnag">
								<a class="waves-effect waves-light cyan darken-1 btn-large tooltipped" data-tooltip="Agregar involucrado" ng-click="agregar()">Agregar &nbsp;<i class="zmdi zmdi-plus"></i></a>
							</div>
						</div>
						<div class="row col s12 center">	
							<div class="col s4 marchip" dir-paginate="investigado in addInvestigados | itemsPerPage:9" pagination-id="add-pagination">	
								<div class="chip cyan white-text hoverable">
									<span class="tooltipped" data-position="left" data-tooltip="@{{investigado.nombre}}">CI: @{{investigado.cedula}}</span>
									<i class="material-icons" ng-click="deleteInvestigado($index)">close</i>
								</div>
							</div>	
						</div>
						<div class="row col s12">
							<div class="col s12 center">
								<dir-pagination-controls template-url="/templates/dirPagination.tpl.html" pagination-id="add-pagination"></dir-pagination-controls>

							</div>	
						</div>
					</div>
				<button id="btnsac"  ng-show="addInvestigados.length > 0" ng-click="saveInvestigados()" class="waves-effect waves-teal cyan btn z-depth-1 tooltipped" data-tooltip="Guardar cambios">Guardar &nbsp; <i class="zmdi zmdi-save"></i>
				</button>
			</div>
		</div>
	</div>
</div>