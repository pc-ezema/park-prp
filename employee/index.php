<?php
require_once("../include/initialize.php");
if(!isset($_SESSION['EMPLOYEEID'])){
	redirect(web_root."index.php");
}

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
 $title="Profile"; 
 $header=$view; 
switch ($view) {
	case 'list' :
		$content    = 'list.php';		
		break;

	case 'addschool' :
		$content    = 'addeduc.php';		
		break;

	case 'edit' :
		$content    = 'edit.php';		
		break;
    case 'view' :
		$content    = 'view.php';		
		break;

	default :
		$content    = 'view.php';		
}
require_once ("../theme/templates.php");
?>
  
