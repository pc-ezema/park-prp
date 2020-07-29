<?php
require_once("../../include/initialize.php");
if(!isset($_SESSION['USERID'])){
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

	case 'editbasicinfo' :
	doEditBasicInfo();
	break;  

	case 'editotherinfo' :
	doEditOtherInfo();
	break;  

	case 'changeusername' :
	doChangeUsername();
	break;  

	case 'changepassword' :
	doChangePassword();
	break; 

	case 'addschool' :
	doAddEduc();
	break; 

	case 'addfiles' :
	doAddFiles();
	break; 

	case 'deleteschool' :
	doDeleteEduc();
	break;    

	case 'deletefile' :
	doDeleteFiles();
	break; 

	case 'updatecredits' :
	doUpdateCredits();
	break;

	case 'applyleave' :
	doApplyLeaves();
	break;
	case 'editapplyleave' :
	doEditApplyLeaves();
	break;

	case 'addchild' :
	doAddChild();
	break;

	case 'editchild' :
	doEditChild();
	break;

	case 'deletechild' :
	doRemoveChild();
	break;

	case 'addIOE' :
	doAddIOE();
	break;

	case 'editIOE' :
	doEditIOE();
	break;

	case 'deleteIOE' :
	doRemoveIOE();
	break;

	case 'addIOC' :
	doAddIOC();
	break;

	case 'editIOC' :
	doEditIOC();
	break;

	case 'deleteIOC' :
	doRemoveIOC();
	break;

	case 'addcivilservice' :
	doAddCivilService();
	break;

	case 'deletecivilservice' :
	doRemoveCivilService();
	break;

	case 'addworkexperience' :
	doAddWorkExperience();
	break;

	case 'deleteworkexperience' :
	doRemoveWorkExperience();
	break;

	case 'addtrainingprogram' :
	doAddTrainingProgram();
	break;

	case 'deletetrainingprogram' :
	doRemoveTrainingProgram();
	break;
 
	}
   
	function doInsert(){
		global $mydb;
		if(isset($_POST['save'])){
 

		if ($_POST['FNAME'] == "" OR $_POST['LNAME'] == "" OR $_POST['U_USERNAME'] == "" OR $_POST['U_PASS'] == "") {
			$messageStats = false;
			message("All field is required!","error");
			redirect('index.php?view=add');
		}else{	

			$sql = "SELECT * FROM tbluseraccounts WHERE USERNAME='" .$_POST['U_USERNAME']."'";
			 $mydb->setQuery($sql);
		    $result = $mydb->executeQuery();
		    $maxrow = $mydb->num_rows($result);
			if ($maxrow > 0) {
				# code...
				message("Username is already taken.", "error");
				redirect('index.php?view=add');
			}else{

				
			$user = New User();
			$user->USERID 		= $_POST['user_id'];
			$user->FULLNAME     = $_POST['FNAME'] . ' ' .$_POST['LNAME'];
			$user->USERNAME		= $_POST['U_USERNAME'];
			$user->PASS			= sha1($_POST['U_PASS']);
			// $user->UROLE		=  $_POST['U_ROLE']; 
			$user->UROLE		=  'HR'; 
			$user->create();

			$div = New Division();
			$division = $div->divisionforuser();

			$query = "SELECT * FROM `tbldivision` limit 1";
			$mydb->setQuery($sql);
		    $div = $mydb->loadSingleResult();  

			$query = "SELECT * FROM `tbldepartment` limit 1"; 
 			$mydb->setQuery($sql);
		    $dept = $mydb->loadSingleResult();  

			$emp = New Employee(); 
			$emp->EMPLOYEEID 		= $_POST['user_id'];
			$emp->FNAME				= $_POST['FNAME']; 
			$emp->LNAME				= $_POST['LNAME']; 
			$emp->EMPUSERNAME		= $_POST['U_USERNAME'];
			$emp->EMPPASSWORD		=  sha1($_POST['U_PASS']);
			$emp->WORKSTATS			= 'Regular';
			$emp->DEPARTMENTID		= $dept->DEPARTMENTID;
			$emp->DIVISIONID		= $div->DIVISIONID;
			$emp->create(); 


			$family  = new FamilyBackground();
			$family->EMPLOYEEID     = $_POST['user_id'];
			$family->create();

			$lcredits  = new LeavesCredit();
			$lcredits->EMPLOYEEID     = $_POST['user_id'];
			$lcredits->EMPLOYEE 	  = $_POST['FNAME'] . ' ' .$_POST['LNAME'];
			$lcredits->VACATION 	  = 0;
			$lcredits->SICK 		  = 0;
			$lcredits->MATERNITY 	  = 0;
			$lcredits->SSS 			  = 0;
			$lcredits->EMERGENCY  	  = 0;
			$lcredits->OTHERS 		  = 0;
			$lcredits->create();

			 
				$autonum = New Autonumber(); 
				$autonum->auto_update('employeeid');

			message("New [". $_POST['FNAME'] . ' ' .$_POST['LNAME'] ."] created successfully!", "success");
			redirect("index.php");

			} 
		}
		}

	}

	function doEdit(){
	if(isset($_POST['save'])){


 			$user = New User();
		   	$user->FULLNAME 		= $_POST['U_NAME'];
			$user->USERNAME		= $_POST['U_USERNAME'];
			$user->PASS		=sha1($_POST['U_PASS']);
			$user->UROLE			=  $_POST['U_ROLE'];
			$user->update($_POST['USERID']);

			message("[". $_POST['U_NAME'] ."] has been updated!", "success");
			redirect("index.php"); 
 
			
		}
	}


	function doDelete(){
		
		// if (isset($_POST['selector'])==''){
		// message("Select the records first before you delete!","info");
		// redirect('index.php');
		// }else{

		// $id = $_POST['selector'];
		// $key = count($id);

		// for($i=0;$i<$key;$i++){

		// 	$user = New User();
		// 	$user->delete($id[$i]);

		
				$id = 	$_GET['id'];

				$user = New User();
	 		 	$user->delete($id);
			 
			message("User already Deleted!","info");
			redirect('index.php');
		// }
		// }

		
	}

	function doupdateimage(){
 
			$errofile = $_FILES['photo']['error'];
			$type = $_FILES['photo']['type'];
			$temp = $_FILES['photo']['tmp_name'];
			$myfile =$_FILES['photo']['name'];
		 	$location="photos/".$myfile;


		if ( $errofile > 0) {
				message("No Image Selected!", "error");
				redirect("index.php?view=view&id=". $_SESSION['USERID']);
		}else{
	 
				@$file=$_FILES['photo']['tmp_name'];
				@$image= addslashes(file_get_contents($_FILES['photo']['tmp_name']));
				@$image_name= addslashes($_FILES['photo']['name']); 
				@$image_size= getimagesize($_FILES['photo']['tmp_name']);

			if ($image_size==FALSE ) {
				message("Uploaded file is not an image!", "error");
				redirect("index.php?view=view&id=". $_SESSION['USERID']);
			}else{
					//uploading the file
					// move_uploaded_file($temp,"photos/" . $myfile);

					
						move_uploaded_file($temp,  "../../employee/photos/" . $myfile);

						$user = New User();
						$user->USERPHOTO 			= $location;
						$user->update($_SESSION['USERID']);
						

		 	
					 	$emp = New Employee();
						$emp->EMPPHOTO	=  $location;
						$emp->update($_SESSION['USERID']);

						 redirect("index.php?view=view&id=".$_SESSION['USERID']);
						 
							
					}
			}
			 
		}

