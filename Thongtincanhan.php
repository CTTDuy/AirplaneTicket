<!DOCTYPE html>
<html>
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		<!--<link rel="stylesheet" type="text/css" href="styleLogin.css">-->
		<title>Thông tin cá nhân.php</title>
		
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
	/*max-height: 10000px;*/
	margin-top: 5px;
	margin-bottom: 5px;
	padding: 10px;
	position: sticky;
	width: 100%;
	/*height: 300vh;
	overflow: auto;*/
	background: white;
}

.row{
	margin: 20px auto;
}
.section{
	position: relative;
}
#footer{
	max-width: 1200px;
	max-height: 500px;
	background: black;
}

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
input[type=text], input[type=password] {
	width: 100%;
	padding: 12px 20px;
	margin: 8px 0;
	display: inline-block;
	border: 1px solid #ccc;
	box-sizing: border-box;
	border-radius: 5px 5px 5px 5px;
}
.Login-button button{

  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
form{
	border: solid;
	border-width: 3px;
	border-radius: 10px 10px 10px 10px;
	padding: 20px;
}	
		</style>
	</head>
	<body>
		<div id="header">
			<!-- <header> -->
			<a href="Homepage.php" class="logo"><img src="TDT_logo.png" alt="logo" href="#" width="100px" height="50px"></a>
			<nav>
					<ul>
						<li><a href="Homepage.php">Trang chủ<i class="fas fa-home" style='font-size:14px; margin-left:10px;'></i></a></li>
						<li><a href="DatChuyenbay.php">Chuyến bay<i class="fas fa-plane" style='font-size:14px; margin-left:10px;'></i></a></li>
						<li><a href="Tintuc.php" >Tin tức<i class="fas fa-newspaper" style='font-size:14px; margin-left:10px;'></i></a></li>
						<li><a href="Dichvu.php" >Dịch vụ<i class="fas fa-concierge-bell" style='font-size:14px; margin-left:10px;'></i></a></li>
						<li><a href="Vechungtoi.php" >Về chúng tôi<i class="fab fa-avianex" style='font-size:14px; margin-left:10px;'></i></a></li>
						<li><a href="Lienhe.php" >Liên hệ<i class="fas fa-phone-square" style='font-size:14px; margin-left:10px;'></i></a></li>
						<?php
						if (!isset($_COOKIE['user']))
						{
						?>
							<li><a href="guestLogin.php" class="active"> Login <i class='fas fa-user' style='font-size:14px; margin-left:10px;'></i></a></li>
						<?php
						}
						else{
						?>
						<li><a href="Thongtincanhan.php" class="active"> <?php echo $_COOKIE['user'];?><i class='fas fa-user' style='font-size:14px; margin-left:10px;'></i></a></li>
						<?php
						}
						?>
					</ul>
				</nav>
			<div class="clearfix"></div>
			<!-- </header> -->
		</div>
		<!-- Content -->
		<div id="content" class="container">
	
			<form action="/action_page.php">
				<h5 style="text-align: center;">Thông tin cá nhân</h5>
				
				<div class="form-group">
					<label for="id">Tên đăng nhập:</label>
					<input class="form-control" id="id"  value="<?php echo $_COOKIE['user']; ?>" readonly>
				</div>
				 <?php 
					require_once('connectDB.php');
					$id = $_COOKIE['user'];
					$sql = "SELECT * FROM guestacc where guestUsername = '$id'";

					$result = $conn->query($sql);
					$row = $result->fetch_assoc();
					
				?>
				<div class="form-group">
					<label for="pwd">Họ:</label>
					<input type="" class="form-control" id="pwd" value="<?php echo $row['Firstname']; ?>" readonly>
				</div>
				<div class="form-group">
					<label for="pwd">Tên:</label>
					<input type="" class="form-control" id="pwd" value="<?php echo $row['Lastname']; ?>" readonly>
				</div>
				<div class="form-group">
					<label for="pwd">Ngày sinh:</label>
					<input type="" class="form-control" id="pwd" value="<?php echo $row['Bday']; ?>" readonly>
				</div>
				<div class="form-group">
					<label for="pwd">Địa chỉ:</label>
					<input type="" class="form-control" id="pwd" value="<?php echo $row['Address']; ?>" readonly>
				</div>
				<div class="form-group">
					<label for="pwd">Điện thoại:</label>
					<input type="" class="form-control" id="pwd" value="<?php echo $row['Tel']; ?>" readonly>
				</div>
				<div class="form-group">
					<label for="pwd">Email:</label>
					<input type="" class="form-control" id="pwd" value="<?php echo $row['Email']; ?>" readonly>
				</div>
				<button type="button" class="btn btn-danger"><a href="deletecookie.php" style="text-decoration: none; color: white;">Logout</a></button>
			</form>
				
		</div>
		<!-- Footer -->

		<div id="footer"  class="container" align="center" style="padding: 20px 0px 20px 0px;">
			<span class="text-muted" class="section" >©2019 Đại học Tôn Đức Thắng </span>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	</body>
</html>