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
						<li><a href="Homepage.php" >Trang chủ<i class="fas fa-home" style='font-size:14px; margin-left:10px;'></i></a></li>
						<li><a href="DatChuyenbay.php">Chuyến bay<i class="fas fa-plane" style='font-size:14px; margin-left:10px;'></i></a></li>
						<li><a href="Tintuc.php" class="active">Tin tức<i class="fas fa-newspaper" style='font-size:14px; margin-left:10px;'></i></a></li>
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
				<a href ="Japan.php" style="color:black"><strong>NHẬT BẢN<a/></strong>
				</center>
				
				
				
				<div id="demo" class="carousel slide" data-ride="carousel">


						<div class="carousel-inner">
						    <div class="carousel-item active">
								<img src="imgfold/Osaka.jpg" alt="Osaka" width="1100" height="500">
								<div class="carousel-caption">
	    						<h1>Osaka</h1>
								</div>
						    </div>
						</div>
				</div>
						
							<div style="margin:30px">
							<h2>“Thủ đô ăn uống”</h2>
							<div><p>&nbsp;Là thành phố lớn thứ ba và đóng vai trò quan trọng thứ hai ở Nhật Bản, Osaka có rất nhiều thứ để du khách khám phá.
							Từng là trung tâm thương mại một thời, thành phố này có phần nổi trội hơn cả Tokyo, cho dù nhiều tập đoàn lớn của Nhật Bản gọi nơi đây là nhà. 
							Osaka còn là trung tâm lớn của văn hóa nhạc pop và mua sắm. Nhưng trên tất cả, Osaka nổi tiếng với nền ẩm thực cũng như niềm đam mê ẩm thực của người dân. 
							Từ đó mới sinh ra thuật ngữ kuidarore, nghĩa là “ăn đến khi không thể nữa”. 
							Con người thân thiện và món ăn hấp dẫn ở đây sẽ khiến bạn siêu lòng và sẵn sàng ních căng dạ dày không kém họ.</div>
						
							</div>
							</div>
							
							<div>
							<h2><strong><center>Việc Nên Làm</h2></strong></center>
							<h2>1. Trung tâm giải trí </h2>
							<img src="imgfold/Os1.jpg" width="600" height="300">
							<p>Được mệnh danh là trung tâm giải trí của Nhật Bản, Osaka tụ họp rất nhiều thể loại công viên giải trí để bạn có thể tha hồ tận hưởng và lựa chọn trò chơi để phù hợp với mình.
							Đặc biệt hơn nếu bạn có thể đến vào các dịp lễ hội như Halloween, năm mới,... sẽ có rất nhiều thứ khác sẽ làm bạn bất ngờ lắm đấy.
							</p>
							
							<h2>2. Thưởng thức đặc sản</h2>
							<img src="imgfold/Os2.jpg" width="600" height="300">
							<p>
							Người ta thường biết đến Osaka là quê hương của takoyaki (bạch tuộc viên) và okonomiyaki (một loại bánh mặn của Nhật Bản), nhưng ẩm thực của thành phố không chỉ có thế. 
							Osaka còn nổi tiếng với món kushiage, với nhiều loại thực phẩm được xiên vào que, đem chiên giòn rồi tẩm với nước sốt, trông vô cùng đẹp mắt mà lại rất ngon. 
							Bạn có thể thử món này tại nhà hàng Bon sang trọng hoặc nhà hàng Kushiage Daruma giá cả phải chăng hơn.
							</p>
							
							<h2>3. Vẻ đẹp truyền thống</h2>
							<img src="imgfold/Os3.jpg" width="600" height="300">
							<p>Nếu những bóng đèn neon rực rỡ ở Osaka khiến bạn thấy hơi “chói lòa”, Kyoto truyền thống là nơi tuyệt vời để tìm đến. 
							Hai thành phố được kết nối bằng tàu điện với thời gian di chuyển chỉ mất hơn một giờ đồng hồ. 
							Tại Kyoto, đừng bỏ qua cơ hội đến thăm chùa vàng Kinkakuji nổi tiếng, chiêm ngưỡng những cánh cổng đỏ của đền Fushimi-Inaritaisha và thả bộ trên con đường có rặng tre thẳng tắp hai bên ở Arashiyama. 
							Sau khi thăm thú Kyoto, bạn có thể quay trở lại Osaka và vẫn kịp giờ ăn trưa. 
							</p>

							
							</div>
							
						
						
						
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
							<img src="imgfold/Hokkaido.jpg" class="card-img-top" alt="Hokkaido" style=" height: 175px">
							<div class="card-body">
								<h5 class="card-title">Hokkaido</h5>
							<a href="Hokkaido.php" class="btn btn-primary">Xem thêm</a>
		  					</div>
						</div>
						
						<div class="card">
							<img src="imgfold/Nag1.jpg" class="card-img-top" alt="Nagasaki" style=" height: 175px">
							<div class="card-body">
								<h5 class="card-title">Nagasaki</h5>
							<a href="Nagasaki.php" class="btn btn-primary">Xem thêm</a>
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