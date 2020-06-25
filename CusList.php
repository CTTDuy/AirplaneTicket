<?php
	session_start();
	if (!isset($_SESSION['isLoggedIn']) || $_SESSION['isLoggedIn'] != true)
	{
		header("Location: login.php");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
 	<title>Customer list</title>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 	<!--<link rel="stylesheet" type="text/css" href="CSS/flightList.css">-->
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 	<style>
	 	h2{
		font-size: 50px;
		text-align: center;
		}
		.button1{
			text-align: center;
			width: 100%;
			height: 20%;
		}
		.title{
			text-align: center;
			width: 100%;
		}
		.clearfix{
			clear: both;
		}
		.button1 button:hover{
			background-color: grey;
		}
		
		.button1 button{
			text-align: center;
			margin: 0px;
			padding: 0px;
			border-radius: 8px;
			background-color: #ff5050;
			width: 20%;
			height: 60px;

		}	
		.button1 button a{
			text-decoration: none;
			color: black;
		}
		hr{
			color: black;
		}
		.button2{
			text-align: center;
		}
		.button2 button{
			margin: 5px;
			padding: 5px;
			border-radius: 8px;
		}	
		.button2 button:hover{
			background-color: grey;
		}
		.button2 button a{
			text-decoration: none;
			color: black;
		}

	</style>
</head>
<body>

	<div class="container">
		<h2>Customer list</h2>
		<div class="button1">
			<button><a href="logout.php">Logout.</a></button>
			<button><?php echo " <a href=\"deleteAllCus.php\" onClick=\"return confirm('Are you sure you want to delete all?')\">Delete all.</a>";?></button>
			<button><a href="addCus.php">Add Customer</a></button>
			<button><a href="FlightList.php">Flight List<a></button> 
			<button><a href="bookingList.php">Booking List<a></button>   
		</div>
		<div class="title">
		<h4><u>Customer information:</u></h4>     
		</div>
		<table class="table table-dark">
			<thead>
				<tr>
			 		<th>Guest ID</th>
					<th>Password</th>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>Bday</th>
					<th>Address</th>
					<th>Tel</th>
					<th>Email</th>
					<th>Update</th>
				</tr>
			</thead>
			<tbody>
			<?php 
				require_once('connectDB.php');
				$sql = "SELECT * FROM guestacc";
				$result = $conn->query($sql);
				$results_per_page = 7;
				$number_of_results = mysqli_num_rows($result);
				$number_of_pages = ceil($number_of_results/$results_per_page);
				if (!isset($_GET['page'])) {
					$page = 1;
				} else {
					$page = $_GET['page'];
				}
				$this_page_first_result = ($page-1)*$results_per_page;
				$sql='SELECT * FROM guestacc LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
				$result = mysqli_query($conn, $sql);

				if (!$result) {
					trigger_error('Invalid query: ' . $conn->error);
				}
				if ($number_of_results > 0) 
				{
					while ($row = $result->fetch_assoc()) 
					{
			?>
				<tr class="item">
					<td> <?= $row['guestUsername']?> 	</td>
					<td> <?= $row['psswd']?> 	</td>
					<td> <?= $row['Firstname']?> 	</td>
					<td> <?= $row['Lastname']?> 	</td>
					<td> <?= $row['Bday']?> 	</td>
					<td> <?= $row['Address']?> 		</td>
					<td> <?= $row['Tel']?> 		</td>
					<td> <?= $row['Email']?> 		</td>
					<!--quăng địa chỉ IP từ CusList.php sang edit.php, delete.php -->
					<?php echo "<td><a href=\"modifyCus.php?guestUsername=$row[guestUsername]\">Edit</a> | <a href=\"delete_Cus.php?guestUsername=$row[guestUsername]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
					?>
					
				</tr>
			<?php
					}
				}
				else {
			?>
				<tr class="item">
					<td>Null</td>
					<td>Null</td>
					<td>Null</td>
					<td>Null</td>
					<td>Null</td>
					<td>Null</td>
					<td>Null</td>
					<td>Null</td>
					<td>Null</td>
				</tr>
			<?php	
				}
			?>
		    </tbody>
		</table>
		<div class="button2">
		<?php
		for ($page=1;$page<=$number_of_pages;$page++) {
  echo '<button><a href="CusList.php?page=' . $page . '" >' . $page . '</a></button> ';
}
		?>
		</div>
	</div>
</body>
</html>