function doEditBasicInfo(){
	if(isset($_POST['save'])){

		if ( $_POST['FNAME'] == "" OR $_POST['LNAME'] == ""
			OR $_POST['MNAME'] == ""   OR $_POST['ADDRESS'] == "" 
			OR $_POST['TELNO'] == "") {
			$messageStats = false;
			message("All fields are required!","error");
			redirect("index.php?view=view&id=".$_SESSION['USERID']);
		}else{	

			$birthdate = date_format(date_create($_POST['BIRTHDATE']),'Y-m-d');

			$age = date_diff(date_create($birthdate),date_create('today'))->y;
 
		 	if ($age < 20 ){
		       message("Invalid age. 20 years old and above is allowed.", "error");
		      redirect("index.php?view=view&id=".$_SESSION['USERID']);

		    }else{
 
				$emp = New Employee();  
				$emp->FNAME				= strtoupper($_POST['FNAME']); 
				$emp->LNAME				= strtoupper($_POST['LNAME']);
				$emp->MNAME 	   		= strtoupper($_POST['MNAME']);
				$emp->ADDRESS			= strtoupper($_POST['ADDRESS']);  
				$emp->BIRTHDATE	 		= $birthdate;
				$emp->BIRTHPLACE		= strtoupper($_POST['BIRTHPLACE']);  
				$emp->AGE			    = $age;
				$emp->SEX 				= $_POST['optionsRadios']; 
				$emp->TELNO				= $_POST['TELNO'];
				$emp->CITIZENSHIP		= strtoupper($_POST['CITIZENSHIP']); 
				$emp->RELIGION			= strtoupper($_POST['RELIGION']);  
				$emp->HEIGHT			= strtoupper($_POST['HEIGHT']); 
				$emp->WEIGHT			= strtoupper($_POST['WEIGHT']); 
				$emp->BLOODTYPE			= strtoupper($_POST['BLOODTYPE']); 
				$emp->EMAILADDRESS		= $_POST['EMAILADDRESS']; 
				$emp->CELLNO			= strtoupper($_POST['CELLNO']);   
				$emp->CIVILSTATUS 		= $_POST['CIVILSTATUS'];

				$emp->update($_SESSION['USERID']); 

				$fambackground = New FamilyBackground();
				$fambackground->SPOUSE_FNAME 		= $_POST['SPOUSE_FNAME'];
				$fambackground->SPOUSE_MNAME 		= $_POST['SPOUSE_MNAME'];
				$fambackground->SPOUSE_LNAME 		= $_POST['SPOUSE_LNAME'];
				$fambackground->OCCUPATION 			= $_POST['OCCUPATION'];
				$fambackground->EMPLOYER_BUSNAME 	= $_POST['EMPLOYER_BUSNAME'];
				$fambackground->BUSADDRESS 			= $_POST['BUSADDRESS'];
				$fambackground->EMPLOYER_BUSTELNO 	= $_POST['EMPLOYER_BUSTELNO'];
				$fambackground->SPOUSE_CONTACTNO 	= $_POST['SPOUSE_CONTACTNO'];
				$fambackground->FATHER_FNAME 		= $_POST['FATHER_FNAME'];
				$fambackground->FATHER_MNAME 		= $_POST['FATHER_MNAME'];
				$fambackground->FATHER_LNAME 		= $_POST['FATHER_LNAME'];
				$fambackground->MOTHER_FNAME 		= $_POST['MOTHER_FNAME'];
				$fambackground->MOTHER_MNAME 		= $_POST['MOTHER_MNAME'];
				$fambackground->MOTHER_LNAME 		= $_POST['MOTHER_LNAME'];

				$fambackground->update($_SESSION['USERID']); 


				$lcredits  = new LeavesCredit(); 
				$lcredits->EMPLOYEE 	  = $_POST['FNAME']. ' ' .  $_POST['LNAME']; 
				$lcredits->update($_SESSION['USERID']);

				message("Basic Info has been updated!", "success");
				redirect("index.php?view=view&id=".$_SESSION['USERID']);
	    	}


		}
  	
	 
	}

} 

