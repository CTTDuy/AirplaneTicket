<?php  
	
					
		if (isset($_POST['seat_book'])) {
			require_once("connectDB.php");
				
			$seat = $_POST['seat_book'];
			$sql = "SELECT * FROM seats WHERE seatID = '$seat'";
			echo $seat;
			setcookie("seat_book", $seat, time() + 6000, "/");
			header('Location:Information.php');
		}
		else{
			header('Location:DatCho.php');
		}
				
?>