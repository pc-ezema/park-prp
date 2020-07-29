<div class="container">
 <form action="" method="POST" >
    <!-- Main content --> 
        <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i>PARK ADMINISTRATIVE SERVICES
            <small class="pull-right">Date: <?php echo date('m/d/Y'); ?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
     
  
   <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i  class="fa fa-globe">Summary of Leave  Credits Without Pay</i>
            
          </h2>
        </div> 
      </div> 
   

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 col-md-12">
		<table   class="table table-striped  table-hover table-bordered" style="font-size:12px" cellspacing="0">

							  <thead>
                <tr> 
                    <th rowspan="2">Name</th>
                     <th rowspan="2">Type of Leave</th>
                     <th rowspan="2">Cause of Leave</th> 
                      <th colspan="2">
                       <center>Date</center>
                      </th>
                     <th rowspan="2" width="100px">No. of Days</th> 
                  </tr> 
                  <tr>
                     <th>From</th> 
                     <th>To</th> 

                  </tr>
							  	
							  </thead> 
							  <tbody> 
							  	<?php   
									 $sql ="SELECT * 
                          FROM  `tblleaves`  WHERE   LEAVECATEGORY='Without Pay'"; 
										$mydb->setQuery($sql);
										$cur = $mydb->loadResultList();

										foreach ($cur as $result) { 
										echo '<tr>'; 
										echo '<td>'. $result->EMPLOYEE.'</td>'; 
										echo '<td>'. $result->LEAVETYPE.'</td>';
										echo '<td>'. $result->LEAVECAUSE.'</td>'; 
										echo '<td>'. $result->DATEFROM.'</td>'; 
										echo '<td>'. $result->DATETO.'</td>'; 
										echo '<td>'. $result->NOOFDAYS.'</td>';   
										echo '</tr>';
											
										  } 
							  	?>
								 
							  </tbody>
								 
							</table>
            
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
 
</form>
    <form action="printleaveservicecreditswithoutpay.php" method="POST" target="_blank"> 
          <!-- this row will not appear when printing -->
          <div class="row no-print">
            <div class="col-xs-12">
             <span class="pull-right"> <button type="submit" class="btn btn-primary"  ><i class="fa fa-print"></i> Print</button></span>  
          </div>
          </div> 
    </form>
    <!-- /.content -->
    <div class="clearfix"></div>
 
</div> 
<!-- ./wrapper -->
  