function doEditOtherInfo(){
	if(isset($_POST['save'])){

		$emp = New Employee(); 
		$emp->TINNO				= $_POST['TINNO'];
		$emp->SSSNO				= $_POST['SSSNO'];
		$emp->PHNO				= $_POST['PHNO'];
		$emp->PAGIBIGNO			= $_POST['PAGIBIGNO'];
		$emp->GSISNO			= $_POST['GSISNO'];
		$emp->POSITION			=  trim($_POST['POSITION']);
		$emp->DEPARTMENTID		= $_POST['DEPARTMENTID'];
		$emp->DIVISIONID		= $_POST['DIVISIONID'];
		$emp->update($_SESSION['USERID']); 

		message("Other Info has been updated!", "success");
		redirect("index.php?view=view&id=".$_SESSION['USERID']);
	}

} 
function doUpdateCredits(){

	if(isset($_POST['save'])){
		$lcredits  = new LeavesCredit();  
		// $lcredits->VACATION 	  = $_POST['VACATION'];
		// $lcredits->SICK 		  = $_POST['SICK'];
		$lcredits->MATERNITY 	  = $_POST['MATERNITY'];
		// $lcredits->SSS 			  = $_POST['SSS'];
		$lcredits->EMERGENCY  	  = $_POST['EMERGENCY'];
		$lcredits->OTHERS 		  = $_POST['OTHERS'];
		$lcredits->update($_SESSION['USERID']);

		message("Leave Credits has been updated!", "success");
		redirect("index.php?view=view&id=".$_SESSION['USERID']);
	}

}
 
