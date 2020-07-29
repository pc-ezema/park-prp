<?php
require_once ("../../include/initialize.php");
	 if (!isset($_SESSION['USERID'])){
      redirect(web_root."admin/index.php");
     }

$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'approved' :
	doApproved();
	break;
	
	case 'deny' :
	doDenied();
	break;
	 
	}
   
	function doApproved(){
	

		$leaveid = $_GET['id'];
		$sql = "SELECT `EMPLOYEEID`,`LEAVETYPE`,`NOOFDAYS`,LEAVECATEGORY FROM `tblleaves` WHERE `LEAVEID` = " .$_GET['id'];
		$result  = mysql_query($sql) or die(mysql_error());
		$row = mysql_fetch_assoc($result);

		$leavetype = $row['LEAVETYPE'];
		$lcategory = $row['LEAVECATEGORY'];
		$nodays = $row['NOOFDAYS'];
		$empid = $row['EMPLOYEEID'];


		$sql = "Select * From tblleavecredits Where EMPLOYEEID='" . $empid."'";
		$result  = mysql_query($sql) or die(mysql_error());
		$row = mysql_fetch_assoc($result);

		$lcredits  = new LeavesCredit();  

		if ($lcategory=='With Pay') {
			# code...

		switch ($leavetype) {
			case 'Vacation':
				# code...
		        $rcredits = $row['VACATION'];

				$leavecredits =  $rcredits - $nodays;

				$lcredits->VACATION 	  = $leavecredits;
				$lcredits->update($empid); 

				break;

			case 'Sick':
				# code... 
				$rcredits     =   $row['SICK'];
				$leavecredits =   $rcredits - $nodays;

				$lcredits->SICK 		  = $leavecredits;
				$lcredits->update($empid); 
				break;

			case 'Maternity':
				# code... 
				$rcredits     =   $row['MATERNITY'];
				$leavecredits =   $rcredits - $nodays;

				$lcredits->MATERNITY 	  = $leavecredits;
				
				$lcredits->update($empid); 
		
				break;

			case 'Paternity':
				# code... 
				$rcredits     =   $row['MATERNITY'];
				$leavecredits =   $rcredits - $nodays;

				$lcredits->MATERNITY 	  = $leavecredits;
				
				$lcredits->update($empid); 
		
				break;

			case 'SSS':
				# code... 
				$rcredits     =   $row['SSS'];
				$leavecredits =   $rcredits - $nodays;

				// $lcredits->SSS 			  = null;
				
				$lcredits->update($empid);  
				break;
			case 'Emergency':
				# code... 
				$rcredits     =   $row['EMERGENCY'];
				$leavecredits =   $rcredits - $nodays;

				$lcredits->EMERGENCY  	  = $leavecredits;
				
				$lcredits->update($empid);  
				break;
			case 'Others':
				# code... 
				$rcredits     =   $row['OTHERS'];
				$leavecredits =   $rcredits - $nodays;

				$lcredits->OTHERS 		  = $leavecredits;
				
				$lcredits->update($empid); 
				break;
		
		}

		
		}


		$sql= "UPDATE `tblleaves` SET `LEAVESTATUS`='Approved'  WHERE `LEAVEID`=" .$leaveid;
		mysql_query($sql) or die(mysql_error());

		 	message("Leave of absence has been approved!", "success");
		    redirect("index.php");

	}

	function doDenied(){
 		   $leaveid = $_GET['id'];
	

		$sql= "UPDATE `tblleaves` SET `LEAVESTATUS`='Denied'  WHERE `LEAVEID`=" .$leaveid;
		mysql_query($sql) or die(mysql_error());

	 	message("Leave of absence has been denied!", "success");
	    redirect("index.php");
	}
 
	 
 
?>