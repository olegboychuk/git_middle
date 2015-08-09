<?php
session_start();
require_once dirname(__FILE__).'/../lib/DB.class.php';

class Validation{
	private $_db;
	public function  __construct(){
		$this->_db=DB::getInstance();
	}
	
    public function checkSession(){
    	
    }
	
}