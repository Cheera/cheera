var signUpModuleApp = angular.module('signUpModuleApp', ['ngRoute']);
signUpModuleApp.controller('signUpController',['$scope',function ($scope) {
	$scope.signUpObj={
		abc:"sdsdaasd",
		signUpSubmit : function(){
			location.href = 'dashboard';
		}
	}
}]);