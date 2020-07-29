<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin | PARK ADMINISTRATIVE SERVICES</title>
    <link id="browser_favicon" rel="shortcut icon" href="<?php echo web_root; ?>admin/img/bg/agrologo.jpg">

    <!-- core CSS -->
    <link href="<?php echo web_root; ?>admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo web_root; ?>admin/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo web_root; ?>admin/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo web_root; ?>admin/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo web_root; ?>admin/css/main.css" rel="stylesheet">
    <link href="<?php echo web_root; ?>admin/css/responsive.css" rel="stylesheet">

    <link href="<?php echo web_root; ?>admin/font-awesome/css/font-awesome.min.css" rel="stylesheet">

<link href="<?php echo web_root; ?>admin/css/dataTables.bootstrap.css" rel="stylesheet"> 

<!-- datetime picker CSS -->
<link href="<?php echo web_root; ?>admin/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<link href="<?php echo web_root; ?>admin/css/datepicker.css" rel="stylesheet" media="screen">


<link rel="stylesheet" href="<?php echo web_root; ?>admin/select2/select2.min.css">

<link href="<?php echo web_root; ?>admin/css/nav-button-custom.css" rel="stylesheet" media="screen">
 
</head><!--/head--> 

<body class="homepage" >

    <header id="header">
 

        <nav class="navbar navbar-mod navbar-fixed-top" role="banner" style="background-color:green;">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" style="background-color:green" data-toggle="collapse" data-target=".navbar-collapse">
                        <span style="color:#fff" class="sr-only">Toggle navigation</span>
                        <span style="color:#fff" class="icon-bar"></span>
                        <span style="color:#fff" class="icon-bar"></span>
                        <span style="color:#fff" class="icon-bar"></span>
                    </button>
                    <a  class="navbar-brand" href="<?php echo web_root; ?>admin/"><h3 style="color:#fff;">PARK ADMINISTRATIVE SERVICES</h3></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav mod-menu" style="font-size:13px;"  >
                    <?php 
                       //if ($_SESSION['UROLE']=='Administrator' || $_SESSION['UROLE']=='MainAdministrator') {
                        # code...
                    ?>
                         <li hover="ff9933" class="<?php echo (currentpage() == 'employee') ? "active" : false;?>">  <a href="<?php echo web_root; ?>admin/employee/">Employees</a></li>
                    
                    <?php //} ?> 
					
							<li  > <a href="" data-target="#loginmodal" data-toggle="modal">BirthDays</a></li> 
                            						
						<li class="dropdown"> 
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Utilities <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu"   style="background-color:#6f0305;" >
                               <?php 
                                  //if ($_SESSION['UROLE']=='Administrator'|| $_SESSION['UROLE']=='MainAdministrator' ) {
                                        # code...
                                 ?>
                                <li class="<?php echo (currentpage() == 'department') ? "active" : false;?>"><a href="<?php echo web_root; ?>admin/department/index.php">Departments/Unit</a></li>
                                <li class="<?php echo (currentpage() == 'division') ? "active" : false;?>"><a href="<?php echo web_root; ?>admin/division/index.php">Division</a></li>
                                <li class="<?php echo (currentpage() == 'user') ? "active" : false;?>"><a href="<?php echo web_root; ?>admin/user/index.php">Admin</a></li>
                                
                               <?php //} ?>
                                <?php 
                                  if ($_SESSION['UROLE']=='Administrator'|| $_SESSION['UROLE']=='MainAdministrator' ) {
                                        # code...
                                 ?>
                                <li class="<?php echo (currentpage() == 'autonumber') ? "active" : false;?>"><a href="<?php echo web_root; ?>admin/autonumber/index.php">Autonumber</a></li>
                                 <?php } ?>
                             </ul>
                        </li>
						
						<li class="dropdown"> 
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Add <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu"   style="background-color:#6f0305;" >
                               <?php 
                                  //if ($_SESSION['UROLE']=='Administrator'|| $_SESSION['UROLE']=='MainAdministrator' ) {
                                        # code...
                                 ?>
                                <li class="<?php echo (currentpage() == 'department') ? "active" : false;?>"><a href="<?php echo web_root; ?>admin/intern/index.php">INTERN</a></li>
                                <li class="<?php echo (currentpage() == 'division') ? "active" : false;?>"><a href="<?php echo web_root; ?>admin/pss/index.php">PSS</a></li>
                                <li class="<?php echo (currentpage() == 'user') ? "active" : false;?>"><a href="<?php echo web_root; ?>admin/corper/index.php">CORP MEMBERS</a></li>
                                
                               <?php //} ?>
                                <?php 
                                  if ($_SESSION['UROLE']=='Administrator'|| $_SESSION['UROLE']=='MainAdministrator' ) {
                                        # code...
                                 ?>
                                <li class="<?php echo (currentpage() == 'autonumber') ? "active" : false;?>"><a href="<?php echo web_root; ?>admin/gt/index.php">GRADUATE TRAINEE</a></li>
                                 <?php } ?>
                             </ul>
                        </li>
						
						
						<li class="dropdown"> 
                            <a href="#" class="dropdown-toggle <?php echo (currentpage() == 'report') ? "active" : false;?>" data-toggle="dropdown">Reports <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu"   style="background-color:#6f0305;" >
                            
                                <li class="<?php echo ($_GET['view'] == 'listofemployees') ? "active" : false;?>"><a href="<?php echo web_root; ?>admin/report/index.php?view=listofemployees">List of Employee</a></li>
								<li>
								<a href="<?php echo web_root; ?>admin/weeklyreport/view.php">Weekly Report</a>
								</li>
                             </ul>
                        </li>
                            
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome, <?php echo $_SESSION['FULLNAME'];  ?> <b class="caret"></b></a>
                        <ul class="dropdown-menu"  style="background-color:#6f0305;" > 
                            <li>
                                <a href="<?php echo web_root; ?>admin/user/index.php?view=view&id=<?php echo $_SESSION['USERID'];  ?>">View Account</a>
                            </li>
							<li>
								<a href="" data-target="#hrsop" data-toggle="modal">HR SOP</a>
							</li> 
							<li>
								<a href="<?php echo web_root; ?>admin/employeeleaves/index.php">View Leaves</a>
                            </li>
							<li>
								<a href="<?php echo web_root; ?>admin/loans/index.php">View Loans</a>
                            </li>
							<li>
								<a href="<?php echo web_root; ?>admin/chat/home.php">View Suggestions</a>
                            </li>
							<li>
								<a href="<?php echo web_root; ?>admin/requisition/index.php">Requisition</a>
                            </li>
							<li>
								<a href="#">Salary</a>
                            </li>
							<li>
								<a href="<?php echo web_root; ?>admin/attendance/index.php">Attendance</a>
                            </li>
							<li>
								<a href="<?php echo web_root; ?>admin/complaints/index.php">Complaints</a>
                            </li>
							<li>
								<a href="" data-target="#hrmailing" data-toggle="modal">Mailing</a>
							</li>
                            <li>
                                <a href="<?php echo web_root; ?>admin/logout.php">Logout</a>
                            </li>
                          
                        </ul>
                    </li>                   
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->
				<div class="modal fade" id="loginmodal" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button class="close" data-dismiss="modal" type=
                                    "button">×</button>

                                    <h4 class="modal-title" id="myModalLabel">Today's Birthday Notification</h4>
                                </div>
									<div class="modal-body"> 
									<font color="red">-- Employee -- </font></br>
                                      <?php
									  include("birthday.php"); 
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
											<span">Name: Mr. <?php echo $row['FNAME']. " " . $row['MNAME']. ". " . $row['LNAME']; ?></span><br>
											<span>Contact No.: <?php echo $row['TELNO']; ?></span><br>
									   <?php } else { ?>
											<span>Age: <?php echo $difference; ?></span><br>
											<span>Name: Ms/Mrs. <?php echo $row['FNAME']. " " . $row['MNAME']. ". " . $row['LNAME']; ?></span><br>
											<span>Contact No.: <?php echo $row['TELNO']; ?></span><br>
									  <?php  }
									  }
									?>      
                                    </div>
									<div class="modal-body"> 
									<font color="red">-- Graduate Trainee -- </font></br>
                                      <?php
									  include("birthday.php"); 
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
											<span">Name: Mr. <?php echo $row['FNAME']. " " . $row['MNAME']. ". " . $row['SNAME']; ?></span><br>
											<span>Contact No.: <?php echo $row['TELNO']; ?></span><br>
									   <?php } else { ?>
											<span>Age: <?php echo $difference; ?></span><br>
											<span>Name: Ms/Mrs. <?php echo $row['FNAME']. " " . $row['MNAME']. ". " . $row['SNAME']; ?></span><br>
											<span>Contact No.: <?php echo $row['TELNO']; ?></span><br>
									  <?php  }
									  }
									?>      
                                    </div>
									<div class="modal-body"> 
									<font color="red">-- Corp Member -- </font></br>
                                      <?php
									  include("birthday.php"); 
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
											<span">Name: Mr. <?php echo $row['FNAME']. " " . $row['MNAME']. ". " . $row['SNAME']; ?></span><br>
											<span>Contact No.: <?php echo $row['TELNO']; ?></span><br>
									   <?php } else { ?>
											<span>Age: <?php echo $difference; ?></span><br>
											<span>Name: Ms/Mrs. <?php echo $row['FNAME']. " " . $row['MNAME']. ". " . $row['SNAME']; ?></span><br>
											<span>Contact No.: <?php echo $row['TELNO']; ?></span><br>
									  <?php  }
									  }
									?>      
                                    </div>
									<div class="modal-body"> 
									<font color="red">-- Intern -- </font></br>
                                      <?php
									  include("birthday.php"); 
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
											<span">Name: Mr. <?php echo $row['FNAME']. " " . $row['MNAME']. ". " . $row['LNAME']; ?></span><br>
											<span>Contact No.: <?php echo $row['TELNO']; ?></span><br>
									   <?php } else { ?>
											<span>Age: <?php echo $difference; ?></span><br>
											<span>Name: Ms/Mrs. <?php echo $row['FNAME']. " " . $row['MNAME']. ". " . $row['LNAME']; ?></span><br>
											<span>Contact No.: <?php echo $row['TELNO']; ?></span><br>
									  <?php  }
									  }
									?>      
                                    </div>
                            </div>
 
                        </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
				
				
				<div class="modal fade" id="hrsop" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button class="close" data-dismiss="modal" type=
                                    "button">×</button>

                                    <h4 class="modal-title" id="myModalLabel">Human Resources SOP</h4>
                                </div>
									<div class="modal-body"> 
                                            
                                    </div>
                            </div>
 
                        </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
				
				<div class="modal fade" id="hrmailing" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button class="close" data-dismiss="modal" type=
                                    "button">×</button>

                                    <h4 class="modal-title" id="myModalLabel">-- Mail --</h4></br>
									<form method="POST" action="mail/send.php"> 
										<div class="form-group">
											<label>Email:</label>
											<select name="email" class="form-control" required="required">
											<option">-- Select Mail --</option>
											<option value="michaelanibi@agropark.ng">Head, Park Administrative Services</option>
											<option value="igereejiro@agropark.ng">Park Complaince Manager</option>
											<option value="babatundeolaleye@agropark.ng" >Park Imprest Manager</option>
											<option value="adigunelijah@agropark.ng" >Park Special Project Manager</option>
											<option value="akinyemisamuel@agropark.ng" >Park Facility Manager</option>
											<option value="timileyinomobosola7@gmail.com" >Park Human Resource</option>
											</select>
										</div>
										<div class="form-group">
											<label>Subject</label>
											<input type="text" class="form-control" name="subject" required="required"/>
										</div>
										<div class="form-group">
											<label>Message</label>
											<textarea type="text" class="form-control" name="message" required="required"/></textarea>
										</div>
										<center><button name="send" class="btn btn-primary"><span class="glyphicon glyphicon-envelope"></span> Send</button></center>
									</form>
									<br />
									<?php
										if(ISSET($_SESSION['status'])){
											if($_SESSION['status'] == "ok"){
									?>
												<div class="alert alert-info"><?php echo $_SESSION['result']?></div>
									<?php
											}else{
									?>
												<div class="alert alert-danger"><?php echo $_SESSION['result']?></div>
									<?php
											}
						 
											unset($_SESSION['result']);
											unset($_SESSION['status']);
										}
									?>
                                </div>
									<div class="modal-body"> 
                                            
                                    </div>
                            </div>
 
                        </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->

    <div class="container" style="margin-top:8%;margin-bottom:-50px">
        <div class="row">
            <?php  check_message();  ?>   
        </div>
        
           
                 <?php 
                    if ($title<>'Home'){
                       echo   ' <div class="row  breadcrumb"> <a href="'. web_root.'admin/index.php" title="Home" >Home</a>  / 
                        <a href="index.php" title="'. $title.'" >'. $title.'</a> 
                        '.(isset($header) ? ' / '. $header : '') .' </div>'  ;
                    } ?>
           
        </div> 
         
    <?php require_once $content; ?>  
 
                     
    <footer id="footer" class="midnight-blue" style="background-color:green; float:bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2020 <a target="_blank" href="<?php echo web_root; ?>" title="PARK ADMINISTRATIVE SERVICES">PARK ADMINISTRATIVE SERVICES</a>. All Rights Reserved.
                </div>
               

            </div>
        </div>
    </footer><!--/#footer-->

 
    <script src="<?php echo web_root; ?>admin/jquery/jquery.min.js"></script> 
    <script src="<?php echo web_root; ?>admin/js/bootstrap.min.js"></script>
    <script src="<?php echo web_root; ?>admin/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo web_root; ?>admin/js/jquery.isotope.min.js"></script>
    <script src="<?php echo web_root; ?>admin/js/main.js"></script>
    <script src="<?php echo web_root; ?>admin/js/wow.min.js"></script>

    <!-- DataTables JavaScript -->
