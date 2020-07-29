<?php
 function validate_time_interval($from_time,$to_time){ 
 
         
     $tinterval = round(abs($to_time  - $from_time) / 60 ,2);

	    $flag=0; 
	 
	      if($tinterval < 240){
	        $flag=1; 
	        echo "Time is Invalid!";
	        break;
	      }
 
    return $flag;

  }

?>