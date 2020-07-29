<?php
require_once("../../include/initialize.php");
	if(!isset($_SESSION['USERID'])){
	redirect(web_root."admin/index.php");
}
 
$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
$title ='report';
switch ($view) {
	case 'listofemployees' :

		$content    = 'listofemployees.php';		
		break;
	case 'leaveservicecredits' :
		$content    = 'leaveservicecredits.php';		
		break;
	case 'leaveservicecreditswithoutpay' :
		$content    = 'leaveservicecreditswithoutpay.php';		
		break;
 
	default :
		$content    = 'listofemployees.php';		
}
  // include '../modal.php';
require_once '../theme/Templates.php';
?>


  
