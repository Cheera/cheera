var signUpModuleApp = angular.module('signUpModuleApp', []);
signUpModuleApp.controller('signUpController',['$scope',function ($scope) {
	$scope.signUpObj={
		onLoad : function(){
			
		},
		signUpSubmit : function(){
			location.href = '#/signUpDetails';
		}
	}
	//$scope.signUpObj.onLoad();
}]);