<script src="<?php echo web_root; ?>admin/js/jquery.dataTables.min.js"></script>
<script src="<?php echo web_root; ?>admin/js/dataTables.bootstrap.min.js"></script>

<script src="<?php echo web_root; ?>admin/select2/select2.full.min.js"></script>
<script src="<?php echo web_root; ?>admin/slimScroll/jquery.slimscroll.min.js"></script>

<script type="text/javascript" src="<?php echo web_root; ?>admin/js/bootstrap-datepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo web_root; ?>admin/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo web_root; ?>admin/js/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script>




<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>admin/input-mask/jquery.inputmask.js"></script> 
<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>admin/input-mask/jquery.inputmask.date.extensions.js"></script> 
<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>admin/input-mask/jquery.inputmask.extensions.js"></script> 
 

<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>admin/input-mask/meiomask.min.js"></script> 
<script src="<?php echo web_root; ?>admin/js/ekko-lightbox.js"></script>


<!-- Custom Theme JavaScript --> 


<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>admin/js/janobe.js"></script> 

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script> 
    
    $(function () {
         $(".select2").select2();
    })
  

     $('input[data-mask]').each(function() {
        var input = $(this);
        input.setMask(input.data('mask'));
      });

   // //Datemask2 mm/dd/yyyy
	$("#datetime12").inputmask("hh:00 t", {"placeholder": "hh:mm t"});

   //     //Datemask2 mm/dd/yyyy
	$("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    $('#DATETO').inputmask({
        mask: "2/1/y h:s",
        placeholder: "mm/dd/yyyy hh:mm",
        alias: "datetime",
        hourFormat: "24"
    });



    $('#DATEFROM').inputmask({
        mask: "2/1/y h:s",
        placeholder: "mm/dd/yyyy hh:mm",
        alias: "datetime",
        hourFormat: "24"
    });
   //  //Money Euro
    $("[data-mask]").inputmask();
 
     
 $(document).ready(function() {
    $('#dash-table').DataTable({
                responsive: true ,
                  "sort": false
        });
 
    });
 
  function capitalize(textboxid, str) {
      // string with alteast one character
      if (str && str.length >= 1)
      {       
          var firstChar = str.charAt(0);
          var remainingStr = str.slice(1);
          str = firstChar.toUpperCase() + remainingStr;
      }
    
      document.getElementById(textboxid).value =  str.toUpperCase();
  }


  $("#search_attendance").on("click", function(){

    var attenddate = $(".date_pickerfrom").val();
    var yearlevel = $(".YearLevel").val();
    var attendance = $(".Attendance").val();

    if(attenddate==''){
        // alert('Please enter the dates');
         $("#error_msg").hide();
         $("#error_msg").css({ 
            "background" :"red",
            "color"      : "#fff",
        });
        $("#error_msg").fadeIn("slow");
        $("#error_msg").html('Please enter the dates');

        return false;
    }
    if(yearlevel==''){
        // alert('Please enter the dates');
         $("#error_msg").hide();
         $("#error_msg").css({ 
            "background" :"red",
            "color"      : "#fff",
        });
        $("#error_msg").fadeIn("slow");
        $("#error_msg").html('Please select Year Level');

        return false;
    }
    if(attendance==''){
        // alert('Please enter the dates');
         $("#error_msg").hide();
         $("#error_msg").css({ 
            "background" :"red",
            "color"      : "#fff",
        });
        $("#error_msg").fadeIn("slow");
        $("#error_msg").html('Please select Course');

        return false;
    }
  })

 
	$('.date_pickerfrom').datetimepicker({
		format: 'mm/dd/yyyy',
		startDate : '01/01/2000', 
		language:  'en',
		weekStart: 1,
		todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1, 
		startView: 2,
		minView: 2,
		forceParse: 0 

	});

	$('.date_pickerto').datetimepicker({
		format: 'mm/dd/yyyy',
		startDate : '01/01/2000', 
		language:  'en',
		weekStart: 1,
		todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1, 
		startView: 2,
		minView: 2,
		forceParse: 0   
	});
 
 
	$('#date_picker').datetimepicker({
		format: 'mm/dd/yyyy',
		language:  'en',
		weekStart: 1,
		todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0,
		changeMonth: true,
		changeYear: true,
		yearRange: '1945:'+(new Date).getFullYear() 
	});

