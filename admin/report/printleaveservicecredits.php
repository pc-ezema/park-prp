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
  <title>PARK ADMINISTRATIVE SERVICES</title>
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
    <div class="row"><h2 align="center">Summary of Leave and Service Credits</h2>
   </div>
    <!-- info row --> 
       <table   class="table table-striped  table-hover table-bordered" style="font-size:12px" cellspacing="0">

							  <thead>
							  	<tr> 
							  		<th>Name</th>
							  		 <th>Position</th>
							  		 <th>Work Status</th> 
							  		 <th>Vacation</th> 
							  		 <th>Sick</th> 
							  		 <th>Service Credits</th> 
                     <th>Maternity/Paternity</th> 
							  	</tr>	
							  </thead> 
							  <tbody>
							  	<?php   
									 $sql ="SELECT * FROM `tblemployees` e,`tblleavecredits` l WHERE e.`EMPLOYEEID`=l.`EMPLOYEEID`"; 
										$mydb->setQuery($sql);
										$cur = $mydb->loadResultList();

										foreach ($cur as $result) { 
										echo '<tr>'; 
										echo '<td>'. $result->LNAME.', '. $result->FNAME.'</td>'; 
										echo '<td>'. $result->POSITION.'</td>';
										echo '<td>'. $result->WORKSTATS.'</td>'; 
										echo '<td>'. $result->VACATION.'</td>'; 
										echo '<td>'. $result->SICK.'</td>'; 
										echo '<td>'. $result->OTHERS.'</td>';  
                    echo '<td>'. $result->MATERNITY.'</td>';   
										echo '</tr>';
											
										  } 
							  	?>
								 
							  </tbody>
								 
							</table>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
</html>
