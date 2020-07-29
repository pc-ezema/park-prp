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
                                <h4>BSF Imprest</h4>
								<select style="color: #000;" name="units"  onchange="window.location.href=this.value;">
								<option>Select Unit</option>
								<option value="adminimprest.php">Admin</option>
								<option value="bookuimprest.php">Booku</option>
								<option value="banowimprest.php">Banow</option>
								<option value="distillerimprest.php">Distiller</option>
								<option value="feedmillimprest.php">Feedmill</option>
								<option value="compostimprest.php">Compost</option>
								<option value="bsfimprest.php">BSF</option>
								<option value="fisheryimprest.php">Fishery</option>
								<option value="livestockimprest.php">Livestock</option>
								<option value="poultryimprest.php">Poultry</option>
								<option value="cropimprest.php">Crop</option>
								<option value="organicimprest.php">Organic</option>
								<option value="farmventureimprest.php">Farm Venture</option>
								<option value="securityimprest.php">Security</option>
								<option value="hostelimprest.php">Hostel</option>								
								<option value="logisticsimprest.php">Logistics</option>
								<option value="facilityimprest.php">Facility</option>
								<option value="fleetimprest.php">Fleet</option>
								<option value="artisanimprest.php">Artisan</option>
								<option value="apicimprest.php">APIC</option>
								<option value="welfareimprest.php">Welfare</option>
								<option value="otulogisticsimprest.php">Otuologistics</option>
								<option value="tedeimprest.php">Tede</option>
								<option value="r-dimprest.php">R-D</option>
								<option value="snaileryimprest.php">Snailery</option>
								<option value="specialprojectimprest.php">Special Project</option>
								</select>
                                <a href="print_imprest/print_bsfimprest.php">
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
                                        <th>Description</th>
                                        <th>Amount</th>	
                                    </tr>
                                </thead>
                                <tbody class="alert-success">
								<?php
                                    include('connect.php');
                                    $display = $con->prepare("SELECT * FROM bsfimprest ORDER BY id DESC");
                                    $display->execute();
                                    $fetch = $display->fetchAll();                               

                                      foreach($fetch as $key => $row) { 
									  
                                  ?>
                                  <tr>
								  <td><?php echo $row['date']; ?></td>
                                  <td><?php echo $row['Description']; ?></td>
                                  <td><?php echo $row['Amount']; ?></td>
                                  </tr>
								<?php 
                                     } ?>
                                </tbody>
								<tbody>
								<?php
										include('connect.php');
										$display = $con->prepare("SELECT sum(Amount) FROM bsfimprest");
										$display->execute();
									
										for($i=0; $row = $display->fetch(); $i++){
								?>
								<tr>
									<th></th>
									<th>TOTAL</th>
									<th><?php echo $row['sum(Amount)']; ?></th>
									<th></th>
									<th></th>
								</tr>
								<?php
										}
										?>
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