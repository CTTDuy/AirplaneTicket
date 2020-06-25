
<!DOCTYPE html>
<html>
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		<!--<link rel="stylesheet" type="text/css" href="styleLogin.css">-->
		<title>Dangky.php</title>
		
		<style type="text/css">
		body
{
	margin: 0;
	padding: 0;
	font-family: sans-serif;
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
	max-height: 3600px;
	margin-top: 5px;
	margin-bottom: 5px;
	padding: 10px;
	position: sticky;
	width: 100%;
	height: 80vh;
	background: white;
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
.clearfix
{
	clear: both;
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
/*nav ul li a.active,*/
nav ul li a:hover{
	background: #ff8080;
	color: #fff;
	transition: 0.5s;
}
@media (max-width: 1200px)
{
	header
	{
		margin: 20px;
	}
}
@media (max-width: 825px)
{
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
input[type=text], input[type=password] {
	width: 100%;
	padding: 12px 20px;
	margin: 8px 0;
	display: inline-block;
	border: 1px solid #ccc;
	box-sizing: border-box;
	border-radius: 5px 5px 5px 5px;
}
.Login-button button{

  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

.G-button button a:hover{
	
	text-decoration: none;

}
form{
	border: solid;
	border-width: 3px;
	border-radius: 10px 10px 10px 10px;
}	
</style>
</head>
<body>


<div id="header">
			
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

	<form action = "register.php" method = "post">
  <div class="container">
  
    <h1>Register</h1>
    <p>Nhập đầy đủ thông tin để tạo tài khoản</p>
    <hr>

    <td><b>Username</b></td>
    <input type="text" placeholder="Enter Username" name="username" required>
	
	 <td><b>Password</b></td>
    <input type="text" placeholder="Enter password" name="password" required>
	
	<td><b>First Name</b></td>
    <input type="text" placeholder="Enter Firstname" name="FirstN" required>
	
	<td><b>Last Name</b></td>
    <input type="text" placeholder="Enter Lastname" name="LastN" required>

    <td><b>Birth day</b></td>
    <input type="text" placeholder="Enter Birthday" name="Birthday" required>
	
	<td><b>Address</b></td>
    <input type="text" placeholder="Enter Address" name="Add" required>
	
	<td><b>Telephone number</b></td>
    <input type="text" placeholder="Enter Telephonenumber" name="Tele" required>

    <td><b>Email</b></td>
    <input type="text" placeholder="Repeat Email" name="email" required>
    <hr>
   

    <button type="submit" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="guestLogin.php">Sign in</a>.</p>
  </div>
</form>

</body>
</html>