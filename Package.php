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
		<link rel="stylesheet" type="text/css" href="CSS/stylePackage.css">


		<title>Package</title>
	
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
						<li><a href="guestLogin.php"> Login<i class='fas fa-user' style='font-size:14px; margin-left:10px;'></i></a></li>
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
					<div class="col" id="pointer2"><i class="fas fa-box-open"></i><p>Package</p></div>
					<div class="col" id="pointer3"><i class="fas fa-couch"></i><p>Seat</p></div>
					<div class="col" id="pointer4"><i class="far fa-file-alt"></i><p>Information</p></div>
					<div class="col" id="pointer5"><i class="fas fa-user-check"></i><p>Verify</p></div>
				</div>
			</div>
			
			<div class="noidung1">
				<h1><b>Flight from Ho Chi Minh to Nhat Ban</b></h1>
				

			</div>
			<form>
				<div class="noidung2">
					
						
				</div>
			</form>
				<div class="card">
					<div class="card-header">
						<b>Hồ Chí Minh to Nhật Bản</b>
					</div>
					<div class="card-body">
						<blockquote class="blockquote mb-0">
							<p>Price:</p>
							<footer class="blockquote-footer">1.000.000 VND <br><cite title="Source Title"><u>Lưu ý:</u>Giá vé có thể thay đổi</cite></footer>
						</blockquote>
					</div>
				</div>
				<div class="card">
					<div class="card-header">
						<b>Nhật Bản to Hồ Chí Minh</b>
					</div>
					<div class="card-body">
						<div class="body1">
							<blockquote class="blockquote mb-0">
							<p>Nơi đi:</p>
							<footer class="blockquote-footer">09:30 <br><cite title="Source Title">Hồ Chí Minh</cite></footer>
							</blockquote>
						</div>
						
						<div class="body1">
							<blockquote class="blockquote mb-0">
							<p>Nơi đến:</p>
							<footer class="blockquote-footer">12:00 <br><cite title="Source Title">Nhật Bản</cite></footer>
							</blockquote>
						</div>

						<div class="body2">
							<blockquote class="blockquote mb-0">
							<p>Price:</p>
							<footer class="blockquote-footer">500.000 VND<br><cite title="Source Title"><u>Lưu ý:</u> Giá vé có thể thay đổi</cite></footer>
							</blockquote>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
		
			
			<div style="padding-top: 10px;">
				<div class="card" >
					<div class="card-header" style="background: #6F5987; color:#B08DD6; ">
						Ticket Information:
					</div>
					<div class="card-body">
						<blockquote class="blockquote mb-0">
							<p>Number of Ticket:</p>
							<p>Total Price:</p>
						<footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source: TDTU</cite></footer>
						</blockquote>
					</div>
				</div>
			</div>
			<div style="float: left; padding-top: 20px; padding-bottom: : 20px;">
					<button type="button" class="btn btn-warning"><a href="DatChuyenbay.php" style="color:black">Previous step</a></button>
			</div>
			<div style="float: right; padding-top: 20px;">
					<button type="button" class="btn btn-warning"><a href="DatCho.php" style="color:black">Next step</a></button>
			</div>
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