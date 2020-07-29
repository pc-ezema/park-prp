<div class="col-lg-12" style="padding:5px;font-size:15px;background-color:#000;color:#fff">EDUCATIONAL BACKGROUND</div>
 
<form class="form-horizontal span6 " action="controller.php?action=addschool" method="POST">
<div class="scrollx">
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
      <td><textarea rows="4" cols="26"  name="ELEMENTARY_SCHOOL" class="form-control" ><?php echo isset($educ->ELEMENTARY_SCHOOL) ? $educ->ELEMENTARY_SCHOOL : ''; ?></textarea></td>
      <td></td>
      <td><textarea rows="4"  name="ELEMENTARY_SY" class="form-control" ><?php echo isset($educ->ELEMENTARY_SY) ? $educ->ELEMENTARY_SY : ''; ?></textarea></td>
      <td><textarea class="form-control" rows="4" name="ELEMENTARY_A" cols="26"><?php echo isset($educ->ELEMENTARY_A) ? $educ->ELEMENTARY_A : ''; ?></textarea></td>
      <td><textarea class="form-control" rows="4" name="ELEMENTARY_B" cols="26"><?php echo isset($educ->ELEMENTARY_B) ? $educ->ELEMENTARY_B : ''; ?></textarea></td>
      <td><textarea class="form-control" rows="4" name="ELEMENTARY_C" cols="26"><?php echo isset($educ->ELEMENTARY_C) ? $educ->ELEMENTARY_C : ''; ?></textarea></td>
    </tr>
    <tr>
      <td>Secondary</td>
      <td><textarea rows="4" cols="26" name="SECONDARY_SCHOOL" class="form-control" ><?php echo isset($educ->SECONDARY_SCHOOL) ? $educ->SECONDARY_SCHOOL : ''; ?></textarea></td>
      <td></td>
      <td><textarea rows="4"  name="SECONDARY_SY" class="form-control" ><?php echo isset($educ->SECONDARY_SY) ? $educ->SECONDARY_SY : ''; ?></textarea></td>
      <td><textarea class="form-control" rows="4" name="SECONDARY_A" cols="26"><?php echo isset($educ->SECONDARY_A) ? $educ->SECONDARY_A : ''; ?></textarea></td>
      <td><textarea class="form-control" rows="4" name="SECONDARY_B" cols="26"><?php echo isset($educ->SECONDARY_B) ? $educ->SECONDARY_B : ''; ?></textarea></td>
      <td><textarea class="form-control" rows="4" name="SECONDARY_C" cols="26"><?php echo isset($educ->SECONDARY_C) ? $educ->SECONDARY_C : ''; ?></textarea></td>
    </tr>
    <tr>
      <td>Vocational/
        Trade Course
        </td>
      <td><textarea rows="4" cols="26" name="VOCATIONAL_SCHOOL" class="form-control" ><?php echo isset($educ->VOCATIONAL_SCHOOL) ? $educ->VOCATIONAL_SCHOOL : ''; ?></textarea></td>
      <td></td>
      <td><textarea rows="4"  name="VOCATIONAL_SY" class="form-control" ><?php echo isset($educ->VOCATIONAL_SY) ? $educ->VOCATIONAL_SY : ''; ?></textarea></td>
      <td><textarea class="form-control" rows="4" name="VOCATIONAL_A" cols="26"><?php echo isset($educ->VOCATIONAL_A) ? $educ->VOCATIONAL_A : ''; ?></textarea></td>
      <td><textarea class="form-control" rows="4" name="VOCATIONAL_B" cols="26"><?php echo isset($educ->VOCATIONAL_B) ? $educ->VOCATIONAL_B : ''; ?></textarea></td>
      <td><textarea class="form-control" rows="4" name="VOCATIONAL_C" cols="26"><?php echo isset($educ->VOCATIONAL_C) ? $educ->VOCATIONAL_C : ''; ?></textarea></td>
    </tr>
    <tr>
      <td>College</td>
      <td><textarea rows="4" cols="26" name="COLLEGE_SCHOOL" class="form-control" ><?php echo isset($educ->COLLEGE_SCHOOL) ? $educ->COLLEGE_SCHOOL : ''; ?></textarea></td>
      <td><textarea rows="4" cols="26" name="COLLEGE_DEGREE" class="form-control" ><?php echo isset($educ->COLLEGE_DEGREE) ? $educ->COLLEGE_DEGREE : ''; ?></textarea></td>
      <td><textarea rows="4"  name="COLLEGE_SY" class="form-control"><?php echo isset($educ->COLLEGE_SY) ? $educ->COLLEGE_SY : ''; ?></textarea></td>
      <td><textarea class="form-control" rows="4" name="COLLEGE_A" cols="26"><?php echo isset($educ->COLLEGE_A) ? $educ->COLLEGE_A : ''; ?></textarea></td>
      <td><textarea class="form-control" rows="4" name="COLLEGE_B" cols="26"><?php echo isset($educ->COLLEGE_B) ? $educ->COLLEGE_B : ''; ?></textarea></td>
      <td><textarea class="form-control" rows="4" name="COLLEGE_C" cols="26"><?php echo isset($educ->COLLEGE_C) ? $educ->COLLEGE_C : ''; ?></textarea></td>
    </tr>
    <tr>
      <td>Graduate Studies</td>
      <td><textarea rows="4" cols="26" name="GRADUATESTUDIES_1" class="form-control" ><?php echo isset($educ->GRADUATESTUDIES_1) ? $educ->GRADUATESTUDIES_1 : ''; ?></textarea></td>
      <td><textarea rows="4" cols="26" type="" name="GRADUATESTUDIES_2" class="form-control" ><?php echo isset($educ->GRADUATESTUDIES_2) ? $educ->GRADUATESTUDIES_2 : ''; ?></textarea></td>
      <td><textarea rows="4"  name="GRADUATESTUDIES_3" class="form-control" ><?php echo isset($educ->GRADUATESTUDIES_3) ? $educ->GRADUATESTUDIES_3 : ''; ?></textarea></td>
      <td><textarea class="form-control" rows="4" name="GRADUATESTUDIES_A" cols="26"><?php echo isset($educ->GRADUATESTUDIES_A) ? $educ->GRADUATESTUDIES_A : ''; ?></textarea></td>
      <td><textarea class="form-control" rows="4" name="GRADUATESTUDIES_B" cols="26"><?php echo isset($educ->GRADUATESTUDIES_B) ? $educ->GRADUATESTUDIES_B : ''; ?></textarea></td>
      <td><textarea class="form-control" rows="4" name="GRADUATESTUDIES_C" cols="26"><?php echo isset($educ->GRADUATESTUDIES_C) ? $educ->GRADUATESTUDIES_C : ''; ?></textarea></td>
    </tr> 
    <tr>
      <td colspan="7">
       
         <button class="btn btn-mod btn-sm" name="save" type="submit" ><span class="fa fa-save fw-fa"></span>  Save</button> 
     
    </div> 
      </td>
    </tr>
  </tbody>
  
