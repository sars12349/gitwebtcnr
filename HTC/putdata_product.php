<?php
$servername="localhost";
$username="admin";
$password="123456";
$dbname="demoDB";

$conn=mysqli_connect($servername,$username,$password,$dbname)
	or die("連線失敗".mysqli_connect_error());

mysqli_query($conn,"SET NAMES UTF8");	

$img=$_POST["img"];
$des=$_POST["des"];

$sql="INSERT INTO product(book_id, image_name, description)
	VALUES('','$img','$des')";

if(mysqli_query($conn,$sql)){
	echo "資料上傳成功";
}else{
	echo "資料上傳失敗";
}

mysqli_close($conn);
?>
