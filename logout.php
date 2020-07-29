<?php 
require_once 'include/initialize.php';
// Four steps to closing a session
// (i.e. logging out)

// 1. Find the session
@session_start();

 $sql="INSERT INTO `tbllogs` (`USERID`,USERNAME, `LOGDATETIME`, `LOGROLE`, `LOGMODE`) 
          VALUES (".$_SESSION['EMPLOYEEID'].",'".$_SESSION['LNAME']."','".date('Y-m-d H:i:s')."','Employee','Logged out')";


// 2. Unset all the session variables
unset($_SESSION['EMPLOYEEID']);
unset($_SESSION['FNAME']);   
unset($_SESSION['LNAME']);  
unset($_SESSION['ADDRESS']); 
unset($_SESSION['EMPUSERNAME']); 	 
unset($_SESSION['EMPPASSWORD'] );	
unset($_SESSION['MNAME']); 
unset($_SESSION['DEPARTMENTID']); 	 
// 4. Destroy the session
// session_destroy();
redirect(web_root."index.php?logout=1");
?>