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
                                <h4>Poultry</h4>
								<select style="color: #000;" name="units"  onchange="window.location.href=this.value;">
								<option>Select Unit</option>
								<option value="admin_unit.php">Admin</option>
								<option value="booku_unit.php">Booku</option>
								<option value="banow_unit.php">Banow</option>
								<option value="distiller_unit.php">Distiller</option>
								<option value="feedmill_unit.php">Feedmill</option>
								<option value="compost_unit.php">Compost</option>
								<option value="bsf_unit.php">BSF</option>
								<option value="fishery_unit.php">Fishery</option>
								<option value="livestock_unit.php">Livestock</option>
								<option value="poultry_unit.php">Poultry</option>
								<option value="crop_unit.php">Crop</option>
								<option value="organic_unit.php">Organic</option>
								<option value="farmventure_unit.php">Farm Venture</option>
								<option value="security_unit.php">Security</option>
								<option value="hostel_unit.php">Hostel</option>
								<option value="apic.php">APIC</option>
								<option value="clinic.php">Clinic</option>
								<option value="post_harvest.php">Post Harvest</option>
								</select>
                                <a href="print_poultry_unit.php">
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
										<th>Items/Assets</th>
                                        <th>Quantity</th>
                                        <th>Date of Purchase</th>
                                        <th>Amount</th>                                  
                                        <th>Purchase By</th> 
                                        <th>Received By</th>										
                                    </tr>
                                </thead>
                                <tbody class="alert-success">
								<?php
                                    include('connect.php');
                                    $display = $con->prepare("SELECT * FROM poultryitems ORDER BY i_id DESC");
                                    $display->execute();
                                    $fetch = $display->fetchAll();                               

                                      foreach($fetch as $key => $row) { 
									  
                                  ?>
                                  <tr>
								  <td><?php echo $row['i_items']; ?></td>
                                  <td><?php echo $row['i_qty']; ?></td>
                                  <td><?php echo $row['i_dpurchase']; ?></td>								  
								  <td><?php echo $row['i_amount']; ?></td>
                                  <td><?php echo $row['i_purchaseby']; ?></td>
								  <td><?php echo $row['i_receiveby']; ?></td>
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