<?php
	 if (!isset($_SESSION['USERID'])){
      redirect(web_root."admin/index.php");
     }

?>
<section id="feature" class="transparent-bg">
        <div class="container">
           <div class="center wow ">
                 <h2 class="page-header">List of Users <small>   
						  <a href="index.php?view=add" class="btn btn-mod btn-sm"><i class="fa fa-plus-circle fw-fa"></i> New</a></small></h2>
              </div>
               
            <div class="row">

                <div class="features">
                	<div class="wow fadeInDown">
						<form action="controller.php?action=delete" Method="POST">   		
						<table id="dash-table" class="table table-striped table-bordered table-hover table-responsive" style="font-size:12px" cellspacing="0">

						  <thead>
						  	<tr>
						  		<!-- <th>#</th> -->
						  		<th>
						  		 <!-- <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');">  -->
						  		 Account Name</th>
						  		<th>Username</th>
						  		<th>Role</th>
						  		<?php 
						  		     if($_SESSION['UROLE']=='MainAdministrator'){
						  		?>
						  	     	<th width="10%" >Action</th>
						  		<?php } ?>
						 
						  	</tr>	
						  </thead> 
						  <tbody>
						  	<?php  
						  		$mydb->setQuery("SELECT * 
													FROM  `tbluseraccounts` WHERE UROLE != 'MainAdministrator'");
						  		$cur = $mydb->loadResultList();

								foreach ($cur as $result) {
						  		echo '<tr>';
						  		// echo '<td width="5%" align="center"></td>'; 
						  		echo '<td>' . $result->FULLNAME.'</a></td>';
						  		echo '<td>'. $result->USERNAME.'</td>';
						  		echo '<td>'. $result->UROLE.'</td>'; 

						  		if($_SESSION['UROLE']=='MainAdministrator'){

						  			echo '<td align="center" > <a title="Edit" href="index.php?view=edit&id='.$result->USERID.'"  class="btn btn-info btn-xs  ">  <span class="fa fa-edit fw-fa"></span></a>
						  					 <a title="Delete" href="controller.php?action=delete&id='.$result->USERID.'" class="btn btn-danger btn-xs" ><span class="fa fa-trash-o fw-fa"></span> </a>
						  					 </td>';

						  		}

						  		
						  		echo '</tr>';
						  	} 
						  	?>
						  </tbody>
							
						</table>

						
						 
						</form>


                		
                	</div> <!-- fadeInDown -->
                </div><!--/.services-->
            </div><!--/.row-->  
        </div><!--/.container-->
    </section><!--/#feature-->
 
 