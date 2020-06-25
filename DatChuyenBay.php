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
/*.seats label span:before{
	content: '';
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: rgba(255,255,255,.1);
}*/
/*Ẩn checkbox*/

label{
	cursor: pointer;
	margin: 0 auto;
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
		</style>


		<title>Đặt chuyến bay</title>
	
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
			<?php

				require_once('connectDB.php');
				if(isset($_GET['From'])){
					$Fr = $_GET['From'];
				}
				if(isset($_GET['To'])){
					$To = $_GET['To'];
				}
				if(isset($_GET['date'])){
					$date = $_GET['date'];
				}

			?>
			<div class="noidung1">
				<?php
					if(isset($_GET['date']) && isset($_GET['To']) && isset($_GET['From']) ){
					//if(isset($_GET['date'])){
						$sql = "SELECT * FROM flightList where From_chuyenbay = '$Fr'  AND To_chuyenbay = '$To' AND Date_chuyenbay LIKE '$date'";
						$sql1 = "SELECT * FROM seats";
						$result1 = $conn->query($sql1);
						$number_of_results1 = mysqli_num_rows($result1);

						$result = $conn->query($sql);
						$number_of_results = mysqli_num_rows($result);
						$number_of_results = mysqli_num_rows($result);
					if ($number_of_results > 0) {
				?>
				<h1><b>Flights from <?php echo $Fr?> to <?php  echo $To?> </b></h1>
				<h3 type="date"><b>ngày <?php  echo $date?></b></h3>
				<h3><u>Chuyến bay một chiều</u></h3>
				<?php
					while (($row = $result->fetch_assoc()) && ($row1 = $result1->fetch_assoc())) 
					{
				?>
			
				<div class="card">
					
					<div class="card-header">
						<h5><b><?= $row['From_chuyenbay']?> to <?= $row['To_chuyenbay']?> (<?= $row['Date_chuyenbay']?>)</b></h5>	
					</div>
					<div class="card-body">
						<div class="body1">
							<blockquote class="blockquote mb-0">
							<p>Nơi đi:</p>
							<footer class="blockquote-footer"><?= $row['Time_fly']?> <br><cite title="Source Title"><?= $row['From_chuyenbay']?></cite></footer>
							</blockquote>
						</div>
						
						<div class="body1">
							<blockquote class="blockquote mb-0">
							<p>Nơi đến:</p>
							<footer class="blockquote-footer"><?= $row['Time_arrive']?> <br><cite title="Source Title"><?= $row['To_chuyenbay']?></cite></footer>
							</blockquote>
						</div>
						<form action="setcookie.php" method="POST"><input type="hidden" id="<?= $row['Id_chuyenbay']?>" name="Id_book" value="<?= $row['Id_chuyenbay']?>"><div class="body2"><button>Chọn chuyến bay</button></div></form>
						<div class="body2">
							<blockquote class="blockquote mb-0">
							<p>Price:</p>
							<footer class="blockquote-footer"><?= $row1['price']?> VND.<br><cite title="Source Title"><u>Lưu ý:</u> Giá vé có thể thay đổi</cite></footer>
							</blockquote>
						</div>

					</div>
					<div class="clearfix"></div>
				</div>
				<?php
			}
			}
			else{
				?>
				<h1>Không có chuyến bay vào ngày <?php echo $date?></h1>
				<?php
				}
				}
				else{
					require_once('connectDB.php');
					$sql = "SELECT * FROM flightList";
					$sql1 = "SELECT * FROM seats";
					$result1 = $conn->query($sql1);
					$number_of_results1 = mysqli_num_rows($result1);

					$result = $conn->query($sql);
					$number_of_results = mysqli_num_rows($result);
					if ($number_of_results > 0) 
				{

				?>
				<h1><b>Danh sách các chuyến bay hiện có</b></h1>
				<?php
					while (($row = $result->fetch_assoc()) && ($row1 = $result1->fetch_assoc())) 
					{
				?>
				
				
				
			
			<form>
				<div class="noidung2">
					
						
				</div>
			</form>

				
				<div class="card">
					
					<div class="card-header">
						<h5><b><?= $row['From_chuyenbay']?> to <?= $row['To_chuyenbay']?> (<?= $row['Date_chuyenbay']?>)</b></h5>	
					</div>
					<div class="card-body">
						<div class="body1">
							<blockquote class="blockquote mb-0">
							<p>Nơi đi:</p>
							<footer class="blockquote-footer"><?= $row['Time_fly']?> <br><cite title="Source Title"><?= $row['From_chuyenbay']?></cite></footer>
							</blockquote>
						</div>
						
						<div class="body1">
							<blockquote class="blockquote mb-0">
							<p>Nơi đến:</p>
							<footer class="blockquote-footer"><?= $row['Time_arrive']?> <br><cite title="Source Title"><?= $row['To_chuyenbay']?></cite></footer>
							</blockquote>
						</div>
						<form action="setcookie.php" method="POST"><input type="hidden" id="<?= $row['Id_chuyenbay']?>" name="Id_book" value="<?= $row['Id_chuyenbay']?>"><div class="body2"><button>Chọn chuyến bay</button></div></form>
						<div class="body2">
							<blockquote class="blockquote mb-0">
							<p>Price:</p>
							<footer class="blockquote-footer"><?= $row1['price']?> VND.<br><cite title="Source Title"><u>Lưu ý:</u> Giá vé có thể thay đổi</cite></footer>
							</blockquote>
						</div>

					</div>
					<div class="clearfix"></div>
				</div>

				<p></p>
				<?php
			}?>
			<div style="float: right; padding-top: 20px;">
					<button type="button" class="btn btn-warning"><a href="DatCho.php" style="color:black">Next step</a></button>
			</div>
			<?php
			}
		}

			?>
			
			
			
			<div class="clearfix"></div>
		<!-- /content -->
		</div>
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