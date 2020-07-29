<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

session_start();

if(isset($_POST['addbtn'])) {
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
	try {
	require("db.php");
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
        $mail->addAddress('babtundeolaleye@agropark.ng'); 
		$mail->addAddress('michaelanibi@agropark.ng');  
        $mail->addReplyTo('farmsupport@nardustcl.com');
 
        //Content
        $mail->isHTML(true);                                  
        $mail->Subject = 'Human Resource (PARK ADMINISTRATIVE SERVICES)';
        $mail->Body    = 'Requisition has been applied for approval, Visit your Dashboard for more details';
 
        $mail->send();
	
	$stmt = $conn->prepare("INSERT INTO tblrequisition SET PreparedBy='$PreparedBy', Date='$Date', Department='$Department', 
							Phone_No='$Phone_No', Purpose='$Purpose', Purchase_Mode='$Purchase_Mode', Name='$Name', 
							Address='$Address', PhoneNO='$PhoneNO', Pay_mode='$Pay_mode', Description_Expenses='$Description_Expenses', 
							Quantity='$Quantity', Unit_Price='$Unit_Price', Amount='$Amount', Amount_Word='$Amount_Word', 
							Status='$Status'");
	$stmt->execute();
	header ('Location: index.php');
	}
	catch(PDOException $e) {
		echo 'ERROR: ' . $e->getMessage();
	}
}
?>
