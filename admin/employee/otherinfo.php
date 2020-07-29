 <div class="col-lg-12" style="padding:5px;font-size:15px;background-color:#000;color:#fff">Work Experience</div>
<table class="table table-striped  table-hover table-bordered" style="font-size:12px" cellspacing="0">
   <thead style="text-align:center">
    <tr > 
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
    <tr>
      <td>From</td>
      <td>To</td>
    </tr>
  </thead> 
  <tbody>
    <?php     
      $mydb->setQuery("SELECT * FROM `tblworkexperience` WHERE `EMPLOYEEID`='".$emp->EMPLOYEEID."'");
      $cur = $mydb->loadResultList();

    foreach ($cur as $result) { 
      echo '<tr>';
      // echo '<td width="5%" align="center"></td>';
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
 <div class="col-lg-12" style="padding:5px;font-size:15px;background-color:#000;color:#fff">TRAINING PROGRAM (attended in the last 3 years, Start from the most recent)</div>
<table class="table table-striped  table-hover table-bordered" style="font-size:12px" cellspacing="0">
   <thead style="text-align:center">
    <tr >  
       <td rowspan="2">Title of Seminar/Conference/ Workshop/ Short Courses</td>
       <td colspan="2" width="200px" >Inclusive Dates<br/>
           (mm/dd/yyyy) </td>
      <td rowspan="2">No. of Hours </td>
       <td rowspan="2">Conducted/ Sponsored By</td>   
    </tr> 
    <tr>
      <td>From</td>
      <td>To</td>
    </tr>
  </thead> 
  <tbody>
    <?php     
      $mydb->setQuery("SELECT * FROM `tbltrainingprogram` WHERE `EMPLOYEEID`='".$emp->EMPLOYEEID."'");
      $cur = $mydb->loadResultList();

    foreach ($cur as $result) { 
      echo '<tr>'; 
      // echo '<td width="5%" align="center"></td>';
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
    $sql = "SELECT * FROM `tblotherinformation` WHERE `EMPLOYEEID` ='".$emp->EMPLOYEEID."'";
    $mydb->setQuery($sql);
    $otherres = $mydb->loadSingleResult(); 
?>
<div class="col-lg-12" style="padding:5px;font-size:15px;background-color:#000;color:#fff">OTHER INFORMATION</div> 
<table class="table   table-bordered" style="font-size:12px" cellspacing="0">
   <thead style="text-align:center">
    <tr >  
       <td rowspan="2">Refree/Guarantor</td>
       <td colspan="2" width="200px" >Employee's Compensation: Nomination of Beneficiaries</td>
    </tr>
  </thead> 
  <tbody>
   <tr>
     <td><textarea class="form-control"  readonly="true" style="border: 0px; background-color: #fff;" rows="10" name=""><?php echo isset($otherres->SKILLS) ? $otherres->SKILLS: ""; ?></textarea></td>
     <td><textarea class="form-control" readonly="true"  style="border: 0px; background-color: #fff;" rows="10" name=""><?php echo isset($otherres->NDRA) ? $otherres->NDRA: ""; ?></textarea></td>
   </tr> 
  </tbody>
  
</table>