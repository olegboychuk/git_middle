
<?php
// session_start();
require_once dirname(__FILE__).'/../lib/DB.class.php';
require_once dirname(__FILE__).'/Login.class.php';

class User{
	private $_db;	
	public function  __construct(){
		$this->_db=DB::getInstance();
	}
	
	
	/**
	 * method createNewUser
	 * Create the new user
	 * @param ( array ) ( $details ) about this param  the array come from $_POST
	 * @return ( boolean ) ( $result )
	 */
	public function createNewUser( $details ){
		$result = $this->_db->query("INSERT INTO ".TABLE_USERS." ( user_email,user_password ) VALUES('".$details['user_email']."','".$details['user_password']."')");
		$id = $this->_db->insert_id;
		$result = $this->_db->query("INSERT INTO ".TABLE_USERS_INFO." ( user_id,user_firstname,user_lastname,user_created ) VALUES(  '$id','".$details['user_firstname']."','".$details['user_lastname']."',CURRENT_TIMESTAMP )");

		if ( $result ){
			$result=$this->getUserforSessionById( $id );//object get details of the user
		}

		return $result;	
	}
		
	private function getUserforSessionById( $userId ){	
		$result = $this->_db->query("SELECT * FROM ".TABLE_USERS." WHERE user_id='$userId'  ");
		$user_log = $result->fetch_assoc();

		return $user_log;
	}
	
	/**
	 * method getUserByID
	 * fetch user details from tables users and user_info 
	 * @param ( INT ) ( $userId )  ID of the user 
	 * @return ( OBJECT ) ( $success ) 
	 */
	public function getUserByID( $userId ){
		$result = $this->_db->query("SELECT * FROM ".TABLE_USERS_INFO." WHERE user_id='$userId' " );
		$user_info = $result->fetch_assoc();
 		$result = $this->_db->query("SELECT * FROM ".TABLE_USERS." WHERE user_id='$userId'  ");
 		$user_log = $result->fetch_assoc();
		
		return $user_info;
	}	
	
}
