<?php
$servername="localhost";
$username="admin";
$password="123456";
$dbname="demoDB";

$conn=mysqli_connect($servername,$username,$password,$dbname)
	or die("建立連線失敗".mysqli_connect_error());

$sql= "INSERT INTO userdata(ID, Username, Age)
VALUES('6','e','36')";

if(mysqli_query($conn, $sql)){
	echo "資料上傳成功";
}else{
	echo "資料上傳失敗";
}

mysqli_close($conn);
?>