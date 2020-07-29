<?php include('header.php'); ?>
<?php include('conn.php'); ?>
<link rel="stylesheet" type="text/css" href="css/style2.css">
<div class="dashboard-top">
<div class="row clearfix">
                
            </div>
</div>
    <div class="pie-report" style="float: right;">
        <script src="js/jquery.min.js"></script>
        <script src = "plugins/js/admin.js"></script>
<script src="js/bootstrap.js"></script>
		
	<ul class="cb-slideshow">
            <li><span><!-- Image 01--></span></li>
            <li><span><!-- Image 02--></span></li>
            <li><span><!-- Image 03--></span></li>
            <li><span><!-- Image 04--></span></li>
        </ul>
        
        </div>
			
			<div id="chatCorner1" style="display:none; border-top-right-radius: 28px; width:360px; height:550px; background-color:white; color:#FFFFFF; position: absolute; bottom:0px; right:40px;">
			<div  onClick = "chatCCC2()" style="background-color:green; border-top-right-radius: 28px; height:79px; width:360px; color:black; ">
			<p style="background-color:green; margin-left:40px; padding: 10px; float:left"><img src="images/user.png" height="50px" /></p></br> <p style="font-size: 16px; color: white">Compliance </br>Manager</p></div>
			
			<div id="result" style="padding: 20px 5px 20px 10px; float:right; background-color: white; width:360px; height:379px; overflow-y:scroll; color: blue;">
			<?php
			$query=mysqli_query($conn,"select * from `message` order by message_id desc") or die(mysqli_error());
			while($row=mysqli_fetch_array($query)){
			?>
			<div class="container">
			  <p><b style="text-shadow: 0 0 20px yellow; color:green;"><?php echo $row['name']; ?>:</b>
			  <i style="color:black;"><?php echo $row['message']; ?></i></p>
			  <span class="time-right"><?php echo $row['chat_date']; ?></span>
			</div>
			<br>
			<?php
			}	
			?>
			</div>
			
			<form method="POST">
			<div style="width:280px; ">
			<input type="text" class="hidden" value="Compliance Manager" name="name" id="name"></input>
			<input type="hidden" value="<?php echo $row['message_id']; ?>" id="id"></input>
			<textarea  name="message" rows="4px" style="background-color:white;  width:360px; color:black; resize:none; font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;" placeholder="Enter your message" id="message" required="required"></textarea>
			</div>
			</form>
			
			</div>
			<div onClick = "chatCCC1()" id="chatCorner2" style="cursor:pointer; display:block; padding: 10px 10px 10px 10px; border-top-right-radius: 40px; width:360px; height:40px; background-color:#008000; color:#FFFFFF; position: absolute; bottom:0px; right:40px;">
			<div style="width:300;"><img src="images/chat.png" height="20px" /><div style="float:right; padding:0px 3px 0px 3px;"></div></div>
			</div>
			</td></tr>
		</table>
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
								url: "chat.php",
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
						url: 'chat.php',
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