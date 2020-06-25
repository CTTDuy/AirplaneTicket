<?php
	//including the database connection file
	include("connectDB.php");
	 
	//getting id of the data from url
	$Id_chuyenbay = $_GET['Id_chuyenbay'];
	//deleting the row from table
	
	$sql = "DELETE FROM flightList WHERE Id_chuyenbay='$Id_chuyenbay';"; 
	//redirecting to the display page (flightList.php in our case)
	if (mysqli_query($conn, $sql)) {
		echo '<h1>' . "Delete successfully ".'</h1>';
		echo '<h1>' . $Id_chuyenbay.'</h1>'.'<br>';

		echo '<h3>' . "Click " . '<a href="flightList.php">'." here ".'</a>' . " to go back to flightList." . '</h3>';
		
	} else {
		echo '<h1>' . "Chuyến bay đã có người đặt rồi không hủy được.".'</h1>'.'<br>';
    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    	echo '<h3>' . "Click " . '<a href="flightList.php">'." here ".'</a>' . " to go back to flightList." . '</h3>';
	}
	//header("Location:flightList.php")


?>