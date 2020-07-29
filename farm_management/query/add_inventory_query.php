<?php
include('../connect.php');
if(isset($_POST['admin'])) {
	
	$Items = $_POST['items'];
	$Quantity = $_POST['quantity'];
	$Datepurchase = $_POST['datepurchase'];
	$Amount = $_POST['amount'];
	$Purchasedby = $_POST['purchasedby'];
	$Receivedby = $_POST['receivedby'];

	$add = $con->prepare("INSERT INTO adminitems (i_items, i_qty, i_dpurchase, i_amount, i_purchaseby, i_receiveby) VALUES (?,?,?,?,?,?)");
	$add->execute(array($Items, $Quantity, $Datepurchase, $Amount, $Purchasedby, $Receivedby));

	header('location:../admin_unit.php');

}elseif(isset($_POST['booku'])) {
	
	$Items = $_POST['items'];
	$Quantity = $_POST['quantity'];
	$Datepurchase = $_POST['datepurchase'];
	$Amount = $_POST['amount'];
	$Purchasedby = $_POST['purchasedby'];
	$Receivedby = $_POST['receivedby'];

	$add = $con->prepare("INSERT INTO bookuitems (i_items, i_qty, i_dpurchase, i_amount, i_purchaseby, i_receiveby) VALUES (?,?,?,?,?,?)");
	$add->execute(array($Items, $Quantity, $Datepurchase, $Amount, $Purchasedby, $Receivedby));

	header('location:../booku_unit.php');

}elseif(isset($_POST['banow'])) {
	
	$Items = $_POST['items'];
	$Quantity = $_POST['quantity'];
	$Datepurchase = $_POST['datepurchase'];
	$Amount = $_POST['amount'];
	$Purchasedby = $_POST['purchasedby'];
	$Receivedby = $_POST['receivedby'];

	$add = $con->prepare("INSERT INTO banowitems (i_items, i_qty, i_dpurchase, i_amount, i_purchaseby, i_receiveby) VALUES (?,?,?,?,?,?)");
	$add->execute(array($Items, $Quantity, $Datepurchase, $Amount, $Purchasedby, $Receivedby));

	header('location:../banow_unit.php');

}elseif(isset($_POST['distiller'])) {
	
	$Items = $_POST['items'];
	$Quantity = $_POST['quantity'];
	$Datepurchase = $_POST['datepurchase'];
	$Amount = $_POST['amount'];
	$Purchasedby = $_POST['purchasedby'];
	$Receivedby = $_POST['receivedby'];

	$add = $con->prepare("INSERT INTO distilleritems (i_items, i_qty, i_dpurchase, i_amount, i_purchaseby, i_receiveby) VALUES (?,?,?,?,?,?)");
	$add->execute(array($Items, $Quantity, $Datepurchase, $Amount, $Purchasedby, $Receivedby));

	header('location:../distiller_unit.php');

}elseif(isset($_POST['feedmill'])) {
	
	$Items = $_POST['items'];
	$Quantity = $_POST['quantity'];
	$Datepurchase = $_POST['datepurchase'];
	$Amount = $_POST['amount'];
	$Purchasedby = $_POST['purchasedby'];
	$Receivedby = $_POST['receivedby'];

	$add = $con->prepare("INSERT INTO feedmillitems (i_items, i_qty, i_dpurchase, i_amount, i_purchaseby, i_receiveby) VALUES (?,?,?,?,?,?)");
	$add->execute(array($Items, $Quantity, $Datepurchase, $Amount, $Purchasedby, $Receivedby));

	header('location:../feedmill_unit.php');

}elseif(isset($_POST['compost'])) {
	
	$Items = $_POST['items'];
	$Quantity = $_POST['quantity'];
	$Datepurchase = $_POST['datepurchase'];
	$Amount = $_POST['amount'];
	$Purchasedby = $_POST['purchasedby'];
	$Receivedby = $_POST['receivedby'];

	$add = $con->prepare("INSERT INTO compostitems (i_items, i_qty, i_dpurchase, i_amount, i_purchaseby, i_receiveby) VALUES (?,?,?,?,?,?)");
	$add->execute(array($Items, $Quantity, $Datepurchase, $Amount, $Purchasedby, $Receivedby));

	header('location:../compost_unit.php');

}elseif(isset($_POST['bsf'])) {
	
	$Items = $_POST['items'];
	$Quantity = $_POST['quantity'];
	$Datepurchase = $_POST['datepurchase'];
	$Amount = $_POST['amount'];
	$Purchasedby = $_POST['purchasedby'];
	$Receivedby = $_POST['receivedby'];

	$add = $con->prepare("INSERT INTO bsfitems (i_items, i_qty, i_dpurchase, i_amount, i_purchaseby, i_receiveby) VALUES (?,?,?,?,?,?)");
	$add->execute(array($Items, $Quantity, $Datepurchase, $Amount, $Purchasedby, $Receivedby));

	header('location:../bsf_unit.php');

}elseif(isset($_POST['fishery'])) {
	
	$Items = $_POST['items'];
	$Quantity = $_POST['quantity'];
	$Datepurchase = $_POST['datepurchase'];
	$Amount = $_POST['amount'];
	$Purchasedby = $_POST['purchasedby'];
	$Receivedby = $_POST['receivedby'];

	$add = $con->prepare("INSERT INTO fisheryitems (i_items, i_qty, i_dpurchase, i_amount, i_purchaseby, i_receiveby) VALUES (?,?,?,?,?,?)");
	$add->execute(array($Items, $Quantity, $Datepurchase, $Amount, $Purchasedby, $Receivedby));

	header('location:../fishery_unit.php');

}elseif(isset($_POST['livestock'])) {
	
	$Items = $_POST['items'];
	$Quantity = $_POST['quantity'];
	$Datepurchase = $_POST['datepurchase'];
	$Amount = $_POST['amount'];
	$Purchasedby = $_POST['purchasedby'];
	$Receivedby = $_POST['receivedby'];

	$add = $con->prepare("INSERT INTO livestockitems (i_items, i_qty, i_dpurchase, i_amount, i_purchaseby, i_receiveby) VALUES (?,?,?,?,?,?)");
	$add->execute(array($Items, $Quantity, $Datepurchase, $Amount, $Purchasedby, $Receivedby));

	header('location:../livestock_unit.php');

}elseif(isset($_POST['poultry'])) {
	
	$Items = $_POST['items'];
	$Quantity = $_POST['quantity'];
	$Datepurchase = $_POST['datepurchase'];
	$Amount = $_POST['amount'];
	$Purchasedby = $_POST['purchasedby'];
	$Receivedby = $_POST['receivedby'];

	$add = $con->prepare("INSERT INTO poultryitems (i_items, i_qty, i_dpurchase, i_amount, i_purchaseby, i_receiveby) VALUES (?,?,?,?,?,?)");
	$add->execute(array($Items, $Quantity, $Datepurchase, $Amount, $Purchasedby, $Receivedby));

	header('location:../poultry_unit.php');

}elseif(isset($_POST['crop'])) {
	
	$Items = $_POST['items'];
	$Quantity = $_POST['quantity'];
	$Datepurchase = $_POST['datepurchase'];
	$Amount = $_POST['amount'];
	$Purchasedby = $_POST['purchasedby'];
	$Receivedby = $_POST['receivedby'];

	$add = $con->prepare("INSERT INTO cropitems (i_items, i_qty, i_dpurchase, i_amount, i_purchaseby, i_receiveby) VALUES (?,?,?,?,?,?)");
	$add->execute(array($Items, $Quantity, $Datepurchase, $Amount, $Purchasedby, $Receivedby));

	header('location:../crop_unit.php');

}elseif(isset($_POST['organic'])) {
	
	$Items = $_POST['items'];
	$Quantity = $_POST['quantity'];
	$Datepurchase = $_POST['datepurchase'];
	$Amount = $_POST['amount'];
	$Purchasedby = $_POST['purchasedby'];
	$Receivedby = $_POST['receivedby'];

	$add = $con->prepare("INSERT INTO organicitems (i_items, i_qty, i_dpurchase, i_amount, i_purchaseby, i_receiveby) VALUES (?,?,?,?,?,?)");
	$add->execute(array($Items, $Quantity, $Datepurchase, $Amount, $Purchasedby, $Receivedby));

	header('location:../organic_unit.php');

}elseif(isset($_POST['farmventure'])) {
	
	$Items = $_POST['items'];
	$Quantity = $_POST['quantity'];
	$Datepurchase = $_POST['datepurchase'];
	$Amount = $_POST['amount'];
	$Purchasedby = $_POST['purchasedby'];
	$Receivedby = $_POST['receivedby'];

	$add = $con->prepare("INSERT INTO farmventureitems (i_items, i_qty, i_dpurchase, i_amount, i_purchaseby, i_receiveby) VALUES (?,?,?,?,?,?)");
	$add->execute(array($Items, $Quantity, $Datepurchase, $Amount, $Purchasedby, $Receivedby));

	header('location:../farmventure_unit.php');

}elseif(isset($_POST['security'])) {
	
	$Items = $_POST['items'];
	$Quantity = $_POST['quantity'];
	$Datepurchase = $_POST['datepurchase'];
	$Amount = $_POST['amount'];
	$Purchasedby = $_POST['purchasedby'];
	$Receivedby = $_POST['receivedby'];

	$add = $con->prepare("INSERT INTO securityitems (i_items, i_qty, i_dpurchase, i_amount, i_purchaseby, i_receiveby) VALUES (?,?,?,?,?,?)");
	$add->execute(array($Items, $Quantity, $Datepurchase, $Amount, $Purchasedby, $Receivedby));

	header('location:../security_unit.php');

}elseif(isset($_POST['hostel'])) {
	
	$Items = $_POST['items'];
	$Quantity = $_POST['quantity'];
	$Datepurchase = $_POST['datepurchase'];
	$Amount = $_POST['amount'];
	$Purchasedby = $_POST['purchasedby'];
	$Receivedby = $_POST['receivedby'];

	$add = $con->prepare("INSERT INTO hostelitems (i_items, i_qty, i_dpurchase, i_amount, i_purchaseby, i_receiveby) VALUES (?,?,?,?,?,?)");
	$add->execute(array($Items, $Quantity, $Datepurchase, $Amount, $Purchasedby, $Receivedby));

	header('location:../hostel.php');

}elseif(isset($_POST['apic'])) {
	
	$Items = $_POST['items'];
	$Quantity = $_POST['quantity'];
	$Datepurchase = $_POST['datepurchase'];
	$Amount = $_POST['amount'];
	$Purchasedby = $_POST['purchasedby'];
	$Receivedby = $_POST['receivedby'];

	$add = $con->prepare("INSERT INTO apicitems (i_items, i_qty, i_dpurchase, i_amount, i_purchaseby, i_receiveby) VALUES (?,?,?,?,?,?)");
	$add->execute(array($Items, $Quantity, $Datepurchase, $Amount, $Purchasedby, $Receivedby));

	header('location:../apic.php');

}elseif(isset($_POST['clinic'])) {
	
	$Items = $_POST['items'];
	$Quantity = $_POST['quantity'];
	$Datepurchase = $_POST['datepurchase'];
	$Amount = $_POST['amount'];
	$Purchasedby = $_POST['purchasedby'];
	$Receivedby = $_POST['receivedby'];

	$add = $con->prepare("INSERT INTO clinicitems (i_items, i_qty, i_dpurchase, i_amount, i_purchaseby, i_receiveby) VALUES (?,?,?,?,?,?)");
	$add->execute(array($Items, $Quantity, $Datepurchase, $Amount, $Purchasedby, $Receivedby));

	header('location:../clinic.php');

}elseif(isset($_POST['postharvest'])) {
	
	$Items = $_POST['items'];
	$Quantity = $_POST['quantity'];
	$Datepurchase = $_POST['datepurchase'];
	$Amount = $_POST['amount'];
	$Purchasedby = $_POST['purchasedby'];
	$Receivedby = $_POST['receivedby'];

	$add = $con->prepare("INSERT INTO postharvestitems (i_items, i_qty, i_dpurchase, i_amount, i_purchaseby, i_receiveby) VALUES (?,?,?,?,?,?)");
	$add->execute(array($Items, $Quantity, $Datepurchase, $Amount, $Purchasedby, $Receivedby));

	header('location:../post_harvest.php');

}else {
	echo "Record Not Saved! Try Again.";
	header('location:../home.php');
}
?>