<?php
	 if (!isset($_SESSION['USERID'])){
      redirect(web_root."admin/index.php");
     }

?>
<section id="feature" class="transparent-bg">
        <div class="container">
           <div class="center wow fadeInDown">
                 <h2 class="page-header">List of Employees</h2>
                <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p> -->
            </div>
               
            <div class="row">
                <div class="features">
 
						<form class="wow fadeInDownaction" action="controller.php?action=delete" Method="POST">   		
							<table id="dash-table" class="table table-striped  table-hover table-responsive" style="font-size:12px" cellspacing="0">

							  <thead>
							  	<tr>
							  		<th width="5%">EmployeeNo</th>
							  		 <th>Name</th>
							  		<th>Address</th>
							  		 <th>Sex</th>
							  		 <th>Age</th>
							  		 <th>ContactNo</th>
							  		 <th>Department</th>
							  	 	<th width="14%" >Action</th> 
							  	</tr>	
							  </thead> 
							  <tbody>
							  	<?php   
							  		// $mydb->setQuery("SELECT * 
											// 			FROM  `tblusers` WHERE TYPE != 'Customer'");
							  		$mydb->setQuery("SELECT * 
														FROM   `tblemployees` e,`tbldepartment` d WHERE e.DEPARTMENTID=d.DEPARTMENTID");
							  		$cur = $mydb->loadResultList();

									foreach ($cur as $result) { 
							  		echo '<tr>';
							  		// echo '<td width="5%" align="center"></td>';
							  		echo '<td>' . $result->EMPLOYEEID.'</a></td>';
							  		echo '<td>'. $result->LNAME.', '. $result->FNAME.'</td>';
							  		echo '<td>'. $result->ADDRESS.'</td>';
							  		echo '<td>'. $result->SEX.'</td>';
							  		echo '<td>'. $result->AGE.'</td>';
							  		echo '<td>'. $result->TELNO.'</td>';
							  		echo '<td>'. $result->DEPARTMENT.'</td>';
							  	  
							  		echo '<td align="center" >  
					  		             <a title="view" href="index.php?view=view&id='.$result->EMPLOYEEID.'"  class="btn btn-info btn-xs  ">
					  		             <span class="fa fa-info fw-fa">view</span></a>
					  		             <a title="Edit" href="index.php?view=edit&id='.$result->EMPLOYEEID.'"  class="btn btn-info btn-xs  ">
					  		             <span class="fa fa-edit fw-fa">edit</span></a>
					  					 <a title="Delete" href="controller.php?action=delete&id='.$result->EMPLOYEEID.'" class="btn btn-danger btn-xs" 
					  					 ><span class="fa fa-trash-o fw-fa">Delete</span> </a>
					  					 </td>';
							  		echo '</tr>';
							  	} 
							  	?>
							  </tbody>
								
							</table>

							 <div class="btn-group">
							  <a href="index.php?view=add" class="btn btn-mod btn-sm"> <i class="fa fa-plus-circle fw-fa"></i> New</a>
							  <!-- <button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button> -->
							</div>
							 
							</form>
       
                
                </div><!--/.services-->
            </div><!--/.row-->  
        </div><!--/.container-->
    </section><!--/#feature-->
 
 