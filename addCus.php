<?php
	session_start();
	if (!isset($_SESSION['isLoggedIn']) || $_SESSION['isLoggedIn'] != true)
	{
		header("Location: login.php");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Add Custormer form</title>
		<link rel="stylesheet" type="text/css" href="CSS/addFlight.css">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		<style type="text/css">
			label{
				background-color: #BCA09D;
			}
		</style>
	</head>
	<body>
		

		<form action="addC.php" method="POST" enctype="multipart/form-data" style="background-color: #D7B6B2">
			<h1>Add Customer</h1>
			<div class="">
				<label for="guestUsername">Username</label>
				<input type="" class="form-control" id="guestUsername" name="guestUsername" placeholder="" required>
			</div>
			<div class="">
				<label for="psswd">Password</label>
				<input type="" class="form-control" id="psswd" name="psswd" placeholder="" required>
			</div>
			<div class="">
				<label for="FirstName">First Name</label>
				<input type="" class="form-control" id="Firstname" name="Firstname" placeholder="" required>
			</div>
			<div class="">
				<label for="FirstName">Last Name</label>
				<input type="" class="form-control" id="Lastname" name="Lastname" placeholder="" required>
			</div>
			<div class="">
				<label for="Bday">Birth day</label>
				<input type="" class="form-control" id="Bday" name="Bday" placeholder="" required>
			</div>
			<div class="">
				<label for="Address">Address</label>
				<input type="" class="form-control" id="Address" name="Address" placeholder="" required>
			</div>
			<div class="">
				<label for="Tel">Telephone number</label>
				<input type="" class="form-control" id="Tel" name="Tel" placeholder="" required>
			</div>
			<div class="">
				<label for="Email">Email</label>
				<input type="email" class="form-control" id="Email" name="Email" placeholder="" required>
			</div>
			 <button type="submit" class="btn btn-primary">Add</button>
					
		</form>
	</body>
</html>