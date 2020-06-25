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
		<link rel="stylesheet" type="text/css" href="CSS/styleVerify.css">


		<title>Verify</title>
	
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
			<form action="booking.php" method="POST">
				<div class="noidung1">
					<h1><b>Thông tin chuyến bay bạn đã chọn</b></h1>
				</div>
				<?php 
					require_once('connectDB.php');
					$seat = $_COOKIE['seat_book'];

					$sql = "SELECT * FROM seats where seatID = '$seat'";

					$result = $conn->query($sql);
					$row = $result->fetch_assoc();
					$idFlight = $_COOKIE['Id_book'];
					$sql1 = "SELECT * FROM flightList where Id_chuyenbay = '$idFlight'";

					$result1 = $conn->query($sql1);
					$row1 = $result1->fetch_assoc();
							
				?>
				<div class="">
					<label for="Id_chuyenbay">Id_chuyenbay</label>
					<input type="" class="form-control" id="Id_chuyenbay" name="Id_chuyenbay" placeholder="" value="<?= $row1['Id_chuyenbay']?>" readonly>
				</div>
				<div class="">
					<label for="Name_chuyenbay">Name_chuyenbay</label>
					<input type="" class="form-control" id="Name_chuyenbay" name="Name_chuyenbay" placeholder="" value="<?= $row1['Name_chuyenbay']?>" readonly>
				</div>
				<div class="">
					<label for="From_chuyenbay">From_chuyenbay</label>
					<input type="" class="form-control" id="From_chuyenbay" name="From_chuyenbay" placeholder="" value="<?= $row1['From_chuyenbay']?>" readonly>
				</div>
				<div class="">
					<label for="To_chuyenbay">To_chuyenbay</label>
					<input type="" class="form-control" id="To_chuyenbay" name="To_chuyenbay" placeholder="" value="<?= $row1['To_chuyenbay']?>" readonly>
				</div>
				<div class="">
					<label for="Date_chuyenbay">Date</label>
					<input type="" class="form-control" id="Date_chuyenbay" name="Date_chuyenbay" placeholder="" value="<?= $row1['Date_chuyenbay']?>" readonly>
				</div>
				<div class="">
					<label for="Time_fly">Time_fly</label>
					<input type="" class="form-control" id="Time_fly" name="Time_fly" placeholder="" value="<?= $row1['Time_fly']?>" readonly>
				</div>
				<div class="">
					<label for="Time_arrive">Time_arrive</label>
					<input type="" class="form-control" id="Time_arrive" name="Time_arrive" placeholder="" value="<?= $row1['Time_arrive']?>" readonly>
				</div>
				<div class="">
					<label for="seatID">Seat ID</label>
					<input type="" class="form-control" id="seatID" name="seatID" placeholder="" value="<?= $row['seatID']?>" readonly>
				</div>
				<div class="">
					<label for="price">Price</label>
					<input type="" class="form-control" id="price" name="price" placeholder="" value="<?= $row['price']?> VND" readonly>
				</div>
				<div class="noidung1">
					<h1><b>Vui lòng điền thông tin cá nhân</b></h1>
				</div><div style="border: solid black; border-width: 1px; padding: 10px;">
				<?php
					if(!isset($_COOKIE['user'])){
				?>
				<div class="">
					<label for="Ho">Họ</label>
					<input type="" class="form-control" id="Ho" name="Ho" placeholder="" required>
				</div>
				<div class="">
					<label for="Ten">Tên</label>
					<input type="" class="form-control" id="Ten" name="Ten" placeholder="" required>
				</div>
				<div class="">
					<label for="Bday">Ngày sinh</label>
					<input type="" class="form-control" id="Bday" name="Bday" placeholder="" required>
				</div>
				<div class="">
					<label for="Address">Địa chỉ</label>
					<input type="" class="form-control" id="Address" name="Address" placeholder="" required>
				</div>
				<div class="">
					<label for="Tel">Điện thoại</label>
					<input type="" class="form-control" id="Tel" name="Tel" placeholder="" required>
				</div>
				<div class="">
					<label for="Email">Email</label>
					<input type="Email" class="form-control" id="Email" name="Email" placeholder="" required>
				</div>
				<?php
					}
					else{
					require_once('connectDB.php');
					$id = $_COOKIE['user'];
					$sql2 = "SELECT * FROM guestacc where guestUsername = '$id'";

					$result2 = $conn->query($sql2);
					$row2 = $result2->fetch_assoc();
				?>
				<div class="">
					<label for="Ho">Họ</label>
					<input type="" class="form-control" id="Ho" name="Ho" placeholder="" value="<?= $row2['Firstname']; ?>" required>
				</div>
				<div class="">
					<label for="Ten">Tên</label>
					<input type="" class="form-control" id="Ten" name="Ten" placeholder="" value="<?= $row2['Lastname']; ?>" required>
				</div>
				<div class="">
					<label for="Bday">Ngày sinh</label>
					<input type="" class="form-control" id="Bday" name="Bday" placeholder="" value="<?= $row2['Bday']; ?>" required>
				</div>
				<div class="">
					<label for="Address">Địa chỉ</label>
					<input type="" class="form-control" id="Address" name="Address" placeholder="" value="<?= $row2['Address']; ?>" required>
				</div>
				<div class="">
					<label for="Tel">Điện thoại</label>
					<input type="" class="form-control" id="Tel" name="Tel" placeholder="" value="<?= $row2['Tel']; ?>" required>
				</div>
				<div class="">
					<label for="Email">Email</label>
					<input type="Email" class="form-control" id="Email" name="Email" placeholder="" value="<?= $row2['Email']; ?>"required>
				</div>
				</div>
				<?php
					}
				?>




				<div style="float: left; padding-top: 20px; padding-bottom: : 20px;">
						<button type="button" class="btn btn-warning"><a href="Information.php" style="color:black">Previous step</a></button>
				</div>
				<div style="float: right; padding-top: 20px;">
						<button type="submit" class="btn btn-warning">Book the ticket</button>
				</div>
			
			</form>
			<div class="clearfix"></div>
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