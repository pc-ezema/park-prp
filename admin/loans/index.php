<?php
require_once("../../include/initialize.php");
if(!isset($_SESSION['USERID'])){
	redirect(web_root."admin/index.php");
}

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
 $title="Employees Loans"; 
 $header=$view; 
switch ($view) {
	case 'loans' :
		$content    = 'viewloans.php';		
		break;

	default :
		$content    = 'viewloans.php';		
}
require_once ("../theme/templates.php");
?>
  
