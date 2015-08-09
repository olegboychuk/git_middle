<?php
session_start();
require_once dirname(__FILE__).'/../lib/DB.class.php';

class Login{
 	
 	private $_db;	
 	public function  __construct(){
 		$this->_db=DB::getInstance();
 	}

 	
 	/**
 	 * METHOD createSession
 	 * create $_SESSION 
 	 * @param ( object ) ( $result ) about this param 
 	 * @return ( // ) ( $_SESSION )
 	 */
 	public function createSession( $result ){			
 		foreach ( $result as $key=>$value ){
 			    $_SESSION[ $key ]=$value;			    
 		}
 		$_SESSION[ "login" ]=true;
 		return $_SESSION;
 	}

 	
 	/**
 	 * METHOD MATCH USER
 	 * Check if user attend in DB and call to function createSession()
 	 * @param ( string ) ( $email,$password ) about this param  the array come from $_POST
 	 * @return ( array ) ( $_SESSION )
 	 */	
 	public function matchUser( $user_email, $user_password ){
 		$result = $this->_db->query("SELECT user_id, user_email,user_password FROM ".TABLE_USERS." WHERE user_email='$user_email' AND user_password='$user_password'" );
//  		$result = $this->_db->query("SELECT user_id, user_email,user_password FROM ".TABLE_USERS." WHERE user_email='".$details['user_email']."' AND user_password='".$details['user_password']."' " );
  		print_r ($result);
  		if ( $result -> num_rows > 0 ){
  			$row = $result->fetch_assoc();
  	 	    $log=$this->createSession( $row );
  	 	    print_r($log);
  	 	    return $log;
 	    }
 	    return false;
 	}
 		
 	
 	/**
 	 *  method delete $_SESSION
 	 *￼
 	 * delete $_SESSION
 	 *
 	 * @param (  ) (  ) about this param  
 	 * @return (  ) ( $_SESSION )
 	 */
 	public function logOut(){
 		return session_destroy();
 	}
	
 }
 
