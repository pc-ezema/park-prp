<?php
require_once("../include/initialize.php");
  if(!isset($_SESSION['EMPLOYEEID'])){
  redirect(web_root."index.php"); 
}
$employee = New Employee();
    $emp = $employee->single_employee($_SESSION['EMPLOYEEID']);

    $leavescredit = New LeavesCredit();
    $lcredits = $leavescredit->single_leavescredit($_SESSION['EMPLOYEEID']);
 
     
    $department = New Department();
    $dept = $department->single_departments($emp->DEPARTMENTID);

    $division = New Division();
    $div = $division->single_division($emp->DIVISIONID);

    $sql = "SELECT * FROM `tblleaves` WHERE `LEAVEID`=" . $_GET['id'];
    $result = mysql_query($sql) or die(mysql_error());
    $resleave = mysql_fetch_assoc($result);


     if ($resleave['LEAVETYPE']=='Others') {
      # code...
      $leavetype = 'Service Credits';
      }else{
      $leavetype = $resleave['LEAVETYPE'];
      }

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo date('m/d/Y'); ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link href="<?php echo web_root; ?>admin/css/css/bootstrap.min.css" rel="stylesheet">  
    <link href="<?php echo web_root; ?>admin/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <link href="<?php echo web_root; ?>admin/css/dataTables.bootstrap.css" rel="stylesheet">
<!-- // <script src="<?php echo web_root; ?>select2/select2.min.css"></script> ./ -->
 
 
 
<style type="text/css">
  .underline {
    border-bottom:1px solid #000;
  }
  .tbl{
    width: 100%;
    padding: 0px;
    font-size: 11px;
  }
  .copy{
    float: right;
    border: 1px solid #ddd;
    z-index: -1;
    margin-top: -7%;
    padding: 10px;
  }
</style>
</head>
<body onload="window.print();">
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row --> 
            <div class="features"> 
                <div class="row">
                  <div class="col-xs-12" style="padding:0px;" align="center">
                    <label>PARK ADMINISTRATIVE SERVICES</label> 
                     <div style="font-size: 12px">Ijale</div>
                    <label>REQUEST FOR LEAVE OF ABSENCE</label>  
                  </div>
                  <div class="copy">HRD copy</div>
                </div> 
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
                      <td colspan="2"></td> 
                      <td colspan="6"  ></td>
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
                      <td colspan="3" class="underline"  style="font-size:12px"  ><?php echo $emp->FNAME . ' ' . $emp->LNAME; ?></td> 
                      <td colspan="3" class="underline"  style="font-size:12px" ><?php echo $dept->DEPARTMENTHEAD; ?></td> 
                      <td colspan="3" class="underline"  style="font-size:12px" ><?php echo $div->DIVISIONHEAD; ?></td> 
                      <td colspan="5" class="underline"  style="font-size:12px">Ijale</td> 
                    </tr>
                     <tr>
                      <td colspan="3" align="center">Employee</td> 
                      <td colspan="3" align="center">Department Head</td> 
                      <td colspan="3" align="center">Division Head</td> 
                      <td colspan="5" align="center">President</td> 
                    </tr>
                  </table>  
                  <br/>
                  <br/>

                <div class="row">
                  <div class="col-xs-12" style="padding:0px;" align="center">
                    <label>PARK ADMINISTRATIVE SERVICES</label> 
                     <div style="font-size: 12px">Ijale</div>
                    <label>REQUEST FOR LEAVE OF ABSENCE</label> 
                  </div> 
                    <div class="copy">Accounting copy</div>
                </div> 
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
                      <td colspan="5" class="underline"><?php echo $resleave['LEAVETYPE']; ?></td>
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
                      <td colspan="2"></td> 
                      <td colspan="6"  ></td>
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
                      <td colspan="3" class="underline"  style="font-size:12px"  ><?php echo $emp->FNAME . ' ' . $emp->LNAME; ?></td> 
                      <td colspan="3" class="underline"  style="font-size:12px" ><?php echo $dept->DEPARTMENTHEAD; ?></td> 
                      <td colspan="3" class="underline"  style="font-size:12px" ><?php echo $div->DIVISIONHEAD; ?></td> 
                      <td colspan="5" class="underline"  style="font-size:12px">MR MICHAEL ANIBI</td> 
                    </tr>
                     <tr>
                      <td colspan="3" align="center">Employee</td> 
                      <td colspan="3" align="center">Department Head</td> 
                      <td colspan="3" align="center">Division Head</td> 
                      <td colspan="5" align="center">President</td> 
                    </tr>
                  </table>  
                  <br/>
                  <br/>
                <div class="row">
                  <div class="col-xs-12" style="padding:0px;" align="center">
                    <label>PARK ADMINISTRATIVE SERVICES</label> 
                     <div style="font-size: 12px">Ijale</div>
                    <label>REQUEST FOR LEAVE OF ABSENCE</label>            
                    </div> 
                    <div class="copy">VPAA copy</div>

                </div> 
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
                      <td colspan="5" class="underline"><?php echo $resleave['LEAVETYPE']; ?></td>
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
                      <td colspan="2"></td> 
                      <td colspan="6"  ></td>
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
                      <td colspan="3" class="underline"  style="font-size:12px"  ><?php echo $emp->FNAME . ' ' . $emp->LNAME; ?></td> 
                      <td colspan="3" class="underline"  style="font-size:12px" ><?php echo $dept->DEPARTMENTHEAD; ?></td> 
                      <td colspan="3" class="underline"  style="font-size:12px" ><?php echo $div->DIVISIONHEAD; ?></td> 
                      <td colspan="5" class="underline"  style="font-size:12px">MR MICHAEL ANIBI</td> 
                    </tr>
                     <tr>
                      <td colspan="3" align="center">Employee</td> 
                      <td colspan="3" align="center">Department Head</td> 
                      <td colspan="3" align="center">Division Head</td> 
                      <td colspan="5" align="center">President</td> 
                    </tr>
                  </table> 
 
                
               </div><!--/.services--> 
          
 
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
<footer>
</footer>
<script src="<?php echo web_root; ?>admin/jquery/jquery.min.js"></script> 
 <script src="<?php echo web_root; ?>admin/js/bootstrap.min.js"></script>
<script type="text/javascript">



  (function() {

    var beforePrint = function() {
        console.log('Functionality to run before printing.');
    };

    var afterPrint = function() {
        // console.log('Functionality to run after printing');
        window.location = 'index.php?view=view&id=00011';
    };

    if (window.matchMedia) {
        var mediaQueryList = window.matchMedia('print');
        mediaQueryList.addListener(function(mql) {
            if (mql.matches) {
                beforePrint();
            } else {
                afterPrint();
            }
        });
    }

    window.onbeforeprint = beforePrint;
    window.onafterprint = afterPrint;

}());
</script>
</html>
