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
                                <h4>ALL TRANSFERS DONE</h4>
                                <a href="print_all_transfers.php">
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
                                        <td>Equipment Description</td>
                                        <td>Serial Number</td>
                                        <td>Model Number</td>
										<td>Date Purchase</td>
                                        <td>Unit Transferred From</td>
										<td>Unit Transferred to</td>
                                        <td>Transferred By</td>
                                        <td>Date Transferred</td>
										<td>Transferred Received By</td>
                                        <td>Reasons for Transfer</td>
                                        <td>Remarks</td>
                                    </tr>
                                </thead>
                                <tbody class="alert-success">
                                
                                  <?php
                                    include('connect.php');
                                    $display = $con->prepare("SELECT * FROM transferlog ORDER BY id DESC");
                                    $display->execute();
                                    $fetch = $display->fetchAll();                               

                                      foreach($fetch as $key => $row) { 
                                  ?>
                                  <tr>
                                  <td><?php echo $row['EquipmentDescription']; ?></td>
                                  <td><?php echo $row['SerialNumber']; ?></td>
                                  <td><?php echo $row['ModelNumber']; ?></td>
                                  <td><?php echo $row['DatePurchase']; ?></td>
                                  <td><?php echo $row['UnitTransferredFrom']; ?></td>
                                  <td><?php echo $row['UnitTransferredTo']; ?></td>
                                  <td><?php echo $row['TransferredBy']; ?></td>
                                  <td><?php echo $row['DateTransferred']; ?></td>
                                  <td><?php echo $row['TransferReceivedBy']; ?></td>
                                  <td><?php echo $row['ReasonsforTransfer']; ?></td>
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