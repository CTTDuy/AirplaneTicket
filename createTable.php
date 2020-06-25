<?php
	include 'connectDB.php';

	$sql = "CREATE TABLE flightList(
		Id_chuyenbay VARCHAR(30) NOT NULL primary key,
		Name_chuyenbay VARCHAR(30) NOT NULL,
		From_chuyenbay VARCHAR(30) NOT NULL,
		To_chuyenbay VARCHAR(30) NOT NULL,
		Date_chuyenbay DATE NOT NULL,
		Time_fly TIME NOT NULL,
		Time_arrive TIME NOT NULL,
		Picture_chuyenbay VARCHAR(300) NOT NULL,
		Description VARCHAR(300) NOT NULL
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
	include 'connectDB.php';

	$sql = "CREATE TABLE adminAcc(
		adminUsername VARCHAR(30) NOT NULL UNIQUE primary key,
		psswd VARCHAR(30) NOT NULL
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
	include 'connectDB.php';

	$sql = "CREATE TABLE guestAcc(
		guestUsername VARCHAR(30) NOT NULL UNIQUE primary key,
		psswd VARCHAR(30) NOT NULL,
		Firstname NVARCHAR(30) NOT NULL,
		Lastname NVARCHAR(30) NOT NULL,
		Bday date NOT NULL,
		Address TEXT NOT NULL,
		Tel int(10) NOT NULL,
		Email VARCHAR(30) NOT NULL
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
	include 'connectDB.php';

	$sql = "CREATE TABLE flightBooking(
		idBooking VARCHAR(30) NOT NULL primary key,
		guestUsername VARCHAR(30) NOT NULL,
		Id_chuyenbay VARCHAR(30) NOT NULL,
		Ngaydatve date NOT NULL,
		Soluong int NOT NULL,
		Dongia int NOT NULL,
		Thanhtien int NOT NULL,
		CONSTRAINT fk_guestUsername FOREIGN KEY (guestUsername) REFERENCES guestAcc (guestUsername),
		CONSTRAINT fk_Id_chuyenbay FOREIGN KEY (Id_chuyenbay) REFERENCES flightList (Id_chuyenbay)
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
