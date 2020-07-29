<?php 
include("header.php");
?>
 <section class="content">

        <div class="container-fluid">
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class = "panel panel-success">
                            <div class = "panel-heading">
                                <h4>Loan</h4>
								<a href="add_loan.php">
                                    <input type="button" value="Add" class="print btn-default" style="margin-right: 80px; width: auto;">
                                </a>
                                <a href="print_loan.php">
                                    <input type="button" value="Print" class="print">
                                </a>
                            </div>
                        </div>
                        <div id="print">
                            <div class = "scroll">
                            <div class="body">
                                <table id = "example" class = "stripe" cellspacing = "0" >
                                <thead>
                                    <tr>
									 <th>Code ID</th>
							  		 <th>Name</th>
							  		 <th>Department</th>
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
									 <th>Action</th>
									</tr>
                                </thead>
                                <tbody class="alert-success">
                                  <?php
								  
								  include('connect.php');
                                    $display = $con->prepare("SELECT * FROM tblloans ORDER BY Loanid DESC");
                                    $display->execute();
                                    $fetch = $display->fetchAll(); 

									foreach($fetch as $key => $row) { 
                                  ?>
                                  <tr>
									  <td><?php echo $row['Code_Number']; ?></td>
									  <td><?php echo $row['Names']; ?></td>
									  <td><?php echo $row['Department']; ?></td>
									  <td><?php echo $row['ReasonforLoan']; ?></td>
									  <td><?php echo $row['AmountBorrowed']; ?></td>
									  <td><?php echo $row['ModeofReturn']; ?></td>
									  <td><?php echo $row['DateofReturn']; ?></td>
									  <td><?php echo $row['FirstName']; ?></td>
									  <td><?php echo $row['FirstCodeNumber']; ?></td>
									  <td><?php echo $row['FirstDepartment']; ?></td>
									  <td><?php echo $row['SecondName']; ?></td>
									  <td><?php echo $row['SecondCodeNumber']; ?></td>
									  <td><?php echo $row['SecondDepartment']; ?></td>
									  <td><?php echo $row['ThirdName']; ?></td>
									  <td><?php echo $row['ThirdCodeNumber']; ?></td>
									  <td><?php echo $row['ThirdDepartment']; ?></td>
									  <td><?php echo $row['FourthName']; ?></td>
									  <td><?php echo $row['FourthCodeNumber']; ?></td>
									  <td><?php echo $row['FourthDepartment']; ?></td>
									  <td><?php echo $row['FifthName']; ?></td>
									  <td><?php echo $row['FifthCodeNumber']; ?></td>
									  <td><?php echo $row['FifthDepartment']; ?></td>
									  <td><?php echo $row['ApprovalStatus']; ?></td>
								  <td> 
                                    <a class="btn btn-success btn-xs" href="edit_loan.php?id=<?php echo $row['Loanid']?>">
                                      <span class = "glyphicon glyphicon-pencil" aria-hidden = "true">Edit</span>
                                    </a> 
									<a class="btn btn-danger btn-xs" href="query/delete_loan_query.php?id=<?php echo $row['Loanid']?>">
                                      <span class = "glyphicon glyphicon-pencil" aria-hidden = "true">Delete</span>
                                    </a> 
                                  </td>
								  </tr>
                                     <?php 
                                     } ?>
                                </tbody>
                            </table>
                        </div>
                      </div>
                    </div>
                </div>
             </div>
         </div>
    </div>
</section>

   <script>
    function printDiv() {
        //Get the HTML of div
        var divElements = document.getElementById("print").innerHTML;
        //Get the HTML of whole page
        var oldPage = document.body.innerHTML;
        //Reset the page's HTML with div's HTML only
        document.body.innerHTML = "<table></table>" + divElements;
        //Print Page
        window.print();
        //Restore orignal HTML
        document.body.innerHTML = oldPage;

    }
    </script>
<script src="plugins/js/jquery-1.js"></script>
<script src="plugins/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>
<?php 
include("script.php");
?>