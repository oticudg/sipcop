@extends('layouts.app')
@section('content')
	<div class="white divexp z-depth-2">

		<div class="card-panel teal white-text center">Creacion de Expediente</div>

		<div class="">
			
			<div class="left mitad1">
				<div class="card-panel col s6 white orange-text center">Datos de Expediente</div>
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
			</div>
			
			<div class="right mitad2">
			
			<div class="card-panel col s6 white orange-text center">Inclusion de Involucrados</div>
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

						<a class="waves-effect waves-light btn btnaddex">Agregar</a>
						
					</div>
				
					

				<div class="row col s12 center">
					
					<div class="col s4 marchip">	
						<div class="chip tooltipped" data-position="left" data-tooltip="Emanuel Parra">
							CI:25196580
							<i class="close material-icons">close</i>
						</div>
					</div>		
					<div class="col s4 marchip">	
						<div class="chip tooltipped" data-position="left" data-tooltip="Julio Castillo">
							CI:17182465
							<i class="close material-icons">close</i>
						</div>
					</div>	
					<div class="col s4 marchip">	
						<div class="chip tooltipped" data-position="left" data-tooltip="Mario Gonzalez">
							CI:24414988
							<i class="close material-icons">close</i>
						</div>
					</div>		
					<div class="col s4 marchip">	
						<div class="chip tooltipped" data-position="left" data-tooltip="Emanuel Parra">
							CI:25196580
							<i class="close material-icons">close</i>
						</div>
					</div>		
					<div class="col s4 marchip">	
						<div class="chip tooltipped" data-position="left" data-tooltip="Julio Castillo">
							CI:17182465
							<i class="close material-icons">close</i>
						</div>
					</div>	
					<div class="col s4 marchip">	
						<div class="chip tooltipped" data-position="left" data-tooltip="Mario Gonzalez">
							CI:24414988
							<i class="close material-icons">close</i>
						</div>
					</div>	
					<div class="col s4 marchip">	
						<div class="chip tooltipped" data-position="left" data-tooltip="Emanuel Parra">
							CI:25196580
							<i class="close material-icons">close</i>
						</div>
					</div>		
					<div class="col s4 marchip">	
						<div class="chip tooltipped" data-position="left" data-tooltip="Julio Castillo">
							CI:17182465
							<i class="close material-icons">close</i>
						</div>
					</div>	
					<div class="col s4 marchip">	
						<div class="chip tooltipped" data-position="left" data-tooltip="Mario Gonzalez">
							CI:24414988
							<i class="close material-icons">close</i>
						</div>
					</div>
					<div class="col s4 marchip">	
						<div class="chip tooltipped" data-position="left" data-tooltip="Emanuel Parra">
							CI:25196580
							<i class="close material-icons">close</i>
						</div>
					</div>
					<div class="col s4 marchip">	
						<div class="chip tooltipped" data-position="left" data-tooltip="Julio Castillo">
							CI:17182465
							<i class="close material-icons">close</i>
						</div>
					</div>
					<div class="col s4 marchip">	
						<div class="chip tooltipped" data-position="left" data-tooltip="Mario Gonzalez">
							CI:24414988
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
		</div>
	</div>
	<div class="posag">
		<a class="waves-effect waves-light btn">Guardar</a>
	</div>			
</div>







@endsection