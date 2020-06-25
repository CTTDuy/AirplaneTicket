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
		<title>Guest_Login.php</title>
		
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
				<?php  
				if (isset($_POST['guestUsername']) && isset($_POST['pass'])) {
					require_once("connectDB.php");
				
					$username = $_POST['guestUsername'];
					
					$sql = "SELECT * FROM guestacc WHERE guestUsername = '$username'";
					$result = $conn->query($sql) or die($conn->error);
					$row = $result->fetch_assoc();


				
					if ($_POST['pass'] == $row['psswd']) {
						setcookie("user", $username, time() + 600, "/");
						header('Location:Homepage.php');
					} 
					else {
						echo "<div class='alert alert-danger'> Invalid username or password </div>";
					}
				}
				
				?>
		<div id="header">
			<!-- <header> -->
			<a href="Homepage.php" class="logo"><img src="TDT_logo.png" alt="logo" href="#" width="100px" height="50px"></a>
			<div class="clearfix"></div>
			<!-- </header> -->
		</div>
		<!-- Content -->
		<div id="content" class="container">
	
				
				<legend>Trang đăng nhập</legend>
				<form action="guestLogin.php" method="POST">

					<div class="container" style="padding: 16px;">

						<label for="guestUsername"><b>Username</b></label>
						<input type="text" placeholder="Enter Username" id="guestUsername" name="guestUsername"  required>

						<label for="pass"><b>Password</b></label>
						<input type="password" placeholder="Enter Password" id="pass" name="pass" required> 
						 
						<u><a href="Dangky.php" style="padding-right: 20px;">Register</a></u>
					    
					    <div class="Login-button">
					    <button type="submit">Login</button>
					    </div>
					    
					</div>
				</form>
				
		</div>
		<!-- Footer -->

		<div id="footer"  class="container" align="center" style="padding: 20px 0px 20px 0px;">
			<span class="text-muted" class="section" >©2019 Đại học Tôn Đức Thắng </span>
		</div>

		
		

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	</body>
</html>