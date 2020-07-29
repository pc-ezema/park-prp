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
                                <h4>ALL CORPERS</h4>
                                <a href="print_all_corpers.php">
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
                                        <td>Birth Date</td>
										<td>Religion</td>
                                        <td>Birth Place</td>
										<td>Country</td>
                                        <td>Sex</td>
										<td>Nationality</td>
                                        <td>State of Origin</td>
                                        <td>LGA</td>
                                        <td>Home Place</td>
                                        <td>Address</td>
                                        <td>Tel No.</td>
                                        <td>Email</td>
                                        <td>Marital Status</td>
                                        <td>Health Limitations</td>
                                        <td>Blood Group</td>
                                        <td>Genotype</td>
                                        <td>Level Education</td>
										<td>Institution Attended</td>
                                        <td>Course of Study</td>
                                        <td>Coordinator Name/Number</td>
                                        <td>Kin Name</td>
                                        <td>Kin Relationship</td>
										<td>Kin Address</td>
                                        <td>Kin Phone Number</td>
                                    </tr>
                                </thead>
                                <tbody class="alert-success">
                                
                                  <?php
                                    include('connect.php');
                                    $display = $con->prepare("SELECT * FROM tblcorper ORDER BY corperid DESC");
                                    $display->execute();
                                    $fetch = $display->fetchAll();                               

                                      foreach($fetch as $key => $row) { 
                                  ?>
                                  <tr>
								  <td>
								  <img src="../human_resource/<?php echo $row['photo']?>" height="80" width="100"/>
								  </td>
                                  <td><?php echo $row['CODE']; ?></td>
								  <td><?php echo $row['SNAME'].", ".$row['FNAME']." ".$row['MNAME']; ?></td>
                                  <td><?php echo $row['DateofBirth']; ?></td>
                                  <td><?php echo $row['Religion']; ?></td>
                                  <td><?php echo $row['PlaceofBirth']; ?></td>
								  <td><?php echo $row['Country']; ?></td>
                                  <td><?php echo $row['Sex']; ?></td>
                                  <td><?php echo $row['Nationality']; ?></td>
                                  <td><?php echo $row['StateofOrigin']; ?></td>
                                  <td><?php echo $row['LGA']; ?></td>
                                  <td><?php echo $row['HomePlace']; ?></td>
                                  <td><?php echo $row['RADDRESS']; ?></td>
                                  <td><?php echo $row['TELNO']; ?></td>
                                  <td><?php echo $row['Email']; ?></td>
                                  <td><?php echo $row['MaritalStatus']; ?></td>
                                  <td><?php echo $row['HealthLimitations']; ?></td>
                                  <td><?php echo $row['BloodGroup']; ?></td>
                                  <td><?php echo $row['Geneotype']; ?></td>
                                  <td><?php echo $row['LevelEducation']; ?></td>
                                  <td><?php echo $row['InstitutionAttended']; ?></td>
                                  <td><?php echo $row['CourseofStudy']; ?></td>
                                  <td><?php echo $row['CoordinatorName']; ?></td>
                                  <td><?php echo $row['KinName']; ?></td>
                                  <td><?php echo $row['KinRelationship']; ?></td>
                                  <td><?php echo $row['KinAddress'];?></td>
								  <td><?php echo $row['KinPhoneNumber']; ?></td>
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