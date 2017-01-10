'use strict';

angular.module('expediente', [])
.controller('registerCtr', [ '$scope', '$http', function($scope, $http){

	$scope.data = {};
	$scope.status = false;
	$scope.empleado = {};
	$scope.investigados = [];

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

		$scope.investigados.push({
			'cedula':$scope.empleado.cedula, 
			'nombre':$scope.empleado.nombres,
			'complicidad':$scope.empleado.complicidad,
			'resultado':$scope.empleado.resultado,
			'decisorio':$scope.empleado.decisorio,
			'fecha':$scope.empleado.fecha,
		});

		cleanSearch();
	}

	$scope.deleteInvestigado = function(index){
		console.log(index)
		$scope.investigados.splice(index,1);

	}

	$scope.guardar = function(){

		customSweetalertValidate(false, "Desea guardar el expediente", false,{
				"button":{
					"success":"Guardar",
					"cancel":"Cancelar"
				}
			},
		 	function(isConfirm){   
				if (isConfirm) {     
					var data = $scope.data;

					data.investigados = $scope.investigados;	

					$http.post('/expedientes', data)
						.success(function(response){
							sweetAlert("Expediente guardado con exito.", "", 'success')
						})
						.error(function(response){

							var message = response[0];
							sweetAlert("Ocurrio un error", message, 'error')
					});
				} 
				else {    
					swal.close();  
			    } 
			}
		);

	}

	var cleanSearch = function(){
		$scope.investigado = {};
		$scope.cedula = '';
		$scope.status = false;
	}

}]);