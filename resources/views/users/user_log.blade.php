@extends('layouts.app')
@section('content')
@include('modals.adduser_modal')
@include('modals.reedituser_modal')

<div class="card-panel marexp cyan darken-1 z-depth-1 white-text center">Usuarios Registrados <i class="zmdi zmdi-accounts-list"></i></div>

<div class="position">
	<div class="left marginser">
		<input type="text" name="search" id="search">
		<label class="validate" for="search"><i class="zmdi zmdi-search zmdi-hc-lg"></i> Buscar Cedula</label>
	</div>
	<div class="input-field col s12">
			<a href="#modal5" class="btn-floating waves-effect waves-light cyan darken-1 tooltipped modal-trigger" data-tooltip="Nuevo/Agregar" data-position="top">
			<i class="zmdi zmdi-plus"></i>
			</a>
			<a href="#modal7" class="btn-floating waves-effect waves-light cyan darken-1 tooltipped modal-trigger" data-tooltip="Editar Usuario" data-position="top">
			<i class="zmdi zmdi-edit"></i>
			</a>
	</div>
</div>
<br>
<div class="container">	
	<table class="highlight centered order-table table bordered customtableuser other" id="myTable">
		<thead class="cyan">
			<tr class="white-text">
				<th data-field="id">
					<div class="">
						Seleccion
					</div>
				</th>
				<th data-field="id">Usuario</th>
				<th data-field="name">Rol</th>
				<th data-field="price">Contraseña</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
					<input type="checkbox" class="checkbox" id="check1" />
						<label for="check1"></label>
				</td>
						<td>Peter</td>
						<td>Griffin</td>
						<td>****</td>
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
@endsection	