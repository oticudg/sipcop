<!-- barra de navegacion top -->
<nav class="blue-grey darken-4">
	<div class="nav-wrapper">
		<!-- Navbar Cuerpo -->
		<ul class="right">
			<li class="nav2">
				<ul>
					<li>
						<a href="#">Usuario</a>
						<ul>
							<li>	
								<a href="#" class="center"><i class="zmdi zmdi-settings center light-blue-text"></i>Cambiar Contraseña</a>
							</li>
							<li>
								<a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="center"><i class="zmdi zmdi-power center light-blue-text"></i>Cerrar Sesion</a>
							</li>
						</ul>
					</li>
				</ul>
			</li>
		</ul>
		<ul class="left">
			<li>
				<a href="#" class="tooltipped waves-effect waves-light" data-position="bottom" data-delay="50" data-tooltip="Desplegar Menu" onclick="openNav(this)" data-activates="slide-out">
					<i class="zmdi zmdi-menu"></i>
				</a>
			</li>
		</ul>
	</div>
	
	<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
	 {{ csrf_field() }}
	 </form>
</nav>
