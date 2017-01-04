'use strict';

angular.module('usuarios', [])
.controller('usersCtr', ['$scope', '$http', function($scope, $http){

	$scope.data = {};

	$scope.save = function(){

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

}]);