@extends('layouts.app')
@section('content')
<div ng-controller="usersCtr">

	@include('modals.adduser_modal')
	@include('modals.reedituser_modal')

	<div class="card-panel marexp cyan darken-1 z-depth-1 white-text center">Usuarios Registrados <i class="zmdi zmdi-accounts-list"></i></div>

	<div class="position">
		<div class="left marginser">
			<input type="text" name="search" id="search" ng-model="search">
			<label class="validate" for="search"><i class="zmdi zmdi-search zmdi-hc-lg"></i> Buscar Cedula</label>
		</div>
		<div class="input-field col s12">
				<a href="#modal5" class="btn-floating waves-effect waves-light cyan darken-1 tooltipped modal-trigger" data-tooltip="Nuevo/Agregar" data-position="top">
				<i class="zmdi zmdi-plus"></i>
				</a>

				<a href="#modal7" class="btn-floating waves-effect waves-light cyan darken-1 disabled" ng-hide="userSelect">
				<i class="zmdi zmdi-edit"></i>
				</a>

				<a href="#modal7" class="btn-floating waves-effect waves-light cyan darken-1 tooltipped modal-trigger" data-tooltip="Editar Usuario" data-position="top" ng-show="userSelect">
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
					<th data-field="price">Nombre</th>
				</tr>
			</thead>
			<tbody>
				<tr dir-paginate="user in users |filter:search| itemsPerPage:10">
					<td>
						<input type="radio" name="select" class="checkbox" id="@{{user.id}}" ng-click="select(user)"/>
						<label for="@{{user.id}}"></label>
					</td>
					<td>@{{user.email}}</td>
					<td>@{{user.rol}}</td>
					<td>@{{user.name}}</td>
				</tr>
			</tbody>
		</table>
		<div class="col s12 center">
			<dir-pagination-controls template-url="/templates/dirPagination.tpl.html"></dir-pagination-controls>
		</div>	
	</div>
</div>

<script type="text/javascript">
	var users = {!! $users !!};
</script>
@endsection	