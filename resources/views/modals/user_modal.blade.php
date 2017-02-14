{{-- Modal estructura --}} 
<div id="modal3" class="modal modal-fixed-footer modalback" ng-controller="changePassCtr">
	<div class="modal-content">
		<div class="row padx">
			<a href="#" class="modal-action modal-close"><i class="zmdi zmdi-close zmdi-hc-2x"></i></a>
		</div>
		<div class="container-login center-align">
			<div style="">
				<h1 class="light-blue-text"> 
					<i class="zmdi zmdi-settings animated animatedicon pulse"></i> 
				</h1>
				<h5 class="orange-text">Cambio de contraseña</h5>   
			</div>
			<form ng-submit="save()">
			<div class="row">
				<div class="input-field col s5 push-s1">
					<input id="email" type="email" class="validate" ng-model="data.email" required autofocus>
					<label for="email">
						<i class="zmdi zmdi-email"></i>&nbsp; Correo
					</label>
				</div>
				<div class="input-field col s5 push-s1">
					<input id="password" ng-model="data.actual_password" type="password" class="validate">
					<label for="password"><i class="zmdi zmdi-key"></i>&nbsp; Contraseña actual</label>
				</div>
				<div class="input-field col s5 push-s1">
					<input id="password2" ng-model="data.password" type="password" class="validate">
					<label for="password2"><i class="zmdi zmdi-key"></i>&nbsp; Contraseña nueva</label>
				</div>
				<div class="input-field col s5 push-s1">
					<input id="password3" ng-model="data.password_confirmation" type="password" class="validate">
					<label for="password3"><i class="zmdi zmdi-key"></i>&nbsp; Confirme contraseña</label>
				</div>
			</div>

				<button id="btnsac" class="waves-effect waves-teal cyan btn z-depth-1 tooltipped" data-tooltip="Guardar cambios">Guardar &nbsp; 
					<i class="zmdi zmdi-save"></i>
				</button>
			</form>
		</div>
	</div>
</div>