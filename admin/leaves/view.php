<?php
  if(!isset($_SESSION['USERID'])){
  redirect(web_root."index.php"); 
}

   $sql = "SELECT * FROM `tblleaves` WHERE `LEAVEID`=" . $_GET['id'];
    $result = mysql_query($sql) or die(mysql_error());
    $resleave = mysql_fetch_assoc($result);
    $empid = $resleave['EMPLOYEEID'];

    if ($resleave['LEAVETYPE']=='Others') {
      # code...
      $leavetype = 'Service Credits';
      }else{
      $leavetype = $resleave['LEAVETYPE'];
      }

    $employee = New Employee();
    $emp = $employee->single_employee($empid);

    $leavescredit = New LeavesCredit();
    $lcredits = $leavescredit->single_leavescredit($empid);
 
     
    $department = New Department();
    $dept = $department->single_departments($emp->DEPARTMENTID);

    $division = New Division();
    $div = $division->single_division($emp->DIVISIONID);

 

?>
<style type="text/css">
  .underline {
    border-bottom:1px solid #000;
  }
  .tbl{
    width: 100%;
    padding: 0px;
  }
  h1{
    color : #000;
  }
</style>
<section id="feature" class="transparent-bg">
        <div class="container">
<div class="row">
      <div class="col-xs-12 wow fadeInDown" style="padding:0px;" align="center">
        <h1>PARK ADMINISTRATION SERVICES</h1> 
         <h2>Ijale</h2>
        <h1 class="page-header">REQUEST FOR LEAVE OF ABSENCE</h1> 
      </div> 
    </div>  
      <div class="row">
                <div class="features"> 
                  <table class="tbl">
                    <tr>
                      <td width="7.14%"></td>
                      <td width="7.14%"></td>
                      <td width="7.14%"></td>
                      <td width="7.14%"></td>
                      <td width="7.14%"></td>
                      <td width="7.14%"></td>
                      <td width="7.14%"></td>
                      <td width="7.14%"></td>
                      <td width="7.14%"></td>
                      <td width="7.14%"></td>
                      <td width="7.14%"></td>
                      <td width="7.14%"></td>
                      <td width="7.14%"></td>
                      <td width="7.14%"></td>
                    </tr>
                    <tr>
                      <td colspan="2">Name</td>
                      <td colspan="5"  class="underline"><?php echo $emp->FNAME . ' ' . $emp->LNAME  . ' ' . $emp->MNAME; ?></td> 
                      <td colspan="2">Date Filling</td>
                      <td class="underline" colspan="5"><?php echo date('m/d/Y'); ?></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td colspan="2">(GivenName)</td>
                      <td>(Surname)</td>
                      <td>(MiddleName)</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td> 
                    </tr>
                    <tr>
                    <tr>
                      <td colspan="2">Position</td>
                      <td colspan="3"class="underline"><?php echo $emp->POSITION; ?></td>
                      <td >Department</td>
                      <td  colspan="3"class="underline"><?php echo $dept->DEPARTMENT; ?></td>
                      <td  >Division</td>
                      <td  colspan="4" class="underline"><?php echo $div->DIVISION; ?></td> 
                    </tr>
                    <tr>
                      <td colspan="3">Type of Leave</td>
                      <td colspan="5" class="underline"><?php echo $leavetype; ?></td>
                      <td colspan="2">Category</td>
                      <td colspan="4" class="underline"><?php echo $resleave['LEAVECATEGORY']; ?></td> 
                    </tr>
                    <tr>
                      <td colspan="3">Cause of Leave</td>
                      <td colspan="11" class="underline"><?php echo $resleave['LEAVECAUSE']; ?></td> 
                    </tr> 
                    <tr>
                      <td colspan="2">No. of Days</td>
                      <td colspan="2" class="underline"><?php echo $resleave['NOOFDAYS']; ?></td>
                      <td>From</td>
                      <td colspan="4" class="underline"><?php echo $resleave['DATEFROM']; ?></td>
                      <td>To</td>
                      <td colspan="4" class="underline"><?php echo $resleave['DATETO']; ?></td> 
                    </tr>
                    <tr>
                      <td colspan="2">Leave Credit Balance</td>
                      <td colspan="2" class="underline"><?php echo $resleave['CREDITBALANCE']; ?></td>
                      <td colspan="1">Noted By</td> 
                      <td colspan="4" class="underline" ><?php echo $_SESSION['FULLNAME']; ?></td>
                    </tr>
                    <tr>
                      <td colspan="14"><br/></td> 
                    </tr> 
                     <tr>
                      <td colspan="3" >Requested By</td> 
                      <td colspan="3" >Recomended By</td> 
                      <td colspan="3" >Noted By</td> 
                      <td colspan="5" >Approved By</td> 
                    </tr>
                    <tr>
                      <td colspan="14"><br/></td> 
                    </tr> 
                    <tr>
                      <td colspan="3" class="underline"  style="font-size:12px;text-align: center;"  ><?php echo $emp->FNAME . ' ' . $emp->LNAME; ?></td> 
                      <td colspan="3" class="underline"  style="font-size:12px;text-align: center;" ><?php echo $dept->DEPARTMENTHEAD; ?></td> 
                      <td colspan="3" class="underline"  style="font-size:12px;text-align: center;" ><?php echo $div->DIVISIONHEAD; ?></td> 
                      <td colspan="5" class="underline"  style="font-size:12px;text-align: center;">MR. MICHAEL ANIBI</td> 
                    </tr>
                     <tr>
                      <td colspan="3" align="center">Employee</td> 
                      <td colspan="3" align="center">Department Head</td> 
                      <td colspan="3" align="center">Division Head</td> 
                      <td colspan="5" align="center">President</td> 
                    </tr>
                  </table>
 
                
               </div><!--/.services-->  
               </div>
               </div>
               </div>  
               </section>