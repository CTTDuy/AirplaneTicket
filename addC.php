<?php 
	include 'connectDB.php';
		
	$id = $_POST['guestUsername'];
	$pass = $_POST['psswd'];
	$firstname = $_POST['Firstname'];
	$lastname = $_POST['Lastname'];
	$birthday = $_POST['Bday'];
	$address = $_POST['Address'];
	$telephone = $_POST['Tel'];
	$email = $_POST['Email']; 
	$sql = "INSERT INTO guestacc(guestUsername,psswd, Firstname, Lastname, Bday, Address, Tel, Email) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
	$stmt = $conn->prepare($sql);
	$stmt->bind_param("ssssssss", $id, $pass, $firstname, $lastname, $birthday, $address, $telephone, $email);
	
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

		<title>Kết quả Add Customer</title>

		<!-- Bootstrap core CSS -->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
		  
			
			<?php if ($isOK) { ?>
			<div class="alert alert-success">
				Customer added successfully. <br>
				Please <a href="addCus.php">click here</a> to add more.
				Click <a href="CusList.php">here</a> to go back to Customer List.
			</div>
			<?php } else {?>
			<div class="alert alert-danger">
				Failed to add Customer.
			</div>
			<?php } ?>
		  
		</div>
	</body>
</html>