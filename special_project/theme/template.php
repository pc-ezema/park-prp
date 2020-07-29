<!DOCTYPE html> 
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SPECIAL PROJECT | PARK ADMINISTRATIVE SERVICES </title>
	<link id="browser_favicon" rel="shortcut icon" href="<?php echo WEB_ROOT; ?>img/bg/agrologo.jpg">
  <!-- Bootstrap core CSS-->
  <link href="<?php echo WEB_ROOT; ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo WEB_ROOT; ?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
   <!--- Page level plugin CSS-->
  <link href="<?php echo WEB_ROOT; ?>vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo WEB_ROOT; ?>css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
 <?php require_once("nav.php") ; ?> 
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active"><?php echo $title; ?></li>
      </ol>
      <div class="row">
        <div class="col-12">
              <?php   check_message();  ?>  
             <?php require_once $content; ?> 
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © PARK ADMINISTRATIVE SERVICES-2020</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="<?php echo WEB_ROOT; ?>/logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo WEB_ROOT; ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo WEB_ROOT; ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo WEB_ROOT; ?>vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo WEB_ROOT; ?>js/sb-admin.min.js"></script>
    <script src="<?php echo WEB_ROOT; ?>vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo WEB_ROOT; ?>vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="<?php echo WEB_ROOT; ?>vendor/chart.js/Chart.min.js"></script>
     <!-- Custom scripts for this page-->
    <script src="<?php echo WEB_ROOT; ?>js/sb-admin-datatables.min.js"></script>
    <script src="<?php echo WEB_ROOT; ?>js/sb-admin-charts.min.js"></script>
    <script src="<?php echo WEB_ROOT; ?>js/canvasjs.min.js"></script>

<script type="text/javascript">
  $(document).on('click', '.delete', function(){
  var id = $(this).attr("id");
  if(confirm("Are you sure you want to delete this record?"))
  {

  }
  else
  {
   return false; 
  }
 });
</script>
<script type="text/javascript">
$(document).ready(function(){
 $('.action').change(function(){
  if($(this).val() != '')
  {
   var action = $(this).attr("id");
   var query = $(this).val();
   var result = '';
   if(action == "city")
   {
    result = 'brgy';
   }
   else
   {
    result = 'city';
   }

   $.ajax({
    url: "<?php echo WEB_ROOT; ?>module/student/fetchcity.php",
    method:"POST",
    data:{action:action, query:query},
    success:function(data){
     $('#'+result).html(data);
    }
   })
  }
 });
});


</script>


   <script type="text/javascript" language="javascript">
      $(document).ready(function(){
          $('#addNewExpenses').click(function(){
            $('#expform')[0].reset();
            $('#action').val('Add');
            $('#operation').val('Add');
          });

     

          var dataTable = $('#expenselist').DataTable({
            "processing":false,
            "serverSide":false,
            "order":[],
            "ajax":{
                url: "<?php echo WEB_ROOT; ?>module/project/controller.php?action=loadexp",
                type:"POST"
            },
            "columnDefs":[
                {
                  "targets":[0, 3, 4],
                  "orderable":false
                }
            ],
          });
          

          var dtexpSum = $('#expsummary').DataTable({
            "processing":false,
            "serverSide":false,
            "order":[],
            "ajax":{
                url: "<?php echo WEB_ROOT; ?>module/project/controller.php?action=loadexpSum",
                type:"POST"
            },
            "columnDefs":[
                {
                  "targets":0,
                  "orderable":false
                }
            ],
          });

          

          $('#expform').submit(function(e){
            e.preventDefault();
              $.ajax({
              url: "<?php echo WEB_ROOT; ?>module/project/controller.php?action=addexpenses",
              type: "POST",
              data: $(this).serialize(),
              dataType: 'html',
                success: function(data)
                {
                

                   $('#expform')[0].reset();
                   $('#addexpenses').modal('hide');
                  dataTable.ajax.reload();
                  dtexpSum.ajax.reload();
                 // alert('New Expenses addedd Successfully!');
                },
                error: function()
                {
                 alert('Failed!');
                }
              })
            });


      });     



   </script>
  