function doChangeUsername(){
	if(isset($_POST['save'])){

		$emp = New Employee();  
		$emp->EMPUSERNAME	= $_POST['EMPUSERNAME'];
		$emp->update($_SESSION['USERID']); 

		$user = New User(); 
		$user->USERNAME		= $_POST['EMPUSERNAME']; 
		$user->update($_SESSION['USERID']);


		$_SESSION['USERNAME'] = $_POST['EMPUSERNAME'];



		message("Username has been changed!", "success");
		redirect("index.php?view=view&id=".$_SESSION['USERID']);
	} 
} 
function doChangePassword(){
	if(isset($_POST['save'])){

				$emp = New Employee();  
				$emp->EMPPASSWORD	= sha1($_POST['EMPPASSWORD']);
				$emp->update($_SESSION['USERID']); 

				$user = New User(); 
				$user->PASS		=sha1($_POST['EMPPASSWORD']); 
				$user->update($_SESSION['USERID']);


				$_SESSION['PASS'] = $_POST['EMPPASSWORD'];

				message("Password has been changed!", "success");
				redirect("index.php?view=view&id=".$_SESSION['USERID']);
	} 
} 

function doAddEduc(){
	global $mydb;
	if(isset($_POST['save'])){
 
 
				// $educ = New EducationalBackground(); 
				// $educ->EMPLOYEEID 		= $_SESSION['USERID'];
				// $educ->LEVEL			= $_POST['LEVEL']; 
				// $educ->SCHOOL			= $_POST['SCHOOL'];
				// $educ->DEGREE 	   		= $_POST['DEGREE'];
				// $educ->YRGRADUATED		= $_POST['YRGRADUATED'];    
				// $educ->create(); 
			$sql = "SELECT * FROM `tbleducbackground` WHERE  `EMPLOYEEID` ='".$_SESSION['USERID']."'";
 		    $mydb->setQuery($sql);
		    $result = $mydb->executeQuery();
		    $maxrow = $mydb->num_rows($result);

 						if ($maxrow > 0 ) {
 					# code...
	 				$educ = New EducationalBackground();  
					$educ->ELEMENTARY_SCHOOL		= $_POST['ELEMENTARY_SCHOOL']; 
					$educ->ELEMENTARY_SY			= $_POST['ELEMENTARY_SY'];
					$educ->ELEMENTARY_A				= $_POST['ELEMENTARY_A'];
					$educ->ELEMENTARY_B				= $_POST['ELEMENTARY_B'];
					$educ->ELEMENTARY_C				= $_POST['ELEMENTARY_C'];
					$educ->SECONDARY_SCHOOL 	   	= $_POST['SECONDARY_SCHOOL'];
					$educ->SECONDARY_SY				= $_POST['SECONDARY_SY']; 
					$educ->SECONDARY_A				= $_POST['SECONDARY_A'];
					$educ->SECONDARY_B				= $_POST['SECONDARY_B'];
					$educ->SECONDARY_C				= $_POST['SECONDARY_C'];   
					$educ->VOCATIONAL_SCHOOL		= $_POST['VOCATIONAL_SCHOOL'];    
					$educ->VOCATIONAL_SY			= $_POST['VOCATIONAL_SY']; 
					$educ->VOCATIONAL_A				= $_POST['VOCATIONAL_A'];
					$educ->VOCATIONAL_B				= $_POST['VOCATIONAL_B'];
					$educ->VOCATIONAL_C				= $_POST['VOCATIONAL_C'];   
					$educ->COLLEGE_SCHOOL			= $_POST['COLLEGE_SCHOOL'];    
					$educ->COLLEGE_DEGREE			= $_POST['COLLEGE_DEGREE'];    
					$educ->COLLEGE_SY				= $_POST['COLLEGE_SY']; 
					$educ->COLLEGE_A				= $_POST['COLLEGE_A'];
					$educ->COLLEGE_B				= $_POST['COLLEGE_B'];
					$educ->COLLEGE_C				= $_POST['COLLEGE_C'];
					$educ->GRADUATESTUDIES_1    	= $_POST['GRADUATESTUDIES_1'];
					$educ->GRADUATESTUDIES_2		= $_POST['GRADUATESTUDIES_2'];    
					$educ->GRADUATESTUDIES_3		= $_POST['GRADUATESTUDIES_3']; 
					$educ->GRADUATESTUDIES_A		= $_POST['GRADUATESTUDIES_A'];
					$educ->GRADUATESTUDIES_B		= $_POST['GRADUATESTUDIES_B'];
					$educ->GRADUATESTUDIES_C		= $_POST['GRADUATESTUDIES_C'];   
					$educ->update($_SESSION['USERID']); 
 				}else{
 					$educ  = new EducationalBackground();
					$educ->EMPLOYEEID     			= $_SESSION['USERID'];
					$educ->ELEMENTARY     			= 'Elementary';
					$educ->SECONDARY      			= 'Secondary';
					$educ->VOCATIONAL_COURSE    	= 'Vocational/Trade Course';
					$educ->COLLEGE      			= 'College';
					$educ->ELEMENTARY_SCHOOL		= $_POST['ELEMENTARY_SCHOOL']; 
					$educ->ELEMENTARY_SY			= $_POST['ELEMENTARY_SY'];
					$educ->ELEMENTARY_A				= $_POST['ELEMENTARY_A'];
					$educ->ELEMENTARY_B				= $_POST['ELEMENTARY_B'];
					$educ->ELEMENTARY_C				= $_POST['ELEMENTARY_C'];
					$educ->SECONDARY_SCHOOL 	   	= $_POST['SECONDARY_SCHOOL'];
					$educ->SECONDARY_SY				= $_POST['SECONDARY_SY']; 
					$educ->SECONDARY_A				= $_POST['SECONDARY_A'];
					$educ->SECONDARY_B				= $_POST['SECONDARY_B'];
					$educ->SECONDARY_C				= $_POST['SECONDARY_C'];   
					$educ->VOCATIONAL_SCHOOL		= $_POST['VOCATIONAL_SCHOOL'];    
					$educ->VOCATIONAL_SY			= $_POST['VOCATIONAL_SY']; 
					$educ->VOCATIONAL_A				= $_POST['VOCATIONAL_A'];
					$educ->VOCATIONAL_B				= $_POST['VOCATIONAL_B'];
					$educ->VOCATIONAL_C				= $_POST['VOCATIONAL_C'];   
					$educ->COLLEGE_SCHOOL			= $_POST['COLLEGE_SCHOOL'];    
					$educ->COLLEGE_DEGREE			= $_POST['COLLEGE_DEGREE'];    
					$educ->COLLEGE_SY				= $_POST['COLLEGE_SY']; 
					$educ->COLLEGE_A				= $_POST['COLLEGE_A'];
					$educ->COLLEGE_B				= $_POST['COLLEGE_B'];
					$educ->COLLEGE_C				= $_POST['COLLEGE_C'];
					$educ->GRADUATESTUDIES_1    	= $_POST['GRADUATESTUDIES_1'];
					$educ->GRADUATESTUDIES_2		= $_POST['GRADUATESTUDIES_2'];    
					$educ->GRADUATESTUDIES_3		= $_POST['GRADUATESTUDIES_3']; 
					$educ->GRADUATESTUDIES_A		= $_POST['GRADUATESTUDIES_A'];
					$educ->GRADUATESTUDIES_B		= $_POST['GRADUATESTUDIES_B'];
					$educ->GRADUATESTUDIES_C		= $_POST['GRADUATESTUDIES_C'];        
					$educ->create();
 				}
  

				message("Educational Background created successfully!", "success");
				redirect("index.php?view=view&id=".$_SESSION['USERID']);
	    	 
	 
	}

} 
function doAddFiles(){
	 global $mydb;
   
	$picture = UploadImage();
	$location = "photos/". $picture ;

	$sql = "INSERT INTO `tblfiles` (`EMPLOYEEID`, `EMPLOYEE`, `FILENAME`, `LOCATION`) 
	   VALUES ('".$_SESSION['USERID']."','".$_SESSION['FNAME']. ' '.$_SESSION['LNAME'] ."','".$_POST['filename']."','{$location}')";
	 $mydb->setQuery($sql);
     $mydb->executeQuery(); 

	message("File has been uploaded!", "success");
	redirect("index.php?view=view&id=".$_SESSION['USERID']);
	    	 
	


 } 
