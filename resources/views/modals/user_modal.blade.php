<!-- Modales que se abren, las dejo de ultimo y fuera del main por que pueden originar problemas con el script que hace zindex en la sidenav -->
<div id="modal1" class="modal">
	<div class="modal-content">
		<h5 class="center">Modificar Usuario</h5>
		<div class="row">
			<form class="col s12">
				<div class="row">
					<div class="input-field col s6">
						<input placeholder="Usuario" value="Alvin" id="first_name" type="text" class="validate">
						<label for="first_name">Usuario</label>
					</div>
					<div class="input-field col s6">
						<input type="password" value="asdasd"placeholder="Usuario" value="Alvin" id="first_name" type="text" class="validate">
						<label for="first_name">Contraseña</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s6">
						<input type="password" value="asdasd"placeholder="Usuario" value="Alvin" id="first_name" type="text" class="validate">
						<label for="first_name">Repetir Contraseña</label>
					</div>
					<div class="input-field col s6">
						<select>
							<option value="" disabled selected>1er Rol</option>
							<option value="1">1er Rol</option>
							<option value="2">2do Rol</option>
							<option value="3">3er Rol</option>
						</select>
						<label>Seleccione un Rol</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s6">
						<select>
							<option value="" disabled selected>1er Permiso</option>
							<option value="1">1er Permiso</option>
							<option value="2">2do Permiso</option>
							<option value="3">3er Permiso</option>
						</select>
						<label>Seleccione los Permisos</label>
					</div>
					<div class="input-field col s6">
						<input id="email" type="email" class="validate">
						<label for="email">Email</label>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="modal-footer">
		<a class="waves-effect waves-light btn-flat"><i class="zmdi zmdi-mail-send right"></i> Guardar</a>
		<a href="#!" class="modal-action modal-close btn-flat waves-effect waves-green"><i class="zmdi zmdi-close right"></i> Cerrar</a>
	</div>