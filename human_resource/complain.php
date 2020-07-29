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
                                <h4>Complain</h4>
								<a href="add_complain.php">
                                    <input type="button" value="Add" class="print btn-default" style="margin-right: 80px; width: auto;">
                                </a>
                                <a href="print_complain.php">
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
										<th>Date</th>
										<th>Name</th>
										<th>Hostel/Department/Unit</th>
										<th>Phone No.</th>
										<th>Complaints</th>
										<th>Action Plan</th>
										<th>Officer In Charge</th>
										<th>Evaluation</th>	
										<th>Remarks</th>
										<th>Action</th>
									</tr>
                                </thead>
                                <tbody class="alert-success">
                                  <?php
								  
								  include('connect.php');
                                    $display = $con->prepare("SELECT * FROM hrcomplaintslog ORDER BY i_id DESC");
                                    $display->execute();
                                    $fetch = $display->fetchAll(); 

									foreach($fetch as $key => $row) { 
                                  ?>
                                  <tr>
									  <td><?php echo $row['Date']; ?></td>
									  <td><?php echo $row['Names']; ?></td>
									  <td><?php echo $row['HostelDepartmentUnit']; ?></td>
									  <td><?php echo $row['PhoneNo']; ?></td>
									  <td><?php echo $row['Complaints']; ?></td>
									  <td><?php echo $row['ActionPlan']; ?></td>
									  <td><?php echo $row['OfficeInCharge']; ?></td>
									  <td><?php echo $row['Evaluation']; ?></td>
									  <td><?php echo $row['Remarks']; ?></td>
									  
								  <td> 
                                    <a class="btn btn-success btn-xs" href="edit_complain.php?id=<?php echo $row['i_id']?>">
                                      <span class = "glyphicon glyphicon-pencil" aria-hidden = "true">Edit</span>
                                    </a> 
									<a class="btn btn-danger btn-xs" href="query/delete_complain_query.php?id=<?php echo $row['i_id']?>">
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