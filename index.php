<!DOCTYPE html>
<html lang="en" ng-app="myApp">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>AngularJS Authentication App</title>
    <!-- Bootstrap -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/toaster.css" rel="stylesheet">
    <link href="css/cheera.css" rel="stylesheet">
    <style>
      a {
        color: orange;
      }
    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]><link href= "css/bootstrap-theme.css"rel= "stylesheet" >
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body ng-cloak="">
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="row">
          <div class="navbar-header col-md-6">
            <button type="button" class="navbar-toggle" toggle="collapse" target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" rel="home" title="AngularJS Authentication App">AngularJS Authentication App</a>
          </div>
          <div class="navbar-header col-md-6">
            <div ng-include="'partials/login.html'"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div data-ng-view="" id="ng-view" class="slide-animation"></div>
    </div>
    <footer class="footer">
      <div class="container">
        <p class="text-muted">
        <div ng-include="'partials/footer/about.html'"></div>
        </p>
      </div>
    </footer>
  </body>
  <toaster-container toaster-options="{'time-out': 3000}"></toaster-container>
  <!-- Libs -->
  <script src="assets/js/angular-mocks.js"></script>
  <script src="assets/js/angular.min.js"></script>
  <script src="assets/js/angular-route.min.js"></script>
  <script src="assets/js/angular-animate.min.js" ></script>
  <script src="assets/bootstrap/js/ui-bootstrap-tpls-0.12.0.js" ></script>
  <script src="js/toaster.js"></script>
  <script src="js/controllers/app.js"></script>
  <script src="js/controllers/data.js"></script>
  <script src="js/controllers/directives.js"></script>
  <script src="js/controllers/authCtrl.js"></script>
  <script src="js/controllers/signUp.js"></script>
  <script src="js/controllers/tabs.js"></script>
  <script src="js/global/mock-services.js"></script>
</html>

