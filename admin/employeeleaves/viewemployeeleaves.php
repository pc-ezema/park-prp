<?php
	 if (!isset($_SESSION['USERID'])){
      redirect(web_root."admin/index.php");
     }

?>
<section id="feature" class="transparent-bg">
        <div class="container">
           <div class="center wow ">
                 <h2 class="page-header">List of Employees Leaves</h2>
                <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p> -->
            </div>
               
            <div class="row">
                <div class="features">
 
						<form class="wow action" action="" Method="POST">   		
							<table id="dash-table" class="table table-striped  table-hover table-responsive" style="font-size:12px" cellspacing="0">

							  <thead>
							  	<tr>
							  		<th width="5%">LeaveID</th>
									<th width="5%">Employee ID</th>
							  		 <th width="5%">Employee's Name</th>
							  		<th width="100%">Leave Entitlement</th>
							  		 <th>Leave Days Spent</th>
							  		 <th>Commencement Date</th>
							  		 <th>Resumption Date</th>
							  		 <th>Number of Days Required</th>
							  		 <th>Deduct Leave</th>
									 <th>Leave Type</th>
							  		 <th>Contact Address</th>
									 <th>PhoneNo</th>
									 <th>Reasons</th>
									 <th>NOTEBY</th>
									 <th>LeaveStatus</th>
							  	</tr>	
							  	</tr>	
							  </thead> 
							  <tbody>
							  	<?php
								$db_server = "localhost";
								$db_username = "nardustc_user";
								$db_password = "1234567890qwer@";
								$db_database = "nardustc_apdb";
								$conn = new PDO("mysql:host=$db_server;dbname=$db_database", $db_username, $db_password);
								$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
								
									$result = $conn->prepare("SELECT * FROM tblleaves ORDER BY LEAVEID");
									$result->execute();
									for($i=0; $row = $result->fetch(); $i++){
								?>
									<tr bgcolor="#333333">
									 <?php echo '
										<td bgcolor="#FFFFFF" align="center">'.$row['LEAVEID'].'</td>
										<td bgcolor="#FFFFFF" align="center">'.$row['Employeeid'].'</td>
										<td bgcolor="#FFFFFF" align="center">'.$row['EmployeeNames'].'</td>
										<td bgcolor="#FFFFFF" align="center">'.$row['LeaveEntitlement'].'</td>
										<td bgcolor="#FFFFFF" align="center">'.$row['LeaveDaysSpent'].'</td>
										<td bgcolor="#FFFFFF" align="center">'.$row['CommencementDate'].'</td>
										<td bgcolor="#FFFFFF" align="center">'.$row['ResumptionDate'].'</td>
										<td bgcolor="#FFFFFF" align="center">'.$row['NumberofDaysRequired'].'</td>
										<td bgcolor="#FFFFFF" align="center">'.$row['DeductLeave'].'</td>
										<td bgcolor="#FFFFFF" align="center">'.$row['LeaveType'].'</td>
										<td bgcolor="#FFFFFF" align="center">'.$row['ContactAddress'].'</td>
										<td bgcolor="#FFFFFF" align="center">'.$row['PhoneNumber'].'</td>
										<td bgcolor="#FFFFFF" align="center" class="index">'.$row['Reasons'].'</td>
										<td bgcolor="#FFFFFF" align="center" class="index">'.$row['NOTEDBY'].'</td>
										<td bgcolor="#FFFFFF" align="center">'.$row['LEAVESTATUS'].'</td>
										
									 </tr>
									  ' ?>
									<?php } ?>
							  </tbody>

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
 
 