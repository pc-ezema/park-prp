<?php
require_once("../include/initialize.php");
  if(!isset($_SESSION['EMPLOYEEID'])){
  redirect(web_root."index.php");
} 
    $employee = New Employee();
    $emp = $employee->single_employee($_SESSION['EMPLOYEEID']);

    $leavescredit = New LeavesCredit();
    $lcredits = $leavescredit->single_leavescredit($_SESSION['EMPLOYEEID']);
 
    $div = New Division();
    $div = $div->single_division($emp->DIVISIONID);
     
    $department = New Department();
    $dept = $department->single_departments($emp->DEPARTMENTID); 

    $fambackground = New FamilyBackground();
  	$fam = $fambackground->single_familybackground($_SESSION['EMPLOYEEID']);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- <title> PARK ADMINISTRATIVE SERVICES </title> -->
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link href="<?php echo web_root; ?>admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo web_root; ?>admin/css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?php echo web_root; ?>admin/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo web_root; ?>admin/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
 
   <link href="<?php echo web_root; ?>admin/css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo web_root; ?>admin/font/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <link href="<?php echo web_root; ?>admin/font/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- DataTables CSS -->
    <link href="<?php echo web_root; ?>admin/css/dataTables.bootstrap.css" rel="stylesheet">
 
     <!-- datetime picker CSS -->
<link href="<?php echo web_root; ?>css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
 <link href="<?php echo web_root; ?>css/datepicker.css" rel="stylesheet" media="screen">
 
 <link href="<?php echo web_root; ?>admin/css/costum.css" rel="stylesheet">
