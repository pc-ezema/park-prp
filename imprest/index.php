<!DOCTYPE html>
<html lang = "eng">
	<head>
		<title>IMPREST | PARK ADMINISTRATIVE SERVICES</title>
		<link id="browser_favicon" rel="shortcut icon" href="images/bg/agrologo.jpg">

		<meta charset = "utf-8" />
		<link rel = "shortcut icon" href = "">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel = "stylesheet" href = "css/bootstrap.css" media="screen">
		<link rel = "stylesheet" href = "css/bootstrap.min.css" media="screen">
		<link rel="stylesheet" href = "css/login.css" media="screen">
		<style type="text/css">
		body {
			  background: url(img/agropark.jpg) no-repeat center center fixed; 
			  -webkit-background-size: cover;
			  -moz-background-size: cover;
			  -o-background-size: cover;
			  background-size: cover;
			  opacity: -0.5m;
		}
		</style>
	</head>
<body>
	<div class = "navbar navbar-default" style="background-color:green;">
		<marquee direction="left" ><span class = "navbar-brand" style = "float:left;" >PARK ADMINISTRATIVE SERVICES</span></marquee>
	</div>
	
	<div id = "top" class = "login">
	<center><a href="../index.php"><img src = "images/bg/agrologo.jpg" height = "55px" /></a></center></br></br>

		<div class = "panel panel-success">
			<div class = "panel-heading">
			
				<center><h1 class = "panel-title">Park Imprest Manager</h1></center>
			</div>
			<div class = "panel-body">
				<form enctype = "multipart/form-data" action = "login_query.php" role = "form" method = "POST">
					<div class = "form-group">
						<label for = "username">Username</label>
						<input class = "form-control" name = "admin_user" placeholder = "Username" type = "text" required = "required" >
					</div>
					<div class = "form-group">
						<label for = "password">Password</label>
						<input class = "form-control" name = "admin_pass" placeholder = "Password" type = "password" required = "required" >
					</div>
					<div class = "form-group">
						<button class = "btn btn-block btn-success" name = "login"><span class = "glyphicon glyphicon-log-in"></span> Login</button>
					</div>
				</form>
			</div>
		</div>	
	</div>
	<div id = "footer">
		<label class = "footer-title">&copy; Copyright PARK ADMINISTRATIVE SERVICES 2020</label>
	</div>
</body>
<?php
	include("script.php");
?>
<script type = "text/javascript">
    $(document).ready(function() {
        function disableBack() { window.history.forward() }

        window.onload = disableBack();
        window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
    });
</script>
</html>