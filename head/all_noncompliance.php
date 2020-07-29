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
                                <h4>ALL NON-COMPLIANCE</h4>
                                <a href="print_all_noncompliance.php">
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
                                        <th>Person Reporting</th>
                                        <th>Title/Position</th>
										<th>Phone Number</th>
										<th>Unit</th>
										<th>Date</th>
										<th>Name of Violator</th>
										<th>Unit/Department</th>
										<th>Date of Violation</th>
										<th>Offence</th>
										<th>Cause of Violation(s)</th>
										<th>Corrective Action/Preventive Measures</th>
										<th>Remark</th>
                                    </tr>
                                </thead>
                                <tbody class="alert-success">
                                
                                  <?php
                                    include('connect.php');
                                    $display = $con->prepare("SELECT * FROM tblnoncompliance ORDER BY id DESC");
                                    $display->execute();
                                    $fetch = $display->fetchAll();                               

                                      foreach($fetch as $key => $row) { 
                                  ?>
                                  <tr>
								  <td><?php echo $row['Person_Reporting']; ?></td>
                                  <td><?php echo $row['Position']; ?></td>
                                  <td><?php echo $row['Phone_No']; ?></td>
                                  <td><?php echo $row['Unit']; ?></td>
                                  <td><?php echo $row['Date']; ?></td>
                                  <td><?php echo $row['Name_Violator']; ?></td>
                                  <td><?php echo $row['Department']; ?></td>
                                  <td><?php echo $row['Date_violation']; ?></td>
                                  <td><?php echo $row['Offence']; ?></td>
                                  <td><?php echo $row['Cause_Violation']; ?></td>
                                  <td><?php echo $row['Corrective_Action']; ?></td>
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