</script>  
   
<script type="text/javascript" > 

$(document).on("click", ".saves",function(){

    var pass1 = document.getElementById("U_PASS").value;
    var pass2 = document.getElementById("RU_PASS").value;
    var userid  = document.getElementById("user_id").value;
    var fname  = document.getElementById("FNAME").value; 
    var lname  = document.getElementById("LNAME").value; 
    var username = document.getElementById("U_USERNAME").value;

    if (userid=='') {
          $("#errormsg_userid").hide();
         $("#errormsg_userid").css({ 
            "background" :"red",
            "color"      : "#fff"
        });
        $("#errormsg_userid").fadeIn("slow");
        $("#errormsg_userid").html("This field is required"); 
        $("#user_id").focus();
       return false;
    }else{
          $("#errormsg_userid").hide();
    }

    if (fname=='') {
          $("#errormsg_fname").hide();
         $("#errormsg_fname").css({ 
            "background" :"red",
            "color"      : "#fff"
        });
        $("#errormsg_fname").fadeIn("slow");
        $("#errormsg_fname").html("This field is required"); 
        $("#FNAME").focus();
       return false;
    }else{
          $("#errormsg_fname").hide();
    }
    if (lname=='') {
          $("#errormsg_lname").hide();
         $("#errormsg_lname").css({ 
            "background" :"red",
            "color"      : "#fff"
        });
        $("#errormsg_lname").fadeIn("slow");
        $("#errormsg_lname").html("This field is required"); 
        $("#LNAME").focus();
       return false;
    }else{
          $("#errormsg_lname").hide();
    }

    if (username=='') {
          $("#errormsg_username").hide();
         $("#errormsg_username").css({ 
            "background" :"red",
            "color"      : "#fff"
        });
        $("#errormsg_username").fadeIn("slow");
        $("#errormsg_username").html("This field is required"); 
        $("#U_USERNAME").focus();
       return false;
    }else{
          $("#errormsg_username").hide();
    }
    if (pass1=='') {
          $("#errormsg_pass1").hide();
         $("#errormsg_pass1").css({ 
            "background" :"red",
            "color"      : "#fff"
        });
        $("#errormsg_pass1").fadeIn("slow");
        $("#errormsg_pass1").html("This field is required"); 
        $("#U_PASS").focus();
       return false;
    }else{
          $("#errormsg_pass1").hide();
    }
    if (pass2=='') {
         $("#errormsg_pass2").css({ 
            "background" :"red",
            "color"      : "#fff"
        });
        $("#errormsg_pass2").fadeIn("slow");
        $("#errormsg_pass2").html("This field is required"); 
        $("#RU_PASS").focus();
       return false;
    }else{
          $("#errormsg_pass2").hide();
    }

    if (pass1 != pass2) {
       $("#errormsg_pass2").css({ 
            "background" :"red",
            "color"      : "#fff"
        });
        $("#errormsg_pass2").fadeIn("slow");
        $("#errormsg_pass2").html("Password does not match"); 
        $("#RU_PASS").focus();
       return false;
    } 

});
  

