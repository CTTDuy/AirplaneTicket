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
		<link rel="stylesheet" type="text/css" href="CSS/styleDichvu.css">


		<title>Dịch vụ</title>
	
	</head>
	<body>
		<!-- header -->
		<div id="header">
				<a href="Homepage.php" class="logo"><img src="TDT_logo.png" alt="logo" href="#" width="100px" height="50px"></a>
				<div class="menu-toggle"></div>
				<nav>
					<ul>
						<li><a href="Homepage.php" >Trang chủ<i class="fas fa-home" style='font-size:14px; margin-left:10px;'></i></a></li>
						<li><a href="DatChuyenbay.php">Chuyến bay<i class="fas fa-plane" style='font-size:14px; margin-left:10px;'></i></a></li>
						<li><a href="Tintuc.php" >Tin tức<i class="fas fa-newspaper" style='font-size:14px; margin-left:10px;'></i></a></li>
						<li><a href="Dichvu.php">Dịch vụ<i class="fas fa-concierge-bell" style='font-size:14px; margin-left:10px;'></i></a></li>
						<li><a href="Vechungtoi.php" class="active">Về chúng tôi<i class="fab fa-avianex" style='font-size:14px; margin-left:10px;'></i></a></li>
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
			
		</div>
		<div id="content" class="container">
			<div class="section" style="text-align: center;">
			<h2><a href="#" >Về chúng tôi</a></h2>
			</div>
				<p>
				<strong>Phòng vé TDTJETONLINES - MỘT THƯƠNG HIỆU CỦA TDTU Travel Service Trading Co.,LTD</strong>, 
						chính thức được hãng hàng không thế hệ mới TDTJet Air  Ủy Quyền xuất vé máy bay trực tiếp. TDTJet Air là hãng hàng không đầu tiên tại Việt Nam 
						vận hành theo mô hình hàng không thế hệ mới, chi phí thấp và cung cấp đa dạng các dịch vụ cho khách hàng lựa chọn.
						Hãng không chỉ vận chuyển hàng không mà còn cung cấp các nhu cầu tiêu dùng hàng hoá và dịch vụ cho khách hàng thông qua các ứng dụng công nghệ thương mại điện tử tiên tiến. 
						Chỉ sau hơn 3 năm hoạt động, TDTjet đã được Hiệp hội Vận tải Hàng không Quốc tế (IATA) trao Chứng nhận An toàn khai thác IOSA.&nbsp; TDTJet&nbsp; là “Hãng hàng không giá rẻ tốt nhất châu Á” (Best Asian Low Cost Carrier ) năm 2015 do TTG Travel Award bầu chọn.
				</p>
<p>&nbsp;</p>
					<p>Thời gian đầu thành lập hãng chủ yếu phát triển đường bay nội địa
						, kết nối các thành phố lớn như TP. Hồ Chí Minh, Hà Nội, Đà Nẵng, Hải Phòng...
						Hiện tại TDTJETAIR đã, đang có kế hoạch phát triển mạng lưới đường bay đến các điểm đến phổ biến trong khu vực Châu Á - Thái Bình Dương 
						nhằm đáp ứng nhu cầu di chuyển bằng máy bay của khách hàng trong nước và khu vực ngày càng tăng.</p>
<p>&nbsp;</p>
					<p>
						Điểm nổi bậc của hãng là luôn mang đến nhiều sự lựa chọn về các chuyến bay, không chỉ là phuơng tiện vận chuyển, 
						TDTUJet luôn sáng tạo, mang đến cho hành khách nhiều điều thú vị, 
						vui vẻ trên các chuyến bay.
</p>
<p>&nbsp;</p>
					<p>
						Quý khách đặt mua vé máy bay TDTJet để trải nghiệm các dịch vụ mới lạ, 
						hấp dẫn trên chuyến bay của hãng hàng không TDTUJet trẻ trung, năng động.
					</p>
<p>&nbsp;</p>
					<p><b>Vui lòng liên hệ:</b></p>
					<p><span style="color: #0000ff;"><b>PHÒNG VÉ TDTJET AIR | TDTU Travel Service Trading Co.,LTD</b></span><br>
						<span style="color: #0000ff;"><b>19 Đường Nguyễn Hữu Thọ, Tân Hưng, Quận 7, Hồ Chí Minh 700000</b></span><br>
						<span style="color: #0000ff;"><b>Tổng đài đặt vé: 029.3456 3789</b></span></p>
						<div id="copyright">
					<p style="text-align: center;"><span style="color: #333333;"><strong>Copyright © 2011 TDTU Travel Service Trading Co.,LTD -&nbsp;SĐKD 0311380474</strong></span><br><span style="color: #333333;"><strong>
						Add 1:&nbsp;<span style="color: #333333;"><span style="color: #333333;">98 Ngô Tất Tố,Phường 19,Quận Bình Thạnh TP.HCM</span></a></span>&nbsp; -&nbsp; <span style="color: #333333;">
						Add 2:</span>&nbsp;<span style="color: #333333;"><span style="color: #333333;">246/9B23 Xô Viết Nghệ Tĩnh, Q. Bình Thạnh, TP.HCM</span></a></span><br><span style="color: #333333;"><a href="Homepage.php"><span style="color: #333333;">www.Homepage.com</span>&nbsp;</span></a>| Email:&nbsp;<span style="color: #333333;">ticket@bookingTDTU.com</span>
					</p>
</div>
<div id="footer" class="container" align="center" style="padding: 20px 0px 20px 0px;">
				<span class="text-muted">©2019 Đại học Tôn Đức Thắng </span>
			</div>
</body>
</html>