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
								<img src="imgfold/Thailand.jpg" alt="Thailand" width="1100" height="500">
								<div class="carousel-caption">
	    						<h1>Thái Lan</h1>
								</div>
						    </div>
						</div>
				</div>
						
							<div style="margin:30px">
							<h2>Thái Lan - Chiều lòng mọi du khách</h2>
							<div><p>&nbsp;Ít nơi nào trên Trái đất dành nhiều sự lựa chọn cho du khách như Thái Lan. 
							Nước này tiếp tục đứng đầu điểm đến ưa thích nhất với thủ đô sôi động, nội địa xanh tươi, bãi biển mê ly và người dân rộng lượng, hài hước. 
							Bangkok thường là điểm ghé chân đầu tiên, từ đây, du khách dễ dàng tới với vùng quê hoặc đảo nhiệt đới. Đi lên phía bắc là tới hai thành phố cổ kính Chiang Mai và Chiang Rai, 
							nơi du khách được ngắm nhìn các ngọn núi có rừng rậm bao phủ, văn hóa bộ tộc bản địa vùng cao nguyên và nhiều công trình nghệ thuật đẹp mắt. Phía tây của Bangkok là Kanchanaburi, 
							khu vực đồi núi giáp Myanmar, nơi du khách có thể khám phá các vùng quê, bài học lịch sử trên dòng sông Kwai và tuyến đường sắt… tai tiếng, “đường sắt tử thần”, 
							nơi nhiều công nhân xây dựng là tù binh thiệt mạng vì bệnh tật, tai nạn và bị ngược đãi. Bãi biển thì có vô vàn: Phuket với các vịnh mênh mang nước chảy và cảnh quan kỳ thú; 
							Krabi với các vách đá vôi lạ mắt…
							Khó có thể thưởng thức hết vẻ đẹp của Thái Lan trong một chuyến đi, nên nhiều du khách đã trở lại đất nước này.</div></div>
							</div>
					
							
							
						
						
						
			<div class="section">
				<div class="container">
				
				
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