<?php
	include 'connectDB.php';

	$sql = "DELETE FROM flightlist;";
	
	if (mysqli_multi_query($conn, $sql)) {
   	 echo "You have delete all flights.";
	} else {
    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	
	mysqli_close($conn);
	header('Location:flightList.php')
?>