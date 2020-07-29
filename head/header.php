<?php
require_once("session.php");
include("connect.php"); 

if (!isset($_SESSION['id'])){
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
    <title>HEAD | PARK ADMINISTRATIVE SERVICES </title>
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
    .navbar-right {
        margin-left: 850px;

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
			-webkit-animation: imageAnimation 60s linear infinite 0s;
			-moz-animation: imageAnimation 60s linear infinite 0s;
			-o-animation: imageAnimation 60s linear infinite 0s;
			-ms-animation: imageAnimation 60s linear infinite 0s;
			animation: imageAnimation 60s linear infinite 0s; 
		}
		.cb-slideshow li:nth-child(1) span { 
			background-image: url(images/1.png);
		}
		.cb-slideshow li:nth-child(2) span { 
			background-image: url(images/2.jpeg);
			-webkit-animation-delay: 60s;
			-moz-animation-delay: 60s;
			-o-animation-delay: 60s;
			-ms-animation-delay: 60s;
			animation-delay: 60s; 
		}
		.cb-slideshow li:nth-child(3) span { 
			background-image: url(images/3.png);
			-webkit-animation-delay: 120s;
			-moz-animation-delay: 120s;
			-o-animation-delay: 120s;
			-ms-animation-delay: 120s;
			animation-delay: 120s; 
		}
		.cb-slideshow li:nth-child(4) span { 
			background-image: url(images/4.jpeg);
			-webkit-animation-delay: 180s;
			-moz-animation-delay: 180s;
			-o-animation-delay: 180s;
			-ms-animation-delay: 180s;
			animation-delay: 180s; 
		}
		.cb-slideshow li:nth-child(5) span { 
			background-image: url(images/5.png);
			-webkit-animation-delay: 240s;
			-moz-animation-delay: 240s;
			-o-animation-delay: 240s;
			-ms-animation-delay: 240s;
			animation-delay: 240s; 
		}
		.cb-slideshow li:nth-child(6) span { 
			background-image: url(images/6.png);
			-webkit-animation-delay: 300s;
			-moz-animation-delay: 300s;
			-o-animation-delay: 300s;
			-ms-animation-delay: 300s;
			animation-delay: 300s; 
		}
		.cb-slideshow li:nth-child(7) span { 
			background-image: url(images/7.png);
			-webkit-animation-delay: 360s;
			-moz-animation-delay: 360s;
			-o-animation-delay: 360s;
			-ms-animation-delay: 360s;
			animation-delay: 360s; 
		}
		.cb-slideshow li:nth-child(8) span { 
			background-image: url(images/8.png);
			-webkit-animation-delay: 420s;
			-moz-animation-delay: 420s;
			-o-animation-delay: 420s;
			-ms-animation-delay: 420s;
			animation-delay: 420s; 
		}
		.cb-slideshow li:nth-child(9) span { 
			background-image: url(images/9.png);
			-webkit-animation-delay: 480s;
			-moz-animation-delay: 480s;
			-o-animation-delay: 480s;
			-ms-animation-delay: 480s;
			animation-delay: 480s; 
		}
		.cb-slideshow li:nth-child(10) span { 
			background-image: url(images/10.png);
			-webkit-animation-delay: 540s;
			-moz-animation-delay: 540s;
			-o-animation-delay: 540s;
			-ms-animation-delay: 540s;
			animation-delay: 540s; 
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
		  border: 2px solid #28B463;
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
                <a class="navbar-brand" href="home.php" style="color: #fff;">Head, Park Administrative Services</a>
                <ul class = "nav navbar-right"> 
                <li class = "dropdown">
                    <a class = "user dropdown-toggle" data-toggle = "dropdown" href = "#" style="color: #fff;">
                        <span class = "glyphicon glyphicon-user" style="color: #fff;"></span>
                        <b class = "caret"></b>
                    </a>
                <ul class = "dropdown-menu">
                    
					
					<li>
					    <a class = "me" href = "logout.php" onclick="if(confirm('Logging out, Thank you and see you soon!') == 0){return false;}"><i class = "glyphicon glyphicon-log-out"></i> Logout</a>
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
                            <i class="glyphicon glyphicon-th-large"></i>&nbsp;&nbsp;Human Resource
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="employee.php">Employees</a>
                            </li>
                            <li>
                                <a href="gt.php">Graduate Trainee</a>
                            </li>
                            <li>
                                <a href="corper.php">Corp Members</a>
                            </li>
                            <li>
                                <a href="it.php">Intern</a>
                            </li>
                            <li>
                                <a href="pss.php">PSS</a>
							</li>
							<li>
							<?php
                                 $employees = $con->prepare("SELECT COUNT(*) FROM tblloans WHERE seen_status='0'");
                                    $employees->execute();
                                    $fetch = $employees->fetchAll();

                                foreach($fetch as $key => $row) { 
                                   $total = $row['COUNT(*)'];

                                }?>
							
							<a href="notification/loan_fetch.php">Loan  <font color="red" style="font-size:10px"><sup><?php echo $total; ?></sup></font></a>
							</li>
                            <li>
							<?php
                                 $employees = $con->prepare("SELECT COUNT(*) FROM tblleaves WHERE seen_status='0'");
                                    $employees->execute();
                                    $fetch = $employees->fetchAll();

                                foreach($fetch as $key => $row) { 
                                   $leave = $row['COUNT(*)'];

                                }?>
							  <a href="notification/leave_fetch.php">Leave <font color="red" style="font-size:10px"><sup><?php echo $leave; ?></sup></font></a>
                            </li>
							<li>
							<?php
                                 $A1 = $con->prepare("SELECT COUNT(*) FROM file WHERE seen_status='0' AND department='Human Resource'");
                                    $A1->execute();
                                    $A2 = $A1->fetchAll();
                                foreach($A2 as $key => $row) { 
                                   $hrreport = $row['COUNT(*)'];
                                }?>
                                <a href="notification/hrreport_fetch.php">Report <font color="red" style="font-size:10px"><sup><?php echo $hrreport; ?></sup></font></a>
                            </li>
							<li>
                                <a href="hrsop.php">SOP</a>
							</li>
							<li>
                                <a href="suggestion.php">Complains/Suggestion</a>
							</li>
							<li>
                                <a href="exit.php">Exit Form</a>
							</li>
							<li>
							<?php
                                 $A1 = $con->prepare("SELECT COUNT(*) FROM tblrequisition WHERE seen_status='0' AND PreparedBy='Human Resource'");
                                    $A1->execute();
                                    $A2 = $A1->fetchAll();
                                foreach($A2 as $key => $row) { 
                                   $hrrequisition = $row['COUNT(*)'];
                                }?>
                                <a href="notification/hrrequisition_fetch.php">Requisition <font color="red" style="font-size:10px"><sup><?php echo $hrrequisition; ?></sup></font></a>
                            </li>
                            <li>
							<?php
                                 $A1 = $con->prepare("SELECT COUNT(*) FROM hrcomplaintslog WHERE seen_status='0'");
                                    $A1->execute();
                                    $A2 = $A1->fetchAll();
                                foreach($A2 as $key => $row) { 
                                   $hrcomplaints = $row['COUNT(*)'];
                                }?>
                                <a href="notification/hrcomplaints_fetch.php">HR Complaints <font color="red" style="font-size:10px"><sup><?php echo $hrcomplaints; ?></sup></font></a>
                            </li>
							<li>
                                <a href="#">Attendance</a>
                            </li>
							<li>
                                <a href="salary.php">Salary</a>
                            </li>
                         </ul> 
                    </li>                   
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            
                            <i class="glyphicon glyphicon-tasks"></i>&nbsp;&nbsp;Facility
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="allfarm_units.php">All Facility</a>
                            </li>
                            <li>
                                <a href="equipment_maintenance.php">Equipment Maintenance</a>
                            </li>
							<li>
                                <a href="machine_maintenance.php">Machine Maintenance</a>
                            </li>
							<li>
                                <a href="facilitybuilding_maintenance.php">Building Maintenance</a>
                            </li>
                            <li>
                                <a href="all_repairs.php">Repairs</a>
                            </li>
                            <li>
                                <a href="all_transfers.php">Transfers</a>
                            </li>
							<li>
                                <a href="all_facilitysop.php">SOP</a>
                            </li>
                            <li>
							<?php
                                 $A1 = $con->prepare("SELECT COUNT(*) FROM complaintslog WHERE seen_status='0'");
                                    $A1->execute();
                                    $A2 = $A1->fetchAll();
                                foreach($A2 as $key => $row) { 
                                   $facilitycomplaints = $row['COUNT(*)'];
                                }?>
                                <a href="notification/facilitycomplaints_fetch.php">Complaints <font color="red" style="font-size:10px"><sup><?php echo $facilitycomplaints; ?></sup></font></a>
                            </li>
							<li>
							<?php
							  $A1 = $con->prepare("SELECT COUNT(*) FROM `file` WHERE department='Facility Manager' AND seen_status='0'") or die(mysqli_error());
							  $A1->execute();
							  $A2 = $A1->fetchAll();
							  foreach($A2 as $key => $row) { 
							   $facilityreport = $row["COUNT(*)"];

							}?>
                                <a href="notification/facilityreport_fetch.php">Report <font color="red" style="font-size:10px"><sup><?php echo $facilityreport; ?></sup></font></a>
                            </li>
							<li>
							<?php
                                 $A1 = $con->prepare("SELECT COUNT(*) FROM tblrequisition WHERE seen_status='0' AND PreparedBy='Facility Manager'");
                                    $A1->execute();
                                    $A2 = $A1->fetchAll();
                                foreach($A2 as $key => $row) { 
                                   $facilityrequisition = $row['COUNT(*)'];
                                }?>
                                <a href="notification/facilityrequisition_fetch.php">Requisition <font color="red" style="font-size:10px"><sup><?php echo $facilityrequisition; ?></sup></font></a>
                            </li>
                            <li>
                                <a href="all_recommendations.php">Recommendation</a>
                            </li>
                        </ul>
                    </li>
					<li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            
                            <i class="glyphicon glyphicon-briefcase"></i>&nbsp;&nbsp;Imprest/Procurement
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="allimprest_unit.php">All Imprest Unit</a>
                            </li>
							<li>
                                <a href="all_fundallocation.php">All Units Fund Allocation</a>
                            </li>
							<li>
                                <a href="all_storemanagement.php">Store Management</a>
                            </li>
							<li>
                                <a href="all_petrolmanagement.php">Petrol Management</a>
                            </li>
							<li>
							<?php
							  $A1 = $con->prepare("SELECT COUNT(*) FROM `file` WHERE department='Imprest Manager' AND seen_status='0'") or die(mysqli_error());
							  $A1->execute();
							  $B2 = $A1->fetchAll();
							  foreach($B2 as $key => $row) { 
							   $imprestreport = $row["COUNT(*)"];

							}?>
                                <a href="notification/imprestreport_fetch.php">Report <font color="red" style="font-size:10px"><sup><?php echo $imprestreport ?></sup></font></a>
                            </li>
							<li>
							<?php
                                 $A1 = $con->prepare("SELECT COUNT(*) FROM tblrequisition WHERE seen_status='0' AND PreparedBy='Imprest Manager'");
                                    $A1->execute();
                                    $A2 = $A1->fetchAll();
                                foreach($A2 as $key => $row) { 
                                   $imprestrequisition = $row['COUNT(*)'];
                                }?>
                                <a href="notification/imprestrequisition_fetch.php">Requisition <font color="red" style="font-size:10px"><sup><?php echo $imprestrequisition; ?></sup></font></a>
                            </li>
							<li>
                                <a href="overall_requisition.php">OverAll Requisition</a>
                            </li>
                            <li>
                                <a href="all_imprestsop.php">SOP</a>
                            </li>
							<li>
                                <a href="monthly_summary.php">Monthly Summary</a>
                            </li>
                        </ul>
                    </li>
					<li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            
                            <i class="glyphicon glyphicon-menu-hamburger"></i>&nbsp;&nbsp;Special Project
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="all_projects.php">Project</a>
                            </li>
							<li>
							<?php
							  $A1 = $con->prepare("SELECT COUNT(*) FROM `file` WHERE department='Special Project' AND seen_status='0'") or die(mysqli_error());
							  $A1->execute();
							  $A2 = $A1->fetchAll();
							  foreach($A2 as $key => $row) { 
							   $sPROJECT = $row["COUNT(*)"];

							}?>
							    <a href="notification/spreports_fetch.php">Weekly Reports <font color="red" style="font-size:10px"><sup><?php echo $sPROJECT; ?></sup></font></a>
                            </li>
                            <li>
                                <a href="all_expenses.php">Expenses</a>
                            </li>
                            <li>
                                <a href="all_suppliers.php">Suppliers</a>
                            </li>
							<li>
                                <a href="all_spsop.php">SOP</a>
                            </li>
                            <li>
                                <a href="all_paymentplan.php">Payment Plan</a>
                            </li>
                            <li>
                                <a href="all_contractors.php">Contractors/Artisan</a>
                            </li>
							<li>
							<?php
							  $plan = $con->prepare("SELECT COUNT(*) FROM `file` WHERE department='Special Project Work Plan' AND seen_status='0'") or die(mysqli_error());
							  $plan->execute();
							  $work = $plan->fetchAll();
							  foreach($work as $key => $row) { 
							   $workplan = $row["COUNT(*)"];

							}?>
                                <a href="notification/workplan_fetch.php">Work Plan <font color="red" style="font-size:10px"><sup><?php echo $workplan; ?></sup></font></a>
                            </li>
							<li>
							<?php
                                 $A1 = $con->prepare("SELECT COUNT(*) FROM tblrequisition WHERE seen_status='0' AND PreparedBy='Special Project Manager'");
                                    $A1->execute();
                                    $A2 = $A1->fetchAll();
                                foreach($A2 as $key => $row) { 
                                   $sprequisition = $row['COUNT(*)'];
                                }?>
                                <a href="notification/sprequisition_fetch.php">Requisition <font color="red" style="font-size:10px"><sup><?php echo $sprequisition; ?></sup></font></a>
                            </li>
                        </ul>
                    </li>
					<li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            
                            <i class="glyphicon glyphicon-th-list"></i>&nbsp;&nbsp;Compliance
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="all_noncompliance.php">Non-Compliance</a>
                            </li>
                            <li>
                                <a href="all_inspectionchecklist.php">Inspection Checklist</a>
                            </li>
                            <li>
                                <a href="all_policy.php">Policy</a>
                            </li>
                            <li>
                                <a href="all_fieldmonitoring.php">Field Monitoring Log</a>
                            </li>
							<li>
                                <a href="all_changemanagement.php">Change Management</a>
                            </li>
                            <li>
                                <a href="all_compliancesop.php">SOP</a>
                            </li>
                            <li>
                                <a href="all_investigation.php">Investigation</a>
                            </li>
							<li>
                                <a href="all_compliancereport.php">Weekly-Report</a>
                            </li>
                            <li>
                                <a href="all_compliancecomplains.php">Complains</a>
                            </li>
                            <li>
                                <a href="all_compliancerequisition.php">Requisition</a>
                            </li>
                        </ul>
                    </li>
					<li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            
                            <i class="glyphicon glyphicon-user"></i>&nbsp;&nbsp;Setting
                        </a>
                        <ul class="ml-menu">
							<li>
                                <a href="mail.php">Mailing</a>
                            </li>
                            <li>
                                <a href="user.php">User</a>
                            </li>
                        </ul>
                    </li>
                </ul><br><br><br>
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
                <div class="notif">
                <span><i>TODAY'S BIRTHDAYS</i></span><br><br>
                <div class="celeb">
				<font color="red"> -- Employee -- </font></br>
                <?php
                    $date = date('-m-d');
                    $bquery = $con->prepare("SELECT * FROM tblemployees WHERE BIRTHDATE LIKE '%$date%' ");
                    $bquery->execute();
					while($row = $bquery->fetch()) {
                        $bday = $row["BIRTHDATE"];
                        $date = new DateTime($bday);
                        $now = new DateTime();
                        $difference = $date->diff($now)->format('%y');
                        $gender = $row['SEX'];
						
						
                    if ($gender == 'Male') { ?>
                        <span>Age: <?php echo $difference; ?></span><br>
                        <span>Name: Mr. <?php echo $row['LNAME']. ", " . $row['MNAME']. " " . $row['FNAME']; ?></span><br>
                        <span>Contact No.: <?php echo $row['TELNO']; ?></span><br>
                   <?php } else { ?>
                        <span>Age: <?php echo $difference; ?></span><br>
                        <span>Name: Ms/Mrs. <?php echo $row['LNAME']. ", " . $row['MNAME']. " " . $row['FNAME']; ?></span><br>
                        <span>Contact No.: <?php echo $row['TELNO']; ?></span><br>
                  <?php  }
                  }
                ?>
                    </div>
				
				<div class="celeb"> 
					<font color="red"> -- Graduate Trainee -- </font></br>
					  <?php
						$date = date('-m-d');
						$bquery = $con->prepare("SELECT * FROM tblgt WHERE DateofBirth LIKE '%$date%' ");
						$bquery->execute();
						while($row = $bquery->fetch()) {
							$bday = $row["DateofBirth"];
							$date = new DateTime($bday);
							$now = new DateTime();
							$difference = $date->diff($now)->format('%y');
							$gender = $row['Sex'];

					
						if ($gender == 'Male') { ?>
						
							<span>Age: <?php echo $difference; ?></span><br>
							<span">Name: Mr. <?php echo $row['SNAME']. ", " . $row['MNAME']. " " . $row['FNAME']; ?></span><br>
							<span>Contact No.: <?php echo $row['TELNO']; ?></span><br>
					   <?php } else { ?>
							<span>Age: <?php echo $difference; ?></span><br>
							<span>Name: Ms/Mrs. <?php echo $row['SNAME']. ", " . $row['MNAME']. " " . $row['FNAME']; ?></span><br>
							<span>Contact No.: <?php echo $row['TELNO']; ?></span><br>
					  <?php  }
					  }
					?>      
					</div>
					
					<div class="celeb"> 
					<font color="red"> -- Corp Member -- </font></br>
					  <?php
						$date = date('-m-d');
						$bquery = $con->prepare("SELECT * FROM tblcorper WHERE DateofBirth LIKE '%$date%' ");
						$bquery->execute();
						while($row = $bquery->fetch()) {
							$bday = $row["DateofBirth"];
							$date = new DateTime($bday);
							$now = new DateTime();
							$difference = $date->diff($now)->format('%y');
							$gender = $row['Sex'];

					
						if ($gender == 'Male') { ?>
						
							<span>Age: <?php echo $difference; ?></span><br>
							<span">Name: Mr. <?php echo $row['SNAME']. ", " . $row['MNAME']. " " . $row['FNAME']; ?></span><br>
							<span>Contact No.: <?php echo $row['TELNO']; ?></span><br>
					   <?php } else { ?>
							<span>Age: <?php echo $difference; ?></span><br>
							<span>Name: Ms/Mrs. <?php echo $row['SNAME']. ", " . $row['MNAME']. " " . $row['FNAME']; ?></span><br>
							<span>Contact No.: <?php echo $row['TELNO']; ?></span><br>
					  <?php  }
					  }
					?>      
					</div>
					
					<div class="celeb"> 
					<font color="red"> -- Intern -- </font></br>
					  <?php
					  include("connect.php"); 
						$date = date('-m-d');
						$bquery = $con->prepare("SELECT * FROM tblsiwes WHERE DateofBirth LIKE '%$date%' ");
						$bquery->execute();
						while($row = $bquery->fetch()) {
							$bday = $row["DateofBirth"];
							$date = new DateTime($bday);
							$now = new DateTime();
							$difference = $date->diff($now)->format('%y');
							$gender = $row['Sex'];

					
						if ($gender == 'Male') { ?>
						
							<span>Age: <?php echo $difference; ?></span><br>
							<span">Name: Mr. <?php echo $row['LNAME']. " " . $row['MNAME']. " " . $row['FNAME']; ?></span><br>
							<span>Contact No.: <?php echo $row['TELNO']; ?></span><br>
					   <?php } else { ?>
							<span>Age: <?php echo $difference; ?></span><br>
							<span>Name: Ms/Mrs. <?php echo $row['LNAME']. " " . $row['MNAME']. " " . $row['FNAME']; ?></span><br>
							<span>Contact No.: <?php echo $row['TELNO']; ?></span><br>
					  <?php  }
					  }
					?>      
					</div>
                </div>
            </div>

        </aside>
    </section>
	