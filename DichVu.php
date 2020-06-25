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
		<style type="text/css">
			h1,p,b,h4,h2,h3,h5{
	padding-left: 20px;
}
		</style>

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
						<li><a href="Dichvu.php" class="active">Dịch vụ<i class="fas fa-concierge-bell" style='font-size:14px; margin-left:10px;'></i></a></li>
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
			
		</div>
		<!-- /header -->

		<!-- content -->
		<div id="content" class="container">
			<div class="section">
			<p class="title-1" style="padding-right: 60px;"><b>Dịch vụ</b></p>
			</div>
			
			<hr class="hr1">

			
			<div style="float: left; width: 70%;">
			<span><label id="shrink1"><h4><b>Dịch vụ vận chuyển hàng hóa.</b></h4></label></span>
			</div>
			<div class="i1" style="float: right; width: 5%; text-align: center;">
					<label for="DV1"><i class="fas fa-arrow-circle-down"></i></label>
			</div>
			<div class="clearfix"></div>
			<div class="DV1">
			<p><b>Vui lòng liên hệ: </b>Trường đại học Tôn Đức Thắng - Số 19 Nguyễn Hữu Thọ, Phường Tân Phong, Quận 7, TP. Hồ Chí Minh, Việt Nam.</p>
			</div>
			
			<hr>
			
			
			<div style="float: left; width: 70%;">
			<span><label id="shrink2"><h4><b>Dịch vụ hành lý.</b></h4></label></span>
			</div>
			<div class="i2" style="float: right; width: 5%; text-align: center;">
					<label for="DV2"><i class="fas fa-arrow-circle-down"></i></label>
			</div>
			<div class="clearfix"></div>
			<div class="DV2">
			<b><p>+++Qui định về Hành lý xách tay:</p></b>
			<p>- Hành lý xách tay đúng quy định được phép mang lên tàu bay phải đủ các điều kiện sau:</p>
			<p><b>1. Điều kiện về trọng lượng:</b></p>
			<p>Mỗi hành khách (ngoại trừ em bé) được phép mang 01 kiện hành lý xách tay chính và 01 kiện hành lý xách tay nhỏ với tổng trọng lượng tối đa không vượt quá 07kg.</p>
	
			<p><b>2. Điều kiện về kích thước:</b></p>
			<ul>
				<p>• 01 kiện hành lý xách tay chính có kích thước tối đa 56cm x 36cm x 23cm.</p>
				<p>• 01 túi cá nhân nhỏ (gồm một trong những túi sau):</p>
				<ul>
				<li> 01 túi xách phụ nữ hoặc sách, tạp chí, máy ảnh, túi đựng thức ăn cho em bé, túi mua hàng tại sân bay...có kích thước không quá 30cm x 20cm x 10cm.</li>
				<li> 01 túi đựng áo khoác có kích thước tối đa khi mở ra không quá 114cm x 60cm x 11cm.</li>
				<li> 01 túi đựng máy tính xách tay có khích thước tối đa là 40cm x 30cm x 10cm.</li>
				</ul>
			</ul>
			<p><b>3. Điều kiện về nhãn hành lý xách tay:</b></p>
			<p>+ Hành lý xách tay phải được dán nhãn hành lý xách tay của Vietjet. Quý Hành Khách vui lòng liên hệ nhân viên VietJet để dán nhãn cho hành lý xách tay theo quy định của hãng tại quầy Check-in. Tất cả hành lý xách tay không dán “nhãn hành lý xách tay” sẽ bị từ chối mang lên tàu bay.</p>
			<p><u><b>Lưu ý quan trọng:</b></u></p>
			<p>+ Hành lý xách tay không đúng quy định, quý khách sẽ phải trả phí để ký gửi hành lý hoặc hành lý của quý khách sẽ bị từ chối chuyên chở.</p>
			<p>+ Phí gửi hành lý sẽ cao hơn ở khu vực làm thủ tục và ở cửa khởi hành. Hãy đảm bảo mua trước hành lý để tiết kiệm hơn.</p>
			</div>
			
			<hr>
			<div style="float: left; width: 70%;">
				<span><label id="shrink3"><h4><b>Dịch vụ đặc biệt.</b></h4></label></span>
			</div>
			<div class="i3" style="float: right; width: 5%; text-align: center;">
				<label for="DV3"><i class="fas fa-arrow-circle-down"></i></label>
			</div>
			<div class="clearfix"></div>
			<div class="DV3">		
			<p><b>1.	Dịch vụ cho khách cần hỗ trợ xe lăn:</b>
			<p><u>a.	Là dịch vụ trợ giúp cho hành khách khuyết tật hoặc hành khách có thể trạng yếu, không thể tự đi lại bình thường, cần trợ giúp xe lăn khi sử dụng dịch vụ hàng không. Khách cần sự hỗ trợ xe lăn được chia làm 3 loại sau:</u></p>
			<p>-	Khách cần hỗ trợ trên sân đỗ (Wheelchair Ramp- WCHR): Là hành khách cần sự hỗ trợ di chuyển dưới mặt đất (bao gồm trong nhà ga, trên sân đỗ). Khách có khả năng tự di chuyển lên, xuống tàu bay và trong khoang hành khách của tàu bay.</p>
			<p>-	Khách cần hỗ trợ lên xuống tàu bay (Wheelchair Step- WCHS): Là hành khách cần sự hỗ trợ di chuyển dưới mặt đất (trong nhà ga, trên sân đỗ), di chuyển lên xuống tàu bay. Khách có khả năng tự di chuyển trong khoang hành khách của tàu bay.</p>
			<p>-	Khách cần hỗ trợ trên tàu bay ((Wheelchair Cabin- WCHC): Là hành khách cần sự hỗ trợ di chuyển dưới mặt đất (trong nhà ga, trên sân đỗ), di chuyển lên xuống tàu bay và di chuyển trong khoang hành khách của tàu bay. Khách không có khả năng tự di chuyển ở mọi vị trí.</p>
			<br>
			<p><u>b.	Điều kiện chấp nhận vận chuyển:</u></p>
			<p>-	Khách cần phải đặt dịch vụ xe lăn trước 24 tiếng so với giờ khởi hành dự kiến qua Phòng vé và Tổng đài của Vietjet.</p>
			<p>-	Hành khách đủ sức khỏe thực hiện hành trình. Trường hợp khách là người bị bệnh, phải hoàn tất các thủ tục đảm bảo đủ sức khỏe thực hiện hành trình (khách phải xác nhận sức khỏe trước chuyến bay).</p>
			<p>-	Số lượng khách tối đa trên mỗi chuyến bay: Giới hạn tùy theo loại dịch vụ xe lăn khách yêu cầu.</p>
			<p>-	Khách cần hỗ trợ lên xuống tàu bay: được yêu cầu phải có người từ 18 tuổi trở lên, đầy đủ sức khỏe đi cùng để hỗ trợ khách lên/xuống cầu thang (tại các sân bay không có thiết bị xe nâng) và trong khoang máy bay; Mỗi hành khách đi cùng với 01 khách cần hỗ trợ lên xuống tàu bay.</p>
			<p>-	Khách cần hỗ trợ trên tàu bay: Chúng tôi chỉ chấp nhận chuyên chở đối với hành khách chấp nhận việc không có thiết bị hỗ trợ trên khoang tàu bay và thõa mãn các điều kiện như khách cần hỗ trợ lên xuống tàu bay.
			</p>
			<p><b>2.	Dịch vụ cho khách khiếm thị (Blind- BLND):</b></p>
			<p>a.	Là dịch vụ trợ giúp cho hành khách mất khả năng cảm nhận thị giác một phần hoặc hoàn toàn, cần hỗ trợ đặc biệt.
</p>
			<p>b.	Điều kiện chấp nhận vận chuyển:</p>
			<p>-	Khách khiếm thị có người đi cùng: Chấp nhận vận chuyển như khách thông thường. Người đi cùng phải từ 18 tuổi trở lên, đủ sức khỏe và khả năng cảm nhận thị giác để hỗ trợ khách khiếm thị; Mỗi hành khách có thể đi kèm tối đa 02 hành khách khiếm thị.</p>
			<p>-	Khách khiếm thị không có người đi cùng: </p>
			<ul>
				<li>Khách cần phải đặt dịch vụ trước 24 tiếng so với giờ khởi hành dự kiến qua Phòng vé và Tổng đài của Vietjet.</li>
				<li>Hành khách có khả năng tự ăn uống và tự phục vụ bản thân trong suốt quá trình vận chuyển.</li>
				<li>Khách khiếm thị phải có người hỗ trợ tại sân bay khởi hành và sân bay đến.</li>
			</ul>
			<p><b>3.	Dịch vụ cho khách khiếm thính (Deaf- DEAF):</b></p>
			<p>a.	Là dịch vụ trợ giúp cho hành khách mất khả năng cảm nhận thính giác một phần hoặc hoàn toàn, cần hỗ trợ đặc biệt.</p>
			<p>b.	Điều kiện chấp nhận vận chuyển:</p>
			<p>-	Khách khiếm thính có người đi cùng: Chấp nhận vận chuyển như khách thông thường. Người đi cùng phải từ 18 tuổi trở lên, đủ sức khỏe và khả năng cảm nhận thính giác để hỗ trợ khách khiếm thính.</p>
			<p>-	Khách khiếm thính không có người đi cùng: </p>
			<ul>
				<li>Khách cần phải đặt dịch vụ trước 24 tiếng so với giờ khởi hành dự kiến qua Phòng vé và Tổng đài của Vietjet.</li>
				<li>Hành khách có khả năng tự ăn uống và tự phục vụ bản thân trong suốt quá trình vận chuyển.</li>
			</ul>
			<p><b>4.	Khách mua thêm ghế (Extra seat- EXST):</b></p>
			<p>a.	Là dịch vụ cung cấp cho hành khách có khổ người quá cỡ, cần sử dụng hai ghế ngồi cạnh nhau trên cùng chuyến bay; hoặc khách có nhu cầu mua thêm ghế để ngồi thoải mái.</p>
			<p>b.	Điều kiện chấp nhận vận chuyển:</p>
			<p>Hành khách có nhu cầu cần liên hệ với nhân viên Phòng vé, Đại lý và Tổng đài của Vietjet để mua thêm ghế.</p>
			<p>Mức phí áp dụng cho ghế mua thêm như mức phí mua thêm 01 chỗ tại thời điểm khách đặt dịch vụ.</p>
			<p><b>5.	Khách là phụ nữ có thai (Pregnant- PREG):</b></p>
			<p>Hành khách đang trong quá trình thai kỳ có nhu cầu đi lại bằng máy bay được yêu cầu phải thông báo cho Hãng chuyên chở tại sân bay và thỏa mãn các điều kiện sau:</p>
			<p>a.	Khách có thai được yêu cầu ký <strong style="color: red">“Giấy thỏa thuận trách nhiệm”</strong> cho Hãng hàng không. </p>
			<p>b.	Khách có thai trên 27 tuần đến 32 tuần: </p>
			<p>-	Khách được yêu cầu phải xuất trình được sổ/giấy khám thai thỏa mãn các điều kiện sau:</p>
			<ul>
				<li>Do các bác sĩ chuyên khoa xác nhận.</li>
				<li>Lần khám gần nhất không quá 07 ngày so với ngày khởi hành thực tế.</li>
				<li>Xác nhận tình trạng sức khỏe của khách và thai nhi tốt hoặc bình thường. Đối với tình trạng bất thường khách phải hoàn tất các thủ tục đảm bảo đủ sức khỏe thực hiện hành trình.</li>
			</ul>
			<p>c.	Khách có thai trên 32 tuần: VJC từ chối vận chuyển.</p>
			<p>d.	Đối với tình trạng sức khỏe của khách không bình thường; mang song thai trở lên; hoặc có thai bằng phương pháp thụ tinh nhân tạo; hoặc thai nhi phát triển không bình thường phải hoàn tất các thủ tục đảm bảo đủ sức khỏe thực hiện hành trình theo hướng dẫn như <b>khách phải xác nhận sức khỏe trước chuyến bay.</b></p>
			<p><b>6.	Khách phải xác nhận sức khỏe trước chuyến bay:</b></p>
			<p>a.	Khách phải xác nhận sức khỏe trước chuyến bay là hành khách có ít nhất một trong các dấu hiệu về tình trạng sức khỏe sau đây:</p>
			<p>-	Những hành khách bị giảm hoặc mất khả năng tự phục vụ do tình trạng thần kinh.</p>
			<p>-	Những hành khách bị thương tật, ốm đau hoặc tình trạng sức khỏe có thể gây ra những ảnh hưởng nghiêm trọng tới các hành khách khác trên chuyến bay.</p>
			<p>-	Phụ nữ có thai bao gồm: tình trạng sức khỏe không bình thường; mang song thai trở lên; hoặc có thai bằng phương pháp thụ tinh nhân tạo; hoặc thai nhi phát triển không bình thường.</p>
			<p>-	Trẻ sơ sinh có sức khỏe không bình thường, bị sinh non.</p>
			<p>-	Hành khách mà tình trạng sức khỏe có thể xấu đi do việc vận chuyển bằng đường hàng không như: khách bị bệnh phổi, các bệnh về tai hoặc xoang, xương gãy mới bó bột, mới được phẫu thuật, mới thực hiện thụ tinh nhân tạo, dị ứng trong tình trạng nghiêm trọng, v.v…</p>
			<p>-	Khách bị bệnh lây nhiễm như: thủy đậu, cúm gà, bệnh lao phổi, bệnh sởi, quai bị, v.v…</p>
			<p>b.	Điều kiện chấp nhận vận chuyển:</p>
			<p>-	Điều kiện về người đi cùng:</p>
			<ul>
				<li>Khách có khả năng tự đi lại, tự phục vụ bản thân trong suốt quá trình vận chuyển, được chấp nhận vận chuyển khi không có người đi cùng.</li>
				<li>Khách không có khả năng tự đi lại, tự phục vụ bản thân trong suốt quá trình vận chuyển: bắt buộc phải có người đi cùng. Người đi cùng được yêu cầu: từ 18 tuổi trở lên; Đủ sức khỏe hỗ trợ khách trong suốt quá trình vận chuyển; Mỗi hành khách chỉ đi cùng với một hành khách cần phải xác nhận sức khỏe trước chuyến bay.</li>
			</ul>
			<p>-	Điều kiện về xác nhận sức khỏe: Khách phải hoàn thành giấy xác nhận sức khỏe theo các yêu cầu sau:</p>
			<p>	Tại Việt Nam: Các bệnh viện đa khoa hoặc chuyên khoa cấp trung ương, tỉnh, thành phố, huyện, quận hoặc tương đương; Các bệnh viện tư nhân và quốc tế; Phòng khám đa khoa quốc tế.</p>
			<p>	Tại các nước khác: Các cơ sở ý tế có tư cách pháp nhân.</p>
			<ul>
				<li>Giấy xác nhận sức khỏe theo mẫu của VJC <b style="color: red">“Giấy xác nhận sức khỏe”</b>. </li>
				<li>Việc xác nhận sức khỏe không vượt quá 07 ngày so với ngày khởi hành thực tế.</li>
				<li>VJC từ chối chuyên chở đối với các trường hợp: </li>
				<ul>
					<li>	Dự đoán chiều hướng bệnh tật của khách sẽ xấu đi trong hành trình bay dự kiến và/hoặc</li>
					<li>Tình trạng bệnh của khách có thể ảnh hưởng đến các khách khác.</li>
				</ul>
			</ul>
			<a href="#">Quay lên đầu trang</a>
			</div>
			
			<hr>
			<div style="float: left; width: 70%;">
			<span><label id="shrink4"><h4><b>Dịch vụ Skyboss.</b></h4></label></span>
			</div>
			<div class="i4" style="float: right; width: 5%; text-align: center;">
					<label for="DV4"><i class="fas fa-arrow-circle-down"></i></label>
			</div>
			<div class="clearfix"></div>
			<div class="DV4"">
				<div>
					<ul>
						<li>Bạn là người sành điệu và luôn tiên phong trong xã hội,</li>
						<li>Bạn luôn tận hưởng mỗi phút giây quý giá của mình, </li>
						<li>Bạn luôn dẫn đầu phong cách tiêu dùng thông minh, </li>
						<li>Bạn bè & nhân viên của bạn đã bay cùng Vietjet, còn bạn???</li>
						<li>Vietjet sáng tạo SkyBoss dành riêng cho bạn với những ưu đãi và tiện tích vượt trội.</li>
					</ul>
					<p><b>Phòng chờ sang trọng </b></p>
					<p>Bạn được tiếp đón trong không gian phòng chờ sang trọng để thư giãn, làm việc, giải trí với các tiện nghi sẵn sàng trong lúc chờ đợi chuyến bay.</p>
					<ul>
						<li>Khu vực riêng tư và yên tĩnh</li>
						<li>Nội thất sang trọng</li>
						<li>Mạng Internet, wifi miễn phí</li>
						<li>Danh mục ấn phẩm báo/ tạp chí đa dạng</li>
						<li>Dịch vụ quầy bar, đồ ăn nhẹ</li>
						<li>Đội ngũ phục vụ thân thiện, chuyên nghiệp</li>
					</ul>
					<p>Tùy thuộc cơ sở hạ tầng của từng sân bay, một số tiện nghi nêu trên có thể được linh hoạt thay đổi</p>
					<br>
					<p><b>Dịch vụ ưu tiên dành riêng cho bạn </b></p>
					<p>Với SkyBoss, bạn được tận hưởng những dịch vụ ưu tiên tại sân bay:</p>
					<ul>
						<li>Ưu tiên làm thủ tục check- in</li>
						<li>Ưu tiên phục vụ hành lý</li>
						<li>Miễn cước 30 kg hành lý ký gửi & 10kg hành lý xách tay</li>
						<li>Ưu tiên chọn chỗ ngồi trên chuyến bay</li>
						<li>Phục vụ xe riêng ra máy bay </li>
						<li>Phục vụ 01 thức uống & 01 suất ăn nóng trên tàu bay</li>
					</ul>
				</div>	
			</div>
			
			<hr>
		</div>
		<!-- Đánh content ở đây -->



		<!-- /content -->

		<!-- footer -->
		<div id="footer"  class="container" align="center" style="padding: 20px 0px 20px 0px;">
			<span class="text-muted" class="section" >©2019 Đại học Tôn Đức Thắng </span>
		</div>
		<!-- /footer -->

		
		
		<script type="text/javascript">
				$(document).ready(function(){
					$(".DV1").hide();
					$(".DV2").hide();
					$(".DV3").hide();
					$(".DV4").hide();
					$(".DV5").hide();
					$(".DV6").hide();
					$('.menu-toggle').click(function(){
						$('.menu-toggle').toggleClass('active')
						$('nav').toggleClass('active')
					})
					$(".i4").click(function(){
					  $(".DV4").toggle();
					})
					$(".i3").click(function(){
					  $(".DV3").toggle();
					})
					$(".i2").click(function(){
					  $(".DV2").toggle();
					})
					$(".i1").click(function(){
					  $(".DV1").toggle();
					})
					$("#shrink1").click(function(){
					  $(".DV1").toggle();
					})
					$("#shrink2").click(function(){
					  $(".DV2").toggle();
					})
					$("#shrink3").click(function(){
					  $(".DV3").toggle();
					})
					$("#shrink4").click(function(){
					  $(".DV4").toggle();
					})
					$("#shrink5").click(function(){
					  $(".DV5").toggle();
					})
					$("#shrink6").click(function(){
					  $(".DV6").toggle();
					})
					;
				})
			</script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	</body>
</html>