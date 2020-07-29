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
                                <h4>COMPLIANCE SOP</h4>
                            </div>
                        </div>
                        <div id="print">
                            <div class = "scroll">
                            <div class="body">
                                <table id = "example" class = "stripe" cellspacing = "0" >
                                <thead>
                                    <tr>
										<th width="15%">Date</th>
										<th>Name</th>
										<th>Evaluation/Comment</th>
                                        <th>Action</th>
									</tr>
                                </thead>
                                <tbody class="alert-success">
                                  <?php
                                    include('connect.php');
                                    $display = $con->prepare("SELECT * FROM tblcompliancefile WHERE department='SOP' ORDER BY file_id DESC");
                                    $display->execute();
                                    $fetch = $display->fetchAll();                               

                                      foreach($fetch as $key => $row) { 
										

                                  ?>
                                  <tr>
									<?php 
										$name = explode('/', $row['file']);
									?>
                                  <td><?php echo $row['date']; ?></td>
                                  <td><?php echo $row['name']; ?></td>
								  <td><?php echo $row['evaluation_comment']; ?></td>
								  <td> 
									<a href="compliancedownload.php?file=<?php echo $name[1]?>" class="btn btn-primary">
                                      <span class = "glyphicon glyphicon-pencil" aria-hidden = "true">Download</span>
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