</table>
</div>
</form>
<div class="col-lg-12" style="padding:5px;font-size:15px;background-color:#000;color:#fff">BANK INFORMATION</div>
 <div class="col-lg-12" style="padding:3px">
    <a  data-toggle="lightbox" href="addcivilservice.php" class="btn btn-sm btn-info fa fa-plus-circle fw-fa">Add</a>
  </div>
<table class="table table-striped  table-hover table-bordered" style="font-size:12px" cellspacing="0">
   <thead style="text-align:center">
    <tr style="text-align:center"> 
    <td width="250px" rowspan="2">Account Holder's Name</td>
       <td  rowspan="2">Account Number</td> 
       <td  rowspan="2">Banker's Name</td> 
       <td  rowspan="2">Banker's Address</td>  
       <td colspan="2" >Type of Account</td> 
       <td rowspan="2">Action</td> 
    </tr> 
  </thead> 
  <tbody>
    <?php     
      $mydb->setQuery("SELECT * FROM `tblcivilserviceeligibility` WHERE  `EMPLOYEEID`='".$emp->EMPLOYEEID."'");
      $cur = $mydb->loadResultList();

    foreach ($cur as $result) {  
      // echo '<td width="5%" align="center"></td>';
      echo '<tr>';
      echo '<td>'. $result->CAREER.'</td>';
      echo '<td>' . $result->RATING.'</a></td>'; 
      echo '<td>'. $result->DATEEXAMINATION.'</td>';
      echo '<td>'. $result->PLACEEXAMINATION.'</td>'; 
      echo '<td>'. $result->LICENSENO.'</td>'; 
      echo '<td>  
             <a title="Remove" href="controller.php?action=deletecivilservice&id='.$result->CSEID.'" class="btn btn-danger btn-xs" 
             ><span class="fa fa-trash-o fw-fa">Remove</span> </a>
             </td>';  

      echo '</tr>';
    } 
    ?>
  </tbody> 
  
