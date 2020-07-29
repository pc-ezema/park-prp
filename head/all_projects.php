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
                                <h4>ALL PROJECTS</h4>
                                <a href="print_all_projects.php">
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
                                        <td>ID</td>
                                        <td>Project Name</td>
                                        <td>Start Date</td>
                                        <td>End Date</td>
										<td>Remianing Days</td>
                                        <td>Project Cost</td>
										<td>Expenses</td>
                                        <td>Remaining Funds</td>
                                        <td>Status</td>
                                    </tr>
                                </thead>
                                <tbody class="alert-success">
                                
                                  <?php
                                    include('connect.php');
                                    $display = $con->prepare("SELECT * FROM tblproject ORDER BY PROJECTID DESC");
                                    $display->execute();
                                    $fetch = $display->fetchAll();                               

                                      foreach($fetch as $key => $row) { 
										$d1 =date_create($row['STARTDATE']);
										$d2 = date_create($row['ENDDATE']);
										$diff =  date_diff($d1, $d2);
										$cost = ($row['PROJECTCOST']);
										$exp  = ($row['PROJECTEXPENSES']);
										$remFund = $cost - $exp; 
                                  ?>
                                  <tr>
                                  <td><?php echo $row['PROJECTID']; ?></td>
								  <td><?php echo $row['PROJECTNAME']; ?></td>
                                  <td><?php echo $row['STARTDATE']; ?></td>
                                  <td><?php echo $row['ENDDATE']; ?></td>
								  <td><?php echo $diff->format("%R%a days"); ?></td>
                                  <td><?php echo number_format($row['PROJECTCOST'],2); ?></td>
								  <td><?php echo number_format($row['PROJECTEXPENSES'],2); ?></td>
								  <td><?php echo number_format($remFund,2); ?></td>
								  <td><?php echo $row['PROJECTSTATUS']; ?></td>
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