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
                                <h4>PSS Bio-Data</h4>
								<a href="add_pss.php">
                                    <input type="button" value="Add" class="print btn-default" style="margin-right: 80px; width: auto;">
                                </a>
                                <a href="print_pss.php">
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
										<th>Photo</th>
										<th>CodeNumber</th>
										<th>Firstname</th>
										<th>Lastname</th>
										<th>Action</th>
									</tr>
                                </thead>
                                <tbody class="alert-success">
                                  <?php
								  
								  include('connect.php');
                                    $display = $con->prepare("SELECT * FROM tblpss ORDER BY pssid DESC");
                                    $display->execute();
                                    $fetch = $display->fetchAll(); 

									foreach($fetch as $key => $row) { 
                                  ?>
                                  <tr>
									  <td><img src="<?php echo $row['photo']?>" height="80" width="100"/></td>
									  <td><?php echo $row['CODE']; ?></td>
									  <td><?php echo $row['SNAME']; ?></td>
									  <td><?php echo $row['ONAME']; ?></td>
									  
								  <td> 								  
									<a class="btn btn-success btn-xs" href="view_pss.php?id=<?php echo $row['pssid']?>">
                                      <span class = "glyphicon glyphicon-eye-open" aria-hidden = "true">View</span>
                                    </a> 
                                    <a class="btn btn-success btn-xs" href="edit_pss.php?id=<?php echo $row['pssid']?>">
                                      <span class = "glyphicon glyphicon-edit" aria-hidden = "true">Edit</span>
                                    </a> 
									<a class="btn btn-success btn-xs" href="query/delete_pss_query.php?id=<?php echo $row['pssid']?>">
                                      <span class = "glyphicon glyphicon-remove" aria-hidden = "true">Delete</span>
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
	
	// Get the modal
	var modal = document.getElementById("myModal");

	// Get the button that opens the modal
	var btn = document.getElementById("myBtn");

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks the button, open the modal 
	btn.onclick = function() {
	  modal.style.display = "block";
	}

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
	  modal.style.display = "none";
	}

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
	  if (event.target == modal) {
		modal.style.display = "none";
	  }
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