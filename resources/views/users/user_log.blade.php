@extends('layouts.app')
@section('content')
<div class="card-panel marexp cyan darken-1 z-depth-1 white-text center">Usuarios Registrados <i class="zmdi zmdi-accounts-list"></i></div>
<div class="position">
	<div class="left marginser">
		<input type="text" name="search" placeholder="Filtrar Busqueda">
	</div>
	<div class="input-field col s12">
			<a class="btn-floating waves-effect waves-light cyan darken-1 tooltipped" data-tooltip="Nuevo/Agregar" data-position="top" href="#modal1">
				<i class="zmdi zmdi-plus"></i>
			</a>
			<a class="btn-floating waves-effect waves-light cyan darken-1 tooltipped" data-tooltip="Modificar" data-position="top" href="#modal1">
				<i class="zmdi zmdi-edit"></i>
			</a>
			<a class="btn-floating waves-effect waves-light cyan darken-1 tooltipped" data-tooltip="Bloquear" data-position="top" onclick="sweetalertEventUserBlock()">
				<i class="zmdi zmdi-block-alt"></i>
			</a>
			<a class="btn-floating waves-effect waves-light cyan darken-1 tooltipped" data-tooltip="Eliminar" data-position="top" onclick="sweetalertEventUserDel()">
				<i class="zmdi zmdi-delete"></i>
			</a>
	</div>
</div>
<br>
<div class="container">	
	<table class="highlight centered order-table table bordered" id="myTable" data-mcs-theme="dark">
		<thead class="cyan">
			<tr class="white-text">
				<th data-field="id">
					<input type="checkbox" class="filled-in" id="filled-in-box" />
					<label for="filled-in-box"></label>
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