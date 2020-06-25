<?php  
		if (isset($_POST['Id_book'])) {
			require_once("connectDB.php");
				
			$Id = $_POST['Id_book'];
			$sql = "SELECT * FROM flightList WHERE Id_chuyenbay = '$Id'";
			echo $Id;
			setcookie("Id_book", $Id, time() + 6000, "/");
			header('Location:DatCho.php');
		}
				
?>