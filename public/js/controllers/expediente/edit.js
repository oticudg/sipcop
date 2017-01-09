'use strict';

angular.module('expediente')
.controller('editCtr', [ '$scope', '$http',function($scope, $http){

	$scope.state = false;

	var exp = angular.fromJson(expediente);
	$scope.investigados = exp.investigados;

	$scope.data = {
		'tipologia':exp.tipologia.id.toString(),
		'estatus':exp.estatu.id.toString(),	
		'resumen':exp.resumen,
		'fecha':exp.fecha_registro
	};

	$scope.editInvestidados = [];
	$scope.addInvestigados = [];
	$scope.status = false;
	$scope.empleado = {};

	$scope.empleadoSearch = function(){

		$http.post('/empleado/search', {cedula:$scope.cedula})
			.success(function(response){
				$scope.empleado = response;
				$scope.status = true
			})
			.error(function(response){
				swal('Error', response.cedula, 'error');
			});
	}

	$scope.agregar = function(){

		if(!$scope.empleado.complicidad){
			sweetAlert("Valor no seleccionado", "Seleccione complicidad", "error");
			return
		}
		else if(!$scope.empleado.resultado){
			sweetAlert("Valor no seleccionado", "Seleccione resultado", "error");
			return
		}
		else if(!$scope.empleado.decisorio){
			sweetAlert("Valor no seleccionado", "Seleccione decisorio", "error");
			return
		}

		$scope.addInvestigados.push({
			'cedula':$scope.empleado.cedula, 
			'nombre':$scope.empleado.nombres,
			'complicidad':$scope.empleado.complicidad,
			'resultado':$scope.empleado.resultado,
			'decisorio':$scope.empleado.decisorio,
			'fecha':$scope.empleado.fecha,
		});

		cleanSearch();
	}

	$scope.edit = function(){
		$scope.state = !$scope.state;
	}

	$scope.addEditInvestigado = function(investigado){


		customSweetalertValidate(false, "Desea añadir los cambios realizados a este investigado.", false,{
				"button":{
					"success":"Aceptar",
					"cancel":"Cancelar"
				}
			},
		 	function(isConfirm){   
				if (isConfirm) {     
					
					$scope.editInvestidados.push({
						'investigacion':investigado.id,
						'complicidad':investigado.complicidade.id,
						'decisorio':investigado.decisorio.id,
						'resultado':investigado.resultado.id,
						'fecha':investigado.fecha
					});

					sweetAlert("Cambios añadios.", "", 'success')
				} 
				else {    
					swal.close();  
			    } 
			}
		);
	}

	$scope.save = function(){

		customSweetalertValidate(false, "Desea aplicar los cambios", false,{
				"button":{
					"success":"Guardar",
					"cancel":"Cancelar"
				}
			},
		 	function(isConfirm){   
				if (isConfirm) {     
					
					var data = {
						'_method':'PUT',
						'tipologia':$scope.data.tipologia,
						'estatus':$scope.data.estatus,
						'fecha':$scope.data.fecha,
						'resumen':$scope.data.resumen,
						'edit_investigados':$scope.editInvestidados
					};

					$http.post('/expedientes/' + exp.id, data)
						.success(function(response){
							sweetAlert("Cambios aplicados con exito.", "", 'success')
							$scope.state = false;
						})	
						.error(function(response){
							var message = response.tipologia || response.estatus || response.investigados || response.fecha;
							sweetAlert("Ocurrio un error", message, 'error');
						});
				} 
				else {    
					swal.close();  
			    } 
			}
		);
	}

	$scope.delete = function(){

		customSweetalertValidate(false, "Desea eliminar el expediente", false,{
				"button":{
					"success":"Eliminar",
					"cancel":"Cancelar"
				}
			},
		 	function(isConfirm){   
				if (isConfirm) {     
					
					var data = {
						'_method':'DELETE'
					};

					$http.post('/expedientes/' + exp.id, data)
						.success(function(response){
							sweetAlert("Expediente eliminado", "", 'success')
							location.href="/expedientes";	
						})	
						.error(function(response){
							sweetAlert("Ocurrio un error", response, 'error');
						});
				} 
				else {    
					swal.close();  
			    } 
			}
		);
	}

	$scope.saveInvestigados = function(){

		customSweetalertValidate(false, "Desea guardar el expediente", false,{
				"button":{
					"success":"Guardar",
					"cancel":"Cancelar"
				}
			},
		 	function(isConfirm){   
				if (isConfirm) {     

					var data = {
						'_method':'PUT',
						'add_investigados':$scope.addInvestigados	
					};

					$http.post('/expedientes/' +  exp.id, data)
						.success(function(response){
							sweetAlert("Expediente guardado con exito.", "", 'success')
							location.reload();

						})
						.error(function(response){

							var message = response.tipologia || response.estatus || response.investigados;
							sweetAlert("Ocurrio un error", message, 'error')
					});
				} 
				else {    
					swal.close();  
			    } 
			}
		);
	}

	$scope.deleteInvestigado = function(index){
		console.log(index)
		$scope.addInvestigados.splice(index,1);
	}

	var cleanSearch = function(){
		$scope.addInvestigado = {};
		$scope.cedula = '';
		$scope.status = false;
	}

}]);