</head>
<body onload="window.print();">
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12" style="text-align:center;"> 
			<p style="font-size:14px">PARK ADMINISTRATIVE SERVICES</p> 
			<p style="font-size:12px">Ijale</p>
			<p style="font-size:14px">EMPLOYEE PERSONAL DATA SHEET</p> 
      </div>
      <!-- /.col -->
    </div>
 
   
   <table class="table table-striped table-bordered  table-responsive" style="font-size:12px"> 
    <tr>
      <td><label>Id :</label></td>
      <td colspan="5" ><?php echo $emp->EMPLOYEEID; ?></td>
       
    </tr>
    <tr>
      <td><label>Name :</label></td>
      <td> <?php echo  $emp->FNAME; ?></td> 
      <td colspan="2"> <?php echo $emp->LNAME; ?></td> 
      <td colspan="2"> <?php echo $emp->MNAME; ?></td>
    </tr>
     <tr style="background:#eee;">
      <td style="padding:0; border-right: 1px solid #fff;"></td>
      <td style="padding:0; border-right: 1px solid #fff;"> Firstname</td> 
      <td style="padding:0; border-right: 1px solid #fff;" colspan="2">Lastname</td> 
      <td style="padding:0; border-right: 1px solid #fff; " colspan="2"> Middlename</td>
    </tr>
    <tr>
      <td><label>Address :</label></td>
      <td colspan="5"  ><?php echo $emp->ADDRESS; ?></td> 
    </tr>
    <tr>
      <td ><label>Sex :</label></td> 
      <td colspan="2">
        <label><?php echo $emp->SEX; ?></label>
      </td>

      <td ><label>Date of Birth :</label></td>
      <td colspan="2"> <?php echo date_format(date_create($emp->BIRTHDATE),'m/d/Y'); ?></td>
       
    </tr> 
    <tr>
    <td><label>Age :</label></td>
      <td colspan="1" >
        <label><?php echo $emp->AGE; ?></label> 
    </td>
  <td><label>Place of Birth :</label></td>
      <td colspan="3" > <?php echo $emp->BIRTHPLACE; ?> </td>
    
    </tr>  
    <tr>
     <td  ><label>Contact No.</label></td>
      <td colspan="2"> <?php echo $emp->TELNO; ?></td> 
     <td  ><label>Civil Status</label></td>
      <td colspan="2"> <?php echo  $emp->CIVILSTATUS; ?> 
            </td> 
    </tr>
    <tr>
     <td  ><label>Citizenship</label></td>
      <td colspan="2"><?php echo $emp->CITIZENSHIP; ?></td> 
     <td  ><label>Religious Affiliation</label></td>
      <td colspan="2"> <?php echo $emp->RELIGION; ?></td> 
    </tr>
    <tr>
      <td><label>Height :</label></td>
      <td> <?php echo  $emp->HEIGHT; ?></td> 
        <td><label>Weight</label></td>
      <td> <?php echo $emp->WEIGHT; ?></td> 
      <td><label>Blood Type</label></td>
      <td> <?php echo $emp->BLOODTYPE; ?></td>
    </tr>
    <tr>
    <td><label>E-mail Address</label></td>
      <td colspan="2" > <?php echo $emp->EMAILADDRESS ?></td>
     <td  ><label>Cellphone No.</label></td>
      <td colspan="2"> <?php echo $emp->CELLNO ?></td>
    </tr> 
  </table>

 
     
    <table class="table table-striped  table-responsive" style="font-size:12px"> 
      <tr>
        <td colspan="6" style="background-color:#000;color:#fff;font-size:15px">Family Background</td> 
      </tr>
      <tr>
        <td colspan="6" >Spouse</td>
         
      </tr>
      <tr>
        <td>Surname</td>
        <td><?php echo $fam->SPOUSE_LNAME ?></td> 
        <td>First Name</td>
        <td><?php echo $fam->SPOUSE_FNAME ?></td> 
        <td>Middle Name</td>
        <td><?php echo $fam->SPOUSE_MNAME ?></td> 
      </tr> 
      <tr>
        <td>Occupation</td> 
        <td><?php echo $fam->OCCUPATION ?></td> 
        <td>Employer/Business Name</td>
        <td><?php echo $fam->EMPLOYER_BUSNAME ?></td> 
        <td>Business Address</td>
        <td><?php echo $fam->BUSADDRESS ?></td>  
      </tr> 
       <tr>
        <td>Employer/Bus. Tel. No.</td> 
        <td><?php echo $fam->EMPLOYER_BUSTELNO ?></td>  
        <td>Contact  No. of Spouse</td>
        <td colspan="4"><?php echo $fam->SPOUSE_CONTACTNO ?></td>  
      </tr> 
      <tr>
        <td colspan="6">Father</td> 
      </tr> 
      <tr>
        <td>Surname</td>
        <td><?php echo $fam->FATHER_LNAME ?></td> 
        <td>First Name</td>
        <td><?php echo $fam->FATHER_FNAME ?></td> 
        <td>Middle Name</td>
        <td><?php echo $fam->FATHER_MNAME ?></td> 
      </tr>
      <tr>
        <td colspan="6">Mother Maiden Name</td> 
      </tr> 
      <tr>
        <td>Surname</td>
        <td><?php echo $fam->MOTHER_LNAME ?></td> 
        <td>First Name</td>
        <td><?php echo $fam->MOTHER_FNAME ?></td> 
        <td>Middle Name</td>
        <td><?php echo $fam->MOTHER_MNAME ?></td> 
      </tr>
  </table>  
  <br/> 
  <br/> 
  <br/>
  <br/> 
  <br/> 
  <br/>
 
  <table class="table table-bordered" padding="0" style="font-size:12px">
    <tr>
      <td>Name of Child/Children<br/>
        (Write full name, sex and list all)</td>
      <td width="100px">Date of Birth
        (mm/dd/yyyy)</td> 
    </tr>
    <?php    
		$mydb->setQuery("SELECT * 
		        FROM   `tblchildren`  WHERE EMPLOYEEID='".$emp->EMPLOYEEID."'");
		$cur = $mydb->loadResultList();

		foreach ($cur as $result) { 
		echo '<tr>'; 
		echo '<td>' . $result->NAMEOFCHILD.'</a></td>';
		echo '<td>'. $result->DATEOFBIRTH.'</td>';  
		echo '</tr>';
		} 
		?>
  </table> 

  <table class="table table-striped  table-hover table-bordered" style="font-size:12px" cellspacing="0">
  
   <thead>
   <tr> 
      <th>Level</th>
      <th>School</th>
      <th>Degree</th>
      <th width="50px">Year Graduated</th>  
      <td width="100px">HIGHEST GRADE/LEVEL/ UNITS EARNED <br/>(if not graduated)</td>
      <td>INCLUSIVE DATES OF ATTENDANCE<br/><center>From - To</center>
      </td>
      <td>SCHOLARSHIP/ ACADEMIC HONORS RECEIVED</td> 
    </tr> 
    <tr>
      <td></td>
      <td></td>
    </tr>
  </thead> 
  <tbody>
  <?php    
      @$education = New EducationalBackground();
      @$educ     = $education->single_edubackground($_SESSION['EMPLOYEEID']); 
    ?>
    <tr>
      <td>Elementary</td>
      <td><?php echo isset($educ->ELEMENTARY_SCHOOL) ? $educ->ELEMENTARY_SCHOOL : 'None'; ?></td>
      <td></td>
      <td><?php echo isset($educ->ELEMENTARY_SY) ? $educ->ELEMENTARY_SY : 'None'; ?></td>
       <td><?php echo isset($educ->ELEMENTARY_A) ? $educ->ELEMENTARY_A : 'None'; ?></td>
      <td><?php echo isset($educ->ELEMENTARY_B) ? $educ->ELEMENTARY_B : 'None'; ?></td>
      <td><?php echo isset($educ->ELEMENTARY_C) ? $educ->ELEMENTARY_C : 'None'; ?></td>
    </tr>
    <tr>
      <td>Secondary</td>
      <td><?php echo isset($educ->SECONDARY_SCHOOL) ? $educ->SECONDARY_SCHOOL : 'None'; ?></td>
      <td></td>
      <td><?php echo isset($educ->SECONDARY_SY) ? $educ->SECONDARY_SY : 'None'; ?></td>
       <td><?php echo isset($educ->SECONDARY_A) ? $educ->SECONDARY_A : 'None'; ?></td>
      <td><?php echo isset($educ->SECONDARY_B) ? $educ->SECONDARY_B : 'None'; ?></td>
      <td><?php echo isset($educ->SECONDARY_C) ? $educ->SECONDARY_C : 'None'; ?></td>
    </tr>
    <tr>
      <td>Vocational/
        Trade Course
        </td>
      <td><?php echo isset($educ->VOCATIONAL_SCHOOL) ? $educ->VOCATIONAL_SCHOOL : 'None'; ?></td>
      <td></td>
      <td><?php echo isset($educ->VOCATIONAL_SY) ? $educ->VOCATIONAL_SY : 'None'; ?></td>
       <td><?php echo isset($educ->VOCATIONAL_A) ? $educ->VOCATIONAL_A : 'None'; ?></td>
      <td><?php echo isset($educ->VOCATIONAL_B) ? $educ->VOCATIONAL_B : 'None'; ?></td>
      <td><?php echo isset($educ->VOCATIONAL_C) ? $educ->VOCATIONAL_C : 'None'; ?></td>
    </tr>
    <tr>
      <td>College</td>
      <td><?php echo isset($educ->COLLEGE_SCHOOL) ? $educ->COLLEGE_SCHOOL : 'None'; ?></td>
      <td><?php echo isset($educ->COLLEGE_DEGREE) ? $educ->COLLEGE_DEGREE : 'None'; ?></td>
      <td><?php echo isset($educ->COLLEGE_SY) ? $educ->COLLEGE_SY : 'None'; ?></td>
       <td><?php echo isset($educ->COLLEGE_A) ? $educ->COLLEGE_A : 'None'; ?></td>
      <td><?php echo isset($educ->COLLEGE_B) ? $educ->COLLEGE_B : 'None'; ?></td>
      <td><?php echo isset($educ->COLLEGE_C) ? $educ->COLLEGE_C : 'None'; ?></td>
    </tr>
    <tr>
      <td>Graduate Studies</td>
      <td><?php echo isset($educ->GRADUATESTUDIES_1) ? $educ->GRADUATESTUDIES_1 : 'None'; ?></td>
      <td><?php echo isset($educ->GRADUATESTUDIES_2) ? $educ->GRADUATESTUDIES_2 : 'None'; ?></td>
      <td><?php echo isset($educ->GRADUATESTUDIES_3) ? $educ->GRADUATESTUDIES_3 : 'None'; ?></td>
       <td><?php echo isset($educ->GRADUATESTUDIES_A) ? $educ->GRADUATESTUDIES_A : 'None'; ?></td>
      <td><?php echo isset($educ->GRADUATESTUDIES_B) ? $educ->GRADUATESTUDIES_B : 'None'; ?></td>
      <td><?php echo isset($educ->GRADUATESTUDIES_C) ? $educ->GRADUATESTUDIES_C : 'None'; ?></td>      
    </tr> 
  </tbody>
  </table>

  <table class="table table-striped  table-hover table-bordered" style="font-size:12px" cellspacing="0">
   <thead>
   <tr>
        <td colspan="6" style="background-color:#000;color:#fff;font-size:15px">BANK INFORMATION</td> 
      </tr>
    <tr style="text-align:center"> 
    <td width="250px" rowspan="2">Account Holder's Name</td>
       <td  rowspan="2">Account Number</td> 
       <td  rowspan="2">Banker's Name</td> 
       <td  rowspan="2">Banker's Address</td>  
       <td colspan="2" >Type of Account</td>  
    </tr> 
    </thead> 
  <tbody>
    <?php     
      @$mydb->setQuery("SELECT * FROM `tblcivilserviceeligibility` WHERE  `EMPLOYEEID`='".$emp->EMPLOYEEID."'");
      @$cur = $mydb->loadResultList();

    foreach ($cur as $result) {  
      // echo '<td width="5%" align="center"></td>';
      echo '<tr>';
      echo '<td>'. $result->CAREER.'</td>';
      echo '<td>' . $result->RATING.'</a></td>'; 
      echo '<td>'. $result->DATEEXAMINATION.'</td>';
      echo '<td>'. $result->PLACEEXAMINATION.'</td>'; 
      echo '<td>'. $result->LICENSENO.'</td>'; 

      echo '</tr>';
    } 
    ?>
  </tbody> 
  
</table>

<table class="table table-striped  table-hover table-bordered" style="font-size:12px" cellspacing="0">
   <thead >
   <tr>
        <td colspan="7" style="background-color:#000;color:#fff;font-size:15px">WORK EXPERIENCE  (Include public and other private employment, Start from your current work)</td> 
      </tr>
    <tr style="text-align:center" > 
       <td colspan="2" width="200px" >Inclusive Dates<br/>
           (mm/dd/yyyy) </td>
        <td rowspan="2">Position Title </td>
        <td rowspan="2">Company/Office</td>
        <td rowspan="2">Monthly Salary</td> 
        <td rowspan="2">Status of Employment</td> 
        <td rowspan="2">Length of Service<br/>
        (no of years & months)
        </td>  
    </tr> 
    <tr style="text-align:center" >
      <td>From</td>
      <td>To</td>
    </tr>
  </thead> 
  <tbody>
    <?php     
      @$mydb->setQuery("SELECT * FROM `tblworkexperience` WHERE `EMPLOYEEID`='".$emp->EMPLOYEEID."'");
      @$cur = $mydb->loadResultList();

    foreach ($cur as $result) { 
      echo '<tr>'; 
      echo '<td>' . $result->DATEFROM.'</a></td>'; 
      echo '<td>'. $result->DATETO.'</td>';
      echo '<td>'. $result->WE_POSITION.'</td>';
      echo '<td>'. $result->COMPANY.'</td>';
      echo '<td>'. $result->MOTHLYSALARY.'</td>';
      echo '<td>'. $result->EMPLOYMENTSTATUS.'</td>';
      echo '<td>'. $result->SERVICELENGTH.'</td>'; 
      echo '</tr>'; 
    } 
    ?>
  </tbody>
  
</table>

<table class="table table-striped  table-hover table-bordered" style="font-size:12px" cellspacing="0">
   <thead >
     <tr>
        <td colspan="4" style="background-color:#000;color:#fff;font-size:15px">INVOLVEMENT IN OTHER EDUCATIONAL OR PROFESSIONAL ORGANIZATION</td> 
      </tr>
    <tr style="text-align:center"> 
       <td rowspan="2" width="250px">Name and Address of Organization</td>
       <td  colspan="2"  >Inclusive Dates<br/>
           (mm/dd/yyyy) </td> 
       <td rowspan="2" width="180px">Position</td>   
    </tr> 
    <tr style="text-align:center">
      <td>From</td>
      <td>To</td>
    </tr>
  </thead> 
  <tbody>
    <?php     
      @$mydb->setQuery("SELECT * FROM `tblinvolveothereducational` WHERE  `EMPLOYEEID`='".$emp->EMPLOYEEID."'");
      @$cur = $mydb->loadResultList();

    foreach ($cur as $result) {  
      // echo '<td width="5%" align="center"></td>';
      echo '<tr>';
      echo '<td>'. $result->NAME_ADDRESS_ORG.'</td>';
      echo '<td>' . $result->DATEFROM.'</a></td>'; 
      echo '<td>'. $result->DATETO.'</td>';
      echo '<td>'. $result->IOE_POSITION.'</td>';  
      echo '</tr>';
    } 
    ?>
  </tbody>
  
</table>
  <table class="table table-striped  table-hover table-bordered" style="font-size:12px" cellspacing="0">
   <thead >
   <tr>
        <td colspan="4" style="background-color:#000;color:#fff;font-size:15px">INVOLVEMENT IN OTHER CIVIC (NON-GOVERNMENT/PEOPLE) VOLUNTARY ORGANIZATION</td> 
      </tr>
    <tr style="text-align:center"> 
      <td rowspan="2" width="250px">Name and Address of Organization</td>
      <td  colspan="2"  >Inclusive Dates<br/>
      (mm/dd/yyyy) </td> 
      <td rowspan="2" width="180px">Position/ Nature of Work Assigned</td>   
    </tr> 
     <tr style="text-align:center">
      <td>From</td>
      <td>To</td>
    </tr>
  </thead> 
  <tbody>
    <?php     
      $mydb->setQuery("SELECT * FROM `tblinvolveothercivic` WHERE  `EMPLOYEEID`='".$emp->EMPLOYEEID."'");
      $cur = $mydb->loadResultList();

    foreach ($cur as $result) {  
      // echo '<td width="5%" align="center"></td>';
      echo '<tr>';
      echo '<td>'. $result->NAME_ADDRESS_ORG.'</td>';
      echo '<td>' . $result->DATEFROM.'</a></td>'; 
      echo '<td>'. $result->DATETO.'</td>';
      echo '<td>'. $result->IOC_POSITION.'</td>';  
      echo '</tr>';
    } 
    ?>
  </tbody>
  
</table>

<table class="table table-striped  table-hover table-bordered" style="font-size:12px" cellspacing="0">
   <thead >
   <tr> 
   <td colspan="5" style="background-color:#000;color:#fff;font-size:15px">TRAINING PROGRAM (attended in the last 3 years, Start from the most recent)</td> 
      </tr>
    <tr  style="text-align:center">  
       <td rowspan="2">Title of Seminar/Conference/ Workshop/ Short Courses</td>
       <td colspan="2" width="200px" >Inclusive Dates<br/>
           (mm/dd/yyyy) </td>
      <td rowspan="2">No. of Hours </td>
       <td rowspan="2">Conducted/ Sponsored By</td>  
    </tr> 
    <tr style="text-align:center">
      <td>From</td>
      <td>To</td>
    </tr>
  </thead> 
  <tbody>
    <?php     
      @$mydb->setQuery("SELECT * FROM `tbltrainingprogram` WHERE `EMPLOYEEID`='".$emp->EMPLOYEEID."'");
      @$cur = $mydb->loadResultList();

    foreach ($cur as $result) { 
      echo '<tr>';  
      echo '<td>'. $result->SEMINARTITLE.'</td>';
      echo '<td>' . $result->DATEFROM.'</a></td>'; 
      echo '<td>'. $result->DATETO.'</td>';
      echo '<td>'. $result->NOHOURS.'</td>';
      echo '<td>'. $result->SPONSOREDBY.'</td>'; 
      echo '</tr>'; 
    } 
    ?>
  </tbody>
  
</table>

<?php  
    @$sql = "SELECT * FROM `tblotherinformation` WHERE `EMPLOYEEID` ='".$emp->EMPLOYEEID."'";
    @$result = mysql_query($sql) or die(mysql_error()); 
    @$otherres = mysql_fetch_assoc($result);
?>
<div class="col-lg-12" style="padding:5px;font-size:15px;background-color:#000;color:#fff">OTHER INFORMATION</div> 
<table class="table   table-bordered" style="font-size:12px" cellspacing="0">
   <thead style="text-align:center">
    <tr >  
       <td rowspan="2">Refree/Guarantor</td>
       <td colspan="2" width="200px" >Employee's Compensation:Nomination of Beneficiaries</td>
    </tr>
  </thead> 
  <tbody>
   <tr>
     <td><textarea class="form-control" style="border: 0px;" rows="9" name=""><?php echo $otherres['SKILLS']; ?></textarea></td>
     <td><textarea class="form-control" style="border: 0px;" rows="9" name=""><?php echo $otherres['NDRA']; ?></textarea></td>
   </tr> 
  </tbody>
  
</table>
<br/>
<br/>
<br/>
<br/><br/><br/><br/><br/><br/><br/><br/>
 <table class="table   table-bordered" style="font-size:12px;text-align: center;" cellspacing="0">
   <tr>
     <td colspan="2">
      I, hereby affirm that, to the best of my knowledge, all information provided in this form is true and correct<br/>
      Note: - The Company reserves the right to terminate your appointment if any of the information provided in this form is eventually found to be untrue.
     </td>
     <td>
       <img src="<?php echo web_root. 'employee/'. $emp->EMPPHOTO; ?>" style="border: 1px solid #000;" width="150px" height="150px">
     </td>
   </tr>
   <tr>
     <td width="200px">Form No.</td>
     <td rowspan="2"><img src="" width="300px" height="50px"></td>
     <td rowspan="6"><img src="" width="150px" height="150px">
     RIGHT THUMBMARK</td>
   </tr>
   <tr>
     <td>Issued At</td> 
   </tr>
   <tr>
     <td></td>
     <td>Signature (Sign in the box)</td> 
   </tr>
   <tr>
     <td>Issued on <br/>
      (mm/dd/yyyy)
      </td>
     <td>Date Accomplished <br/>
          (mm/dd/yyyy)
      </td> 
   </tr>
   <tr>
     <td></td>
     <td></td> 
   </tr>

 </table>
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
</html>
