<!--barra de navegacion lateral-->
	<div class="col s12 m4 l3"> 
		<div id="mySidenav" class="sidenav blue-grey darken-4">
				<div class=" s12 m4 l3">
					<img class="imgnav" src="/images/img/sipcopdef1.png" alt="">
				</div>
					<div class="NavLateral-Nav">
						<ul class="full-width">
									<div class="">
										<a class="closebtn" href="javascript:void(0)" onclick="closeNav()">&times;</a>
										<h6 class="center menumar white-text">Menú</h6>
									</div>
							<li class="NavLateralDivider"></li>
									<li>
										<a href="/dashboard" class="waves-effect waves-light tooltipped" data-tooltip="Ir a inicio" data-position="right"><i class="zmdi zmdi-home zmdi-hc-fw"></i> Inicio</a>
									</li>
									<li class="NavLateralDivider"></li>
						<li>
									<a href="#" class="NavLateral-DropDown  waves-effect waves-light tooltipped" data-tooltip="Panel de administración" data-position="right">
										<i class="zmdi zmdi-settings zmdi-hc-fw"></i> 
										<i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i> Administración
									</a>
								<ul class="full-width">
									<li class="NavLateralDivider"></li>
									@can(['user.register'])
										<li>
											<a href="/users" class="waves-effect waves-light tooltipped" data-tooltip="Administrar usuarios" data-position="right">
												<i class="zmdi zmdi-accounts-alt zmdi-hc-fw"></i> Usuarios
											</a>
										</li>
									@endcan
								<!--	<li class="NavLateralDivider"></li>-->
									<!--<li>
										<a href="#" class="waves-effect waves-light tooltipped" data-tooltip="Visualizar Auditoria" data-position="right">
											<i class="zmdi zmdi-search-in-file zmdi-hc-fw"></i> Auditoria
										</a>
									</li>-->
								</ul>
						</li>
							<li class="NavLateralDivider"></li>
							<li>
								<a href="#" class="NavLateral-DropDown  waves-effect waves-light tooltipped" data-tooltip="Panel de expedientes" data-position="right">
									<i class="zmdi zmdi-folder-person zmdi-hc-fw"></i> 
									<i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i> Expedientes
								</a>
								<ul class="full-width">
									<li class="NavLateralDivider"></li>
									@can(['expediente.register'])
										<li>
											<a href="/expedientes/create" class="waves-effect waves-light tooltipped" data-tooltip="Añadir expediente" data-position="right">
												<i class="zmdi zmdi-plus zmdi-hc-fw"></i> Crear expediente
											</a>
										</li>
									@endcan
									<li class="NavLateralDivider"></li>
									@can(['expediente.show'])
										<li>
											<a href="/expedientes" class="waves-effect waves-light tooltipped" data-tooltip="Ver expedientes" data-position="right">
												<i class="zmdi zmdi-format-list-bulleted zmdi-hc-fw"></i> Listar expedientes
											</a>
										</li>
									@endcan
								<!--	<li class="NavLateralDivider"></li>-->
								<!--<li>
										<a href="#" class="waves-effect waves-light tooltipped" data-tooltip="Involucrados Individualmente" data-position="right">
											<i class="zmdi zmdi-pin-account zmdi-hc-fw"></i> Historico de Involucrados
										</a>
									</li>-->
								</ul>
								</li>
								<li class="NavLateralDivider"></li>
						<!--<li>
								<a href="#" class="waves-effect waves-light tooltipped" data-tooltip="Imprimir Reportes" data-position="right">
									<i class="zmdi zmdi-collection-pdf zmdi-hc-fw"></i> Reportes
								</a>
							</li>
							<li class="NavLateralDivider"></li>-->
					</ul>
			</div>  
		</div>
	</div>
