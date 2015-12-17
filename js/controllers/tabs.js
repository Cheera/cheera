var tabsApp=angular.module('tabsApp', ['ui.bootstrap']);

tabsApp.controller('homeTabsCtrl',['$scope',function ($scope) {

$scope.tabs = [{
		'heading': 'Personal Details',
		'active': true,
		'disabled':false,
		'template':'partials/signup/personal_details.html',
		'id' : 'personalDetails'
	},
	{
		'heading': 'Career',
		'active': false,
		'disabled':false,
		'template':'partials/signup/career.html',
		'id' : 'career'
	},
	{
		'heading': 'Family Information',
		'active': false,
		'disabled':false,
		'template':'partials/signup/family_info.html',
		'id' : 'family_info'
	},
	{
		'heading': 'Religious Background',
		'active': false,
		'disabled':false,
		'template':'partials/signup/religious_background.html',
		'id' : 'religious_background'
	},
	{
		'heading': 'Address',
		'active': false,
		'disabled':false,
		'template':'partials/signup/address.html',
		'id' : 'address'
	},
	{
		'heading': 'Partner Preferences',
		'active': false,
		'disabled':false,
		'template':'partials/signup/personal_preference.html',
		'id' : 'partner_pref'
	}];
}]);