<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

session_start();

include('connect.php');
if(isset($_POST['update'])) {
	
	
	
	$i_id = $_POST['i_id'];
	$PreparedBy = $_POST['prepared_by'];
	$Date = $_POST['date'];
	$Department = $_POST['department'];
	$Phone_No = $_POST['phone_no'];
	$Purpose = $_POST['purpose'];
	$Purchase_Mode = $_POST['purchase_mode'];
	$Name = $_POST['name'];
	$Address = $_POST['address'];
	$PhoneNO = $_POST['phone_no'];
	$Pay_mode = $_POST['pay_mode'];
	$Description_Expenses = $_POST['desc_expenses'];
	$Quantity = $_POST['quantity'];
	$Unit_Price = $_POST['unit_price'];
	$Amount = $_POST['amount'];
	$Amount_Word = $_POST['amount_word'];
	$Status = $_POST['status'];
	
	//Load composer's autoloader
    require 'vendor/autoload.php';
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
        $mail->addAddress('igereejiro@agropark.ng');              
        $mail->addReplyTo('farmsupport@nardustcl.com');
 
        //Content
        $mail->isHTML(true);                                  
        $mail->Subject = 'Head (PARK ADMINISTRATIVE SERVICES)';
        $mail->Body    = 'Action has been taken on the requested requisition, Visit your Dashboard for more details.';
 
        $mail->send();
		
	$approve_imprestrequisition = $con->prepare("UPDATE tblrequisition SET  `PreparedBy` = ?, `Date` = ?, `Department` = ?,	`Phone_No` = ?, 
	`Purpose` = ?, `Purchase_Mode` = ?, `Name` = ?, `Address` = ?, `PhoneNO` = ?, `Pay_mode` = ?, `Description_Expenses` = ?, 
	`Quantity` = ?, `Unit_Price` = ?, `Amount` = ?, `Amount_Word` = ?, `Status` = ? WHERE i_id = ?");
	$approve_imprestrequisition->execute(array($PreparedBy, $Date, $Department, $Phone_No, $Purpose, $Purchase_Mode, $Name, $Address, $PhoneNO, 
	$Pay_mode, $Description_Expenses, $Quantity, $Unit_Price, $Amount, $Amount_Word, $Status, $i_id));
	header('location:all_compliancerequisition.php');

}

?>