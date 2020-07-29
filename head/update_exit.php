<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

session_start();

include('connect.php');
if(isset($_POST['update'])) {
	$id = $_POST['id'];
	$CodeNumber = $_POST['codeid'];
	$Names = $_POST['names'];
	$Unit = $_POST['unit'];
	$Date = $_POST['date'];
	$ExitReasons = $_POST['exit_reasons'];
	$Designation = $_POST['designation'];
	$NumberDays = $_POST['number_days'];
	$ExpectedDate = $_POST['expected_date'];
	$AddressExit = $_POST['address_exit'];
	$NextKin = $_POST['next_kin'];
	$PhoneNumber = $_POST['phone_number'];
	$Officer = $_POST['officer'];
	$ReturedOn = $_POST['returned_on'];
	$Status = $_POST['status'];
	
	
	$mail = new PHPMailer(true);  
	$mail->SMTPDebug = 3; 
	
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
        $mail->addAddress('timileyinomobosola7@gmail.com');              
        $mail->addReplyTo('farmsupport@nardustcl.com');
 
        //Content
        $mail->isHTML(true);                                  
        $mail->Subject = 'Head (PARK ADMINISTRATIVE SERVICES)';
        $mail->Body    = 'Action has been taken on requested Exit Form, Visit your Dashboard for more details.';
 
        $mail->send();
		
	$edit = $con->prepare("UPDATE tblexitform SET `code_number` = ?, `name` = ?, `unit` = ?, `date` = ?, `designation` = ?, `exit_reasons` = ?, `number_days` = ?, 
							`expected_dor` = ?, `address_exit` = ?, `next_kin` = ?, `phone_number` = ?,  `relieving_officers` = ?, `returned_on` = ?, `status` = ? WHERE id = ?");
	$edit->execute(array($CodeNumber, $Names, $Unit, $Date, $Designation, $ExitReasons, $NumberDays, $ExpectedDate, $AddressExit,
						$NextKin, $PhoneNumber, $Officer, $ReturedOn, $Status, $id));

	header('location:exit.php');
}
?>