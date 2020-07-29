<div class="col-lg-12" style="padding:5px;font-size:15px;background-color:#000;color:#fff">EDUCATIONAL BACKGROUND</div>
 
<form class="form-horizontal span6 " action="controller.php?action=addschool" method="POST">
 <table class="table table-striped  table-hover table-bordered" style="font-size:12px" cellspacing="0">
   <thead>
    <tr> 
       <th width="150px">Level</th>
      <th>School</th>
       <th>Degree</th>
       <th width="150px">Year Graduated</th>   
      <td width="100px">HIGHEST GRADE/LEVEL/ UNITS EARNED <br/>(if not graduated)</td>
      <td>INCLUSIVE DATES OF ATTENDANCE<br/><center>From - To</center>
</td>
      <td>SCHOLARSHIP/ ACADEMIC HONORS RECEIVED</td> 
    </tr> 
  </thead> 
  <tbody>
  <?php    

      @$education = New EducationalBackground();
      @$educ     = $education->single_edubackground($emp->EMPLOYEEID); 
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
</form>
<div class="col-lg-12" style="padding:5px;font-size:15px;background-color:#000;color:#fff">BANK INFORMATION</div>
 <table class="table table-striped  table-hover table-bordered" style="font-size:12px" cellspacing="0">
   <thead style="text-align:center">
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
      echo '</tr>';
    } 
    ?>
  </tbody> 
  
</table>



<div class="col-lg-12" style="padding:5px;font-size:15px;background-color:#000;color:#fff">INVOLVEMENT IN OTHER EDUCATIONAL OR PROFESSIONAL ORGANIZATION</div> 
<table class="table table-striped  table-hover table-bordered" style="font-size:12px" cellspacing="0">
   <thead style="text-align:center">
    <tr> 
       <td rowspan="2" width="250px">Name and Address of Organization</td>
       <td  colspan="2"  >Inclusive Dates<br/>
           (mm/dd/yyyy) </td> 
       <td rowspan="2" width="180px">Position</td>   
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

      echo '</tr>';
    } 
    ?>
  </tbody>
  
</table>
<div class="col-lg-12" style="padding:5px;font-size:15px;background-color:#000;color:#fff">INVOLVEMENT IN OTHER CIVIC (NON-GOVERNMENT/PEOPLE) VOLUNTARY ORGANIZATION</div> 
<table class="table table-striped  table-hover table-bordered" style="font-size:12px" cellspacing="0">
   <thead style="text-align:center">
    <tr> 
      <td rowspan="2" width="250px">Name and Address of Organization</td>
      <td  colspan="2"  >Inclusive Dates<br/>
      (mm/dd/yyyy) </td> 
      <td rowspan="2" width="180px">Position/ Nature of Work Assigned</td>   
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

      echo '</tr>';
    } 
    ?>
  </tbody>
  
</table>

