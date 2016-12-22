/* funcion de las caret o flechitas en la sidenav*/
$(document).ready(function(){
	$('.NavLateral-DropDown').on('click', function(e){
		e.preventDefault();
		var DropMenu=$(this).next('ul');
		var CaretDown=$(this).children('i.NavLateral-CaretDown');
		DropMenu.slideToggle('fast');
		if(CaretDown.hasClass('NavLateral-CaretDownRotate')){
			CaretDown.removeClass('NavLateral-CaretDownRotate');    
		}else{
			CaretDown.addClass('NavLateral-CaretDownRotate');    
		}
	});   
});
/* sweet alert script */
/*alerta de salir del sistema*/
function sweetalertEventLogOut(){
	swal({   
		title: "Esta seguro?",   
		text: "Usted esta a punto de salir del sistema!",   
		type: "warning",  
		showCancelButton: true,   
		confirmButtonColor: "#DD6B55",   
		confirmButtonText: "Si, salir!",   
		cancelButtonText: "No, cancelar!",   
		closeOnConfirm: false,   
		closeOnCancel: false }, 
		 function(isConfirm){   
		if (isConfirm) {     
			swal("Eliminado!", "Usted decidio salir.", "success");   } 
		else {    
			swal("Cancelado", "La accion ha sido cancelada", "error");   } });
}
/*alerta de crear un expediente*/
function sweetalertEventCreateFile(){
	swal({   
		title: "Esta seguro?",   
		text: "Usted esta a punto de crear un expediente!",   
		type: "warning",  
		showCancelButton: true,   
		confirmButtonColor: "#DD6B55",   
		confirmButtonText: "Si, crearlo!",   
		cancelButtonText: "No, cancelar!",   
		closeOnConfirm: false,   
		closeOnCancel: false }, 
		 function(isConfirm){   
		if (isConfirm) {     
			swal("Eliminado!", "El usuario ha sido creado.", "success");   } 
		else {    
			swal("Cancelado", "La accion ha sido cancelada", "error");   } });
}
/*alerta de crear un usuario*/
function sweetalertEventCreateUser(){
	swal({   
		title: "Esta seguro?",   
		text: "Usted esta a punto de Crear un usuario!",   
		type: "warning",  
		showCancelButton: true,   
		confirmButtonColor: "#DD6B55",   
		confirmButtonText: "Si, crearlo!",   
		cancelButtonText: "No, cancelar!",   
		closeOnConfirm: false,   
		closeOnCancel: false }, 
		 function(isConfirm){   
		if (isConfirm) {     
			swal("Eliminado!", "El usuario ha sido creado.", "success");   } 
		else {    
			swal("Cancelado", "La accion ha sido cancelada", "error");   } });
}
/*guardar cambios en modificacion de usuario propio barra de navegacion top*/
function sweetalertEventSaveUserChanges(){
	swal({   
		title: "Esta seguro?",   
		text: "Usted esta seguro de guardar cambios?!",   
		type: "warning",  
		showCancelButton: true,   
		confirmButtonColor: "#DD6B55",   
		confirmButtonText: "Si, guardar!",   
		cancelButtonText: "No, cancelar!",   
		closeOnConfirm: false,   
		closeOnCancel: false }, 
		 function(isConfirm){   
		if (isConfirm) {     
			swal("Eliminado!", "Sus cambios fueron guardados.", "success");   } 
		else {    
			swal("Cancelado", "La accion ha sido cancelada", "error");   } });
}
/*alert de eliminar usuario*/
function sweetalertEventUserDel(){
	swal({   
		title: "Esta seguro?",   
		text: "Usted esta a punto de eliminar un usuario!",   
		type: "warning",  
		showCancelButton: true,   
		confirmButtonColor: "#DD6B55",   
		confirmButtonText: "Si, eliminarlo!",   
		cancelButtonText: "No, cancelar!",   
		closeOnConfirm: false,   
		closeOnCancel: false }, 
		 function(isConfirm){   
		if (isConfirm) {     
			swal("Eliminado!", "El usuario ha sido eliminado.", "success");   } 
		else {    
			swal("Cancelado", "La accion ha sido cancelada", "error");   } });
}
/*alert de bloquear usuario*/
function sweetalertEventUserBlock(){
	swal({   
		title: "Esta seguro?",   
		text: "Usted esta a punto de bloquear un usuario!",   
		type: "warning",  
		showCancelButton: true,   
		confirmButtonColor: "#DD6B55",   
		confirmButtonText: "Si, bloquearlo!",   
		cancelButtonText: "No, cancelar!",   
		closeOnConfirm: false,   
		closeOnCancel: false }, 
		 function(isConfirm){   
		if (isConfirm) {     
			swal("Eliminado!", "El usuario ha sido bloqueado.", "success");   } 
		else {    
			swal("Cancelado", "La accion ha sido cancelada", "error");   } });
}

/*alert de bloquear usuario*/
function customSweetalertValidate(title, text, type, config, callback){
	swal(
		{   
			title: title || "Esta seguro?",   
			text: text || "Usted esta a punto de bloquear un usuario!",   
			type: type || "warning",  
			showCancelButton: true,   
			confirmButtonColor: "#00ACC1",   
			confirmButtonText: config.button.success || false,   
			cancelButtonText: config.button.cancel || false,   
			closeOnConfirm: false,   
			closeOnCancel: false 
		}, 
		callback	
	);
}

/* funciones de abrir y cerrar sidenav */
function openNav(x) {
	x.classList.toggle("change");
	document.getElementById("mySidenav").style.width = "200px";
	document.getElementById("main").style.marginLeft = "200px";
	document.getElementById("main").style.zIndex = "-1";
	document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}
function closeNav() {
	document.getElementById("mySidenav").style.width = "0";
	document.getElementById("main").style.marginLeft = "0";
	document.body.style.backgroundColor = "white";
	document.getElementById("main").style.zIndex = "0";
}
/* funcion abre modal */
$(document).ready(function(){
	// the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
	$('.modal-trigger').leanModal();
	
});
/*funcion para desplegar un select en materialize*/
$(document).ready(function() {
	$('select').material_select();

});

$('.datepicker').pickadate({
	selectMonths: true,
	selectYears: 15, 
	labelMonthNext: 'Proximo mes',
	labelMonthPrev: 'Anterior mes',
	labelMonthSelect: 'Elija un mes',
	labelYearSelect: 'Elija un año',
	monthsFull: [ 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre' ],
	monthsShort: [ 'Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic' ],
	weekdaysFull: [ 'Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado' ],
	weekdaysShort: [ 'Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab' ],
	weekdaysLetter: [ 'D', 'L', 'M', 'M', 'J', 'V', 'S' ],
	today: 'Hoy',
	clear: 'Limpiar',
	close: 'Cerrar',
	format: 'dd-mm-yyyy'
});

var app = angular.module('sipcop', ['expediente', 'angularUtils.directives.dirPagination']);









