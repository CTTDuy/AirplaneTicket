<!DOCTYPE html>
	<html>
		<head>
			<!-- Required meta tags -->
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
			
			<!-- Latest compiled and minified CSS -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
			
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
			
			<link rel="stylesheet" type="text/css" href="styleHomePage.css">


			<title>Điểm điến</title>
		</head>
		<body>
			<div id="header">
				<!-- <header> -->
					<a href="Homepage.php" class="logo"><img src="imgfold/TDT_logo.png" alt="logo" href="#" width="100px" height="50px"></a>
					<div class="menu-toggle"></div>
				<nav>
					<ul>
						<li><a href="Homepage.php">Trang chủ<i class="fas fa-home" style='font-size:14px; margin-left:10px;'></i></a></li>
						<li><a href="DatChuyenbay.php">Chuyến bay<i class="fas fa-plane" style='font-size:14px; margin-left:10px;'></i></a></li>
						<li><a href="Tintuc.php" class="active" >Tin tức<i class="fas fa-newspaper" style='font-size:14px; margin-left:10px;'></i></a></li>
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
				<div><center>
				<a href ="Tintuc.php" style="color:black"><strong>ĐIỂM ĐẾN<a/></strong>
				</center>
				
				
				
				<div id="demo" class="carousel slide" data-ride="carousel">


						<div class="carousel-inner">
						    <div class="carousel-item active">
								<img src="imgfold/japan.jpg" alt="Japan" width="1100" height="500">
								<div class="carousel-caption">
	    						<h1>NHẬT BẢN</h1>
								</div>
						    </div>
						</div>
				</div>
						
							<div style="margin:30px">
							<h2>Hòa quyện giữa vẻ đẹp hiện đại với truyền thống đặc sắc lâu đời, Nhật Bản vừa là Xứ sở Mặt trời mọc vừa là nơi mặt trời dường như không bao giờ lặn.</h2>
							<div><p>&nbsp;Được hình thành từ hàng ngàn đảo núi lửa, Nhật Bản trải dài từ Hokkaido lạnh giá ở phía bắc tới Okinawa nhiệt đới ở phía nam. 
							Những người yêu thích hoạt động ngoài trời đến nơi đây sẽ được thỏa thích với vô vàn lựa chọn, 
							còn những ai yêu cuộc sống đô thị hiện đại cũng không thiếu cơ hội trải nghiệm nhiều thành phố mang phong cách quốc tế như Tokyo và Osaka.</div>
							<div>Mọi người trên khắp thế giới đến với Xứ sở Mặt trời mọc để thưởng thức món sushi ngon nhất, tìm kiếm sự khai sáng tại một ngôi đền Phật giáo, 
							thử sức dẻo dai của mình trên những con dốc của đỉnh núi Phú Sĩ, hay để tiệc tùng thâu đêm với các robot “showgirl”. 
							Đất nước Nhật Bản ẩn chứa rất nhiều điều bí ẩn, nên bạn rất dễ bắt gặp những điều ngạc nhiên thú vị trên đường đi.&nbsp;</div></div>
							</div>
					
							
							<div class="section">
				
					
						<br>
						
						
						
			<div class="section">
				<div class="container">
				
				<div class="card-deck">
						<div class="row">
							<div class="card">
							<img src="imgfold/Hokkaido.jpg" class="card-img-top" alt="Hokkaido" style=" height: 175px">
							<div class="card-body">
								<h5 class="card-title">Hokkaido</h5>
							<a href="Hokkaido.php" class="btn btn-primary">Xem thêm</a>
		  					</div>
							</div>
						<div class="card">
							<img src="imgfold/Osaka.jpg" class="card-img-top" alt="Osaka" style=" height: 175px">
							<div class="card-body">
								<h5 class="card-title">Osaka</h5>
							<a href="Osaka.php" class="btn btn-primary">Xem thêm</a>
		  					</div>
						</div>
						
						<div class="card">
							<img src="imgfold/Oita.jpg" class="card-img-top" alt="Oita" style=" height: 175px">
							<div class="card-body">
								<h5 class="card-title">Oita</h5>	
							<a href="Oita.php" class="btn btn-primary">Xem thêm</a>
		  					</div>
						</div>
						
						<div class="card">
						<img src="imgfold/Nagoya.jpg" class="card-img-top" alt="Nagoya" style=" height: 175px">
							<div class="card-body">
								<h5 class="card-title">Nagoya</h5>
							<a href="Nagoya.php" class="btn btn-primary">Xem thêm</a>
		  					</div>
						</div>
						
					
					</div>
				</div>
				</div>
				</div>
				
				<br>
				
		
		<div id="footer"  class="container">

				<span class="text-muted">Copyright ©2019 Đại học Tôn Đức Thắng </span>
		</div>

		
		

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	</body>
</html>