
<?php
include('connection.php');
if(isset($_GET['file_id'])) {
		$file_id = $_GET['file_id'];

$conn->query("DELETE FROM `file` WHERE file_id='$file_id'");

header("Location:index.php");

}

?>
	