</table>



<div class="col-lg-12" style="padding:5px;font-size:15px;background-color:#000;color:#fff">INVOLVEMENT IN OTHER EDUCATIONAL OR PROFESSIONAL ORGANIZATION</div>
 <div class="col-lg-12" style="padding:3px">
    <a  data-toggle="lightbox" href="addinvolveothereducational.php" class="btn btn-sm btn-info fa fa-plus-circle fw-fa">Add</a>
  </div>
<table class="table table-striped  table-hover table-bordered" style="font-size:12px" cellspacing="0">
   <thead style="text-align:center">
    <tr> 
       <td rowspan="2" width="250px">Name and Address of Organization</td>
       <td  colspan="2"  >Inclusive Dates<br/>
           (mm/dd/yyyy) </td> 
       <td rowspan="2" width="180px">Position</td>  
       <td rowspan="2">Action</td> 
    </tr> 
    <tr>
      <td>From</td>
      <td>To</td>
    </tr>
  </thead> 
  <tbody>
    <?php     
      $mydb->setQuery("SELECT * FROM `tblinvolveothereducational` WHERE  `EMPLOYEEID`='".$emp->EMPLOYEEID."'");
      $cur = $mydb->loadResultList();

    foreach ($cur as $result) {  
      // echo '<td width="5%" align="center"></td>';
      echo '<tr>';
      echo '<td>'. $result->NAME_ADDRESS_ORG.'</td>';
      echo '<td>' . $result->DATEFROM.'</a></td>'; 
      echo '<td>'. $result->DATETO.'</td>';
      echo '<td>'. $result->IOE_POSITION.'</td>'; 
      echo '<td>  
             <a title="Remove" href="controller.php?action=deleteIOE&id='.$result->IOEID.'" class="btn btn-danger btn-xs" 
             ><span class="fa fa-trash-o fw-fa">Remove</span> </a>
             </td>';  

      echo '</tr>';
    } 
    ?>
  </tbody>
  
</table>
<div class="col-lg-12" style="padding:5px;font-size:15px;background-color:#000;color:#fff">INVOLVEMENT IN OTHER CIVIC (NON-GOVERNMENT/PEOPLE) VOLUNTARY ORGANIZATION</div>
 <div class="col-lg-12" style="padding:3px">
    <a  data-toggle="lightbox" href="addinvolveothercivic.php" class="btn btn-sm btn-info fa fa-plus-circle fw-fa">Add</a>
  </div>
<table class="table table-striped  table-hover table-bordered" style="font-size:12px" cellspacing="0">
   <thead style="text-align:center">
    <tr> 
      <td rowspan="2" width="250px">Name and Address of Organization</td>
      <td  colspan="2"  >Inclusive Dates<br/>
      (mm/dd/yyyy) </td> 
      <td rowspan="2" width="180px">Position/ Nature of Work Assigned</td>  
      <td rowspan="2">Action</td> 
    </tr> 
     <tr>
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
      echo '<td>  
             <a title="Remove" href="controller.php?action=deleteIOC&id='.$result->IOCID.'" class="btn btn-danger btn-xs" 
             ><span class="fa fa-trash-o fw-fa">Remove</span> </a>
             </td>';  

      echo '</tr>';
    } 
    ?>
  </tbody>
  
</table>

