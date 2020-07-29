<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
session_start();

include('../connect.php');
if(isset($_POST['save'])) {
	$Date = $_POST['date'];
	$Department = $_POST['department'];
	$Number = $_POST['number'];
	$Purpose = $_POST['purpose'];
	$Purchase = $_POST['purchase'];
	$Name = $_POST['name'];
	$Address = $_POST['address'];
	$PhoneNo = $_POST['p_number'];
	$PayMode = $_POST['paymode'];
	$Desc_Expenses = $_POST['desc_expenses'];
	$Quantity = $_POST['quantity'];
	$Unit_Price = $_POST['unit_price'];
	$Total_Amount = $_POST['total_amount'];
	$Amount_Word = $_POST['amount_word'];
	$Prepared_By = $_POST['prepared_by'];
	
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
	$mail->Subject = 'Human Resource (PARK ADMINISTRATIVE SERVICES)';
	$mail->Body    = 'Requisition has been sent to you, visit your Dashboard for more details.';

	$mail->send();
	
	$add_requisition = $con->prepare("INSERT INTO tblrequisition (PreparedBy, Date, Department, Phone_No, Purpose, Purchase_Mode, Name, Address, PhoneNO, Pay_mode, Description_Expenses, Quantity, Unit_Price, Amount, Amount_Word) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
	$add_requisition->execute(array($Prepared_By, $Date, $Department, $Number, $Purpose, $Purchase, $Name, $Address, $PhoneNo, $PayMode, $Desc_Expenses, $Quantity, $Unit_Price,
									$Total_Amount, $Amount_Word));

	header('location:../all_requisition.php');
}
?>

