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
                                <h4>Exit Form</h4>
                                <a href="print_exitform.php">
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
										<th>Code Number</th>
										<th>Name</th>
										<th>Unit/Department</th>
										<th>Date</th>
										<th>Designation</th>
										<th>Exit Reasons</th>
										<th>Number of Days Required</th>
										<th>Expected DOR</th>
										<th>Address During Exit</th>
										<th>Next of Kin</th>
										<th>Phone Number</th>
										<th>Relieving Officer's</th>
										<th>Status</th>
										<th>Returned On</th> 										
										<th>Action</th>
									</tr>
                                </thead>
                                <tbody class="alert-success">
                                  <?php
								  
								  include('connect.php');
                                    $display = $con->prepare("SELECT * FROM tblexitform ORDER BY id DESC");
                                    $display->execute();
                                    $fetch = $display->fetchAll(); 

									foreach($fetch as $key => $row) { 
                                  ?>
                                  <tr>
									  <td><?php echo $row['code_number']; ?></td>
									  <td><?php echo $row['name']; ?></td>
									  <td><?php echo $row['unit']; ?></td>
									  <td><?php echo $row['date']; ?></td>
									  <td><?php echo $row['designation']; ?></td>
									  <td><?php echo $row['exit_reasons']; ?></td>
									  <td><?php echo $row['number_days']; ?></td>
									  <td><?php echo $row['expected_dor']; ?></td>
									  <td><?php echo $row['address_exit']; ?></td>
									  <td><?php echo $row['next_kin']; ?></td>
									  <td><?php echo $row['phone_number']; ?></td>
									  <td><?php echo $row['relieving_officers']; ?></td>
									  <td><?php echo $row['status']; ?></td>
									  <td><?php echo $row['returned_on']; ?></td>
								  <td> 
                                    <a class="btn btn-success btn-xs" href="edit_exit.php?id=<?php echo $row['id']?>">
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