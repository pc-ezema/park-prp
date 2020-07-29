<?php
	 if (!isset($_SESSION['USERID'])){
      redirect(web_root."admin/index.php");
     }

?>
<section id="feature" class="transparent-bg">
        <div class="container">
           <div class="center wow ">
                 <h2 class="page-header">List of Employees Loans</h2>
                <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p> -->
            </div>
               
            <div class="row">
                <div class="features">
 
						<form class="wow action" action="" Method="POST">   		
							<table id="dash-table" class="table table-striped  table-hover table-responsive" style="font-size:12px" cellspacing="0">

							  <thead>
							  	<tr>
									<th width="5%">Loanid</th>
									<th width="5%">Employee ID</th>
							  		 <th width="5%">Employee's Name</th>
							  		 <th>Department</th>
							  		 <th>Code Number</th>
									 <th>Reason for Loan</th>
									 <th>AmountBorrowed</th>
									 <th>Mode of Return</th>
									 <th>Date of Return</th>
									 <th>First Name</th>
									 <th>First Code Number</th>
									 <th>First Department</th>
									 <th>Second Name</th>
									 <th>Second Code Number</th>
									 <th>Second  Department</th>
									 <th>Third Name</th>
									 <th>Third Code Number</th>
							  		 <th>Third Department</th>
							  		 <th>Fourth Name</th>
							  		 <th>Fourth Code Number</th>
							  		 <th>Fourth Department</th>
							  		 <th>Fifth Name</th>
									 <th>Fifth Code Number</th>
									 <th>Fifth Department</th>
									 <th>Approve Status</th>
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
								
									$result = $conn->prepare("SELECT * FROM tblloans ORDER BY Loanid");
									$result->execute();
									for($i=0; $row = $result->fetch(); $i++){
								?>
									<tr bgcolor="#333333">
									 <?php echo '
										<td bgcolor="#FFFFFF" align="center">'.$row['Loanid'].'</td>
										<td bgcolor="#FFFFFF" align="center">'.$row['Employeeid'].'</td>
										<td bgcolor="#FFFFFF" align="center">'.$row['EmployeeNames'].'</td>
										<td bgcolor="#FFFFFF" align="center">'.$row['Department'].'</td>
										<td bgcolor="#FFFFFF" align="center">'.$row['CodeNumber'].'</td>
										<td bgcolor="#FFFFFF" align="center">'.$row['ReasonforLoan'].'</td>
										<td bgcolor="#FFFFFF" align="center">'.$row['AmountBorrowed'].'</td>
										<td bgcolor="#FFFFFF" align="center">'.$row['ModeofReturn'].'</td>
										<td bgcolor="#FFFFFF" align="center">'.$row['DateofReturn'].'</td>
										<td bgcolor="#FFFFFF" align="center">'.$row['FirstName'].'</td>
										<td bgcolor="#FFFFFF" align="center">'.$row['FirstCodeNumber'].'</td>
										<td bgcolor="#FFFFFF" align="center">'.$row['FirstDepartment'].'</td>
										<td bgcolor="#FFFFFF" align="center">'.$row['SecondName'].'</td>
										<td bgcolor="#FFFFFF" align="center">'.$row['SecondCodeNumber'].'</td>
										<td bgcolor="#FFFFFF" align="center">'.$row['SecondDepartment'].'</td>
										<td bgcolor="#FFFFFF" align="center">'.$row['ThirdName'].'</td>
										<td bgcolor="#FFFFFF" align="center">'.$row['ThirdCodeNumber'].'</td>
										<td bgcolor="#FFFFFF" align="center">'.$row['ThirdDepartment'].'</td>
										<td bgcolor="#FFFFFF" align="center">'.$row['FourthName'].'</td>
										<td bgcolor="#FFFFFF" align="center">'.$row['FourthCodeNumber'].'</td>
										<td bgcolor="#FFFFFF" align="center">'.$row['FourthDepartment'].'</td>
										<td bgcolor="#FFFFFF" align="center">'.$row['FifthName'].'</td>
										<td bgcolor="#FFFFFF" align="center">'.$row['FifthCodeNumber'].'</td>
										<td bgcolor="#FFFFFF" align="center">'.$row['FifthDepartment'].'</td>
										<td bgcolor="#FFFFFF" align="center">'.$row['ApprovalStatus'].'</td>
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
 
 