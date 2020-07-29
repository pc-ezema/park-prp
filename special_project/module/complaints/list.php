<?php
require_once("../../include/initialize.php");
 if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."/index.php");
     }

?>
<div class="card mb-3">

        <div class="card-header">
          <i class="fa fa-table"></i> List of Complaint(s)  <a href="index.php?view=add" class="btn btn-primary  ">  <i class="fa fa-plus-circle fw-fa"></i> New</a></div>

         
        <div class="card-body">
          <div class="table-responsive">
	 		    <form action="" Method="POST">  
			    		
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				
				  <thead>
				  	<tr>
				  	<!-- 	<th>Code</th> -->
				  		<th width="7%">Units</th>
						<th width="20%">Complaints Names</th>
						<th width="10%">Basis of Complaints</th>
						<th width="5%">Date of Complaints</th>
						<th width="10%">Complaints Received By</th>
						<th width="15%">Action Plan for Complaints</th>
						<th>Action Taken By</th>
                        <th>Date Fixed</th>
						<th width="20%">Remarks</th>
						<th width="20%">Action</th>
				  	</tr>	
				  </thead>
				  <tbody>
							<?php
                                    require 'connection.php';
                                    $display = $con->prepare("SELECT * FROM complaintslog WHERE ActionPlanBy='Special Project Manager' ORDER BY id DESC");
                                    $display->execute();
                                    $fetch = $display->fetchAll();                               

                                      foreach($fetch as $key => $row) { 
                                  ?>
						<tr>
							<td><?php echo $row['Units'];?></td>
							<td><?php echo $row['ComplaintsNames'];?></td>
							<td><?php echo $row['BasisofComplaints'];?></td>
							<td><?php echo $row['DateofCompliants'];?></td>
							<td><?php echo $row['ComplaintsReceivedBy'];?></td>
							<td><?php echo $row['ActionPlanForComplaints'];?></td>
							<td><?php echo $row['ActionPlanBy']; ?></td>
                            <td><?php echo $row['DateFixed']; ?></td>
							<td><?php echo $row['Remarks'];?></td>
							<td align="center" > 
								
								<a title="Edit" href="index.php?view=edit&id=<?php echo $row['id'];?>"  class="btn btn-primary btn-xs  ">  <span class="fa fa-edit fw-fa"></span></a>

									<a title="Delete" class="btn btn-primary btn-xs" href="delete_complaints_query.php?id=<?php echo $row['id']?>"><span class="fa fa-remove fw-fa"></span></a>
                                    </a> 
                            </td>
							
						</tr>
					<?php
						}
					?>
				</tbody>
								 
				</table>
			
				</form>
	
       </div>
        </div>
      
      </div>