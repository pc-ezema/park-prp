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
                                <h4>ALL IMPREST </h4>
								<select style="color: #000;" name="units"  onchange="window.location.href=this.value;">
								<option>Select Unit</option>
								<option value="adminimprest.php">Admin Unit</option>
								<option value="bookuimprest.php">Booku Unit</option>
								<option value="banowimprest.php">Banow Unit</option>
								<option value="distillerimprest.php">Distiller Unit</option>
								<option value="feedmillimprest.php">Feedmill Unit</option>
								<option value="compostimprest.php">Compost Unit</option>
								<option value="bsfimprest.php">BSF Unit</option>
								<option value="fisheryimprest.php">Fishery Unit</option>
								<option value="livestockimprest.php">Livestock Unit</option>
								<option value="poultryimprest.php">Poultry Unit</option>
								<option value="cropimprest.php">Crop Unit</option>
								<option value="organicimprest.php">Organic Unit</option>
								<option value="farmventureimprest.php">Farm Venture Unit</option>
								<option value="securityimprest.php">Security Unit</option>
								<option value="hostelimprest.php">Hostel Unit</option>								
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
                                
                            </div>
                        </div>
                        <div id="print">
                            <div class = "scroll">
                            <div class="body">
                            
                             <table id = "example" class = "stripe" cellspacing = "0" >
                                
                                <tbody class="alert-success">
								
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