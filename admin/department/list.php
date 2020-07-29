<?php
	 if (!isset($_SESSION['USERID'])){
      redirect(web_root."admin/index.php");
     }

?>
<section id="feature" class="transparent-bg">
        <div class="container">
           <div class="center wow ">
                 <h2 class="page-header">List of Departments/Units <small>   
						  <a href="index.php?view=add" class="btn btn-mod btn-sm"><i class="fa fa-plus-circle fw-fa"></i> New</a></small></h2>
                <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p> -->
            </div>
               
            <div class="row">
                <div class="features">
 
						<form class="wow action" action="controller.php?action=delete" Method="POST">   		
							<table id="dash-table" class="table table-striped table-bordered table-hover table-responsive" style="font-size:12px" cellspacing="0">

							  <thead>
							  	<tr>
							  		<th width="5%">
							  		  ID</th>
							  		 <th>
							  		  Department/Unit</th>
							  		<th>Description</th>
							  		<th>Department Head</th>
							  	 	<th width="10%" >Action</th>
							 
							  	</tr>	
							  </thead> 
							  <tbody>
							  	<?php   
							  		// $mydb->setQuery("SELECT * 
											// 			FROM  `tblusers` WHERE TYPE != 'Customer'");
							  		$mydb->setQuery("SELECT * 
														FROM  `tbldepartment`");
							  		$cur = $mydb->loadResultList();

									foreach ($cur as $result) { 
							  		echo '<tr>';
							  		// echo '<td width="5%" align="center"></td>';
							  		echo '<td>' . $result->DEPARTMENTID.'</a></td>';
							  		echo '<td>'. $result->DEPARTMENT.'</td>';
							  		echo '<td>'. $result->DESCRIPTION.'</td>';
							  		echo '<td>'. $result->DEPARTMENTHEAD.'</td>';
							  	  
							  		echo '<td align="center" > <a title="Edit" href="index.php?view=edit&id='.$result->DEPARTMENTID.'"  class="btn btn-info btn-xs  ">  <span class="fa fa-edit fw-fa"></span></a>
							  					 <a title="Delete" href="controller.php?action=delete&id='.$result->DEPARTMENTID.'" class="btn btn-danger btn-xs" ><span class="fa fa-trash-o fw-fa"></span> </a>
							  					 </td>';
							  		echo '</tr>';
							  	} 
							  	?>
							  </tbody>
								
							</table>

							 <div class="btn-group">
							  <!-- <a href="index.php?view=add" class="btn btn-mod btn-sm"> <i class="fa fa-plus-circle fw-fa"></i> New</a> -->
							  <!-- <button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button> -->
							</div>
							 
							</form>
       
                
                </div><!--/.services-->
            </div><!--/.row-->  
        </div><!--/.container-->
    </section><!--/#feature-->
 
 