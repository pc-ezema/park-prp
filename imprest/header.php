<?php

require_once("session.php");
include("connect.php"); 

if (!isset($_SESSION['user_id'])){
      header ('Location: index.php');
     }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
<!--    <meta http-equiv="refresh" content="1"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"> 
    <title>IMPREST | PARK ADMINISTRATIVE SERVICES </title>
	<link id="browser_favicon" rel="shortcut icon" href="images/bg/agrologo.jpg">
 <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Bootstrap Core Css -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="plugins/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style1.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
			
	<script type="text/javascript" src="jscript/jquery.min.js"></script>
	
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/scripts.js"></script>

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <style type="text/css">
    .fileUpload {
        position: relative;
        overflow: hidden;
        margin: 10px;
        border-radius: 30%;
        margin-left: -178px;
        margin-top: 153px;
        width: 21%;
    }
    .fileUpload input.upload {
        position: absolute;
        top: 0;
        right: 0;
        margin: 0;
        padding: 0;
        font-size: 20px;
        cursor: pointer;
        opacity: 0;
        filter: alpha(opacity=0);
    }
	
    .notif {
        padding-top: 15px;
        margin-left: 20px;
        margin-right: 20px;
        border: 1px solid;
        height: auto;
        text-align: center;
    }
    .notif i {
        border-bottom: 2px solid;

    }
    .celeb {
        text-align: left;
        margin: 10px;
    }
    a:hover {
    text-decoration: none;
    }
    .files {
        width: 100px;
        display: inline-flex;
        margin: 5px;
        text-align: center;
    }
	
		a:link, a:visited {
		color : #fff;
		text-decoration : none;
		}
		a img {
		border : 0;
		}
		
		.cb-slideshow,
		.cb-slideshow:after { 
			position: fixed;
			width: 100%;
			height: 100%;
			top: 0px;
			left: 0px;
			z-index: 0; 
		}
		.cb-slideshow:after { 
			content: '';
			background: transparent url(images/1.png); 
			background-size: cover;
			opacity: 0.1;
		}
		.cb-slideshow li span { 
			width: 85%;
			height: 100%;
			position: absolute;
			top: 70px;
			left: 300px;
			color: transparent;
			background-size: cover;
			background-position: 50% 50%;
			background-repeat: none;
			opacity: 0;
			z-index: 0;
			-webkit-backface-visibility: hidden;
			-webkit-animation: titleAnimation 36s linear infinite 0s;
			-moz-animation: titleAnimation 36s linear infinite 0s;
			-o-animation: titleAnimation 36s linear infinite 0s;
			-ms-animation: titleAnimation 36s linear infinite 0s;
			animation: titleAnimation 36s linear infinite 0s; 
		}
		.cb-slideshow li:nth-child(1) span { 
			background-image: url(images/1.png);
		}
		.cb-slideshow li:nth-child(2) span { 
			background-image: url(images/2.jpeg);
			-webkit-animation-delay: 10s;
			-moz-animation-delay: 10s;
			-o-animation-delay: 10s;
			-ms-animation-delay: 10s;
			animation-delay: 10s; 
		}
		.cb-slideshow li:nth-child(3) span { 
			background-image: url(images/3.jpg);
			-webkit-animation-delay: 20s;
			-moz-animation-delay: 20s;
			-o-animation-delay: 20s;
			-ms-animation-delay: 20s;
			animation-delay: 20s; 
		}
		.cb-slideshow li:nth-child(4) span { 
			background-image: url(images/4.png);
			-webkit-animation-delay: 30s;
			-moz-animation-delay: 30s;
			-o-animation-delay: 30s;
			-ms-animation-delay: 30s;
			animation-delay: 30s; 
		}
		/* Animation for the slideshow images */
		@-webkit-keyframes imageAnimation { 
			0% { opacity: 0;
			-webkit-animation-timing-function: ease-in; }
			8% { opacity: 1;
				 -webkit-animation-timing-function: ease-out; }
			17% { opacity: 1 }
			25% { opacity: 0 }
			100% { opacity: 0 }
		}
		@-moz-keyframes imageAnimation { 
			0% { opacity: 0;
			-moz-animation-timing-function: ease-in; }
			8% { opacity: 1;
				 -moz-animation-timing-function: ease-out; }
			17% { opacity: 1 }
			25% { opacity: 0 }
			100% { opacity: 0 }
		}
		@-o-keyframes imageAnimation { 
			0% { opacity: 0;
			-o-animation-timing-function: ease-in; }
			8% { opacity: 1;
				 -o-animation-timing-function: ease-out; }
			17% { opacity: 1 }
			25% { opacity: 0 }
			100% { opacity: 0 }
		}
		@-ms-keyframes imageAnimation { 
			0% { opacity: 0;
			-ms-animation-timing-function: ease-in; }
			8% { opacity: 1;
				 -ms-animation-timing-function: ease-out; }
			17% { opacity: 1 }
			25% { opacity: 0 }
			100% { opacity: 0 }
		}
		@keyframes imageAnimation { 
			0% { opacity: 0;
			animation-timing-function: ease-in; }
			8% { opacity: 1;
				 animation-timing-function: ease-out; }
			17% { opacity: 1 }
			25% { opacity: 0 }
			100% { opacity: 0 }
		}
		/* Animation for the title */
		@-webkit-keyframes titleAnimation { 
			0% { opacity: 0 }
			8% { opacity: 1 }
			17% { opacity: 1 }
			19% { opacity: 0 }
			100% { opacity: 0 }
		}
		@-moz-keyframes titleAnimation { 
			0% { opacity: 0 }
			8% { opacity: 1 }
			17% { opacity: 1 }
			19% { opacity: 0 }
			100% { opacity: 0 }
		}
		@-o-keyframes titleAnimation { 
			0% { opacity: 0 }
			8% { opacity: 1 }
			17% { opacity: 1 }
			19% { opacity: 0 }
			100% { opacity: 0 }
		}
		@-ms-keyframes titleAnimation { 
			0% { opacity: 0 }
			8% { opacity: 1 }
			17% { opacity: 1 }
			19% { opacity: 0 }
			100% { opacity: 0 }
		}
		@keyframes titleAnimation { 
			0% { opacity: 0 }
			8% { opacity: 1 }
			17% { opacity: 1 }
			19% { opacity: 0 }
			100% { opacity: 0 }
		}

		.container {
		  border: 2px solid green;
		  background-color: #f1f1f1;
		  border-radius: 30px;
		  max-width: 320px;
		  padding: 20px;
		}
		
		.time-right {
		  float: right;
		  color: #aaa;
		}
	</style>
