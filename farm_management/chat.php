<?php
	require_once 'conn.php';
	if(isset($_POST['message'])){		
			$name = $_POST['name'];
			$message = addslashes($_POST['message']);
			$id = $_POST['id'];
		
		mysqli_query($conn,"insert into `message` (message_id, name, message, chat_date) values ('$id', '$name' , '$message', '$date')") or die(mysqli_error());
	}
?>

<?php
	if(isset($_POST['res'])){
	?>
	<?php
		$query=mysqli_query($conn,"select * from `message` order by message_id desc") or die(mysqli_error());
		while($row=mysqli_fetch_array($query)){
	?>	
		<div style="border: 2px solid purple; background-color: #f1f1f1; border-radius: 30px; max-width: 320px; padding: 20px;">
			<p><b style="text-shadow: 0 0 20px orange; color:green;"><?php echo $row['name']; ?>:</b>
			<i style="color:black;"><?php echo $row['message']; ?></i></p>
			<span style="float: right; color: #aaa;"><?php echo $row['chat_date']; ?></span>
		</div>
		<br>
	<?php
		}
	}	
?>
				