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

	$('.tooltipped').tooltip({delay: 50});
	$('.ShowHideMenu').on('click', function(){
		var MobileMenu=$('.NavLateral');
		if(MobileMenu.css('opacity')==="0"){
			MobileMenu.addClass('Show-menu');   
		}else{
			MobileMenu.removeClass('Show-menu'); 
		}   
	}); 
	$('.btn-ExitSystem').on('click', function(e){
		e.preventDefault();
		swal({ 
			title: "Desea salir de la Aplicacion?",   
			text: "La sesion sera cerrada",   
			type: "warning",   
			showCancelButton: true,   
			confirmButtonColor: "#DD6B55",   
			confirmButtonText: "Si",
			animation: "slide-from-top",   
			closeOnConfirm: false,
			cancelButtonText: "Cancelar"
		}, function(){   
			window.location='index.html'; 
		});
	});     
});


/* sweet alert script */
function sweetalertEvent(){

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

/* funciones de abrir y cerrar sidenav */
function openNav(x) {
	x.classList.toggle("change");
	document.getElementById("mySidenav").style.width = "250px";

	document.getElementById("main").style.marginLeft = "250px";
	document.getElementById("main").style.zIndex = "-1";
	document.body.style.backgroundColor = "rgba(0,0,0,0.4)";



}

function closeNav() {
	document.getElementById("mySidenav").style.width = "0";
	document.getElementById("main").style.marginLeft = "0";
	document.body.style.backgroundColor = "aliceblue";
	document.getElementById("main").style.zIndex = "0";
}
$(document).ready(function(){
	// the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
	$('.modal-trigger').leanModal();

});

$(document).ready(function() {

	$('select').material_select();
});










