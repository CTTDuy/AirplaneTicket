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
								<img src="imgfold/Sing.jpg" alt="Sing" width="1100" height="500">
								<div class="carousel-caption">
	    						<h1>Singapore</h1>
								</div>
						    </div>
						</div>
				</div>
						
							<div style="margin:30px">
							<h2>Là thiên đường đa văn hóa và ẩm thực, Singapore được pha trộn từ những giá trị, bản sắc Đông và Tây, cũ và mới, thiên nhiên và nhân tạo.</h2>
							<div><p>&nbsp;Hơn hết, sự đa dạng của Singapore mang lại những lựa chọn ẩm thực đa dạng hơn bất kỳ nơi nào.
							Dịch vụ ẩm thực của Singapore có thể đáp ứng bất kỳ thị hiếu cơ bản hay tinh tế nào nhờ vô vàn quán ăn, nhà hàng từ bình dân đến đẳng cấp. 
							Du khách có thể lồng ghép các hoạt động thăm thú, khám phá danh lam thắng cảnh với thưởng thức món ngon để trải nghiệm sự đa dạng của đất nước này.
							Singapore có hạ tầng kết nối rất tốt, nên du khách có thể đi bất kỳ đâu mà không phải lo không tìm thấy đường về. 
							Những điểm đến tuyệt vời nhất có thể kể đến Khu vườn bên Vịnh, Vịnh Marina, khu nghỉ dưỡng Sentosa đẳng cấp thế giới hay những khu mang đặc trưng dân tộc như Chinatown, Kampong Glam và Little India.</div>
							<div>Để tận hưởng cảnh sắc thiên nhiên xanh tươi của Singapore, bạn nên đến thăm vùng mũi phía bắc của quốc đảo.
							Khám phá Khu bảo tồn đất ngập nước Sungei Buloh, bạn dễ dàng bắt gặp những con thằn lằn hay các loài chim di cư ngay trên đường đi, 
							rồi sau đó có thể thưởng thức những món ăn sạch của đồng quê tại các nhà hàng ở vùng nông thôn Kranji gần đó.
							</div>
							</p>
					
					
							<div>
							<h2><strong><center>Việc Nên Làm</h2></strong></center>
							<h2>1.Phong vị cổ</h2>
							<img src="imgfold/Sp1.jpg" width="600" height="300">
							<p>Chỉ cách đường Orchard mười phút chạy xe, khu nhà cổ nhất của Singapore vẫn còn giữ được phong vị cổ xưa nhờ những cửa hàng, quán café và nhà hàng mang dáng vẻ hoài cổ. 
							Men theo những con đường đi bộ được giữ gìn sạch sẽ, chỉn chu là bạn sẽ tới các cửa hàng đặc sản của khu vực. Khám phá tiệm bánh Plain Vanilla Bakery để nếm những chiếc bánh cupcake ngon tuyệt, 
							nhà hàng Abe’s Diner với những món dân dã với phong cách ẩm thực châu Âu và Nhật Bản, Nhà hàng hải sản Ting Heng Seafood Restaurant nổi tiếng với món zi char tinh túy (món xào Singapore) và món lẩu tuyệt ngon.
							</p>
							
							<h2>2.Hàng loạt bảo tàng</h2>
							<img src="imgfold/Sp2.jpg" width="600" height="300">
							<p>
							Bảo tàng Nghệ thuật Singapore, Bảo tàng quốc gia Singapore, Bảo tàng Peranakan và Bảo tàng Tem Singapore là những nơi lý tưởng cho người muốn tìm hiểu quá khứ và hiện tại của đất nước nhỏ bé xinh đẹp. 
							Thẻ thăm bảo tàng trong ba ngày (3-Day Museum Pass) cho phép bạn vào thăm không giới hạn những bảo tàng này (cá nhân: S$20; gia đình hoặc nhóm năm thành viên hoặc ít hơn: S$50).
							</p>
							
							<h2>3. Tinh hoa ẩm thực</h2>
							<img src="imgfold/Sp3.jpg" width="600" height="300">
							<p>Những điểm ăn uống tốt nhất của Singapore là nhà hàng Ember và nhà hàng André nằm trong quận di sản được bao quanh bởi đường Keong Saik và Bukit Pasoh. 
							Để thưởng thức những món ăn chất lượng nhưng dân dã, bạn có thể chọn nhà hàng Imperial Treasure Windows of Hong Kong và The House of Robert Timms. 
							Để thử các món ngon địa phương phong phú trong không khí náo nhiệt, Trung tâm ẩm thực đường Sân bay cũ và Trung tâm ẩm thực Chomp Chomp Food Centre là thích hợp hơn cả.
							</p>
							
			
						
	
				</div>
		</div>
		<div id="footer"  class="container">

				<span class="text-muted">Copyright ©2019 Đại học Tôn Đức Thắng </span>
		</div>

		
		

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	</body>
</html>