function doDeleteEduc(){
		 
$id = 	$_GET['id'];

$educ = New EducationalBackground();
$educ->delete($id);


message("Educational Background already Deleted!","success");
redirect("index.php?view=view&id=".$_SESSION['USERID']);

}

function doDeleteFiles(){
	global $mydb;
		 
$id = 	$_GET['id'];

$sql = "DELETE FROM `tblfiles` WHERE `FILEID`='{$id}'";
 $mydb->setQuery($sql);
 $mydb->executeQuery(); 



message("Files already Deleted!","success");
redirect("index.php?view=view&id=".$_SESSION['USERID']);

}

 function UploadImage(){
			$target_dir = "photos/";
			$target_file = $target_dir . date("dmYhis") . basename($_FILES["picture"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			
			
			if($imageFileType != "jpg" || $imageFileType != "png" || $imageFileType != "jpeg"
		|| $imageFileType != "gif" ) {
				 if (move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file)) {
					return  date("dmYhis") . basename($_FILES["picture"]["name"]);
				}else{
					echo "Error Uploading File";
					exit;
				}
			}else{
					echo "File Not Supported";
					exit;
				}
}

function doAddChild(){
	if(isset($_POST['save'])){

		$child = New Children(); 
		$child->EMPLOYEEID				= $_SESSION['USERID'];
		$child->NAMEOFCHILD				= $_POST['NAMEOFCHILD'];
		$child->DATEOFBIRTH				= $_POST['DATEOFBIRTH']; 
		$child->create(); 

		message("New Child has been added", "success");
		redirect("index.php?view=view&id=".$_SESSION['USERID']); 
	}

} 

function doEditChild(){
	if(isset($_POST['save'])){

		$child = New Children();  
		$child->NAMEOFCHILD				= $_POST['NAMEOFCHILD'];
		$child->DATEOFBIRTH				= $_POST['DATEOFBIRTH']; 
		$child->Update($_POST['id']); 

		message("Child has been updated", "success");
		redirect("index.php?view=view&id=".$_SESSION['USERID']); 
	}

} 

function doRemoveChild(){ 

		$child = New Children();   
		$child->delete($_GET['id']); 

		message("Child has been removed!", "success");
		redirect("index.php?view=view&id=".$_SESSION['USERID']);  
} 

function doAddIOE(){
	if(isset($_POST['save'])){ 
		$IOE = New InvolveOtherEducational(); 
		$IOE->EMPLOYEEID				= $_SESSION['USERID'];
		$IOE->NAME_ADDRESS_ORG			= $_POST['NAME_ADDRESS_ORG'];
		$IOE->DATEFROM					= $_POST['DATEFROM']; 
		$IOE->DATETO					= $_POST['DATETO']; 
		$IOE->IOE_POSITION				= $_POST['IOE_POSITION']; 
		$IOE->create(); 

		message("New INVOLVEMENT IN OTHER EDUCATIONAL OR PROFESSIONAL ORGANIZATION has been added", "success");
		redirect("index.php?view=view&id=".$_SESSION['USERID']); 
	}

} 
 function doEditIOE(){
	if(isset($_POST['save'])){

		$IOE = New InvolveOtherEducational();  
		$IOE->NAME_ADDRESS_ORG			= $_POST['NAME_ADDRESS_ORG'];
		$IOE->DATEFROM					= $_POST['DATEFROM']; 
		$IOE->DATETO					= $_POST['DATETO']; 
		$IOE->IOE_POSITION				= $_POST['IOE_POSITION']; 
		$IOE->update($_GET['id']); 

		message("INVOLVEMENT IN OTHER EDUCATIONAL OR PROFESSIONAL ORGANIZATION has been updated", "success");
		redirect("index.php?view=view&id=".$_SESSION['USERID']);  
	}

} 
 function doRemoveIOE(){ 
 	
		$IOE = New InvolveOtherEducational();  
		$IOE->delete($_GET['id']); 

		message("INVOLVEMENT IN OTHER EDUCATIONAL OR PROFESSIONAL ORGANIZATION has been removed", "success");
		redirect("index.php?view=view&id=".$_SESSION['USERID']); 

} 
function doAddIOC(){
	if(isset($_POST['save'])){ 
		$IOC = New InvolveOtherCivic(); 
		$IOC->EMPLOYEEID				= $_SESSION['USERID'];
		$IOC->NAME_ADDRESS_ORG			= $_POST['NAME_ADDRESS_ORG'];
		$IOC->DATEFROM					= $_POST['DATEFROM']; 
		$IOC->DATETO					= $_POST['DATETO']; 
		$IOC->IOC_POSITION				= $_POST['IOC_POSITION']; 
		$IOC->create(); 

		message("New INVOLVEMENT IN OTHER CIVIC (NON-GOVERNMENT/PEOPLE) VOLUNTARY ORGANIZATION has been added", "success");
		redirect("index.php?view=view&id=".$_SESSION['USERID']); 
	}

} 
 function doEditIOC(){
	if(isset($_POST['save'])){

		$IOC = New InvolveOtherCivic();  
		$IOC->NAME_ADDRESS_ORG			= $_POST['NAME_ADDRESS_ORG'];
		$IOC->DATEFROM					= $_POST['DATEFROM']; 
		$IOC->DATETO					= $_POST['DATETO']; 
		$IOC->IOC_POSITION				= $_POST['IOC_POSITION']; 
		$IOC->update($_GET['id']); 

		message("INVOLVEMENT IN OTHER CIVIC (NON-GOVERNMENT/PEOPLE) VOLUNTARY ORGANIZATION has been updated", "success");
		redirect("index.php?view=view&id=".$_SESSION['USERID']); 
	}

} 
 function doRemoveIOC(){ 

		$IOC = New InvolveOtherCivic();  
		$IOC->delete($_GET['id']); 

		message("INVOLVEMENT IN OTHER CIVIC (NON-GOVERNMENT/PEOPLE) VOLUNTARY ORGANIZATION has been removed", "success");
		redirect("index.php?view=view&id=".$_SESSION['USERID']);  
} 

function doAddCivilService(){  
	if(isset($_POST['save'])){
			$CSE = New CivilServiceEligibility();  
			$CSE->EMPLOYEEID = 					$_SESSION['USERID'];
			$CSE->CAREER = 						$_POST['CAREER'];
			$CSE->RATING = 						$_POST['RATING'];
			$CSE->DATEEXAMINATION = 			$_POST['DATEEXAMINATION'];
			$CSE->PLACEEXAMINATION = 			$_POST['PLACEEXAMINATION'];
			$CSE->LICENSENO = 					$_POST['LICENSENO'];
			$CSE->create(); 

			message("New Account Information has been saved", "success");
			redirect("index.php?view=view&id=".$_SESSION['USERID']);   
	}
} 

function doRemoveCivilService(){   

			$CSE = New CivilServiceEligibility();   
			$CSE->delete($_GET['id']); 

			message("Account Information has been removed", "success");
			redirect("index.php?view=view&id=".$_SESSION['USERID']);   
} 

function doAddWorkExperience(){  
	if(isset($_POST['save'])){ 

			$WE = New WorkExperience();  
			$WE->EMPLOYEEID = 					$_SESSION['USERID'];
			$WE->DATEFROM = 					$_POST['DATEFROM'];
			$WE->DATETO = 						$_POST['DATETO'];
			$WE->WE_POSITION = 					$_POST['WE_POSITION'];
			$WE->COMPANY = 						$_POST['COMPANY'];
			$WE->MOTHLYSALARY = 				$_POST['MOTHLYSALARY'];
			$WE->EMPLOYMENTSTATUS = 			$_POST['EMPLOYMENTSTATUS'];
			$WE->SERVICELENGTH = 				$_POST['SERVICELENGTH'];
			$WE->create(); 

			message("New Work Experience has been saved", "success");
			redirect("index.php?view=view&id=".$_SESSION['USERID']); 
	}
} 
function doRemoveWorkExperience(){   

			$WE = New WorkExperience();   
			$WE->delete($_GET['id']); 

			message("Work Experience has been removed", "success");
			redirect("index.php?view=view&id=".$_SESSION['USERID']);   
} 
 
function doAddTrainingProgram(){  
	if(isset($_POST['save'])){ 

			$TP = New TrainingProgram();  
			$TP->EMPLOYEEID = 					$_SESSION['USERID'];
			$TP->DATEFROM = 					$_POST['DATEFROM'];
			$TP->DATETO = 						$_POST['DATETO'];
			$TP->SEMINARTITLE = 				$_POST['SEMINARTITLE'];
			$TP->SPONSOREDBY = 					$_POST['SPONSOREDBY'];
			$TP->NOHOURS = 						$_POST['NOHOURS']; 
			$TP->create(); 

			message("New Training Program has been saved", "success");
			redirect("index.php?view=view&id=".$_SESSION['USERID']); 
	}
} 
function doRemoveTrainingProgram(){   

			$TP = New TrainingProgram();   
			$TP->delete($_GET['id']); 

			message("Training Program has been removed", "success");
			redirect("index.php?view=view&id=".$_SESSION['USERID']);   
} 
 
?>