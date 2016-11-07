@extends('layouts.app')
@include('navs.side')
@section('content')
<div class="container">
 <ul id="myUL" class="collapsible popout" data-collapsible="accordion">
		<div class="container">
			<h5 class="header center orange-text">Expedientes Registrados</h5>
			<div class="btnplus">
				<a class="btn-floating btn-small waves-effect waves-light teal modal-trigger" href="#modal2">
					<i class="material-icons">add</i>
				</a>
			</div>
			<div class="input-field col s3 wis2">
				<input type="text" name="search" placeholder="Filtrar Busqueda">
			</div>
		</div>
	 <li class="white">
				<div class="collapsible-header">
					<i class="zmdi zmdi-folder-person zmdi-hc-fw"></i> 
						<span>Expediente #4555</span> 
							<span class="spanmar">status</span>
				</div> 
	  	<div class="collapsible-body">  
				<div class="divchip">
s					<h6 class="orange-text">Tipologia</h6>
						<div class="black-text center">
							Delictivo
						</div>
				</div>
				<div class="divchip">
					<h6 class="orange-text">Fecha de Creacion</h6>
						<div class="black-text center">
							13/12/2016
						</div>
				</div>
			<div class="divchip">
					<h6 class="orange-text">Fecha de cierre</h6>
						<div class=" black-text center">
							31/12/2016
						</div>
			</div>
			<div class="divchip">
					<h6 class="orange-text">Involucrados</h6>
						<div class="black-text center">
							10
						</div>
			</div>
			<div class="modal-footer marb">
				<a class="waves-effect waves-light default btn ">Ver</a>
			</div>
		</div>
	</li>
		<li class="white">
			<div class="collapsible-header">
				<i class="zmdi zmdi-folder-person zmdi-hc-fw"></i> Expediente #5445
			</div>
			<div class="collapsible-body">
				<p>Lorem ipsum dolor sit amet.</p>
			</div>
		</li>
		<li class="white">
			<div class="collapsible-header">
				<i class="zmdi zmdi-folder-person zmdi-hc-fw"></i> Expediente #6879
			</div>
			<div class="collapsible-body">
				<p>Lorem ipsum dolor sit amet.</p>
			</div>
		</li>
		<li class="white">
			<div class="collapsible-header">
				<i class="zmdi zmdi-folder-person zmdi-hc-fw"></i> Expediente #7845
			</div>
			<div class="collapsible-body">
				<p>Lorem ipsum dolor sit amet.</p>
			</div>
		</li>
		<li class="white">
			<div class="collapsible-header">
				<i class="zmdi zmdi-folder-person zmdi-hc-fw"></i> Expediente #2536
			</div>
			<div class="collapsible-body">
				<p>Lorem ipsum dolor sit amet.</p>
			</div>
		</li>
		<li class="white">
			<div class="collapsible-header">
				<i class="zmdi zmdi-folder-person zmdi-hc-fw"></i> Expediente #4712
			</div>
			<div class="collapsible-body">
				<p>Lorem ipsum dolor sit amet.</p>
			</div>
		</li>
		<li class="white">
			<div class="collapsible-header">
				<i class="zmdi zmdi-folder-person zmdi-hc-fw"></i> Expediente #1125
			</div>
			<div class="collapsible-body">
				<p>Lorem ipsum dolor sit amet.</p>
			</div>
		</li>
		<li class="white">
			<div class="collapsible-header">
				<i class="zmdi zmdi-folder-person zmdi-hc-fw"></i> Expediente #9966
			</div>
			<div class="collapsible-body">
				<p>Lorem ipsum dolor sit amet.</p>
			</div>
		</li>
		<li class="white">
			<div class="collapsible-header">
				<i class="zmdi zmdi-folder-person zmdi-hc-fw"></i> Expediente #3325
			</div>
			<div class="collapsible-body">
				<p>Lorem ipsum dolor sit amet.</p>
			</div>
		</li>
		<li class="white">
			<div class="collapsible-header">
				<i class="zmdi zmdi-folder-person zmdi-hc-fw"></i> Expediente #8816
			</div>
			<div class="collapsible-body">
				<p>Lorem ipsum dolor sit amet.</p>
			</div>
		</li>
 </ul>
</div>
@endsection