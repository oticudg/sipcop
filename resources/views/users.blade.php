@extends ("layouts.app")

@section ("content")
<div id="main" class="col s3 m6 l9">


	<div class="position">


		<div class="input-field col s12">

			<div class="left marginser">
				<input type="text" name="search" placeholder="Filtrar Busqueda">
			</div>

			<a class="btn-floating waves-effect waves-light  tooltipped" data-tooltip="Visualizar" data-position="top" href="#modal1"><i class="zmdi zmdi-eye"></i></a>
			<a class="btn-floating waves-effect waves-light  tooltipped" data-tooltip="Nuevo/Agregar" data-position="top" href="#modal1"><i class="zmdi zmdi-plus"></i></a>
			<a class="btn-floating waves-effect waves-light  tooltipped" data-tooltip="Modificar" data-position="top" href="#modal1"><i class="zmdi zmdi-edit"></i></a>
			<a class="btn-floating waves-effect waves-light  tooltipped posi" data-tooltip="Eliminar" data-position="top" onclick="sweetalertEvent()"><i class="zmdi zmdi-delete"></i></a>
	    
	    </div>

	</div>
		<br>
		<div class="container">	
			<table class="highlight centered order-table table bordered" id="myTable" data-mcs-theme="dark">
				<thead class="teal">
					<tr class="white-text">
						<th data-field="id">

							<input type="checkbox" class="filled-in" id="filled-in-box" />
							<label for="filled-in-box"></label>

						</th>

						<th data-field="id">Usuario</th>
						<th data-field="name">Rol</th>
						<th data-field="price">Correo</th>


					</tr>
				</thead>
				<tbody>

					<tr>
						<td><input type="checkbox" class="checkbox" id="check1" />
							<label for="check1"></label></td>

						<td>Peter</td>
						<td>Griffin</td>
						<td>$100</td>
					</tr>
					<tr>
						<td><input type="checkbox" class="checkbox" id="check2" />
							<label for="check2"></label></td>

						<td>Peter</td>
						<td>Griffin</td>
						<td>$100</td>
					</tr>
					<tr>
						<td><input type="checkbox" class="checkbox" id="check3" />
							<label for="check3"></label></td>

						<td>Peter</td>
						<td>Griffin</td>
						<td>$100</td>
					</tr>
					<tr>
						<td><input type="checkbox" class="checkbox" id="check4" />
							<label for="check4"></label></td>

						<td>Peter</td>
						<td>Griffin</td>
						<td>$100</td>
					</tr>
				</tbody>

			</table>

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
	
		@include('forms.modal_edit_user')

	</div>
	
@endsection

