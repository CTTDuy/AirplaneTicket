<?php 
	include 'connectDB.php';
		
	$Id = $_POST['Idchuyenbay'];
	$Name = $_POST['Namechuyenbay'];
	$From = $_POST['Fromchuyenbay'];
	$To = $_POST['Tochuyenbay'];
	$Date= $_POST['Datechuyenbay'];
	$flyTime= $_POST['Timefly'];
	$arriveTime= $_POST['Timearrive'];
	
    $target = "imgfold/" . $_FILES['fileUpload']['name'];
	move_uploaded_file($_FILES['fileUpload']['tmp_name'], $target);
	
	$sql = "UPDATE flightlist SET Name_chuyenbay = ?,From_chuyenbay = ?, To_chuyenbay = ?, Date_chuyenbay = ?, Time_fly = ?, Time_arrive = ?, Picture_chuyenbay = ? WHERE Id_chuyenbay = '$Id'";
	/*
	$sql = "UPDATE flightlist SET From_chuyenbay = '$From' WHERE Id_chuyenbay = '$Id'";
	$sql = "UPDATE flightlist SET To_chuyenbay = '$From' WHERE Id_chuyenbay = '$Id'";
	$sql = "UPDATE flightlist SET Date_chuyenbay = '$To' WHERE Id_chuyenbay = '$Id'";
	$sql = "UPDATE flightlist SET Time_fly = '$Date' WHERE Id_chuyenbay = '$Id'";
	$sql = "UPDATE flightlist SET Time_arrive = '$flyTime' WHERE Id_chuyenbay = '$Id'";
	$sql = "UPDATE flightlist SET Picture_chuyenbay = '$arriveTime' WHERE Id_chuyenbay = '$Id'";
*/
	$stmt = $conn->prepare($sql);
	$stmt->bind_param("sssssss", $Name, $From, $To, $Date, $flyTime, $arriveTime, $target);
	
	$isOK = $stmt->execute();
	
	$stmt->close();
	$conn->close();

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="../../../../favicon.ico">

		<title>Kết quả Edit flight</title>

		<!-- Bootstrap core CSS -->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
		  
			
			<?php if ($isOK) { ?>
			<div class="alert alert-success">
				flight edit successfully. <br>
				Please <a href="addFlight.php">click here</a> to add more.
				Click <a href="flightList.php">here</a> to go back to flightList.
			</div>
			<?php } else {?>
			<div class="alert alert-danger">
				Failed to Edit flight.
			</div>
			<?php } ?>
		  
		</div>
	</body>
</html>