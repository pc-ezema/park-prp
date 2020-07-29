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
            <i  class="fa fa-globe">Summary of Leave and Service Credits</i>
            
          </h2>
        </div> 
      </div> 
   

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 col-md-12">
		<table id="dash-table"  class="table table-striped  table-hover table-bordered" style="font-size:12px" cellspacing="0">

							  <thead>
							  	<tr> 
							  		<th>Name</th>
							  		 <th>Position</th>
							  		 <th>Work Status</th> 
							  		 <th>Vacation</th> 
							  		 <th>Sick</th> 
							  		 <th width="130px">Service Credits</th> 
                     <th width="50px">Maternity/Paternity</th> 
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
										echo '<td><input type="" data-id="'.$result->EMPLOYEEID.'" class="form-control servicecredits" id="'.$result->EMPLOYEEID.'OTHERS"  value="'. $result->OTHERS.'" /></td>';  

                    if ($result->CIVILSTATUS!='Single') { 
                           echo '<td><input type="" data-id="'.$result->EMPLOYEEID.'" class="form-control maternity" id="'.$result->EMPLOYEEID.'MATERNITY"  value="'. $result->MATERNITY.'" /></td>';    
											   }else{
                          echo '<td></td>';
                         }


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
    <form action="printleaveservicecredits.php" method="POST" target="_blank"> 
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
  