<?php
	 if (!isset($_SESSION['USERID'])){
      redirect(web_root."admin/index.php");
     }

?>
<section id="feature" class="transparent-bg">
        <div class="container">
           <div class="center wow fadeInDown">
                 <h2 class="page-header">Employee's Leave of Absence</h2>
                <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p> -->
            </div>
               
            <div class="row">
                <div class="features"> 
						<form class="wow fadeInDownaction" action="controller.php?action=delete" Method="POST">   		
							<table id="dash-table" class="table table-striped table-bordered table-hover table-responsive" style="font-size:12px" cellspacing="0">

							  <thead>
							  	<tr>
							  		<th width="5%">Employees</th>
							  		<th>Date From</th>
							  		<th>Date To</th> 
							  		<th>Type of Leave</th>
							  		<th>Cause of Leave</th>
							  		<th>No. of Days</th> 
							  		<th>Remarks</th>
							  		<th>Status</th>
							  	 	<th width="20%" >Action</th> 
							  	</tr>	
							  </thead> 
							  <tbody>
							  	<?php  
							  		// $mydb->setQuery("SELECT * 
											// 			FROM  `tblusers` WHERE TYPE != 'Customer'");
							  		$mydb->setQuery("SELECT * FROM `tblleaves` ORDER BY LEAVESTATUS='Pending' AND LEAVEID DESC");
							  		$cur = $mydb->loadResultList();

									foreach ($cur as $result) { 

									if ($result->LEAVETYPE=='Others') {
                      # code...
				                      $leavetype = 'Service Credits';
				                    }else{
				                      $leavetype = $result->LEAVETYPE;
				                    }
							  		echo '<tr>';
							  		// echo '<td width="5%" align="center"></td>';
							  		echo '<td>' . $result->EMPLOYEE.'</a></td>';
							  		// echo '<td>' . $result->DATEFROM.' ' . $result->TIMEFROM.'</a></td>';
							  		// echo '<td>' . $result->DATETO.' ' . $result->TIMETO.'</a></td>';
							  		echo '<td>' .date_format(date_create($result->DATEFROM),'m/d/Y H:i').'</a></td>';
							  		echo '<td>' .date_format(date_create($result->DATETO),'m/d/Y H:i').'</a></td>';
							  		echo '<td>' . $leavetype.'</a></td>';
							  		echo '<td>' . $result->LEAVECAUSE.'</a></td>';
							  		echo '<td>' . $result->NOOFDAYS.'</a></td>';
							  		echo '<td>'. $result->LEAVECATEGORY.'</td>';
							  		echo '<td>'. $result->LEAVESTATUS.'</td>';

							  		if ($result->LEAVESTATUS =='Pending') {
							  			# code...
							  		echo '<td align="center" >
							  			    <a title="Edit" href="controller.php?action=approved&id='.$result->LEAVEID.'"  class="btn btn-info btn-sm fa fa-edit fw-fa "> Approve </a>
							  		        <a title="Edit" href="controller.php?action=deny&id='.$result->LEAVEID.'"  class="btn btn-danger btn-sm fa fa-edit fw-fa "> Deny</a>
							  		           <a title="Edit" href="print_leave.php?employeeid='.$result->EMPLOYEEID.'&id='.$result->LEAVEID.'"  class="btn btn-info btn-sm fa fa-print fw-fa "> Print</a>
							  			  </td>';

							  		}elseif($result->LEAVESTATUS =='Approved' || $result->LEAVESTATUS =='Denied'){

							  			echo '<td align="center" >
							  			    <a title="Edit" href="index.php?view=view&id='.$result->LEAVEID.'"  class="btn btn-info btn-sm fa fa-info fw-fa "> View </a>
							  			    <a title="Edit" href="print_leave.php?employeeid='.$result->EMPLOYEEID.'&id='.$result->LEAVEID.'"  class="btn btn-info btn-sm fa fa-print fw-fa "> Print</a>
							  		       </td>';

							  		} 
							  		echo '</tr>';
							  	} 
							  	?>
							  </tbody>
								
							</table>

							 <div class="btn-group">
							  <!-- <a href="index.php?view=add" class="btn btn-mod btn-sm"> <i class="fa fa-plus-circle fw-fa"></i> New</a> -->
							  <!-- <button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button> -->
							</div>
							 
							</form>
       
                
                </div><!--/.services-->
            </div><!--/.row-->  
        </div><!--/.container-->
    </section><!--/#feature-->
 
 