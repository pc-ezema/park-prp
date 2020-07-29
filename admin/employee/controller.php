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

	case 'photos' :
	doupdateimage();
	break;
  
	case 'addleaves' :
	doAddLeaves();
	break;
   
    case 'addfiles' :
	doAddFiles();
	break;

	case 'checkid' :
	Check_StudentID();
	break;
	

	}
   
	function doInsert(){
		global $mydb;
		if(isset($_POST['save'])){


		if ( $_POST['FNAME'] == "" OR $_POST['LNAME'] == ""
			OR $_POST['MNAME'] == "" OR $_POST['DEPARTMENTID'] == "none"  OR $_POST['ADDRESS'] == "" 
			OR $_POST['TELNO'] == "") {
			$messageStats = false;
			message("All fields are required!","error");
			redirect('index.php?view=add');
		}else{	

			$birthdate =  $_POST['year'].'-'.$_POST['month'].'-'.$_POST['day'];

			$age = date_diff(date_create($birthdate),date_create('today'))->y;

			if ($age < 20){
			message("Invalid age. 20 years old and above is allowed.", "error");
			redirect("index.php?view=add");

			}else{
			 


				$sql = "SELECT * FROM tblemployees WHERE EMPLOYEEID='" .$_POST['EMPLOYEEID']. "'";
			 	$mydb->setQuery($sql);
			    $result = $mydb->executeQuery();
			    $maxrow = $mydb->num_rows($result);
			    
				if ($maxrow > 0) { 
					# code... 
					message("Employee ID already in use!", "error");
					redirect("index.php?view=add");
				}else{

					$datehired = date_format(date_create($_POST['DATEHIRED']),'Y-m-d');

					$emp = New Employee(); 
					$emp->EMPLOYEEID 		= $_POST['EMPLOYEEID'];
					$emp->FNAME				= $_POST['FNAME']; 
					$emp->LNAME				= $_POST['LNAME'];
					$emp->MNAME 	   		= $_POST['MNAME'];
					$emp->ADDRESS			= $_POST['ADDRESS'];  
					$emp->BIRTHDATE	 		= $birthdate;
					$emp->BIRTHPLACE		= $_POST['BIRTHPLACE'];  
					$emp->AGE			    = $age;
					$emp->SEX 				= $_POST['optionsRadios']; 
					$emp->TELNO				= $_POST['TELNO'];
					$emp->CIVILSTATUS		= $_POST['CIVILSTATUS']; 
					$emp->POSITION			= trim($_POST['POSITION']);
					$emp->DEPARTMENTID		= $_POST['DEPARTMENTID'];
					$emp->DIVISIONID		= $_POST['DIVISIONID'];
					$emp->WORKSTATS			= $_POST['WORKSTATS'];
					$emp->EMPUSERNAME		= $_POST['EMPLOYEEID'];
					$emp->EMPPASSWORD		= sha1($_POST['EMPLOYEEID']);
					$emp->DATEHIRED			=  $datehired;
					$emp->create(); 


					$family  = new FamilyBackground();
					$family->EMPLOYEEID     = $_POST['EMPLOYEEID'];
					$family->create();


					$educ  = new EducationalBackground();
					$educ->EMPLOYEEID     		= $_POST['EMPLOYEEID'];
					$educ->ELEMENTARY     		= 'Elementary';
					$educ->SECONDARY      		= 'Secondary';
					$educ->VOCATIONAL_COURSE    = 'Vocational/Trade Course';
					$educ->COLLEGE      		= 'College'; 
					$educ->create();



					$lcredits  = new LeavesCredit();
					$lcredits->EMPLOYEEID     = $_POST['EMPLOYEEID'];
					$lcredits->EMPLOYEE 	  = $_POST['FNAME']. ' ' .  $_POST['LNAME']; 
					$lcredits->VACATION 	  = 0;
					$lcredits->SICK 		  = 0;
					$lcredits->MATERNITY 	  = 0;
					$lcredits->SSS 			  = 0; 
					$lcredits->OTHERS 		  = 0;
					$lcredits->create();

							
						$autonum = New Autonumber(); 
						$autonum->auto_update('employeeid');

					message("New employee created successfully!", "success");
					redirect("index.php");

				}
				
			}
		 }
		}

	}

	function doEdit(){
	if(isset($_POST['save'])){

		if ( $_POST['FNAME'] == "" OR $_POST['LNAME'] == ""
			OR $_POST['MNAME'] == "" OR $_POST['DEPARTMENTID'] == "none"  OR $_POST['ADDRESS'] == "" 
			OR $_POST['TELNO'] == "") {
			$messageStats = false;
			message("All fields are required!","error");
			redirect('index.php?view=add');
		}else{	

			$birthdate =  $_POST['year'].'-'.$_POST['month'].'-'.$_POST['day'];

			$age = date_diff(date_create($birthdate),date_create('today'))->y;
		 	if ($age < 20 ){
		       message("Invalid age. 20 years old and above is allowed.", "error");
		       redirect("index.php?view=edit&id=".$_POST['EMPLOYEEID']);

		    }else{

		    	$datehired = date_format(date_create($_POST['DATEHIRED']),'Y-m-d');
 
				$emp = New Employee(); 
				// $emp->EMPLOYEEID 		= $_POST['EMPLOYEEID'];
				$emp->FNAME				= $_POST['FNAME']; 
				$emp->LNAME				= $_POST['LNAME'];
				$emp->MNAME 	   		= $_POST['MNAME'];
				$emp->ADDRESS			= $_POST['ADDRESS'];  
				$emp->BIRTHDATE	 		= $birthdate;
				$emp->BIRTHPLACE		= $_POST['BIRTHPLACE'];  
				$emp->AGE			    = $age;
				$emp->SEX 				= $_POST['optionsRadios']; 
				$emp->TELNO				= $_POST['TELNO'];
				$emp->CIVILSTATUS		= $_POST['CIVILSTATUS']; 
				$emp->POSITION			=  trim($_POST['POSITION']);
				$emp->WORKSTATS			= $_POST['WORKSTATS'];
				$emp->DEPARTMENTID		= $_POST['DEPARTMENTID'];
				$emp->DIVISIONID		= $_POST['DIVISIONID'];
				$emp->DATEHIRED			=  $datehired;

				$emp->update($_POST['EMPLOYEEID']);


				$lcredits  = new LeavesCredit();
				$lcredits->EMPLOYEEID     = $_POST['EMPLOYEEID'];
				$lcredits->EMPLOYEE 	  = $_POST['FNAME']. ' ' .  $_POST['LNAME']; 
				if(isset($_POST['MATERNITY'])) $lcredits->MATERNITY  = $_POST['MATERNITY'] ;
			  
				// $lcredits->OTHERS 		  = $_POST['OTHERS'];
				$lcredits->update($_POST['EMPLOYEEID']);
		 

				message("Employee has been updated!", "success");
				// redirect("index.php?view=view&id=".$_POST['EMPLOYEEID']);
		       redirect("index.php?view=edit&id=".$_POST['EMPLOYEEID']);
	    	}


		}
  	
	 
	}

} 
	function doDelete(){
		
		// if (isset($_POST['selector'])==''){
		// message("Select the records first before you delete!","error");
		// redirect('index.php');
		// }else{

		// $id = $_POST['selector'];
		// $key = count($id);

		// for($i=0;$i<$key;$i++){

		// 	$subj = New Student();
		// 	$subj->delete($id[$i]);

		
				$id = 	$_GET['id'];

				$emp = New Employee();
	 		 	$emp->delete($id);
			 
		
		// }
			message("Employee(s) already Deleted!","success");
			redirect('index.php');
		// }

		
	}

 
 
?>