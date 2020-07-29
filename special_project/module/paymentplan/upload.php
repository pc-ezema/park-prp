<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
session_start();
	require_once 'connection.php';

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
			
			//Load composer's autoloader
			require 'vendor/autoload.php';
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
			$mail->Subject = 'Special Project Manager (PARK ADMINISTRATIVE SERVICES)';
			$mail->Body    = 'Payment Plan has been sent to you, visit your Dashboard for more details.';

			$mail->send();
			$conn->query("INSERT INTO `file` VALUES('', '$department', '$date', '$name[0]', '$evaluation_comment', '$path', '')") or die(mysqli_error());
			
			move_uploaded_file($file_temp, $path);
			header("location:index.php");
			
		}else{
			echo "<script>alert('Required Field!')</script>";
			echo "<script>window.location='index.php'</script>";
		}
	}
?>