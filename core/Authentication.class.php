<?php
session_start();
require_once dirname(__FILE__).'/../lib/DB.class.php';

class Authentication{
	public function isLogedIn(){
		 if ($_SESSION == ''){
		 	return false;
		 }else {
 //		 	var_dump($_SESSION);
		 	return $_SESSION[ user_id ];		 	
		 }		 				
	}
}

// $a=new Authentication();
// $a->checkSession();