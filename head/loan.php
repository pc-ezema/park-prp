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
                                <h4>ALL LOANS</h4>
                                <a href="print_all_loan.php">
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
                                        <td>Code ID</td>
                                        <td>Names</td>
										<td>Department</td>
                                        <td>Reason for Loan</td>
										<td>Amount Borrowed</td>
                                        <td>Mode of Return</td>
                                        <td>Date of Return</td>
                                        <td>First Name</td>
                                        <td>First Code Number</td>
                                        <td>First Department</td>
                                        <td>Second Name</td>
                                        <td>Second Code Number</td>
                                        <td>Second  Department</td>
                                        <td>Third Name</td>
                                        <td>Third Code Number</td>
                                        <td>Third Department</td>
										<td>Fourth Name</td>
                                        <td>Fourth Code Number</td>
                                        <td>Fourth Department</td>
                                        <td>Fifth Name</td>
                                        <td>Fifth Code Number</td>
                                        <td>Fifth Department</td>
										<td>Approve Status</td>
                                        <td width="14%" >Action</td>
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
                                  <td><?php echo $row['ApprovalStatus'];?></td>
								  <td>     
                                    <a class="btn btn-success btn-sm" href="approve_loan.php?Loanid=<?php echo $row['Loanid']?>">
                                      <span class = "glyphicon glyphicon-pencil" aria-hidden = "true">Edit</span>
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