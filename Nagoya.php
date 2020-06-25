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
						<li><a href="Tintuc.php"  class="active" >Tin tức<i class="fas fa-newspaper" style='font-size:14px; margin-left:10px;'></i></a></li>
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
								<img src="imgfold/Nagoya.jpg" alt="Nagoya" width="1100" height="500">
								<div class="carousel-caption">
	    						<h1>Nagoya</h1>
								</div>
						    </div>
						</div>
				</div>
						
							<div style="margin:30px">
							<h2>Không chỉ là trung tâm công nghiệp</h2>
							<div><p>&nbsp;Nagoya, thủ phủ của tỉnh Aichi và là thành phố lớn thứ tư của Nhật Bản, là nơi ra đời của nhiều hãng xe nổi tiếng như Toyota, Suzuki và Honda Motor.
							Đây cũng là quê hương của ba trong số những lãnh chúa phong kiến lớn của Nhật Bản, tuy nhiên nhiều di tích lịch sử gắn liền với họ đã bị phá hủy trong Thế chiến Hai.
							Thành phố được tái thiết thành một trung tâm công nghiệp chủ chốt và ngày nay đã mang phong cách hiện đại, với đường phố rộng rãi thân thiện với ô tô,
							tổ hợp những tòa nhà chọc trời mới mọc và những cộng đồng quốc tế ngày càng phát triển nhờ tạo ra nhiều cơ hội nghề nghiệp. </div>
							<div>Vì thế, Nagoya có rất nhiều điểm tham quan liên quan đến công nghiệp và công nghệ. 
							Còn những nông trang lợp mái tranh truyền thống và các thửa ruộng bậc thang nằm cách đó không xa đã tạo nên sự kết hợp của vẻ đẹp “xưa và nay” đầy thú vị.</div>
							</p>
							
							
						
							</div>
							</div>
							
							<div>
							<h2><strong><center>Việc Nên Làm</h2></strong></center>
							<h2>1.Đặc sản Brazil</h2>
							<img src="imgfold/Na1.jpg" width="600" height="300">
							<p>Cộng đồng người Brazil đông đúc ở đây mang lại cho Nagoya rất nhiều món đặc sản Brazil.
							Bạn có thể thưởng thức bữa ăn khai vị với sushi và soba, 
							món chính với churrasco ở nhà hàng Sapucai ở khu Sakae và kết thúc với món caipirinha. Đọc tên món ăn này nhanh gấp ba lần bình thường cũng là một thách thức thú vị. 
							</p>
							
							<h2>2.Thưởng thức Noh</h2>
							<img src="imgfold/Na2.jpg" width="600" height="300">
							<p>
							Nagoya mang đến cho du khách cơ hội thưởng thức các màn biểu diễn âm nhạc truyền thống, đặc biệt là Noh. Các nghệ sĩ trình diễn đeo mặt nạ rồi nói và di chuyển cực kỳ phong cách. 
							Nhà hát Noh Nagoya định kỳ tổ chức các buổi biểu diễn Noh với giá vé hợp lý; trong đó có các vở nổi tiếng với giải thích bằng tiếng Anh.
							Ngoài ra còn có triển lãm về Noh với rất nhiều thông tin bằng tiếng Anh để du khách dễ dàng tìm hiểu và tiếp cận nghệ thuật đặc sắc này. 
							</p>
							
							<h2>3. Cho người yêu máy móc</h2>
							<img src="imgfold/Na3.jpg" width="600" height="300">
							<p>Nếu là một nhà khoa học, thợ cơ khí hay kỹ sư, bạn có thể tìm hiểu mọi thứ liên quan đến tàu tại công viên SCMAGLEV và Railway Park,
							tìm hiểu mọi thứ liên quan đến xe hơi tại Bảo tàng Toyota Techno và bảo tàng Toyota Automobile, ngắm sao tại Bảo tàng Khoa học,
							nơi đặt một trong những đài thiên văn lớn nhất thế giới. 
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
						
						
						
						
						</div>
						
						<div class="row">
						<div class="card">
							<img src="imgfold/Oita.jpg" class="card-img-top" alt="Oita" style=" height: 175px">
							<div class="card-body">
								<h5 class="card-title">Oita</h5>
							<a href="Oita.php" class="btn btn-primary">Xem thêm</a>
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