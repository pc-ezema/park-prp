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
                                <h4>ALL PROJECT CONTRACTORS/ARTISAN</h4>
                                <a href="print_all_contractors.php">
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
										<td>Photo</td>
                                        <td>Code Number</td>
                                        <td>Name</td>
                                        <td>Address</td>
										<td>Sex</td>
										<td>Birth Date</td>
										<td>Religion</td>
                                        <td>State of Origin</td>
										<td>LGA</td>
										<td>Tel No.</td>
										<td>Marital Status</td>
										<td>Skills</td>
										<td>Work Area</td>
                                        <td>Kin Name</td>
                                        <td>Kin Relationship</td>
										<td>Kin Occupation</td>
										<td>Kin Address</td>
                                        <td>Kin Phone Number</td>
										<td>Date Resumption</td>
                                    </tr>
                                </thead>
                                <tbody class="alert-success">
                                
                                  <?php
                                    include('connect.php');
                                    $display = $con->prepare("SELECT * FROM tblcontractors ORDER BY contractorid DESC");
                                    $display->execute();
                                    $fetch = $display->fetchAll();                               

                                      foreach($fetch as $key => $row) { 
                                  ?>
                                  <tr>
								  <td>
								  <img src="../special_project/module/contractor/<?php echo $row['photo']?>" height="80" width="100"/>
								  </td>
                                  <td><?php echo $row['CODENUMBER']; ?></td>
								  <td><?php echo $row['SNAME'].", ".$row['ONAME']; ?></td>
                                  <td><?php echo $row['HADDRESS']; ?></td>
                                  <td><?php echo $row['Sex']; ?></td>
								  <td><?php echo $row['DateofBirth']; ?></td>
                                  <td><?php echo $row['Religion']; ?></td>
								  <td><?php echo $row['StateofOrigin']; ?></td>
								  <td><?php echo $row['LGA']; ?></td>
                                  <td><?php echo $row['TELNO']; ?></td>
                                  <td><?php echo $row['MaritalStatus']; ?></td>
                                  <td><?php echo $row['Skills']; ?></td>
                                  <td><?php echo $row['WorkArea']; ?></td>
                                  <td><?php echo $row['KinName']; ?></td>
								  <td><?php echo $row['KinRelationship']; ?></td>
                                  <td><?php echo $row['KinOccupation']; ?></td>
                                  <td><?php echo $row['KinAddress']; ?></td>
                                  <td><?php echo $row['KinPhoneNumber']; ?></td>
                                  <td><?php echo $row['DateResumption']; ?></td>
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