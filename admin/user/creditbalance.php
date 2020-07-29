<?php
	require_once ("../../include/initialize.php");
	 if (!isset($_SESSION['USERID'])){
      redirect(web_root."admin/index.php");
     }
  		
  		$sql = "Select * From tblleavecredits Where EMPLOYEEID='" . $_SESSION['USERID'] ."'";
		$result  = mysql_query($sql) or die(mysql_error());
		$row = mysql_fetch_assoc($result);

		switch ($_POST['LEAVETYPE']) {
			case 'Vacation':
				# code...
		        $rcredits = $row['VACATION']; 
		        validate_LeaveCredits($rcredits); 
				break;

			case 'Sick':
				# code... 
				$rcredits     =  $row['SICK'];
				validate_LeaveCredits($rcredits);
				break;

			case 'Maternity':
				# code... 
				$rcredits     =   $row['MATERNITY'];
				validate_LeaveCredits($rcredits); 
				break;

			case 'SSS':
				# code... 
				$rcredits     =   $row['SSS'];
				validate_LeaveCredits($rcredits);
				break;
			case 'Emergency':
				# code... 
				$rcredits     =   $row['EMERGENCY'];
				validate_LeaveCredits($rcredits);
				break;
			case 'Others':
				# code... 
				$rcredits     =   $row['OTHERS'];
				validate_LeaveCredits($rcredits);
				break;
		}



function validate_LeaveCredits($leavetype=0){ 

  	$credits = $leavetype; 
  	echo $credits;
	// $flag=0; 

 //    if ($credits == 0 ) {
 //    	# code...
 //    	 $flag=1; 
	// 	 echo "No available leave credits!"; 
 //    } 
 //    return $flag;
	return  $credits;;
  }


?>