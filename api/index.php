<?php
require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();

// Create new object of Slim
$app = new \Slim\Slim();

// Set the HTTP Header of the Content-Type (MIME Type) to be JSON
$app->contentType( 'application/json' );

//Create Authentication object
// require_once dirname(__FILE__).'/../core/Authentication.class.php';
// $auth = new Authentication();


function authentication($app){
	if ( !$_SESSION['login'] = true ){
		echo json_encode( array( "error"=>"no session" ) );
		$app->halt( 401,'error' );
	}	
}

// Create new object of User
require_once dirname(__FILE__).'/../core/User.class.php';
$user = new User();

// Create new object of Login
require_once dirname(__FILE__).'/../core/Login.class.php';
$login = new Login();


/**
* POST Route /user/ 
* Create the new user
* @param ($_POST) (name) about this param
* @return (string) (name)
*/	
$app->post( '/user/', function () use ( $user, $login, $app ){
// 	$details = $app->request->getBody();
	$details = $user->createNewUser( $_POST );
	if ( $details ){
// 		$check = json_encode( $login->createSession( $details ) );
// 		print_r($check);
		echo json_encode( $login->createSession( $details ) );		
	}else{
		echo 0;
	}	 
});

/**
 * POST Route /login/
 * check if user have account
 * @param ($_POST) (name) about this param
 * @return (string) (name)
 */
$app->post( '/login/', function () use ( $login,$app ){

 	var_dump($_SESSION);
	if ($_SESSION){
		$login->logOut();
 		var_dump($_SESSION);
	}
//   	$check =	 $login->matchUser( $_POST ) ;
// //   	var_dump($_SESSION);
// 	if ($check){
// 		var_dump($_SESSION);
// 		echo 1;
// 	}else{
// 		echo 0;
// 	}
	$user_email = $app->request->post('user_email');
	$user_password = $app->request->post('user_password');
	echo $login->matchUser( $user_email, $user_password );
	
});



// $app->post( '/users/', function (){
	
// });

$app->run();