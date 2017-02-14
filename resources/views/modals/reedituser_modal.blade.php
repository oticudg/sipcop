{{-- Modal estructura --}} 
<div id="modal7" class="modal modal-fixed-footer modalback">
	<div class="modal-content">
		<div class="row padx">
			<a href="#" class="modal-action modal-close"><i class="zmdi zmdi-close zmdi-hc-2x"></i></a>
		</div>
		<div class="container-login center-align">
		<div class="row">
			<div class="input-field col s4">
				<select ng-model="userSelect.active" convert-to-number class="browser-default">
					<option value="1">Activo</option>
					<option value="0">Inactivo</option>
				</select>
				<label class="active labelmov"> <i class="zmdi zmdi-group-work"></i> Estatus</label>
			</div>
			<div class="">
				<a class="btn-floating waves-effect right btne waves-light cyan darken-1 tooltipped" data-tooltip="Eliminar usuario" data-position="top" ng-click="delete()">
					<i class="zmdi zmdi-delete"></i>
				</a>
			</div>
		</div>	
			<div style="">
				<h1 class="light-blue-text"> 
					<i class="zmdi zmdi-edit animated animatedicon pulse"></i> 
				</h1>
				<h5 class="orange-text">Editar usuario</h5>   
			</div>
			<form action="" method="post">
				<div class="row">
					
				</div>	
				<div class="row">

					<div class="input-field col s4">
						<input id="email1" type="email" class="validate" placeholder="Email" ng-model="userSelect.email">
						<label for="email1"><i class="zmdi zmdi-email"></i>&nbsp; Correo</label>
					</div>

					<div class="input-field col s4">
						<input id="usern" type="text" class="validate" placeholder="Usuario" ng-model="userSelect.name" required>
						<label for="usern"><i class="zmdi zmdi-account"></i> Usuario</label>
					</div>

					<div class="input-field col s4">
						<input id="pass1" type="password" class="validate" ng-model="userSelect.password" required>
						<label for="pass1">
							<i class="zmdi zmdi-key"></i> Contraseña
						</label>
					</div>

				</div>

				<div class="row">
					<div class="input-field col s4">
						<input id="pass2" type="password" class="validate" ng-model="userSelect.password_confirmation" required>
						<label for="pass2">
							<i class="zmdi zmdi-key"></i> Repetir Contraseña
						</label>
					</div>

					<div class="input-field col s4">
						<select ng-model="userSelect.role" convert-to-number class="browser-default">
							@foreach($roles as $rol)
								<option value="{{$rol->id}}">{{$rol->name}}</option>
							@endforeach
						</select>
						<label class="active labelmov"> <i class="zmdi zmdi-group-work"></i> Roles</label>
					</div>		
				</div>	
			</form>
			<button id="btnsac" class="waves-effect waves-teal cyan btn z-depth-1 tooltipped" data-tooltip="Guardar cambios" ng-click="edit()">Guardar &nbsp; 
				<i class="zmdi zmdi-save"></i>
			</button>
		</div>
	</div>
</div>