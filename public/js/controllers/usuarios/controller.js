'use strict';

angular.module('usuarios', [])
.controller('usersCtr', ['$scope', '$http', function($scope, $http){

	$scope.data = {};
	$scope.users = users;
	$scope.userSelect = false;

	$scope.save = function(){

		customSweetalertValidate(false, "Desea registrar usuario.", false,{
				"button":{
					"success":"Registrar",
					"cancel":"Cancelar"
				}
			},
		 	function(isConfirm){   

				if (isConfirm) {     
					
					$http.post('/register', $scope.data)
						.success(function(response){
							sweetAlert(response, "", 'success')
							location.reload();
						})	
						.error(function(response){
							var message = response.email || response.password || response.role;
							sweetAlert("Ocurrio un error", message, 'error');
						});	
				} 
				else {    
					swal.close();  
			    } 
			}
		);
	}

	$scope.edit = function(){

		customSweetalertValidate(false, "Desea modificar usuario.", false,{
				"button":{
					"success":"Modificar",
					"cancel":"Cancelar"
				}
			},
		 	function(isConfirm){   

				if (isConfirm) {     

					var data = {
						'_method':'PUT',
						'name':$scope.userSelect.name,
						'password':$scope.userSelect.password,
						'password_confirmation':$scope.userSelect.password_confirmation,
						'role':$scope.userSelect.role,
						'active':$scope.userSelect.active

					};
						
					$http.post('/users/' + $scope.userSelect.id, data)
						.success(function(response){
							sweetAlert(response, "", 'success')
							location.reload();
						})	
						.error(function(response){
							var message = response.email || response.password || response.role;
							sweetAlert("Ocurrio un error", message, 'error');
						});
			    } 
				else {    
					swal.close();  
			    } 
			}
		);

	}

	$scope.select = function(user){
		$scope.userSelect = user;
	}

	$scope.delete = function(user){

		customSweetalertValidate(false, "Desea eliminar usuario.", false,{
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

					$http.post('/users/' + $scope.userSelect.id, data)
						.success(function(response){
							sweetAlert(response, "", 'success')
							location.reload();
						})	
						.error(function(response){
							var message = response.email || response.password || response.role;
							sweetAlert("Ocurrio un error", message, 'error');
						});				    
				} 
				else {    
					swal.close();  
			    } 
			}
		);	
	}

}])

.controller('changePassCtr', ['$scope', '$http', function($scope, $http){

	$scope.data = {};

	$scope.save = function(){

		customSweetalertValidate(false, "Confirmar cambio de contraseña", false,{
				"button":{
					"success":"Cambiar",
					"cancel":"Cancelar"
				}
			},
		 	function(isConfirm){   

				if (isConfirm) {     

					$http.post('/changePassword', $scope.data)
						.success(function(response){
							sweetAlert(response, "", 'success')
							location.reload();
						})	
						.error(function(response){
							var message = response.email || response.password;
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