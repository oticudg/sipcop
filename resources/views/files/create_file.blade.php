@extends('layouts.app')
@section('content')
<div class="card-panel cyan darken-1 white-text marexp center z-depth-1">Creacion de Expediente <i class="zmdi zmdi-file-plus"></i></div>
	<div class="white">
		<div class="">
			<div class="left mitad1">
				<div class="card-panel col s6 cyan white-text center">Datos de Expediente <i class="zmdi zmdi-search-in-file"></i></div>
					<div class="row">
						<div class="input-field col s3">
							<select>
								<option value="" disabled selected>Tipologia</option>
								<option value="1">Option 1</option>
								<option value="2">Option 2</option>
								<option value="3">Option 3</option>
							</select>
							<label>Tipologia</label>
						</div>
						<div class="input-field col s3">
							<select>
								<option value="" disabled selected>Estatus</option>
								<option value="1">Option 1</option>
								<option value="2">Option 2</option>
								<option value="3">Option 3</option>
							</select>
							<label>Estatus</label>
						</div>
					</div>
				<div class="row">
					<form class="col s12">
						<div class="row">
							<div class="input-field col s12">
								<textarea id="textarea1" class="materialize-textarea"></textarea>
								<label for="textarea1">Resumen</label>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="right mitad2">
				<div class="card-panel col s6 cyan white-text center">Inclusion de Involucrados <i class="zmdi zmdi-account-add"></i></div>
				<div class="row">
					<div class="input-field col s3">
						<input type="text" name="search" placeholder="Cedula Involucrado">
					</div>
					<div class="input-field col s3">
						<input value="Alvin" id="first_name2" type="text" class="validate">
						<label class="active" for="first_name2">Nombres</label>
					</div>
					<div class="input-field col s3">
						<input value="Alvin" id="first_name2" type="text" class="validate">
						<label class="active" for="first_name2">Apellidos</label>
					</div>
					<div class="input-field col s3">
						<input value="Alvin" id="first_name2" type="text" class="validate">
						<label class="active" for="first_name2">Cargo</label>
					</div>
					<div class="input-field col s3">
						<input value="Alvin" id="first_name2" type="text" class="validate">
						<label class="active" for="first_name2">Ubicacion</label>
					</div>
					<div class="input-field col s3">
						<input value="Alvin" id="first_name2" type="text" class="validate">
						<label class="active" for="first_name2">Relacion Laboral</label>
					</div>
					<div class="input-field col s3">
						<input value="Alvin" id="first_name2" type="text" class="validate">
						<label class="active" for="first_name2">Telefono</label>
					</div>
					<div class="input-field col s3">
						<select>
							<option value="" disabled selected>Complicidad</option>
							<option value="1">Option 1</option>
							<option value="2">Option 2</option>
							<option value="3">Option 3</option>
						</select>
						<label>Complicidad</label>
					</div>
					<div class="input-field col s3">
						<select>
							<option value="" disabled selected>Resultado</option>
							<option value="1">Option 1</option>
							<option value="2">Option 2</option>
							<option value="3">Option 3</option>
						</select>
						<label>Resultado</label>
					</div>
					<div class="input-field col s3">
						<select>
							<option value="" disabled selected>Decisorio</option>
							<option value="1">Option 1</option>
							<option value="2">Option 2</option>
							<option value="3">Option 3</option>
						</select>
						<label>Decisorio</label>
					</div>
					<div class="input-field col s3">
						<a class="waves-effect waves-light cyan darken-1 btn btnaddex">Agregar</a>
					</div>
				<div class="row col s12 center">	
					<div class="col s4 marchip">	
						<div class="chip cyan white-text hoverable">
							<span class="tooltipped" data-position="left" data-tooltip="Emanuel Parra">CI: 25196580</span>
							<i class="close material-icons">close</i>
						</div>
					</div>		
					<div class="col s4 marchip">	
						<div class="chip cyan white-text hoverable">
							<span class="tooltipped" data-position="left" data-tooltip="Julio Castillo">CI :17182465</span>
							<i class="close material-icons">close</i>
						</div>
					</div>	
					<div class="col s4 marchip">	
						<div class="chip cyan white-text hoverable">
							<span class="tooltipped" data-position="left" data-tooltip="Mario Gonzalez">CI: 24414988</span>
							<i class="close material-icons">close</i>
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
					<a class="waves-effect waves-light cyan darken-1 btn">Guardar</a>
				</div>		
		</div>	
	</div>	
</div>
@endsection