</head>
<body class="theme-red">
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid" style="background-color:green;">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="home.php" style="color: #fff;">Imprest/Procurement Manager</a>
                <ul class = "nav navbar-right"> 
                <li class = "dropdown" style="align:center;">
                    <a class = "user dropdown-toggle" data-toggle = "dropdown" href = "#" style="color: #fff;">
                        <span class = "glyphicon glyphicon-user" style="color: #fff;"></span>
                        <b class = "caret"></b>
                    </a>
                <ul class = "dropdown-menu">					
					<li>
					    <a class = "me" href = "logout.php" onclick="if(confirm('Logging out, Thank you and see you soon Admin!') == 0){return false;}"><i class = "glyphicon glyphicon-log-out"></i> Logout</a>
                    </li>
                </ul>
                </li>
				</ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
		<a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
        <aside id="leftsidebar" class="sidebar">
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">DASHBOARD</li>
                    <li>
                        <a href="home.php">
                            <i class="glyphicon glyphicon-home"></i>&nbsp;&nbsp;Home
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="glyphicon glyphicon-th-large"></i>&nbsp;&nbsp;Procurement
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="all_requisition.php">Internal Requisition</a>
                            </li>
							<li>
                                <a href="overall_requisition.php">OverAll Requisition</a>
                            </li>
                            <li>
                                <a href="all_storemanagement.php">Store Management</a>
                            </li>
                            <li>
                                <a href="all_petrolmanagement.php">Petrol Management</a>
                            </li>
                         </ul> 
                    </li>                   
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            
                            <i class="glyphicon glyphicon-tasks"></i>&nbsp;&nbsp;Imprest
                        </a>
                        <ul class="ml-menu">
							<li>
                                <a href="all_sop.php">SOP</a>
                            </li>
                            <li>
                                <a href="monthly_summary.php">Monthly Summary</a>
                            </li>
                            <li>
                                <a href="all_fundallocation.php">Fund Allocation</a>
                            </li>
							<li>
                                <a href="all_report.php">Report</a>
                            </li>
							<li>
						</ul>
                    </li>
					<li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            
                            <i class="glyphicon glyphicon-briefcase"></i>&nbsp;&nbsp;Inventory Expenses
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="allimprest_unit.php">All Imprest Unit</a>
                            </li>
                        </ul>
                    </li>
					<li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            
                            <i class="glyphicon glyphicon-user"></i>&nbsp;&nbsp;Setting
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="user.php">User</a>
                            </li>
                        </ul>
                    </li>
                </ul><br><br><br><br><br><br>
                <div class="dtime">
                    <div class="alert alert-success">
                        <i class="icon-calendar"></i>
                        <?php
                        $today = date('y:m:d');
                        $new = date('l, F d, Y', strtotime($today));
                        echo $new;
                        ?>
                    </div>
                 </div>
               
            </div>

        </aside>
    </section>
	