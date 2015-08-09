 <?php 
 require_once dirname( __FILE__ ) . "/../core/Authentication.class.php";
 require_once dirname( __FILE__ ) . "/../core/Login.class.php";

//object Authentication check if isset $_SESSION
$a=new Authentication();
$userId = $a->isLogedIn();

//object Login destroy $_SESSION
$by= new Login();
$by->logOut();

if( !$userId ){
	//redirect to login
	header('location:indexx.php');
}
?>