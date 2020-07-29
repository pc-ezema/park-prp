<?php 
require_once("include/initialize.php");
	 // if (!isset($_SESSION['EMPLOYEEID'])){
  //     redirect(web_root."login.php");
  //    } 

$content='home.php';
$view = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
switch ($view) {
	case '1' :
        $title="Home";	
		$content='home.php';		
		break;
	case '2' :
        $title="Mission & Vision";	
		$content='mission.php';		
		break;
	case '3' :
        $title="About Us";	
		$content='about.php';		
		break;
	case '4' :
        $title="Contact Us";	
		$content='contact.php';		
		break;
	case 'profile' :
        $title="Profile";	
		$content='employee';		
		break;				
	default :
	    $title="Home";	
		$content ='home.php';		
}
require_once("theme/templates.php");
?>