<!DOCTYPE html>
<html>
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		
		
		<style>
			html{
	min-width: 350px;
}
body
{
	margin: 0;
	padding: 0;
	font-family: 'Open Sans', sans-serif;
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

hr {
	height: 10px;
	border: 0;
	box-shadow: 0 10px 10px -10px #8c8b8b inset;
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
	text-align: center;
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
@media (max-width: 1200px){
	header
	{
		margin: 20px;
	}
}
@media (max-width: 650px){
	.lua-chon{
		display: none;
	}
}
@media (max-width: 825px){
	
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
.carousel-inner img {
	width: 100%;
	height: 450px;
 }
@media (max-width: 500px){
	.carousel-inner img {
	width: 100%;
	height: 246px;
 }
}

.card{
	width: 20rem;
}
#footer{
	text-align: center;
	padding: 20px 20px 20px 20px;
}
.jumbotron {
	height: 246px;
	background: url(skybg.jpg);
}

.lua-chon{
	position: relative;
	margin: 0;
	padding: 0;
	text-align: center;
	width: 100%;
	height: 50px;
	
}
.lua-chon input{
	margin: 10px auto;
	border-radius: 10px 10px 10px 10px;
}
.lua-chon select{
	margin: 10px auto;
	border-radius: 10px 10px 10px 10px;
}
.card{
	-webkit-box-shadow: 10px 10px 5px -5px rgba(196,184,196,1);
	-moz-box-shadow: 10px 10px 5px -5px rgba(196,184,196,1);
	box-shadow: 10px 10px 5px -5px rgba(196,184,196,1);
	
}
.card:hover{
	box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
	transition: 0.3s;
}
.card-body{
	background-color: #E8E8E8;
}
.btn-dark{
	min-height: 48px;
	border-radius: 10px 10px 10px 10px;
}
		</style>

		<title>Home page</title>
	</head>
	<body>

		<div id="header">
			<!-- <header> -->
				<a href="Homepage.php" class="logo"><img src="imgfold/TDT_logo.png" alt="logo" href="#" width="100px" height="50px"></a>
				<div class="menu-toggle"></div>
				<nav>
					<ul>
						<li><a href="Homepage.php" class="active">Trang chủ<i class="fas fa-home" style='font-size:14px; margin-left:10px;'></i></a></li>
						<li><a href="DatChuyenbay.php">Chuyến bay<i class="fas fa-plane" style='font-size:14px; margin-left:10px;'></i></a></li>
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
		<!-- Content -->
		<div id="content" class="container">
		
			<div class="section">
				
				<!-- Carousel -->
				<div id="demo" class="carousel slide" data-ride="carousel">

					<!-- Indicators -->
						<ul class="carousel-indicators">
							<li data-target="#demo" data-slide-to="0" class="active"></li>
							<li data-target="#demo" data-slide-to="1"></li>
					    	<li data-target="#demo" data-slide-to="2"></li>
						</ul>
					  
						<!-- The slideshow -->
						<div class="carousel-inner">
							<?php 
								require_once('connectDB.php');
								  
								$sql = "SELECT * FROM carouselhomepage where Id_carousel = 'C1'";

								$result = $conn->query($sql);
								if (!$result) {
									trigger_error('Invalid query: ' . $conn->error);
								}
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
							?>
							<div class="carousel-item active">
								<img src="<?= $row['Picture_carousel']?>" alt="carousel_picture">
								<div class="carousel-caption">
	    							<h3><?= $row['Name_carousel']?></h3>
	    							<p><?= $row['Description_carousel']?></p>
								</div>
						    </div>
						    <?php
							}}
						    ?>
						    <?php 
								require_once('connectDB.php');
								  
								$sql = "SELECT * FROM carouselhomepage where Id_carousel = 'C2'";

								$result = $conn->query($sql);
								if (!$result) {
									trigger_error('Invalid query: ' . $conn->error);
								}
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
							?>
							<div class="carousel-item">
								<img src="<?= $row['Picture_carousel']?>" alt="carousel_picture">
								<div class="carousel-caption">
	    							<h3><?= $row['Name_carousel']?></h3>
	    							<p><?= $row['Description_carousel']?></p>
								</div>
						    </div>
						    <?php
							}}
						    ?>
						    <?php 
								require_once('connectDB.php');
								  
								$sql = "SELECT * FROM carouselhomepage where Id_carousel = 'C3'";

								$result = $conn->query($sql);
								if (!$result) {
									trigger_error('Invalid query: ' . $conn->error);
								}
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
							?>
							<div class="carousel-item">
								<img src="<?= $row['Picture_carousel']?>" alt="carousel_picture">
								<div class="carousel-caption">
	    							<h3><?= $row['Name_carousel']?></h3>
	    							<p><?= $row['Description_carousel']?></p>
								</div>
						    </div>
						    <?php
							}}
						    ?>
						</div>
					  
					  <!-- Left and right controls -->
					<a class="carousel-control-prev" href="#demo" data-slide="prev">
						<span class="carousel-control-prev-icon"></span>
					</a>
					<a class="carousel-control-next" href="#demo" data-slide="next">
						<span class="carousel-control-next-icon"></span>
					</a>
				</div>  <!-- /Carousel -->

			</div>
			<hr>

			<div class="lua-chon">
				<form action="DatChuyenBay.php" method="GET" >
					<!--<select id="" onchange="" name="Numb" class="form-control-lg">
						<option value=""> -- Chọn số hành khách-- </option>
						<option value="1">1 hành khách</option>
						<option value="2">2 hành khách </option>
						<option value="3">3 hành khách</option>
						<option value="4">4 hành khách </option>
						<option value="5">5 hành khách</option>
						<option value="6">6 hành khách </option>
					</select>-->
					
					<input type="date" name="date"  id="datepicker" placeholder="Pick a date" required />

					<select id="" onchange="" name="From" class="form-control-lg" required>
						<option value=""> -- Điểm đi-- </option>
						<option value="Hà Nội">Hà Nội</option>
						<option value="Hồ Chí Minh">TP HCM</option>
						<option value="Đà Nẵng">Đà Nẵng</option>
						<option value="Đà Lạt">Đà Lạt</option>
						<option value="Thái Lan">Thái Lan</option>
						<option value="Hàn Quốc">Hàn Quốc</option>
						<option value="Nhật Bản">Nhật Bản</option>
					</select>
					<select id="" onchange="" name="To" class="form-control-lg"required>
						<option value=""> -- Điểm đi-- </option>
						<option value="Hà Nội">Hà Nội</option>
						<option value="Hồ Chí Minh">TP HCM</option>
						<option value="Đà Nẵng">Đà Nẵng</option>
						<option value="Đà Lạt">Đà Lạt</option>
						<option value="Thái Lan">Thái Lan</option>
						<option value="Hàn Quốc">Hàn Quốc</option>
						<option value="Nhật Bản">Nhật Bản</option>
					</select>
					<!--Ngày đi<input type="date" name="">
		 			<i class="far fa-calendar-alt"></i> 
					Ngày về<input type="date" name="" placeholder="Ngày về">
					<i class="far fa-calendar-alt"></i> -->
					<button type="submit" class="btn-dark">Tìm chuyến bay</button>
				</form>
			</div>
			<hr>
			<div class="section">
				<div class="jumbotron text-center">
					<div class="container" >
	     				<h1 class="jumbotron-heading">Gợi ý chuyến bay</h1>
	        			<p class="lead text-muted">Các chuyến bay</p>
	      				<p>
	          			<a href="Diemden.html" class="btn btn-primary">Địa điểm nên đến</a>

	         			
	       				</p>
	    			</div>
    			</div>
			</div>
			<hr>
			<div class="section">
				<div class="container">
				
				<div class="card-deck">
					<?php 
						require_once('connectDB.php');
						  
						$sql = "SELECT * FROM flightHomepage";

						$result = $conn->query($sql);
						if (!$result) {
							trigger_error('Invalid query: ' . $conn->error);
						}
						if ($result->num_rows > 0) {
							while ($row = $result->fetch_assoc()) {
					?>
					<!-- Hàng 1 -->
					<div class="row">
						<div class="card">
							<img src="<?= $row['Picture_chuyenbay']?>" style=" height: 175px">
							<div class="card-body"style="background-color: #F2F2EA;" >
								<h5 class="card-title"><?= $row['Name_chuyenbay']?></h5>
								<p class="card-text"><?= $row['Description']?></p>
							
		  					</div>
		  					<a href="#" type="text" name="hoten" id="hoten" class="btn btn-primary" >Đặt vé ngay</a>
						</div>
					</div>	
						<?php
							}
						}

							elseif ($result->num_rows > 3){
								while ($row = $result->fetch_assoc()) {
						?>
					<!-- Hàng 2 -->
					<div class="row">
						<div class="card">
							<img src="<?= $row['Picture_chuyenbay']?>" style=" height: 175px">
							<div class="card-body">
								<h5 class="card-title"><?= $row['Name_chuyenbay']?></h5>
								<p class="card-text"><?= $row['Description']?></p>
							
		  					</div>
		  					<a href="#" type="text" name="hoten" id="hoten" class="btn btn-primary" >Đặt vé ngay</a>
						</div>
					</div>
						<?php
							}
						}

						else{
						?>
							<div class="card">
							<img src="imgfold/null.jpg" class="card-img-top" alt="img" style=" height: 175px">
							<div class="card-body">
								<h5 class="card-title" ><label for="hoten">Title</label></h5>
								<p class="card-text">This is the content</p>
								<p> <a href="addFlight.php">Click here to add flight information</a></p>
							<a href="#" type="text" name="hoten" id="hoten" class="btn btn-primary">Đặt vé ngay</a>
		  					</div>
							</div>
						<?php
					}
					?>
					
				
				
					
				</div>

				</div>
			
			
			</div>
		</div>
		<!-- Footer -->
		<div id="footer"  class="container">

				<span class="text-muted">Copyright ©2019 Đại học Tôn Đức Thắng </span>
		</div>

		
		

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	</body>
</html>