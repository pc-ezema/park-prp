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
                                <h4>Building Maintenance</h4>
								<a href="add_building_maintenance.php">
                                    <input type="button" value="Add" class="print btn-default" style="margin-right: 80px; width: auto;">
                                </a>
                                <a href="print_all_facilitybuildmaintenance.php">
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
                                        <th>Building</th>
										<th>Location/Unit</th>
										<th>Date Checked</th>
										<th width="20%" >Action Required</th>
										<th width="20%" >Action Completed</th>
										<th>Name of Person Checking</th>
										<th>Cost of Maintenance</th>
										<th>Due Date For Next Check</th>
										<th>Remarks</th>
										<th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="alert-success">
                                
                                  <?php
                                    include('connect.php');
                                    $display = $con->prepare("SELECT * FROM buildinglog ORDER BY id DESC");
                                    $display->execute();
                                    $fetch = $display->fetchAll();                               

                                      foreach($fetch as $key => $row) { 
                                  ?>
                                  <tr>
                                  <td><?php echo $row['Building']; ?></td>
                                  <td><?php echo $row['Location']; ?></td>
                                  <td><?php echo $row['DateChecked']; ?></td>
                                  <td><?php echo $row['ActionRequired']; ?></td>
                                  <td><?php echo $row['ActionCompleted']; ?></td>
                                  <td><?php echo $row['PersonChecking']; ?></td>
                                  <td><?php echo $row['CostofMaintenance']; ?></td>
                                  <td><?php echo $row['NextDueDate']; ?></td>
								  <td><?php echo $row['Remark']; ?></td>
								  <td>     
                                     <a href="edit_building_maintenance.php?id=<?php echo $row['id']?>" class="btn btn-primary">
                                      <span class = "glyphicon glyphicon-pencil" aria-hidden = "true">Edit</span>
                                    </a>
									<a class="btn btn-success btn-sm" href="query/delete_buildingmaintenance_query.php?id=<?php echo $row['id']?>">
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