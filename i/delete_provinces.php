<meta charset="utf-8"
<?php
include_once('connectdb.php');
$id = $_GET['id'];
$ext = $_GET['ext'];
$sql = "DELETE FORM provinces WHERE p_id = 'xxx' ";
mysqli_query($conn,$sql) or die ("ลบข้อมูลไม่ได้");

unlink("images/".$id.".".$ext);

echo "<script>";
echo "window.location='a.php';";
echo "</script>";
?>