$(document).on("click", ".submitapply", function () {
 /* load all variables */
   
     var lcredit =  document.getElementById('leavecredits').value; 
     var lcategory = document.getElementById('LEAVECATEGORY').value;

    if (lcategory=='With Pay') {
   
    if (lcredit == 0) {
       $("#validate_leaveCredits").css({ 
            "background" :"red",
            "color"      : "#fff"
        });
        $("#validate_leaveCredits").fadeIn("slow");
        $("#validate_leaveCredits").html("No available leave credits!"); 
        $("#RU_PASS").focus();
       return false;
    }else{
     
         $('#SUBMITLEAVE').modal('show'); 
        return false
  
    }

   }else{ 
         $('#SUBMITLEAVE').modal('show'); 
        return false 
  }
    
  
}); 

$(document).on("change", ".typeofleave", function () {
 /* load all variables */
   
  var typeofleave =  document.getElementById('LEAVETYPE').value 
   
    // $("#checkid_message").hide(); 

   if (typeofleave=='Sick') {
      $('.PHYSICIAN_NURSE').removeAttr('disabled');
      $('.PHYSICIAN_NURSE').val('');
       // alert(typeofleave);
   }else{
      $('.PHYSICIAN_NURSE').attr('disabled','false');
      $('.PHYSICIAN_NURSE').val('NONE');
        // alert(typeofleave);
   }; 

   if (typeofleave=='Paternity' || typeofleave=='Maternity') {
      $('#LEAVECATEGORY').val('Without Pay');
       $('#LEAVECATEGORY').attr('disabled','false');
      // return false;
   }else{
      $('#LEAVECATEGORY').removeAttr('disabled');
   };

   //  if (typeofleave=='SSS') {
   //    $('#leavecredits').val('NONE');
   //    return false;
   // };

    
     $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "creditbalance.php",    
        dataType: "text",  //expect html to be returned  
        data:{LEAVETYPE:typeofleave},               
        success: function(data){   
          $('#leavecredits').val(data);   
        }

    }); 
 
}); 

