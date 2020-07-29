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
                                <h4>ALL PROJECTS EXPENSES</h4>
                                <a href="print_all_project_expenses.php">
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
                                        <td>Project ID</td>
                                        <td>Expenses Type</td>
										<td>Expenses Item</td>
										<td>Supplier</td>
                                        <td>Date Given</td>
										<td>Date Added</td>
										<td>Amount</td>
										<td>Requested By</td>
										<td>Encoder</td>
										<td class="hidden">EMPID</td>
                                    </tr>
                                </thead>
                                <tbody class="alert-success">
                                
                                  <?php
                                    include('connect.php');
                                    $display = $con->prepare("SELECT * FROM tblexpenses ORDER BY EXPID DESC");
                                    $display->execute();
                                    $fetch = $display->fetchAll();                               

                                      foreach($fetch as $key => $row) { 
                                  ?>
                                  <tr>
								  <td><?php echo $row['PROJECTID']; ?></td>
                                  <td><?php echo $row['EXPTYPE']; ?></td>
                                  <td><?php echo $row['EXPITEM']; ?></td>
								  <td><?php echo $row['SUPPLIER']; ?></td>
								  <td><?php echo $row['DATEGIVEN']; ?></td>
								  <td><?php echo $row['DATEADDED']; ?></td>
								  <td><?php echo number_format($row['EXPENSES'],2); ?></td>
								  <td><?php echo $row['REQUESTEDBY']; ?></td>
								  <td><?php echo $row['ENCODER']; ?></td>
								  <td class="hidden"><?php echo $row['EMPID']; ?></td>
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