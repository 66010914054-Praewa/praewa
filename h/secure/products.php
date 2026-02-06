<?php
	session_start();
	if (entry($_SESSION['aid'])) {
		echo "Access Denied" ;
		echo "<meta http-equiv='refresh' content='4;url=index.php'>";
		exit;
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>แพรวา ชาวดอน -แพร</title>
</head>

<body>
<h1>จัดการสินค้า</h1>

<?php echo "แอดมิน: ". $_SESSION['a_name'];?><br>

<ul>
	<a href="../../../../Users/Administrator/Downloads/h/product.php"><li>จัดการสินค้า</li></a>
    <a href="../../../../Users/Administrator/Downloads/h/orders.php"><li>จัดการออเดอร์</li></a>
	<a href="../../../../Users/Administrator/Downloads/h/customer.php"><li>จัดการลูกค้า</li></a>
    <a href="../../../../Users/Administrator/Downloads/h/logout.php"><li>ออกจากระบบ</li></a>
</ul>
</body>
</html>