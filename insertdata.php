
<?php
//tạo database
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect("localhost", "root", "");
mysqli_query($conn,"SET NAMES 'UTF8'");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE AirBookingDB";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

<?php
	include 'connectDB.php';
	//Tạo bảng
	$sql = "CREATE TABLE carouselHomepage(
		Id_carousel VARCHAR(30) NOT NULL primary key,
		Name_carousel VARCHAR(30) NOT NULL,
		Picture_carousel VARCHAR(300) NOT NULL,
		Description_carousel VARCHAR(300) NOT NULL
	)ENGINE=InnoDB DEFAULT CHARSET=utf8;
	";
 	if ($conn->query($sql) === TRUE) {
	    echo "Table created successfully";
	}
	else {
		echo "Error creating table: " . $conn->error;
	}

	$conn->close();
?>

<?php
	include 'connectDB.php';
	//Tạo bảng
	$sql = "CREATE TABLE flightHomepage(
		Id_chuyenbay VARCHAR(30) NOT NULL primary key,
		Name_chuyenbay VARCHAR(30) NOT NULL,
		Picture_chuyenbay VARCHAR(300) NOT NULL,
		Description VARCHAR(300) NOT NULL
	)ENGINE=InnoDB DEFAULT CHARSET=utf8;
	";
 	if ($conn->query($sql) === TRUE) {
	    echo "Table created successfully";
	}
	else {
		echo "Error creating table: " . $conn->error;
	}

	$conn->close();
?>

<?php
	include 'connectDB.php';
	//Tạo bảng
	$sql = "CREATE TABLE flightList(
		Id_chuyenbay VARCHAR(30) NOT NULL primary key,
		Name_chuyenbay VARCHAR(30) NOT NULL,
		From_chuyenbay VARCHAR(30) NOT NULL,
		To_chuyenbay VARCHAR(30) NOT NULL,
		Date_chuyenbay TEXT NOT NULL,
		Time_fly TIME NOT NULL,
		Time_arrive TIME NOT NULL,
		Picture_chuyenbay VARCHAR(300) NOT NULL
	)ENGINE=InnoDB DEFAULT CHARSET=utf8;
	";
 	if ($conn->query($sql) === TRUE) {
	    echo "Table created successfully";
	}
	else {
		echo "Error creating table: " . $conn->error;
	}

	$conn->close();
?>
<?php
	include 'connectDB.php';
	//Tạo bảng
	$sql = "CREATE TABLE adminAcc(
		adminUsername VARCHAR(30) NOT NULL UNIQUE primary key,
		psswd VARCHAR(30) NOT NULL
	)ENGINE=InnoDB DEFAULT CHARSET=utf8;
	";
 	if ($conn->query($sql) === TRUE) {
	    echo "Table created successfully";
	}
	else {
		echo "Error creating table: " . $conn->error;
	}

	$conn->close();
?>
<?php
	include 'connectDB.php';
	//tạo bảng
	$sql = "CREATE TABLE guestAcc(
		guestUsername VARCHAR(30) NOT NULL UNIQUE primary key,
		psswd VARCHAR(30) NOT NULL,
		Firstname NVARCHAR(30) NOT NULL,
		Lastname NVARCHAR(30) NOT NULL,
		Bday TEXT NOT NULL,
		Address TEXT NOT NULL,
		Tel int(10) NOT NULL,
		Email VARCHAR(30) NOT NULL
	)ENGINE=InnoDB DEFAULT CHARSET=utf8;
	";
 	if ($conn->query($sql) === TRUE) {
	    echo "Table created successfully";
	}
	else {
		echo "Error creating table: " . $conn->error;
	}

	$conn->close();
?>
<?php
	include 'connectDB.php';
	//Tạo bảng
	$sql = "CREATE TABLE flightBooking(
		Id_chuyenbay VARCHAR(30) NOT NULL,
		Namechuyenbay VARCHAR(30) NOT NULL,
		Fromchuyenbay VARCHAR(30) NOT NULL,
		Tochuyenbay VARCHAR(30) NOT NULL,
		NgayBay TEXT NOT NULL,
		Giobay VARCHAR(30) NOT NULL,
		Giotoi VARCHAR(30) NOT NULL,
		Ghengoi VARCHAR(30) NOT NULL,
		Thanhtien text NOT NULL,
		Ho VARCHAR(30) NOT NULL,
		Ten VARCHAR(30) NOT NULL,
		Bday text NOT NULL,
		address text NOT NULL,
		tel VARCHAR(30) NOT NULL,
		email VARCHAR(30) NOT NULL,
	CONSTRAINT fk_Id_chuyenbay FOREIGN KEY (Id_chuyenbay) REFERENCES flightList (Id_chuyenbay)
	)ENGINE=InnoDB DEFAULT CHARSET=utf8;
	";
 	if ($conn->query($sql) === TRUE) {
	    echo "Table created successfully";
	}
	else {
		echo "Error creating table: " . $conn->error;
	}

	$conn->close();
?>
<?php
	include 'connectDB.php';
	//Tạo bảng
	$sql = "CREATE TABLE Seats(
		seatID VARCHAR(30) NOT NULL primary key,
		properties VARCHAR(30),
		price text NOT NULL,
		row text NOT NULL
	)ENGINE=InnoDB DEFAULT CHARSET=utf8;
	";
 	if ($conn->query($sql) === TRUE) {
	    echo "Table created successfully";
	}
	else {
		echo "Error creating table: " . $conn->error;
	}

	$conn->close();
?>



<?php
	include 'connectDB.php';
	//Tạo bảng
	$sql = "CREATE TABLE VN0001(
		seatID VARCHAR(30) NOT NULL primary key,
		properties VARCHAR(30),
		price text NOT NULL,
		row text NOT NULL
	)ENGINE=InnoDB DEFAULT CHARSET=utf8;
	";
 	if ($conn->query($sql) === TRUE) {
	    echo "Table created successfully";
	}
	else {
		echo "Error creating table: " . $conn->error;
	}

	$conn->close();
?>

<?php
	include 'connectDB.php';
	//Tạo bảng
	$sql = "CREATE TABLE VN0002(
		seatID VARCHAR(30) NOT NULL primary key,
		properties VARCHAR(30),
		price text NOT NULL,
		row text NOT NULL
	)ENGINE=InnoDB DEFAULT CHARSET=utf8;
	";
 	if ($conn->query($sql) === TRUE) {
	    echo "Table created successfully";
	}
	else {
		echo "Error creating table: " . $conn->error;
	}

	$conn->close();
?>

<?php
	include 'connectDB.php';
	//Tạo bảng
	$sql = "CREATE TABLE VN0003(
		seatID VARCHAR(30) NOT NULL primary key,
		properties VARCHAR(30),
		price text NOT NULL,
		row text NOT NULL
	)ENGINE=InnoDB DEFAULT CHARSET=utf8;
	";
 	if ($conn->query($sql) === TRUE) {
	    echo "Table created successfully";
	}
	else {
		echo "Error creating table: " . $conn->error;
	}

	$conn->close();
?>

<?php
	include 'connectDB.php';
	//Tạo bảng
	$sql = "CREATE TABLE VN0004(
		seatID VARCHAR(30) NOT NULL primary key,
		properties VARCHAR(30),
		price text NOT NULL,
		row text NOT NULL
	)ENGINE=InnoDB DEFAULT CHARSET=utf8;
	";
 	if ($conn->query($sql) === TRUE) {
	    echo "Table created successfully";
	}
	else {
		echo "Error creating table: " . $conn->error;
	}

	$conn->close();
?>
<?php
	include 'connectDB.php';
	//Tạo bảng
	$sql = "CREATE TABLE VN0005(
		seatID VARCHAR(30) NOT NULL primary key,
		properties VARCHAR(30),
		price text NOT NULL,
		row text NOT NULL
	)ENGINE=InnoDB DEFAULT CHARSET=utf8;
	";
 	if ($conn->query($sql) === TRUE) {
	    echo "Table created successfully";
	}
	else {
		echo "Error creating table: " . $conn->error;
	}

	$conn->close();
?>

<?php
	include 'connectDB.php';
	//Tạo bảng
	$sql = "CREATE TABLE VN0006(
		seatID VARCHAR(30) NOT NULL primary key,
		properties VARCHAR(30),
		price text NOT NULL,
		row text NOT NULL
	)ENGINE=InnoDB DEFAULT CHARSET=utf8;
	";
 	if ($conn->query($sql) === TRUE) {
	    echo "Table created successfully";
	}
	else {
		echo "Error creating table: " . $conn->error;
	}

	$conn->close();
?>

<?php
	include 'connectDB.php';
	//Tạo bảng
	$sql = "CREATE TABLE VN0007(
		seatID VARCHAR(30) NOT NULL primary key,
		properties VARCHAR(30),
		price text NOT NULL,
		row text NOT NULL
	)ENGINE=InnoDB DEFAULT CHARSET=utf8;
	";
 	if ($conn->query($sql) === TRUE) {
	    echo "Table created successfully";
	}
	else {
		echo "Error creating table: " . $conn->error;
	}

	$conn->close();
?>
<?php
	include 'connectDB.php';
	//Tạo bảng
	$sql = "CREATE TABLE VN0008(
		seatID VARCHAR(30) NOT NULL primary key,
		properties VARCHAR(30),
		price text NOT NULL,
		row text NOT NULL
	)ENGINE=InnoDB DEFAULT CHARSET=utf8;
	";
 	if ($conn->query($sql) === TRUE) {
	    echo "Table created successfully";
	}
	else {
		echo "Error creating table: " . $conn->error;
	}

	$conn->close();
?>
<?php
	include 'connectDB.php';
	//Tạo bảng
	$sql = "CREATE TABLE VN0009(
		seatID VARCHAR(30) NOT NULL primary key,
		properties VARCHAR(30),
		price text NOT NULL,
		row text NOT NULL
	)ENGINE=InnoDB DEFAULT CHARSET=utf8;
	";
 	if ($conn->query($sql) === TRUE) {
	    echo "Table created successfully";
	}
	else {
		echo "Error creating table: " . $conn->error;
	}

	$conn->close();
?>
<?php
	include 'connectDB.php';
	//Tạo bảng
	$sql = "CREATE TABLE VN0010(
		seatID VARCHAR(30) NOT NULL primary key,
		properties VARCHAR(30),
		price text NOT NULL,
		row text NOT NULL
	)ENGINE=InnoDB DEFAULT CHARSET=utf8;
	";
 	if ($conn->query($sql) === TRUE) {
	    echo "Table created successfully";
	}
	else {
		echo "Error creating table: " . $conn->error;
	}

	$conn->close();
?>
<?php
	include 'connectDB.php';
	//Tạo bảng
	$sql = "CREATE TABLE VN0011(
		seatID VARCHAR(30) NOT NULL primary key,
		properties VARCHAR(30),
		price text NOT NULL,
		row text NOT NULL
	)ENGINE=InnoDB DEFAULT CHARSET=utf8;
	";
 	if ($conn->query($sql) === TRUE) {
	    echo "Table created successfully";
	}
	else {
		echo "Error creating table: " . $conn->error;
	}

	$conn->close();
?>
<?php
	include 'connectDB.php';
	//Tạo bảng
	$sql = "CREATE TABLE VN0012(
		seatID VARCHAR(30) NOT NULL primary key,
		properties VARCHAR(30),
		price text NOT NULL,
		row text NOT NULL
	)ENGINE=InnoDB DEFAULT CHARSET=utf8;
	";
 	if ($conn->query($sql) === TRUE) {
	    echo "Table created successfully";
	}
	else {
		echo "Error creating table: " . $conn->error;
	}

	$conn->close();
?>
<?php
	include 'connectDB.php';
	//Tạo bảng
	$sql = "CREATE TABLE VN0013(
		seatID VARCHAR(30) NOT NULL primary key,
		properties VARCHAR(30),
		price text NOT NULL,
		row text NOT NULL
	)ENGINE=InnoDB DEFAULT CHARSET=utf8;
	";
 	if ($conn->query($sql) === TRUE) {
	    echo "Table created successfully";
	}
	else {
		echo "Error creating table: " . $conn->error;
	}

	$conn->close();
?>
<?php
	include 'connectDB.php';
	//Tạo bảng
	$sql = "CREATE TABLE VN0014(
		seatID VARCHAR(30) NOT NULL primary key,
		properties VARCHAR(30),
		price text NOT NULL,
		row text NOT NULL
	)ENGINE=InnoDB DEFAULT CHARSET=utf8;
	";
 	if ($conn->query($sql) === TRUE) {
	    echo "Table created successfully";
	}
	else {
		echo "Error creating table: " . $conn->error;
	}

	$conn->close();
?>
<?php
	include 'connectDB.php';
	//Tạo bảng
	$sql = "CREATE TABLE VN0015(
		seatID VARCHAR(30) NOT NULL primary key,
		properties VARCHAR(30),
		price text NOT NULL,
		row text NOT NULL
	)ENGINE=InnoDB DEFAULT CHARSET=utf8;
	";
 	if ($conn->query($sql) === TRUE) {
	    echo "Table created successfully";
	}
	else {
		echo "Error creating table: " . $conn->error;
	}

	$conn->close();
?>
<?php
	include 'connectDB.php';
	//Tạo bảng
	$sql = "CREATE TABLE VN0016(
		seatID VARCHAR(30) NOT NULL primary key,
		properties VARCHAR(30),
		price text NOT NULL,
		row text NOT NULL
	)ENGINE=InnoDB DEFAULT CHARSET=utf8;
	";
 	if ($conn->query($sql) === TRUE) {
	    echo "Table created successfully";
	}
	else {
		echo "Error creating table: " . $conn->error;
	}

	$conn->close();
?>
<?php
	include 'connectDB.php';
	//Tạo bảng
	$sql = "CREATE TABLE VN0017(
		seatID VARCHAR(30) NOT NULL primary key,
		properties VARCHAR(30),
		price text NOT NULL,
		row text NOT NULL
	)ENGINE=InnoDB DEFAULT CHARSET=utf8;
	";
 	if ($conn->query($sql) === TRUE) {
	    echo "Table created successfully";
	}
	else {
		echo "Error creating table: " . $conn->error;
	}

	$conn->close();
?>
<?php
	include 'connectDB.php';
	//Tạo bảng
	$sql = "CREATE TABLE VN0018(
		seatID VARCHAR(30) NOT NULL primary key,
		properties VARCHAR(30),
		price text NOT NULL,
		row text NOT NULL
	)ENGINE=InnoDB DEFAULT CHARSET=utf8;
	";
 	if ($conn->query($sql) === TRUE) {
	    echo "Table created successfully";
	}
	else {
		echo "Error creating table: " . $conn->error;
	}

	$conn->close();
?>
<?php
	include 'connectDB.php';
	//Tạo bảng
	$sql = "CREATE TABLE VN0019(
		seatID VARCHAR(30) NOT NULL primary key,
		properties VARCHAR(30),
		price text NOT NULL,
		row text NOT NULL
	)ENGINE=InnoDB DEFAULT CHARSET=utf8;
	";
 	if ($conn->query($sql) === TRUE) {
	    echo "Table created successfully";
	}
	else {
		echo "Error creating table: " . $conn->error;
	}

	$conn->close();
?>
<?php
	include 'connectDB.php';
	//Tạo bảng
	$sql = "CREATE TABLE VN0020(
		seatID VARCHAR(30) NOT NULL primary key,
		properties VARCHAR(30),
		price text NOT NULL,
		row text NOT NULL
	)ENGINE=InnoDB DEFAULT CHARSET=utf8;
	";
 	if ($conn->query($sql) === TRUE) {
	    echo "Table created successfully";
	}
	else {
		echo "Error creating table: " . $conn->error;
	}

	$conn->close();
?>
<?php
	include 'connectDB.php';
	//Tạo bảng
	$sql = "CREATE TABLE VN0021(
		seatID VARCHAR(30) NOT NULL primary key,
		properties VARCHAR(30),
		price text NOT NULL,
		row text NOT NULL
	)ENGINE=InnoDB DEFAULT CHARSET=utf8;
	";
 	if ($conn->query($sql) === TRUE) {
	    echo "Table created successfully";
	}
	else {
		echo "Error creating table: " . $conn->error;
	}

	$conn->close();
?>
<?php
	include 'connectDB.php';
	//Tạo bảng
	$sql = "CREATE TABLE VN0022(
		seatID VARCHAR(30) NOT NULL primary key,
		properties VARCHAR(30),
		price text NOT NULL,
		row text NOT NULL
	)ENGINE=InnoDB DEFAULT CHARSET=utf8;
	";
 	if ($conn->query($sql) === TRUE) {
	    echo "Table created successfully";
	}
	else {
		echo "Error creating table: " . $conn->error;
	}

	$conn->close();
?>
<?php
	include 'connectDB.php';
	//Tạo bảng
	$sql = "CREATE TABLE VN0023(
		seatID VARCHAR(30) NOT NULL primary key,
		properties VARCHAR(30),
		price text NOT NULL,
		row text NOT NULL
	)ENGINE=InnoDB DEFAULT CHARSET=utf8;
	";
 	if ($conn->query($sql) === TRUE) {
	    echo "Table created successfully";
	}
	else {
		echo "Error creating table: " . $conn->error;
	}

	$conn->close();
?>
<?php
	include 'connectDB.php';
	//Tạo bảng
	$sql = "CREATE TABLE VN0024(
		seatID VARCHAR(30) NOT NULL primary key,
		properties VARCHAR(30),
		price text NOT NULL,
		row text NOT NULL
	)ENGINE=InnoDB DEFAULT CHARSET=utf8;
	";
 	if ($conn->query($sql) === TRUE) {
	    echo "Table created successfully";
	}
	else {
		echo "Error creating table: " . $conn->error;
	}

	$conn->close();
?>
<?php
	include 'connectDB.php';
	//Tạo bảng
	$sql = "CREATE TABLE VN0025(
		seatID VARCHAR(30) NOT NULL primary key,
		properties VARCHAR(30),
		price text NOT NULL,
		row text NOT NULL
	)ENGINE=InnoDB DEFAULT CHARSET=utf8;
	";
 	if ($conn->query($sql) === TRUE) {
	    echo "Table created successfully";
	}
	else {
		echo "Error creating table: " . $conn->error;
	}

	$conn->close();
?>
<?php
	include 'connectDB.php';
	//Tạo bảng
	$sql = "CREATE TABLE VN0026(
		seatID VARCHAR(30) NOT NULL primary key,
		properties VARCHAR(30),
		price text NOT NULL,
		row text NOT NULL
	)ENGINE=InnoDB DEFAULT CHARSET=utf8;
	";
 	if ($conn->query($sql) === TRUE) {
	    echo "Table created successfully";
	}
	else {
		echo "Error creating table: " . $conn->error;
	}

	$conn->close();
?>
<?php
	include 'connectDB.php';
	//Tạo bảng
	$sql = "CREATE TABLE VN0027(
		seatID VARCHAR(30) NOT NULL primary key,
		properties VARCHAR(30),
		price text NOT NULL,
		row text NOT NULL
	)ENGINE=InnoDB DEFAULT CHARSET=utf8;
	";
 	if ($conn->query($sql) === TRUE) {
	    echo "Table created successfully";
	}
	else {
		echo "Error creating table: " . $conn->error;
	}

	$conn->close();
?>
<?php
	include 'connectDB.php';
	//Tạo bảng
	$sql = "CREATE TABLE VN0028(
		seatID VARCHAR(30) NOT NULL primary key,
		properties VARCHAR(30),
		price text NOT NULL,
		row text NOT NULL
	)ENGINE=InnoDB DEFAULT CHARSET=utf8;
	";
 	if ($conn->query($sql) === TRUE) {
	    echo "Table created successfully";
	}
	else {
		echo "Error creating table: " . $conn->error;
	}

	$conn->close();
?>
<?php
	include 'connectDB.php';
	//Tạo bảng
	$sql = "CREATE TABLE VN0029(
		seatID VARCHAR(30) NOT NULL primary key,
		properties VARCHAR(30),
		price text NOT NULL,
		row text NOT NULL
	)ENGINE=InnoDB DEFAULT CHARSET=utf8;
	";
 	if ($conn->query($sql) === TRUE) {
	    echo "Table created successfully";
	}
	else {
		echo "Error creating table: " . $conn->error;
	}

	$conn->close();
?>
<?php
	include 'connectDB.php';
	//Tạo bảng
	$sql = "CREATE TABLE VN0030(
		seatID VARCHAR(30) NOT NULL primary key,
		properties VARCHAR(30),
		price text NOT NULL,
		row text NOT NULL
	)ENGINE=InnoDB DEFAULT CHARSET=utf8;
	";
 	if ($conn->query($sql) === TRUE) {
	    echo "Table created successfully";
	}
	else {
		echo "Error creating table: " . $conn->error;
	}

	$conn->close();
?>


<?php
	include 'connectDB.php';
	//Tạo bảng
	$sql = "CREATE TABLE Seats1(
		seatID1 VARCHAR(30) NOT NULL primary key,
		properties VARCHAR(30),
		price int NOT NULL
	)ENGINE=InnoDB DEFAULT CHARSET=utf8;
	";
 	if ($conn->query($sql) === TRUE) {
	    echo "Table created successfully";
	}
	else {
		echo "Error creating table: " . $conn->error;
	}

	$conn->close();
?>

