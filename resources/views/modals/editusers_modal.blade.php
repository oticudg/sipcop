{{-- Modal estructura --}} 
<div id="modal6" class="modal modal-fixed-footer modalback" ng-controller="changePassCtr">
	<div class="modal-content">
		<div class="row padx">
			<a href="#" class="modal-action modal-close"><i class="zmdi zmdi-close zmdi-hc-2x"></i></a>
		</div>
		<div class="container-login center-align">
			<div style="">
				<h1 class="light-blue-text"> 
					<i class="zmdi zmdi-edit animated animatedicon pulse"></i> 
				</h1>
				<h5 class="orange-text">Editar Usuario</h5>   
			</div>
			<form action="" method="post" style="margin-left:110px;">
			
				<div class="switch">
					<label>
						Off
						<input type="checkbox">
						<span class="lever"></span>
						On
					</label>
				</div>
				<div class="row">

					<div class="input-field col s4">
						<input id="email1" type="email" class="validate" name="email" required autofocus>
						<label for="email1">
							<i class="zmdi zmdi-email"></i>&nbsp; Email
						</label>
					</div>

					<div class="input-field col s4">
						<input id="usern" type="text" class="validate" name="email" required>
						<label for="usern">
							<i class="zmdi zmdi-account"></i> Usuario
						</label>
					</div>



					<div class="input-field col s4">
						<input id="pass1" type="password" class="validate" name="email" required>
						<label for="pass1">
							<i class="zmdi zmdi-key"></i> Contraseña
						</label>
					</div>

				</div>

				<div class="row">
					<div class="input-field col s4">
						<input id="pass2" type="password" class="validate" name="email" required>
						<label for="pass2">
							<i class="zmdi zmdi-key"></i> Repetir Contraseña
						</label>
					</div>

					<div class="input-field col s4">
						<select>
							<option value="" disabled selected>Seleccione un Rol</option>
							<option value="1">rol 1</option>
							<option value="2">rol 2</option>
							<option value="3">rol 3</option>
						</select>
						<label> <i class="zmdi zmdi-group-work"></i> Roles</label>
					</div>		
				</div>	
			</form>
			<button id="btnsac" class="waves-effect waves-teal cyan btn z-depth-1 tooltipped" data-tooltip="Guardar Cambios">Guardar &nbsp; 
				<i class="zmdi zmdi-mail-send"></i>
			</button>
		</div>
	</div>
</div>