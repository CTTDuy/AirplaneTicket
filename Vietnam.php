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
				<a href ="Tintuc.php" style="color:black"><strong>Điểm đến<a/></strong>
				</center>
				
					<div id="demo" class="carousel slide" data-ride="carousel">


						<div class="carousel-inner">
						    <div class="carousel-item active">
								<img src="imgfold/Vietnam.jpg" alt="Vietnam" width="1100" height="500">
								<div class="carousel-caption">
	    						<h1>Việt Nam</h1>
								</div>
						    </div>
						</div>
				</div>
				
				<div style="margin:30px">
				<h2>Chìm đắm trong sự quyến rũ, nét đẹp văn hóa lịch sử và nhịp sống gấp gáp của một Việt Nam hiện đại mà đậm đà nét truyền thống phương Đông.</h2>
				<div><p>&nbsp;Việt Nam dường như được sở hữu tất cả. Từ thiên nhiên đa dạng tuyệt vời đến những thành phố nhộn nhịp, hối hả và con người thân thiện, mến khách. 
				Ba miền Bắc, Trung và Nam là ba cơ hội trải nghiệm hoàn toàn khác biệt. Dù đi đến nơi đâu trên đất nước này, hành trình của bạn đều là một cuộc phiêu lưu. 
				Nhờ vị trí địa lý trải dài của đất nước, du khách có thể khám phá cực kỳ nhiều cảnh đẹp ngoạn mục. 
				Ngắm nhìn những thửa ruộng bậc thang tươi tốt ở Sapa, leo lên những đồi cát quyến rũ ở Mũi Né hay chèo thuyền kayak giữa rừng núi đá vôi ở Vịnh Hạ Long. 
				Đất nước hình chữ S sở hữu hơn 3.000km đường bờ biển, những ngọn núi cao nhất khu vực và một vài hệ thống hang động lớn nhất thế giới.</div>
				<div>Du khách đến với Việt Nam thường thích nhâm nhi tách cà phê đậm đà giữa ma trận giao thông tấp nập ở khu phố cổ Hà Nội hay khám phá những bảo tàng thuộc địa Pháp ở thành phố Hồ Chí Minh;
				viếng thăm nơi thờ Khổng Tử; thử cảm giác mạo hiểm khi phải tránh dòng xe máy đi kín đường và thưởng thức món bún tươi với nước dùng nóng hổi thơm phức; trải nghiệm cảm giác về vương triều xưa của Việt Nam ở Huế,
				đặt may nhanh bộ quần áo ở Hội An cổ kính và nghỉ lại trong cộng đồng của những nhóm dân tộc thiểu số ở vùng đồi núi của đất nước. 
				Danh sách những điểm nên khám phá ở Việt Nam cứ kéo dài thêm mãi, nên bạn cần sắp xếp thời gian hợp lý để trải nghiệm tối đa có thể.
				</div></p>
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