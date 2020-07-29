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
                                <h4>Leave</h4>
								<a href="add_leave.php">
                                    <input type="button" value="Add" class="print btn-default" style="margin-right: 80px; width: auto;">
                                </a>
                                <a href="print_leave.php">
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
										<th>CODE ID</th>
										<th>Name</th>
										<th>Leave Entitlement</th>
										<th>Leave Days Spent</th>
										<th>Commencement Date</th>
										<th>Resumption Date</th>
										<th>Number of Days Required</th>
										<th>Deduct Leave</th>
										<th>Leave Type</th>
										<th>Contact Address</th>
										<th>PhoneNo</th>
										<th>Reasons</th>
										<th>NoteBy</th>
										<th>Status</th> 
										<th>Action</th>
										
									</tr>
                                </thead>
                                <tbody class="alert-success">
                                  <?php
								  
								  include('connect.php');
                                    $display = $con->prepare("SELECT * FROM tblleaves ORDER BY LEAVEID DESC");
                                    $display->execute();
                                    $fetch = $display->fetchAll(); 

									foreach($fetch as $key => $row) { 
                                  ?>
                                  <tr>
									  <td><?php echo $row['Code_Number']; ?></td>
									  <td><?php echo $row['Names']; ?></td>
									  <td><?php echo $row['LeaveEntitlement']; ?></td>
									  <td><?php echo $row['LeaveDaysSpent']; ?></td>
									  <td><?php echo $row['CommencementDate']; ?></td>
									  <td><?php echo $row['ResumptionDate']; ?></td>
									  <td><?php echo $row['NumberofDaysRequired']; ?></td>
									  <td><?php echo $row['DeductLeave']; ?></td>
									  <td><?php echo $row['LeaveType']; ?></td>
									  <td><?php echo $row['ContactAddress']; ?></td>
									  <td><?php echo $row['PhoneNumber']; ?></td>
									  <td><?php echo $row['Reasons']; ?></td>
									  <td><?php echo $row['NOTEDBY']; ?></td>
									  <td><?php echo $row['LEAVESTATUS']; ?></td>
								  <td> 
                                    <a class="btn btn-success btn-xs" href="edit_leave.php?id=<?php echo $row['LEAVEID']?>">
                                      <span class = "glyphicon glyphicon-pencil" aria-hidden = "true">Edit</span>
                                    </a> 
									<a class="btn btn-danger btn-xs" href="query/delete_leave_query.php?id=<?php echo $row['LEAVEID']?>">
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