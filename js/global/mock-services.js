var mockModule =  angular.module('common-mocks',['ngMockE2E']);

mockModule.run(['$httpBackend',function($httpBackend){
	$httpBackend.whenPOST('http://localhost/CheeraAPI/signUp').respond(function(method, url, data) {
    var signUpResponse = {"profileId":"77","status":"00","message":"PROFILE_CREATED_SUCCESSFULLY"};
    return [200, signUpResponse];
  });



}]);
