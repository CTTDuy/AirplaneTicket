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
				<a href ="Japan.php" style="color:black"><strong>NHẬT BẢN<a/></strong>
				</center>
				
				
				
				<div id="demo" class="carousel slide" data-ride="carousel">


						<div class="carousel-inner">
						    <div class="carousel-item active">
								<img src="imgfold/Oita.jpg" alt="Oita" width="1100" height="500">
								<div class="carousel-caption">
	    						<h1>Oita</h1>
								</div>
						    </div>
						</div>
				</div>
						
							<div style="margin:30px">
							<h2>Ðược trời phú nhiều suối nước nóng, Oita thu hút đông đảo du khách tìm đến nghỉ dưỡng, hồi phục sức khỏe giữa thiên nhiên.</h2>
							<div><p>&nbsp;Thành phố Oita là thủ phủ của tỉnh cùng tên. Mặc dù tương đối nhỏ bé, 
							nhưng nơi này có một số di tích lịch sử rất kỳ thú và nhiều ngả đường dẫn tới các vùng khác của tỉnh Oita vốn nổi tiếng khắp Nhật Bản vì những suối nước nóng quý giá.
							Oita từng là trung tâm quan trọng của các nhà truyền giáo, nên nơi đây có không ít nhà thờ công giáo xen lẫn các đền thờ truyền thống của Nhật Bản..</div>
							<div>Ngoài việc thưởng thức hải sản tươi ngon, bạn đừng quên tác dụng hồi phục sức khỏe của các suối nước nóng ở Oita, đặc biệt là Beppu, Yufuin và Tsukano Kosen.</div>
							</p>
							
							
						
							</div>
							</div>
							
							<div>
							<h2><strong><center>Việc Nên Làm</h2></strong></center>
							<h2>1.Tắm suối nước nóng</h2>
							<img src="imgfold/Oi1.jpg" width="600" height="300">
							<p>Ðến Kyushu mà chưa tắm suối nước nóng thì không được coi là đã đến Kyushu. Thị trấn nghỉ dưỡng Beppu cực kỳ nổi tiếng với vô số suối nước nóng dài rộng và nhà tắm đa dạng.
							Yufuin thì không đông đúc bằng, đem lại cảm giác thanh bình. Dù chọn đến nơi nào, đừng quên nhúng chân thử trước, vì người Nhật thích tắm nước NÓNG.
							</p>
							
							<h2>2.Uống bia miễn phí</h2>
							<img src="imgfold/Oi2.jpg" width="600" height="300">
							<p>
							Hãng bia Sapporo có một nhà máy gần Oita và bạn có thể tới thăm, uống thử bia miễn phí trong khi tìm hiểu về loại đồ uống này. 
							Nhưng bạn nhớ phải đặt trước. Sau đó, bạn có thể tới vườn bia sát nhà máy để tiếp tục khám phá.
							</p>
							
							<h2>3. Lang thang quán xá</h2>
							<img src="imgfold/Oi3.jpg" width="600" height="300">
							<p>Các quán bar tập trung ở khu Miyako-machi, nên bạn có thể la cà hết quán này tới quán khác một cách tiện lợi. E.I.
							Pub và Rock Bar Spiral thu hút nhiều du khách nước ngoài, đặc biệt là những người thích nhạc rock cổ điển. 
							Nhưng cách tốt nhất để tìm được quán yêu thích là cứ lang thang trong khu phố rồi tạt vào quán nào khiến bạn cảm thấy “mời gọi” nhất.
							</p>

							
							</div>
							<hr>
						
						
						
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
							<img src="imgfold/Osaka.jpg" class="card-img-top" alt="Osaka" style=" height: 175px">
							<div class="card-body">
								<h5 class="card-title">Osaka</h5>
							<a href="Osaka.php" class="btn btn-primary">Xem thêm</a>
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