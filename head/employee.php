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
                                <h4>ALL EMPLOYEES</h4>
                                <a href="print_all_employees.php">
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
										<td>Name</td>
                                        <td>Address</td>
                                        <td>Birth Date</td>
                                        <td>Birth Place</td>
                                        <td>Age</td>
                                        <td>Sex</td>
                                        <td>Civil Status</td>
                                        <td>Tel No.</td>
                                        <td>Citizenship</td>
                                        <td>Religion</td>
                                        <td>Height</td>
                                        <td>Weight</td>
                                        <td>Blood Type</td>
                                        <td>Email Address</td>
                                        <td>Cell No.</td>
                                        <td>Position</td>
                                        <td>Work States</td>
										<td>Department</td>
                                        <td>Division</td>
                                        <td>Date Hired</td>
                                    </tr>
                                </thead>
                                <tbody class="alert-success">
                                
                                  <?php
                                    include('connect.php');
                                    $display = $con->prepare("SELECT * FROM tblemployees LEFT JOIN tbldepartment ON tblemployees.DEPARTMENTID =tbldepartment.DEPARTMENTID LEFT JOIN tbldivision ON tblemployees.DIVISIONID = tbldivision.DIVISIONID ORDER BY EMPLOYEEID DESC");
                                    $display->execute();
                                    $fetch = $display->fetchAll();                               

                                      foreach($fetch as $key => $row) { 
                                        $DEPARTMENTID = $row['DEPARTMENTID'];
                                        $DIVISIONID = $row['DIVISIONID'];
                                  ?>

                                  <tr>
								  <td>
								  <img src="../employee/<?php echo $row['EMPPHOTO']?>" height="80" width="100"/>
								  </td>
								  <td><?php echo $row['LNAME'].", ".$row['FNAME']." ".$row['MNAME']; ?></td>
                                  <td><?php echo $row['ADDRESS']; ?></td>
                                  <td><?php echo $row['BIRTHDATE']; ?></td>
                                  <td><?php echo $row['BIRTHPLACE']; ?></td>
                                  <td><?php echo $row['AGE']; ?></td>
                                  <td><?php echo $row['SEX']; ?></td>
                                  <td><?php echo $row['CIVILSTATUS']; ?></td>
                                  <td><?php echo $row['TELNO']; ?></td>
                                  <td><?php echo $row['CITIZENSHIP']; ?></td>
                                  <td><?php echo $row['RELIGION']; ?></td>
                                  <td><?php echo $row['HEIGHT']; ?></td>
                                  <td><?php echo $row['WEIGHT']; ?></td>
                                  <td><?php echo $row['BLOODTYPE']; ?></td>
                                  <td><?php echo $row['EMAILADDRESS']; ?></td>
                                  <td><?php echo $row['CELLNO']; ?></td>
                                  <td><?php echo $row['POSITION']; ?></td>
                                  <td><?php echo $row['WORKSTATS']; ?></td>
								  <td values="<?php echo $row['DEPARTMENTID']; ?>"><?php echo $row['DEPARTMENT']; ?></td>
                                  <td values="<?php echo $row['DIVISIONID']; ?>"><?php echo $row['DIVISION']; ?></td>
                                  <td><?php echo $row['DATEHIRED'];?></td>
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