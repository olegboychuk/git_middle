<?php
 require_once  dirname( __FILE__ ).'/../config/config.php';
  
 class DB{
     private static $instance=NULL;
 	
     public function __construct(){
     }
     
     public static function getInstance(){
        if (!self::$instance){
             self::$instance = new mysqli( DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE_NAME );
        }	
        return self::$instance;
     }
 }
//  $a=new DB();
//  $a=DB::getInstance();
//  var_dump($a);