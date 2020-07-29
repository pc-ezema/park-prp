<?php
  $conn = new mysqli('localhost', 'nardustc_user', '1234567890qwer@', 'nardustc_apdb');
    if($conn->connect_error){
      die("Fatal Error: Can't connect to database: ". $conn->connect_error);
    }
?>