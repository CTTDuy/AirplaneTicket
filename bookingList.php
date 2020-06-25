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
 	<title>Booking List</title>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 	<!--<link rel="stylesheet" type="text/css" href="CSS/flightbooking.css">-->
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
		table{
			padding-right: 50px;
		}

	</style>
</head>
<body>

	<div class="container">
		<h2>Booking list</h2>
		<div class="button1">
			<button><a href="logout.php">Logout.</a></button>
			<button><?php echo " <a href=\"deleteAllFlight.php\" onClick=\"return confirm('Are you sure you want to delete all?')\">Delete all.</a>";?></button>
			<button><a href="addFLight.php">Add a flight</a></button>
			<button><a href="CusList.php">Customer List<a></button>
			<button><a href="flightList.php">Flight List<a></button>
		</div>
		<div class="title">
		<h4><u>Booking information:</u></h4>     
		</div>
	</div>
		<table class="table table-dark">
			<thead>
				<tr>
			 		<th>Flight ID</th>
					<th>Flight name</th>
					<th>From</th>
					<th>To</th>
					<th>Ngày bay</th>
					<th>Time fly</th>
					<th>Time arrive</th>
					<th>Ghế ngồi</th>
					<th>Thành tiền</th>
					<th>Họ</th>
					<th>Tên</th>
					<th>Birth day</th>
					<th>Address</th>
					<th>SĐT</th>
					<th>Email</th>
				</tr>
			</thead>
			<form action="" method="POST" class="form-inline"> 
				<div class="col-md-3">
					<input type="text" name="search" class='form-control' placeholder="Search by Flight ID" value="" > 
				</div>
				<div class="col-md-3 text-left">
					<button type="submit" class ="btn btn-primary mb-2">Search</button>
				</div>
			</form>
			<tbody>
			<?php 
				require_once('connectDB.php');
				$sql = "SELECT * FROM flightbooking";
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
				$sql='SELECT * FROM flightbooking LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
				//$result = mysqli_query($conn, $sql);
				if(isset($_POST['search'])){
					$searchKey = $_POST['search'];
					$sql = "SELECT * FROM flightbooking where Id_chuyenbay like '%$searchKey%'";
				}
				$result = mysqli_query($conn,$sql);

				if (!$result) {
					trigger_error('Invalid query: ' . $conn->error);
				}
				if ($number_of_results > 0) 
				{
					while ($row = $result->fetch_assoc()) 
					{
			?>
				<tr class="item">
					<td> <?= $row['Id_chuyenbay']?> 	</td>
					<td> <?= $row['Namechuyenbay']?> 	</td>
					<td> <?= $row['Fromchuyenbay']?> 	</td>
					<td> <?= $row['Tochuyenbay']?> 	</td>
					<td> <?= $row['NgayBay']?> 	</td>
					<td> <?= $row['Giobay']?> 		</td>
					<td> <?= $row['Giotoi']?> 		</td>
					<td> <?= $row['Ghengoi']?> 		</td>
					<td> <?= $row['Thanhtien']?> 		</td>
					<td> <?= $row['Ho']?> 		</td>
					<td> <?= $row['Ten']?> 		</td>
					<td> <?= $row['Bday']?> 		</td>
					<td> <?= $row['address']?> 		</td>
					<td> <?= $row['tel']?> 		</td>
					<td> <?= $row['email']?> 		</td>

					<!--quăng địa chỉ IP từ bookingList.php sang edit.php, delete.php -->
					
					
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
  echo '<button><a href="bookingList.php?page=' . $page . '" >' . $page . '</a></button> ';
}
		?>
		</div>
	
</body>
</html>
