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
                                <h4>ALL LEAVES</h4>
                                <a href="print_all_leave.php">
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
										<td>Leave Entitlement</td>
                                        <td>Leave Days Spent</td>
                                        <td>Commencement Date</td>
										<td>Resumption Date</td>
                                        <td>Number of Days Required</td>
                                        <td>Deduct Leave</td>
										<td>Leave Type</td>
                                        <td>Contact Address</td>
                                        <td>Phone No</td>
                                        <td>Reasons</td>
                                        <td>NOTEBY</td>
                                        <td>Leave Status</td>
                                        <td width="10%" >Action</td>
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
                                    <a class="btn btn-success btn-sm" href="approve_leave.php?LEAVEID=<?php echo $row['LEAVEID']?>">
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