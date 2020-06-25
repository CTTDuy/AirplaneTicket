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
	

	

	$sql = "INSERT INTO flightlist(Id_chuyenbay,Name_chuyenbay, From_chuyenbay, To_chuyenbay, Date_chuyenbay, Time_fly, Time_arrive, Picture_chuyenbay) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
	$stmt = $conn->prepare($sql);
	$stmt->bind_param("ssssssss", $Id, $Name, $From, $To, $Date, $flyTime, $arriveTime, $target);
	
	$isOK = $stmt->execute();
	
	$stmt->close();
	$conn->close();

?>
<?php
	include 'connectDB.php';
	//Tạo bảng
	$sql = "CREATE TABLE $Id(
		seatID VARCHAR(30) NOT NULL primary key,
		properties VARCHAR(30),
		price text NOT NULL,
		row text NOT NULL
	)ENGINE=InnoDB DEFAULT CHARSET=utf8;
	";
 	if ($conn->query($sql) === TRUE) {
	    echo "Table created successfully";
	}
	else {
		echo "Error creating table: " . $conn->error;
	}

	$conn->close();
?>
<?php
	//Nhập thông tin cơ bản
	include 'connectDB.php';	
	$sql = "INSERT INTO $Id VALUES ('1A','Business class','100.000','1a');";
	$sql .= "INSERT INTO $Id VALUES ('2A','Business class','100.000','2a');";
	$sql .= "INSERT INTO $Id VALUES ('3A','Business class','100.000','3a');";

	$sql .= "INSERT INTO $Id VALUES ('1B','Business class','100.000','1a');";
	$sql .= "INSERT INTO $Id VALUES ('2B','Business class','100.000','2a');";
	$sql .= "INSERT INTO $Id VALUES ('3B','Business class','100.000','3a');";
	
	$sql .= "INSERT INTO $Id VALUES ('1C','Business class','100.000','1a');";
	$sql .= "INSERT INTO $Id VALUES ('2C','Business class','100.000','2a');";
	$sql .= "INSERT INTO $Id VALUES ('3C','Business class','100.000','3a');";

	$sql .= "INSERT INTO $Id VALUES ('1D','Business class','100.000','1b');";
	$sql .= "INSERT INTO $Id VALUES ('2D','Business class','100.000','2b');";
	$sql .= "INSERT INTO $Id VALUES ('3D','Business class','100.000','3b');";

	$sql .= "INSERT INTO $Id VALUES ('1E','Business class','100.000','1b');";
	$sql .= "INSERT INTO $Id VALUES ('2E','Business class','100.000','2b');";
	$sql .= "INSERT INTO $Id VALUES ('3E','Business class','100.000','3b');";
	
	$sql .= "INSERT INTO $Id VALUES ('1F','Business class','100.000','1b');";
	$sql .= "INSERT INTO $Id VALUES ('2F','Business class','100.000','2b');";
	$sql .= "INSERT INTO $Id VALUES ('3F','Business class','100.000','3b');";

	
	$sql .= "INSERT INTO $Id VALUES ('4A','Normal class','50.000','4a');";
	$sql .= "INSERT INTO $Id VALUES ('5A','Normal class','50.000','5a');";
	$sql .= "INSERT INTO $Id VALUES ('6A','Normal class','50.000','6a');";
	$sql .= "INSERT INTO $Id VALUES ('7A','Normal class','50.000','7a');";
	$sql .= "INSERT INTO $Id VALUES ('8A','Normal class','50.000','8a');";
	$sql .= "INSERT INTO $Id VALUES ('9A','Normal class','50.000','9a');";
	$sql .= "INSERT INTO $Id VALUES ('10A','Normal class','50.000','10a');";
	$sql .= "INSERT INTO $Id VALUES ('11A','Normal class','50.000','11a');";
	$sql .= "INSERT INTO $Id VALUES ('12A','Normal class','50.000','12a');";
	$sql .= "INSERT INTO $Id VALUES ('13A','Normal class','50.000','13a');";
	$sql .= "INSERT INTO $Id VALUES ('14A','Normal class','50.000','14a');";
	$sql .= "INSERT INTO $Id VALUES ('15A','Normal class','50.000','15a');";
	$sql .= "INSERT INTO $Id VALUES ('16A','Normal class','50.000','16a');";
	$sql .= "INSERT INTO $Id VALUES ('17A','Normal class','50.000','17a');";
	$sql .= "INSERT INTO $Id VALUES ('18A','Normal class','50.000','18a');";
	$sql .= "INSERT INTO $Id VALUES ('19A','Normal class','50.000','19a');";

	$sql .= "INSERT INTO $Id VALUES ('4B','Normal class','50.000','4a');";
	$sql .= "INSERT INTO $Id VALUES ('5B','Normal class','50.000','5a');";
	$sql .= "INSERT INTO $Id VALUES ('6B','Normal class','50.000','6a');";
	$sql .= "INSERT INTO $Id VALUES ('7B','Normal class','50.000','7a');";
	$sql .= "INSERT INTO $Id VALUES ('8B','Normal class','50.000','8a');";
	$sql .= "INSERT INTO $Id VALUES ('9B','Normal class','50.000','9a');";
	$sql .= "INSERT INTO $Id VALUES ('10B','Normal class','50.000','10a');";
	$sql .= "INSERT INTO $Id VALUES ('11B','Normal class','50.000','11a');";
	$sql .= "INSERT INTO $Id VALUES ('12B','Normal class','50.000','12a');";
	$sql .= "INSERT INTO $Id VALUES ('13B','Normal class','50.000','13a');";
	$sql .= "INSERT INTO $Id VALUES ('14B','Normal class','50.000','14a');";
	$sql .= "INSERT INTO $Id VALUES ('15B','Normal class','50.000','15a');";
	$sql .= "INSERT INTO $Id VALUES ('16B','Normal class','50.000','16a');";
	$sql .= "INSERT INTO $Id VALUES ('17B','Normal class','50.000','17a');";
	$sql .= "INSERT INTO $Id VALUES ('18B','Normal class','50.000','18a');";
	$sql .= "INSERT INTO $Id VALUES ('19B','Normal class','50.000','19a');";

	$sql .= "INSERT INTO $Id VALUES ('4C','Normal class','50.000','4a');";
	$sql .= "INSERT INTO $Id VALUES ('5C','Normal class','50.000','5a');";
	$sql .= "INSERT INTO $Id VALUES ('6C','Normal class','50.000','6a');";
	$sql .= "INSERT INTO $Id VALUES ('7C','Normal class','50.000','7a');";
	$sql .= "INSERT INTO $Id VALUES ('8C','Normal class','50.000','8a');";
	$sql .= "INSERT INTO $Id VALUES ('9C','Normal class','50.000','9a');";
	$sql .= "INSERT INTO $Id VALUES ('10C','Normal class','50.000','10a');";
	$sql .= "INSERT INTO $Id VALUES ('11C','Normal class','50.000','11a');";
	$sql .= "INSERT INTO $Id VALUES ('12C','Normal class','50.000','12a');";
	$sql .= "INSERT INTO $Id VALUES ('13C','Normal class','50.000','13a');";
	$sql .= "INSERT INTO $Id VALUES ('14C','Normal class','50.000','14a');";
	$sql .= "INSERT INTO $Id VALUES ('15C','Normal class','50.000','15a');";
	$sql .= "INSERT INTO $Id VALUES ('16C','Normal class','50.000','16a');";
	$sql .= "INSERT INTO $Id VALUES ('17C','Normal class','50.000','17a');";
	$sql .= "INSERT INTO $Id VALUES ('18C','Normal class','50.000','18a');";
	$sql .= "INSERT INTO $Id VALUES ('19C','Normal class','50.000','19a');";

	$sql .= "INSERT INTO $Id VALUES ('4D','Normal class','50.000','4b');";
	$sql .= "INSERT INTO $Id VALUES ('5D','Normal class','50.000','5b');";
	$sql .= "INSERT INTO $Id VALUES ('6D','Normal class','50.000','6b');";
	$sql .= "INSERT INTO $Id VALUES ('7D','Normal class','50.000','7b');";
	$sql .= "INSERT INTO $Id VALUES ('8D','Normal class','50.000','8b');";
	$sql .= "INSERT INTO $Id VALUES ('9D','Normal class','50.000','9b');";
	$sql .= "INSERT INTO $Id VALUES ('10D','Normal class','50.000','10b');";
	$sql .= "INSERT INTO $Id VALUES ('11D','Normal class','50.000','11b');";
	$sql .= "INSERT INTO $Id VALUES ('12D','Normal class','50.000','12b');";
	$sql .= "INSERT INTO $Id VALUES ('13D','Normal class','50.000','13b');";
	$sql .= "INSERT INTO $Id VALUES ('14D','Normal class','50.000','14b');";
	$sql .= "INSERT INTO $Id VALUES ('15D','Normal class','50.000','15b');";
	$sql .= "INSERT INTO $Id VALUES ('16D','Normal class','50.000','16b');";
	$sql .= "INSERT INTO $Id VALUES ('17D','Normal class','50.000','17b');";
	$sql .= "INSERT INTO $Id VALUES ('18D','Normal class','50.000','18b');";
	$sql .= "INSERT INTO $Id VALUES ('19D','Normal class','50.000','19b');";

	$sql .= "INSERT INTO $Id VALUES ('4E','Normal class','50.000','4b');";
	$sql .= "INSERT INTO $Id VALUES ('5E','Normal class','50.000','5b');";
	$sql .= "INSERT INTO $Id VALUES ('6E','Normal class','50.000','6b');";
	$sql .= "INSERT INTO $Id VALUES ('7E','Normal class','50.000','7b');";
	$sql .= "INSERT INTO $Id VALUES ('8E','Normal class','50.000','8b');";
	$sql .= "INSERT INTO $Id VALUES ('9E','Normal class','50.000','9b');";
	$sql .= "INSERT INTO $Id VALUES ('10E','Normal class','50.000','10b');";
	$sql .= "INSERT INTO $Id VALUES ('11E','Normal class','50.000','11b');";
	$sql .= "INSERT INTO $Id VALUES ('12E','Normal class','50.000','12b');";
	$sql .= "INSERT INTO $Id VALUES ('13E','Normal class','50.000','13b');";
	$sql .= "INSERT INTO $Id VALUES ('14E','Normal class','50.000','14b');";
	$sql .= "INSERT INTO $Id VALUES ('15E','Normal class','50.000','15b');";
	$sql .= "INSERT INTO $Id VALUES ('16E','Normal class','50.000','16b');";
	$sql .= "INSERT INTO $Id VALUES ('17E','Normal class','50.000','17b');";
	$sql .= "INSERT INTO $Id VALUES ('18E','Normal class','50.000','18b');";
	$sql .= "INSERT INTO $Id VALUES ('19E','Normal class','50.000','19b');";

	$sql .= "INSERT INTO $Id VALUES ('4F','Normal class','50.000','4b');";
	$sql .= "INSERT INTO $Id VALUES ('5F','Normal class','50.000','5b');";
	$sql .= "INSERT INTO $Id VALUES ('6F','Normal class','50.000','6b');";
	$sql .= "INSERT INTO $Id VALUES ('7F','Normal class','50.000','7b');";
	$sql .= "INSERT INTO $Id VALUES ('8F','Normal class','50.000','8b');";
	$sql .= "INSERT INTO $Id VALUES ('9F','Normal class','50.000','9b');";
	$sql .= "INSERT INTO $Id VALUES ('10F','Normal class','50.000','10b');";
	$sql .= "INSERT INTO $Id VALUES ('11F','Normal class','50.000','11b');";
	$sql .= "INSERT INTO $Id VALUES ('12F','Normal class','50.000','12b');";
	$sql .= "INSERT INTO $Id VALUES ('13F','Normal class','50.000','13b');";
	$sql .= "INSERT INTO $Id VALUES ('14F','Normal class','50.000','14b');";
	$sql .= "INSERT INTO $Id VALUES ('15F','Normal class','50.000','15b');";
	$sql .= "INSERT INTO $Id VALUES ('16F','Normal class','50.000','16b');";
	$sql .= "INSERT INTO $Id VALUES ('17F','Normal class','50.000','17b');";
	$sql .= "INSERT INTO $Id VALUES ('18F','Normal class','50.000','18b');";
	$sql .= "INSERT INTO $Id VALUES ('19F','Normal class','50.000','19b');";

	$sql .= "INSERT INTO $Id VALUES ('20A','Normal class','50.000','20a');";
	$sql .= "INSERT INTO $Id VALUES ('20B','Normal class','50.000','20a');";
	$sql .= "INSERT INTO $Id VALUES ('20C','Normal class','50.000','20a');";
	$sql .= "INSERT INTO $Id VALUES ('20D','Normal class','50.000','20b');";
	$sql .= "INSERT INTO $Id VALUES ('20E','Normal class','50.000','20b');";
	$sql .= "INSERT INTO $Id VALUES ('20F','Normal class','50.000','20b');";
//insert $Id
if (mysqli_multi_query($conn, $sql)) {
   	 echo "New records created successfully";
	} else {
    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	mysqli_close($conn);
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

		<!-- Bootstrap core CSS -->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
		  
			
			<?php if ($isOK) { ?>
			<div class="alert alert-success">
				flight added successfully. <br>
				Please <a href="addFlight.php">click here</a> to add more.
				Click <a href="flightList.php">here</a> to go back to flightList.
			</div>
			<?php } else {?>
			<div class="alert alert-danger">
				Failed to add flight.
			</div>
			<?php } ?>
		  
		</div>
	</body>
</html>