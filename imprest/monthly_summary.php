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
                                <h4>Inventory Monthly Summary</h4>
								<form method="POST" class="form-inline" action="">
								<select name="date" class="form-control" required="required">
									<option value="">---Select month---</option>
									<option value="1">January</option>
									<option value="2">February</option>
									<option value="3">March</option>
									<option value="4">April</option>
									<option value="5">May</option>
									<option value="6">June</option>
									<option value="7">July</option>
									<option value="8">August</option>
									<option value="9">September</option>
									<option value="10">October</option>
									<option value="11">November</option>
									<option value="12">December</option>
								</select>
								<button class="btn btn-primary" name="filter"><span class="glyphicon glyphicon-search"></span>Filter</button>
								</form>
                                <a href="summary/print_monthlysummary.php">
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
										<th>S/N</th>
                                        <th>UNITS</th>
                                        <th>EXPENSES</th>
                                    </tr>
									<tr>
										<td>1</td>
										<td>Admin</td>
										<td><?php include 'filter/admin_unit.php'?></td>
									</tr>
									<tr>
										<td>2</td>
										<td>Booku</td>
										<td><?php include 'filter/booku_unit.php'?></td>
									</tr>
									<tr>
										<td>3</td>
										<td>Banow</td>
										<td><?php include 'filter/banow_unit.php'?></td>
									</tr>
									<tr>
										<td>4</td>
										<td>Distiller</td>
										<td><?php include 'filter/distiller_unit.php'?></td>
									</tr>
									<tr>
										<td>5</td>
										<td>Feedmill</td>
										<td><?php include 'filter/feedmill_unit.php'?></td>
									</tr>
									<tr>
										<td>6</td>
										<td>Compost</td>
										<td><?php include 'filter/compost_unit.php'?></td>
									</tr>
									<tr>
										<td>7</td>
										<td>BSF</td>
										<td><?php include 'filter/bsf_unit.php'?></td>
									</tr>
									<tr>
										<td>8</td>
										<td>Fishery</td>
										<td><?php include 'filter/fishery_unit.php'?></td>
									</tr>
									<tr>
										<td>9</td>
										<td>Livestock</td>
										<td><?php include 'filter/livestock_unit.php'?></td>
									</tr>
									<tr>
										<td>10</td>
										<td>Poultry</td>
										<td><?php include 'filter/poultry_unit.php'?></td>
									</tr>
									<tr>
										<td>11</td>
										<td>Crop</td>
										<td><?php include 'filter/crop_unit.php'?></td>
									</tr>
									<tr>
										<td>12</td>
										<td>Organic</td>
										<td><?php include 'filter/organic_unit.php'?></td>
									</tr>
									<tr>
										<td>13</td>
										<td>Farm Venture</td>
										<td><?php include 'filter/farmventure_unit.php'?></td>
									</tr>
									<tr>
										<td>14</td>
										<td>Security</td>
										<td><?php include 'filter/security_unit.php'?></td>
									</tr>
									<tr>
										<td>15</td>
										<td>Hostel</td>
										<td><?php include 'filter/hostel_unit.php'?></td>
									</tr>
									<tr>
										<td>16</td>
										<td>Logistics</td>
										<td><?php include 'filter/logistics.php'?></td>
									</tr>
									<tr>
										<td>17</td>
										<td>Facility</td>
										<td><?php include 'filter/facility.php'?></td>
									</tr>
									<tr>
										<td>18</td>
										<td>Fleet</td>
										<td><?php include 'filter/fleet.php'?></td>
									</tr>
									<tr>
										<td>19</td>
										<td>Artisan</td>
										<td><?php include 'filter/artisan.php'?></td>
									</tr>
									<tr>
										<td>20</td>
										<td>APIC</td>
										<td><?php include 'filter/apic.php'?></td>
									</tr>
									<tr>
										<td>21</td>
										<td>Welfare</td>
										<td><?php include 'filter/welfare.php'?></td>
									</tr>
									<tr>
										<td>22</td>
										<td>Otulogistics</td>
										<td><?php include 'filter/otulogistics.php'?></td>
									</tr>
									<tr>
										<td>23</td>
										<td>Tede</td>
										<td><?php include 'filter/tede.php'?></td>
									</tr>
									<tr>
										<td>24</td>
										<td>R-D</td>
										<td><?php include 'filter/r-d.php'?></td>
									</tr>
									<tr>
										<td>25</td>
										<td>Snailery</td>
										<td><?php include 'filter/snailery.php'?></td>
									</tr>
									<tr>
										<td>26</td>
										<td>Special Project</td>
										<td><?php include 'filter/special_project.php'?></td>
									</tr>
									<tr>
										<th></th>
										<th>Total</th>
										<th><?php include 'filter/total.php'?></th>
									</tr>
                                </thead>
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