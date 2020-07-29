<?php
	require_once ("../../include/initialize.php");
	 if (!isset($_SESSION['USERID'])){
      redirect(web_root."admin/index.php");
     }

     	$ID = $_POST['ID'];
     	$OTHER = isset($_POST['OTHER']) ? $_POST['OTHER'] : '' ;
      $MATERNITY  = isset($_POST['MATERNITY']) ? $_POST['MATERNITY'] : '' ;

     	if ($OTHER!='') {
     		# code...
     		$sql = "UPDATE `tblleavecredits` SET `OTHERS`= '".$OTHER."' WHERE `EMPLOYEEID`='" .$ID."'";
			$result  = mysql_query($sql) or die(mysql_error());
     	}


      if ($MATERNITY!='') {
      # code...
        $sql = "UPDATE `tblleavecredits` SET `MATERNITY`= '".$MATERNITY."' WHERE `EMPLOYEEID`='" .$ID."'";
        $result  = mysql_query($sql) or die(mysql_error());
      }
  		
  		
		 

?>