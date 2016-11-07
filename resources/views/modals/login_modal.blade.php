{{-- Modal estructura --}} 
<div id="modal1" class="modal modal-fixed-footer modalback">
	<div class="modal-content">
		<div class="card-action">
			<a href="{{ url('/password/reset') }}">Olvido su contraseña?</a>
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
				<div class="input-field {{ $errors->has('email') ? ' has-error' : '' }}">
					<input id="email" type="email" class="form-control validate" name="email" value="{{ old('email') }}" required autofocus>
					<label for="email">
						<i class="zmdi zmdi-account"></i>&nbsp; Email
					</label>
				</div>
				@if ($errors->has('email'))
				<span class="help-block">
					<strong>{{ $errors->first('email') }}</strong>
				</span>
				@endif
				<div class="input-field {{ $errors->has('password') ? ' has-error' : '' }}">
					<input id="password" name="password" type="password" class="validate">
					<label for="password"><i class="zmdi zmdi-lock"></i>&nbsp; Contraseña</label>
				</div>
				@if ($errors->has('password'))
				<span class="help-block">
					<strong>{{ $errors->first('password') }}</strong>
				</span>
				@endif
				<button class="waves-effect waves-teal cyan btn z-depth-1 tooltipped" data-tooltip="Presione para ingresar">Ingresar &nbsp; 
					<i class="zmdi zmdi-mail-send"></i>
				</button>
			</form>
		</div>
	</div>
</div>
