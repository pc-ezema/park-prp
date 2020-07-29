<?php
require_once("include/initialize.php");
 
 if (isset($_SESSION['EMPLOYEEID'])){
      redirect(web_root."index.php");
     } 
 
if(isset($_POST['btnLogin'])){
  $email = trim($_POST['user_email']);
  $upass  = trim($_POST['user_pass']);
  $h_upass = sha1($upass);
  
   if ($email == '' OR $upass == '') {

     ?>
        <script type="text/javascript">
          alert("Account does not exist! Please contact Administrator.");
        </script>
    <?php
      redirect("index.php");
      
    } else {  
  //it creates a new objects of member
    $emp = new Employee();
    //make use of the static function, and we passed to parameters
    $res = $emp->EmployeeAuthentication($email, $h_upass);
    if ($res==true) { 

       $sql="INSERT INTO `tbllogs` (`USERID`,USERNAME, `LOGDATETIME`, `LOGROLE`, `LOGMODE`) 
          VALUES (".$_SESSION['EMPLOYEEID'].",'".$_SESSION['LNAME']."','".date('Y-m-d H:i:s')."','Employee','Logged in')";
	
	redirect(web_root."employee/");
          
    }else{

        ?>
        <script type="text/javascript">
          alert("Account does not exist! Please contact Administrator.");
        </script>
    <?php
       // message("Account does not exist! Please contact Administrator.", "error");
       redirect(web_root."index.php"); 
    }
 }
 } 
 ?>  