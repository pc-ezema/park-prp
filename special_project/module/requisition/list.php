<?php
require_once("../../include/initialize.php");
 if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."/index.php");
     }

?>
<div class="card mb-3">

        <div class="card-header">
          <i class="fa fa-table"></i> List of Requisition(s)   <a href="index.php?view=add" class="btn btn-primary  ">  <i class="fa fa-plus-circle fw-fa"></i> New</a></div>

         
        <div class="card-body">
          <div class="table-responsive">
	 		    <form action="" Method="POST">  
			    		
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				
				  <thead>
				  	<tr>
				  	<!-- 	<th>Code</th> -->
				  		<th width="10%">Prepared By</th>
						<th width="10%">Date</th>
						<th width="20%">Department</th>
						<th width="10%">Phone No.</th>
						<th width="10%">Purpose</th>
						<th width="10%">Purchase Mode</th>
						<th width="10%">Name</th>
						<th width="10%">Address</th>
						<th width="10%">Phone No.</th>
						<th width="10%">Pay Mode</th>
						<th width="10%">Description of Expenses</th>
						<th width="5%">Quantity</th>
						<th width="10%">Unit Price</th>
						<th width="10%">Amount</th>
						<th width="10%">Amount In Word</th>
						<th width="13%">Status</th>
				  	</tr>	
				  </thead>
				  <tbody>
				  <?php
					try {
					require ("conn.php");
					$stmt = $conn->prepare("SELECT * from tblrequisition WHERE PreparedBy='Special Project Manager' ORDER BY i_id DESC");
					$stmt->execute();
					while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
					echo "<tr>";
					echo "<td align='center' class='index'> ".$row['PreparedBy']." </td>";
					echo "<td align='center' class='index'> ".$row['Date']." </td>";
					echo "<td align='center' class='index'> ".$row['Department']." </td>";
					echo "<td align='center' class='index'> ".$row['Phone_No']." </td>";
					echo "<td align='center' class='index'> ".$row['Purpose']." </td>";
					echo "<td align='center' class='index'> ".$row['Purchase_Mode']." </td>";
					echo "<td align='center' class='index'> ".$row['Name']." </td>";
					echo "<td align='center' class='index'> ".$row['Address']." </td>";
					echo "<td align='center' class='index'> ".$row['PhoneNO']." </td>";
					echo "<td align='center' class='index'> ".$row['Pay_mode']." </td>";
					echo "<td align='center' class='index'> ".$row['Description_Expenses']." </td>";
					echo "<td align='center' class='index'> ".$row['Quantity']." </td>";
					echo "<td align='center' class='index'> ".$row['Unit_Price']." </td>";
					echo "<td align='center' class='index'> ".$row['Amount']." </td>";
					echo "<td align='center' class='index'> ".$row['Amount_Word']." </td>";
					echo "<td align='center' class='index'> ".$row['Status']." </td>";
					
					echo "</tr>";
					}
					}
					catch(PDOException $e) {
					echo 'ERROR: ' . $e->getMessage();
					}
					?>
				  
				  </tbody>
								 
				</table>
			
				</form>
	
       </div>
        </div>
      
      </div>