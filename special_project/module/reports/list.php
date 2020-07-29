<?php
require_once("../../include/initialize.php");
 if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."/index.php");
     }

?>
<div class="card mb-3">

        <div class="card-header">
          <i class="fa fa-table"></i> List of Weekly Report(s)   <a href="index.php?view=add" class="btn btn-primary  ">  <i class="fa fa-plus-circle fw-fa"></i> New</a></div>

         
        <div class="card-body">
          <div class="table-responsive">
	 		    <form action="" Method="POST">  
			    		
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				
				  <thead>
				  	<tr>
				  	<!-- 	<th>Code</th> -->
				  		<th>Date</th>
						<th>Name</th>
						<th>Evaluation</th>
						<th>Action</th>
				  	</tr>	
				  </thead>
				  <tbody class="alert-success">
					<?php
						require 'connection.php';
						$row = $conn->query("SELECT * FROM `file` WHERE department='Special Project' ORDER BY file_id DESC") or die(mysqli_error());
						while($fetch = $row->fetch_array()){
					?>
						<tr>
							<?php 
								$name = explode('/', $fetch['file']);
							?>
							<td><?php echo $fetch['date']?></td>
							<td><?php echo $fetch['name']?></td>
							<td><?php echo $fetch['evaluation_comment']?></td>
							<td><a href="download.php?file=<?php echo $name[1]?>" class="btn btn-primary"><span class="glyphicon glyphicon-download"></span> Download</a>
							<a href="delete.php?file_id=<?php echo $fetch['file_id']?>" class="btn btn-primary"><span class="glyphicon glyphicon-remove"></span> Delete</a></td>
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