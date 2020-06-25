<!DOCTYPE html>
<html>
	<head>
		<title>Modify flight form</title>
		<link rel="stylesheet" type="text/css" href="CSS/addFlight.css">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		<style type="text/css">
			label{
				background-color: #F2A311;
			}
		</style>
	</head>
	<body>
		

		<form action="edit.php" method="POST" enctype="multipart/form-data" style="background-color: #F5D18F">
			<h1>Modify Flights</h1>
			
			<div class="">
				<label for="Name_chuyenbay">Id_chuyenbay</label>
				<br>
				<input type="" class="form-control" id="Id_chuyenbay" name="Idchuyenbay" value="<?php
					//including the database connection file
					include("connectDB.php");
					//getting id of the data from url
					$Id_chuyenbay = $_GET['Id_chuyenbay'];
					echo "$Id_chuyenbay";
				?>"readonly required><?php
					//including the database connection file
					include("connectDB.php");
					//getting id of the data from url
					$Id_chuyenbay = $_GET['Id_chuyenbay'];
					
				?>
				<br>
				<label for="Name_chuyenbay">Name_chuyenbay</label>
				<input type="" class="form-control" id="Name_chuyenbay" name="Namechuyenbay" placeholder="" required>
			</div>
			
			<div class="">
				<label for="From_chuyenbay">From_chuyenbay</label>
				<select class="form-control" id="From_chuyenbay" name="Fromchuyenbay">
					<option>TP.HCM</option>
					<option>Hà Nội</option>
					<option>Nha Trang</option>
					<option>Sa Pa</option>
					<option>Đà Lạt</option>
					<option>Đà Nẵng</option>
					<option>Hàn Quốc</option>
					<option>Nhật Bản</option>
					<option>Trung Quốc</option>
					<option>Singapore</option>
					<option>Malaysia</option>
					<option>Đài Loan</option>
					<option>Thái Lan</option>
					<option>Philipines</option>
   				</select>

			</div>
			<div class="">
				<label for="To_chuyenbay">To_chuyenbay</label>
				<select class="form-control" id="To_chuyenbay" name="Tochuyenbay">
					<option>TP.HCM</option>
					<option>Hà Nội</option>
					<option>Nha Trang</option>
					<option>Sa Pa</option>
					<option>Đà Lạt</option>
					<option>Đà Nẵng</option>
					<option>Hàn Quốc</option>
					<option>Nhật Bản</option>
					<option>Trung Quốc</option>
					<option>Singapore</option>
					<option>Malaysia</option>
					<option>Đài Loan</option>
					<option>Thái Lan</option>
					<option>Philipines</option>
   				</select>
			</div>
			<div class="">
				<label for="Date_chuyenbay">Date_chuyenbay</label>
				<input type="date" class="form-control" id="Date_chuyenbay" name="Datechuyenbay" placeholder="" required>
			</div>
			<div class="">
				<label for="Time_fly">Time_fly</label>
				<input type="time" class="form-control" id="Time_fly" name="Timefly" placeholder="" required>
			</div>
			<div class="">
				<label for="Time_arrive">Time_arrive</label>
				<input type="time" class="form-control" id="Time_arrive" name="Timearrive" placeholder="" required>
			</div>
			<div class="">
				<label for="fileUpload">Picture_chuyenbay</label>
				<input type="file" id="fileUpload" name="fileUpload" required style="width: 300px;">
			</div>
			<!--<textarea class="form-control" id="Description" name="Description" placeholder="" required> </textarea>-->
			 <button type="submit" class="btn btn-info" name="update">Change</button>
					
		</form>
	</body>
</html>