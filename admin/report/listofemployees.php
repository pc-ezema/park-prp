<div class="container">
 <form action="" method="POST" >
    <!-- Main content --> 
        <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i>PARK ADMINISTRATION SERVICES
            <small class="pull-right">Date: <?php echo date('m/d/Y'); ?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
     
  
   <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i  class="fa fa-globe">List Of Employees</i>
            
          </h2>
        </div> 
      </div> 
   

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 col-md-12">
		<table   class="table table-striped  table-hover table-responsive" style="font-size:12px" cellspacing="0">

							  <thead>
							  	<tr>
							  		<th width="5%">EmployeeNo</th>
							  		 <th>Name</th>
							  		<th>Address</th>
							  		 <th>Sex</th>
							  		 <th>Age</th>
							  		 <th>ContactNo</th>
							  		  <!-- <th>Department</th>-->
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
										# code...
										echo '<tr>';
										echo '<td colspan="8" style="background-color:#fff;color:#000;font-weight:bold">'.$row->DESCRIPTION.'</td>';
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
										//echo '<td>'. $result->DEPARTMENT.'</td>';
										echo '<td>'. $result->POSITION.'</td>';
										echo '<td>'. $result->WORKSTATS.'</td>'; 
										echo '</tr>';
											
										  }
							  		
							  	} 
							  	?>
								 <?php 
                if (isset($_POST['submit'])) {
                  # code...
                  $Total="";

                   $sql ="SELECT distinct(BRAND) FROM tblbrand b,`tblvehicle` v, `tblstockin` s WHERE b.`BRANDID`=v.`BRANDID` AND v.`PROID`=s.`PROID` 
                    AND date(DATERECEIVED) BETWEEN '".date_format(date_create($_POST['FROM']),'Y-m-d')."' AND '".date_format(date_create($_POST['TO']),'Y-m-d')."'";
                   $mydb->setQuery($sql);
                   $brandres = $mydb->loadResultList();  
                   foreach ($brandres as $row) {
                    # code...
                    echo '<tr>';
                    echo '<td colspan="7" style="background-color:#000;;color:#fff" align="center">'.$row->BRAND.'</td>';
                    echo '<tr>';

                  $sql="SELECT * FROM tblbrand b,`tblvehicle` v, `tblstockin` s WHERE b.`BRANDID`=v.`BRANDID` AND v.`PROID`=s.`PROID` AND BRAND='".$row->BRAND."'
                  AND date(DATERECEIVED) BETWEEN '".date_format(date_create($_POST['FROM']),'Y-m-d')."' AND '".date_format(date_create($_POST['TO']),'Y-m-d')."'";
                  $mydb->setQuery($sql);
                  $cur = $mydb->loadResultList();

                  foreach ($cur as $result) { 
                    echo '<tr>'; 
                    echo '<td>' . $result->ENGINENO.'</td>';
                    echo '<td>' . $result->CHASISNO.'</td>';
                    // echo '<td>' . $result->PROMODEL.'</td>';
                    // echo '<td>' . $result->BRAND.'</a></td>'; 
                    echo '<td>' . $result->PROMODEL.' ' . $result->PRODESC.' <b>[<i>'.  $result->PROCOLOR.'</i>]</b></td>'; 
                    echo '<td> &#8369 '.  number_format($result->PROPRICE,2).'</td>'; 
                    echo '<td>' . date_format(date_create($result->DATERECEIVED),'m/d/Y').'</td>';
                    echo '<tr>'; 

                 
                    
 
                  }  

                   
                // $Total += $result->PROPRICE;
                  $sql ="SELECT sum(PROPRICE) as 'price' FROM tblbrand b,`tblvehicle` v, `tblstockin` s WHERE b.`BRANDID`=v.`BRANDID` AND v.`PROID`=s.`PROID`  AND BRAND='".$row['BRAND']."'
                    AND date(DATERECEIVED) BETWEEN '".date_format(date_create($_POST['FROM']),'Y-m-d')."' AND '".date_format(date_create($_POST['TO']),'Y-m-d')."'";
                   $mydb->setQuery($sql);
                   $pricerow = $mydb->loadSingleResult();   

                  $Total =$pricerow->price;

                  echo '<tr>';
                  echo '<td  align="right">Sub-Total</td><td colspan="2"  >'.@count($cur) .'</td>'; 
                  echo '<td  colspan="2"  >&#8369 '.  @number_format($Total,2).'</td>'; 
                  // echo '<td  colspan="3" >'.  $pricerow['price']  .'</td>'; 
                  echo '</tr>';
   
                }
              }
              ?>
							  </tbody>
								 
							</table>
            
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
 
</form>
    <form action="printlistofemployees.php" method="POST" target="_blank"> 
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
  