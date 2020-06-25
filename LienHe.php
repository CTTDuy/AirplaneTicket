<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		
	<style type="text/css">
		html, body, #map-canvas { height: 100%; margin: 0; padding: 0;}
	</style>
   <style>
			html{
	min-width: 350px;

}
.container{top: 50%;  /* position the top  edge of the element at the middle of the parent */
    left: 50%; /* position the left edge of the element at the middle of the parent */

    transform: translate(-50%, -50%);}
body
{
	margin: 0;
	padding: 0;
	font-family: 'Open Sans', sans-serif;
	background: url(bg.jpg);
	/*cho màn background full scale*/
	-webkit-background-size: cover;  
   	-moz-background-size: cover;  
   	-o-background-size: cover;  
  	background-size: cover; 
	background-attachment: fixed;
}
#header
{
	position: relative;
	max-width: 1200px;
	margin: 20px auto;
	padding: 2px;
	background: #FFFFFC;
	box-sizing: border-box 20px 20px 20px 20px;
	border-radius: 4px;
	box-shadow: 0 2px 5px rgba(0,0,0,.2);
}

#content
{

	position: relative;
	max-width: 1200px;
	/*max-height: 10000px;*/
	margin-top: 5px;
	margin-bottom: 5px;
	padding: 10px;
	position: sticky;
	width: 100%;
	/*height: 300vh;
	overflow: auto;*/
	background: white;
}

hr {
	height: 10px;
	border: 0;
	box-shadow: 0 10px 10px -10px #8c8b8b inset;
}
.row{
	margin: 20px auto;
}
.section{
	position: relative;
}
#footer{
	max-width: 1200px;
	max-height: 500px;
	background: black;
	text-align: center;
}

.logo
{
	color: black;
	height: 60px;
	font-size: 36px;
	line-height: 60px;
	padding: 0 20px;
	text-align: center;
	box-sizing: border-box;
	float: left;
	font-weight: 700;
	text-decoration: none;
}
nav
{
	float: right;
}
nav ul
{
	margin: 0;
	padding: 0;
	display: flex;
}
nav ul li
{
	list-style: none;
}
nav ul li a
{
	display: block;
	margin: 10px 0;
	padding: 10px 20px;
	text-decoration: none;
	color: #262626;
}
nav ul li a.active{
	background-color: #262626;
	color: #fff;
	transition: 0.5s;
	background-color: pink;
}
/*nav ul li a.active,*/
nav ul li a:hover{
	background: #ff8080;
	color: #fff;
	transition: 0.5s;
}
@media (max-width: 1200px){
	header
	{
		margin: 20px;
	}
}
@media (max-width: 1100px){
	.lua-chon{
		display: none;
	}
}
@media (max-width: 825px){
	
	.menu-toggle
	{
		margin: 20px;
		width: 40px;
		height: 40px;
		margin: 10px;
		background: #ffe6e6;
		float: right;
		cursor: pointer;
		text-align: center;
		font-size: 30px;
		color: #ff8080;
	}
	.menu-toggle:before
	{
		content:'\f0c9';
		font-family: fontAwesome;
		line-height: 40px;
	}
	.menu-toggle.active:before
	{
		content: '\f00d';
	}

	nav
	{
		display: none;
	}
	nav.active
	{
		display: block;
		width: 100%;
	}
	nav.active ul
	{
		display: block;
	}
	nav.active ul li
	{
		margin: 0;
	}
}

@media (max-width: 500px){
	.carousel-inner img {
	width: 100%;
	height: 246px;
 }
}

.card{
	width: 20rem;
}
#footer{
	text-align: center;
	padding: 20px 20px 20px 20px;
}
.btn-dark{
	min-height: 48px;
	border-radius: 10px 10px 10px 10px;
}
		</style>
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
						<li><a href="Tintuc.php" >Tin tức<i class="fas fa-newspaper" style='font-size:14px; margin-left:10px;'></i></a></li>
						<li><a href="Dichvu.php" >Dịch vụ<i class="fas fa-concierge-bell" style='font-size:14px; margin-left:10px;'></i></a></li>
						<li><a href="Vechungtoi.php" >Về chúng tôi<i class="fab fa-avianex" style='font-size:14px; margin-left:10px;'></i></a></li>
						<li><a href="Lienhe.php" class="active" >Liên hệ<i class="fas fa-phone-square" style='font-size:14px; margin-left:10px;'></i></a></li>
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

		<div id="map-canvas" class="container">
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeULBLLWvZRAQ7pDXs9s0T_tUQzpSClNc"></script>
		<script type="text/javascript">
			var map,
				infowindow,
				marker = new Array(),
				old_id = 0,
				defaultLatLng = new google.maps.LatLng(10.732205, 106.699415),
				infoWindowArray = new Array(),
				infowindow_array = new Array();
			function loadMarker(myLocation, myInfoWindow, id){
				marker[id] = new google.maps.Marker({position: myLocation, map: map, visible:true});
				var popup = myInfoWindow;
				infowindow_array[id] = new google.maps.InfoWindow({ content: popup});
				google.maps.event.addListener(marker[id], 'mouseover', function() {
					if (id == old_id) return;
					if (old_id > 0) infowindow_array[old_id].close();
					infowindow_array[id].open(map, marker[id]);
					old_id = id;
				});
				google.maps.event.addListener(infowindow_array[id], 'closeclick', function() {
					old_id = 0;
				});
			}
			function moveToMaker(id){
				var location = marker[id].position;
				map.setCenter(location);
				if (old_id > 0) infowindow_array[old_id].close();
				infowindow_array[id].open(map, marker[id]);
				old_id = id;
			}
			function initialize() {
				var mapOptions = {
					center: defaultLatLng,
					zoom: 16,
					scrollwheel : true,
					mapTypeId: google.maps.MapTypeId.ROADMAP
				};
				map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
				map.setCenter(defaultLatLng);

				infoWindowArray[7895] = '<div class="map_description"><div class="map_title">Trường ĐH Tôn Đức Thắng</div><div>7 Ward District, 19 Đường Đường Nguyễn Hữu Thọ, Tân Hưng, Quận 7, Hồ Chí Minh, Việt Nam</div><div>Sđt: +84 28 3775 5035</div><div>Website: tdtu.edu.vn</div></div>';
				loadMarker(defaultLatLng, infoWindowArray[7895], 7895);

				moveToMaker(7895);
			}
			google.maps.event.addDomListener(window, 'load', initialize);
		</script>
	</div>
	
	</body>
</html>