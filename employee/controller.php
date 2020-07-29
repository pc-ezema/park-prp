<?php
require_once ("../include/initialize.php");
	 if (!isset($_SESSION['EMPLOYEEID'])){
      redirect(web_root."index.php");
     }

$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) { 
	
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

	case 'photos' :
	UploadImage();
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

	 
	function doEditBasicInfo(){
	if(isset($_POST['save'])){

		if ( $_POST['FNAME'] == "" OR $_POST['LNAME'] == ""
			OR $_POST['MNAME'] == ""   OR $_POST['ADDRESS'] == "" 
			OR $_POST['TELNO'] == "") {
			$messageStats = false;
			message("All fields are required!","error");
			redirect('index.php');
		}else{	

			$birthdate = date_format(date_create($_POST['BIRTHDATE']),'Y-m-d');

			$age = date_diff(date_create($birthdate),date_create('today'))->y;
 
		 	if ($age < 20 ){
		       message("Invalid age. 20 years old and above is allowed.", "error");
		       redirect("index.php?view=view&id=".$_POST['EMPLOYEEID']);

		    }else{ 


				$emp = New Employee(); 
				$emp->EMPLOYEEID 		= $_SESSION['EMPLOYEEID'];
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

				$emp->update($_SESSION['EMPLOYEEID']); 

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

				$fambackground->update($_SESSION['EMPLOYEEID']); 


				message("Personal Information has been updated!", "success");
				redirect("index.php?");
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
		$emp->POSITION			= trim($_POST['POSITION']);
		$emp->update($_SESSION['EMPLOYEEID']); 

		message("Other Info has been updated!", "success");
		redirect("index.php"); 
	}

} 

function doChangeUsername(){
	if(isset($_POST['save'])){

				$emp = New Employee();  
				$emp->EMPUSERNAME	= $_POST['EMPUSERNAME'];
				$emp->update($_SESSION['EMPLOYEEID']); 

				$_SESSION['EMPUSERNAME'] = $_POST['EMPUSERNAME'];

				message("Username has been changed!", "success");
				redirect("index.php"); 
	} 
} 
function doChangePassword(){
	if(isset($_POST['save'])){

				$emp = New Employee();  
				$emp->EMPPASSWORD	= sha1($_POST['EMPPASSWORD']);
				$emp->update($_SESSION['EMPLOYEEID']); 

				$_SESSION['EMPPASSWORD'] = sha1($_POST['EMPPASSWORD']);


				message("Password has been changed!", "success");
				redirect("index.php"); 
	} 
} 

function doAddEduc(){
	global $mydb;
	if(isset($_POST['save'])){


 				$sql = "SELECT * FROM `tbleducbackground` WHERE  `EMPLOYEEID` ='".$_SESSION['EMPLOYEEID']."'";
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
					$educ->update($_SESSION['EMPLOYEEID']); 
 				}else{
 					$educ  = new EducationalBackground();
					$educ->EMPLOYEEID     			= $_SESSION['EMPLOYEEID'];
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
				redirect("index.php?tab=education");
	    	 
	 
	}

} 
function doAddFiles(){
	 global $mydb;
   
	$picture = UploadImage();
	$location = "photos/". $picture ;

	$sql = "INSERT INTO `tblfiles` (`EMPLOYEEID`, `EMPLOYEE`, `FILENAME`, `LOCATION`) 
	   VALUES ('".$_SESSION['EMPLOYEEID']."','".$_SESSION['FNAME']. ' '.$_SESSION['LNAME'] ."','".$_POST['filename']."','{$location}')";
	$mydb->setQuery($sql);
	$mydb->executeQuery();
			   

	message("File has been uploaded!", "success");
	redirect("index.php?tab=files");
	    	 
	


 } 
 
  function UploadImage(){
			$errofile = $_FILES['photo']['error'];
			$type = $_FILES['photo']['type'];
			$temp = $_FILES['photo']['tmp_name'];
			$myfile =$_FILES['photo']['name'];
		 	$location="photos/".$myfile;


		if ( $errofile > 0) {
				message("No Image Selected!", "error");
				redirect("index.php?view=view&id=". $_SESSION['EMPLOYEEID']);
		}else{
	 
				@$file=$_FILES['photo']['tmp_name'];
				@$image= addslashes(file_get_contents($_FILES['photo']['tmp_name']));
				@$image_name= addslashes($_FILES['photo']['name']); 
				@$image_size= getimagesize($_FILES['photo']['tmp_name']);

			if ($image_size==FALSE ) {
				message("Uploaded file is not an image!", "error");
				redirect("index.php?view=view&id=". $_SESSION['EMPLOYEEID']);
			}else{
					//uploading the file
					// move_uploaded_file($temp,"photos/" . $myfile);

					
						move_uploaded_file($temp,  "photos/" . $myfile);
		 	
					 	$emp = New Employee();
						$emp->EMPPHOTO	=  $location;
						$emp->update($_SESSION['EMPLOYEEID']);

						 redirect("index.php?view=view&id=".$_SESSION['EMPLOYEEID']);
						 
							
					}
			}
} 

function doDeleteEduc(){
		 
$id = 	$_GET['id'];

$educ = New EducationalBackground();
$educ->delete($id);


message("Employee(s) Educational Background already Deleted!","success");
redirect('index.php?tab=education');

}

function doDeleteFiles(){
global $mydb;
		 
$id = 	$_GET['id'];

$sql = "DELETE FROM `tblfiles` WHERE `FILEID`='{$id}'";
$mydb->setQuery($sql);
$mydb->executeQuery(); 



message("Files already Deleted!","success");
redirect('index.php?tab=files');

}
   
function doAddChild(){
	if(isset($_POST['save'])){

		$child = New Children(); 
		$child->EMPLOYEEID				= $_SESSION['EMPLOYEEID'];
		$child->NAMEOFCHILD				= $_POST['NAMEOFCHILD'];
		$child->DATEOFBIRTH				= $_POST['DATEOFBIRTH']; 
		$child->create(); 

		message("New Child has been added", "success");
		redirect("index.php"); 
	}

} 

function doEditChild(){
	if(isset($_POST['save'])){

		$child = New Children();  
		$child->NAMEOFCHILD				= $_POST['NAMEOFCHILD'];
		$child->DATEOFBIRTH				= $_POST['DATEOFBIRTH']; 
		$child->Update($_POST['id']); 

		message("Child has been updated", "success");
		redirect("index.php"); 
	}

} 

function doRemoveChild(){ 

		$child = New Children();   
		$child->delete($_GET['id']); 

		message("Child has been removed!", "success");
		redirect("index.php");  
} 

function doAddIOE(){
	if(isset($_POST['save'])){ 
		$IOE = New InvolveOtherEducational(); 
		$IOE->EMPLOYEEID				= $_SESSION['EMPLOYEEID'];
		$IOE->NAME_ADDRESS_ORG			= $_POST['NAME_ADDRESS_ORG'];
		$IOE->DATEFROM					= $_POST['DATEFROM']; 
		$IOE->DATETO					= $_POST['DATETO']; 
		$IOE->IOE_POSITION				= $_POST['IOE_POSITION']; 
		$IOE->create(); 

		message("New INVOLVEMENT IN OTHER EDUCATIONAL OR PROFESSIONAL ORGANIZATION has been added", "success");
		redirect("index.php?tab=education"); 
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
		redirect("index.php?tab=education");  
	}

} 
 function doRemoveIOE(){ 
 	
		$IOE = New InvolveOtherEducational();  
		$IOE->delete($_GET['id']); 

		message("INVOLVEMENT IN OTHER EDUCATIONAL OR PROFESSIONAL ORGANIZATION has been removed", "success");
		redirect("index.php?tab=education"); 

} 
function doAddIOC(){
	if(isset($_POST['save'])){ 
		$IOC = New InvolveOtherCivic(); 
		$IOC->EMPLOYEEID				= $_SESSION['EMPLOYEEID'];
		$IOC->NAME_ADDRESS_ORG			= $_POST['NAME_ADDRESS_ORG'];
		$IOC->DATEFROM					= $_POST['DATEFROM']; 
		$IOC->DATETO					= $_POST['DATETO']; 
		$IOC->IOC_POSITION				= $_POST['IOC_POSITION']; 
		$IOC->create(); 

		message("New INVOLVEMENT IN OTHER CIVIC (NON-GOVERNMENT/PEOPLE) VOLUNTARY ORGANIZATION has been added", "success");
		redirect("index.php?tab=education"); 
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
		redirect("index.php?tab=education"); 
	}

} 
 function doRemoveIOC(){ 

		$IOC = New InvolveOtherCivic();  
		$IOC->delete($_GET['id']); 

		message("INVOLVEMENT IN OTHER CIVIC (NON-GOVERNMENT/PEOPLE) VOLUNTARY ORGANIZATION has been removed", "success");
		redirect("index.php?tab=education");  
} 

function doAddCivilService(){  
	if(isset($_POST['save'])){
			$CSE = New CivilServiceEligibility();  
			$CSE->EMPLOYEEID = 					$_SESSION['EMPLOYEEID'];
			$CSE->CAREER = 						$_POST['CAREER'];
			$CSE->RATING = 						$_POST['RATING'];
			$CSE->DATEEXAMINATION = 			$_POST['DATEEXAMINATION'];
			$CSE->PLACEEXAMINATION = 			$_POST['PLACEEXAMINATION'];
			$CSE->LICENSENO = 					$_POST['LICENSENO'];
			$CSE->create(); 

			message("New Account Number has been saved", "success");
			redirect("index.php?tab=education");   
	}
} 

function doRemoveCivilService(){   

			$CSE = New CivilServiceEligibility();   
			$CSE->delete($_GET['id']); 

			message("Account Number has been removed", "success");
			redirect("index.php?tab=education");   
} 

function doAddWorkExperience(){  
	if(isset($_POST['save'])){ 

			$WE = New WorkExperience();  
			$WE->EMPLOYEEID = 					$_SESSION['EMPLOYEEID'];
			$WE->DATEFROM = 					$_POST['DATEFROM'];
			$WE->DATETO = 						$_POST['DATETO'];
			$WE->WE_POSITION = 					$_POST['WE_POSITION'];
			$WE->COMPANY = 						$_POST['COMPANY'];
			$WE->MOTHLYSALARY = 				$_POST['MOTHLYSALARY'];
			$WE->EMPLOYMENTSTATUS = 			$_POST['EMPLOYMENTSTATUS'];
			$WE->SERVICELENGTH = 				$_POST['SERVICELENGTH'];
			$WE->create(); 

			message("New Work Experience has been saved", "success");
			redirect("index.php?tab=otherinfo"); 
	}
} 
function doRemoveWorkExperience(){   

			$WE = New WorkExperience();   
			$WE->delete($_GET['id']); 

			message("Work Experience has been removed", "success");
			redirect("index.php?tab=otherinfo");   
} 
 
function doAddTrainingProgram(){  
	if(isset($_POST['save'])){ 

			$TP = New TrainingProgram();  
			$TP->EMPLOYEEID = 					$_SESSION['EMPLOYEEID'];
			$TP->DATEFROM = 					$_POST['DATEFROM'];
			$TP->DATETO = 						$_POST['DATETO'];
			$TP->SEMINARTITLE = 				$_POST['SEMINARTITLE'];
			$TP->SPONSOREDBY = 					$_POST['SPONSOREDBY'];
			$TP->NOHOURS = 						$_POST['NOHOURS']; 
			$TP->create(); 

			message("New Training Program has been saved", "success");
			redirect("index.php?tab=otherinfo"); 
	}
} 
function doRemoveTrainingProgram(){   

			$TP = New TrainingProgram();   
			$TP->delete($_GET['id']); 

			message("Training Program has been removed", "success");
			redirect("index.php?tab=otherinfo");   
} 

?>