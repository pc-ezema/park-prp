<?php
require_once ("../../include/initialize.php");
	 if (!isset($_SESSION['USERID'])){
      redirect(web_root."admin/index.php");
     }

$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'add' :
	doInsert();
	break;
	
	case 'edit' :
	doEdit();
	break;
	
	case 'delete' :
	doDelete();
	break; 
 
	}
   
	function doInsert(){
		if(isset($_POST['save'])){


		if ($_POST['DIVISION'] == "" ) {
			$messageStats = false;
			message("All field is required!","error");
			redirect('index.php?view=add');
		}else{	

			$dept = New Division(); 
		    $dept->DIVISION 		= $_POST['DIVISION']; 
			$dept->DIVISIONHEAD 	= $_POST['DIVISIONHEAD']; 
			$dept->create(); 

			message("New [". $_POST['DIVISION'] ."] created successfully!", "success");
			redirect("index.php");
			
		}
		}

	}

	function doEdit(){
	if(isset($_POST['save'])){  

			$dept = New Division(); 
			$dept->DIVISION 		= $_POST['DIVISION']; 
			$dept->DIVISIONHEAD 	= $_POST['DIVISIONHEAD']; 
			$res = $dept->update($_POST['DIVISIONID']);

			  message("[". $_POST['DIVISION'] ."] has been updated!", "success");
			redirect("index.php");
			 
			
		}
	}


	function doDelete(){
		
	 
				$id = 	$_GET['id'];

				$dept = New Division();
	 		 	$dept->delete($id);
			 
			message("Division already Deleted!","info");
			redirect('index.php');
		 
		
	}

	 
 
?>