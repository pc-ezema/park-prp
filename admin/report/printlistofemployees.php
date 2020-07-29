<?php
require_once("../../include/initialize.php");
  if(!isset($_SESSION['USERID'])){
  redirect(web_root."admin/index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PARK ADMINISTRATIVE SERVICES </title>
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
      <div class="col-xs-12">
        <h4 class="page-header ">
          <i class="fa fa-globe"></i>PARK ADMINISTRATIVE SERVICES
           <small class="pull-right">Printed Date: <?php echo date('m/d/Y'); ?></small>
        </h4>
      </div>
      <!-- /.col -->
    </div>
    <div class="row"><h2 align="center">List Of Employees</h2>
      <!-- info row --> 
     <!-- Table row --> 
        <table   class="table table-striped  table-hover table-responsive" style="font-size:12px" cellspacing="0">

							  <thead>
							  	<tr>
							  		<th width="5%">EmployeeNo</th>
							  		 <th>Name</th>
							  		<th>Address</th>
							  		 <th>Sex</th>
							  		 <th>Age</th>
							  		 <th>ContactNo</th>
							  		  <!-- <th>Department</th> -->
							  		 <th>Position</th>
							  		 <th>Work Status</th> 
							  	</tr>	
							  </thead> 
							  <tbody>
							  	<?php  


										
									 $sql ="SELECT * FROM `tbldepartment` ";
									  $mydb->setQuery($sql);
                  					 $brandres = $mydb->loadResultList();  
									 foreach ($brandres as $row) {
										# code...
										echo '<tr>';
										echo '<td colspan="9" style="background-color:#000;;color:#fff" align="center">'.$row->DEPARTMENT.'</td>';
										echo '<tr>';
										
										// $mydb->setQuery("SELECT * 
											// 			FROM  `tblusers` WHERE TYPE != 'Customer'");
										$mydb->setQuery("SELECT * 
															FROM   `tblemployees` e,`tbldepartment` d WHERE e.DEPARTMENTID=d.DEPARTMENTID AND  e.DEPARTMENTID='".$row->DEPARTMENTID."'");
										$cur = $mydb->loadResultList();

										foreach ($cur as $result) { 
										echo '<tr>';
										// echo '<td width="5%" align="center"></td>';
										echo '<td>' . $result->EMPLOYEEID.'</a></td>';
										echo '<td>'. $result->LNAME.', '. $result->FNAME.'</td>';
										echo '<td>'. $result->ADDRESS.'</td>';
										echo '<td>'. $result->SEX.'</td>';
										echo '<td>'. $result->AGE.'</td>';
										echo '<td>'. $result->TELNO.'</td>';
									//	echo '<td>'. $result->DEPARTMENT.'</td>';
										echo '<td>'. $result->POSITION.'</td>';
										echo '<td>'. $result->WORKSTATS.'</td>'; 
										echo '</tr>';
											
										  }
							  		
							  	} 
							  	?>
					 		  </tbody>
								 
							</table>
        <!-- /.col --> 
      <!-- /.row -->
  
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
</html>
