{{-- Modal estructura --}} 
<div id="modal3" class="modal modal-fixed-footer modalback">
	<div class="modal-content">
		<div class="container-login center-align">
			<div style="">
				<h1 class="light-blue-text"> 
					<i class="zmdi zmdi-settings animated animatedicon pulse"></i> 
				</h1>
				<h5 class="orange-text">Cambio de Contraseña</h5>   
			</div>
			<form action="" method="post" style="margin-left:110px;">
			<div class="row">
				<div class="input-field col s5">
					<input id="email" type="email" class="validate" name="email" value="" required autofocus>
					<label for="email">
						<i class="zmdi zmdi-account"></i>&nbsp; Email
					</label>
				</div>
				@if ($errors->has('email'))
				<span class="help-block">
					<strong>{{ $errors->first('email') }}</strong>
				</span>
				@endif
				<div class="input-field col s5">
					<input id="password" name="password" type="password" class="validate">
					<label for="password"><i class="zmdi zmdi-lock"></i>&nbsp; Contraseña Actual</label>
				</div>
				<div class="input-field col s5">
					<input id="password2" name="password" type="password" class="validate">
					<label for="password2"><i class="zmdi zmdi-lock"></i>&nbsp; Nueva Contraseña</label>
				</div>
				<div class="input-field col s5">
					<input id="password3" name="password" type="password" class="validate">
					<label for="password3"><i class="zmdi zmdi-lock"></i>&nbsp; Confirme Contraseña</label>
				</div>
				@if ($errors->has('password'))
				<span class="help-block">
					<strong>{{ $errors->first('password') }}</strong>
				</span>
				@endif	
			</div>
			</form>
			<button id="btnsac" class="waves-effect waves-teal cyan btn z-depth-1 tooltipped" data-tooltip="Guardar Cambios">Guardar &nbsp; 
				<i class="zmdi zmdi-mail-send"></i>
			</button>
		</div>
	</div>
</div>