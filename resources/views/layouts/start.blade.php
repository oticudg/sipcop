

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<title>{{ config('app.name', 'SIPCOP') }}</title>


		<!-- Styles -->

		<link rel="stylesheet" href="/css/normalize.css">

		<link rel="stylesheet" href="/css/materialize.min.css">

		<link rel="stylesheet" href="/css/material-design-iconic-font.min.css">

		<link rel="stylesheet" href="/css/sweetalert.css">

		<link rel="stylesheet" href="/css/style.css">

		<link rel="stylesheet" href="/css/animate.css">

		<!-- Scripts -->

		<script>
			window.Laravel = <?php echo json_encode([
	'csrfToken' => csrf_token(),
]); ?>
		</script>
	</head>
	<body>


		@yield('content')
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
									<li><a href="#" class="center"><i class="zmdi zmdi-settings center light-blue-text"></i>Cambiar Contraseña</a></li>
									<li><a href="#" class="center"><i class="zmdi zmdi-power center light-blue-text"></i>Cerrar Sesion</a></li>

								</ul>
							</li>
						</ul>
					</li>


				</ul>

				<ul class="left">


					<li><a href="#" class="tooltipped waves-effect waves-light" data-position="bottom" data-delay="50" data-tooltip="Desplegar Menu" onclick="openNav(this)" data-activates="slide-out"><i class="zmdi zmdi-menu"></i></a></li>



				</ul>
			</div>
		</nav>

		<!--barra de navegacion lateral-->
		<div class="col s12 m4 l3"> 

			<div id="mySidenav" class="sidenav blue-grey darken-3">


				<div class=" s12 m4 l3">

					<img class="imgnav" src="images/img/sipcopdef.png" alt="">
				</div>


				<div class="NavLateral-Nav">

					<ul class="full-width">
						<div class="closebtn">
							<a href="javascript:void(0)" onclick="closeNav()">&times;</a>
						</div>
						<li class="limarg">

							<h5 class="center white-text">Menu</h5>

						</li>


						<li>
							<a href="#" class="waves-effect waves-light"><i class="zmdi zmdi-home zmdi-hc-fw"></i> Inicio</a>
						</li>
						<li class="NavLateralDivider"></li>
						<li>
							<a href="#" class="NavLateral-DropDown  waves-effect waves-light tooltipped" data-tooltip="Panel de Administracion" data-position="right"><i class="zmdi zmdi-settings zmdi-hc-fw"></i> <i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i> Administracion</a>
							<ul class="full-width">
								<li><a href="#" class="waves-effect waves-light tooltipped" data-tooltip="Asignar Roles" data-position="right"><i class="zmdi zmdi-male zmdi-hc-fw"></i> Roles</a></li>
								<li class="NavLateralDivider"></li>
								<li><a href="#" class="waves-effect waves-light tooltipped" data-tooltip="Asignar Permisos" data-position="right"><i class="zmdi zmdi-block zmdi-hc-fw"></i> Permisos</a></li>
								<li class="NavLateralDivider"></li>
								<li><a href="#" class="waves-effect waves-light tooltipped" data-tooltip="Administrar Usuarios" data-position="right"><i class="zmdi zmdi-accounts-alt zmdi-hc-fw"></i> Usuarios</a></li>
								<li class="NavLateralDivider"></li>
								<li><a href="#" class="waves-effect waves-light tooltipped" data-tooltip="Visualizar Auditoria" data-position="right"><i class="zmdi zmdi-search-in-file zmdi-hc-fw"></i> Auditoria</a></li>

							</ul>
						</li>

						<li class="NavLateralDivider"></li>

						<li>
							<a href="#" class="NavLateral-DropDown  waves-effect waves-light tooltipped" data-tooltip="Panel de Expedientes" data-position="right"><i class="zmdi zmdi-folder-person zmdi-hc-fw"></i> <i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i> Expedientes</a>
							<ul class="full-width">
								<li><a href="#" class="waves-effect waves-light tooltipped" data-tooltip="Administrar Expedientes" data-position="right"><i class="zmdi zmdi-format-list-bulleted zmdi-hc-fw"></i> Listar Expedientes</a></li>
								<li class="NavLateralDivider"></li>
								<li><a href="#" class="waves-effect waves-light tooltipped" data-tooltip="Involucrados Individualmente" data-position="right"><i class="zmdi zmdi-pin-account zmdi-hc-fw"></i> Historico de Involucrados</a></li>
							</ul>
						</li> 

						<li class="NavLateralDivider"></li>

						<li>
							<a href="#" class="waves-effect waves-light tooltipped" data-tooltip="Imprimir Reportes" data-position="right"><i class="zmdi zmdi-collection-pdf zmdi-hc-fw"></i> Reportes</a>
						</li>

						<li class="NavLateralDivider"></li>
					</ul>

				</div>  
			</div>
		</div>
		
		<!-- contenedor global-->
		<div id="main">	
			<div class="row">	
				<article class="col s12">
					<div class="full-width center-align" style="margin: 40px 0;">
						<div class="tile hoverable">
							<div class="tile-icon light-blue-text"><i class="zmdi zmdi-file-text animated animatedicon pulse"></i></div>
							<div class="tile-caption">
								<span class="center-align orange-text">77</span>
								<p class="center-align black-text">Expedientes</p>   
							</div>
							<a href="#" class="tile-link waves-effect cyan waves-light">Ver detalles &nbsp; <i class="zmdi zmdi-eye"></i></a>
						</div>
						<div class="tile hoverable">
							<div class="tile-icon light-blue-text"><i class="zmdi zmdi-accounts animated animatedicon pulse"></i></div>
							<div class="tile-caption">
								<span class="center-align orange-text">99</span>
								<p class="center-align black-text">Investigados</p>   
							</div>
							<a href="#" class="tile-link waves-effect cyan waves-light">Ver detalles &nbsp; <i class="zmdi zmdi-eye"></i></a>
						</div>
						<div class="tile hoverable">
							<div class="tile-icon light-blue-text"><i class="zmdi zmdi-shield-check animated animatedicon pulse"></i></div>
							<div class="tile-caption">
								<span class="center-align orange-text">17</span>
								<p class="center-align black-text">Movimientos Auditados</p>   
							</div>
							<a href="#" class="tile-link waves-effect cyan waves-light">Ver detalles &nbsp; <i class="zmdi zmdi-eye"></i></a>
						</div>				

					</div>  

				</article>

			</div>
		</div>
		

		<!-- Scripts -->
		<script src="/js/sweetalert.min.js"></script>

		<script src="/js/jquery-2.2.0.min.js"></script>

		<script src="/js/materialize.min.js"></script>

		<script>window.jQuery || document.write('<script src="js/jquery-2.2.0.min.js"><\/script>')</script>

		<script src="/js/main.js"></script>


	</body>
</html>