<script type="text/javascript" language="javascript">
        $(document).ready(function() {
    var table = $('#dataTable').DataTable();
     
    $('#dataTable tbody')
        .on( 'mouseenter', 'td', function () {
            var colIdx = table.cell(this).index().column;
 
            $( table.cells().nodes() ).removeClass( 'highlight' );
            $( table.column( colIdx ).nodes() ).addClass( 'highlight' );
        } );
} );
      </script>
  </div>
  			
			<div id="chatCorner1" style="display:none; border-top-right-radius: 28px; width:360px; height:550px; background-color:white; color:#FFFFFF; position: absolute; bottom:0px; right:40px;">
			<div  onClick = "chatCCC2()" style="background-color:green; border-top-right-radius: 28px; height:79px; width:360px; color:black; ">
			<p style="background-color:green; margin-left:40px; padding: 10px; float:left"><img src="<?php echo WEB_ROOT; ?>img/user.png" height="50px" /></p> <p style="font-size: 16px; color: white; padding:10px">Special Project Manager, </br>Park Administrative Services</p></div>
			
			<div id="result" style="padding: 20px 5px 20px 10px; float:right; background-color: white; width:360px; height:355px; overflow-y:scroll; color: blue;">
			<?php
			include('conn.php');
			$query=mysqli_query($conn,"select * from `message` order by message_id desc") or die(mysqli_error());
			while($row=mysqli_fetch_array($query)){
			?>
			<div style="border: 2px solid red; background-color: #f1f1f1; border-radius: 30px; max-width: 320px; padding: 20px;">
			<p><b style="text-shadow: 0 0 20px orange; color:green;"><?php echo $row['name']; ?>:</b>
			<i style="color:black;"><?php echo $row['message']; ?></i></p>
			<span style="float: right; color: #aaa;"><?php echo $row['chat_date']; ?></span>
			</div>
			<br>
			<?php
			}	
			?>			
			</div>
			
			<form method="POST">
			<div style="width:280px; ">
			<input type="hidden" value="Special Project Manager" name="name" id="name"></input>
			<input type="hidden" value="<?php echo $row['message_id']; ?>" id="id"></input>
			<textarea  name="message" rows="4px" style="background-color:white;  width:360px; color:black; resize:none; font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;" placeholder="Enter your message" id="message" required="required"></textarea>
			</div>
			</form>
			
			</div>
			<div onClick = "chatCCC1()" id="chatCorner2" style="cursor:pointer; display:block; padding: 10px 10px 10px 10px; border-top-right-radius: 40px; width:360px; height:40px; background-color:#008000; color:#FFFFFF; position: absolute; bottom:0px; right:40px;">
			<div style="width:300;"><img src="<?php echo WEB_ROOT; ?>img/chat.png" height="20px" /><div style="float:right; padding:0px 3px 0px 3px;"></div></div>
			</div>
			<script type="text/javascript">
			function chatCCC1() {
				var gHH = document.getElementById("chatCorner1").style;
				var gHH2 = document.getElementById("chatCorner2").style;
				gHH.display = "block";
				gHH2.display = "none";
			}

			function chatCCC2() {
				var gHH = document.getElementById("chatCorner1").style;
				var gHH2 = document.getElementById("chatCorner2").style;
				gHH.display = "none";
				gHH2.display = "block";
			}
			
			$(document).keypress(function(e){ //using keyboard enter key
				/* Send Message	*/	
				
					if(e.which === 13){ 
							if($('#message').val() == ""){
							alert('Please write message first');
						}else{
							$name = $('#name').val();
							$message = $('#message').val();
							$id = $('#id').val();
							$.ajax({
								type: "POST",
								url: "<?php echo WEB_ROOT; ?>theme/chat.php",
								data: {
									name: $name,
									message: $message,
									message_id: $id,
								},
								success: function(){
									displayResult();
									$('#message').val(''); //clears the textarea after submit
								}
							});
						}	
					} 
				}
			); 
			
						function displayResult(){
						$id = $('#id').val();
						$.ajax({
						url: '<?php echo WEB_ROOT; ?>theme/chat.php',
						type: 'POST',
						async: false,
						data:{
							message_id: $id,
							res: 1,
						},
						success: function(response){
							$('#result').html(response);
						}
					});
				}
			

			</script>	
</body>

</html>
