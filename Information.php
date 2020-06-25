<!DOCTYPE html>
<html>
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		
		<!-- fontawesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		
		<!-- CSS connect -->
		<link rel="stylesheet" type="text/css" href="CSS/styleInformation.css">
		<style type="text/css">
			u{
				cursor: pointer;
			}
		</style>

		<title>Information</title>
	
	</head>
	<body>
		<!-- header -->
		<div id="header">
				<a href="Homepage.php" class="logo"><img src="TDT_logo.png" alt="logo" href="#" width="100px" height="50px"></a>
				<div class="menu-toggle"></div>
				<nav>
					<ul>
						<li><a href="Homepage.php" >Trang chủ<i class="fas fa-home" style='font-size:14px; margin-left:10px;'></i></a></li>
						<li><a href="DatChuyenbay.php" class="active">Chuyến bay<i class="fas fa-plane" style='font-size:14px; margin-left:10px;'></i></a></li>
						<li><a href="Tintuc.php" >Tin tức<i class="fas fa-newspaper" style='font-size:14px; margin-left:10px;'></i></a></li>
						<li><a href="Dichvu.php" >Dịch vụ<i class="fas fa-concierge-bell" style='font-size:14px; margin-left:10px;'></i></a></li>
						<li><a href="Vechungtoi.php" >Về chúng tôi<i class="fab fa-avianex" style='font-size:14px; margin-left:10px;'></i></a></li>
						<li><a href="Lienhe.php" >Liên hệ<i class="fas fa-phone-square" style='font-size:14px; margin-left:10px;'></i></a></li>
						<?php
						if (!isset($_COOKIE['user']))
						{
						?>
							<li><a href="guestLogin.php"> Login <i class='fas fa-user' style='font-size:14px; margin-left:10px;'></i></a></li>
						<?php
						}
						else{
						?>
						<li><a href="Thongtincanhan.php"> <?php echo $_COOKIE['user'];?><i class='fas fa-user' style='font-size:14px; margin-left:10px;'></i></a></li>
						<?php
							}
						?>
					</ul>
				</nav>
				<div class="clearfix"></div>
			<!-- </header> -->
			<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
			<script type="text/javascript">
				$(document).ready(function(){
					$('.menu-toggle').click(function(){
						$('.menu-toggle').toggleClass('active')
						$('nav').toggleClass('active')
					})	
				})
			</script>
		</div>
		<!-- /header -->

		<!-- content -->
		<div id="content" class="container">
			<div class="verify">
				<div class="row" >
					<div class="col" id="pointer1"><i class="fas fa-plane"></i><p>Flight</p></div>
					<!--<div class="col" id="pointer2"><i class="fas fa-box-open"></i><p>Package</p></div>-->
					<div class="col" id="pointer3"><i class="fas fa-couch"></i><p>Seat</p></div>
					<div class="col" id="pointer4"><i class="far fa-file-alt"></i><p>Information</p></div>
					<div class="col" id="pointer5"><i class="fas fa-user-check"></i><p>Verify</p></div>
				</div>
			</div>
			
			<div class="noidung1">
				<h1><b>Thông tin đã chọn</b></h1>
			</div>
			
				
		
		<form action="setcookie3.php" method="post">	
			<div style="padding-top: 10px;">
				<div class="card" >
					<div class="card-header" style="background: #6F5987; color:#B08DD6; ">
						<b>Ticket Information:</b>
					</div>
					<div class="card-body">
						<?php 
							require_once('connectDB.php');
							$ticketseat = $_COOKIE['seat_book'];
							$sql = "SELECT * FROM seats where seatID = '$ticketseat'";

							$result = $conn->query($sql);
							$row = $result->fetch_assoc();
							
						?>
						<?php 
							require_once('connectDB.php');
							$idFlight = $_COOKIE['Id_book'];
							$sql1 = "SELECT * FROM flightList where Id_chuyenbay = '$idFlight'";

							$result1 = $conn->query($sql1);
							$row1 = $result1->fetch_assoc();
							
						?>
							<div style="text-align: center"><h4><u>Hạng:</u></h4><h2> <?= $row['properties']?></h2>
								<input type="hidden" name="properties" value="<?= $row['properties']?>">
							</div>
							<div style="float: left; width: 50%; text-align: center">
								<h4><u>From:</u></h4><h2> <?= $row1['From_chuyenbay']?></h2>
								<input type="hidden" name="From" value="<?= $row1['From_chuyenbay']?>">
								<h4><u>Time fly:</u></h4><h2 > <?= $row1['Time_fly']?></h2>
								<input type="hidden" name="Time_fly" value="<?= $row1['Time_fly']?>">
								<h4><u>Ticket seat:</u></h4><h2 "> <?= $row['seatID']?></h2>
								<input type="hidden" name="seatID" value="<?= $row['seatID']?>">
								<h4><u>Flight ID:</u></h4><h2 > <?= $row1['Id_chuyenbay']?></h2>
								<input type="hidden" name="Id_chuyenbay" value="<?= $row1['Id_chuyenbay']?>">
							</div>
							<div style="float: right; width: 50%; text-align: center">
								<h4><u>To:</u></h4><h2> <?= $row1['To_chuyenbay']?></h2>
								<input type="hidden" name="To_chuyenbay" value="<?= $row1['To_chuyenbay']?>">
								<h4><u>Time arrive:</u></h4><h2 > <?= $row1['Time_arrive']?></h2>
								<input type="hidden" name="Time_arrive" value="<?= $row1['Time_arrive']?>">
								<h4><u>Total Price:</u></h4><h2 "> <?= $row['price']?> VND</h2>
								<input type="hidden" name="price" value="<?= $row['price']?>">
								<h4><u>Date:</u></h4><h2> <?= $row1['Date_chuyenbay']?></h2>
								<input type="hidden" name="Date_chuyenbay" value="<?= $row1['Date_chuyenbay']?>">
							</div>
							<div class="clearfix"></div>

										
					</div>
				</div>
			</div>
							
							<div style="float: left; padding-top: 20px;">
									<button type="button" class="btn btn-warning"><a href="DatCho.php" style="color:black">Previous step</a></button>
							</div>
							<div style="float: right; padding-top: 20px;">
									<button type="submit" class="btn btn-warning">Next step</button>
							</div>

							<div class="clearfix"></div>
			</form>
		<!-- /content -->
	</div>
		<!-- footer -->
		<div id="footer"  class="container" align="center" style="padding: 20px 0px 20px 0px;">
			<span class="text-muted" class="section" >©2019 Đại học Tôn Đức Thắng </span>
		</div>
		<!-- /footer -->

		
		

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	</body>
</html>