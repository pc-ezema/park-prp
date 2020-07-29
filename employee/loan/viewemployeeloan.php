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
<head>
    <title>Admin | PARK ADMINISTRATIVE SERVICES</title>

</head><!--/head--> 
      <link rel="stylesheet" href="css/style.css">
	  <link rel="stylesheet" href="css/home.css">
<body >
<div class="pen-title">
  <h1><!-- LOAN--></h1>
</div>
		 <section id="feature" class="transparent-bg">
        <div class="container">
           <div class="center wow ">
                 <h2 class="page-header">MY LOAN </h2>
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
							  </thead> 
							  <tbody>
		<?php
	try {
	require ("conn.php");
	$id = $_SESSION['EMPLOYEEID'];
	$stmt = $conn->prepare("SELECT * from tblloans WHERE Employeeid='$id' ORDER BY Loanid");
	$stmt->execute();
	while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
	echo "<tr>";
	echo "<td align='center' class='index'> ".$row['Employeeid']." </td>";
	echo "<td align='center' class='index'> ".$row['EmployeeNames']." </td>";
	echo "<td align='center' class='index'> ".$row['Department']." </td>";
	echo "<td align='center' class='index'> ".$row['CodeNumber']." </td>";
	echo "<td align='center' class='index'> ".$row['ReasonforLoan']." </td>";
	echo "<td align='center' class='index'> ".$row['AmountBorrowed']." </td>";
	echo "<td align='center' class='index'> ".$row['ModeofReturn']." </td>";
	echo "<td align='center' class='index'> ".$row['DateofReturn']." </td>";
	echo "<td align='center' class='index'> ".$row['FirstName']." </td>";
	echo "<td align='center' class='index'> ".$row['FirstCodeNumber']." </td>";
	echo "<td align='center' class='index'> ".$row['FirstDepartment']." </td>";
	echo "<td align='center' class='index'> ".$row['SecondName']." </td>";
	echo "<td align='center' class='index'> ".$row['SecondCodeNumber']." </td>";
	echo "<td align='center' class='index'> ".$row['SecondDepartment']." </td>";
	echo "<td align='center' class='index'> ".$row['ThirdName']." </td>";
	echo "<td align='center' class='index'> ".$row['ThirdCodeNumber']." </td>";
	echo "<td align='center' class='index'> ".$row['ThirdDepartment']." </td>";
	echo "<td align='center' class='index'> ".$row['FourthName']." </td>";
	echo "<td align='center' class='index'> ".$row['FourthCodeNumber']." </td>";
	echo "<td align='center' class='index'> ".$row['FourthDepartment']." </td>";
	echo "<td align='center' class='index'> ".$row['FifthName']." </td>";
	echo "<td align='center' class='index'> ".$row['FifthCodeNumber']." </td>";
	echo "<td align='center' class='index'> ".$row['FifthDepartment']." </td>";
	echo "<td align='center' class='index'> ".$row['ApprovalStatus']." </td>";
	echo '<td><button type="submit" class="btn btn-default" name="edit"><a href=#?Loanid=' . $row["Loanid"] .' ></a>Edit</button></td>';
	
	echo "</tr>";
	}
	}
	catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
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
</body>
</html>

 
 