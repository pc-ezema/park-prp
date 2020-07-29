<?php
	session_start();
	if (isset($_SESSION['message'])){
	echo $_SESSION['message'];
	unset ($_SESSION['message']);
	}
require_once("initialize.php");
require_once ("templates.php");
?>
  

<!DOCTYPE html>
<html lang="en">
<style>
.index {
  word-break: break-all;
}
</style>
<body >
<div class="pen-title">
  <h1><!-- LEAVE--></h1>
</div>
		 <section id="feature" class="transparent-bg">
        <div class="container">
           <div class="center wow ">
		   </br>
		   </br>
                 <h2 class="page-header">MY LEAVE </h2>
                <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p> -->
            </div>
               
            <div class="row">
                <div class="features">
 
						<form class="wow action"  Method="POST">   		
							<table id="dash-table" class="table table-striped  table-hover table-responsive" style="font-size:12px" cellspacing="0">

							  <thead>
							  	<tr>
									<th width="5%">Employee ID</th>
							  		 <th width="5%">Employee's Name</th>
							  		<th>Leave Entitlement</th>
							  		 <th>Leave Days Spent</th>
							  		 <th>Commencement Date</th>
							  		 <th>Resumption Date</th>
							  		 <th>Number of Days Required</th>
							  		 <th>Deduct Leave</th>
							  		 <th>Contact Address</th>
									 <th>PhoneNo</th>
									 <th>Reasons</th>
									 <th>NoteBy</th>
							  	 	<th>Action</th> 
							  	</tr>	
							  </thead> 
							  <tbody>
							  
							  <?php
	try {
	require ("conn.php");
	$id = $_SESSION['EMPLOYEEID'];
	$stmt = $conn->prepare("SELECT * from tblleaves WHERE Employeeid='$id' ORDER BY LEAVEID");
	$stmt->execute();
	while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
	echo "<tr>";
	echo "<td align='center' class='index'> ".$row['Employeeid']." </td>";
	echo "<td align='center' class='index'> ".$row['EmployeeNames']." </td>";
	echo "<td align='center' class='index'> ".$row['LeaveEntitlement']." </td>";
	echo "<td align='center' class='index'> ".$row['LeaveDaysSpent']." </td>";
	echo "<td align='center' class='index'> ".$row['CommencementDate']." </td>";
	echo "<td align='center' class='index'> ".$row['ResumptionDate']." </td>";
	echo "<td align='center' class='index'> ".$row['NumberofDaysRequired']." </td>";
	echo "<td align='center' class='index'> ".$row['DeductLeave']." </td>";
	echo "<td align='center' class='index'> ".$row['ContactAddress']." </td>";
	echo "<td align='center' class='index'> ".$row['PhoneNumber']." </td>";
	echo "<td align='center' class='index'> ".$row['Reasons']." </td>";
	echo "<td align='center' class='index'> ".$row['NOTEDBY']." </td>";
	echo "<td align='center' class='index'> ".$row['LEAVESTATUS']." </td>";
	echo '<td><button type="submit" class="btn btn-default" name="edit"><a href=#?LEAVEID=' . $row["LEAVEID"] .' ></a>Edit</button></td>';
	
	echo "</tr>";
	}
	}
	catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
	}
	?>				
</table>
						 
	</form>
       
                
                </div><!--/.services-->
            </div><!--/.row-->  
        </div><!--/.container-->
    </section><!--/#feature-->
</body>
</html>
 