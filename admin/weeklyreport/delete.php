<?php
require_once("../../include/initialize.php");
if(!isset($_SESSION['USERID'])){
	redirect(web_root."admin/index.php");
}
include('connection.php');
if(isset($_GET['file_id'])) {
		$file_id = $_GET['file_id'];

$conn->query("DELETE FROM `file` WHERE file_id='$file_id'");

redirect("view.php");

}
require_once ("../theme/templates.php");
?>
	