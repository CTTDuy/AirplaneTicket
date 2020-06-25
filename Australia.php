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
				<div><center>
				<a href ="Tintuc.php" style="color:black"><strong>ĐIỂM ĐẾN<a/></strong>
				</center>
				
				
				
				<div id="demo" class="carousel slide" data-ride="carousel">


						<div class="carousel-inner">
						    <div class="carousel-item active">
								<img src="imgfold/australia.jpg" alt="Australia" width="1100" height="500">
								<div class="carousel-caption">
	    						<h1>Úc</h1>
								</div>
						    </div>
						</div>
				</div>
						
							<div style="margin:30px">
							<h2>Nước Úc – Châu lục nhỏ, giá trị lớn</h2>
							<div><p>&nbsp;Nước Úc nằm trên lục địa nhỏ nhất thế giới nhưng nơi đây lại có lợi thế riêng biệt mà không quốc gia nào có được.&nbsp;</p>
							<div>Thiên nhiên ban tặng cho đất nước này cảnh quan đa dạng và thú vị, với những cánh rừng nhiệt đới mang vẻ đẹp ngoạn mục, những dải sa mạc rộng lớn, bãi biển cùng đường bờ biển dài rộng và các đô thị quốc tế. 
							Nơi đây không thiếu bất kỳ thứ gì để thỏa mãn tất cả kỳ vọng, mong đợi của du khách. Bạn muốn thưởng thức nhạc thính phòng đẳng cấp thế giới, nếm thử đặc sản của bất kỳ nơi nào trên trái đất, khám phá các quán bar ẩn khuất trong đêm hay chất đầy hành lý với thời trang cao cấp? Có thể bạn thích lặn với ống thở quanh các rạn san hô, 
							học cách lướt ván cùng đàn cá heo hay thả bộ qua những khu rừng hoang dã chỉ có âm thanh của gió bên tai và chim hót ríu rít. Úc là nơi bạn có thể làm tất cả những điều đó và hơn thế nữa.</div>
							<div>Thời tiết ở nước Úc ôn hòa hầu hết thời gian trong năm, nhưng cũng có biến động đôi chút theo từng khu vực lớn, nhỏ. Các bang miền bắc thường ấm áp trong hầu hết thời gian của năm, nhưng các bang miền nam trải qua mùa đông lạnh hơn (từ tháng 6 - 8). Cả mùa thu (tháng 3 - 5) và mùa xuân (tháng 9 - 10) đều ngập nắng và dịu nhẹ.&nbsp;</div></div>
							
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