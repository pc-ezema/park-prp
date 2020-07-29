<?php
  if (isset($_POST['submit'])) {
    # code...
    $sql = "SELECT * FROM `tblotherinformation` WHERE `EMPLOYEEID` ='".$emp->EMPLOYEEID."'";
    $mydb->setQuery($sql);
    $result = $mydb->executeQuery();
    $maxrow = $mydb->num_rows($result);


        $EMPID = $emp->EMPLOYEEID;
        $EMPNAME = $_SESSION['FNAME'] . ' ' . $_SESSION['LNAME'];
        $SKILLS  = $_POST['SKILLS'];
        $NDRA  = $_POST['NDRA'];

        if ($maxrow > 0 ) {
          # code...
          $sql = "UPDATE `tblotherinformation` SET  `SKILLS`='{$SKILLS}', `NDRA`='{$NDRA}'";
           $mydb->setQuery($sql);
           $mydb->executeQuery(); 

        }else{

          $sql = "INSERT INTO `tblotherinformation` (`EMPLOYEEID`, `EMPNAME`, `SKILLS`, `NDRA` ) VALUES ('{$EMPID}','{$EMPNAME}','{$SKILLS}','{$NDRA}')";
          $mydb->setQuery($sql);
          $mydb->executeQuery(); 
         
        }
  
        

        message("Other information has been saved!", "success");
        redirect("index.php?view=view&tab=otherinfo");
  }

?>
 <div class="col-lg-12" style="padding:5px;font-size:15px;background-color:#000;color:#fff">Work Experience</div>
 <div class="col-lg-12" style="padding:3px">
    <a  data-toggle="lightbox" href="addworkexperience.php" class="btn btn-sm btn-info fa fa-plus-circle fw-fa">Add</a>
  </div>
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
       <td rowspan="2">Action</td> 
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
      echo '<td>  
             <a title="Remove" href="controller.php?action=deleteworkexperience&id='.$result->WEID.'" class="btn btn-danger btn-xs" 
             ><span class="fa fa-trash-o fw-fa">Remove</span> </a>
             </td>';  
    } 
    ?>
  </tbody>
  
</table>
 <div class="col-lg-12" style="padding:5px;font-size:15px;background-color:#000;color:#fff">TRAINING PROGRAM (attended in the last 3 years, Start from the most recent)</div>
 <div class="col-lg-12" style="padding:3px">
    <a  data-toggle="lightbox" href="addtrainingprogram.php" class="btn btn-sm btn-info fa fa-plus-circle fw-fa">Add</a>
  </div>
<table class="table table-striped  table-hover table-bordered" style="font-size:12px" cellspacing="0">
   <thead style="text-align:center">
    <tr >  
       <td rowspan="2">Title of Seminar/Conference/ Workshop/ Short Courses</td>
       <td colspan="2" width="200px" >Inclusive Dates<br/>
           (mm/dd/yyyy) </td>
      <td rowspan="2">No. of Hours </td>
       <td rowspan="2">Conducted/ Sponsored By</td>  
       <td rowspan="2">Action</td> 
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
      echo '<td>  
             <a title="Remove" href="controller.php?action=deletetrainingprogram&id='.$result->TPID.'" class="btn btn-danger btn-xs" 
             ><span class="fa fa-trash-o fw-fa">Remove</span> </a>
             </td>';  
    } 
    ?>
  </tbody>
  
</table>

<form method="POST" action="index.php?view=view&tab=otherinfo">

<div class="col-lg-12" style="padding:5px;font-size:15px;background-color:#000;color:#fff">OTHER INFORMATION</div> 
<table class="table   table-bordered" style="font-size:12px" cellspacing="0">
   <thead style="text-align:center">
    <tr >  
       <td rowspan="2">Refree/Guarantor</td>
       <td colspan="2" width="200px" >Employee's Compensation: Nomination of Beneficiaries</td>
    </tr>
  </thead> 
  <tbody>
   <?php  
        $sql = "SELECT * FROM `tblotherinformation` WHERE `EMPLOYEEID` ='".$emp->EMPLOYEEID."'";
        $mydb->setQuery($sql);
        $otherres = $mydb->executeQuery(); 
    ?>
   <tr>
     <td><textarea class="form-control" rows="9" name="SKILLS"><?php echo $otherres->SKILLS; ?></textarea></td>
     <td><textarea class="form-control" rows="9" name="NDRA" ><?php echo $otherres->NDRA; ?></textarea></td>
   </tr>
   <tr>
     <td colspan="2">
       <input type="submit" class="btn btn-primary btn-xs" name="submit" value="Save">
     </td>
   </tr>

  </tbody>
  
</table>
</form>