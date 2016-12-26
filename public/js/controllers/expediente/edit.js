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
}]);