function isNumber(element){

element.val(element.val().replace(/[\d.]/g, ''));

}

// for service credits
$(document).on("keyup", ".servicecredits", function () {
 /* load all variables */

      var id = $(this).data('id');
      var inpOthers =  document.getElementById(id+'OTHERS').value 

     $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "updateothers.php",    
        dataType: "text",  //expect html to be returned  
        data:{ID:id,OTHER:inpOthers},               
        success: function(data){   
          // $('#leavecredits').val(data);   
        }

    }); 
 
}); 

$(document).on("keypress", ".servicecredits", function (event) {
 /* load all variables */

      var id = $(this).data('id');
      var inpOthers =  document.getElementById(id+'OTHERS').value
 
      if(event.which < 46 || event.which >= 58 || event.which == 47){
          event.preventDefault();
      }

      if(event.which == 46 && $(inpOthers).val().indexOf('.') != -1){
          inpOthers.value = '';
      }

       
 
}); 

// for maternity
   
$(document).on("click", ".servicecredits", function () {
 /* load all variables */
  $(this).select();
 
});

$(document).on("keyup", ".maternity", function () {
 /* load all variables */

      var id = $(this).data('id');
      var inpOthers =  document.getElementById(id+'MATERNITY').value 

     $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "updateothers.php",    
        dataType: "text",  //expect html to be returned  
        data:{ID:id,MATERNITY:inpOthers},               
        success: function(data){   
          // $('#leavecredits').val(data);   
        }

    }); 
 
}); 


$(document).on("keypress", ".maternity", function (event) {
 /* load all variables */

      var id = $(this).data('id');
      var inpOthers =  document.getElementById(id+'MATERNITY').value
 
      if(event.which < 46 || event.which >= 58 || event.which == 47){
          event.preventDefault();
      }

      if(event.which == 46 && $(inpOthers).val().indexOf('.') != -1){
          inpOthers.value = '';
      }

       
 
}); 
   
$(document).on("click", ".maternity", function () {
 /* load all variables */
  $(this).select();
 
});

 
</script> 
</body>
</html>