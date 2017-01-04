{{-- Modal estructura --}} 
<div id="modal5" class="modal modal-fixed-footer modalback">
	<div class="modal-content">
		<div class="row padx">
			<a href="#" class="modal-action modal-close"><i class="zmdi zmdi-close zmdi-hc-2x"></i></a>
		</div>
		<div class="container-login center-align">
			<div style="">
				<h1 class="light-blue-text"> 
					<i class="zmdi zmdi-plus animated animatedicon pulse"></i> 
				</h1>
				<h5 class="orange-text">Registrar Usuario</h5>   
			</div>
			<form ng-submit="save()" style="margin-left:110px;">
				<div class="row">
					
					<div class="input-field col s4">
						<input id="email1" type="email" class="validate" ng-model="data.email" required autofocus>
						<label for="email1">
							<i class="zmdi zmdi-email"></i>&nbsp; Email
						</label>
					</div>
					
					<div class="input-field col s4">
						<input id="usern" type="text" class="validate" ng-model="data.name" required>
						<label for="usern">
							<i class="zmdi zmdi-account"></i> Nombre
						</label>
					</div>
					
					<div class="input-field col s4">
					 	<input id="pass1" type="password" class="validate" ng-model="data.password" required>
						<label for="pass1">
							<i class="zmdi zmdi-key"></i> Contraseña
						</label>
					</div>
			
				</div>
				
				<div class="row">
					<div class="input-field col s4">
						<input id="pass2" type="password" class="validate" ng-model="data.password_confirmation" name="password_confirmation" required>
						<label for="pass2">
							<i class="zmdi zmdi-key"></i> Repetir Contraseña
						</label>
					</div>
					
					<div class="input-field col s4">
						<select ng-model="data.role">
							<option value="" disabled selected>Seleccione un Rol</option>
							<option value="1">Rol 1</option>
							<option value="2">Rol 2</option>
							<option value="3">Rol 3</option>
						</select>
						<label> <i class="zmdi zmdi-group-work"></i> Roles</label>
					</div>		
				</div>	

				<button id="btnsac" class="waves-effect waves-teal cyan btn z-depth-1 tooltipped" data-tooltip="Guardar Cambios">Guardar &nbsp; 
				<i class="zmdi zmdi-mail-send"></i>
				</button>
			
			</form>
	
		</div>
	</div>
</div>