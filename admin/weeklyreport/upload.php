<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once("../../include/initialize.php");
if(!isset($_SESSION['USERID'])){
	redirect(web_root."admin/index.php");
}
	require_once 'connection.php';
	//Load composer's autoloader
    require 'vendor/autoload.php';
	
	if(ISSET($_POST['submit'])){
		if($_FILES['upload']['name'] != "") {
					
			$file = $_FILES['upload'];
			$department = $_POST['department'];
			$evaluation_comment = $_POST['evaluation_comment'];
			$date = $_POST['date'];
			$file_name = $file['name'];
			$file_temp = $file['tmp_name'];
			$name = explode('.', $file_name);
			$path = "files/".$file_name;
			
			$mail = new PHPMailer(true);  
			$mail->SMTPDebug = 0;
			//Server settings
			$mail->isSMTP();                                     
			$mail->Host = 'mail.nardustcl.com';                      
			$mail->SMTPAuth = true;                             
			$mail->Username = 'farmsupport@nardustcl.com';     
			$mail->Password = '@_farmsupport456';             
			$mail->SMTPOptions = array(
				'ssl' => array(
				'verify_peer' => false,
				'verify_peer_name' => false,
				'allow_self_signed' => true
				)
			);                         
			$mail->SMTPSecure = 'ssl';                           
			$mail->Port = 465;                                   
	 
			//Send Email
			$mail->setFrom('farmsupport@nardustcl.com');
	 
			//Recipients
			$mail->addAddress('michaelanibi@agropark.ng');              
			$mail->addReplyTo('farmsupport@nardustcl.com');
	 
			//Content
			$mail->isHTML(true);                                  
			$mail->Subject = 'Human Resource (PARK ADMINISTRATIVE SERVICES)';
			$mail->Body    = 'Report has been sent to you, visit your Dashboard for more details.';
	 
			$mail->send();
			
			$conn->query("INSERT INTO `file` VALUES('', '$department', '$date', '$name[0]', '$evaluation_comment', '$path')") or die(mysqli_error());
							
			move_uploaded_file($file_temp, $path);
			redirect("view.php");
			
		}else{
			redirect("view.php");
		}
			
	}
			
require_once ("../theme/templates.php");
?>
