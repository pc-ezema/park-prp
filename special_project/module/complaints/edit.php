<?php 
if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }
require 'connection.php';  
$result=$con->prepare("SELECT * FROM complaintslog WHERE id='{$_GET['id']}'");
$result->execute();
$fetch = $result->fetchall(); 

foreach ($fetch as $key => $row) {
	
 ?> 
 
  <div class="container">
  <div class="card card-register mx-auto mt-2">
    <div class="card-header">Edit Complaints</div>
    <div class="card-body">  
	<form method="POST" action="edit_complaints_query.php" enctype="multipart/form-data">
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-12">
						<div class="form-group">
							<label>Unit</label>
							<input type="hidden" name="id"  value="<?php echo $row['id']; ?>"/>
							<input type="text" class="form-control" name="unit" required="required" value="<?php echo $row['Units']; ?>"/>
						</div>
						<div class="form-group">
							<label>Complaints Names</label>
							<input type="text" class="form-control" name="complaints_name" required="required" value="<?php echo $row['ComplaintsNames']; ?>"/>
						</div>	
						<div class="form-group">
							<label>Basis of Complaints</label>
							<textarea type="text" class="form-control" name="basis_complaints" rows="4" style="resize:none;" required="required"/><?php echo $row['BasisofComplaints']; ?></textarea>
						</div>						
						<div class="form-group">
							<label>Date of Complaints</label>
							<input type="date" class="form-control" name="date_complaints" required="required" value="<?php echo $row['DateofCompliants']; ?>"/>
						</div>
						<div class="form-group">
							<label>Complaints Received By</label>
							<input type="text" class="form-control" name="compliants_received" required="required" value="<?php echo $row['ComplaintsReceivedBy']; ?>"/>
						</div>
						<div class="form-group">
							<label>Action Plan For Complaints</label>
							<textarea type="text" class="form-control" name="action_plan" rows="4" style="resize:none;" required="required"/><?php echo $row['ActionPlanForComplaints']; ?></textarea>
						</div>
						<div class="form-group">
							<label>Action To Be Taken By</label>
							<input type="text" class="form-control" name="action_taken" value="<?php echo $row['ActionPlanBy']; ?>" required="required" readonly/>
						</div>
						<div class="form-group">
							<label>Date Fixed</label>
							<input type="date" class="form-control" name="date_fixed" value="<?php echo $row['DateFixed']; ?>"/>
						</div>
						<div class="form-group">
							<label>Remark</label>
							<textarea type="text" class="form-control" name="remarks" style="resize:none;" required="required"/><?php echo $row['Remarks']; ?></textarea>
						</div>
					</div>
				</div>
				<br style="clear:both;"/>
				<div class="modal-footer">
				<button type="submit" class="btn btn-success form-control" name="update"><span class="glyphicon glyphicon-upload"></span> Update</button>
				</div>
	</form>
<?php } ?>
	 </div>
    </div>
  </div>
<div class="modal fade" id="form_modal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			
		</div>
	</div>
</div>