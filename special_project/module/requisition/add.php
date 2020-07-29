<?php 
  if (!isset($_SESSION['ACCOUNT_ID'])){
    redirect(web_root."admin/index.php");
   }


 ?> 
 
  <div class="container">
  <div class="card card-register mx-auto mt-2">
    <div class="card-header">Add New Requisition</div>
    <div class="card-body">  
	<form method="POST" action="save.php" enctype="multipart/form-data">
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-12">
					<label><h3>Purchase Requisition Form</h3></label>
						<div class="form-group">
							<label><b>Requisition Info</b></label>
							<input type="hidden" class="form-control" name="prepared_by" value="Special Project Manager" required />
						</div>
						<div class="form-group">
							<label>Date</label>
							<input type="date" class="form-control" name="date" required="required"/>
						</div>
						<div class="form-group">
							<label>Department</label>
							<input type="text" class="form-control" name="department" required="required"/>
						</div>	
						<div class="form-group">
							<label>Phone No</label>
							<input type="number" class="form-control" name="phone_no" required="required"/>
						</div>						
						<div class="form-group">
							<label>Purpose</label>
							<input type="text" class="form-control" name="purpose" required="required"/>
						</div>
						<div class="form-group">
							<label>Purchase Mode</label>
							<input type="text" class="form-control" name="purchase_mode" required="required"/>
						</div>
						<div class="form-group">
							<label><b>Recommende Vendor</b></label>
						</div>
						<div class="form-group">
							<label>Name</label>
							<input type="text" class="form-control" name="name" required="required"/>
						</div>
						<div class="form-group">
							<label>Address</label>
							<input type="text" class="form-control" name="address" required="required"/>
						</div>
						<div class="form-group">
							<label>Phone No</label>
							<input type="number" class="form-control" name="phone_no" required="required"/>
						</div>
						<div class="form-group">
							<label>Pay Mode</label>
							<input type="text" class="form-control" name="pay_mode" required="required"/>
						</div>
						<div class="form-group">
							<label><b>Expenses Description</b></label>
						</div>
						<div class="form-group">
							<label>Description of Expenses</label>
							<textarea type="text" class="form-control" rows="20" style="resize:none;" name="desc_expenses" required></textarea>
						</div>						
						<div class="form-group">
							<label>Quantity</label>
							<textarea type="text" class="form-control" rows="5" name="quantity" required></textarea>
						</div>
						<div class="form-group">
							<label>Unit Price</label>
							<textarea type="text" class="form-control" rows="5" name="unit_price" style="resize:none;" required></textarea>
						</div>
						<div class="form-group">
							<label>Amount</label>
							<input type="number" class="form-control" name="amount" required="required"/>
						</div>
						<div class="form-group">
							<label>Amount In Word</label>
							<textarea type="text" class="form-control" rows="3" name="amount_word" style="resize:none;" required></textarea>
						</div>
						<div class="form-group">
							<input type="hidden" class="form-control" name="status" required="required"/>
						</div>
					</div>
				</div>
				<br style="clear:both;"/>
				<div class="modal-footer">
					<button class="btn btn-primary btn-block" name="save" type="submit" ><span class="glyphicon glyphicon-floppy-save"></span> Save Requisition</button>
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