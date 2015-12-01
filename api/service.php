<?php

require 'Slim/Slim.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();


$app->post('/login',    'loginOpn');

$app->post('/signUp',    'signUpOpn');

function signUpOpn() {

	global $app;
	$req = $app->request(); // Getting parameter with names
	$paramName = $req->params('name'); // Getting parameter with names
	$paramPassword = $req->params('password'); // Getting parameter with names
	$paramEmail = $req->params('email'); // Getting parameter with names
	$paramMobile = $req->params('mobile'); // Getting parameter with names
	
	//$response = array();

	$sql = "INSERT INTO M_PROFILE_MASTER (`name`,`password`,`email`,`mobile_number`) VALUES (:name,:password,:email,:mobile_number)";
    try {
        $dbCon = getConnection();
        $stmt = $dbCon->prepare($sql);  
        $stmt->bindParam("name", $paramName);
        $stmt->bindParam("password", $paramPassword);
        $stmt->bindParam("email", $paramEmail);
        $stmt->bindParam("mobile_number", $paramMobile);
        $stmt->execute();
        $user->id = $dbCon->lastInsertId();
        $dbCon = null;
        echo json_encode($user); 
    } catch(PDOException $e) {
        echo '{"error":{"text":'. $e->getMessage() .'}}'; 
    }

	/* $response["error"] = false;
	$response["message"] = "logged in successfully with usernamne & password - ".$paramName." and ".$paramPassword;
	jsonResponse(200, $response); */

}



function loginOpn() {

	global $app;
	$req = $app->request(); // Getting parameter with names
	$paramName = $req->params('name'); // Getting parameter with names
	$paramPassword = $req->params('password'); // Getting parameter with names
	
   $sql_query = "select `name`,`email`,`mobile_number` FROM M_PROFILE_MASTER where name = '$paramName' and password = '$paramPassword' ORDER BY name";
    try {
        $dbCon = getConnection();
        $stmt   = $dbCon->query($sql_query);
        $users  = $stmt->fetchAll(PDO::FETCH_OBJ);
        $dbCon = null;
        echo '{"users": ' . json_encode($users) . '}';
    }
    catch(PDOException $e) {
        echo '{"error":{"text":'. $e->getMessage() .'}}';
    } 
	
}

$app->get('/getSomething1/:id', function($input) {
	 
	$response = array();
	 
	// add your business logic here

	$response["error"] = false;
	$response["message"] = "Response from Slim RESTful Webservice - ".$input;
	jsonResponse(200, $response);
});

$app->get('/getSomething/:input', function($input) {
           
           $response = array();
           
			// add your business logic here

           $response["error"] = false;
           $response["message"] = "Response from Slim RESTful Webservice - ".$input;
           jsonResponse(200, $response);
        });

$app->post('/postSomething', function() use ($app) {
 	        
		   $response = array();
           $input = $app->request->post('input'); // reading post params
           // add your business logic here
 
           $response["error"] = false;
           $response["message"] = "Response from Slim RESTful Webservice - ".$input;
           jsonResponse(200, $response);
        });


$app->put('/putSomething', function() use($app) {

            $response = array();
            $input = $app->request->put('input'); // reading post params

			// add your business logic here
            $result = true;
            if ($result) {
                // Updated successfully
                $response["error"] = false;
                $response["message"] = "Updated successfully";
            } else {
                // Failed to update
                $response["error"] = true;
                $response["message"] = "Failed to update. Please try again!";
            }
            jsonResponse(200, $response);
        });

$app->delete('/deleteSomething', function() use($app) {
           
            $response = array();
            $input = $app->request->put('input'); // reading post params
            
			// add your business logic here
            $result = true;
            if ($result) {
                //deleted successfully
                $response["error"] = false;
                $response["message"] = "Deleted succesfully";
            } else {
                //failed to delete
                $response["error"] = true;
                $response["message"] = "Failed to delete. Please try again!";
            }
            jsonResponse(200, $response);
        });
        

function jsonResponse($status_code, $response) {
    
    $app = \Slim\Slim::getInstance();
    $app->status($status_code);
	$app->contentType('application/json');

    echo json_encode($response);
}
        

function getConnection() {
	
		$db_username = "root";
		$db_password = "";
		$conn = new PDO('mysql:host=localhost;dbname=test', $db_username, $db_password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
	return $conn;
}
$app->run();																										

?>
