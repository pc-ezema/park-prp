<?php
include('../connect.php');
if(isset($_POST['adminupdate'])) {
	$id = $_POST['id'];
	$Items = $_POST['items'];
	$Quantity = $_POST['quantity'];
	$Datepurchase = $_POST['datepurchase'];
	$Amount = $_POST['amount'];
	$Purchasedby = $_POST['purchasedby'];
	$Receivedby = $_POST['receivedby'];
	
	$edit = $con->prepare("UPDATE adminitems SET `i_items` = ?, `i_qty` = ?, `i_dpurchase` = ?, `i_amount` = ?, `i_purchaseby` = ?, `i_receiveby` = ? WHERE i_id = ?");
	$edit->execute(array($Items, $Quantity, $Datepurchase, $Amount, $Purchasedby, $Receivedby, $id));

	header('location:../admin_unit.php');
	
}elseif(isset($_POST['bookuupdate'])) {
	$id = $_POST['id'];
	$Items = $_POST['items'];
	$Quantity = $_POST['quantity'];
	$Datepurchase = $_POST['datepurchase'];
	$Amount = $_POST['amount'];
	$Purchasedby = $_POST['purchasedby'];
	$Receivedby = $_POST['receivedby'];
	
	$edit = $con->prepare("UPDATE bookuitems SET `i_items` = ?, `i_qty` = ?, `i_dpurchase` = ?, `i_amount` = ?, `i_purchaseby` = ?, `i_receiveby` = ? WHERE i_id = ?");
	$edit->execute(array($Items, $Quantity, $Datepurchase, $Amount, $Purchasedby, $Receivedby, $id));

	header('location:../booku_unit.php');
	
}elseif(isset($_POST['banowupdate'])) {
	$id = $_POST['id'];
	$Items = $_POST['items'];
	$Quantity = $_POST['quantity'];
	$Datepurchase = $_POST['datepurchase'];
	$Amount = $_POST['amount'];
	$Purchasedby = $_POST['purchasedby'];
	$Receivedby = $_POST['receivedby'];
	
	$edit = $con->prepare("UPDATE banowitems SET `i_items` = ?, `i_qty` = ?, `i_dpurchase` = ?, `i_amount` = ?, `i_purchaseby` = ?, `i_receiveby` = ? WHERE i_id = ?");
	$edit->execute(array($Items, $Quantity, $Datepurchase, $Amount, $Purchasedby, $Receivedby, $id));

	header('location:../banow_unit.php');
	
}elseif(isset($_POST['distillerupdate'])) {
	$id = $_POST['id'];
	$Items = $_POST['items'];
	$Quantity = $_POST['quantity'];
	$Datepurchase = $_POST['datepurchase'];
	$Amount = $_POST['amount'];
	$Purchasedby = $_POST['purchasedby'];
	$Receivedby = $_POST['receivedby'];
	
	$edit = $con->prepare("UPDATE distilleritems SET `i_items` = ?, `i_qty` = ?, `i_dpurchase` = ?, `i_amount` = ?, `i_purchaseby` = ?, `i_receiveby` = ? WHERE i_id = ?");
	$edit->execute(array($Items, $Quantity, $Datepurchase, $Amount, $Purchasedby, $Receivedby, $id));

	header('location:../distiller_unit.php');
	
}elseif(isset($_POST['feedmillupdate'])) {
	$id = $_POST['id'];
	$Items = $_POST['items'];
	$Quantity = $_POST['quantity'];
	$Datepurchase = $_POST['datepurchase'];
	$Amount = $_POST['amount'];
	$Purchasedby = $_POST['purchasedby'];
	$Receivedby = $_POST['receivedby'];
	
	$edit = $con->prepare("UPDATE feedmillitems SET `i_items` = ?, `i_qty` = ?, `i_dpurchase` = ?, `i_amount` = ?, `i_purchaseby` = ?, `i_receiveby` = ? WHERE i_id = ?");
	$edit->execute(array($Items, $Quantity, $Datepurchase, $Amount, $Purchasedby, $Receivedby, $id));

	header('location:../feedmill_unit.php');
	
}elseif(isset($_POST['compostupdate'])) {
	$id = $_POST['id'];
	$Items = $_POST['items'];
	$Quantity = $_POST['quantity'];
	$Datepurchase = $_POST['datepurchase'];
	$Amount = $_POST['amount'];
	$Purchasedby = $_POST['purchasedby'];
	$Receivedby = $_POST['receivedby'];
	
	$edit = $con->prepare("UPDATE compostitems SET `i_items` = ?, `i_qty` = ?, `i_dpurchase` = ?, `i_amount` = ?, `i_purchaseby` = ?, `i_receiveby` = ? WHERE i_id = ?");
	$edit->execute(array($Items, $Quantity, $Datepurchase, $Amount, $Purchasedby, $Receivedby, $id));

	header('location:../compost_unit.php');
	
}elseif(isset($_POST['bsfupdate'])) {
	$id = $_POST['id'];
	$Items = $_POST['items'];
	$Quantity = $_POST['quantity'];
	$Datepurchase = $_POST['datepurchase'];
	$Amount = $_POST['amount'];
	$Purchasedby = $_POST['purchasedby'];
	$Receivedby = $_POST['receivedby'];
	
	$edit = $con->prepare("UPDATE bsfitems SET `i_items` = ?, `i_qty` = ?, `i_dpurchase` = ?, `i_amount` = ?, `i_purchaseby` = ?, `i_receiveby` = ? WHERE i_id = ?");
	$edit->execute(array($Items, $Quantity, $Datepurchase, $Amount, $Purchasedby, $Receivedby, $id));

	header('location:../bsf_unit.php');
	
}elseif(isset($_POST['fisheryupdate'])) {
	$id = $_POST['id'];
	$Items = $_POST['items'];
	$Quantity = $_POST['quantity'];
	$Datepurchase = $_POST['datepurchase'];
	$Amount = $_POST['amount'];
	$Purchasedby = $_POST['purchasedby'];
	$Receivedby = $_POST['receivedby'];
	
	$edit = $con->prepare("UPDATE fisheryitems SET `i_items` = ?, `i_qty` = ?, `i_dpurchase` = ?, `i_amount` = ?, `i_purchaseby` = ?, `i_receiveby` = ? WHERE i_id = ?");
	$edit->execute(array($Items, $Quantity, $Datepurchase, $Amount, $Purchasedby, $Receivedby, $id));

	header('location:../fishery_unit.php');
	
}elseif(isset($_POST['livestockupdate'])) {
	$id = $_POST['id'];
	$Items = $_POST['items'];
	$Quantity = $_POST['quantity'];
	$Datepurchase = $_POST['datepurchase'];
	$Amount = $_POST['amount'];
	$Purchasedby = $_POST['purchasedby'];
	$Receivedby = $_POST['receivedby'];
	
	$edit = $con->prepare("UPDATE livestockitems SET `i_items` = ?, `i_qty` = ?, `i_dpurchase` = ?, `i_amount` = ?, `i_purchaseby` = ?, `i_receiveby` = ? WHERE i_id = ?");
	$edit->execute(array($Items, $Quantity, $Datepurchase, $Amount, $Purchasedby, $Receivedby, $id));

	header('location:../livestock_unit.php');
	
}elseif(isset($_POST['poultryupdate'])) {
	$id = $_POST['id'];
	$Items = $_POST['items'];
	$Quantity = $_POST['quantity'];
	$Datepurchase = $_POST['datepurchase'];
	$Amount = $_POST['amount'];
	$Purchasedby = $_POST['purchasedby'];
	$Receivedby = $_POST['receivedby'];
	
	$edit = $con->prepare("UPDATE poultryitems SET `i_items` = ?, `i_qty` = ?, `i_dpurchase` = ?, `i_amount` = ?, `i_purchaseby` = ?, `i_receiveby` = ? WHERE i_id = ?");
	$edit->execute(array($Items, $Quantity, $Datepurchase, $Amount, $Purchasedby, $Receivedby, $id));

	header('location:../poultry_unit.php');
	
}elseif(isset($_POST['cropupdate'])) {
	$id = $_POST['id'];
	$Items = $_POST['items'];
	$Quantity = $_POST['quantity'];
	$Datepurchase = $_POST['datepurchase'];
	$Amount = $_POST['amount'];
	$Purchasedby = $_POST['purchasedby'];
	$Receivedby = $_POST['receivedby'];
	
	$edit = $con->prepare("UPDATE cropitems SET `i_items` = ?, `i_qty` = ?, `i_dpurchase` = ?, `i_amount` = ?, `i_purchaseby` = ?, `i_receiveby` = ? WHERE i_id = ?");
	$edit->execute(array($Items, $Quantity, $Datepurchase, $Amount, $Purchasedby, $Receivedby, $id));

	header('location:../crop_unit.php');
	
}elseif(isset($_POST['organicupdate'])) {
	$id = $_POST['id'];
	$Items = $_POST['items'];
	$Quantity = $_POST['quantity'];
	$Datepurchase = $_POST['datepurchase'];
	$Amount = $_POST['amount'];
	$Purchasedby = $_POST['purchasedby'];
	$Receivedby = $_POST['receivedby'];
	
	$edit = $con->prepare("UPDATE organicitems SET `i_items` = ?, `i_qty` = ?, `i_dpurchase` = ?, `i_amount` = ?, `i_purchaseby` = ?, `i_receiveby` = ? WHERE i_id = ?");
	$edit->execute(array($Items, $Quantity, $Datepurchase, $Amount, $Purchasedby, $Receivedby, $id));

	header('location:../organic_unit.php');
	
}elseif(isset($_POST['farmventureupdate'])) {
	$id = $_POST['id'];
	$Items = $_POST['items'];
	$Quantity = $_POST['quantity'];
	$Datepurchase = $_POST['datepurchase'];
	$Amount = $_POST['amount'];
	$Purchasedby = $_POST['purchasedby'];
	$Receivedby = $_POST['receivedby'];
	
	$edit = $con->prepare("UPDATE farmventureitems SET `i_items` = ?, `i_qty` = ?, `i_dpurchase` = ?, `i_amount` = ?, `i_purchaseby` = ?, `i_receiveby` = ? WHERE i_id = ?");
	$edit->execute(array($Items, $Quantity, $Datepurchase, $Amount, $Purchasedby, $Receivedby, $id));

	header('location:../farmventure_unit.php');
	
}elseif(isset($_POST['securityupdate'])) {
	$id = $_POST['id'];
	$Items = $_POST['items'];
	$Quantity = $_POST['quantity'];
	$Datepurchase = $_POST['datepurchase'];
	$Amount = $_POST['amount'];
	$Purchasedby = $_POST['purchasedby'];
	$Receivedby = $_POST['receivedby'];
	
	$edit = $con->prepare("UPDATE securityitems SET `i_items` = ?, `i_qty` = ?, `i_dpurchase` = ?, `i_amount` = ?, `i_purchaseby` = ?, `i_receiveby` = ? WHERE i_id = ?");
	$edit->execute(array($Items, $Quantity, $Datepurchase, $Amount, $Purchasedby, $Receivedby, $id));

	header('location:../security_unit.php');
	
}elseif(isset($_POST['hostelupdate'])) {
	$id = $_POST['id'];
	$Items = $_POST['items'];
	$Quantity = $_POST['quantity'];
	$Datepurchase = $_POST['datepurchase'];
	$Amount = $_POST['amount'];
	$Purchasedby = $_POST['purchasedby'];
	$Receivedby = $_POST['receivedby'];
	
	$edit = $con->prepare("UPDATE hostelitems SET `i_items` = ?, `i_qty` = ?, `i_dpurchase` = ?, `i_amount` = ?, `i_purchaseby` = ?, `i_receiveby` = ? WHERE i_id = ?");
	$edit->execute(array($Items, $Quantity, $Datepurchase, $Amount, $Purchasedby, $Receivedby, $id));

	header('location:../hostel_unit.php');
	
}elseif(isset($_POST['apicupdate'])) {
	$id = $_POST['id'];
	$Items = $_POST['items'];
	$Quantity = $_POST['quantity'];
	$Datepurchase = $_POST['datepurchase'];
	$Amount = $_POST['amount'];
	$Purchasedby = $_POST['purchasedby'];
	$Receivedby = $_POST['receivedby'];
	
	$edit = $con->prepare("UPDATE apicitems SET `i_items` = ?, `i_qty` = ?, `i_dpurchase` = ?, `i_amount` = ?, `i_purchaseby` = ?, `i_receiveby` = ? WHERE i_id = ?");
	$edit->execute(array($Items, $Quantity, $Datepurchase, $Amount, $Purchasedby, $Receivedby, $id));

	header('location:../apic.php');
	
}elseif(isset($_POST['clinicupdate'])) {
	$id = $_POST['id'];
	$Items = $_POST['items'];
	$Quantity = $_POST['quantity'];
	$Datepurchase = $_POST['datepurchase'];
	$Amount = $_POST['amount'];
	$Purchasedby = $_POST['purchasedby'];
	$Receivedby = $_POST['receivedby'];
	
	$edit = $con->prepare("UPDATE clinicitems SET `i_items` = ?, `i_qty` = ?, `i_dpurchase` = ?, `i_amount` = ?, `i_purchaseby` = ?, `i_receiveby` = ? WHERE i_id = ?");
	$edit->execute(array($Items, $Quantity, $Datepurchase, $Amount, $Purchasedby, $Receivedby, $id));

	header('location:../clinic.php');
	
}elseif(isset($_POST['postharvestupdate'])) {
	$id = $_POST['id'];
	$Items = $_POST['items'];
	$Quantity = $_POST['quantity'];
	$Datepurchase = $_POST['datepurchase'];
	$Amount = $_POST['amount'];
	$Purchasedby = $_POST['purchasedby'];
	$Receivedby = $_POST['receivedby'];
	
	$edit = $con->prepare("UPDATE postharvestitems SET `i_items` = ?, `i_qty` = ?, `i_dpurchase` = ?, `i_amount` = ?, `i_purchaseby` = ?, `i_receiveby` = ? WHERE i_id = ?");
	$edit->execute(array($Items, $Quantity, $Datepurchase, $Amount, $Purchasedby, $Receivedby, $id));

header('location:../post_harvest.php');

}else{
	echo "Record Fialed to Update! Try Again.";
	header('location:../home.php');
}
?>