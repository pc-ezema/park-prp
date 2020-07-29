<div class="container">
 <form action="upload.php" method="POST" enctype="multipart/form-data">
    <!-- Main content --> 
        <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i>PARK ADMINISTRATION SERVICES
            <small class="pull-right">Date: <?php echo date('m/d/Y'); ?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
	  <div>
                 <h2>Weekly Report</h2>
      </div>
			<input class="hidden" class="form-control" type="text" name="department" value="Human Resource" required/>
			<input class="hidden" class="form-control" type="text" name="evaluation_comment" value=" " required/>
			<input class="form-control" type="date" name="date" required/>
			<input class="form-control" type="file" name="upload" required/>
			<span class="pull-left"> <button type="submit" class="btn btn-primary" name="submit" >Upload Report</button></span>  
      <!-- Table row -->
      <div class="row">
		<div class="col-xs-12 col-md-12">
		
		<table   class="table table-striped  table-hover table-responsive" style="font-size:12px" cellspacing="0">

							  <thead>
							  	<tr>
							  		<th width="15%">Date</th>
							  		<th width="30%">Name</th>
							  		<th>Evaluation (Comment)</th>
									<th>Action</th>
							  	</tr>	
							  </thead> 
							  <tbody>
							  <tbody class="alert-success">
				<?php
					require 'connection.php';
					$row = $conn->query("SELECT * FROM `file` WHERE department='Human Resource'") or die(mysqli_error());
					while($fetch = $row->fetch_array()){
				?>
					<tr>
						<?php 
							$name = explode('/', $fetch['file']);
						?>
						<td><?php echo $fetch['date']?></td>
						<td><?php echo $fetch['name']?></td>
						<td><?php echo $fetch['evaluation_comment']?></td>
						<td><a href="download.php?file=<?php echo $name[1]?>" class="btn btn-primary">Download</a>
						<a href="delete.php?file_id=<?php echo $fetch['file_id']?>" class="btn btn-primary">Delete</a></td>
					</tr>
				<?php
					}
				?>
			</tbody>
								 
							</table>
            
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
 
</form>
    <!-- /.content -->
    <div class="clearfix"></div>
 
</div> 
<!-- ./wrapper -->
  