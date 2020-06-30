<?php
	include 'connectDB.php';

	$sql = "DELETE * FROM guestacc;";
	
	if (mysqli_multi_query($conn, $sql)) {
   	 echo "You have delete all customer.";
	} else {
    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	
	mysqli_close($conn);
	header('Location:CusList.php')
?>