@extends('layouts.app')
@include('navs.side')
@section('content')
<div id="main">
<div>
	<div class="white divexp z-depth-2">
		<div class="card-panel teal white-text center">Expediente #4465
			<a class="btn-floating btn teal lighten-1 edimar tooltipped" data-tooltip="Editar Expediente">
				<i class="zmdi zmdi-edit"></i>
			</a>
		</div>
		<span class="new badge positionbad">Abierto</span>					
		<div class="mrr">
			<div class="divchip2 white-text teal center z-depth-1">
				<h6>Tipologia</h6>
				<div class="chip center teal white-text">
					Delictivo
				</div>
			</div>
			<div class="divchip2 white-text teal center z-depth-1">
				<h6>Fecha de Creacion</h6>
				<div class="chip center teal white-text">
					13/12/2016
				</div>
			</div>
			<div class="divchip2 white-text teal center z-depth-1">
				<h6>Fecha de cierre</h6>
				<div class="chip center teal white-text">
					31/12/2016
				</div>
			</div>
			<div class="divchip2 white-text teal center z-depth-1">
				<h6>Involucrados</h6>
				<div class="chip center teal white-text">
					10
				</div>
			</div>
		</div>
		<div class="input-field col s3 wis">
			<input type="text" name="search" placeholder="Filtrar Busqueda">
		</div>
		<div class="container">
			<ul class="collapsible" data-collapsible="accordion">
				<li>
					<div class="collapsible-header">
						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="collapsible-body container">
						<div class="row">
							<form class="col s12">
								<div class="row">
									<div class="input-field col s6">
										<input disabled id="first_name" type="text" value="25196580" class="validate">
										<label for="first_name">Cedula</label>
									</div>
									<div class="input-field col s6">
										<input disabled id="last_name" type="text" value="Parra coello" class="validate">
										<label for="last_name">Apellidos</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s6">
										<input disabled id="first_name" type="text" value="Fulanito Jose" class="validate">
										<label for="first_name">Nombres</label>
									</div>
									<div class="input-field col s6">
										<input id="last_name" type="text" value="Programador" class="validate">
										<label for="last_name">Cargo</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s6">
										<input id="first_name" type="text" value="Desarrolo de Aplicaciones" class="validate">
										<label for="first_name">Ubicacion</label>
									</div>
									<div class="input-field col s6">
										<input id="last_name" type="text" value="Empleado" class="validate">
										<label for="last_name">Relacion</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s6">
										<input id="first_name" type="text" value="Directa" class="validate">
										<label for="first_name">Complicidad</label>
									</div>
									<div class="input-field col s6">
										<input id="last_name" type="text" value="Despido" class="validate">
										<label for="last_name">Resultado</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s6">
										<input id="first_name" type="text" value="Directiva" class="validate">
										<label for="first_name">Decisorio</label>
									</div>
									<div class="input-field col s6">
										<input id="last_name" type="text" value="13/12/2016" class="validate">
										<label for="last_name">Fecha de adicion</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s6">
										<input id="status" type="text" value="Bajo investigacion" class="validate">
										<label for="status">Estado</label>
									</div>
								</div>
							</form>
						</div>
					</div>
				</li>
				<li>
					<div class="collapsible-header">
						<i class="zmdi zmdi-account"></i> 
						<span class="new spanmar2"> </span>
					</div>
					<div class="collapsible-body">
						<p>Lorem ipsum dolor sit amet.</p>
					</div>
				</li>
				<li>
					<div class="collapsible-header">
						<i class="zmdi zmdi-account"></i> 
						<span class="new spanmar2"> </span>
					</div>
					<div class="collapsible-body">
						<p>Lorem ipsum dolor sit amet.</p>
					</div>
				</li>
				<li>
					<div class="collapsible-header">
						<i class="zmdi zmdi-account"></i> 
						<span class="new spanmar2"> </span>
					</div>
					<div class="collapsible-body">
						<p>Lorem ipsum dolor sit amet.</p>
					</div>
				</li>
				<li>
					<div class="collapsible-header">
						<i class="zmdi zmdi-account"></i>
						<span class="new spanmar2"> </span>
					</div>
					<div class="collapsible-body">
						<p>Lorem ipsum dolor sit amet.</p>
					</div>
				</li>
				<li>
					<div class="collapsible-header">
						<i class="zmdi zmdi-account"></i>
						<span class="new spanmar2"> </span>
					</div>
					<div class="collapsible-body">
						<p>Lorem ipsum dolor sit amet.</p>
					</div>
				</li>
				<li>
					<div class="collapsible-header">
						<i class="zmdi zmdi-account"></i>
						<span class="new spanmar2"> </span>
					</div>
					<div class="collapsible-body">
						<p>Lorem ipsum dolor sit amet.</p>
					</div>
				</li>
				<li>
					<div class="collapsible-header">
						<i class="zmdi zmdi-account"></i> 
						<span class="new spanmar2"> </span>
					</div>
					<div class="collapsible-body">
						<p>Lorem ipsum dolor sit amet.</p>
					</div>
				</li>
				<li>
					<div class="collapsible-header">
					<i class="zmdi zmdi-account"></i>
						<span class="new spanmar2"> </span>
					</div>
					<div class="collapsible-body">
						<p>Lorem ipsum dolor sit amet.</p>
					</div>
				</li>
				<li>
					<div class="collapsible-header">
						<i class="zmdi zmdi-account"></i> 
						<span class="new spanmar2"> </span>
					</div>
					<div class="collapsible-body">
						<p>Lorem ipsum dolor sit amet.</p>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
</div>
@endsection