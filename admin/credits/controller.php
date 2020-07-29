<?php
require_once ("../../include/initialize.php");
	 if (!isset($_SESSION['USERID'])){
      redirect(web_root."admin/index.php");
     }

$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'add' :
	doAdd();
	break;

	case 'edit' :
	doEdit();
	break;

	case 'backtozero' :
	doBacktoZero();
	break;    
 
	}
   
function doAdd(){
	 if(isset($_POST['save'])){


 
	 	$additionalleave = $_POST['LEAVECREDITS'];

		$sql= "UPDATE `tblleavecredits` l,`tblemployees` e  SET `VACATION`= `VACATION` + '{$additionalleave}'  WHERE l.`EMPLOYEEID`=e.`EMPLOYEEID` AND `WORKSTATS` NOT IN ('Probationary','Temporary') AND CONCAT(WORKSTATS,' ',POSITION) != 'Regular FACULTY'";
		mysql_query($sql) or die(mysql_error());

		$sql= "UPDATE `tblleavecredits` l,`tblemployees` e  SET  `SICK`=`SICK` +  '{$additionalleave}'  WHERE l.`EMPLOYEEID`=e.`EMPLOYEEID` AND `WORKSTATS` NOT IN ('Probationary','Temporary')";
		mysql_query($sql) or die(mysql_error());

	 	message("Additional leave credits has been added!", "success");
	    redirect("index.php?view=add");

	}
}
function doEdit(){
	 if(isset($_POST['save'])){


 
	 	$additionalleave = $_POST['LEAVECREDITS'];

		$sql= "UPDATE `tblleavecredits` l,`tblemployees` e  SET `VACATION`= `VACATION` - '{$additionalleave}'  WHERE l.`EMPLOYEEID`=e.`EMPLOYEEID` AND `WORKSTATS` NOT IN ('Probationary','Temporary') AND CONCAT(WORKSTATS,' ',POSITION) != 'Regular FACULTY'";
		mysql_query($sql) or die(mysql_error());

		$sql= "UPDATE `tblleavecredits` l,`tblemployees` e  SET  `SICK`=`SICK` -  '{$additionalleave}'  WHERE l.`EMPLOYEEID`=e.`EMPLOYEEID` AND `WORKSTATS` NOT IN ('Probationary','Temporary')";
		mysql_query($sql) or die(mysql_error());

	 	message("Leave credits already deducted!", "success");
	    redirect("index.php?view=edit");

	}
}
function doBacktoZero(){ 
  
		$sql= "UPDATE `tblleavecredits` set `VACATION`=0, `SICK`=0, `MATERNITY`=0, `SSS`=0, `EMERGENCY`=0";
		mysql_query($sql) or die(mysql_error());

		 
	 	message("All leave credits has been returned to 0!", "success");
	    redirect("../index.php"); 
}

?>