<?php
	//Nhập thông tin cơ bản
	include 'connectDB.php';
	//nhập thông tin cơ bản các card ở trang Homepage
	$sql = "INSERT INTO flightHomepage VALUES ('VN0001', 'Nhật Bản','imgfold/NhatBan.jpg','Nhật Bản, xứ sở hoa anh đào, vẫn luôn là nơi thu hút rất nhiều khách du lịch trên thế giới. Đến Nhật Bản, bạn có thể ghé thăm những thành phố hiện đại, sầm uất như Tokyo, Yokohama hay tham quan những vùng đất ...');";
	$sql .= "INSERT INTO flightHomepage VALUES ('VN0002', 'Hàn Quốc','imgfold/HanQuoc.jpg','Hàn Quốc xứ kimchi là nơi du lịch với cảnh đẹp và văn hóa tuyệt vời. Seoul sở hữu cung điện Hoàng gia lộng lẫy, chợ Dong Dae Moon, Nam Dae Moon nhộn nhịp, dễ dàng mua nhân sâm, mỹ phẩm và thời trang. Đảo ...');";
	$sql .= "INSERT INTO flightHomepage VALUES ('VN0003', 'Đài Loan','imgfold/DaiLoan.jpg',' Hòn đảo xinh đẹp Đài Loan không chỉ được biết đến như Mãnh hổ kinh tế của Châu Á mà còn là điểm đến du lịch hấp dẫn với rừng núi, biển cả, sông hồ, chùa chiềng, các khu chợ sầm uất cho du khách thỏa sức shopping và nhiều thắng cảnh đặc sắc nổi tiếng khác đủ sức thỏa mãn những du khách khó tính nhất.');";
	$sql .= "INSERT INTO flightHomepage VALUES ('VN0005', 'Thái Lan','imgfold/ThaiLan.jpg','Vương quốc Thái Lan là một quốc gia nằm trong khu vực Đông Nam Á, được chia làm 76 tỉnh, trong đó có 2 thành phố trực thuộc trung ương: Bangkok và Pattaya. Các tỉnh của Thái Lan lại được phân trong 5 vùng: Miền Bắc Thái Lan, Đông Bắc Thái Lan, miền Trung Thái Lan, miền Đông Thái Lan và miền Nam Thái Lan. Mỗi vùng lại có những địa danh du lịch hấp dẫn riêng thu hút du khách.');";
	$sql .= "INSERT INTO flightHomepage VALUES ('VN0005', 'Đà Lạt','imgfold/DaLat.jpg','Đà Lạt miền xứ lạnh của phương Nam: Còn gì tuyệt hơn khi có thể chạy trốn cái nắng nóng của Sài Gòn, đến với Đà Lạt yên bình. Những người con phương Nam chưa bao giờ biết đến mùa đông phương Bắc có thể cảm nhận chút ít tại Đà Lạt. Điều đặc biệt hơn thế là tiết trời Đà Lạt chỉ se se chứ không quá lạnh… là một kì nghỉ thật tuyệt vời hơn bao giờ hết.');";
	$sql .= "INSERT INTO flightHomepage VALUES ('VN0006', 'Sơn Đoòng','imgfold/SonDoong.jpg','Bạn hãy đến Hang Sơn Đoòng , để cùng khám phá hang động kỳ vỹ nhất thế giới này. Bạn sẻ được hòa mình vào rừng núi thiên nhiên nguyên sơ , tiếng chim rừng...');";
	$sql .= "INSERT INTO flightHomepage VALUES ('VN0007', 'Sa Pa','imgfold/Sapa.jpg','Sa Pa là một điểm du lịch cách trung tâm thành phố Lào Cai khoảng hơn 30 km. Nằm ở độ cao trung bình 1500 – 1800 m so với mặt nước biển, Thị Trấn Sapa luôn chìm trong làn mây bồng bềnh, tạo nên một bức tranh huyền ảo đẹp đến kỳ lạ. Nơi đây, có thứ tài nguyên vô giá đó là khí hậu quanh năm trong lành mát mẻ, với nhiệt độ trung bình 15-18°C.');";
	$sql .= "INSERT INTO flightHomepage VALUES ('VN0008', 'Nha Trang','imgfold/NhaTrang.jpg','Được công nhận là một trong những vịnh biển đẹp nhất thế giới với thành phố êm ả nằm bên bờ biển, Nha Trang là trung tâm của đất Khánh Hòa - miền đất được mệnh danh là “xứ trầm, biển yến”.');";
	$sql .= "INSERT INTO flightHomepage VALUES ('VN0009', 'Phu Quoc','imgfold/PhuQuoc.jpg','Phú Quốc, còn được mệnh danh là Đảo Ngọc, là hòn đảo lớn nhất của Việt Nam, cũng là đảo lớn nhất trong quần thể 22 đảo tại đây, nằm trong vịnh Thái Lan. Đảo Phú Quốc cùng với các đảo khác tạo thành huyện đảo ...');";

	if (mysqli_multi_query($conn, $sql)) {
   	 echo "New records created successfully";
	} else {
    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	
	mysqli_close($conn);

?>

<?php
	//Nhập thông tin cơ bản
	include 'connectDB.php';



	//Insert dữ liệu chuyến bay
	$sql = "INSERT INTO flightlist VALUES ('VN0001', 'HCM-NB', 'Hồ Chí Minh','Nhật Bản','2019-05-15','01:00:00','10:00:00','imgfold/NhatBan.jpg');";
	$sql .= "INSERT INTO flightlist VALUES ('VN0002', 'HCM-NB', 'Hồ Chí Minh','Nhật Bản','2019-05-05','02:00:00','11:00:00','imgfold/NhatBan.jpg');";
	$sql .= "INSERT INTO flightlist VALUES ('VN0003', 'HCM-NB', 'Hồ Chí Minh','Nhật Bản','2019-05-02','03:00:00','12:00:00','imgfold/NhatBan.jpg');";
	$sql .= "INSERT INTO flightlist VALUES ('VN0004', 'HCM-NB', 'Hồ Chí Minh','Nhật Bản','2019-05-18','04:00:00','13:00:00','imgfold/NhatBan.jpg');";
	$sql .= "INSERT INTO flightlist VALUES ('VN0005', 'HCM-NB', 'Hồ Chí Minh','Nhật Bản','2019-05-17','05:00:00','14:00:00','imgfold/NhatBan.jpg');";
	$sql .= "INSERT INTO flightlist VALUES ('VN0006', 'HCM-NB', 'Hồ Chí Minh','Nhật Bản','2019-05-16','06:00:00','15:00:00','imgfold/NhatBan.jpg');";
	$sql .= "INSERT INTO flightlist VALUES ('VN0007', 'HCM-NB', 'Hồ Chí Minh','Nhật Bản','2019-05-15','07:00:00','16:00:00','imgfold/NhatBan.jpg');";
	$sql .= "INSERT INTO flightlist VALUES ('VN0008', 'HCM-NB', 'Hồ Chí Minh','Nhật Bản','2019-05-15','08:00:00','17:00:00','imgfold/NhatBan.jpg');";
	$sql .= "INSERT INTO flightlist VALUES ('VN0009', 'HCM-NB', 'Hồ Chí Minh','Nhật Bản','2019-05-30','09:00:00','18:00:00','imgfold/NhatBan.jpg');";
	$sql .= "INSERT INTO flightlist VALUES ('VN0030', 'HCM-NB', 'Hồ Chí Minh','Nhật Bản','2019-05-16','05:00:00','14:00:00','imgfold/NhatBan.jpg');";

	$sql .= "INSERT INTO flightlist VALUES ('VN0010', 'HCM-HQ', 'Hồ Chí Minh','Hàn Quốc','2019-05-18','14:00:00','22:00:00','imgfold/HanQuoc.jpg');";
	$sql .= "INSERT INTO flightlist VALUES ('VN0011', 'HCM-HQ', 'Hồ Chí Minh','Hàn Quốc','2019-05-21','15:00:00','23:00:00','imgfold/HanQuoc.jpg');";
	$sql .= "INSERT INTO flightlist VALUES ('VN0012', 'HCM-HQ', 'Hồ Chí Minh','Hàn Quốc','2019-05-20','16:00:00','24:00:00','imgfold/HanQuoc.jpg');";
	$sql .= "INSERT INTO flightlist VALUES ('VN0013', 'HCM-HQ', 'Hồ Chí Minh','Hàn Quốc','2019-05-15','17:00:00','01:00:00','imgfold/HanQuoc.jpg');";
	$sql .= "INSERT INTO flightlist VALUES ('VN0014', 'HCM-HQ', 'Hồ Chí Minh','Hàn Quốc','2019-05-19','18:00:00','02:00:00','imgfold/HanQuoc.jpg');";
	$sql .= "INSERT INTO flightlist VALUES ('VN0015', 'HCM-HQ', 'Hồ Chí Minh','Hàn Quốc','2019-05-14','19:00:00','03:00:00','imgfold/HanQuoc.jpg');";
	$sql .= "INSERT INTO flightlist VALUES ('VN0016', 'HCM-HQ', 'Hồ Chí Minh','Hàn Quốc','2019-05-16','20:00:00','04:00:00','imgfold/HanQuoc.jpg');";
	$sql .= "INSERT INTO flightlist VALUES ('VN0017', 'HCM-HQ', 'Hồ Chí Minh','Hàn Quốc','2019-05-17','21:00:00','05:00:00','imgfold/HanQuoc.jpg');";
	$sql .= "INSERT INTO flightlist VALUES ('VN0018', 'HCM-HQ', 'Hồ Chí Minh','Hàn Quốc','2019-05-18','22:00:00','06:00:00','imgfold/HanQuoc.jpg');";
	$sql .= "INSERT INTO flightlist VALUES ('VN0019', 'HCM-HQ', 'Hồ Chí Minh','Hàn Quốc','2019-05-15','23:00:00','07:00:00','imgfold/HanQuoc.jpg');";

	$sql .= "INSERT INTO flightlist VALUES ('VN0020', 'NB-HCM', 'Nhật Bản','Hồ Chí Minh','2019-05-30','08:00:00','13:00:00','imgfold/NhatBan.jpg');";
	$sql .= "INSERT INTO flightlist VALUES ('VN0021', 'NB-HCM', 'Nhật Bản','Hồ Chí Minh','2019-05-15','08:00:00','13:00:00','imgfold/NhatBan.jpg');";
	$sql .= "INSERT INTO flightlist VALUES ('VN0022', 'NB-HCM', 'Nhật Bản','Hồ Chí Minh','2019-05-15','16:00:00','24:00:00','imgfold/NhatBan.jpg');";
	$sql .= "INSERT INTO flightlist VALUES ('VN0023', 'NB-HCM', 'Nhật Bản','Hồ Chí Minh','2019-05-30','17:00:00','01:00:00','imgfold/NhatBan.jpg');";
	$sql .= "INSERT INTO flightlist VALUES ('VN0024', 'HCM-DL', 'Hồ Chí Minh','Đài Loan','2019-05-30','18:00:00','02:00:00','imgfold/DaiLoan.jpg');";
	$sql .= "INSERT INTO flightlist VALUES ('VN0025', 'HCM-DL', 'Hồ Chí Minh','Đài Loan','2019-05-30','19:00:00','03:00:00','imgfold/DaiLoan.jpg');";
	$sql .= "INSERT INTO flightlist VALUES ('VN0026', 'HCM-DL', 'Hồ Chí Minh','Đài Loan','2019-05-30','20:00:00','05:00:00','imgfold/DaiLoan.jpg');";
	$sql .= "INSERT INTO flightlist VALUES ('VN0027', 'HCM-DL', 'Hồ Chí Minh','Đài Loan','2019-05-30','21:00:00','05:00:00','imgfold/DaiLoan.jpg');";
	$sql .= "INSERT INTO flightlist VALUES ('VN0028', 'HCM-DL', 'Hồ Chí Minh','Đài Loan','2019-05-30','22:00:00','06:00:00','imgfold/DaiLoan.jpg');";
	$sql .= "INSERT INTO flightlist VALUES ('VN0029', 'HCM-DL', 'Hồ Chí Minh','Đài Loan','2019-05-30','23:00:00','07:00:00','imgfold/DaiLoan.jpg');";

	//insert carousel ở trang Homepage
	$sql .= "INSERT INTO carouselhomepage VALUES ('C3', 'Nhật Bản', 'imgfold/NhatBan2.jpg','Đất nước hoa anh đào');";
	$sql .= "INSERT INTO carouselhomepage VALUES ('C2', 'Đà Lạt', 'imgfold/DaLat2.jpg','Thành phố mộng mơ');";
	$sql .= "INSERT INTO carouselhomepage VALUES ('C1', 'Sơn Đoòng', 'imgfold/SonDoong.jpg','Hang động bự nhất thế giới.');";
	
	
	//Insert tài khoản admin
	$sql .= "INSERT INTO adminAcc VALUES ('517h0111','123');";

	//Insert tài khoản guest
	$sql .= "INSERT INTO guestacc VALUES ('Demo1','123','Cao Trần','Tuấn Duy','1999-06-12','772, Điện Biên Phủ, P. 22, Q. Bình Thạnh, Tp. Hồ Chí Minh','0903118098','517h0111@gmail.com');";
	$sql .= "INSERT INTO guestacc VALUES ('Demo2','123','Xuân','Huy','1999-06-12','772, Điện Biên Phủ, P. 22, Q. Bình Thạnh, Tp. Hồ Chí Minh','0258403930','517h0169@gmail.com');";
	$sql .= "INSERT INTO guestacc VALUES ('Demo3','123','Trần Văn','A','1999-06-12','772, Điện Biên Phủ, P. 22, Q. Bình Thạnh, Tp. Hồ Chí Minh','0903118098','517h0111@gmail.com');";
	$sql .= "INSERT INTO guestacc VALUES ('Demo4','123','Trần Văn','B','1999-06-12','772, Điện Biên Phủ, P. 22, Q. Bình Thạnh, Tp. Hồ Chí Minh','0903118098','517h0111@gmail.com');";
	$sql .= "INSERT INTO guestacc VALUES ('Demo5','123','Trần Văn','C','1999-06-12','772, Điện Biên Phủ, P. 22, Q. Bình Thạnh, Tp. Hồ Chí Minh','0903118098','517h0111@gmail.com');";
	$sql .= "INSERT INTO guestacc VALUES ('Demo6','123','Trần Văn','D','1999-06-12','772, Điện Biên Phủ, P. 22, Q. Bình Thạnh, Tp. Hồ Chí Minh','0903118098','517h0111@gmail.com');";
	$sql .= "INSERT INTO guestacc VALUES ('Demo7','123','Trần Văn','E','1999-06-12','772, Điện Biên Phủ, P. 22, Q. Bình Thạnh, Tp. Hồ Chí Minh','0903118098','517h0111@gmail.com');";
	$sql .= "INSERT INTO guestacc VALUES ('Demo8','123','Trần Văn','F','1999-06-12','772, Điện Biên Phủ, P. 22, Q. Bình Thạnh, Tp. Hồ Chí Minh','0903118098','517h0111@gmail.com');";
	$sql .= "INSERT INTO guestacc VALUES ('Demo9','123','Trần Văn','G','1999-06-12','772, Điện Biên Phủ, P. 22, Q. Bình Thạnh, Tp. Hồ Chí Minh','0903118098','517h0111@gmail.com');";
	$sql .= "INSERT INTO guestacc VALUES ('Demo10','123','Trần Văn','H','1999-06-12','772, Điện Biên Phủ, P. 22, Q. Bình Thạnh, Tp. Hồ Chí Minh','0903118098','517h0111@gmail.com');";
	$sql .= "INSERT INTO guestacc VALUES ('Demo11','123','Trần Văn','I','1999-06-12','772, Điện Biên Phủ, P. 22, Q. Bình Thạnh, Tp. Hồ Chí Minh','0903118098','517h0111@gmail.com');";
	$sql .= "INSERT INTO guestacc VALUES ('Demo12','123','Trần Văn','J','1999-06-12','772, Điện Biên Phủ, P. 22, Q. Bình Thạnh, Tp. Hồ Chí Minh','0903118098','517h0111@gmail.com');";
	$sql .= "INSERT INTO guestacc VALUES ('Demo13','123','Trần Văn','K','1999-06-12','772, Điện Biên Phủ, P. 22, Q. Bình Thạnh, Tp. Hồ Chí Minh','0903118098','517h0111@gmail.com');";
	$sql .= "INSERT INTO guestacc VALUES ('Demo14','123','Trần Văn','L','1999-06-12','772, Điện Biên Phủ, P. 22, Q. Bình Thạnh, Tp. Hồ Chí Minh','0903118098','517h0111@gmail.com');";
	$sql .= "INSERT INTO guestacc VALUES ('Demo15','123','Trần Văn','M','1999-06-12','772, Điện Biên Phủ, P. 22, Q. Bình Thạnh, Tp. Hồ Chí Minh','0903118098','517h0111@gmail.com');";
	$sql .= "INSERT INTO guestacc VALUES ('Demo16','123','Trần Văn','N','1999-06-12','772, Điện Biên Phủ, P. 22, Q. Bình Thạnh, Tp. Hồ Chí Minh','0903118098','517h0111@gmail.com');";
	$sql .= "INSERT INTO guestacc VALUES ('Demo17','123','Trần Văn','O','1999-06-12','772, Điện Biên Phủ, P. 22, Q. Bình Thạnh, Tp. Hồ Chí Minh','0903118098','517h0111@gmail.com');";
	$sql .= "INSERT INTO guestacc VALUES ('Demo18','123','Trần Văn','P','1999-06-12','772, Điện Biên Phủ, P. 22, Q. Bình Thạnh, Tp. Hồ Chí Minh','0903118098','517h0111@gmail.com');";
	$sql .= "INSERT INTO guestacc VALUES ('Demo19','123','Trần Văn','Q','1999-06-12','772, Điện Biên Phủ, P. 22, Q. Bình Thạnh, Tp. Hồ Chí Minh','0903118098','517h0111@gmail.com');";
	$sql .= "INSERT INTO guestacc VALUES ('Demo20','123','Trần Văn','R','1999-06-12','772, Điện Biên Phủ, P. 22, Q. Bình Thạnh, Tp. Hồ Chí Minh','0903118098','517h0111@gmail.com');";
	$sql .= "INSERT INTO guestacc VALUES ('Demo21','123','Trần Văn','S','1999-06-12','772, Điện Biên Phủ, P. 22, Q. Bình Thạnh, Tp. Hồ Chí Minh','0903118098','517h0111@gmail.com');";
	$sql .= "INSERT INTO guestacc VALUES ('Demo22','123','Trần Văn','T','1999-06-12','772, Điện Biên Phủ, P. 22, Q. Bình Thạnh, Tp. Hồ Chí Minh','0903118098','517h0111@gmail.com');";
	$sql .= "INSERT INTO guestacc VALUES ('Demo23','123','Trần Văn','U','1999-06-12','772, Điện Biên Phủ, P. 22, Q. Bình Thạnh, Tp. Hồ Chí Minh','0903118098','517h0111@gmail.com');";

	//Insert flightbooking
	//$sql .= "INSERT INTO flightBooking VALUES ('1','Demo1','VN0001','03/05/2019','1','50.000','50.000');";
	//$sql .= "INSERT INTO flightBooking VALUES ('2','Demo2','VN0001','03/05/2019','1','50.000','50.000');";

	
	$sql .= "INSERT INTO Seats1 VALUES ('1A','Business class','100.000');";
	$sql .= "INSERT INTO Seats1 VALUES ('2A','Business class','100.000');";
	$sql .= "INSERT INTO Seats1 VALUES ('3A','Business class','100.000');";
//Insert seats
	$sql .= "INSERT INTO Seats VALUES ('1A','Business class','100.000','1a');";
	$sql .= "INSERT INTO Seats VALUES ('2A','Business class','100.000','2a');";
	$sql .= "INSERT INTO Seats VALUES ('3A','Business class','100.000','3a');";

	$sql .= "INSERT INTO Seats VALUES ('1B','Business class','100.000','1a');";
	$sql .= "INSERT INTO Seats VALUES ('2B','Business class','100.000','2a');";
	$sql .= "INSERT INTO Seats VALUES ('3B','Business class','100.000','3a');";
	
	$sql .= "INSERT INTO Seats VALUES ('1C','Business class','100.000','1a');";
	$sql .= "INSERT INTO Seats VALUES ('2C','Business class','100.000','2a');";
	$sql .= "INSERT INTO Seats VALUES ('3C','Business class','100.000','3a');";

	$sql .= "INSERT INTO Seats VALUES ('1D','Business class','100.000','1b');";
	$sql .= "INSERT INTO Seats VALUES ('2D','Business class','100.000','2b');";
	$sql .= "INSERT INTO Seats VALUES ('3D','Business class','100.000','3b');";

	$sql .= "INSERT INTO Seats VALUES ('1E','Business class','100.000','1b');";
	$sql .= "INSERT INTO Seats VALUES ('2E','Business class','100.000','2b');";
	$sql .= "INSERT INTO Seats VALUES ('3E','Business class','100.000','3b');";
	
	$sql .= "INSERT INTO Seats VALUES ('1F','Business class','100.000','1b');";
	$sql .= "INSERT INTO Seats VALUES ('2F','Business class','100.000','2b');";
	$sql .= "INSERT INTO Seats VALUES ('3F','Business class','100.000','3b');";

	
	$sql .= "INSERT INTO Seats VALUES ('4A','Normal class','50.000','4a');";
	$sql .= "INSERT INTO Seats VALUES ('5A','Normal class','50.000','5a');";
	$sql .= "INSERT INTO Seats VALUES ('6A','Normal class','50.000','6a');";
	$sql .= "INSERT INTO Seats VALUES ('7A','Normal class','50.000','7a');";
	$sql .= "INSERT INTO Seats VALUES ('8A','Normal class','50.000','8a');";
	$sql .= "INSERT INTO Seats VALUES ('9A','Normal class','50.000','9a');";
	$sql .= "INSERT INTO Seats VALUES ('10A','Normal class','50.000','10a');";
	$sql .= "INSERT INTO Seats VALUES ('11A','Normal class','50.000','11a');";
	$sql .= "INSERT INTO Seats VALUES ('12A','Normal class','50.000','12a');";
	$sql .= "INSERT INTO Seats VALUES ('13A','Normal class','50.000','13a');";
	$sql .= "INSERT INTO Seats VALUES ('14A','Normal class','50.000','14a');";
	$sql .= "INSERT INTO Seats VALUES ('15A','Normal class','50.000','15a');";
	$sql .= "INSERT INTO Seats VALUES ('16A','Normal class','50.000','16a');";
	$sql .= "INSERT INTO Seats VALUES ('17A','Normal class','50.000','17a');";
	$sql .= "INSERT INTO Seats VALUES ('18A','Normal class','50.000','18a');";
	$sql .= "INSERT INTO Seats VALUES ('19A','Normal class','50.000','19a');";

	$sql .= "INSERT INTO Seats VALUES ('4B','Normal class','50.000','4a');";
	$sql .= "INSERT INTO Seats VALUES ('5B','Normal class','50.000','5a');";
	$sql .= "INSERT INTO Seats VALUES ('6B','Normal class','50.000','6a');";
	$sql .= "INSERT INTO Seats VALUES ('7B','Normal class','50.000','7a');";
	$sql .= "INSERT INTO Seats VALUES ('8B','Normal class','50.000','8a');";
	$sql .= "INSERT INTO Seats VALUES ('9B','Normal class','50.000','9a');";
	$sql .= "INSERT INTO Seats VALUES ('10B','Normal class','50.000','10a');";
	$sql .= "INSERT INTO Seats VALUES ('11B','Normal class','50.000','11a');";
	$sql .= "INSERT INTO Seats VALUES ('12B','Normal class','50.000','12a');";
	$sql .= "INSERT INTO Seats VALUES ('13B','Normal class','50.000','13a');";
	$sql .= "INSERT INTO Seats VALUES ('14B','Normal class','50.000','14a');";
	$sql .= "INSERT INTO Seats VALUES ('15B','Normal class','50.000','15a');";
	$sql .= "INSERT INTO Seats VALUES ('16B','Normal class','50.000','16a');";
	$sql .= "INSERT INTO Seats VALUES ('17B','Normal class','50.000','17a');";
	$sql .= "INSERT INTO Seats VALUES ('18B','Normal class','50.000','18a');";
	$sql .= "INSERT INTO Seats VALUES ('19B','Normal class','50.000','19a');";

	$sql .= "INSERT INTO Seats VALUES ('4C','Normal class','50.000','4a');";
	$sql .= "INSERT INTO Seats VALUES ('5C','Normal class','50.000','5a');";
	$sql .= "INSERT INTO Seats VALUES ('6C','Normal class','50.000','6a');";
	$sql .= "INSERT INTO Seats VALUES ('7C','Normal class','50.000','7a');";
	$sql .= "INSERT INTO Seats VALUES ('8C','Normal class','50.000','8a');";
	$sql .= "INSERT INTO Seats VALUES ('9C','Normal class','50.000','9a');";
	$sql .= "INSERT INTO Seats VALUES ('10C','Normal class','50.000','10a');";
	$sql .= "INSERT INTO Seats VALUES ('11C','Normal class','50.000','11a');";
	$sql .= "INSERT INTO Seats VALUES ('12C','Normal class','50.000','12a');";
	$sql .= "INSERT INTO Seats VALUES ('13C','Normal class','50.000','13a');";
	$sql .= "INSERT INTO Seats VALUES ('14C','Normal class','50.000','14a');";
	$sql .= "INSERT INTO Seats VALUES ('15C','Normal class','50.000','15a');";
	$sql .= "INSERT INTO Seats VALUES ('16C','Normal class','50.000','16a');";
	$sql .= "INSERT INTO Seats VALUES ('17C','Normal class','50.000','17a');";
	$sql .= "INSERT INTO Seats VALUES ('18C','Normal class','50.000','18a');";
	$sql .= "INSERT INTO Seats VALUES ('19C','Normal class','50.000','19a');";

	$sql .= "INSERT INTO Seats VALUES ('4D','Normal class','50.000','4b');";
	$sql .= "INSERT INTO Seats VALUES ('5D','Normal class','50.000','5b');";
	$sql .= "INSERT INTO Seats VALUES ('6D','Normal class','50.000','6b');";
	$sql .= "INSERT INTO Seats VALUES ('7D','Normal class','50.000','7b');";
	$sql .= "INSERT INTO Seats VALUES ('8D','Normal class','50.000','8b');";
	$sql .= "INSERT INTO Seats VALUES ('9D','Normal class','50.000','9b');";
	$sql .= "INSERT INTO Seats VALUES ('10D','Normal class','50.000','10b');";
	$sql .= "INSERT INTO Seats VALUES ('11D','Normal class','50.000','11b');";
	$sql .= "INSERT INTO Seats VALUES ('12D','Normal class','50.000','12b');";
	$sql .= "INSERT INTO Seats VALUES ('13D','Normal class','50.000','13b');";
	$sql .= "INSERT INTO Seats VALUES ('14D','Normal class','50.000','14b');";
	$sql .= "INSERT INTO Seats VALUES ('15D','Normal class','50.000','15b');";
	$sql .= "INSERT INTO Seats VALUES ('16D','Normal class','50.000','16b');";
	$sql .= "INSERT INTO Seats VALUES ('17D','Normal class','50.000','17b');";
	$sql .= "INSERT INTO Seats VALUES ('18D','Normal class','50.000','18b');";
	$sql .= "INSERT INTO Seats VALUES ('19D','Normal class','50.000','19b');";

	$sql .= "INSERT INTO Seats VALUES ('4E','Normal class','50.000','4b');";
	$sql .= "INSERT INTO Seats VALUES ('5E','Normal class','50.000','5b');";
	$sql .= "INSERT INTO Seats VALUES ('6E','Normal class','50.000','6b');";
	$sql .= "INSERT INTO Seats VALUES ('7E','Normal class','50.000','7b');";
	$sql .= "INSERT INTO Seats VALUES ('8E','Normal class','50.000','8b');";
	$sql .= "INSERT INTO Seats VALUES ('9E','Normal class','50.000','9b');";
	$sql .= "INSERT INTO Seats VALUES ('10E','Normal class','50.000','10b');";
	$sql .= "INSERT INTO Seats VALUES ('11E','Normal class','50.000','11b');";
	$sql .= "INSERT INTO Seats VALUES ('12E','Normal class','50.000','12b');";
	$sql .= "INSERT INTO Seats VALUES ('13E','Normal class','50.000','13b');";
	$sql .= "INSERT INTO Seats VALUES ('14E','Normal class','50.000','14b');";
	$sql .= "INSERT INTO Seats VALUES ('15E','Normal class','50.000','15b');";
	$sql .= "INSERT INTO Seats VALUES ('16E','Normal class','50.000','16b');";
	$sql .= "INSERT INTO Seats VALUES ('17E','Normal class','50.000','17b');";
	$sql .= "INSERT INTO Seats VALUES ('18E','Normal class','50.000','18b');";
	$sql .= "INSERT INTO Seats VALUES ('19E','Normal class','50.000','19b');";

	$sql .= "INSERT INTO Seats VALUES ('4F','Normal class','50.000','4b');";
	$sql .= "INSERT INTO Seats VALUES ('5F','Normal class','50.000','5b');";
	$sql .= "INSERT INTO Seats VALUES ('6F','Normal class','50.000','6b');";
	$sql .= "INSERT INTO Seats VALUES ('7F','Normal class','50.000','7b');";
	$sql .= "INSERT INTO Seats VALUES ('8F','Normal class','50.000','8b');";
	$sql .= "INSERT INTO Seats VALUES ('9F','Normal class','50.000','9b');";
	$sql .= "INSERT INTO Seats VALUES ('10F','Normal class','50.000','10b');";
	$sql .= "INSERT INTO Seats VALUES ('11F','Normal class','50.000','11b');";
	$sql .= "INSERT INTO Seats VALUES ('12F','Normal class','50.000','12b');";
	$sql .= "INSERT INTO Seats VALUES ('13F','Normal class','50.000','13b');";
	$sql .= "INSERT INTO Seats VALUES ('14F','Normal class','50.000','14b');";
	$sql .= "INSERT INTO Seats VALUES ('15F','Normal class','50.000','15b');";
	$sql .= "INSERT INTO Seats VALUES ('16F','Normal class','50.000','16b');";
	$sql .= "INSERT INTO Seats VALUES ('17F','Normal class','50.000','17b');";
	$sql .= "INSERT INTO Seats VALUES ('18F','Normal class','50.000','18b');";
	$sql .= "INSERT INTO Seats VALUES ('19F','Normal class','50.000','19b');";

	$sql .= "INSERT INTO Seats VALUES ('20A','Normal class','50.000','20a');";
	$sql .= "INSERT INTO Seats VALUES ('20B','Normal class','50.000','20a');";
	$sql .= "INSERT INTO Seats VALUES ('20C','Normal class','50.000','20a');";
	$sql .= "INSERT INTO Seats VALUES ('20D','Normal class','50.000','20b');";
	$sql .= "INSERT INTO Seats VALUES ('20E','Normal class','50.000','20b');";
	$sql .= "INSERT INTO Seats VALUES ('20F','Normal class','50.000','20b');";
//insert seats

//Insert VN0001
	$sql .= "INSERT INTO VN0001 VALUES ('1A','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0001 VALUES ('2A','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0001 VALUES ('3A','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0001 VALUES ('1B','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0001 VALUES ('2B','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0001 VALUES ('3B','Business class','100.000','3a');";
	
	$sql .= "INSERT INTO VN0001 VALUES ('1C','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0001 VALUES ('2C','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0001 VALUES ('3C','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0001 VALUES ('1D','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0001 VALUES ('2D','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0001 VALUES ('3D','Business class','100.000','3b');";

	$sql .= "INSERT INTO VN0001 VALUES ('1E','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0001 VALUES ('2E','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0001 VALUES ('3E','Business class','100.000','3b');";
	
	$sql .= "INSERT INTO VN0001 VALUES ('1F','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0001 VALUES ('2F','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0001 VALUES ('3F','Business class','100.000','3b');";

	
	$sql .= "INSERT INTO VN0001 VALUES ('4A','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0001 VALUES ('5A','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0001 VALUES ('6A','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0001 VALUES ('7A','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0001 VALUES ('8A','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0001 VALUES ('9A','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0001 VALUES ('10A','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0001 VALUES ('11A','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0001 VALUES ('12A','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0001 VALUES ('13A','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0001 VALUES ('14A','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0001 VALUES ('15A','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0001 VALUES ('16A','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0001 VALUES ('17A','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0001 VALUES ('18A','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0001 VALUES ('19A','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0001 VALUES ('4B','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0001 VALUES ('5B','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0001 VALUES ('6B','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0001 VALUES ('7B','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0001 VALUES ('8B','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0001 VALUES ('9B','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0001 VALUES ('10B','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0001 VALUES ('11B','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0001 VALUES ('12B','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0001 VALUES ('13B','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0001 VALUES ('14B','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0001 VALUES ('15B','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0001 VALUES ('16B','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0001 VALUES ('17B','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0001 VALUES ('18B','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0001 VALUES ('19B','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0001 VALUES ('4C','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0001 VALUES ('5C','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0001 VALUES ('6C','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0001 VALUES ('7C','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0001 VALUES ('8C','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0001 VALUES ('9C','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0001 VALUES ('10C','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0001 VALUES ('11C','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0001 VALUES ('12C','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0001 VALUES ('13C','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0001 VALUES ('14C','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0001 VALUES ('15C','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0001 VALUES ('16C','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0001 VALUES ('17C','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0001 VALUES ('18C','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0001 VALUES ('19C','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0001 VALUES ('4D','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0001 VALUES ('5D','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0001 VALUES ('6D','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0001 VALUES ('7D','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0001 VALUES ('8D','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0001 VALUES ('9D','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0001 VALUES ('10D','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0001 VALUES ('11D','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0001 VALUES ('12D','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0001 VALUES ('13D','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0001 VALUES ('14D','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0001 VALUES ('15D','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0001 VALUES ('16D','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0001 VALUES ('17D','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0001 VALUES ('18D','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0001 VALUES ('19D','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0001 VALUES ('4E','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0001 VALUES ('5E','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0001 VALUES ('6E','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0001 VALUES ('7E','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0001 VALUES ('8E','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0001 VALUES ('9E','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0001 VALUES ('10E','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0001 VALUES ('11E','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0001 VALUES ('12E','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0001 VALUES ('13E','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0001 VALUES ('14E','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0001 VALUES ('15E','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0001 VALUES ('16E','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0001 VALUES ('17E','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0001 VALUES ('18E','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0001 VALUES ('19E','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0001 VALUES ('4F','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0001 VALUES ('5F','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0001 VALUES ('6F','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0001 VALUES ('7F','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0001 VALUES ('8F','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0001 VALUES ('9F','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0001 VALUES ('10F','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0001 VALUES ('11F','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0001 VALUES ('12F','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0001 VALUES ('13F','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0001 VALUES ('14F','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0001 VALUES ('15F','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0001 VALUES ('16F','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0001 VALUES ('17F','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0001 VALUES ('18F','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0001 VALUES ('19F','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0001 VALUES ('20A','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0001 VALUES ('20B','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0001 VALUES ('20C','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0001 VALUES ('20D','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0001 VALUES ('20E','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0001 VALUES ('20F','Normal class','50.000','20b');";
//insert VN0001
	
//Insert VN0002
	$sql .= "INSERT INTO VN0002 VALUES ('1A','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0002 VALUES ('2A','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0002 VALUES ('3A','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0002 VALUES ('1B','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0002 VALUES ('2B','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0002 VALUES ('3B','Business class','100.000','3a');";
	
	$sql .= "INSERT INTO VN0002 VALUES ('1C','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0002 VALUES ('2C','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0002 VALUES ('3C','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0002 VALUES ('1D','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0002 VALUES ('2D','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0002 VALUES ('3D','Business class','100.000','3b');";

	$sql .= "INSERT INTO VN0002 VALUES ('1E','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0002 VALUES ('2E','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0002 VALUES ('3E','Business class','100.000','3b');";
	
	$sql .= "INSERT INTO VN0002 VALUES ('1F','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0002 VALUES ('2F','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0002 VALUES ('3F','Business class','100.000','3b');";

	
	$sql .= "INSERT INTO VN0002 VALUES ('4A','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0002 VALUES ('5A','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0002 VALUES ('6A','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0002 VALUES ('7A','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0002 VALUES ('8A','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0002 VALUES ('9A','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0002 VALUES ('10A','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0002 VALUES ('11A','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0002 VALUES ('12A','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0002 VALUES ('13A','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0002 VALUES ('14A','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0002 VALUES ('15A','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0002 VALUES ('16A','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0002 VALUES ('17A','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0002 VALUES ('18A','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0002 VALUES ('19A','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0002 VALUES ('4B','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0002 VALUES ('5B','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0002 VALUES ('6B','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0002 VALUES ('7B','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0002 VALUES ('8B','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0002 VALUES ('9B','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0002 VALUES ('10B','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0002 VALUES ('11B','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0002 VALUES ('12B','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0002 VALUES ('13B','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0002 VALUES ('14B','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0002 VALUES ('15B','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0002 VALUES ('16B','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0002 VALUES ('17B','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0002 VALUES ('18B','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0002 VALUES ('19B','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0002 VALUES ('4C','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0002 VALUES ('5C','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0002 VALUES ('6C','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0002 VALUES ('7C','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0002 VALUES ('8C','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0002 VALUES ('9C','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0002 VALUES ('10C','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0002 VALUES ('11C','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0002 VALUES ('12C','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0002 VALUES ('13C','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0002 VALUES ('14C','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0002 VALUES ('15C','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0002 VALUES ('16C','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0002 VALUES ('17C','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0002 VALUES ('18C','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0002 VALUES ('19C','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0002 VALUES ('4D','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0002 VALUES ('5D','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0002 VALUES ('6D','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0002 VALUES ('7D','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0002 VALUES ('8D','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0002 VALUES ('9D','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0002 VALUES ('10D','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0002 VALUES ('11D','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0002 VALUES ('12D','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0002 VALUES ('13D','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0002 VALUES ('14D','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0002 VALUES ('15D','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0002 VALUES ('16D','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0002 VALUES ('17D','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0002 VALUES ('18D','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0002 VALUES ('19D','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0002 VALUES ('4E','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0002 VALUES ('5E','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0002 VALUES ('6E','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0002 VALUES ('7E','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0002 VALUES ('8E','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0002 VALUES ('9E','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0002 VALUES ('10E','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0002 VALUES ('11E','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0002 VALUES ('12E','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0002 VALUES ('13E','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0002 VALUES ('14E','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0002 VALUES ('15E','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0002 VALUES ('16E','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0002 VALUES ('17E','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0002 VALUES ('18E','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0002 VALUES ('19E','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0002 VALUES ('4F','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0002 VALUES ('5F','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0002 VALUES ('6F','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0002 VALUES ('7F','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0002 VALUES ('8F','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0002 VALUES ('9F','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0002 VALUES ('10F','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0002 VALUES ('11F','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0002 VALUES ('12F','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0002 VALUES ('13F','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0002 VALUES ('14F','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0002 VALUES ('15F','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0002 VALUES ('16F','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0002 VALUES ('17F','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0002 VALUES ('18F','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0002 VALUES ('19F','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0002 VALUES ('20A','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0002 VALUES ('20B','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0002 VALUES ('20C','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0002 VALUES ('20D','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0002 VALUES ('20E','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0002 VALUES ('20F','Normal class','50.000','20b');";
//insert VN0002

//Insert VN0003
	$sql .= "INSERT INTO VN0003 VALUES ('1A','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0003 VALUES ('2A','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0003 VALUES ('3A','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0003 VALUES ('1B','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0003 VALUES ('2B','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0003 VALUES ('3B','Business class','100.000','3a');";
	
	$sql .= "INSERT INTO VN0003 VALUES ('1C','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0003 VALUES ('2C','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0003 VALUES ('3C','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0003 VALUES ('1D','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0003 VALUES ('2D','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0003 VALUES ('3D','Business class','100.000','3b');";

	$sql .= "INSERT INTO VN0003 VALUES ('1E','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0003 VALUES ('2E','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0003 VALUES ('3E','Business class','100.000','3b');";
	
	$sql .= "INSERT INTO VN0003 VALUES ('1F','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0003 VALUES ('2F','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0003 VALUES ('3F','Business class','100.000','3b');";

	
	$sql .= "INSERT INTO VN0003 VALUES ('4A','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0003 VALUES ('5A','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0003 VALUES ('6A','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0003 VALUES ('7A','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0003 VALUES ('8A','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0003 VALUES ('9A','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0003 VALUES ('10A','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0003 VALUES ('11A','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0003 VALUES ('12A','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0003 VALUES ('13A','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0003 VALUES ('14A','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0003 VALUES ('15A','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0003 VALUES ('16A','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0003 VALUES ('17A','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0003 VALUES ('18A','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0003 VALUES ('19A','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0003 VALUES ('4B','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0003 VALUES ('5B','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0003 VALUES ('6B','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0003 VALUES ('7B','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0003 VALUES ('8B','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0003 VALUES ('9B','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0003 VALUES ('10B','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0003 VALUES ('11B','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0003 VALUES ('12B','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0003 VALUES ('13B','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0003 VALUES ('14B','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0003 VALUES ('15B','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0003 VALUES ('16B','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0003 VALUES ('17B','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0003 VALUES ('18B','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0003 VALUES ('19B','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0003 VALUES ('4C','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0003 VALUES ('5C','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0003 VALUES ('6C','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0003 VALUES ('7C','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0003 VALUES ('8C','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0003 VALUES ('9C','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0003 VALUES ('10C','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0003 VALUES ('11C','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0003 VALUES ('12C','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0003 VALUES ('13C','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0003 VALUES ('14C','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0003 VALUES ('15C','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0003 VALUES ('16C','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0003 VALUES ('17C','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0003 VALUES ('18C','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0003 VALUES ('19C','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0003 VALUES ('4D','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0003 VALUES ('5D','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0003 VALUES ('6D','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0003 VALUES ('7D','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0003 VALUES ('8D','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0003 VALUES ('9D','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0003 VALUES ('10D','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0003 VALUES ('11D','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0003 VALUES ('12D','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0003 VALUES ('13D','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0003 VALUES ('14D','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0003 VALUES ('15D','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0003 VALUES ('16D','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0003 VALUES ('17D','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0003 VALUES ('18D','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0003 VALUES ('19D','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0003 VALUES ('4E','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0003 VALUES ('5E','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0003 VALUES ('6E','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0003 VALUES ('7E','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0003 VALUES ('8E','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0003 VALUES ('9E','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0003 VALUES ('10E','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0003 VALUES ('11E','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0003 VALUES ('12E','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0003 VALUES ('13E','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0003 VALUES ('14E','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0003 VALUES ('15E','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0003 VALUES ('16E','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0003 VALUES ('17E','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0003 VALUES ('18E','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0003 VALUES ('19E','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0003 VALUES ('4F','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0003 VALUES ('5F','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0003 VALUES ('6F','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0003 VALUES ('7F','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0003 VALUES ('8F','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0003 VALUES ('9F','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0003 VALUES ('10F','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0003 VALUES ('11F','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0003 VALUES ('12F','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0003 VALUES ('13F','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0003 VALUES ('14F','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0003 VALUES ('15F','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0003 VALUES ('16F','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0003 VALUES ('17F','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0003 VALUES ('18F','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0003 VALUES ('19F','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0003 VALUES ('20A','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0003 VALUES ('20B','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0003 VALUES ('20C','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0003 VALUES ('20D','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0003 VALUES ('20E','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0003 VALUES ('20F','Normal class','50.000','20b');";
//insert VN0003

//Insert VN0004
	$sql .= "INSERT INTO VN0004 VALUES ('1A','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0004 VALUES ('2A','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0004 VALUES ('3A','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0004 VALUES ('1B','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0004 VALUES ('2B','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0004 VALUES ('3B','Business class','100.000','3a');";
	
	$sql .= "INSERT INTO VN0004 VALUES ('1C','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0004 VALUES ('2C','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0004 VALUES ('3C','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0004 VALUES ('1D','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0004 VALUES ('2D','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0004 VALUES ('3D','Business class','100.000','3b');";

	$sql .= "INSERT INTO VN0004 VALUES ('1E','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0004 VALUES ('2E','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0004 VALUES ('3E','Business class','100.000','3b');";
	
	$sql .= "INSERT INTO VN0004 VALUES ('1F','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0004 VALUES ('2F','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0004 VALUES ('3F','Business class','100.000','3b');";

	
	$sql .= "INSERT INTO VN0004 VALUES ('4A','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0004 VALUES ('5A','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0004 VALUES ('6A','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0004 VALUES ('7A','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0004 VALUES ('8A','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0004 VALUES ('9A','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0004 VALUES ('10A','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0004 VALUES ('11A','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0004 VALUES ('12A','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0004 VALUES ('13A','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0004 VALUES ('14A','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0004 VALUES ('15A','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0004 VALUES ('16A','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0004 VALUES ('17A','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0004 VALUES ('18A','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0004 VALUES ('19A','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0004 VALUES ('4B','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0004 VALUES ('5B','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0004 VALUES ('6B','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0004 VALUES ('7B','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0004 VALUES ('8B','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0004 VALUES ('9B','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0004 VALUES ('10B','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0004 VALUES ('11B','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0004 VALUES ('12B','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0004 VALUES ('13B','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0004 VALUES ('14B','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0004 VALUES ('15B','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0004 VALUES ('16B','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0004 VALUES ('17B','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0004 VALUES ('18B','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0004 VALUES ('19B','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0004 VALUES ('4C','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0004 VALUES ('5C','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0004 VALUES ('6C','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0004 VALUES ('7C','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0004 VALUES ('8C','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0004 VALUES ('9C','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0004 VALUES ('10C','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0004 VALUES ('11C','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0004 VALUES ('12C','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0004 VALUES ('13C','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0004 VALUES ('14C','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0004 VALUES ('15C','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0004 VALUES ('16C','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0004 VALUES ('17C','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0004 VALUES ('18C','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0004 VALUES ('19C','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0004 VALUES ('4D','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0004 VALUES ('5D','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0004 VALUES ('6D','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0004 VALUES ('7D','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0004 VALUES ('8D','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0004 VALUES ('9D','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0004 VALUES ('10D','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0004 VALUES ('11D','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0004 VALUES ('12D','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0004 VALUES ('13D','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0004 VALUES ('14D','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0004 VALUES ('15D','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0004 VALUES ('16D','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0004 VALUES ('17D','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0004 VALUES ('18D','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0004 VALUES ('19D','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0004 VALUES ('4E','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0004 VALUES ('5E','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0004 VALUES ('6E','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0004 VALUES ('7E','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0004 VALUES ('8E','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0004 VALUES ('9E','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0004 VALUES ('10E','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0004 VALUES ('11E','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0004 VALUES ('12E','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0004 VALUES ('13E','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0004 VALUES ('14E','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0004 VALUES ('15E','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0004 VALUES ('16E','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0004 VALUES ('17E','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0004 VALUES ('18E','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0004 VALUES ('19E','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0004 VALUES ('4F','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0004 VALUES ('5F','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0004 VALUES ('6F','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0004 VALUES ('7F','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0004 VALUES ('8F','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0004 VALUES ('9F','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0004 VALUES ('10F','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0004 VALUES ('11F','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0004 VALUES ('12F','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0004 VALUES ('13F','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0004 VALUES ('14F','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0004 VALUES ('15F','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0004 VALUES ('16F','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0004 VALUES ('17F','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0004 VALUES ('18F','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0004 VALUES ('19F','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0004 VALUES ('20A','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0004 VALUES ('20B','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0004 VALUES ('20C','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0004 VALUES ('20D','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0004 VALUES ('20E','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0004 VALUES ('20F','Normal class','50.000','20b');";
//insert VN0004

	//Insert VN0005
	$sql .= "INSERT INTO VN0005 VALUES ('1A','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0005 VALUES ('2A','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0005 VALUES ('3A','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0005 VALUES ('1B','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0005 VALUES ('2B','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0005 VALUES ('3B','Business class','100.000','3a');";
	
	$sql .= "INSERT INTO VN0005 VALUES ('1C','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0005 VALUES ('2C','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0005 VALUES ('3C','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0005 VALUES ('1D','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0005 VALUES ('2D','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0005 VALUES ('3D','Business class','100.000','3b');";

	$sql .= "INSERT INTO VN0005 VALUES ('1E','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0005 VALUES ('2E','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0005 VALUES ('3E','Business class','100.000','3b');";
	
	$sql .= "INSERT INTO VN0005 VALUES ('1F','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0005 VALUES ('2F','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0005 VALUES ('3F','Business class','100.000','3b');";

	
	$sql .= "INSERT INTO VN0005 VALUES ('4A','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0005 VALUES ('5A','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0005 VALUES ('6A','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0005 VALUES ('7A','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0005 VALUES ('8A','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0005 VALUES ('9A','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0005 VALUES ('10A','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0005 VALUES ('11A','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0005 VALUES ('12A','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0005 VALUES ('13A','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0005 VALUES ('14A','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0005 VALUES ('15A','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0005 VALUES ('16A','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0005 VALUES ('17A','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0005 VALUES ('18A','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0005 VALUES ('19A','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0005 VALUES ('4B','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0005 VALUES ('5B','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0005 VALUES ('6B','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0005 VALUES ('7B','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0005 VALUES ('8B','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0005 VALUES ('9B','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0005 VALUES ('10B','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0005 VALUES ('11B','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0005 VALUES ('12B','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0005 VALUES ('13B','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0005 VALUES ('14B','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0005 VALUES ('15B','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0005 VALUES ('16B','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0005 VALUES ('17B','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0005 VALUES ('18B','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0005 VALUES ('19B','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0005 VALUES ('4C','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0005 VALUES ('5C','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0005 VALUES ('6C','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0005 VALUES ('7C','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0005 VALUES ('8C','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0005 VALUES ('9C','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0005 VALUES ('10C','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0005 VALUES ('11C','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0005 VALUES ('12C','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0005 VALUES ('13C','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0005 VALUES ('14C','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0005 VALUES ('15C','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0005 VALUES ('16C','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0005 VALUES ('17C','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0005 VALUES ('18C','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0005 VALUES ('19C','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0005 VALUES ('4D','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0005 VALUES ('5D','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0005 VALUES ('6D','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0005 VALUES ('7D','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0005 VALUES ('8D','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0005 VALUES ('9D','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0005 VALUES ('10D','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0005 VALUES ('11D','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0005 VALUES ('12D','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0005 VALUES ('13D','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0005 VALUES ('14D','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0005 VALUES ('15D','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0005 VALUES ('16D','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0005 VALUES ('17D','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0005 VALUES ('18D','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0005 VALUES ('19D','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0005 VALUES ('4E','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0005 VALUES ('5E','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0005 VALUES ('6E','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0005 VALUES ('7E','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0005 VALUES ('8E','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0005 VALUES ('9E','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0005 VALUES ('10E','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0005 VALUES ('11E','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0005 VALUES ('12E','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0005 VALUES ('13E','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0005 VALUES ('14E','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0005 VALUES ('15E','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0005 VALUES ('16E','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0005 VALUES ('17E','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0005 VALUES ('18E','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0005 VALUES ('19E','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0005 VALUES ('4F','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0005 VALUES ('5F','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0005 VALUES ('6F','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0005 VALUES ('7F','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0005 VALUES ('8F','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0005 VALUES ('9F','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0005 VALUES ('10F','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0005 VALUES ('11F','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0005 VALUES ('12F','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0005 VALUES ('13F','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0005 VALUES ('14F','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0005 VALUES ('15F','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0005 VALUES ('16F','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0005 VALUES ('17F','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0005 VALUES ('18F','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0005 VALUES ('19F','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0005 VALUES ('20A','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0005 VALUES ('20B','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0005 VALUES ('20C','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0005 VALUES ('20D','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0005 VALUES ('20E','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0005 VALUES ('20F','Normal class','50.000','20b');";
//insert VN0005




//Insert VN0006
	$sql .= "INSERT INTO VN0006 VALUES ('1A','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0006 VALUES ('2A','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0006 VALUES ('3A','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0006 VALUES ('1B','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0006 VALUES ('2B','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0006 VALUES ('3B','Business class','100.000','3a');";
	
	$sql .= "INSERT INTO VN0006 VALUES ('1C','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0006 VALUES ('2C','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0006 VALUES ('3C','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0006 VALUES ('1D','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0006 VALUES ('2D','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0006 VALUES ('3D','Business class','100.000','3b');";

	$sql .= "INSERT INTO VN0006 VALUES ('1E','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0006 VALUES ('2E','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0006 VALUES ('3E','Business class','100.000','3b');";
	
	$sql .= "INSERT INTO VN0006 VALUES ('1F','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0006 VALUES ('2F','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0006 VALUES ('3F','Business class','100.000','3b');";

	
	$sql .= "INSERT INTO VN0006 VALUES ('4A','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0006 VALUES ('5A','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0006 VALUES ('6A','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0006 VALUES ('7A','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0006 VALUES ('8A','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0006 VALUES ('9A','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0006 VALUES ('10A','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0006 VALUES ('11A','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0006 VALUES ('12A','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0006 VALUES ('13A','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0006 VALUES ('14A','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0006 VALUES ('15A','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0006 VALUES ('16A','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0006 VALUES ('17A','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0006 VALUES ('18A','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0006 VALUES ('19A','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0006 VALUES ('4B','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0006 VALUES ('5B','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0006 VALUES ('6B','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0006 VALUES ('7B','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0006 VALUES ('8B','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0006 VALUES ('9B','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0006 VALUES ('10B','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0006 VALUES ('11B','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0006 VALUES ('12B','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0006 VALUES ('13B','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0006 VALUES ('14B','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0006 VALUES ('15B','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0006 VALUES ('16B','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0006 VALUES ('17B','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0006 VALUES ('18B','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0006 VALUES ('19B','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0006 VALUES ('4C','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0006 VALUES ('5C','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0006 VALUES ('6C','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0006 VALUES ('7C','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0006 VALUES ('8C','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0006 VALUES ('9C','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0006 VALUES ('10C','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0006 VALUES ('11C','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0006 VALUES ('12C','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0006 VALUES ('13C','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0006 VALUES ('14C','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0006 VALUES ('15C','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0006 VALUES ('16C','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0006 VALUES ('17C','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0006 VALUES ('18C','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0006 VALUES ('19C','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0006 VALUES ('4D','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0006 VALUES ('5D','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0006 VALUES ('6D','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0006 VALUES ('7D','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0006 VALUES ('8D','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0006 VALUES ('9D','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0006 VALUES ('10D','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0006 VALUES ('11D','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0006 VALUES ('12D','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0006 VALUES ('13D','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0006 VALUES ('14D','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0006 VALUES ('15D','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0006 VALUES ('16D','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0006 VALUES ('17D','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0006 VALUES ('18D','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0006 VALUES ('19D','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0006 VALUES ('4E','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0006 VALUES ('5E','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0006 VALUES ('6E','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0006 VALUES ('7E','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0006 VALUES ('8E','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0006 VALUES ('9E','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0006 VALUES ('10E','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0006 VALUES ('11E','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0006 VALUES ('12E','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0006 VALUES ('13E','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0006 VALUES ('14E','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0006 VALUES ('15E','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0006 VALUES ('16E','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0006 VALUES ('17E','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0006 VALUES ('18E','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0006 VALUES ('19E','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0006 VALUES ('4F','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0006 VALUES ('5F','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0006 VALUES ('6F','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0006 VALUES ('7F','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0006 VALUES ('8F','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0006 VALUES ('9F','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0006 VALUES ('10F','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0006 VALUES ('11F','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0006 VALUES ('12F','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0006 VALUES ('13F','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0006 VALUES ('14F','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0006 VALUES ('15F','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0006 VALUES ('16F','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0006 VALUES ('17F','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0006 VALUES ('18F','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0006 VALUES ('19F','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0006 VALUES ('20A','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0006 VALUES ('20B','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0006 VALUES ('20C','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0006 VALUES ('20D','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0006 VALUES ('20E','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0006 VALUES ('20F','Normal class','50.000','20b');";
//insert VN0006




//Insert VN0007
	$sql .= "INSERT INTO VN0007 VALUES ('1A','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0007 VALUES ('2A','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0007 VALUES ('3A','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0007 VALUES ('1B','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0007 VALUES ('2B','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0007 VALUES ('3B','Business class','100.000','3a');";
	
	$sql .= "INSERT INTO VN0007 VALUES ('1C','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0007 VALUES ('2C','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0007 VALUES ('3C','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0007 VALUES ('1D','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0007 VALUES ('2D','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0007 VALUES ('3D','Business class','100.000','3b');";

	$sql .= "INSERT INTO VN0007 VALUES ('1E','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0007 VALUES ('2E','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0007 VALUES ('3E','Business class','100.000','3b');";
	
	$sql .= "INSERT INTO VN0007 VALUES ('1F','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0007 VALUES ('2F','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0007 VALUES ('3F','Business class','100.000','3b');";

	
	$sql .= "INSERT INTO VN0007 VALUES ('4A','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0007 VALUES ('5A','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0007 VALUES ('6A','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0007 VALUES ('7A','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0007 VALUES ('8A','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0007 VALUES ('9A','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0007 VALUES ('10A','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0007 VALUES ('11A','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0007 VALUES ('12A','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0007 VALUES ('13A','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0007 VALUES ('14A','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0007 VALUES ('15A','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0007 VALUES ('16A','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0007 VALUES ('17A','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0007 VALUES ('18A','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0007 VALUES ('19A','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0007 VALUES ('4B','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0007 VALUES ('5B','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0007 VALUES ('6B','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0007 VALUES ('7B','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0007 VALUES ('8B','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0007 VALUES ('9B','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0007 VALUES ('10B','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0007 VALUES ('11B','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0007 VALUES ('12B','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0007 VALUES ('13B','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0007 VALUES ('14B','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0007 VALUES ('15B','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0007 VALUES ('16B','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0007 VALUES ('17B','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0007 VALUES ('18B','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0007 VALUES ('19B','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0007 VALUES ('4C','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0007 VALUES ('5C','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0007 VALUES ('6C','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0007 VALUES ('7C','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0007 VALUES ('8C','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0007 VALUES ('9C','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0007 VALUES ('10C','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0007 VALUES ('11C','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0007 VALUES ('12C','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0007 VALUES ('13C','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0007 VALUES ('14C','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0007 VALUES ('15C','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0007 VALUES ('16C','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0007 VALUES ('17C','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0007 VALUES ('18C','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0007 VALUES ('19C','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0007 VALUES ('4D','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0007 VALUES ('5D','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0007 VALUES ('6D','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0007 VALUES ('7D','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0007 VALUES ('8D','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0007 VALUES ('9D','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0007 VALUES ('10D','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0007 VALUES ('11D','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0007 VALUES ('12D','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0007 VALUES ('13D','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0007 VALUES ('14D','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0007 VALUES ('15D','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0007 VALUES ('16D','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0007 VALUES ('17D','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0007 VALUES ('18D','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0007 VALUES ('19D','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0007 VALUES ('4E','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0007 VALUES ('5E','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0007 VALUES ('6E','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0007 VALUES ('7E','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0007 VALUES ('8E','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0007 VALUES ('9E','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0007 VALUES ('10E','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0007 VALUES ('11E','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0007 VALUES ('12E','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0007 VALUES ('13E','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0007 VALUES ('14E','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0007 VALUES ('15E','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0007 VALUES ('16E','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0007 VALUES ('17E','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0007 VALUES ('18E','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0007 VALUES ('19E','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0007 VALUES ('4F','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0007 VALUES ('5F','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0007 VALUES ('6F','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0007 VALUES ('7F','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0007 VALUES ('8F','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0007 VALUES ('9F','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0007 VALUES ('10F','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0007 VALUES ('11F','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0007 VALUES ('12F','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0007 VALUES ('13F','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0007 VALUES ('14F','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0007 VALUES ('15F','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0007 VALUES ('16F','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0007 VALUES ('17F','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0007 VALUES ('18F','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0007 VALUES ('19F','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0007 VALUES ('20A','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0007 VALUES ('20B','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0007 VALUES ('20C','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0007 VALUES ('20D','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0007 VALUES ('20E','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0007 VALUES ('20F','Normal class','50.000','20b');";
//insert VN0007




//Insert VN0008
	$sql .= "INSERT INTO VN0008 VALUES ('1A','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0008 VALUES ('2A','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0008 VALUES ('3A','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0008 VALUES ('1B','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0008 VALUES ('2B','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0008 VALUES ('3B','Business class','100.000','3a');";
	
	$sql .= "INSERT INTO VN0008 VALUES ('1C','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0008 VALUES ('2C','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0008 VALUES ('3C','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0008 VALUES ('1D','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0008 VALUES ('2D','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0008 VALUES ('3D','Business class','100.000','3b');";

	$sql .= "INSERT INTO VN0008 VALUES ('1E','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0008 VALUES ('2E','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0008 VALUES ('3E','Business class','100.000','3b');";
	
	$sql .= "INSERT INTO VN0008 VALUES ('1F','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0008 VALUES ('2F','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0008 VALUES ('3F','Business class','100.000','3b');";

	
	$sql .= "INSERT INTO VN0008 VALUES ('4A','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0008 VALUES ('5A','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0008 VALUES ('6A','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0008 VALUES ('7A','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0008 VALUES ('8A','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0008 VALUES ('9A','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0008 VALUES ('10A','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0008 VALUES ('11A','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0008 VALUES ('12A','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0008 VALUES ('13A','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0008 VALUES ('14A','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0008 VALUES ('15A','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0008 VALUES ('16A','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0008 VALUES ('17A','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0008 VALUES ('18A','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0008 VALUES ('19A','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0008 VALUES ('4B','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0008 VALUES ('5B','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0008 VALUES ('6B','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0008 VALUES ('7B','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0008 VALUES ('8B','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0008 VALUES ('9B','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0008 VALUES ('10B','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0008 VALUES ('11B','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0008 VALUES ('12B','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0008 VALUES ('13B','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0008 VALUES ('14B','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0008 VALUES ('15B','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0008 VALUES ('16B','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0008 VALUES ('17B','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0008 VALUES ('18B','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0008 VALUES ('19B','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0008 VALUES ('4C','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0008 VALUES ('5C','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0008 VALUES ('6C','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0008 VALUES ('7C','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0008 VALUES ('8C','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0008 VALUES ('9C','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0008 VALUES ('10C','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0008 VALUES ('11C','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0008 VALUES ('12C','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0008 VALUES ('13C','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0008 VALUES ('14C','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0008 VALUES ('15C','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0008 VALUES ('16C','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0008 VALUES ('17C','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0008 VALUES ('18C','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0008 VALUES ('19C','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0008 VALUES ('4D','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0008 VALUES ('5D','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0008 VALUES ('6D','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0008 VALUES ('7D','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0008 VALUES ('8D','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0008 VALUES ('9D','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0008 VALUES ('10D','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0008 VALUES ('11D','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0008 VALUES ('12D','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0008 VALUES ('13D','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0008 VALUES ('14D','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0008 VALUES ('15D','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0008 VALUES ('16D','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0008 VALUES ('17D','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0008 VALUES ('18D','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0008 VALUES ('19D','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0008 VALUES ('4E','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0008 VALUES ('5E','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0008 VALUES ('6E','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0008 VALUES ('7E','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0008 VALUES ('8E','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0008 VALUES ('9E','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0008 VALUES ('10E','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0008 VALUES ('11E','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0008 VALUES ('12E','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0008 VALUES ('13E','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0008 VALUES ('14E','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0008 VALUES ('15E','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0008 VALUES ('16E','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0008 VALUES ('17E','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0008 VALUES ('18E','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0008 VALUES ('19E','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0008 VALUES ('4F','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0008 VALUES ('5F','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0008 VALUES ('6F','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0008 VALUES ('7F','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0008 VALUES ('8F','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0008 VALUES ('9F','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0008 VALUES ('10F','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0008 VALUES ('11F','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0008 VALUES ('12F','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0008 VALUES ('13F','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0008 VALUES ('14F','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0008 VALUES ('15F','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0008 VALUES ('16F','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0008 VALUES ('17F','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0008 VALUES ('18F','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0008 VALUES ('19F','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0008 VALUES ('20A','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0008 VALUES ('20B','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0008 VALUES ('20C','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0008 VALUES ('20D','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0008 VALUES ('20E','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0008 VALUES ('20F','Normal class','50.000','20b');";
//insert VN0008




//Insert VN0009
	$sql .= "INSERT INTO VN0009 VALUES ('1A','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0009 VALUES ('2A','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0009 VALUES ('3A','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0009 VALUES ('1B','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0009 VALUES ('2B','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0009 VALUES ('3B','Business class','100.000','3a');";
	
	$sql .= "INSERT INTO VN0009 VALUES ('1C','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0009 VALUES ('2C','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0009 VALUES ('3C','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0009 VALUES ('1D','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0009 VALUES ('2D','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0009 VALUES ('3D','Business class','100.000','3b');";

	$sql .= "INSERT INTO VN0009 VALUES ('1E','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0009 VALUES ('2E','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0009 VALUES ('3E','Business class','100.000','3b');";
	
	$sql .= "INSERT INTO VN0009 VALUES ('1F','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0009 VALUES ('2F','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0009 VALUES ('3F','Business class','100.000','3b');";

	
	$sql .= "INSERT INTO VN0009 VALUES ('4A','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0009 VALUES ('5A','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0009 VALUES ('6A','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0009 VALUES ('7A','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0009 VALUES ('8A','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0009 VALUES ('9A','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0009 VALUES ('10A','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0009 VALUES ('11A','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0009 VALUES ('12A','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0009 VALUES ('13A','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0009 VALUES ('14A','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0009 VALUES ('15A','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0009 VALUES ('16A','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0009 VALUES ('17A','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0009 VALUES ('18A','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0009 VALUES ('19A','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0009 VALUES ('4B','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0009 VALUES ('5B','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0009 VALUES ('6B','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0009 VALUES ('7B','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0009 VALUES ('8B','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0009 VALUES ('9B','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0009 VALUES ('10B','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0009 VALUES ('11B','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0009 VALUES ('12B','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0009 VALUES ('13B','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0009 VALUES ('14B','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0009 VALUES ('15B','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0009 VALUES ('16B','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0009 VALUES ('17B','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0009 VALUES ('18B','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0009 VALUES ('19B','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0009 VALUES ('4C','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0009 VALUES ('5C','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0009 VALUES ('6C','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0009 VALUES ('7C','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0009 VALUES ('8C','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0009 VALUES ('9C','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0009 VALUES ('10C','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0009 VALUES ('11C','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0009 VALUES ('12C','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0009 VALUES ('13C','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0009 VALUES ('14C','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0009 VALUES ('15C','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0009 VALUES ('16C','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0009 VALUES ('17C','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0009 VALUES ('18C','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0009 VALUES ('19C','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0009 VALUES ('4D','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0009 VALUES ('5D','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0009 VALUES ('6D','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0009 VALUES ('7D','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0009 VALUES ('8D','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0009 VALUES ('9D','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0009 VALUES ('10D','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0009 VALUES ('11D','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0009 VALUES ('12D','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0009 VALUES ('13D','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0009 VALUES ('14D','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0009 VALUES ('15D','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0009 VALUES ('16D','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0009 VALUES ('17D','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0009 VALUES ('18D','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0009 VALUES ('19D','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0009 VALUES ('4E','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0009 VALUES ('5E','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0009 VALUES ('6E','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0009 VALUES ('7E','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0009 VALUES ('8E','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0009 VALUES ('9E','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0009 VALUES ('10E','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0009 VALUES ('11E','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0009 VALUES ('12E','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0009 VALUES ('13E','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0009 VALUES ('14E','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0009 VALUES ('15E','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0009 VALUES ('16E','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0009 VALUES ('17E','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0009 VALUES ('18E','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0009 VALUES ('19E','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0009 VALUES ('4F','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0009 VALUES ('5F','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0009 VALUES ('6F','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0009 VALUES ('7F','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0009 VALUES ('8F','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0009 VALUES ('9F','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0009 VALUES ('10F','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0009 VALUES ('11F','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0009 VALUES ('12F','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0009 VALUES ('13F','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0009 VALUES ('14F','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0009 VALUES ('15F','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0009 VALUES ('16F','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0009 VALUES ('17F','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0009 VALUES ('18F','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0009 VALUES ('19F','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0009 VALUES ('20A','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0009 VALUES ('20B','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0009 VALUES ('20C','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0009 VALUES ('20D','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0009 VALUES ('20E','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0009 VALUES ('20F','Normal class','50.000','20b');";
//insert VN0009




//Insert VN0010
	$sql .= "INSERT INTO VN0010 VALUES ('1A','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0010 VALUES ('2A','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0010 VALUES ('3A','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0010 VALUES ('1B','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0010 VALUES ('2B','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0010 VALUES ('3B','Business class','100.000','3a');";
	
	$sql .= "INSERT INTO VN0010 VALUES ('1C','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0010 VALUES ('2C','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0010 VALUES ('3C','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0010 VALUES ('1D','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0010 VALUES ('2D','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0010 VALUES ('3D','Business class','100.000','3b');";

	$sql .= "INSERT INTO VN0010 VALUES ('1E','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0010 VALUES ('2E','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0010 VALUES ('3E','Business class','100.000','3b');";
	
	$sql .= "INSERT INTO VN0010 VALUES ('1F','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0010 VALUES ('2F','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0010 VALUES ('3F','Business class','100.000','3b');";

	
	$sql .= "INSERT INTO VN0010 VALUES ('4A','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0010 VALUES ('5A','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0010 VALUES ('6A','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0010 VALUES ('7A','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0010 VALUES ('8A','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0010 VALUES ('9A','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0010 VALUES ('10A','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0010 VALUES ('11A','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0010 VALUES ('12A','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0010 VALUES ('13A','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0010 VALUES ('14A','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0010 VALUES ('15A','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0010 VALUES ('16A','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0010 VALUES ('17A','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0010 VALUES ('18A','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0010 VALUES ('19A','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0010 VALUES ('4B','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0010 VALUES ('5B','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0010 VALUES ('6B','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0010 VALUES ('7B','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0010 VALUES ('8B','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0010 VALUES ('9B','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0010 VALUES ('10B','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0010 VALUES ('11B','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0010 VALUES ('12B','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0010 VALUES ('13B','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0010 VALUES ('14B','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0010 VALUES ('15B','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0010 VALUES ('16B','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0010 VALUES ('17B','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0010 VALUES ('18B','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0010 VALUES ('19B','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0010 VALUES ('4C','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0010 VALUES ('5C','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0010 VALUES ('6C','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0010 VALUES ('7C','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0010 VALUES ('8C','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0010 VALUES ('9C','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0010 VALUES ('10C','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0010 VALUES ('11C','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0010 VALUES ('12C','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0010 VALUES ('13C','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0010 VALUES ('14C','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0010 VALUES ('15C','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0010 VALUES ('16C','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0010 VALUES ('17C','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0010 VALUES ('18C','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0010 VALUES ('19C','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0010 VALUES ('4D','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0010 VALUES ('5D','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0010 VALUES ('6D','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0010 VALUES ('7D','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0010 VALUES ('8D','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0010 VALUES ('9D','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0010 VALUES ('10D','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0010 VALUES ('11D','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0010 VALUES ('12D','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0010 VALUES ('13D','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0010 VALUES ('14D','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0010 VALUES ('15D','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0010 VALUES ('16D','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0010 VALUES ('17D','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0010 VALUES ('18D','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0010 VALUES ('19D','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0010 VALUES ('4E','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0010 VALUES ('5E','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0010 VALUES ('6E','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0010 VALUES ('7E','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0010 VALUES ('8E','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0010 VALUES ('9E','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0010 VALUES ('10E','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0010 VALUES ('11E','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0010 VALUES ('12E','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0010 VALUES ('13E','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0010 VALUES ('14E','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0010 VALUES ('15E','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0010 VALUES ('16E','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0010 VALUES ('17E','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0010 VALUES ('18E','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0010 VALUES ('19E','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0010 VALUES ('4F','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0010 VALUES ('5F','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0010 VALUES ('6F','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0010 VALUES ('7F','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0010 VALUES ('8F','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0010 VALUES ('9F','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0010 VALUES ('10F','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0010 VALUES ('11F','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0010 VALUES ('12F','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0010 VALUES ('13F','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0010 VALUES ('14F','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0010 VALUES ('15F','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0010 VALUES ('16F','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0010 VALUES ('17F','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0010 VALUES ('18F','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0010 VALUES ('19F','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0010 VALUES ('20A','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0010 VALUES ('20B','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0010 VALUES ('20C','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0010 VALUES ('20D','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0010 VALUES ('20E','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0010 VALUES ('20F','Normal class','50.000','20b');";
//insert VN0010




//Insert VN0011
	$sql .= "INSERT INTO VN0011 VALUES ('1A','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0011 VALUES ('2A','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0011 VALUES ('3A','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0011 VALUES ('1B','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0011 VALUES ('2B','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0011 VALUES ('3B','Business class','100.000','3a');";
	
	$sql .= "INSERT INTO VN0011 VALUES ('1C','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0011 VALUES ('2C','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0011 VALUES ('3C','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0011 VALUES ('1D','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0011 VALUES ('2D','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0011 VALUES ('3D','Business class','100.000','3b');";

	$sql .= "INSERT INTO VN0011 VALUES ('1E','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0011 VALUES ('2E','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0011 VALUES ('3E','Business class','100.000','3b');";
	
	$sql .= "INSERT INTO VN0011 VALUES ('1F','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0011 VALUES ('2F','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0011 VALUES ('3F','Business class','100.000','3b');";

	
	$sql .= "INSERT INTO VN0011 VALUES ('4A','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0011 VALUES ('5A','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0011 VALUES ('6A','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0011 VALUES ('7A','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0011 VALUES ('8A','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0011 VALUES ('9A','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0011 VALUES ('10A','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0011 VALUES ('11A','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0011 VALUES ('12A','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0011 VALUES ('13A','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0011 VALUES ('14A','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0011 VALUES ('15A','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0011 VALUES ('16A','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0011 VALUES ('17A','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0011 VALUES ('18A','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0011 VALUES ('19A','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0011 VALUES ('4B','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0011 VALUES ('5B','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0011 VALUES ('6B','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0011 VALUES ('7B','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0011 VALUES ('8B','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0011 VALUES ('9B','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0011 VALUES ('10B','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0011 VALUES ('11B','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0011 VALUES ('12B','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0011 VALUES ('13B','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0011 VALUES ('14B','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0011 VALUES ('15B','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0011 VALUES ('16B','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0011 VALUES ('17B','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0011 VALUES ('18B','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0011 VALUES ('19B','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0011 VALUES ('4C','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0011 VALUES ('5C','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0011 VALUES ('6C','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0011 VALUES ('7C','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0011 VALUES ('8C','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0011 VALUES ('9C','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0011 VALUES ('10C','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0011 VALUES ('11C','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0011 VALUES ('12C','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0011 VALUES ('13C','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0011 VALUES ('14C','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0011 VALUES ('15C','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0011 VALUES ('16C','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0011 VALUES ('17C','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0011 VALUES ('18C','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0011 VALUES ('19C','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0011 VALUES ('4D','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0011 VALUES ('5D','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0011 VALUES ('6D','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0011 VALUES ('7D','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0011 VALUES ('8D','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0011 VALUES ('9D','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0011 VALUES ('10D','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0011 VALUES ('11D','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0011 VALUES ('12D','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0011 VALUES ('13D','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0011 VALUES ('14D','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0011 VALUES ('15D','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0011 VALUES ('16D','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0011 VALUES ('17D','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0011 VALUES ('18D','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0011 VALUES ('19D','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0011 VALUES ('4E','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0011 VALUES ('5E','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0011 VALUES ('6E','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0011 VALUES ('7E','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0011 VALUES ('8E','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0011 VALUES ('9E','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0011 VALUES ('10E','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0011 VALUES ('11E','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0011 VALUES ('12E','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0011 VALUES ('13E','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0011 VALUES ('14E','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0011 VALUES ('15E','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0011 VALUES ('16E','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0011 VALUES ('17E','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0011 VALUES ('18E','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0011 VALUES ('19E','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0011 VALUES ('4F','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0011 VALUES ('5F','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0011 VALUES ('6F','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0011 VALUES ('7F','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0011 VALUES ('8F','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0011 VALUES ('9F','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0011 VALUES ('10F','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0011 VALUES ('11F','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0011 VALUES ('12F','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0011 VALUES ('13F','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0011 VALUES ('14F','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0011 VALUES ('15F','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0011 VALUES ('16F','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0011 VALUES ('17F','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0011 VALUES ('18F','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0011 VALUES ('19F','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0011 VALUES ('20A','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0011 VALUES ('20B','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0011 VALUES ('20C','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0011 VALUES ('20D','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0011 VALUES ('20E','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0011 VALUES ('20F','Normal class','50.000','20b');";
//insert VN0011




//Insert VN0012
	$sql .= "INSERT INTO VN0012 VALUES ('1A','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0012 VALUES ('2A','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0012 VALUES ('3A','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0012 VALUES ('1B','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0012 VALUES ('2B','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0012 VALUES ('3B','Business class','100.000','3a');";
	
	$sql .= "INSERT INTO VN0012 VALUES ('1C','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0012 VALUES ('2C','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0012 VALUES ('3C','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0012 VALUES ('1D','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0012 VALUES ('2D','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0012 VALUES ('3D','Business class','100.000','3b');";

	$sql .= "INSERT INTO VN0012 VALUES ('1E','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0012 VALUES ('2E','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0012 VALUES ('3E','Business class','100.000','3b');";
	
	$sql .= "INSERT INTO VN0012 VALUES ('1F','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0012 VALUES ('2F','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0012 VALUES ('3F','Business class','100.000','3b');";

	
	$sql .= "INSERT INTO VN0012 VALUES ('4A','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0012 VALUES ('5A','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0012 VALUES ('6A','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0012 VALUES ('7A','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0012 VALUES ('8A','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0012 VALUES ('9A','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0012 VALUES ('10A','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0012 VALUES ('11A','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0012 VALUES ('12A','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0012 VALUES ('13A','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0012 VALUES ('14A','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0012 VALUES ('15A','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0012 VALUES ('16A','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0012 VALUES ('17A','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0012 VALUES ('18A','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0012 VALUES ('19A','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0012 VALUES ('4B','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0012 VALUES ('5B','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0012 VALUES ('6B','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0012 VALUES ('7B','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0012 VALUES ('8B','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0012 VALUES ('9B','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0012 VALUES ('10B','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0012 VALUES ('11B','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0012 VALUES ('12B','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0012 VALUES ('13B','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0012 VALUES ('14B','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0012 VALUES ('15B','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0012 VALUES ('16B','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0012 VALUES ('17B','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0012 VALUES ('18B','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0012 VALUES ('19B','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0012 VALUES ('4C','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0012 VALUES ('5C','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0012 VALUES ('6C','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0012 VALUES ('7C','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0012 VALUES ('8C','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0012 VALUES ('9C','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0012 VALUES ('10C','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0012 VALUES ('11C','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0012 VALUES ('12C','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0012 VALUES ('13C','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0012 VALUES ('14C','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0012 VALUES ('15C','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0012 VALUES ('16C','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0012 VALUES ('17C','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0012 VALUES ('18C','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0012 VALUES ('19C','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0012 VALUES ('4D','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0012 VALUES ('5D','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0012 VALUES ('6D','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0012 VALUES ('7D','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0012 VALUES ('8D','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0012 VALUES ('9D','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0012 VALUES ('10D','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0012 VALUES ('11D','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0012 VALUES ('12D','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0012 VALUES ('13D','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0012 VALUES ('14D','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0012 VALUES ('15D','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0012 VALUES ('16D','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0012 VALUES ('17D','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0012 VALUES ('18D','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0012 VALUES ('19D','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0012 VALUES ('4E','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0012 VALUES ('5E','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0012 VALUES ('6E','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0012 VALUES ('7E','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0012 VALUES ('8E','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0012 VALUES ('9E','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0012 VALUES ('10E','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0012 VALUES ('11E','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0012 VALUES ('12E','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0012 VALUES ('13E','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0012 VALUES ('14E','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0012 VALUES ('15E','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0012 VALUES ('16E','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0012 VALUES ('17E','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0012 VALUES ('18E','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0012 VALUES ('19E','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0012 VALUES ('4F','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0012 VALUES ('5F','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0012 VALUES ('6F','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0012 VALUES ('7F','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0012 VALUES ('8F','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0012 VALUES ('9F','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0012 VALUES ('10F','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0012 VALUES ('11F','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0012 VALUES ('12F','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0012 VALUES ('13F','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0012 VALUES ('14F','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0012 VALUES ('15F','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0012 VALUES ('16F','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0012 VALUES ('17F','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0012 VALUES ('18F','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0012 VALUES ('19F','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0012 VALUES ('20A','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0012 VALUES ('20B','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0012 VALUES ('20C','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0012 VALUES ('20D','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0012 VALUES ('20E','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0012 VALUES ('20F','Normal class','50.000','20b');";
//insert VN0012




//Insert VN0013
	$sql .= "INSERT INTO VN0013 VALUES ('1A','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0013 VALUES ('2A','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0013 VALUES ('3A','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0013 VALUES ('1B','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0013 VALUES ('2B','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0013 VALUES ('3B','Business class','100.000','3a');";
	
	$sql .= "INSERT INTO VN0013 VALUES ('1C','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0013 VALUES ('2C','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0013 VALUES ('3C','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0013 VALUES ('1D','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0013 VALUES ('2D','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0013 VALUES ('3D','Business class','100.000','3b');";

	$sql .= "INSERT INTO VN0013 VALUES ('1E','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0013 VALUES ('2E','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0013 VALUES ('3E','Business class','100.000','3b');";
	
	$sql .= "INSERT INTO VN0013 VALUES ('1F','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0013 VALUES ('2F','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0013 VALUES ('3F','Business class','100.000','3b');";

	
	$sql .= "INSERT INTO VN0013 VALUES ('4A','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0013 VALUES ('5A','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0013 VALUES ('6A','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0013 VALUES ('7A','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0013 VALUES ('8A','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0013 VALUES ('9A','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0013 VALUES ('10A','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0013 VALUES ('11A','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0013 VALUES ('12A','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0013 VALUES ('13A','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0013 VALUES ('14A','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0013 VALUES ('15A','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0013 VALUES ('16A','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0013 VALUES ('17A','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0013 VALUES ('18A','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0013 VALUES ('19A','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0013 VALUES ('4B','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0013 VALUES ('5B','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0013 VALUES ('6B','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0013 VALUES ('7B','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0013 VALUES ('8B','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0013 VALUES ('9B','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0013 VALUES ('10B','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0013 VALUES ('11B','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0013 VALUES ('12B','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0013 VALUES ('13B','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0013 VALUES ('14B','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0013 VALUES ('15B','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0013 VALUES ('16B','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0013 VALUES ('17B','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0013 VALUES ('18B','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0013 VALUES ('19B','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0013 VALUES ('4C','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0013 VALUES ('5C','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0013 VALUES ('6C','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0013 VALUES ('7C','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0013 VALUES ('8C','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0013 VALUES ('9C','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0013 VALUES ('10C','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0013 VALUES ('11C','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0013 VALUES ('12C','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0013 VALUES ('13C','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0013 VALUES ('14C','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0013 VALUES ('15C','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0013 VALUES ('16C','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0013 VALUES ('17C','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0013 VALUES ('18C','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0013 VALUES ('19C','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0013 VALUES ('4D','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0013 VALUES ('5D','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0013 VALUES ('6D','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0013 VALUES ('7D','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0013 VALUES ('8D','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0013 VALUES ('9D','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0013 VALUES ('10D','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0013 VALUES ('11D','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0013 VALUES ('12D','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0013 VALUES ('13D','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0013 VALUES ('14D','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0013 VALUES ('15D','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0013 VALUES ('16D','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0013 VALUES ('17D','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0013 VALUES ('18D','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0013 VALUES ('19D','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0013 VALUES ('4E','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0013 VALUES ('5E','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0013 VALUES ('6E','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0013 VALUES ('7E','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0013 VALUES ('8E','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0013 VALUES ('9E','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0013 VALUES ('10E','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0013 VALUES ('11E','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0013 VALUES ('12E','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0013 VALUES ('13E','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0013 VALUES ('14E','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0013 VALUES ('15E','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0013 VALUES ('16E','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0013 VALUES ('17E','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0013 VALUES ('18E','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0013 VALUES ('19E','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0013 VALUES ('4F','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0013 VALUES ('5F','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0013 VALUES ('6F','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0013 VALUES ('7F','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0013 VALUES ('8F','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0013 VALUES ('9F','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0013 VALUES ('10F','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0013 VALUES ('11F','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0013 VALUES ('12F','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0013 VALUES ('13F','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0013 VALUES ('14F','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0013 VALUES ('15F','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0013 VALUES ('16F','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0013 VALUES ('17F','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0013 VALUES ('18F','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0013 VALUES ('19F','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0013 VALUES ('20A','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0013 VALUES ('20B','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0013 VALUES ('20C','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0013 VALUES ('20D','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0013 VALUES ('20E','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0013 VALUES ('20F','Normal class','50.000','20b');";
//insert VN0013




//Insert VN0014
	$sql .= "INSERT INTO VN0014 VALUES ('1A','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0014 VALUES ('2A','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0014 VALUES ('3A','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0014 VALUES ('1B','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0014 VALUES ('2B','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0014 VALUES ('3B','Business class','100.000','3a');";
	
	$sql .= "INSERT INTO VN0014 VALUES ('1C','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0014 VALUES ('2C','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0014 VALUES ('3C','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0014 VALUES ('1D','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0014 VALUES ('2D','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0014 VALUES ('3D','Business class','100.000','3b');";

	$sql .= "INSERT INTO VN0014 VALUES ('1E','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0014 VALUES ('2E','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0014 VALUES ('3E','Business class','100.000','3b');";
	
	$sql .= "INSERT INTO VN0014 VALUES ('1F','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0014 VALUES ('2F','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0014 VALUES ('3F','Business class','100.000','3b');";

	
	$sql .= "INSERT INTO VN0014 VALUES ('4A','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0014 VALUES ('5A','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0014 VALUES ('6A','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0014 VALUES ('7A','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0014 VALUES ('8A','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0014 VALUES ('9A','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0014 VALUES ('10A','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0014 VALUES ('11A','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0014 VALUES ('12A','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0014 VALUES ('13A','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0014 VALUES ('14A','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0014 VALUES ('15A','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0014 VALUES ('16A','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0014 VALUES ('17A','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0014 VALUES ('18A','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0014 VALUES ('19A','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0014 VALUES ('4B','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0014 VALUES ('5B','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0014 VALUES ('6B','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0014 VALUES ('7B','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0014 VALUES ('8B','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0014 VALUES ('9B','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0014 VALUES ('10B','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0014 VALUES ('11B','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0014 VALUES ('12B','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0014 VALUES ('13B','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0014 VALUES ('14B','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0014 VALUES ('15B','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0014 VALUES ('16B','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0014 VALUES ('17B','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0014 VALUES ('18B','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0014 VALUES ('19B','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0014 VALUES ('4C','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0014 VALUES ('5C','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0014 VALUES ('6C','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0014 VALUES ('7C','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0014 VALUES ('8C','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0014 VALUES ('9C','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0014 VALUES ('10C','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0014 VALUES ('11C','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0014 VALUES ('12C','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0014 VALUES ('13C','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0014 VALUES ('14C','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0014 VALUES ('15C','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0014 VALUES ('16C','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0014 VALUES ('17C','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0014 VALUES ('18C','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0014 VALUES ('19C','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0014 VALUES ('4D','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0014 VALUES ('5D','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0014 VALUES ('6D','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0014 VALUES ('7D','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0014 VALUES ('8D','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0014 VALUES ('9D','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0014 VALUES ('10D','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0014 VALUES ('11D','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0014 VALUES ('12D','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0014 VALUES ('13D','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0014 VALUES ('14D','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0014 VALUES ('15D','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0014 VALUES ('16D','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0014 VALUES ('17D','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0014 VALUES ('18D','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0014 VALUES ('19D','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0014 VALUES ('4E','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0014 VALUES ('5E','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0014 VALUES ('6E','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0014 VALUES ('7E','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0014 VALUES ('8E','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0014 VALUES ('9E','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0014 VALUES ('10E','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0014 VALUES ('11E','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0014 VALUES ('12E','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0014 VALUES ('13E','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0014 VALUES ('14E','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0014 VALUES ('15E','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0014 VALUES ('16E','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0014 VALUES ('17E','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0014 VALUES ('18E','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0014 VALUES ('19E','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0014 VALUES ('4F','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0014 VALUES ('5F','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0014 VALUES ('6F','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0014 VALUES ('7F','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0014 VALUES ('8F','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0014 VALUES ('9F','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0014 VALUES ('10F','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0014 VALUES ('11F','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0014 VALUES ('12F','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0014 VALUES ('13F','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0014 VALUES ('14F','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0014 VALUES ('15F','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0014 VALUES ('16F','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0014 VALUES ('17F','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0014 VALUES ('18F','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0014 VALUES ('19F','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0014 VALUES ('20A','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0014 VALUES ('20B','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0014 VALUES ('20C','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0014 VALUES ('20D','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0014 VALUES ('20E','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0014 VALUES ('20F','Normal class','50.000','20b');";
//insert VN0014




//Insert VN0015
	$sql .= "INSERT INTO VN0015 VALUES ('1A','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0015 VALUES ('2A','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0015 VALUES ('3A','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0015 VALUES ('1B','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0015 VALUES ('2B','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0015 VALUES ('3B','Business class','100.000','3a');";
	
	$sql .= "INSERT INTO VN0015 VALUES ('1C','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0015 VALUES ('2C','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0015 VALUES ('3C','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0015 VALUES ('1D','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0015 VALUES ('2D','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0015 VALUES ('3D','Business class','100.000','3b');";

	$sql .= "INSERT INTO VN0015 VALUES ('1E','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0015 VALUES ('2E','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0015 VALUES ('3E','Business class','100.000','3b');";
	
	$sql .= "INSERT INTO VN0015 VALUES ('1F','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0015 VALUES ('2F','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0015 VALUES ('3F','Business class','100.000','3b');";

	
	$sql .= "INSERT INTO VN0015 VALUES ('4A','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0015 VALUES ('5A','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0015 VALUES ('6A','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0015 VALUES ('7A','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0015 VALUES ('8A','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0015 VALUES ('9A','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0015 VALUES ('10A','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0015 VALUES ('11A','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0015 VALUES ('12A','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0015 VALUES ('13A','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0015 VALUES ('14A','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0015 VALUES ('15A','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0015 VALUES ('16A','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0015 VALUES ('17A','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0015 VALUES ('18A','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0015 VALUES ('19A','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0015 VALUES ('4B','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0015 VALUES ('5B','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0015 VALUES ('6B','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0015 VALUES ('7B','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0015 VALUES ('8B','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0015 VALUES ('9B','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0015 VALUES ('10B','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0015 VALUES ('11B','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0015 VALUES ('12B','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0015 VALUES ('13B','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0015 VALUES ('14B','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0015 VALUES ('15B','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0015 VALUES ('16B','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0015 VALUES ('17B','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0015 VALUES ('18B','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0015 VALUES ('19B','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0015 VALUES ('4C','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0015 VALUES ('5C','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0015 VALUES ('6C','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0015 VALUES ('7C','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0015 VALUES ('8C','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0015 VALUES ('9C','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0015 VALUES ('10C','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0015 VALUES ('11C','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0015 VALUES ('12C','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0015 VALUES ('13C','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0015 VALUES ('14C','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0015 VALUES ('15C','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0015 VALUES ('16C','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0015 VALUES ('17C','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0015 VALUES ('18C','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0015 VALUES ('19C','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0015 VALUES ('4D','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0015 VALUES ('5D','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0015 VALUES ('6D','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0015 VALUES ('7D','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0015 VALUES ('8D','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0015 VALUES ('9D','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0015 VALUES ('10D','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0015 VALUES ('11D','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0015 VALUES ('12D','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0015 VALUES ('13D','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0015 VALUES ('14D','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0015 VALUES ('15D','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0015 VALUES ('16D','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0015 VALUES ('17D','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0015 VALUES ('18D','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0015 VALUES ('19D','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0015 VALUES ('4E','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0015 VALUES ('5E','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0015 VALUES ('6E','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0015 VALUES ('7E','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0015 VALUES ('8E','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0015 VALUES ('9E','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0015 VALUES ('10E','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0015 VALUES ('11E','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0015 VALUES ('12E','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0015 VALUES ('13E','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0015 VALUES ('14E','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0015 VALUES ('15E','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0015 VALUES ('16E','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0015 VALUES ('17E','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0015 VALUES ('18E','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0015 VALUES ('19E','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0015 VALUES ('4F','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0015 VALUES ('5F','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0015 VALUES ('6F','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0015 VALUES ('7F','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0015 VALUES ('8F','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0015 VALUES ('9F','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0015 VALUES ('10F','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0015 VALUES ('11F','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0015 VALUES ('12F','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0015 VALUES ('13F','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0015 VALUES ('14F','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0015 VALUES ('15F','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0015 VALUES ('16F','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0015 VALUES ('17F','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0015 VALUES ('18F','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0015 VALUES ('19F','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0015 VALUES ('20A','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0015 VALUES ('20B','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0015 VALUES ('20C','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0015 VALUES ('20D','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0015 VALUES ('20E','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0015 VALUES ('20F','Normal class','50.000','20b');";
//insert VN0015




//Insert VN0016
	$sql .= "INSERT INTO VN0016 VALUES ('1A','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0016 VALUES ('2A','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0016 VALUES ('3A','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0016 VALUES ('1B','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0016 VALUES ('2B','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0016 VALUES ('3B','Business class','100.000','3a');";
	
	$sql .= "INSERT INTO VN0016 VALUES ('1C','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0016 VALUES ('2C','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0016 VALUES ('3C','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0016 VALUES ('1D','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0016 VALUES ('2D','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0016 VALUES ('3D','Business class','100.000','3b');";

	$sql .= "INSERT INTO VN0016 VALUES ('1E','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0016 VALUES ('2E','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0016 VALUES ('3E','Business class','100.000','3b');";
	
	$sql .= "INSERT INTO VN0016 VALUES ('1F','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0016 VALUES ('2F','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0016 VALUES ('3F','Business class','100.000','3b');";

	
	$sql .= "INSERT INTO VN0016 VALUES ('4A','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0016 VALUES ('5A','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0016 VALUES ('6A','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0016 VALUES ('7A','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0016 VALUES ('8A','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0016 VALUES ('9A','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0016 VALUES ('10A','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0016 VALUES ('11A','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0016 VALUES ('12A','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0016 VALUES ('13A','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0016 VALUES ('14A','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0016 VALUES ('15A','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0016 VALUES ('16A','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0016 VALUES ('17A','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0016 VALUES ('18A','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0016 VALUES ('19A','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0016 VALUES ('4B','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0016 VALUES ('5B','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0016 VALUES ('6B','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0016 VALUES ('7B','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0016 VALUES ('8B','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0016 VALUES ('9B','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0016 VALUES ('10B','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0016 VALUES ('11B','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0016 VALUES ('12B','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0016 VALUES ('13B','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0016 VALUES ('14B','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0016 VALUES ('15B','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0016 VALUES ('16B','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0016 VALUES ('17B','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0016 VALUES ('18B','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0016 VALUES ('19B','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0016 VALUES ('4C','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0016 VALUES ('5C','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0016 VALUES ('6C','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0016 VALUES ('7C','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0016 VALUES ('8C','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0016 VALUES ('9C','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0016 VALUES ('10C','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0016 VALUES ('11C','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0016 VALUES ('12C','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0016 VALUES ('13C','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0016 VALUES ('14C','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0016 VALUES ('15C','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0016 VALUES ('16C','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0016 VALUES ('17C','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0016 VALUES ('18C','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0016 VALUES ('19C','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0016 VALUES ('4D','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0016 VALUES ('5D','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0016 VALUES ('6D','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0016 VALUES ('7D','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0016 VALUES ('8D','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0016 VALUES ('9D','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0016 VALUES ('10D','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0016 VALUES ('11D','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0016 VALUES ('12D','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0016 VALUES ('13D','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0016 VALUES ('14D','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0016 VALUES ('15D','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0016 VALUES ('16D','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0016 VALUES ('17D','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0016 VALUES ('18D','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0016 VALUES ('19D','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0016 VALUES ('4E','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0016 VALUES ('5E','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0016 VALUES ('6E','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0016 VALUES ('7E','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0016 VALUES ('8E','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0016 VALUES ('9E','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0016 VALUES ('10E','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0016 VALUES ('11E','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0016 VALUES ('12E','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0016 VALUES ('13E','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0016 VALUES ('14E','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0016 VALUES ('15E','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0016 VALUES ('16E','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0016 VALUES ('17E','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0016 VALUES ('18E','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0016 VALUES ('19E','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0016 VALUES ('4F','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0016 VALUES ('5F','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0016 VALUES ('6F','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0016 VALUES ('7F','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0016 VALUES ('8F','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0016 VALUES ('9F','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0016 VALUES ('10F','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0016 VALUES ('11F','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0016 VALUES ('12F','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0016 VALUES ('13F','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0016 VALUES ('14F','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0016 VALUES ('15F','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0016 VALUES ('16F','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0016 VALUES ('17F','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0016 VALUES ('18F','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0016 VALUES ('19F','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0016 VALUES ('20A','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0016 VALUES ('20B','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0016 VALUES ('20C','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0016 VALUES ('20D','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0016 VALUES ('20E','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0016 VALUES ('20F','Normal class','50.000','20b');";
//insert VN0016




//Insert VN0017
	$sql .= "INSERT INTO VN0017 VALUES ('1A','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0017 VALUES ('2A','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0017 VALUES ('3A','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0017 VALUES ('1B','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0017 VALUES ('2B','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0017 VALUES ('3B','Business class','100.000','3a');";
	
	$sql .= "INSERT INTO VN0017 VALUES ('1C','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0017 VALUES ('2C','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0017 VALUES ('3C','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0017 VALUES ('1D','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0017 VALUES ('2D','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0017 VALUES ('3D','Business class','100.000','3b');";

	$sql .= "INSERT INTO VN0017 VALUES ('1E','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0017 VALUES ('2E','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0017 VALUES ('3E','Business class','100.000','3b');";
	
	$sql .= "INSERT INTO VN0017 VALUES ('1F','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0017 VALUES ('2F','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0017 VALUES ('3F','Business class','100.000','3b');";

	
	$sql .= "INSERT INTO VN0017 VALUES ('4A','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0017 VALUES ('5A','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0017 VALUES ('6A','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0017 VALUES ('7A','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0017 VALUES ('8A','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0017 VALUES ('9A','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0017 VALUES ('10A','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0017 VALUES ('11A','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0017 VALUES ('12A','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0017 VALUES ('13A','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0017 VALUES ('14A','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0017 VALUES ('15A','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0017 VALUES ('16A','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0017 VALUES ('17A','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0017 VALUES ('18A','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0017 VALUES ('19A','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0017 VALUES ('4B','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0017 VALUES ('5B','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0017 VALUES ('6B','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0017 VALUES ('7B','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0017 VALUES ('8B','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0017 VALUES ('9B','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0017 VALUES ('10B','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0017 VALUES ('11B','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0017 VALUES ('12B','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0017 VALUES ('13B','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0017 VALUES ('14B','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0017 VALUES ('15B','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0017 VALUES ('16B','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0017 VALUES ('17B','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0017 VALUES ('18B','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0017 VALUES ('19B','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0017 VALUES ('4C','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0017 VALUES ('5C','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0017 VALUES ('6C','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0017 VALUES ('7C','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0017 VALUES ('8C','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0017 VALUES ('9C','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0017 VALUES ('10C','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0017 VALUES ('11C','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0017 VALUES ('12C','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0017 VALUES ('13C','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0017 VALUES ('14C','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0017 VALUES ('15C','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0017 VALUES ('16C','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0017 VALUES ('17C','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0017 VALUES ('18C','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0017 VALUES ('19C','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0017 VALUES ('4D','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0017 VALUES ('5D','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0017 VALUES ('6D','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0017 VALUES ('7D','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0017 VALUES ('8D','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0017 VALUES ('9D','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0017 VALUES ('10D','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0017 VALUES ('11D','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0017 VALUES ('12D','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0017 VALUES ('13D','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0017 VALUES ('14D','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0017 VALUES ('15D','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0017 VALUES ('16D','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0017 VALUES ('17D','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0017 VALUES ('18D','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0017 VALUES ('19D','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0017 VALUES ('4E','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0017 VALUES ('5E','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0017 VALUES ('6E','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0017 VALUES ('7E','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0017 VALUES ('8E','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0017 VALUES ('9E','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0017 VALUES ('10E','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0017 VALUES ('11E','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0017 VALUES ('12E','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0017 VALUES ('13E','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0017 VALUES ('14E','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0017 VALUES ('15E','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0017 VALUES ('16E','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0017 VALUES ('17E','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0017 VALUES ('18E','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0017 VALUES ('19E','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0017 VALUES ('4F','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0017 VALUES ('5F','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0017 VALUES ('6F','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0017 VALUES ('7F','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0017 VALUES ('8F','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0017 VALUES ('9F','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0017 VALUES ('10F','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0017 VALUES ('11F','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0017 VALUES ('12F','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0017 VALUES ('13F','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0017 VALUES ('14F','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0017 VALUES ('15F','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0017 VALUES ('16F','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0017 VALUES ('17F','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0017 VALUES ('18F','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0017 VALUES ('19F','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0017 VALUES ('20A','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0017 VALUES ('20B','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0017 VALUES ('20C','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0017 VALUES ('20D','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0017 VALUES ('20E','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0017 VALUES ('20F','Normal class','50.000','20b');";
//insert VN0017




//Insert VN0018
	$sql .= "INSERT INTO VN0018 VALUES ('1A','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0018 VALUES ('2A','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0018 VALUES ('3A','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0018 VALUES ('1B','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0018 VALUES ('2B','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0018 VALUES ('3B','Business class','100.000','3a');";
	
	$sql .= "INSERT INTO VN0018 VALUES ('1C','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0018 VALUES ('2C','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0018 VALUES ('3C','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0018 VALUES ('1D','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0018 VALUES ('2D','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0018 VALUES ('3D','Business class','100.000','3b');";

	$sql .= "INSERT INTO VN0018 VALUES ('1E','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0018 VALUES ('2E','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0018 VALUES ('3E','Business class','100.000','3b');";
	
	$sql .= "INSERT INTO VN0018 VALUES ('1F','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0018 VALUES ('2F','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0018 VALUES ('3F','Business class','100.000','3b');";

	
	$sql .= "INSERT INTO VN0018 VALUES ('4A','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0018 VALUES ('5A','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0018 VALUES ('6A','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0018 VALUES ('7A','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0018 VALUES ('8A','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0018 VALUES ('9A','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0018 VALUES ('10A','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0018 VALUES ('11A','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0018 VALUES ('12A','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0018 VALUES ('13A','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0018 VALUES ('14A','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0018 VALUES ('15A','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0018 VALUES ('16A','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0018 VALUES ('17A','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0018 VALUES ('18A','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0018 VALUES ('19A','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0018 VALUES ('4B','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0018 VALUES ('5B','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0018 VALUES ('6B','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0018 VALUES ('7B','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0018 VALUES ('8B','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0018 VALUES ('9B','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0018 VALUES ('10B','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0018 VALUES ('11B','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0018 VALUES ('12B','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0018 VALUES ('13B','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0018 VALUES ('14B','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0018 VALUES ('15B','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0018 VALUES ('16B','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0018 VALUES ('17B','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0018 VALUES ('18B','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0018 VALUES ('19B','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0018 VALUES ('4C','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0018 VALUES ('5C','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0018 VALUES ('6C','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0018 VALUES ('7C','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0018 VALUES ('8C','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0018 VALUES ('9C','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0018 VALUES ('10C','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0018 VALUES ('11C','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0018 VALUES ('12C','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0018 VALUES ('13C','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0018 VALUES ('14C','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0018 VALUES ('15C','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0018 VALUES ('16C','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0018 VALUES ('17C','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0018 VALUES ('18C','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0018 VALUES ('19C','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0018 VALUES ('4D','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0018 VALUES ('5D','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0018 VALUES ('6D','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0018 VALUES ('7D','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0018 VALUES ('8D','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0018 VALUES ('9D','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0018 VALUES ('10D','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0018 VALUES ('11D','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0018 VALUES ('12D','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0018 VALUES ('13D','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0018 VALUES ('14D','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0018 VALUES ('15D','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0018 VALUES ('16D','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0018 VALUES ('17D','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0018 VALUES ('18D','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0018 VALUES ('19D','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0018 VALUES ('4E','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0018 VALUES ('5E','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0018 VALUES ('6E','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0018 VALUES ('7E','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0018 VALUES ('8E','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0018 VALUES ('9E','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0018 VALUES ('10E','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0018 VALUES ('11E','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0018 VALUES ('12E','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0018 VALUES ('13E','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0018 VALUES ('14E','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0018 VALUES ('15E','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0018 VALUES ('16E','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0018 VALUES ('17E','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0018 VALUES ('18E','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0018 VALUES ('19E','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0018 VALUES ('4F','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0018 VALUES ('5F','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0018 VALUES ('6F','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0018 VALUES ('7F','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0018 VALUES ('8F','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0018 VALUES ('9F','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0018 VALUES ('10F','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0018 VALUES ('11F','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0018 VALUES ('12F','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0018 VALUES ('13F','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0018 VALUES ('14F','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0018 VALUES ('15F','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0018 VALUES ('16F','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0018 VALUES ('17F','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0018 VALUES ('18F','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0018 VALUES ('19F','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0018 VALUES ('20A','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0018 VALUES ('20B','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0018 VALUES ('20C','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0018 VALUES ('20D','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0018 VALUES ('20E','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0018 VALUES ('20F','Normal class','50.000','20b');";
//insert VN0018




//Insert VN0019
	$sql .= "INSERT INTO VN0019 VALUES ('1A','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0019 VALUES ('2A','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0019 VALUES ('3A','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0019 VALUES ('1B','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0019 VALUES ('2B','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0019 VALUES ('3B','Business class','100.000','3a');";
	
	$sql .= "INSERT INTO VN0019 VALUES ('1C','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0019 VALUES ('2C','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0019 VALUES ('3C','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0019 VALUES ('1D','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0019 VALUES ('2D','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0019 VALUES ('3D','Business class','100.000','3b');";

	$sql .= "INSERT INTO VN0019 VALUES ('1E','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0019 VALUES ('2E','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0019 VALUES ('3E','Business class','100.000','3b');";
	
	$sql .= "INSERT INTO VN0019 VALUES ('1F','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0019 VALUES ('2F','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0019 VALUES ('3F','Business class','100.000','3b');";

	
	$sql .= "INSERT INTO VN0019 VALUES ('4A','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0019 VALUES ('5A','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0019 VALUES ('6A','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0019 VALUES ('7A','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0019 VALUES ('8A','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0019 VALUES ('9A','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0019 VALUES ('10A','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0019 VALUES ('11A','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0019 VALUES ('12A','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0019 VALUES ('13A','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0019 VALUES ('14A','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0019 VALUES ('15A','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0019 VALUES ('16A','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0019 VALUES ('17A','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0019 VALUES ('18A','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0019 VALUES ('19A','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0019 VALUES ('4B','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0019 VALUES ('5B','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0019 VALUES ('6B','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0019 VALUES ('7B','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0019 VALUES ('8B','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0019 VALUES ('9B','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0019 VALUES ('10B','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0019 VALUES ('11B','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0019 VALUES ('12B','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0019 VALUES ('13B','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0019 VALUES ('14B','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0019 VALUES ('15B','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0019 VALUES ('16B','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0019 VALUES ('17B','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0019 VALUES ('18B','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0019 VALUES ('19B','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0019 VALUES ('4C','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0019 VALUES ('5C','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0019 VALUES ('6C','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0019 VALUES ('7C','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0019 VALUES ('8C','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0019 VALUES ('9C','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0019 VALUES ('10C','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0019 VALUES ('11C','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0019 VALUES ('12C','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0019 VALUES ('13C','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0019 VALUES ('14C','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0019 VALUES ('15C','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0019 VALUES ('16C','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0019 VALUES ('17C','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0019 VALUES ('18C','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0019 VALUES ('19C','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0019 VALUES ('4D','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0019 VALUES ('5D','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0019 VALUES ('6D','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0019 VALUES ('7D','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0019 VALUES ('8D','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0019 VALUES ('9D','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0019 VALUES ('10D','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0019 VALUES ('11D','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0019 VALUES ('12D','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0019 VALUES ('13D','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0019 VALUES ('14D','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0019 VALUES ('15D','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0019 VALUES ('16D','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0019 VALUES ('17D','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0019 VALUES ('18D','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0019 VALUES ('19D','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0019 VALUES ('4E','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0019 VALUES ('5E','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0019 VALUES ('6E','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0019 VALUES ('7E','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0019 VALUES ('8E','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0019 VALUES ('9E','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0019 VALUES ('10E','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0019 VALUES ('11E','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0019 VALUES ('12E','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0019 VALUES ('13E','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0019 VALUES ('14E','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0019 VALUES ('15E','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0019 VALUES ('16E','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0019 VALUES ('17E','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0019 VALUES ('18E','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0019 VALUES ('19E','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0019 VALUES ('4F','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0019 VALUES ('5F','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0019 VALUES ('6F','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0019 VALUES ('7F','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0019 VALUES ('8F','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0019 VALUES ('9F','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0019 VALUES ('10F','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0019 VALUES ('11F','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0019 VALUES ('12F','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0019 VALUES ('13F','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0019 VALUES ('14F','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0019 VALUES ('15F','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0019 VALUES ('16F','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0019 VALUES ('17F','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0019 VALUES ('18F','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0019 VALUES ('19F','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0019 VALUES ('20A','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0019 VALUES ('20B','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0019 VALUES ('20C','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0019 VALUES ('20D','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0019 VALUES ('20E','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0019 VALUES ('20F','Normal class','50.000','20b');";
//insert VN0019



//Insert VN0020
	$sql .= "INSERT INTO VN0020 VALUES ('1A','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0020 VALUES ('2A','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0020 VALUES ('3A','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0020 VALUES ('1B','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0020 VALUES ('2B','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0020 VALUES ('3B','Business class','100.000','3a');";
	
	$sql .= "INSERT INTO VN0020 VALUES ('1C','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0020 VALUES ('2C','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0020 VALUES ('3C','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0020 VALUES ('1D','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0020 VALUES ('2D','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0020 VALUES ('3D','Business class','100.000','3b');";

	$sql .= "INSERT INTO VN0020 VALUES ('1E','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0020 VALUES ('2E','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0020 VALUES ('3E','Business class','100.000','3b');";
	
	$sql .= "INSERT INTO VN0020 VALUES ('1F','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0020 VALUES ('2F','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0020 VALUES ('3F','Business class','100.000','3b');";

	
	$sql .= "INSERT INTO VN0020 VALUES ('4A','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0020 VALUES ('5A','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0020 VALUES ('6A','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0020 VALUES ('7A','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0020 VALUES ('8A','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0020 VALUES ('9A','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0020 VALUES ('10A','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0020 VALUES ('11A','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0020 VALUES ('12A','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0020 VALUES ('13A','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0020 VALUES ('14A','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0020 VALUES ('15A','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0020 VALUES ('16A','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0020 VALUES ('17A','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0020 VALUES ('18A','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0020 VALUES ('19A','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0020 VALUES ('4B','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0020 VALUES ('5B','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0020 VALUES ('6B','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0020 VALUES ('7B','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0020 VALUES ('8B','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0020 VALUES ('9B','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0020 VALUES ('10B','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0020 VALUES ('11B','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0020 VALUES ('12B','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0020 VALUES ('13B','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0020 VALUES ('14B','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0020 VALUES ('15B','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0020 VALUES ('16B','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0020 VALUES ('17B','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0020 VALUES ('18B','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0020 VALUES ('19B','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0020 VALUES ('4C','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0020 VALUES ('5C','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0020 VALUES ('6C','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0020 VALUES ('7C','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0020 VALUES ('8C','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0020 VALUES ('9C','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0020 VALUES ('10C','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0020 VALUES ('11C','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0020 VALUES ('12C','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0020 VALUES ('13C','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0020 VALUES ('14C','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0020 VALUES ('15C','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0020 VALUES ('16C','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0020 VALUES ('17C','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0020 VALUES ('18C','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0020 VALUES ('19C','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0020 VALUES ('4D','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0020 VALUES ('5D','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0020 VALUES ('6D','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0020 VALUES ('7D','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0020 VALUES ('8D','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0020 VALUES ('9D','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0020 VALUES ('10D','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0020 VALUES ('11D','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0020 VALUES ('12D','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0020 VALUES ('13D','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0020 VALUES ('14D','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0020 VALUES ('15D','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0020 VALUES ('16D','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0020 VALUES ('17D','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0020 VALUES ('18D','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0020 VALUES ('19D','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0020 VALUES ('4E','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0020 VALUES ('5E','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0020 VALUES ('6E','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0020 VALUES ('7E','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0020 VALUES ('8E','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0020 VALUES ('9E','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0020 VALUES ('10E','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0020 VALUES ('11E','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0020 VALUES ('12E','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0020 VALUES ('13E','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0020 VALUES ('14E','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0020 VALUES ('15E','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0020 VALUES ('16E','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0020 VALUES ('17E','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0020 VALUES ('18E','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0020 VALUES ('19E','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0020 VALUES ('4F','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0020 VALUES ('5F','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0020 VALUES ('6F','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0020 VALUES ('7F','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0020 VALUES ('8F','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0020 VALUES ('9F','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0020 VALUES ('10F','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0020 VALUES ('11F','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0020 VALUES ('12F','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0020 VALUES ('13F','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0020 VALUES ('14F','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0020 VALUES ('15F','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0020 VALUES ('16F','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0020 VALUES ('17F','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0020 VALUES ('18F','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0020 VALUES ('19F','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0020 VALUES ('20A','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0020 VALUES ('20B','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0020 VALUES ('20C','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0020 VALUES ('20D','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0020 VALUES ('20E','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0020 VALUES ('20F','Normal class','50.000','20b');";
//insert VN0020




//Insert VN0021
	$sql .= "INSERT INTO VN0021 VALUES ('1A','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0021 VALUES ('2A','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0021 VALUES ('3A','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0021 VALUES ('1B','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0021 VALUES ('2B','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0021 VALUES ('3B','Business class','100.000','3a');";
	
	$sql .= "INSERT INTO VN0021 VALUES ('1C','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0021 VALUES ('2C','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0021 VALUES ('3C','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0021 VALUES ('1D','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0021 VALUES ('2D','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0021 VALUES ('3D','Business class','100.000','3b');";

	$sql .= "INSERT INTO VN0021 VALUES ('1E','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0021 VALUES ('2E','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0021 VALUES ('3E','Business class','100.000','3b');";
	
	$sql .= "INSERT INTO VN0021 VALUES ('1F','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0021 VALUES ('2F','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0021 VALUES ('3F','Business class','100.000','3b');";

	
	$sql .= "INSERT INTO VN0021 VALUES ('4A','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0021 VALUES ('5A','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0021 VALUES ('6A','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0021 VALUES ('7A','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0021 VALUES ('8A','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0021 VALUES ('9A','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0021 VALUES ('10A','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0021 VALUES ('11A','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0021 VALUES ('12A','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0021 VALUES ('13A','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0021 VALUES ('14A','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0021 VALUES ('15A','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0021 VALUES ('16A','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0021 VALUES ('17A','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0021 VALUES ('18A','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0021 VALUES ('19A','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0021 VALUES ('4B','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0021 VALUES ('5B','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0021 VALUES ('6B','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0021 VALUES ('7B','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0021 VALUES ('8B','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0021 VALUES ('9B','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0021 VALUES ('10B','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0021 VALUES ('11B','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0021 VALUES ('12B','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0021 VALUES ('13B','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0021 VALUES ('14B','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0021 VALUES ('15B','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0021 VALUES ('16B','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0021 VALUES ('17B','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0021 VALUES ('18B','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0021 VALUES ('19B','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0021 VALUES ('4C','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0021 VALUES ('5C','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0021 VALUES ('6C','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0021 VALUES ('7C','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0021 VALUES ('8C','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0021 VALUES ('9C','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0021 VALUES ('10C','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0021 VALUES ('11C','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0021 VALUES ('12C','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0021 VALUES ('13C','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0021 VALUES ('14C','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0021 VALUES ('15C','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0021 VALUES ('16C','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0021 VALUES ('17C','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0021 VALUES ('18C','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0021 VALUES ('19C','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0021 VALUES ('4D','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0021 VALUES ('5D','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0021 VALUES ('6D','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0021 VALUES ('7D','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0021 VALUES ('8D','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0021 VALUES ('9D','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0021 VALUES ('10D','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0021 VALUES ('11D','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0021 VALUES ('12D','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0021 VALUES ('13D','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0021 VALUES ('14D','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0021 VALUES ('15D','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0021 VALUES ('16D','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0021 VALUES ('17D','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0021 VALUES ('18D','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0021 VALUES ('19D','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0021 VALUES ('4E','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0021 VALUES ('5E','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0021 VALUES ('6E','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0021 VALUES ('7E','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0021 VALUES ('8E','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0021 VALUES ('9E','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0021 VALUES ('10E','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0021 VALUES ('11E','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0021 VALUES ('12E','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0021 VALUES ('13E','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0021 VALUES ('14E','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0021 VALUES ('15E','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0021 VALUES ('16E','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0021 VALUES ('17E','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0021 VALUES ('18E','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0021 VALUES ('19E','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0021 VALUES ('4F','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0021 VALUES ('5F','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0021 VALUES ('6F','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0021 VALUES ('7F','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0021 VALUES ('8F','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0021 VALUES ('9F','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0021 VALUES ('10F','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0021 VALUES ('11F','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0021 VALUES ('12F','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0021 VALUES ('13F','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0021 VALUES ('14F','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0021 VALUES ('15F','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0021 VALUES ('16F','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0021 VALUES ('17F','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0021 VALUES ('18F','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0021 VALUES ('19F','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0021 VALUES ('20A','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0021 VALUES ('20B','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0021 VALUES ('20C','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0021 VALUES ('20D','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0021 VALUES ('20E','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0021 VALUES ('20F','Normal class','50.000','20b');";
//insert VN0021




//Insert VN0022
	$sql .= "INSERT INTO VN0022 VALUES ('1A','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0022 VALUES ('2A','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0022 VALUES ('3A','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0022 VALUES ('1B','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0022 VALUES ('2B','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0022 VALUES ('3B','Business class','100.000','3a');";
	
	$sql .= "INSERT INTO VN0022 VALUES ('1C','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0022 VALUES ('2C','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0022 VALUES ('3C','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0022 VALUES ('1D','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0022 VALUES ('2D','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0022 VALUES ('3D','Business class','100.000','3b');";

	$sql .= "INSERT INTO VN0022 VALUES ('1E','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0022 VALUES ('2E','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0022 VALUES ('3E','Business class','100.000','3b');";
	
	$sql .= "INSERT INTO VN0022 VALUES ('1F','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0022 VALUES ('2F','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0022 VALUES ('3F','Business class','100.000','3b');";

	
	$sql .= "INSERT INTO VN0022 VALUES ('4A','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0022 VALUES ('5A','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0022 VALUES ('6A','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0022 VALUES ('7A','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0022 VALUES ('8A','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0022 VALUES ('9A','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0022 VALUES ('10A','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0022 VALUES ('11A','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0022 VALUES ('12A','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0022 VALUES ('13A','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0022 VALUES ('14A','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0022 VALUES ('15A','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0022 VALUES ('16A','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0022 VALUES ('17A','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0022 VALUES ('18A','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0022 VALUES ('19A','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0022 VALUES ('4B','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0022 VALUES ('5B','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0022 VALUES ('6B','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0022 VALUES ('7B','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0022 VALUES ('8B','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0022 VALUES ('9B','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0022 VALUES ('10B','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0022 VALUES ('11B','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0022 VALUES ('12B','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0022 VALUES ('13B','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0022 VALUES ('14B','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0022 VALUES ('15B','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0022 VALUES ('16B','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0022 VALUES ('17B','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0022 VALUES ('18B','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0022 VALUES ('19B','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0022 VALUES ('4C','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0022 VALUES ('5C','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0022 VALUES ('6C','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0022 VALUES ('7C','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0022 VALUES ('8C','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0022 VALUES ('9C','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0022 VALUES ('10C','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0022 VALUES ('11C','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0022 VALUES ('12C','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0022 VALUES ('13C','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0022 VALUES ('14C','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0022 VALUES ('15C','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0022 VALUES ('16C','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0022 VALUES ('17C','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0022 VALUES ('18C','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0022 VALUES ('19C','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0022 VALUES ('4D','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0022 VALUES ('5D','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0022 VALUES ('6D','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0022 VALUES ('7D','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0022 VALUES ('8D','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0022 VALUES ('9D','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0022 VALUES ('10D','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0022 VALUES ('11D','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0022 VALUES ('12D','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0022 VALUES ('13D','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0022 VALUES ('14D','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0022 VALUES ('15D','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0022 VALUES ('16D','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0022 VALUES ('17D','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0022 VALUES ('18D','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0022 VALUES ('19D','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0022 VALUES ('4E','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0022 VALUES ('5E','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0022 VALUES ('6E','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0022 VALUES ('7E','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0022 VALUES ('8E','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0022 VALUES ('9E','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0022 VALUES ('10E','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0022 VALUES ('11E','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0022 VALUES ('12E','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0022 VALUES ('13E','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0022 VALUES ('14E','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0022 VALUES ('15E','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0022 VALUES ('16E','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0022 VALUES ('17E','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0022 VALUES ('18E','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0022 VALUES ('19E','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0022 VALUES ('4F','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0022 VALUES ('5F','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0022 VALUES ('6F','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0022 VALUES ('7F','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0022 VALUES ('8F','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0022 VALUES ('9F','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0022 VALUES ('10F','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0022 VALUES ('11F','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0022 VALUES ('12F','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0022 VALUES ('13F','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0022 VALUES ('14F','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0022 VALUES ('15F','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0022 VALUES ('16F','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0022 VALUES ('17F','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0022 VALUES ('18F','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0022 VALUES ('19F','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0022 VALUES ('20A','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0022 VALUES ('20B','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0022 VALUES ('20C','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0022 VALUES ('20D','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0022 VALUES ('20E','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0022 VALUES ('20F','Normal class','50.000','20b');";
//insert VN0022'




//Insert VN0023
	$sql .= "INSERT INTO VN0023 VALUES ('1A','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0023 VALUES ('2A','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0023 VALUES ('3A','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0023 VALUES ('1B','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0023 VALUES ('2B','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0023 VALUES ('3B','Business class','100.000','3a');";
	
	$sql .= "INSERT INTO VN0023 VALUES ('1C','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0023 VALUES ('2C','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0023 VALUES ('3C','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0023 VALUES ('1D','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0023 VALUES ('2D','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0023 VALUES ('3D','Business class','100.000','3b');";

	$sql .= "INSERT INTO VN0023 VALUES ('1E','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0023 VALUES ('2E','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0023 VALUES ('3E','Business class','100.000','3b');";
	
	$sql .= "INSERT INTO VN0023 VALUES ('1F','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0023 VALUES ('2F','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0023 VALUES ('3F','Business class','100.000','3b');";

	
	$sql .= "INSERT INTO VN0023 VALUES ('4A','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0023 VALUES ('5A','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0023 VALUES ('6A','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0023 VALUES ('7A','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0023 VALUES ('8A','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0023 VALUES ('9A','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0023 VALUES ('10A','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0023 VALUES ('11A','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0023 VALUES ('12A','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0023 VALUES ('13A','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0023 VALUES ('14A','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0023 VALUES ('15A','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0023 VALUES ('16A','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0023 VALUES ('17A','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0023 VALUES ('18A','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0023 VALUES ('19A','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0023 VALUES ('4B','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0023 VALUES ('5B','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0023 VALUES ('6B','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0023 VALUES ('7B','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0023 VALUES ('8B','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0023 VALUES ('9B','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0023 VALUES ('10B','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0023 VALUES ('11B','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0023 VALUES ('12B','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0023 VALUES ('13B','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0023 VALUES ('14B','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0023 VALUES ('15B','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0023 VALUES ('16B','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0023 VALUES ('17B','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0023 VALUES ('18B','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0023 VALUES ('19B','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0023 VALUES ('4C','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0023 VALUES ('5C','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0023 VALUES ('6C','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0023 VALUES ('7C','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0023 VALUES ('8C','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0023 VALUES ('9C','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0023 VALUES ('10C','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0023 VALUES ('11C','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0023 VALUES ('12C','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0023 VALUES ('13C','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0023 VALUES ('14C','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0023 VALUES ('15C','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0023 VALUES ('16C','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0023 VALUES ('17C','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0023 VALUES ('18C','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0023 VALUES ('19C','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0023 VALUES ('4D','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0023 VALUES ('5D','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0023 VALUES ('6D','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0023 VALUES ('7D','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0023 VALUES ('8D','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0023 VALUES ('9D','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0023 VALUES ('10D','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0023 VALUES ('11D','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0023 VALUES ('12D','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0023 VALUES ('13D','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0023 VALUES ('14D','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0023 VALUES ('15D','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0023 VALUES ('16D','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0023 VALUES ('17D','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0023 VALUES ('18D','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0023 VALUES ('19D','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0023 VALUES ('4E','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0023 VALUES ('5E','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0023 VALUES ('6E','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0023 VALUES ('7E','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0023 VALUES ('8E','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0023 VALUES ('9E','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0023 VALUES ('10E','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0023 VALUES ('11E','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0023 VALUES ('12E','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0023 VALUES ('13E','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0023 VALUES ('14E','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0023 VALUES ('15E','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0023 VALUES ('16E','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0023 VALUES ('17E','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0023 VALUES ('18E','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0023 VALUES ('19E','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0023 VALUES ('4F','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0023 VALUES ('5F','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0023 VALUES ('6F','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0023 VALUES ('7F','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0023 VALUES ('8F','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0023 VALUES ('9F','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0023 VALUES ('10F','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0023 VALUES ('11F','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0023 VALUES ('12F','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0023 VALUES ('13F','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0023 VALUES ('14F','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0023 VALUES ('15F','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0023 VALUES ('16F','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0023 VALUES ('17F','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0023 VALUES ('18F','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0023 VALUES ('19F','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0023 VALUES ('20A','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0023 VALUES ('20B','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0023 VALUES ('20C','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0023 VALUES ('20D','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0023 VALUES ('20E','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0023 VALUES ('20F','Normal class','50.000','20b');";
//insert VN0023




//Insert VN0024
	$sql .= "INSERT INTO VN0024 VALUES ('1A','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0024 VALUES ('2A','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0024 VALUES ('3A','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0024 VALUES ('1B','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0024 VALUES ('2B','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0024 VALUES ('3B','Business class','100.000','3a');";
	
	$sql .= "INSERT INTO VN0024 VALUES ('1C','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0024 VALUES ('2C','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0024 VALUES ('3C','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0024 VALUES ('1D','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0024 VALUES ('2D','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0024 VALUES ('3D','Business class','100.000','3b');";

	$sql .= "INSERT INTO VN0024 VALUES ('1E','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0024 VALUES ('2E','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0024 VALUES ('3E','Business class','100.000','3b');";
	
	$sql .= "INSERT INTO VN0024 VALUES ('1F','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0024 VALUES ('2F','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0024 VALUES ('3F','Business class','100.000','3b');";

	
	$sql .= "INSERT INTO VN0024 VALUES ('4A','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0024 VALUES ('5A','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0024 VALUES ('6A','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0024 VALUES ('7A','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0024 VALUES ('8A','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0024 VALUES ('9A','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0024 VALUES ('10A','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0024 VALUES ('11A','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0024 VALUES ('12A','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0024 VALUES ('13A','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0024 VALUES ('14A','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0024 VALUES ('15A','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0024 VALUES ('16A','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0024 VALUES ('17A','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0024 VALUES ('18A','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0024 VALUES ('19A','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0024 VALUES ('4B','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0024 VALUES ('5B','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0024 VALUES ('6B','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0024 VALUES ('7B','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0024 VALUES ('8B','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0024 VALUES ('9B','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0024 VALUES ('10B','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0024 VALUES ('11B','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0024 VALUES ('12B','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0024 VALUES ('13B','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0024 VALUES ('14B','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0024 VALUES ('15B','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0024 VALUES ('16B','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0024 VALUES ('17B','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0024 VALUES ('18B','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0024 VALUES ('19B','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0024 VALUES ('4C','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0024 VALUES ('5C','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0024 VALUES ('6C','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0024 VALUES ('7C','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0024 VALUES ('8C','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0024 VALUES ('9C','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0024 VALUES ('10C','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0024 VALUES ('11C','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0024 VALUES ('12C','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0024 VALUES ('13C','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0024 VALUES ('14C','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0024 VALUES ('15C','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0024 VALUES ('16C','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0024 VALUES ('17C','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0024 VALUES ('18C','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0024 VALUES ('19C','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0024 VALUES ('4D','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0024 VALUES ('5D','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0024 VALUES ('6D','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0024 VALUES ('7D','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0024 VALUES ('8D','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0024 VALUES ('9D','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0024 VALUES ('10D','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0024 VALUES ('11D','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0024 VALUES ('12D','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0024 VALUES ('13D','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0024 VALUES ('14D','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0024 VALUES ('15D','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0024 VALUES ('16D','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0024 VALUES ('17D','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0024 VALUES ('18D','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0024 VALUES ('19D','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0024 VALUES ('4E','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0024 VALUES ('5E','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0024 VALUES ('6E','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0024 VALUES ('7E','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0024 VALUES ('8E','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0024 VALUES ('9E','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0024 VALUES ('10E','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0024 VALUES ('11E','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0024 VALUES ('12E','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0024 VALUES ('13E','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0024 VALUES ('14E','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0024 VALUES ('15E','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0024 VALUES ('16E','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0024 VALUES ('17E','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0024 VALUES ('18E','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0024 VALUES ('19E','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0024 VALUES ('4F','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0024 VALUES ('5F','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0024 VALUES ('6F','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0024 VALUES ('7F','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0024 VALUES ('8F','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0024 VALUES ('9F','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0024 VALUES ('10F','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0024 VALUES ('11F','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0024 VALUES ('12F','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0024 VALUES ('13F','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0024 VALUES ('14F','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0024 VALUES ('15F','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0024 VALUES ('16F','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0024 VALUES ('17F','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0024 VALUES ('18F','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0024 VALUES ('19F','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0024 VALUES ('20A','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0024 VALUES ('20B','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0024 VALUES ('20C','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0024 VALUES ('20D','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0024 VALUES ('20E','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0024 VALUES ('20F','Normal class','50.000','20b');";
//insert VN0024



//Insert VN0025
	$sql .= "INSERT INTO VN0025 VALUES ('1A','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0025 VALUES ('2A','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0025 VALUES ('3A','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0025 VALUES ('1B','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0025 VALUES ('2B','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0025 VALUES ('3B','Business class','100.000','3a');";
	
	$sql .= "INSERT INTO VN0025 VALUES ('1C','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0025 VALUES ('2C','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0025 VALUES ('3C','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0025 VALUES ('1D','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0025 VALUES ('2D','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0025 VALUES ('3D','Business class','100.000','3b');";

	$sql .= "INSERT INTO VN0025 VALUES ('1E','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0025 VALUES ('2E','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0025 VALUES ('3E','Business class','100.000','3b');";
	
	$sql .= "INSERT INTO VN0025 VALUES ('1F','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0025 VALUES ('2F','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0025 VALUES ('3F','Business class','100.000','3b');";

	
	$sql .= "INSERT INTO VN0025 VALUES ('4A','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0025 VALUES ('5A','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0025 VALUES ('6A','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0025 VALUES ('7A','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0025 VALUES ('8A','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0025 VALUES ('9A','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0025 VALUES ('10A','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0025 VALUES ('11A','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0025 VALUES ('12A','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0025 VALUES ('13A','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0025 VALUES ('14A','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0025 VALUES ('15A','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0025 VALUES ('16A','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0025 VALUES ('17A','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0025 VALUES ('18A','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0025 VALUES ('19A','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0025 VALUES ('4B','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0025 VALUES ('5B','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0025 VALUES ('6B','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0025 VALUES ('7B','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0025 VALUES ('8B','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0025 VALUES ('9B','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0025 VALUES ('10B','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0025 VALUES ('11B','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0025 VALUES ('12B','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0025 VALUES ('13B','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0025 VALUES ('14B','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0025 VALUES ('15B','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0025 VALUES ('16B','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0025 VALUES ('17B','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0025 VALUES ('18B','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0025 VALUES ('19B','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0025 VALUES ('4C','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0025 VALUES ('5C','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0025 VALUES ('6C','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0025 VALUES ('7C','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0025 VALUES ('8C','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0025 VALUES ('9C','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0025 VALUES ('10C','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0025 VALUES ('11C','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0025 VALUES ('12C','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0025 VALUES ('13C','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0025 VALUES ('14C','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0025 VALUES ('15C','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0025 VALUES ('16C','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0025 VALUES ('17C','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0025 VALUES ('18C','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0025 VALUES ('19C','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0025 VALUES ('4D','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0025 VALUES ('5D','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0025 VALUES ('6D','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0025 VALUES ('7D','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0025 VALUES ('8D','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0025 VALUES ('9D','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0025 VALUES ('10D','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0025 VALUES ('11D','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0025 VALUES ('12D','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0025 VALUES ('13D','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0025 VALUES ('14D','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0025 VALUES ('15D','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0025 VALUES ('16D','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0025 VALUES ('17D','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0025 VALUES ('18D','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0025 VALUES ('19D','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0025 VALUES ('4E','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0025 VALUES ('5E','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0025 VALUES ('6E','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0025 VALUES ('7E','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0025 VALUES ('8E','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0025 VALUES ('9E','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0025 VALUES ('10E','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0025 VALUES ('11E','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0025 VALUES ('12E','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0025 VALUES ('13E','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0025 VALUES ('14E','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0025 VALUES ('15E','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0025 VALUES ('16E','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0025 VALUES ('17E','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0025 VALUES ('18E','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0025 VALUES ('19E','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0025 VALUES ('4F','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0025 VALUES ('5F','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0025 VALUES ('6F','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0025 VALUES ('7F','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0025 VALUES ('8F','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0025 VALUES ('9F','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0025 VALUES ('10F','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0025 VALUES ('11F','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0025 VALUES ('12F','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0025 VALUES ('13F','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0025 VALUES ('14F','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0025 VALUES ('15F','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0025 VALUES ('16F','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0025 VALUES ('17F','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0025 VALUES ('18F','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0025 VALUES ('19F','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0025 VALUES ('20A','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0025 VALUES ('20B','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0025 VALUES ('20C','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0025 VALUES ('20D','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0025 VALUES ('20E','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0025 VALUES ('20F','Normal class','50.000','20b');";
//insert VN0025



//Insert VN0026
	$sql .= "INSERT INTO VN0026 VALUES ('1A','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0026 VALUES ('2A','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0026 VALUES ('3A','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0026 VALUES ('1B','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0026 VALUES ('2B','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0026 VALUES ('3B','Business class','100.000','3a');";
	
	$sql .= "INSERT INTO VN0026 VALUES ('1C','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0026 VALUES ('2C','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0026 VALUES ('3C','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0026 VALUES ('1D','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0026 VALUES ('2D','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0026 VALUES ('3D','Business class','100.000','3b');";

	$sql .= "INSERT INTO VN0026 VALUES ('1E','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0026 VALUES ('2E','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0026 VALUES ('3E','Business class','100.000','3b');";
	
	$sql .= "INSERT INTO VN0026 VALUES ('1F','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0026 VALUES ('2F','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0026 VALUES ('3F','Business class','100.000','3b');";

	
	$sql .= "INSERT INTO VN0026 VALUES ('4A','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0026 VALUES ('5A','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0026 VALUES ('6A','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0026 VALUES ('7A','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0026 VALUES ('8A','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0026 VALUES ('9A','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0026 VALUES ('10A','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0026 VALUES ('11A','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0026 VALUES ('12A','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0026 VALUES ('13A','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0026 VALUES ('14A','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0026 VALUES ('15A','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0026 VALUES ('16A','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0026 VALUES ('17A','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0026 VALUES ('18A','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0026 VALUES ('19A','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0026 VALUES ('4B','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0026 VALUES ('5B','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0026 VALUES ('6B','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0026 VALUES ('7B','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0026 VALUES ('8B','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0026 VALUES ('9B','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0026 VALUES ('10B','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0026 VALUES ('11B','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0026 VALUES ('12B','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0026 VALUES ('13B','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0026 VALUES ('14B','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0026 VALUES ('15B','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0026 VALUES ('16B','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0026 VALUES ('17B','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0026 VALUES ('18B','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0026 VALUES ('19B','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0026 VALUES ('4C','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0026 VALUES ('5C','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0026 VALUES ('6C','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0026 VALUES ('7C','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0026 VALUES ('8C','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0026 VALUES ('9C','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0026 VALUES ('10C','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0026 VALUES ('11C','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0026 VALUES ('12C','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0026 VALUES ('13C','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0026 VALUES ('14C','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0026 VALUES ('15C','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0026 VALUES ('16C','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0026 VALUES ('17C','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0026 VALUES ('18C','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0026 VALUES ('19C','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0026 VALUES ('4D','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0026 VALUES ('5D','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0026 VALUES ('6D','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0026 VALUES ('7D','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0026 VALUES ('8D','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0026 VALUES ('9D','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0026 VALUES ('10D','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0026 VALUES ('11D','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0026 VALUES ('12D','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0026 VALUES ('13D','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0026 VALUES ('14D','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0026 VALUES ('15D','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0026 VALUES ('16D','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0026 VALUES ('17D','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0026 VALUES ('18D','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0026 VALUES ('19D','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0026 VALUES ('4E','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0026 VALUES ('5E','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0026 VALUES ('6E','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0026 VALUES ('7E','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0026 VALUES ('8E','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0026 VALUES ('9E','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0026 VALUES ('10E','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0026 VALUES ('11E','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0026 VALUES ('12E','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0026 VALUES ('13E','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0026 VALUES ('14E','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0026 VALUES ('15E','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0026 VALUES ('16E','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0026 VALUES ('17E','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0026 VALUES ('18E','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0026 VALUES ('19E','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0026 VALUES ('4F','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0026 VALUES ('5F','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0026 VALUES ('6F','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0026 VALUES ('7F','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0026 VALUES ('8F','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0026 VALUES ('9F','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0026 VALUES ('10F','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0026 VALUES ('11F','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0026 VALUES ('12F','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0026 VALUES ('13F','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0026 VALUES ('14F','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0026 VALUES ('15F','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0026 VALUES ('16F','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0026 VALUES ('17F','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0026 VALUES ('18F','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0026 VALUES ('19F','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0026 VALUES ('20A','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0026 VALUES ('20B','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0026 VALUES ('20C','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0026 VALUES ('20D','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0026 VALUES ('20E','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0026 VALUES ('20F','Normal class','50.000','20b');";
//insert VN0026




//Insert VN0027
	$sql .= "INSERT INTO VN0027 VALUES ('1A','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0027 VALUES ('2A','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0027 VALUES ('3A','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0027 VALUES ('1B','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0027 VALUES ('2B','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0027 VALUES ('3B','Business class','100.000','3a');";
	
	$sql .= "INSERT INTO VN0027 VALUES ('1C','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0027 VALUES ('2C','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0027 VALUES ('3C','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0027 VALUES ('1D','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0027 VALUES ('2D','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0027 VALUES ('3D','Business class','100.000','3b');";

	$sql .= "INSERT INTO VN0027 VALUES ('1E','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0027 VALUES ('2E','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0027 VALUES ('3E','Business class','100.000','3b');";
	
	$sql .= "INSERT INTO VN0027 VALUES ('1F','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0027 VALUES ('2F','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0027 VALUES ('3F','Business class','100.000','3b');";

	
	$sql .= "INSERT INTO VN0027 VALUES ('4A','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0027 VALUES ('5A','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0027 VALUES ('6A','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0027 VALUES ('7A','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0027 VALUES ('8A','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0027 VALUES ('9A','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0027 VALUES ('10A','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0027 VALUES ('11A','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0027 VALUES ('12A','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0027 VALUES ('13A','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0027 VALUES ('14A','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0027 VALUES ('15A','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0027 VALUES ('16A','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0027 VALUES ('17A','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0027 VALUES ('18A','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0027 VALUES ('19A','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0027 VALUES ('4B','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0027 VALUES ('5B','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0027 VALUES ('6B','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0027 VALUES ('7B','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0027 VALUES ('8B','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0027 VALUES ('9B','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0027 VALUES ('10B','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0027 VALUES ('11B','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0027 VALUES ('12B','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0027 VALUES ('13B','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0027 VALUES ('14B','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0027 VALUES ('15B','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0027 VALUES ('16B','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0027 VALUES ('17B','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0027 VALUES ('18B','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0027 VALUES ('19B','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0027 VALUES ('4C','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0027 VALUES ('5C','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0027 VALUES ('6C','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0027 VALUES ('7C','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0027 VALUES ('8C','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0027 VALUES ('9C','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0027 VALUES ('10C','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0027 VALUES ('11C','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0027 VALUES ('12C','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0027 VALUES ('13C','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0027 VALUES ('14C','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0027 VALUES ('15C','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0027 VALUES ('16C','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0027 VALUES ('17C','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0027 VALUES ('18C','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0027 VALUES ('19C','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0027 VALUES ('4D','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0027 VALUES ('5D','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0027 VALUES ('6D','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0027 VALUES ('7D','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0027 VALUES ('8D','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0027 VALUES ('9D','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0027 VALUES ('10D','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0027 VALUES ('11D','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0027 VALUES ('12D','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0027 VALUES ('13D','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0027 VALUES ('14D','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0027 VALUES ('15D','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0027 VALUES ('16D','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0027 VALUES ('17D','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0027 VALUES ('18D','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0027 VALUES ('19D','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0027 VALUES ('4E','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0027 VALUES ('5E','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0027 VALUES ('6E','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0027 VALUES ('7E','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0027 VALUES ('8E','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0027 VALUES ('9E','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0027 VALUES ('10E','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0027 VALUES ('11E','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0027 VALUES ('12E','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0027 VALUES ('13E','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0027 VALUES ('14E','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0027 VALUES ('15E','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0027 VALUES ('16E','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0027 VALUES ('17E','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0027 VALUES ('18E','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0027 VALUES ('19E','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0027 VALUES ('4F','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0027 VALUES ('5F','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0027 VALUES ('6F','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0027 VALUES ('7F','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0027 VALUES ('8F','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0027 VALUES ('9F','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0027 VALUES ('10F','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0027 VALUES ('11F','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0027 VALUES ('12F','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0027 VALUES ('13F','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0027 VALUES ('14F','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0027 VALUES ('15F','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0027 VALUES ('16F','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0027 VALUES ('17F','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0027 VALUES ('18F','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0027 VALUES ('19F','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0027 VALUES ('20A','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0027 VALUES ('20B','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0027 VALUES ('20C','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0027 VALUES ('20D','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0027 VALUES ('20E','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0027 VALUES ('20F','Normal class','50.000','20b');";
//insert VN0027




//Insert VN0028
	$sql .= "INSERT INTO VN0028 VALUES ('1A','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0028 VALUES ('2A','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0028 VALUES ('3A','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0028 VALUES ('1B','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0028 VALUES ('2B','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0028 VALUES ('3B','Business class','100.000','3a');";
	
	$sql .= "INSERT INTO VN0028 VALUES ('1C','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0028 VALUES ('2C','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0028 VALUES ('3C','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0028 VALUES ('1D','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0028 VALUES ('2D','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0028 VALUES ('3D','Business class','100.000','3b');";

	$sql .= "INSERT INTO VN0028 VALUES ('1E','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0028 VALUES ('2E','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0028 VALUES ('3E','Business class','100.000','3b');";
	
	$sql .= "INSERT INTO VN0028 VALUES ('1F','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0028 VALUES ('2F','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0028 VALUES ('3F','Business class','100.000','3b');";

	
	$sql .= "INSERT INTO VN0028 VALUES ('4A','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0028 VALUES ('5A','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0028 VALUES ('6A','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0028 VALUES ('7A','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0028 VALUES ('8A','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0028 VALUES ('9A','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0028 VALUES ('10A','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0028 VALUES ('11A','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0028 VALUES ('12A','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0028 VALUES ('13A','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0028 VALUES ('14A','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0028 VALUES ('15A','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0028 VALUES ('16A','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0028 VALUES ('17A','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0028 VALUES ('18A','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0028 VALUES ('19A','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0028 VALUES ('4B','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0028 VALUES ('5B','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0028 VALUES ('6B','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0028 VALUES ('7B','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0028 VALUES ('8B','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0028 VALUES ('9B','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0028 VALUES ('10B','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0028 VALUES ('11B','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0028 VALUES ('12B','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0028 VALUES ('13B','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0028 VALUES ('14B','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0028 VALUES ('15B','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0028 VALUES ('16B','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0028 VALUES ('17B','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0028 VALUES ('18B','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0028 VALUES ('19B','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0028 VALUES ('4C','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0028 VALUES ('5C','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0028 VALUES ('6C','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0028 VALUES ('7C','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0028 VALUES ('8C','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0028 VALUES ('9C','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0028 VALUES ('10C','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0028 VALUES ('11C','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0028 VALUES ('12C','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0028 VALUES ('13C','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0028 VALUES ('14C','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0028 VALUES ('15C','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0028 VALUES ('16C','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0028 VALUES ('17C','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0028 VALUES ('18C','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0028 VALUES ('19C','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0028 VALUES ('4D','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0028 VALUES ('5D','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0028 VALUES ('6D','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0028 VALUES ('7D','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0028 VALUES ('8D','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0028 VALUES ('9D','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0028 VALUES ('10D','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0028 VALUES ('11D','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0028 VALUES ('12D','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0028 VALUES ('13D','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0028 VALUES ('14D','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0028 VALUES ('15D','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0028 VALUES ('16D','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0028 VALUES ('17D','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0028 VALUES ('18D','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0028 VALUES ('19D','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0028 VALUES ('4E','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0028 VALUES ('5E','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0028 VALUES ('6E','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0028 VALUES ('7E','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0028 VALUES ('8E','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0028 VALUES ('9E','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0028 VALUES ('10E','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0028 VALUES ('11E','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0028 VALUES ('12E','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0028 VALUES ('13E','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0028 VALUES ('14E','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0028 VALUES ('15E','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0028 VALUES ('16E','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0028 VALUES ('17E','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0028 VALUES ('18E','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0028 VALUES ('19E','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0028 VALUES ('4F','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0028 VALUES ('5F','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0028 VALUES ('6F','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0028 VALUES ('7F','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0028 VALUES ('8F','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0028 VALUES ('9F','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0028 VALUES ('10F','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0028 VALUES ('11F','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0028 VALUES ('12F','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0028 VALUES ('13F','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0028 VALUES ('14F','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0028 VALUES ('15F','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0028 VALUES ('16F','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0028 VALUES ('17F','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0028 VALUES ('18F','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0028 VALUES ('19F','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0028 VALUES ('20A','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0028 VALUES ('20B','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0028 VALUES ('20C','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0028 VALUES ('20D','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0028 VALUES ('20E','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0028 VALUES ('20F','Normal class','50.000','20b');";
//insert VN0028



//Insert VN0029
	$sql .= "INSERT INTO VN0029 VALUES ('1A','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0029 VALUES ('2A','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0029 VALUES ('3A','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0029 VALUES ('1B','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0029 VALUES ('2B','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0029 VALUES ('3B','Business class','100.000','3a');";
	
	$sql .= "INSERT INTO VN0029 VALUES ('1C','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0029 VALUES ('2C','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0029 VALUES ('3C','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0029 VALUES ('1D','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0029 VALUES ('2D','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0029 VALUES ('3D','Business class','100.000','3b');";

	$sql .= "INSERT INTO VN0029 VALUES ('1E','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0029 VALUES ('2E','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0029 VALUES ('3E','Business class','100.000','3b');";
	
	$sql .= "INSERT INTO VN0029 VALUES ('1F','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0029 VALUES ('2F','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0029 VALUES ('3F','Business class','100.000','3b');";

	
	$sql .= "INSERT INTO VN0029 VALUES ('4A','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0029 VALUES ('5A','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0029 VALUES ('6A','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0029 VALUES ('7A','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0029 VALUES ('8A','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0029 VALUES ('9A','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0029 VALUES ('10A','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0029 VALUES ('11A','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0029 VALUES ('12A','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0029 VALUES ('13A','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0029 VALUES ('14A','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0029 VALUES ('15A','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0029 VALUES ('16A','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0029 VALUES ('17A','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0029 VALUES ('18A','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0029 VALUES ('19A','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0029 VALUES ('4B','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0029 VALUES ('5B','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0029 VALUES ('6B','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0029 VALUES ('7B','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0029 VALUES ('8B','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0029 VALUES ('9B','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0029 VALUES ('10B','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0029 VALUES ('11B','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0029 VALUES ('12B','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0029 VALUES ('13B','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0029 VALUES ('14B','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0029 VALUES ('15B','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0029 VALUES ('16B','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0029 VALUES ('17B','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0029 VALUES ('18B','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0029 VALUES ('19B','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0029 VALUES ('4C','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0029 VALUES ('5C','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0029 VALUES ('6C','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0029 VALUES ('7C','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0029 VALUES ('8C','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0029 VALUES ('9C','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0029 VALUES ('10C','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0029 VALUES ('11C','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0029 VALUES ('12C','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0029 VALUES ('13C','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0029 VALUES ('14C','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0029 VALUES ('15C','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0029 VALUES ('16C','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0029 VALUES ('17C','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0029 VALUES ('18C','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0029 VALUES ('19C','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0029 VALUES ('4D','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0029 VALUES ('5D','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0029 VALUES ('6D','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0029 VALUES ('7D','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0029 VALUES ('8D','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0029 VALUES ('9D','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0029 VALUES ('10D','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0029 VALUES ('11D','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0029 VALUES ('12D','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0029 VALUES ('13D','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0029 VALUES ('14D','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0029 VALUES ('15D','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0029 VALUES ('16D','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0029 VALUES ('17D','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0029 VALUES ('18D','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0029 VALUES ('19D','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0029 VALUES ('4E','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0029 VALUES ('5E','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0029 VALUES ('6E','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0029 VALUES ('7E','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0029 VALUES ('8E','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0029 VALUES ('9E','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0029 VALUES ('10E','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0029 VALUES ('11E','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0029 VALUES ('12E','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0029 VALUES ('13E','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0029 VALUES ('14E','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0029 VALUES ('15E','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0029 VALUES ('16E','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0029 VALUES ('17E','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0029 VALUES ('18E','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0029 VALUES ('19E','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0029 VALUES ('4F','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0029 VALUES ('5F','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0029 VALUES ('6F','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0029 VALUES ('7F','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0029 VALUES ('8F','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0029 VALUES ('9F','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0029 VALUES ('10F','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0029 VALUES ('11F','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0029 VALUES ('12F','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0029 VALUES ('13F','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0029 VALUES ('14F','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0029 VALUES ('15F','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0029 VALUES ('16F','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0029 VALUES ('17F','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0029 VALUES ('18F','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0029 VALUES ('19F','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0029 VALUES ('20A','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0029 VALUES ('20B','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0029 VALUES ('20C','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0029 VALUES ('20D','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0029 VALUES ('20E','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0029 VALUES ('20F','Normal class','50.000','20b');";
//insert VN0029



//Insert VN0030
	$sql .= "INSERT INTO VN0030 VALUES ('1A','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0030 VALUES ('2A','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0030 VALUES ('3A','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0030 VALUES ('1B','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0030 VALUES ('2B','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0030 VALUES ('3B','Business class','100.000','3a');";
	
	$sql .= "INSERT INTO VN0030 VALUES ('1C','Business class','100.000','1a');";
	$sql .= "INSERT INTO VN0030 VALUES ('2C','Business class','100.000','2a');";
	$sql .= "INSERT INTO VN0030 VALUES ('3C','Business class','100.000','3a');";

	$sql .= "INSERT INTO VN0030 VALUES ('1D','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0030 VALUES ('2D','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0030 VALUES ('3D','Business class','100.000','3b');";

	$sql .= "INSERT INTO VN0030 VALUES ('1E','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0030 VALUES ('2E','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0030 VALUES ('3E','Business class','100.000','3b');";
	
	$sql .= "INSERT INTO VN0030 VALUES ('1F','Business class','100.000','1b');";
	$sql .= "INSERT INTO VN0030 VALUES ('2F','Business class','100.000','2b');";
	$sql .= "INSERT INTO VN0030 VALUES ('3F','Business class','100.000','3b');";

	
	$sql .= "INSERT INTO VN0030 VALUES ('4A','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0030 VALUES ('5A','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0030 VALUES ('6A','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0030 VALUES ('7A','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0030 VALUES ('8A','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0030 VALUES ('9A','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0030 VALUES ('10A','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0030 VALUES ('11A','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0030 VALUES ('12A','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0030 VALUES ('13A','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0030 VALUES ('14A','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0030 VALUES ('15A','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0030 VALUES ('16A','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0030 VALUES ('17A','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0030 VALUES ('18A','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0030 VALUES ('19A','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0030 VALUES ('4B','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0030 VALUES ('5B','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0030 VALUES ('6B','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0030 VALUES ('7B','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0030 VALUES ('8B','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0030 VALUES ('9B','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0030 VALUES ('10B','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0030 VALUES ('11B','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0030 VALUES ('12B','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0030 VALUES ('13B','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0030 VALUES ('14B','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0030 VALUES ('15B','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0030 VALUES ('16B','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0030 VALUES ('17B','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0030 VALUES ('18B','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0030 VALUES ('19B','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0030 VALUES ('4C','Normal class','50.000','4a');";
	$sql .= "INSERT INTO VN0030 VALUES ('5C','Normal class','50.000','5a');";
	$sql .= "INSERT INTO VN0030 VALUES ('6C','Normal class','50.000','6a');";
	$sql .= "INSERT INTO VN0030 VALUES ('7C','Normal class','50.000','7a');";
	$sql .= "INSERT INTO VN0030 VALUES ('8C','Normal class','50.000','8a');";
	$sql .= "INSERT INTO VN0030 VALUES ('9C','Normal class','50.000','9a');";
	$sql .= "INSERT INTO VN0030 VALUES ('10C','Normal class','50.000','10a');";
	$sql .= "INSERT INTO VN0030 VALUES ('11C','Normal class','50.000','11a');";
	$sql .= "INSERT INTO VN0030 VALUES ('12C','Normal class','50.000','12a');";
	$sql .= "INSERT INTO VN0030 VALUES ('13C','Normal class','50.000','13a');";
	$sql .= "INSERT INTO VN0030 VALUES ('14C','Normal class','50.000','14a');";
	$sql .= "INSERT INTO VN0030 VALUES ('15C','Normal class','50.000','15a');";
	$sql .= "INSERT INTO VN0030 VALUES ('16C','Normal class','50.000','16a');";
	$sql .= "INSERT INTO VN0030 VALUES ('17C','Normal class','50.000','17a');";
	$sql .= "INSERT INTO VN0030 VALUES ('18C','Normal class','50.000','18a');";
	$sql .= "INSERT INTO VN0030 VALUES ('19C','Normal class','50.000','19a');";

	$sql .= "INSERT INTO VN0030 VALUES ('4D','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0030 VALUES ('5D','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0030 VALUES ('6D','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0030 VALUES ('7D','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0030 VALUES ('8D','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0030 VALUES ('9D','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0030 VALUES ('10D','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0030 VALUES ('11D','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0030 VALUES ('12D','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0030 VALUES ('13D','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0030 VALUES ('14D','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0030 VALUES ('15D','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0030 VALUES ('16D','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0030 VALUES ('17D','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0030 VALUES ('18D','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0030 VALUES ('19D','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0030 VALUES ('4E','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0030 VALUES ('5E','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0030 VALUES ('6E','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0030 VALUES ('7E','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0030 VALUES ('8E','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0030 VALUES ('9E','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0030 VALUES ('10E','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0030 VALUES ('11E','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0030 VALUES ('12E','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0030 VALUES ('13E','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0030 VALUES ('14E','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0030 VALUES ('15E','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0030 VALUES ('16E','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0030 VALUES ('17E','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0030 VALUES ('18E','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0030 VALUES ('19E','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0030 VALUES ('4F','Normal class','50.000','4b');";
	$sql .= "INSERT INTO VN0030 VALUES ('5F','Normal class','50.000','5b');";
	$sql .= "INSERT INTO VN0030 VALUES ('6F','Normal class','50.000','6b');";
	$sql .= "INSERT INTO VN0030 VALUES ('7F','Normal class','50.000','7b');";
	$sql .= "INSERT INTO VN0030 VALUES ('8F','Normal class','50.000','8b');";
	$sql .= "INSERT INTO VN0030 VALUES ('9F','Normal class','50.000','9b');";
	$sql .= "INSERT INTO VN0030 VALUES ('10F','Normal class','50.000','10b');";
	$sql .= "INSERT INTO VN0030 VALUES ('11F','Normal class','50.000','11b');";
	$sql .= "INSERT INTO VN0030 VALUES ('12F','Normal class','50.000','12b');";
	$sql .= "INSERT INTO VN0030 VALUES ('13F','Normal class','50.000','13b');";
	$sql .= "INSERT INTO VN0030 VALUES ('14F','Normal class','50.000','14b');";
	$sql .= "INSERT INTO VN0030 VALUES ('15F','Normal class','50.000','15b');";
	$sql .= "INSERT INTO VN0030 VALUES ('16F','Normal class','50.000','16b');";
	$sql .= "INSERT INTO VN0030 VALUES ('17F','Normal class','50.000','17b');";
	$sql .= "INSERT INTO VN0030 VALUES ('18F','Normal class','50.000','18b');";
	$sql .= "INSERT INTO VN0030 VALUES ('19F','Normal class','50.000','19b');";

	$sql .= "INSERT INTO VN0030 VALUES ('20A','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0030 VALUES ('20B','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0030 VALUES ('20C','Normal class','50.000','20a');";
	$sql .= "INSERT INTO VN0030 VALUES ('20D','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0030 VALUES ('20E','Normal class','50.000','20b');";
	$sql .= "INSERT INTO VN0030 VALUES ('20F','Normal class','50.000','20b');";
//insert VN0030
	if (mysqli_multi_query($conn, $sql)) {
   	 echo "New records created successfully";
	} else {
    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	mysqli_close($conn);
?>


