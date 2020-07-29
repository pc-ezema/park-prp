<?php 
  if (!isset($_SESSION['ACCOUNT_ID'])){
    redirect(web_root."admin/index.php");
   }


 ?> 
 
  <div class="container">
  <div class="card card-register mx-auto mt-2">
    <div class="card-header">Add New Report</div>
    <div class="card-body">  
	<form method="POST" action="upload.php" enctype="multipart/form-data">
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="form-group">
							<label>Date</label>
							<input class="form-control" type="hidden" name="department" value="Special Project" required/>
							<input type="date" class="form-control" name="date" required="required"/>
							<input class="form-control" type="hidden" name="evaluation_comment" value=" " required/>
						</div>
						<div class="form-group">
							<label>File</label>
							<input type="file" class="form-control" name="upload" required="required"/>
						</div>
					</div>
				</div>
				<br style="clear:both;"/>
				<div class="modal-footer">
				<button type="submit" class="btn btn-success form-control" name="submit"><span class="glyphicon glyphicon-upload"></span> Upload Report</button>
				</div>
	</form>
	 </div>
    </div>
  </div>
<div class="modal fade" id="form_modal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			
		</div>
	</div>
</div>