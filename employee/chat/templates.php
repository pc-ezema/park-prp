<?php
require_once("initialize.php");
if(!isset($_SESSION['EMPLOYEEID'])){
	redirect(web_root."index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | PARK ADMINISTRATIVE SERVICES</title>
    
    <!-- core CSS -->
    <link href="<?php echo web_root; ?>admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo web_root; ?>admin/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo web_root; ?>admin/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo web_root; ?>admin/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo web_root; ?>admin/css/main.css" rel="stylesheet">
    <link href="<?php echo web_root; ?>admin/css/responsive.css" rel="stylesheet">

    <link href="<?php echo web_root; ?>admin/font-awesome/css/font-awesome.min.css" rel="stylesheet">

<link href="<?php echo web_root; ?>admin/css/dataTables.bootstrap.css" rel="stylesheet">
<!-- // <script src="<?php echo web_root; ?>select2/select2.min.css"></script> ./ -->

<!-- datetime picker CSS -->
<link href="<?php echo web_root; ?>admin/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<link href="<?php echo web_root; ?>admin/css/datepicker.css" rel="stylesheet" media="screen">


<link rel="stylesheet" href="<?php echo web_root; ?>admin/select2/select2.min.css">

<link href="<?php echo web_root; ?>admin/css/nav-button-custom.css" rel="stylesheet" media="screen">
 <link href="<?php echo web_root; ?>admin/css/ekko-lightbox.css" rel="stylesheet">

<style type="text/css">
  .login-form {
  /*margin-top: 60px;*/

}

form[role=login] {
  color: #5d5d5d;
  background: #f2f2f2;
  padding: 26px;
  border-radius: 10px;
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;
}
   
  form[role=login] input,
  form[role=login] button {
    font-size: 18px; 
  }
  form[role=login] > div {
    text-align: center;
  }
   
</style>
 
</head><!--/head--> 

<body class="homepage" >

    <header id="header">
 

        <nav class="navbar navbar-mod navbar-fixed-top" role="banner" style="background-color:green;">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" style="background-color:#ff9933" data-toggle="collapse" data-target=".navbar-collapse">
                        <span style="color:#fff" class="sr-only">Toggle navigation</span>
                        <span style="color:#fff" class="icon-bar"></span>
                        <span style="color:#fff" class="icon-bar"></span>
                        <span style="color:#fff" class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo web_root; ?>employee/index.php"><img style="width:70px" height="60px" src="<?php echo web_root; ?>admin/img/bg/agrologo.png" alt="logo"></a> 
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav mod-menu" style="font-size:13px;"  >
               
                        <li hover="ff9933" class="<?php echo ($_GET['page'] == 1) ? "active" : false;?>">  <a href="#"></a></li>
                        
									 
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

                                    <h4 class="modal-title" id="myModalLabel">Please Sign in</h4>
                                </div>

                                <form action="<?php echo web_root; ?>login.php"   method="post">
                                    <div class="modal-body"> 
                                      <section class="login-form"> 
                                            <form method="post" action="" role="login" >
                                                 <!-- <img src="img/RR-Celis.jpg" height="25px" class="img-responsive" alt="" /> -->
                                              <input type="input" name="user_email" placeholder="Username" required class="form-control input-lg" value="" />
                                              
                                              <input type="password" name="user_pass" class="form-control input-lg" id="password" placeholder="Password" required  />
                                               
                                              <button type="submit" name="btnLogin" class="btn btn-lg btn-primary btn-block">Sign in</button>
                                         
                                            </form>
                                         </section>
                                                                  
                                            
                                        </div>
                                    </div>
 
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->


 
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
 
 
    //Money Euro
    $("[data-mask]").inputmask();
 
     
 $(document).ready(function() {
    $('#dash-table').DataTable({
                responsive: true ,
                  "sort": false
        });
 
    });
 
  function capitalize(textboxid, str) {
      // string with alteast one character
      // if (str && str.length >= 1)
      // {       
      //     var firstChar = str.charAt(0);
      //     var remainingStr = str.slice(1);
      //     str = firstChar.toUpperCase() + remainingStr;
      // }
      document.getElementById(textboxid).value =  str.toUpperCase();
  }


 
 
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

// $('#leaveform').on('submit', function() {
   
  
   
//       var lcredit =  document.getElementById('leavecredits').value;
//       var tleave = document.getElementById('LEAVETYPE').value;
//       var lcategory = document.getElementById('LEAVECATEGORY').value;


//     if (lcategory=='With Pay') {
   
//     if (lcredit == 0) {
//        $("#validate_leaveCredits").css({ 
//             "background" :"red",
//             "color"      : "#fff"
//         });
//         $("#validate_leaveCredits").fadeIn("slow");
//         $("#validate_leaveCredits").html("No available leave credits!"); 
//         $("#RU_PASS").focus();
//        return false;
//     }else{
//       $('#save').click(function(ev){
//          $('#SUBMITLEAVE').modal('show'); 
//         return false
//      })

//     }

//     } 

// });


$(document).on("click", ".submitapply", function () {
 /* load all variables */
   
     var lcredit =  document.getElementById('leavecredits').value;
     var tleave = document.getElementById('LEAVETYPE').value;
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


    // $('#save').click(function(ev){
    //      $('#SUBMITLEAVE').modal('show'); 
    //      ev.preventDefault();
    //  })
  
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


   // if (typeofleave=='SSS') {
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


$("#gosearch").click(function() {
    var instructor = document.getElementById("INST_ID").value;
    if (instructor == 'Select') {
        alert("Pls. Select Instructor.");
        return false;
    }else{
        return true;
    };
})
</script> 
</body>
</html>