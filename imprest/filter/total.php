<?php
	date_default_timezone_set('Asia/Manila');
	if(ISSET($_POST['filter'])){
		require 'conn.php';
		$date = $_POST['date'];
		$query = mysqli_query($conn, "SELECT sum(Amount) FROM `adminimprest` WHERE MONTH(date) = '$date' ORDER BY `date` ASC") or die(mysqli_error());
		$query1 = mysqli_query($conn, "SELECT sum(Amount) FROM `bookuimprest` WHERE MONTH(date) = '$date' ORDER BY `date` ASC") or die(mysqli_error());
		$query2 = mysqli_query($conn, "SELECT sum(Amount) FROM `banowimprest` WHERE MONTH(date) = '$date' ORDER BY `date` ASC") or die(mysqli_error());
		$query3 = mysqli_query($conn, "SELECT sum(Amount) FROM `distillerimprest` WHERE MONTH(date) = '$date' ORDER BY `date` ASC") or die(mysqli_error());
		$query4 = mysqli_query($conn, "SELECT sum(Amount) FROM `feedmillimprest` WHERE MONTH(date) = '$date' ORDER BY `date` ASC") or die(mysqli_error());
		$query5 = mysqli_query($conn, "SELECT sum(Amount) FROM `compostimprest` WHERE MONTH(date) = '$date' ORDER BY `date` ASC") or die(mysqli_error());
		$query6 = mysqli_query($conn, "SELECT sum(Amount) FROM `bsfimprest` WHERE MONTH(date) = '$date' ORDER BY `date` ASC") or die(mysqli_error());
		$query7 = mysqli_query($conn, "SELECT sum(Amount) FROM `fisheryimprest` WHERE MONTH(date) = '$date' ORDER BY `date` ASC") or die(mysqli_error());
		$query8 = mysqli_query($conn, "SELECT sum(Amount) FROM `livestockimprest` WHERE MONTH(date) = '$date' ORDER BY `date` ASC") or die(mysqli_error());
		$query9 = mysqli_query($conn, "SELECT sum(Amount) FROM `poultryimprest` WHERE MONTH(date) = '$date' ORDER BY `date` ASC") or die(mysqli_error());
		$query10 = mysqli_query($conn, "SELECT sum(Amount) FROM `cropimprest` WHERE MONTH(date) = '$date' ORDER BY `date` ASC") or die(mysqli_error());
		$query11 = mysqli_query($conn, "SELECT sum(Amount) FROM `organicimprest` WHERE MONTH(date) = '$date' ORDER BY `date` ASC") or die(mysqli_error());
		$query12 = mysqli_query($conn, "SELECT sum(Amount) FROM `farmventureimprest` WHERE MONTH(date) = '$date' ORDER BY `date` ASC") or die(mysqli_error());
		$query13 = mysqli_query($conn, "SELECT sum(Amount) FROM `securityimprest` WHERE MONTH(date) = '$date' ORDER BY `date` ASC") or die(mysqli_error());
		$query14 = mysqli_query($conn, "SELECT sum(Amount) FROM `hostelimprest` WHERE MONTH(date) = '$date' ORDER BY `date` ASC") or die(mysqli_error());
		$query15 = mysqli_query($conn, "SELECT sum(Amount) FROM `logisticsimprest` WHERE MONTH(date) = '$date' ORDER BY `date` ASC") or die(mysqli_error());
		$query16 = mysqli_query($conn, "SELECT sum(Amount) FROM `facilityimprest` WHERE MONTH(date) = '$date' ORDER BY `date` ASC") or die(mysqli_error());
		$query17 = mysqli_query($conn, "SELECT sum(Amount) FROM `fleetimprest` WHERE MONTH(date) = '$date' ORDER BY `date` ASC") or die(mysqli_error());
		$query18 = mysqli_query($conn, "SELECT sum(Amount) FROM `artisanimprest` WHERE MONTH(date) = '$date' ORDER BY `date` ASC") or die(mysqli_error());
		$query19 = mysqli_query($conn, "SELECT sum(Amount) FROM `apicimprest` WHERE MONTH(date) = '$date' ORDER BY `date` ASC") or die(mysqli_error());
		$query20 = mysqli_query($conn, "SELECT sum(Amount) FROM `welfareimprest` WHERE MONTH(date) = '$date' ORDER BY `date` ASC") or die(mysqli_error());
		$query21 = mysqli_query($conn, "SELECT sum(Amount) FROM `otulogisticsimprest` WHERE MONTH(date) = '$date' ORDER BY `date` ASC") or die(mysqli_error());
		$query22 = mysqli_query($conn, "SELECT sum(Amount) FROM `tedeimprest` WHERE MONTH(date) = '$date' ORDER BY `date` ASC") or die(mysqli_error());
		$query23 = mysqli_query($conn, "SELECT sum(Amount) FROM `testimprest` WHERE MONTH(date) = '$date' ORDER BY `date` ASC") or die(mysqli_error());
		$query24 = mysqli_query($conn, "SELECT sum(Amount) FROM `snaileryimprest` WHERE MONTH(date) = '$date' ORDER BY `date` ASC") or die(mysqli_error());
		$query25 = mysqli_query($conn, "SELECT sum(Amount) FROM `specialprojectimprest` WHERE MONTH(date) = '$date' ORDER BY `date` ASC") or die(mysqli_error());
		
		while($fetch = mysqli_fetch_array($query)){
		$admin = $fetch['sum(Amount)'];
		}
		while($fetch = mysqli_fetch_array($query1)){
		$booku = $fetch['sum(Amount)'];
		}
		while($fetch = mysqli_fetch_array($query2)){
		$banow = $fetch['sum(Amount)'];
		}
		while($fetch = mysqli_fetch_array($query3)){
		$distiller = $fetch['sum(Amount)'];
		}
		while($fetch = mysqli_fetch_array($query4)){
		$feedmill = $fetch['sum(Amount)'];
		}
		while($fetch = mysqli_fetch_array($query5)){
		$compost = $fetch['sum(Amount)'];
		}
		while($fetch = mysqli_fetch_array($query6)){
		$bsf = $fetch['sum(Amount)'];
		}
		while($fetch = mysqli_fetch_array($query7)){
		$fishery = $fetch['sum(Amount)'];
		}
		while($fetch = mysqli_fetch_array($query8)){
		$livestock = $fetch['sum(Amount)'];
		}
		while($fetch = mysqli_fetch_array($query9)){
		$poultry = $fetch['sum(Amount)'];
		}
		while($fetch = mysqli_fetch_array($query10)){
		$crop = $fetch['sum(Amount)'];
		}
		while($fetch = mysqli_fetch_array($query11)){
		$organic = $fetch['sum(Amount)'];
		}
		while($fetch = mysqli_fetch_array($query12)){
		$farmventure = $fetch['sum(Amount)'];
		}
		while($fetch = mysqli_fetch_array($query13)){
		$security = $fetch['sum(Amount)'];
		}
		while($fetch = mysqli_fetch_array($query14)){
		$hostel = $fetch['sum(Amount)'];
		}
		while($fetch = mysqli_fetch_array($query15)){
		$logistics = $fetch['sum(Amount)'];
		}
		while($fetch = mysqli_fetch_array($query16)){
		$facility = $fetch['sum(Amount)'];
		}
		while($fetch = mysqli_fetch_array($query17)){
		$fleet = $fetch['sum(Amount)'];
		}
		while($fetch = mysqli_fetch_array($query18)){
		$artisan = $fetch['sum(Amount)'];
		}
		while($fetch = mysqli_fetch_array($query19)){
		$apic = $fetch['sum(Amount)'];
		}
		while($fetch = mysqli_fetch_array($query20)){
		$welfare = $fetch['sum(Amount)'];
		}
		while($fetch = mysqli_fetch_array($query21)){
		$otulogistics = $fetch['sum(Amount)'];
		}
		while($fetch = mysqli_fetch_array($query22)){
		$tede = $fetch['sum(Amount)'];
		}
		while($fetch = mysqli_fetch_array($query23)){
		$test = $fetch['sum(Amount)'];
		}
		while($fetch = mysqli_fetch_array($query24)){
		$snailery = $fetch['sum(Amount)'];
		}
		while($fetch = mysqli_fetch_array($query25)){
		$specialproject = $fetch['sum(Amount)'];
		}
		echo $sum = ($admin + $booku + $banow + $distiller + $feedmill + $compost + $bsf + $fishery
					+ $livestock + $poultry + $crop + $organic + $farmventure + $security +
					$hostel + $logistics + $facility + $fleet + $artisan + $apic + $welfare + $otulogistics +
					$tede + $test + $snailery + $specialproject);
	}
?>