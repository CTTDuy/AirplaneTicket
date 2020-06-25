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
		<style type="text/css">
			body
			{
				margin: 0;
				padding: 0;
				font-family: sans-serif;
				background: url(bg.jpg);
				/*cho màn background full scale*/
				-webkit-background-size: cover;  
			   	-moz-background-size: cover;  
			   	-o-background-size: cover;  
			  	background-size: cover; 
				background-attachment: fixed;
			}
			#header
			{
				position: relative;
				max-width: 1200px;
				margin: 20px auto;
				padding: 2px;
				background: #FFFFFC;
				box-sizing: border-box 20px 20px 20px 20px;
				border-radius: 4px;
				box-shadow: 0 2px 5px rgba(0,0,0,.2);
			}

			#content
			{
				position: relative;
				max-width: 1200px;
				
				margin-top: 5px;
				margin-bottom: 5px;
				padding: 10px;
				position: sticky;
				width: 100%;
				/*height: 80vh;*/
				background: white;
			}

			.section{
				position: relative;
			}
			#footer{
				max-width: 1200px;
				max-height: 500px;
				background: black;
			}
			/*chỉnh logo sang trái nav sang phải*/
			.logo
			{
				color: black;
				height: 60px;
				font-size: 36px;
				line-height: 60px;
				padding: 0 20px;
				text-align: center;
				box-sizing: border-box;
				float: left;
				font-weight: 700;
				text-decoration: none;
			}
			nav
			{
				float: right;
			}
			.clearfix
			{
				clear: both;
			}
			nav ul
			{
				margin: 0;
				padding: 0;
				display: flex;
			}
			nav ul li
			{
				list-style: none;
			}
			nav ul li a
			{
				display: block;
				margin: 10px 0;
				padding: 10px 20px;
				text-decoration: none;
				color: #262626;
			}
			nav ul li a.active{
				background-color: #262626;
				color: #fff;
				transition: 0.5s;
				background-color: pink;
			}
			/*nav ul li a.active,*/
			nav ul li a:hover{
				background: #ff8080;
				color: #fff;
				transition: 0.5s;
			}
			@media (max-width: 1200px)
			{
				header
				{
					margin: 20px;
				}
			}
			@media (max-width: 825px)
			{
				.menu-toggle
				{
					margin: 20px;
					width: 40px;
					height: 40px;
					margin: 10px;
					background: #ffe6e6;
					float: right;
					cursor: pointer;
					text-align: center;
					font-size: 30px;
					color: #ff8080;
				}
				.menu-toggle:before
				{
					content:'\f0c9';
					font-family: fontAwesome;
					line-height: 40px;
				}
				.menu-toggle.active:before
				{
					content: '\f00d';
				}
				nav
				{
					display: none;
				}
				nav.active
				{
					display: block;
					width: 100%;
				}
				nav.active ul
				{
					display: block;
				}
				nav.active ul li
				{
					margin: 0;
				}
			}


			.noidung1{
				padding-top: 30px;
				padding-bottom: 10px;
				text-align: center;
			}
			.noidung2{
				width: 100%;
				vertical-align: middle;
				text-align: center;
			}

			.seats label input[type="checkbox"]
			{
				display: none;
			}
			.seats .seats-row-vip,
			.seats .seats-row{
				padding-top: 5px;
			}
			.seats .seats-row label  span{
				position: relative;
				text-align: center;
				padding-top: 5px;
				width: 40px;
				height: 40px;
				display: inline-block;
				background: #A3D9FF;
				padding-left: 15px 30px;
				color: #555;
				text-shadow: 0 1px 4px rgba(0,0,0,.5);
				border-radius: 30px;
				font-size: 20px;
				transition: 0.5s;
				user-select: none;
			}
			.seats .seats-row-vip label  span{
				position: relative;
				text-align: center;
				padding-top: 5px;
				width: 40px;
				height: 40px;
				display: inline-block;
				background: #FCF5A9;
				padding-left: 15px 30px;
				color: #555;
				text-shadow: 0 1px 4px rgba(0,0,0,.5);
				border-radius: 30px;
				font-size: 20px;
				transition: 0.5s;
				user-select: none;
			}
			.seats .seats-row-booked label  span{
				position: relative;
				text-align: center;
				padding-top: 5px;
				width: 40px;
				height: 40px;
				display: inline-block;
				background: grey;
				padding-left: 15px 30px;
				color: #555;
				text-shadow: 0 1px 4px rgba(0,0,0,.5);
				border-radius: 30px;
				font-size: 20px;
				transition: 0.5s;
				user-select: none;
			}
			.seats-row-booked{

			}
			/*.seats label span:before{
				content: '';
				position: absolute;
				top: 0;
				left: 0;
				width: 100%;
				height: 100%;
				background: rgba(255,255,255,.1);
			}*/
			.noidung2 .seats label input[type="checkbox"]:checked ~ span
			{
				background: grey;
			}
			/*Ẩn checkbox*/

			label{
				cursor: pointer;
				margin: 0 auto;
			}
			.seats-row-vip{
				text-align: center;

			}
			.seats-row-booked,
			.seats-row-vip,
			.seats-row{
				text-align: center;
				display: inline-block;
				min-width: 100px;
				padding-right: 10px; 
				padding-left: 10px;
				
			}
			.border1{
				display: inline-block;
				padding: 10px auto;
				margin: 10px auto;
				border: solid black;
			}
			.exit-button{
				margin: 0px;
				padding-top: 5px;
				padding-bottom: 5px;
			}
			.row{
				width: 100%;
				margin: 0;
			}
			.col{
				border-radius: 20px 20px 20px 20px;
				display: inline-block;
				text-align: center;
				width: 20%;
				height: 50px;
				background: #657A77;
			}
			p{
				margin: 0;
			}
			.noidung1 h1{
				font-size: 30px;
				font-family: Open Sans;
			}
			@media(max-width: 660px){
				p{
					display: none;
				}
				.col{
				border-radius: 20px 20px 20px 20px;
				display: inline-block;
				text-align: center;
				width: 20%;
				height: 30px;
				background: #657A77;
			}
			}
			.card{
				margin-bottom: 20px;
			}
			.card:hover{
				box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
				transition: 0.3s;

			}
			.body1{
				float: left;
				margin: 20px;
			}
			.body2{
				float: right;
				margin: 20px;
			}
			.body2 button{
				border-radius: 20px 20px 20px 20px;
				padding: 10px;
				margin: 0;
				background: #FF8447;
			}
			.body2 button:hover{
				background: #E56627;
			}
			#pointer1{
				background: #9ABAB6;
			}
			#pointer2{

			}
			#pointer3{
				
			}
			#pointer4{

			}
			#pointer5{
				
			}
			hr{
				overflow: visible; /* For IE */
				height: 30px;
				border-style: solid;
				border-color: black;
				order-width: 1px 0 0 0;
				border-radius: 20px;
			}
			hr:before { /* Not really supposed to work, but does */
			display: block;
			content: "";
			height: 30px;
			margin-top: -31px;
			border-style: solid;
			border-color: black;
			border-width: 0 0 1px 0;
			border-radius: 20px;
			}

		</style>

		<title>Đặt chỗ</title>
	
	</head>
	<body>
		<!-- header -->
		<div id="header">
				<a href="Homepage.php" class="logo"><img src="imgfold/TDT_logo.png" alt="logo" href="#" width="100px" height="50px"></a>
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
			<br>
			<hr>
			<div class="noidung1">
				<h1><b>Please choose your seats</b></h1>
				<div class="seats">
					<div class="seats-row-vip">
						<label><span></span></label> <p>Business class</p>
					</div>
					<div class="seats-row">
						<label><span></span></label> <p>Normal class</p>
					</div>
					<div class="seats-row-booked">
						<label><span></span></label> <p>Booked</p>
					</div>
				</div>

			</div>
			<form action="setcookie2.php" method="POST">
				<div class="noidung2">
					<div class="border1">
						
						<div class="exit-button">
							<button type="button" class="btn btn-success" style="float: right;">Exit</button>
							<button type="button" class="btn btn-success" style="float: left;">Exit</button>
							<div class="clearfix"></div>
						</div>
						<div class="seats">
							<div class="seats-row-vip">
							<?php
								require_once('connectDB.php');
								 $idghe = $_COOKIE['Id_book']; 
								$sql = "SELECT * FROM $idghe where row ='1a'";
								$result = $conn->query($sql);
								if (!$result) {
									trigger_error('Invalid query: ' . $conn->error);
								}
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
									//echo $_COOKIE['Id_book'];
									if(($row['properties']) == 'Booked'){
							?>		
							<label><input type="checkbox" id="<?= $row['seatID']?>"><span style="background-color: grey"><?= $row['seatID']?></span></label>
							<?php }
							else{
								?>
							<label><input type="checkbox" id="<?= $row['seatID']?>" name="seat_book" value="<?= $row['seatID']?>"><span><?= $row['seatID']?></span></label>
								<?php
							}
									}	
								}	
							?>
							</div>
							<div class="seats-row-vip">
							<?php 
								require_once('connectDB.php');
								 $idghe = $_COOKIE['Id_book']; 
								$sql = "SELECT * FROM $idghe where row ='1b'";

								$result = $conn->query($sql);
								if (!$result) {
									trigger_error('Invalid query: ' . $conn->error);
								}
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
									//echo $row['properties'];
									if(($row['properties']) == 'Booked'){
							?>		
							<label><input type="checkbox" id="<?= $row['seatID']?>"><span style="background-color: grey"><?= $row['seatID']?></span></label>
							<?php }
							else{
								?>
							<label><input type="checkbox" id="<?= $row['seatID']?>" name="seat_book" value="<?= $row['seatID']?>"><span><?= $row['seatID']?></span></label>
								<?php
							}
									}	
								}	
							?>
							</div>
						</div>

						
						<div class="seats">
							<div class="seats-row-vip">
							<?php 
								require_once('connectDB.php');
								 $idghe = $_COOKIE['Id_book']; 
								$sql = "SELECT * FROM $idghe where row ='2a'";

								$result = $conn->query($sql);
								if (!$result) {
									trigger_error('Invalid query: ' . $conn->error);
								}
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
									//echo $row['properties'];
									if(($row['properties']) == 'Booked'){
							?>		
							<label><input type="checkbox" id="<?= $row['seatID']?>"><span style="background-color: grey"><?= $row['seatID']?></span></label>
							<?php }
							else{
								?>
							<label><input type="checkbox" id="<?= $row['seatID']?>" name="seat_book" value="<?= $row['seatID']?>"><span><?= $row['seatID']?></span></label>
								<?php
							}
									}	
								}	
							?>
							</div>
							<div class="seats-row-vip">
							<?php 
								require_once('connectDB.php');
								 $idghe = $_COOKIE['Id_book']; 
								$sql = "SELECT * FROM $idghe where row ='2b'";
								
								$result = $conn->query($sql);
								if (!$result) {
									trigger_error('Invalid query: ' . $conn->error);
								}
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
									//echo $row['properties'];
									if(($row['properties']) == 'Booked'){
							?>		
							<label><input type="checkbox" id="<?= $row['seatID']?>"><span style="background-color: grey"><?= $row['seatID']?></span></label>
							<?php }
							else{
								?>
							<label><input type="checkbox" id="<?= $row['seatID']?>" name="seat_book" value="<?= $row['seatID']?>"><span><?= $row['seatID']?></span></label>
								<?php
							}
									}	
								}	
							?>
							</div>
						</div>
							
						<div class="seats" style="padding-bottom: 20px">
							<div class="seats-row-vip">
							<?php 
								require_once('connectDB.php');
								 $idghe = $_COOKIE['Id_book']; 
								$sql = "SELECT * FROM $idghe where row ='3a'";

								$result = $conn->query($sql);
								if (!$result) {
									trigger_error('Invalid query: ' . $conn->error);
								}
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
									//echo $row['properties'];
									if(($row['properties']) == 'Booked'){
							?>		
							<label><input type="checkbox" id="<?= $row['seatID']?>"><span style="background-color: grey"><?= $row['seatID']?></span></label>
							<?php }
							else{
								?>
							<label><input type="checkbox" id="<?= $row['seatID']?>" name="seat_book" value="<?= $row['seatID']?>"><span><?= $row['seatID']?></span></label>
								<?php
							}
									}	
								}	
							?>
							</div>
							<div class="seats-row-vip">
							<?php 
								require_once('connectDB.php');
								 $idghe = $_COOKIE['Id_book']; 
								$sql = "SELECT * FROM $idghe where row ='3b'";
								
								$result = $conn->query($sql);
								if (!$result) {
									trigger_error('Invalid query: ' . $conn->error);
								}
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
									//echo $row['properties'];
									if(($row['properties']) == 'Booked'){
							?>		
							<label><input type="checkbox" id="<?= $row['seatID']?>"><span style="background-color: grey"><?= $row['seatID']?></span></label>
							<?php }
							else{
								?>
							<label><input type="checkbox" id="<?= $row['seatID']?>" name="seat_book" value="<?= $row['seatID']?>"><span><?= $row['seatID']?></span></label>
								<?php
							}
									}	
								}	
							?>
							</div>
							
						</div>
						<div class="exit-button">
							<button type="button" class="btn btn-danger" style="float: right;">Exit</button>
							<button type="button" class="btn btn-danger" style="float: left;">Exit</button>
							<div class="clearfix"></div>
						</div>
						<div class="seats">
							<div class="seats-row">
							<?php 
								require_once('connectDB.php');
								 $idghe = $_COOKIE['Id_book']; 
								$sql = "SELECT * FROM $idghe where row ='4a'";

								$result = $conn->query($sql);
								if (!$result) {
									trigger_error('Invalid query: ' . $conn->error);
								}
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
									//echo $row['properties'];
									if(($row['properties']) == 'Booked'){
							?>		
							<label><input type="checkbox" id="<?= $row['seatID']?>"><span style="background-color: grey"><?= $row['seatID']?></span></label>
							<?php }
							else{
								?>
							<label><input type="checkbox" id="<?= $row['seatID']?>" name="seat_book" value="<?= $row['seatID']?>"><span><?= $row['seatID']?></span></label>
								<?php
							}
									}	
								}	
							?>
							</div>
							<div class="seats-row">
							<?php 
								require_once('connectDB.php');
								 $idghe = $_COOKIE['Id_book']; 
								$sql = "SELECT * FROM $idghe where row ='4b'";
								
								$result = $conn->query($sql);
								if (!$result) {
									trigger_error('Invalid query: ' . $conn->error);
								}
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
									//echo $row['properties'];
									if(($row['properties']) == 'Booked'){
							?>		
							<label><input type="checkbox" id="<?= $row['seatID']?>"><span style="background-color: grey"><?= $row['seatID']?></span></label>
							<?php }
							else{
								?>
							<label><input type="checkbox" id="<?= $row['seatID']?>" name="seat_book" value="<?= $row['seatID']?>"><span><?= $row['seatID']?></span></label>
								<?php
							}
									}	
								}	
							?>
							</div>
								
						</div>
						
						<div class="seats">
							<div class="seats-row">
							<?php 
								require_once('connectDB.php');
								 $idghe = $_COOKIE['Id_book']; 
								$sql = "SELECT * FROM $idghe where row ='5a'";

								$result = $conn->query($sql);
								if (!$result) {
									trigger_error('Invalid query: ' . $conn->error);
								}
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
									//echo $row['properties'];
									if(($row['properties']) == 'Booked'){
							?>		
							<label><input type="checkbox" id="<?= $row['seatID']?>"><span style="background-color: grey"><?= $row['seatID']?></span></label>
							<?php }
							else{
								?>
							<label><input type="checkbox" id="<?= $row['seatID']?>" name="seat_book" value="<?= $row['seatID']?>"><span><?= $row['seatID']?></span></label>
								<?php
							}
									}	
								}	
							?>
							</div>
							<div class="seats-row">
							<?php 
								require_once('connectDB.php');
								 $idghe = $_COOKIE['Id_book']; 
								$sql = "SELECT * FROM $idghe where row ='5b'";
								
								$result = $conn->query($sql);
								if (!$result) {
									trigger_error('Invalid query: ' . $conn->error);
								}
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
									//echo $row['properties'];
									if(($row['properties']) == 'Booked'){
							?>		
							<label><input type="checkbox" id="<?= $row['seatID']?>"><span style="background-color: grey"><?= $row['seatID']?></span></label>
							<?php }
							else{
								?>
							<label><input type="checkbox" id="<?= $row['seatID']?>" name="seat_book" value="<?= $row['seatID']?>"><span><?= $row['seatID']?></span></label>
								<?php
							}
									}	
								}	
							?>
							</div>
							
						</div>
						
						<div class="seats">
							<div class="seats-row">
							<?php 
								require_once('connectDB.php');
								 $idghe = $_COOKIE['Id_book']; 
								$sql = "SELECT * FROM $idghe where row ='6a'";

								$result = $conn->query($sql);
								if (!$result) {
									trigger_error('Invalid query: ' . $conn->error);
								}
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
									//echo $row['properties'];
									if(($row['properties']) == 'Booked'){
							?>		
							<label><input type="checkbox" id="<?= $row['seatID']?>"><span style="background-color: grey"><?= $row['seatID']?></span></label>
							<?php }
							else{
								?>
							<label><input type="checkbox" id="<?= $row['seatID']?>" name="seat_book" value="<?= $row['seatID']?>"><span><?= $row['seatID']?></span></label>
								<?php
							}
									}	
								}	
							?>
							</div>
							<div class="seats-row">
							<?php 
								require_once('connectDB.php');
								 $idghe = $_COOKIE['Id_book']; 
								$sql = "SELECT * FROM $idghe where row ='6b'";
								
								$result = $conn->query($sql);
								if (!$result) {
									trigger_error('Invalid query: ' . $conn->error);
								}
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
									//echo $row['properties'];
									if(($row['properties']) == 'Booked'){
							?>		
							<label><input type="checkbox" id="<?= $row['seatID']?>"><span style="background-color: grey"><?= $row['seatID']?></span></label>
							<?php }
							else{
								?>
							<label><input type="checkbox" id="<?= $row['seatID']?>" name="seat_book" value="<?= $row['seatID']?>"><span><?= $row['seatID']?></span></label>
								<?php
							}
									}	
								}	
							?>
							</div>
							
						</div>
						
						<div class="seats">
							<div class="seats-row">
							<?php 
								require_once('connectDB.php');
								 $idghe = $_COOKIE['Id_book']; 
								$sql = "SELECT * FROM $idghe where row ='7a'";

								$result = $conn->query($sql);
								if (!$result) {
									trigger_error('Invalid query: ' . $conn->error);
								}
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
									//echo $row['properties'];
									if(($row['properties']) == 'Booked'){
							?>		
							<label><input type="checkbox" id="<?= $row['seatID']?>"><span style="background-color: grey"><?= $row['seatID']?></span></label>
							<?php }
							else{
								?>
							<label><input type="checkbox" id="<?= $row['seatID']?>" name="seat_book" value="<?= $row['seatID']?>"><span><?= $row['seatID']?></span></label>
								<?php
							}
									}	
								}	
							?>
							</div>
							<div class="seats-row">
							<?php 
								require_once('connectDB.php');
								 $idghe = $_COOKIE['Id_book']; 
								$sql = "SELECT * FROM $idghe where row ='7b'";
								
								$result = $conn->query($sql);
								if (!$result) {
									trigger_error('Invalid query: ' . $conn->error);
								}
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
									//echo $row['properties'];
									if(($row['properties']) == 'Booked'){
							?>		
							<label><input type="checkbox" id="<?= $row['seatID']?>"><span style="background-color: grey"><?= $row['seatID']?></span></label>
							<?php }
							else{
								?>
							<label><input type="checkbox" id="<?= $row['seatID']?>" name="seat_book" value="<?= $row['seatID']?>"><span><?= $row['seatID']?></span></label>
								<?php
							}
									}	
								}	
							?>
							</div>
							
						</div>
						
						<div class="seats">
							<div class="seats-row">
							<?php 
								require_once('connectDB.php');
								 $idghe = $_COOKIE['Id_book']; 
								$sql = "SELECT * FROM $idghe where row ='8a'";

								$result = $conn->query($sql);
								if (!$result) {
									trigger_error('Invalid query: ' . $conn->error);
								}
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
									//echo $row['properties'];
									if(($row['properties']) == 'Booked'){
							?>		
							<label><input type="checkbox" id="<?= $row['seatID']?>"><span style="background-color: grey"><?= $row['seatID']?></span></label>
							<?php }
							else{
								?>
							<label><input type="checkbox" id="<?= $row['seatID']?>" name="seat_book" value="<?= $row['seatID']?>"><span><?= $row['seatID']?></span></label>
								<?php
							}
									}	
								}	
							?>
							</div>
							<div class="seats-row">
							<?php 
								require_once('connectDB.php');
								 $idghe = $_COOKIE['Id_book']; 
								$sql = "SELECT * FROM $idghe where row ='8b'";
								
								$result = $conn->query($sql);
								if (!$result) {
									trigger_error('Invalid query: ' . $conn->error);
								}
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
									//echo $row['properties'];
									if(($row['properties']) == 'Booked'){
							?>		
							<label><input type="checkbox" id="<?= $row['seatID']?>"><span style="background-color: grey"><?= $row['seatID']?></span></label>
							<?php }
							else{
								?>
							<label><input type="checkbox" id="<?= $row['seatID']?>" name="seat_book" value="<?= $row['seatID']?>"><span><?= $row['seatID']?></span></label>
								<?php
							}
									}	
								}	
							?>
							</div>
							
						</div>

						<div class="seats">
							<div class="seats-row">
							<?php 
								require_once('connectDB.php');
								 $idghe = $_COOKIE['Id_book']; 
								$sql = "SELECT * FROM $idghe where row ='9a'";

								$result = $conn->query($sql);
								if (!$result) {
									trigger_error('Invalid query: ' . $conn->error);
								}
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
									//echo $row['properties'];
									if(($row['properties']) == 'Booked'){
							?>		
							<label><input type="checkbox" id="<?= $row['seatID']?>"><span style="background-color: grey"><?= $row['seatID']?></span></label>
							<?php }
							else{
								?>
							<label><input type="checkbox" id="<?= $row['seatID']?>" name="seat_book" value="<?= $row['seatID']?>"><span><?= $row['seatID']?></span></label>
								<?php
							}
									}	
								}	
							?>
							</div>
							<div class="seats-row">
							<?php 
								require_once('connectDB.php');
								 $idghe = $_COOKIE['Id_book']; 
								$sql = "SELECT * FROM $idghe where row ='9b'";
								
								$result = $conn->query($sql);
								if (!$result) {
									trigger_error('Invalid query: ' . $conn->error);
								}
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
									//echo $row['properties'];
									if(($row['properties']) == 'Booked'){
							?>		
							<label><input type="checkbox" id="<?= $row['seatID']?>"><span style="background-color: grey"><?= $row['seatID']?></span></label>
							<?php }
							else{
								?>
							<label><input type="checkbox" id="<?= $row['seatID']?>" name="seat_book" value="<?= $row['seatID']?>"><span><?= $row['seatID']?></span></label>
								<?php
							}
									}	
								}	
							?>
							</div>
							
						</div>
						<div class="seats">
							<div class="seats-row">
							<?php 
								require_once('connectDB.php');
								 $idghe = $_COOKIE['Id_book']; 
								$sql = "SELECT * FROM $idghe where row ='10a'";

								$result = $conn->query($sql);
								if (!$result) {
									trigger_error('Invalid query: ' . $conn->error);
								}
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
									//echo $row['properties'];
									if(($row['properties']) == 'Booked'){
							?>		
							<label><input type="checkbox" id="<?= $row['seatID']?>"><span style="background-color: grey"><?= $row['seatID']?></span></label>
							<?php }
							else{
								?>
							<label><input type="checkbox" id="<?= $row['seatID']?>" name="seat_book" value="<?= $row['seatID']?>"><span><?= $row['seatID']?></span></label>
								<?php
							}
									}	
								}	
							?>
							</div>
							<div class="seats-row">
							<?php 
								require_once('connectDB.php');
								 $idghe = $_COOKIE['Id_book']; 
								$sql = "SELECT * FROM $idghe where row ='10b'";
								
								$result = $conn->query($sql);
								if (!$result) {
									trigger_error('Invalid query: ' . $conn->error);
								}
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
									//echo $row['properties'];
									if(($row['properties']) == 'Booked'){
							?>		
							<label><input type="checkbox" id="<?= $row['seatID']?>"><span style="background-color: grey"><?= $row['seatID']?></span></label>
							<?php }
							else{
								?>
							<label><input type="checkbox" id="<?= $row['seatID']?>" name="seat_book" value="<?= $row['seatID']?>"><span><?= $row['seatID']?></span></label>
								<?php
							}
									}	
								}	
							?>
							</div>
							
						</div>
						<div class="seats">
							<div class="seats-row">
							<?php 
								require_once('connectDB.php');
								 $idghe = $_COOKIE['Id_book']; 
								$sql = "SELECT * FROM $idghe where row ='11a'";

								$result = $conn->query($sql);
								if (!$result) {
									trigger_error('Invalid query: ' . $conn->error);
								}
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
									//echo $row['properties'];
									if(($row['properties']) == 'Booked'){
							?>		
							<label><input type="checkbox" id="<?= $row['seatID']?>"><span style="background-color: grey"><?= $row['seatID']?></span></label>
							<?php }
							else{
								?>
							<label><input type="checkbox" id="<?= $row['seatID']?>" name="seat_book" value="<?= $row['seatID']?>"><span><?= $row['seatID']?></span></label>
								<?php
							}
									}	
								}	
							?>
							</div>
							<div class="seats-row">
							<?php 
								require_once('connectDB.php');
								 $idghe = $_COOKIE['Id_book']; 
								$sql = "SELECT * FROM $idghe where row ='11b'";
								
								$result = $conn->query($sql);
								if (!$result) {
									trigger_error('Invalid query: ' . $conn->error);
								}
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
									//echo $row['properties'];
									if(($row['properties']) == 'Booked'){
							?>		
							<label><input type="checkbox" id="<?= $row['seatID']?>"><span style="background-color: grey"><?= $row['seatID']?></span></label>
							<?php }
							else{
								?>
							<label><input type="checkbox" id="<?= $row['seatID']?>" name="seat_book" value="<?= $row['seatID']?>"><span><?= $row['seatID']?></span></label>
								<?php
							}
									}	
								}	
							?>
							</div>
							
						</div>
						<div class="seats">
							<div class="seats-row">
							<?php 
								require_once('connectDB.php');
								 $idghe = $_COOKIE['Id_book']; 
								$sql = "SELECT * FROM $idghe where row ='12a'";

								$result = $conn->query($sql);
								if (!$result) {
									trigger_error('Invalid query: ' . $conn->error);
								}
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
									//echo $row['properties'];
									if(($row['properties']) == 'Booked'){
							?>		
							<label><input type="checkbox" id="<?= $row['seatID']?>"><span style="background-color: grey"><?= $row['seatID']?></span></label>
							<?php }
							else{
								?>
							<label><input type="checkbox" id="<?= $row['seatID']?>" name="seat_book" value="<?= $row['seatID']?>"><span><?= $row['seatID']?></span></label>
								<?php
							}
									}	
								}	
							?>
							</div>
							<div class="seats-row">
							<?php 
								require_once('connectDB.php');
								 $idghe = $_COOKIE['Id_book']; 
								$sql = "SELECT * FROM $idghe where row ='12b'";
								
								$result = $conn->query($sql);
								if (!$result) {
									trigger_error('Invalid query: ' . $conn->error);
								}
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
									//echo $row['properties'];
									if(($row['properties']) == 'Booked'){
							?>		
							<label><input type="checkbox" id="<?= $row['seatID']?>"><span style="background-color: grey"><?= $row['seatID']?></span></label>
							<?php }
							else{
								?>
							<label><input type="checkbox" id="<?= $row['seatID']?>" name="seat_book" value="<?= $row['seatID']?>"><span><?= $row['seatID']?></span></label>
								<?php
							}
									}	
								}	
							?>
							</div>
							
						</div>
						<div class="seats">
							<div class="seats-row">
							<?php 
								require_once('connectDB.php');
								 $idghe = $_COOKIE['Id_book']; 
								$sql = "SELECT * FROM $idghe where row ='13a'";

								$result = $conn->query($sql);
								if (!$result) {
									trigger_error('Invalid query: ' . $conn->error);
								}
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
									//echo $row['properties'];
									if(($row['properties']) == 'Booked'){
							?>		
							<label><input type="checkbox" id="<?= $row['seatID']?>"><span style="background-color: grey"><?= $row['seatID']?></span></label>
							<?php }
							else{
								?>
							<label><input type="checkbox" id="<?= $row['seatID']?>" name="seat_book" value="<?= $row['seatID']?>"><span><?= $row['seatID']?></span></label>
								<?php
							}
									}	
								}	
							?>
							</div>
							<div class="seats-row">
							<?php 
								require_once('connectDB.php');
								 $idghe = $_COOKIE['Id_book']; 
								$sql = "SELECT * FROM $idghe where row ='13b'";
								
								$result = $conn->query($sql);
								if (!$result) {
									trigger_error('Invalid query: ' . $conn->error);
								}
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
									//echo $row['properties'];
									if(($row['properties']) == 'Booked'){
							?>		
							<label><input type="checkbox" id="<?= $row['seatID']?>"><span style="background-color: grey"><?= $row['seatID']?></span></label>
							<?php }
							else{
								?>
							<label><input type="checkbox" id="<?= $row['seatID']?>" name="seat_book" value="<?= $row['seatID']?>"><span><?= $row['seatID']?></span></label>
								<?php
							}
									}	
								}	
							?>
							</div>
							
						</div>
						<div class="seats">
							<div class="seats-row">
							<?php 
								require_once('connectDB.php');
								 $idghe = $_COOKIE['Id_book']; 
								$sql = "SELECT * FROM $idghe where row ='14a'";

								$result = $conn->query($sql);
								if (!$result) {
									trigger_error('Invalid query: ' . $conn->error);
								}
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
									//echo $row['properties'];
									if(($row['properties']) == 'Booked'){
							?>		
							<label><input type="checkbox" id="<?= $row['seatID']?>"><span style="background-color: grey"><?= $row['seatID']?></span></label>
							<?php }
							else{
								?>
							<label><input type="checkbox" id="<?= $row['seatID']?>" name="seat_book" value="<?= $row['seatID']?>"><span><?= $row['seatID']?></span></label>
								<?php
							}
									}	
								}	
							?>
							</div>
							<div class="seats-row">
							<?php 
								require_once('connectDB.php');
								 $idghe = $_COOKIE['Id_book']; 
								$sql = "SELECT * FROM $idghe where row ='14b'";
								
								$result = $conn->query($sql);
								if (!$result) {
									trigger_error('Invalid query: ' . $conn->error);
								}
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
									//echo $row['properties'];
									if(($row['properties']) == 'Booked'){
							?>		
							<label><input type="checkbox" id="<?= $row['seatID']?>"><span style="background-color: grey"><?= $row['seatID']?></span></label>
							<?php }
							else{
								?>
							<label><input type="checkbox" id="<?= $row['seatID']?>" name="seat_book" value="<?= $row['seatID']?>"><span><?= $row['seatID']?></span></label>
								<?php
							}
									}	
								}	
							?>
							</div>
							
						</div>
						<div class="seats">
							<div class="seats-row">
							<?php 
								require_once('connectDB.php');
								 $idghe = $_COOKIE['Id_book']; 
								$sql = "SELECT * FROM $idghe where row ='15a'";

								$result = $conn->query($sql);
								if (!$result) {
									trigger_error('Invalid query: ' . $conn->error);
								}
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
									//echo $row['properties'];
									if(($row['properties']) == 'Booked'){
							?>		
							<label><input type="checkbox" id="<?= $row['seatID']?>"><span style="background-color: grey"><?= $row['seatID']?></span></label>
							<?php }
							else{
								?>
							<label><input type="checkbox" id="<?= $row['seatID']?>" name="seat_book" value="<?= $row['seatID']?>"><span><?= $row['seatID']?></span></label>
								<?php
							}
									}	
								}	
							?>
							</div>
							<div class="seats-row">
							<?php 
								require_once('connectDB.php');
								 $idghe = $_COOKIE['Id_book']; 
								$sql = "SELECT * FROM $idghe where row ='15b'";
								
								$result = $conn->query($sql);
								if (!$result) {
									trigger_error('Invalid query: ' . $conn->error);
								}
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
									//echo $row['properties'];
									if(($row['properties']) == 'Booked'){
							?>		
							<label><input type="checkbox" id="<?= $row['seatID']?>"><span style="background-color: grey"><?= $row['seatID']?></span></label>
							<?php }
							else{
								?>
							<label><input type="checkbox" id="<?= $row['seatID']?>" name="seat_book" value="<?= $row['seatID']?>"><span><?= $row['seatID']?></span></label>
								<?php
							}
									}	
								}	
							?>
							</div>
							
						</div>
						<div class="seats">
							<div class="seats-row">
							<?php 
								require_once('connectDB.php');
								 $idghe = $_COOKIE['Id_book']; 
								$sql = "SELECT * FROM $idghe where row ='16a'";

								$result = $conn->query($sql);
								if (!$result) {
									trigger_error('Invalid query: ' . $conn->error);
								}
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
									//echo $row['properties'];
									if(($row['properties']) == 'Booked'){
							?>		
							<label><input type="checkbox" id="<?= $row['seatID']?>" name="seat_book" value="<?= $row['seatID']?>"><span><?= $row['seatID']?></span></label>
							<?php }
							else{
								?>
							<label><input type="checkbox" id="<?= $row['seatID']?>"><span><?= $row['seatID']?></span></label>
								<?php
							}
									}	
								}	
							?>
							</div>
							<div class="seats-row">
							<?php 
								require_once('connectDB.php');
								 $idghe = $_COOKIE['Id_book']; 
								$sql = "SELECT * FROM $idghe where row ='16b'";
								
								$result = $conn->query($sql);
								if (!$result) {
									trigger_error('Invalid query: ' . $conn->error);
								}
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
									//echo $row['properties'];
									if(($row['properties']) == 'Booked'){
							?>		
							<label><input type="checkbox" id="<?= $row['seatID']?>"><span style="background-color: grey"><?= $row['seatID']?></span></label>
							<?php }
							else{
								?>
							<label><input type="checkbox" id="<?= $row['seatID']?>" name="seat_book" value="<?= $row['seatID']?>"><span><?= $row['seatID']?></span></label>
								<?php
							}
									}	
								}	
							?>
							</div>
							
						</div>
						<div class="seats">
							<div class="seats-row">
							<?php 
								require_once('connectDB.php');
								 $idghe = $_COOKIE['Id_book']; 
								$sql = "SELECT * FROM $idghe where row ='17a'";

								$result = $conn->query($sql);
								if (!$result) {
									trigger_error('Invalid query: ' . $conn->error);
								}
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
									//echo $row['properties'];
									if(($row['properties']) == 'Booked'){
							?>		
							<label><input type="checkbox" id="<?= $row['seatID']?>"><span style="background-color: grey"><?= $row['seatID']?></span></label>
							<?php }
							else{
								?>
							<label><input type="checkbox" id="<?= $row['seatID']?>" name="seat_book" value="<?= $row['seatID']?>"><span><?= $row['seatID']?></span></label>
								<?php
							}
									}	
								}	
							?>
							</div>
							<div class="seats-row">
							<?php 
								require_once('connectDB.php');
								 $idghe = $_COOKIE['Id_book']; 
								$sql = "SELECT * FROM $idghe where row ='17b'";
								
								$result = $conn->query($sql);
								if (!$result) {
									trigger_error('Invalid query: ' . $conn->error);
								}
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
									//echo $row['properties'];
									if(($row['properties']) == 'Booked'){
							?>		
							<label><input type="checkbox" id="<?= $row['seatID']?>"><span style="background-color: grey"><?= $row['seatID']?></span></label>
							<?php }
							else{
								?>
							<label><input type="checkbox" id="<?= $row['seatID']?>" name="seat_book" value="<?= $row['seatID']?>"><span><?= $row['seatID']?></span></label>
								<?php
							}
									}	
								}	
							?>
							</div>
							
						</div>
						<div class="seats">
							<div class="seats-row">
							<?php 
								require_once('connectDB.php');
								 $idghe = $_COOKIE['Id_book']; 
								$sql = "SELECT * FROM $idghe where row ='18a'";

								$result = $conn->query($sql);
								if (!$result) {
									trigger_error('Invalid query: ' . $conn->error);
								}
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
									//echo $row['properties'];
									if(($row['properties']) == 'Booked'){
							?>		
							<label><input type="checkbox" id="<?= $row['seatID']?>"><span style="background-color: grey"><?= $row['seatID']?></span></label>
							<?php }
							else{
								?>
							<label><input type="checkbox" id="<?= $row['seatID']?>" name="seat_book" value="<?= $row['seatID']?>"><span><?= $row['seatID']?></span></label>
								<?php
							}
									}	
								}	
							?>
							</div>
							<div class="seats-row">
							<?php 
								require_once('connectDB.php');
								 $idghe = $_COOKIE['Id_book']; 
								$sql = "SELECT * FROM $idghe where row ='18b'";
								
								$result = $conn->query($sql);
								if (!$result) {
									trigger_error('Invalid query: ' . $conn->error);
								}
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
									//echo $row['properties'];
									if(($row['properties']) == 'Booked'){
							?>		
							<label><input type="checkbox" id="<?= $row['seatID']?>"><span style="background-color: grey"><?= $row['seatID']?></span></label>
							<?php }
							else{
								?>
							<label><input type="checkbox" id="<?= $row['seatID']?>" name="seat_book" value="<?= $row['seatID']?>"><span><?= $row['seatID']?></span></label>
								<?php
							}
									}	
								}	
							?>
							</div>
							
						</div>
						<div class="seats">
							<div class="seats-row">
							<?php 
								require_once('connectDB.php');
								 $idghe = $_COOKIE['Id_book']; 
								$sql = "SELECT * FROM $idghe where row ='19a'";

								$result = $conn->query($sql);
								if (!$result) {
									trigger_error('Invalid query: ' . $conn->error);
								}
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
									//echo $row['properties'];
									if(($row['properties']) == 'Booked'){
							?>		
							<label><input type="checkbox" id="<?= $row['seatID']?>"><span style="background-color: grey"><?= $row['seatID']?></span></label>
							<?php }
							else{
								?>
							<label><input type="checkbox" id="<?= $row['seatID']?>" name="seat_book" value="<?= $row['seatID']?>"><span><?= $row['seatID']?></span></label>
								<?php
							}
									}	
								}	
							?>
							</div>
							<div class="seats-row">
							<?php 
								require_once('connectDB.php');
								 $idghe = $_COOKIE['Id_book']; 
								$sql = "SELECT * FROM $idghe where row ='19b'";
								
								$result = $conn->query($sql);
								if (!$result) {
									trigger_error('Invalid query: ' . $conn->error);
								}
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
									//echo $row['properties'];
									if(($row['properties']) == 'Booked'){
							?>		
							<label><input type="checkbox" id="<?= $row['seatID']?>"><span style="background-color: grey"><?= $row['seatID']?></span></label>
							<?php }
							else{
								?>
							<label><input type="checkbox" id="<?= $row['seatID']?>" name="seat_book" value="<?= $row['seatID']?>"><span><?= $row['seatID']?></span></label>
								<?php
							}
									}	
								}	
							?>
							</div>
							
						</div>
						<div class="seats">
							<div class="seats-row">
							<?php 
								require_once('connectDB.php');
								 $idghe = $_COOKIE['Id_book']; 
								$sql = "SELECT * FROM $idghe where row ='20a'";

								$result = $conn->query($sql);
								if (!$result) {
									trigger_error('Invalid query: ' . $conn->error);
								}
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
									//echo $row['properties'];
									if(($row['properties']) == 'Booked'){
							?>		
							<label><input type="checkbox" id="<?= $row['seatID']?>"><span style="background-color: grey"><?= $row['seatID']?></span></label>
							<?php }
							else{
								?>
							<label><input type="checkbox" id="<?= $row['seatID']?>" name="seat_book" value="<?= $row['seatID']?>"><span><?= $row['seatID']?></span></label>
								<?php
							}
									}	
								}	
							?>
							</div>
							<div class="seats-row">
							<?php 
								require_once('connectDB.php');
								 $idghe = $_COOKIE['Id_book']; 
								$sql = "SELECT * FROM $idghe where row ='20b'";
								
								$result = $conn->query($sql);
								if (!$result) {
									trigger_error('Invalid query: ' . $conn->error);
								}
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
									//echo $row['properties'];
									if(($row['properties']) == 'Booked'){
							?>		
							<label><input type="checkbox" id="<?= $row['seatID']?>"><span style="background-color: grey"><?= $row['seatID']?></span></label>
							<?php }
							else{
								?>
							<label><input type="checkbox" id="<?= $row['seatID']?>" name="seat_book" value="<?= $row['seatID']?>"><span><?= $row['seatID']?></span></label>
								<?php
							}
									}	
								}	
							?>
							</div>
							
						</div>
						<div class="exit-button">
							<button type="button" class="btn btn-success" style="float: right;">Exit</button>
							<button type="button" class="btn btn-success" style="float: left;">Exit</button>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<br>
			<hr>
			<div style="float: left; padding-top: 20px; padding-bottom: : 20px;">
					<button type="button" class="btn btn-warning"><a href="DatChuyenBay.php" style="color:black">Previous step</a></button>
			</div>
			<div style="float: right; padding-top: 20px; padding-bottom: : 20px;">
					<button type="submit" class="btn btn-warning">Next step</button>
			</div>
			</form>
			<div class="clearfix"></div>
			<br>
		<!-- /content -->
	</div>
		<!-- footer -->
		<div id="footer" align="center" class="container"style="padding: 20px 0px 20px 0px;">
			<span class="text-muted">Copyright ©2019 Đại học Tôn Đức Thắng </span>
		</div>
		<!-- /footer -->

		
		

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		
	</body>
</html>