@extends ("layouts.app")	
@section ("content")
@include('modals.login_modal')
	<div class="section no-pad-bot" id="index-banner">
		<div class="container">
				<h3 class="header center orange-text">Bienvenido a SIPCOP</h3>
					<div class="row center">
						<h5 class="header orange-text col s12 light">Sistema de prevención y control de perdidas.</h5>
					</div>
					<br>
					<div class="row center">
						<a href="#modal1" type="submit" class="btn-large waves-effect waves-light cyan darken-1 modal-trigger 		tooltipped" data-activates="slide-out" data-tooltip="Introduzca sus datos">
							<span>Iniciar Sesión</span> 
							<span class="zmdi zmdi-assignment-account"></span>
						</a>
					</div>
				<br>
		</div>
	</div>
			<div class="carousel">
				<div class="container">
					<a class="carousel-item sombrita"><img src="/images/img/1.png"></a>
					<a class="carousel-item sombrita"><img src="/images/img/2.png"></a>
					<a class="carousel-item sombrita"><img src="/images/img/3.png"></a>
					<a class="carousel-item sombrita"><img src="/images/img/4.png"></a>
					<a class="carousel-item sombrita"><img src="/images/img/5.png"></a>
				</div>
			</div>
	<div class="container">
		<!--   Icon Section   -->
		<div class="row">
			<div class="col s12 m4">
				<div class="icon-block">
					<h2 class="center light-blue-text">
						<i class="zmdi zmdi-shield-security animated animatedicon pulse"></i>
					</h2>	
					<h5 class="center">PCP</h5>
					<div class="card blue-grey darken-1 z-depth-2">
						<div class="card-content white-text center-align">
							<p class="light">Proporciona las distintas metodologías y controles, para aplicar y desarrollar la Prevención y el Control de las Pérdidas y Riesgos laborales a nivel institucional, con el objetivo de Mejorar la rentabilidad de la institución.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="icon-block">
					<h2 class="center light-blue-text">
						<i class="zmdi zmdi-desktop-mac animated animatedicon pulse"></i>
					</h2>	
					<h5 class="center">OTIC</h5>
					<div class="card blue-grey darken-1 z-depth-2">
						<div class="card-content white-text center-align">
							<p class="light">Brindar un servicio oportuno y de calidad, a fin de garantizar la automatización los procesos administrativos y médico-asistenciales a través del desarrollo y mantenimiento de sistemas de información.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="icon-block">
					<h2 class="center light-blue-text">
						<i class="zmdi zmdi-view-web animated animatedicon pulse"></i>
					</h2>
					<h5 class="center">APLICACIÓN</h5>
					<div class="card blue-grey darken-1 z-depth-2">
						<div class="card-content white-text center-align">
							<p class="light">SIPCOP te permite gestionar los procesos correspondientes a los incidentes laborales, llevando un control mediante expedientes digitales de los casos e involucrados en diferentes sucesos institucionales.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
@endsection

