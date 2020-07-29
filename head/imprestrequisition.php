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
                                <h4>ALL IMPREST REQUISITION</h4>
                                <a href="print_all_imprestrequisition.php">
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
										<th width="10%">Prepared By</th>
                                        <th width="10%">Date</th>
										<th width="20%">Department</th>
										<th width="10%">Phone No.</th>
										<th width="10%">Purpose</th>
										<th width="10%">Purchase Mode</th>
										<th width="10%">Name</th>
										<th width="10%">Address</th>
										<th width="10%">Phone No.</th>
										<th width="10%">Pay Mode</th>
										<th width="10%">Description of Expenses</th>
										<th width="5%">Quantity</th>
										<th width="10%">Unit Price</th>
										<th width="10%">Amount</th>
										<th width="10%">Amount In Word</th>
										<th width="13%">Status</th>
										<th width="10%">Action</th>
									</tr>
                                </thead>
                                <tbody class="alert-success">
                                  <?php
                                    include('connect.php');
                                    $display = $con->prepare("SELECT * FROM tblrequisition WHERE PreparedBy='Imprest Manager' ORDER BY i_id DESC");
                                    $display->execute();
                                    $fetch = $display->fetchAll();   

									foreach($fetch as $key => $row) { 
                                  ?>
                                  <tr>
								  <td><?php echo $row['PreparedBy']; ?></td>
                                  <td><?php echo $row['Date']; ?></td>
                                  <td><?php echo $row['Department']; ?></td>
                                  <td><?php echo $row['Phone_No']; ?></td>
                                  <td><?php echo $row['Purpose']; ?></td>
                                  <td><?php echo $row['Purchase_Mode']; ?></td>
                                  <td><?php echo $row['Name']; ?></td>
                                  <td><?php echo $row['Address']; ?></td>
                                  <td><?php echo $row['PhoneNO']; ?></td>
                                  <td><?php echo $row['Pay_mode']; ?></td>
                                  <td><?php echo $row['Description_Expenses']; ?></td>
                                  <td><?php echo $row['Quantity']; ?></td>
                                  <td><?php echo $row['Unit_Price']; ?></td>
                                  <td><?php echo $row['Amount']; ?></td>
                                  <td><?php echo $row['Amount_Word']; ?></td>
                                  <td><?php echo $row['Status']; ?></td>
								  <td>     
                                    <a class="btn btn-success btn-sm" href="approve_imprestrequisition.php?i_id=<?php echo $row['i_id']?>">
                                      <span class = "glyphicon glyphicon-pencil" aria-hidden = "true">Edit</span>
                                    </a>                                 
                                  </td>
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