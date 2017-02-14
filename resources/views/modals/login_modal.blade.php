{{-- Modal estructura --}} 
<div id="modal1" class="modal modal-fixed-footer">
	<div class="modal-content">
		<div class="row padx">
			<a href="#" class="modal-action modal-close"><i class="zmdi zmdi-close zmdi-hc-2x"></i></a>
		</div>
		<div class="container-login center-align">
			<div style="">
				<h1 class="light-blue-text"> 
					<i class="zmdi zmdi-account-circle animated animatedicon pulse"></i> 
				</h1>
				<h5 class="orange-text">Inicia sesión con tu cuenta</h5>   
			</div>
			<form action="{{ url('/login') }}" method="post">
				{{ csrf_field() }}
			<div class="row">
				<div class="input-field col s6 push-s3 {{ $errors->has('email') ? ' has-error' : '' }}">
					<input id="email" type="email" class="validate" autocomplete="off" name="email" value="{{ old('email') }}" required autofocus>
					<label for="email">
						<i class="zmdi zmdi-email"></i>&nbsp; Correo
					</label>
				</div>
			</div>	
			<div class="row">	
				<div class="input-field col s6 push-s3 {{ $errors->has('password') ? ' has-error' : '' }}">
					<input id="password" name="password" type="password" class="validate">
					<label for="password"><i class="zmdi zmdi-lock"></i>&nbsp; Contraseña</label>
				</div>
				@if ($errors->has('password'))
				<span class="help-block">
					<strong>{{ $errors->first('password') }}</strong>
				</span>
				@endif
			</div>
			<div class="row">
				@if ($errors->has('email'))
				<span class="help-block">
					<strong>{{ $errors->first('email') }}</strong>
				</span>
				@endif	
			</div>		
				<button class="waves-effect waves-teal cyan btn z-depth-1 tooltipped" data-tooltip="Presione para ingresar">Ingresar &nbsp; 
					<i class="zmdi zmdi-mail-send"></i>
				</button>
			</form>
		</div>
	</div>
</div>
