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
						<li><a href="Tintuc.php"  class="active">Tin tức<i class="fas fa-newspaper" style='font-size:14px; margin-left:10px;'></i></a></li>
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
				<a href ="Japan.php" style="color:black"><strong>Nhật Bản<a/></strong>
				</center>
				
				
				
				<div id="demo" class="carousel slide" data-ride="carousel">


						<div class="carousel-inner">
						    <div class="carousel-item active">
								<img src="imgfold/Hokkaido.jpg" alt="Hokkaido" width="1100" height="500">
								<div class="carousel-caption">
	    						<h1>Hokkaido</h1>
								</div>
						    </div>
						</div>
				</div>
						
							<div style="margin:30px">
							<h2>Vùng đất của băng tuyết.</h2>
							<div><p>&nbsp;Nằm tại cực bắc Nhật Bản, Hokkaido được khám phá từ thế kỉ thứ 18 với thiên nhiên hùng vĩ vẫn còn giữ được đến hôm nay. 
							Hãy để tâm hồn bạn được thư thả trên vùng đất rộng lớn này với núi, cao nguyên, sông, hồ, biển cùng bầu trời xanh trong vắt.</div>
							</div>
							</div>
					
							<div>
							<h2><strong><center>Việc Nên Làm</strong></center></h2>
							<h2>1. Xử sở của các loại bánh kẹo</h2>
							<img src="imgfold/Hok1.jpg" width="600" height="300">
							<p>
							Nhật Bản nổi tiếng thế giới về các loại bánh kẹo, và chắc chắn tại Nhật thì không đâu xứng đáng có được danh hiệu “vương quốc ngọt ngào” hơn là Hokkaido. 
							Ngoài việc thưởng thức thì giờ đây,du khách còn có thể khám phá các nhà máy cho ra đời những món bánh kẹo tuyệt hảo nhất Hokkaido. 
							Có cả công viên, khu vui chơi và nhiều dịch vụ khác để du khách dành trọn một ngày thoả thích!</p>
							
							<h2>2. Vẻ đẹp thiên nhiên ở phía Bắc Nhật Bản</h2>
							<img src="imgfold/Hok2.jpg" width="600" height="300">
							<p>
							Hokkaido được xem là vùng đất của những di sản thiên nhiên thế giới với bán đảo Shiretoko, 
							vùng đất ngập nước Kushiro hùng vĩ, hồ Akan thần bí, tất cả tạo nên một khu vực với phong cảnh thiên nhiên giàu đẹp.
							Mùa thu lá đỏ cũng là mùa không thể bỏ qua ở đây. Cả một khu vực rộng lớn được bao phủ bởi màu đỏ vàng của rất nhiều cây sồi khiến cho nơi đây mang một 
							bầu không khí lãng mạn làm say đắm biết bao du khách.
							</p>
							
							<h2>3. Văn hóa và lễ hội </h2>
							<img src="imgfold/Hok3.jpg" width="600" height="300">
							<p>Văn hóa & Lễ hội Sapporo mang đậm bản sắc dân tộc khi kết hợp giữa nét cổ điển pha trộn với sự hiện đại của xã hội ngày nay.
							Để từ đó, những nét đẹp mang tên Sapporo được phát triển và hấp dẫn du khách đến từ khắp các nước trên thế giới.
							Sapporo có bề dày lịch sử và những nét riêng, cá tính khác biệt điều này tạo nên những điểm mới, điểm lạ của thành phố băng giá này.
							Tại đây, mỗi năm có rất nhiều lễ hội được diễn ra tại đây đặc biệt là lễ hội tuyết được tổ chức hàng nằm vào tháng 2 với tên gọi Sapporo Snow Festival.
							Ngoài ra, vào tháng 5 du khách thế giới còn có thể chiêm ngưỡng thêm lễ hội Sapporo Lilac Festival. 
							Tại đây, du khách được thưởng thức hoa, rượu vang và nhạc sống. Tháng 9 với lễ hội mùa thu Sapporo và tháng 12 với chợ Giáng sinh ở Công viên Odori.
							</p>
							</div>
							
							
							<hr>
						
						<h1 style="text-align: center">Xem thêm</h1>
						
			<div class="section">
				<div class="container">
				
				<div class="card-deck">
						<div class="row">
							<div class="card">
							<img src="imgfold/Japan.jpg" class="card-img-top" alt="Japan" style=" height: 175px">
							<div class="card-body">
								<h5 class="card-title">Nhật Bản</h5>
							<a href="Japan.php" class="btn btn-primary">Xem thêm</a>
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
						</div>
						
					<div class="row">
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