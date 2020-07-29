<?php
require_once("../include/initialize.php");

 ?>
  <?php
 if (isset($_SESSION['USERID'])){
      redirect(web_root."admin/index.php");
     } 
  ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Admin: PARK ADMINISTRATIVE SERVICES</title> 
<link id="browser_favicon" rel="shortcut icon" href="<?php echo web_root; ?>admin/img/bg/agrologo.jpg">

<!-- Bootstrap core CSS -->
<link href="<?php echo web_root; ?>admin/css/bootstrap.min.css" rel="stylesheet"> 
<link href="<?php echo web_root; ?>admin/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">

<link href="<?php echo web_root; ?>admin/css/index_background.css" rel="stylesheet" media="screen">
<link href="<?php echo web_root; ?>admin/css/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
<link href="<?php echo web_root; ?>admin/css/my_style.css" rel="stylesheet" media="screen">
<link href="<?php echo web_root; ?>admin/css/styles.css" rel="stylesheet" media="screen">
<link href="<?php echo web_root; ?>admin/css/index.css" rel="stylesheet" media="screen">
<link href="<?php echo web_root; ?>admin/css/DT_bootstrap.css" rel="stylesheet" media="screen">

<link href="<?php echo web_root; ?>admin/css/fullcalendar/fullcalendar.css" rel="stylesheet" media="screen">
<link href="<?php echo web_root; ?>admin/css/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css" rel="stylesheet" media="screen">
<link href="<?php echo web_root; ?>admin/fonts/font-awesome.min.css" rel="stylesheet" media="screen">
<link href="<?php echo web_root; ?>admin/css/jGrowl/jquery.jgrowl.css" rel="stylesheet" media="screen"> 
 
<style type="text/css">

body{

  background:url(img/loginbg.png) repeat-x;
 
}

.ssgmenu  > li > a {

  font-size: 25px;
  /*font-weight: bold;*/
  padding: 15px;
  color: #000;

} 
.ssgmenu > li > a:hover,
.ssgmenu > li > a:focus{
  background: #ff9933;
  color: #fff;
} 
 
.motto p {
  font-size: 32px;
  /*font-weight: bold;*/
  margin-top: 5%;


}
.motto{
  text-shadow: 1px 1px 4px rgba(0, 0, 0, 1);
  color: #fff;
  font-size:16px;
    
}
.timeh1{
   text-shadow: 1px 1px 4px rgba(0, 0, 0, 1);
  color: #fff;
 
}
</style>    
   
<body id="login"   >  




<div class="container">
    <div class="row-fluid">

      <div class="span6">
        <div class="title_index">

              <div class="row-fluid">
                <div class="span12"></div>
                    <div class="row-fluid">
                      <div class="span12" style="text-align:center">
                      <a href="../index.php"><img class="index_logo" src="img/bg/agrologo.jpg" height="50px" width="70px" ></a>
                      </div>  
                      <div class="span12" style="text-align:center">
                        <div class="motto" > 
                        <h3><p>PARK ADMINISTRATIVE SERVICES</p></h3>                          
                        </div>                      
                      </div>              
                    </div>                    
              </div>  
            <?php //include('title_index.php'); ?>
        </div>
      </div>
 

      <div class="span6">
        <div class="pull-right">
        <?php check_message(); ?>
                <div id="home" ><!--/. tells about what would be the log-in appearance -->
        <div class="overlay">
        <!--/. Starting code for the log-in interface appearance -->
           <form id="login_form1" class="form-signin" method="post" action="process.php">
        <h3 class="form-signin-heading" style="color:#fff">
          <i class="icon-lock"></i> Please Login
        </h3>
        <input type="text"      class="input-block-level"   id="username" name="username" placeholder="Username" required>
        <input type="password"  class="input-block-level"   id="password" name="password" placeholder="Password" required>
        
        <button data-placement="right" title="Click Here to Sign In" id="signin" name="btnLogin" class="btn btn-info" type="submit"><i class="icon-signin icon-large"></i> Log in</button>
   
      </form>
          
      
        
        <div class="row-fluid">
        <div class="col-md-12 ">
        <h4 style="color:#fff"><span id="tick2" >
          </span>&nbsp;| 
          
          
        
<script>
  // <!--/. tells about the time  -->
        function show2(){
        if (!document.all&&!document.getElementById)
        return
        thelement=document.getElementById? document.getElementById("tick2"): document.all.tick2
        var Digital=new Date()
        var hours=Digital.getHours()
        var minutes=Digital.getMinutes()
        var seconds=Digital.getSeconds()
        var dn="PM"
        if (hours<12)
        dn="AM"
        if (hours>12)
        hours=hours-12
        if (hours==0)
        hours=12
        if (minutes<=9)
        minutes="0"+minutes
        if (seconds<=9)
        seconds="0"+seconds
        var ctime=hours+":"+minutes+":"+seconds+" "+dn
        thelement.innerHTML=ctime
        setTimeout("show2()",1000)
        }
        window.onload=show2
        //-->
        
</script> <!--/. Script where the format of the interface time,month,day and year relies -->

            <?php
              $date = new DateTime();
              echo $date->format('l, F jS, Y'); 
            ?>
            <h4>
            </div>
          </div>
      
      </div>
      
      
        </div>
      <!--/.  END -->

    </div>
     
          <?php //include('login_form.php'); ?>
          </div>
      </div>
   

    </div>
    <div class="row-fluid">
        <div class="offset3">    
         <div class="span11">
            <div class="index-footer">
              <div class="navbar">
               <div class="navbar-inner">
                   <div class="container-fluid">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
             
              <!--     <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav" id="footer_nav">
                      <li class="divider-vertical"></li>
                      
                      <li class="active"><a  href="<?php echo web_root; ?>index.php"><i class="icon-home"></i>&nbsp;Home</a></li> 
                      <li class="active"><a  href="about.php"><i class="icon-info-sign"></i>&nbsp;Mission & Vision</a></li>   
                      <li class="active"><a  href="history.php"><i class="icon-file"></i>&nbsp;School History</a></li>
                      <li class="active"><a  href="developers.php"><i class="icon-group"></i>&nbsp;Developers</a></li>
                      <li class="divider-vertical"></li>
                      
                      </ul>
                   </div> -->
                        <!--/.nav-collapse -->
                     </div>
                   </div>
                </div>
              <?php //include('link.php'); ?>
            </div>
          </div>    
       </div>
    </div>
      <?php //include('footer.php'); ?>
    </div> 
</body>


</head>
 <center>
  <footer   > 
  <p style="color:#fff">
                    &copy; 2020 <a style="color:#fff" target="_blank" href="<?php echo web_root; ?>" title="PARK ADMINISTRATIVE SERVICES">PARK ADMINISTRATIVE SERVICES</a>. All Rights Reserved.
       </p>          
    </footer><!--/#footer-->
</center>
  <script src="<?php echo web_root; ?>admin/js/vendors/jquery-1.9.1.min.js"></script> 
  <script src="<?php echo web_root; ?>admin/js/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script> 


  <script src="<?php echo web_root; ?>admin/css/jGrowl/jquery.jgrowl.js"></script>   
   
</html>
