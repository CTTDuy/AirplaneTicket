<?php  
	if (isset($_COOKIE['seat_book']) && isset($_COOKIE['Id_book']) ) {
		header('Location: Verify.php');
	}
	else{
		header('Location:Homepage.php');
	}
				
?>