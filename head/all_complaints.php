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
                                <h4>ALL COMPLIANTS</h4>
                                <a href="print_all_facilitycomplaints.php">
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
                                        <th>Units</th>
                                        <th>Complaints Names</th>
                                        <th>Basis of Complaints</th>
										<th>Date of Complaints</th>
										<th>Complaints Received By</th>
                                        <th>Action Plan for Complaints</th>
                                        <th>Action Taken By</th>
                                        <th>Date Fixed</th>
                                        <th>Remarks</th>
                                    </tr>
                                </thead>
                                <tbody class="alert-success">
                                
                                  <?php
                                    include('connect.php');
                                    $display = $con->prepare("SELECT * FROM complaintslog ORDER BY id DESC");
                                    $display->execute();
                                    $fetch = $display->fetchAll();                               

                                      foreach($fetch as $key => $row) { 
                                  ?>
                                  <tr>
								  <td><?php echo $row['Units']; ?></td>
                                  <td><?php echo $row['ComplaintsNames']; ?></td>
                                  <td><?php echo $row['BasisofComplaints']; ?></td>
                                  <td><?php echo $row['DateofCompliants']; ?></td>
                                  <td><?php echo $row['ComplaintsReceivedBy']; ?></td>
                                  <td><?php echo $row['ActionPlanForComplaints']; ?></td>
                                  <td><?php echo $row['ActionPlanBy']; ?></td>
                                  <td><?php echo $row['DateFixed']; ?></td>
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