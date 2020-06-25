<?php
	//including the database connection file
	include("connectDB.php");
	//getting id of the data from url
	$guestUsername = $_GET['guestUsername'];
	//deleting the row from table
	
	$sql = "DELETE FROM guestacc WHERE guestUsername='$guestUsername';"; 
	//redirecting to the display page (flightList.php in our case)
	if (mysqli_query($conn, $sql)) {
   	 echo "Delete successfully ";
   	 echo $guestUsername;
	} else {
    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	header('Location:CusList.php')

?>