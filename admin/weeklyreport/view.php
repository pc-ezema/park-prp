<?php
require_once("../../include/initialize.php");
if(!isset($_SESSION['USERID'])){
	redirect(web_root."admin/index.php");
}

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
 $title="Weekly Report"; 
 $header=$view; 
switch ($view) {
	case 'weeklyreport' :
		$content    = 'index.php';		
		break;

	default :
		$content    = 'index.php';		
}
require_once ("../theme/templates.php");
?>
  
