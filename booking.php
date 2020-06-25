<?php 
	include 'connectDB.php';
		
	$Id = $_POST['Id_chuyenbay'];
	$Name = $_POST['Name_chuyenbay'];
	$From = $_POST['From_chuyenbay'];
	$To = $_POST['To_chuyenbay'];
	$Date = $_POST['Date_chuyenbay'];
	$flyTime = $_POST['Time_fly'];
	$arriveTime = $_POST['Time_arrive'];
	$seatID = $_POST['seatID'];
	$price = $_POST['price'];
	$firstname = $_POST['Ho'];
	$lastname = $_POST['Ten'];
	$Bday = $_POST['Bday'];
	$address = $_POST['Address'];
	$tel = $_POST['Tel'];
	$email = $_POST['Email'];
	

	

	

	$sql = "INSERT INTO flightbooking VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
	$stmt = $conn->prepare($sql);
	$stmt->bind_param("sssssssssssssss", $Id, $Name, $From, $To, $Date, $flyTime, $arriveTime, $seatID, $price, $firstname, $lastname, $Bday, $address, $tel, $email);
	
	$isOK = $stmt->execute();
	
	$stmt->close();
	$conn->close();

?>
<?php 
	include 'connectDB.php';
		
	$sql1 = "UPDATE $Id SET properties='Booked' WHERE seatID = ?";
	$stmt1 = $conn->prepare($sql1);
	$stmt1->bind_param("s",$seatID);
	
	$isOK1 = $stmt1->execute();
	
	$stmt1->close();
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

		<title>Kết quả Add flight</title>

	
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
		  
			
			<?php if ($isOK && $isOK1) { ?>
			<div class="alert alert-success">
				<h1>Chúc mừng bạn đã đặt vé thành công.</h1> <br>
				Click <a href="Homepage.php">here</a> to go back to Homepage.
			</div>
			<?php } else {?>
			<div class="alert alert-danger">
				Failed to add flight.
			</div>
			<?php } ?>
		  
		</div>
	</body>
</html>