<style type="text/css">

 
#background {
    margin-top: 80px; 
    width: 100%; 
    height: 76%; 
    position: fixed; 
    left: 0px; 
    top: 0px; 
    z-index: -1; /* Ensure div tag stays behind content; -999 might work, too. */
}

.stretch {
    width:100%;
    height:100%;
}

.ssgmenu  > li > a {

  font-size: 25px;
  /*font-weight: bold;*/
  padding: 15px;
  color: #6f0305;

} 
.ssgmenu > li > a:hover,
.ssgmenu > li > a:focus{
  background: #ff9933;
  color: #6f0305;
} 
 
.motto p {
  font-size: 32px;
  /*font-weight: bold;*/
  margin-top: 5%;

}
.motto{
  text-shadow: 1px 1px 4px rgba(0, 0, 0, 1);
  color: #6f0305;
  font-size:16px;
    
}
.timeh1{
   text-shadow: 1px 1px 4px rgba(0, 0, 0, 1);
  color: #6f0305;
 
}
</style>  
  <section id="feature" class="transparent-bg"  >
        <div class="container "> 
            <div class="row">
                <div class="features">
                
                 <div style="height:410px">
                 <div  id="background">
                   <img src="admin/img/bg/agropark.jpg" class="stretch">
                   
                 </div>
                 </div>

			<div class="col-lg-2"></div>
                    <div class="col-lg-8"> 
			<div class="col-lg-6">
                          <div class="title_index">
                               
                          </div>
                        </div>
                        <div class="col-lg-6">
                         <div class="row-fluid">
                          <div class="col-md-12 ">
                          <h2>
                          <span id="tick2" class="timeh1" style="font-size:30px;">
                          </span> 
                           <script>
                // <!--/. tells about the time  -->
                              // function show2(){
                              // if (!document.all&&!document.getElementById)
                              // return
                              // thelement=document.getElementById? document.getElementById("tick2"): document.all.tick2
                              // var Digital=new Date()
                              // var hours=Digital.getHours()
                              // var minutes=Digital.getMinutes()
                              // var seconds=Digital.getSeconds()
                              // var dn="PM"
                              // if (hours<12)
                              // dn="AM"
                              // if (hours>12)
                              // hours=hours-12
                              // if (hours==0)
                              // hours=12
                              // if (minutes<=9)
                              // minutes="0"+minutes
                              // if (seconds<=9)
                              // seconds="0"+seconds
                              // var ctime=hours+":"+minutes+":"+seconds+" "+dn
                              // thelement.innerHTML=ctime
                              // setTimeout("show2()",1000)
                              // }
                              // window.onload=show2
                      //-->
                      
                        </script> <!--/. Script where the format of the interface time,month,day and year relies -->
                          </h2> 
					<h2 class="timeh1" style="font-size:40px;">
                             <?php
                            // $date = new DateTime();
                            // echo $date->format('l, F jS, Y'); 
                          ?>
                          </h2>
                         
                          </div>
                        </div>  
                      </div> 
                 
                </div><!--/.services-->
            </div><!--/.row-->  
        </div><!--/.container-->
    </section><!--/#feature--> 


