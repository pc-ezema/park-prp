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
                                <h4>ALL MACHINE MAINTENANCE DONE</h4>
                                <a href="print_all_machinemaintenance.php">
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
                                        <td>Units</td>
										<td>Machine Description</td>
                                        <td>Serial Number</td>
                                        <td>Model Number</td>
										<td>Date Purchase</td>
                                        <td>Maintenance Description</td>
                                        <td>Maintenance Date</td>
                                        <td>Maintenance Performed By</td>
                                        <td>Cost of Maintenance</td>
                                        <td>Next Maintenance Plan</td>
                                        <td>Remarks</td>
                                    </tr>
                                </thead>
                                <tbody class="alert-success">
                                
                                  <?php
                                    include('connect.php');
                                    $display = $con->prepare("SELECT * FROM machinelog ORDER BY id DESC");
                                    $display->execute();
                                    $fetch = $display->fetchAll();                               

                                      foreach($fetch as $key => $row) { 
                                  ?>
                                  <tr>
                                  <td><?php echo $row['Units']; ?></td>
                                  <td><?php echo $row['MachineDescription']; ?></td>
                                  <td><?php echo $row['SerialNumber']; ?></td>
                                  <td><?php echo $row['ModelNumber']; ?></td>
                                  <td><?php echo $row['DatePurchase']; ?></td>
                                  <td><?php echo $row['MaintenanceDescription']; ?></td>
                                  <td><?php echo $row['MaintenanceDate']; ?></td>
                                  <td><?php echo $row['MaintenancePerformedBy']; ?></td>
                                  <td><?php echo $row['CostofMaintenance']; ?></td>
                                  <td><?php echo $row['NextMaintenancePlan']; ?></td>
                                  <td><?php echo $row['Remarks']; ?></td>
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