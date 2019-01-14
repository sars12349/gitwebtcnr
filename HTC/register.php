<?php
	$servername="localhost";
	$username="jason";
	$password="123456";
	$dbname="jasonDB";

	$conn=mysqli_connect($servername,$username,$password,$dbname)
		or die("連線失敗".mysqli_connect_error());

	mysqli_query($conn, "SET NAMES UTF8");
	
	$account=$_POST["account"];
	$pwd=$_POST["pwd"];
	$mail=$_POST["mail"];

	$sql="INSERT INTO userdata(ID, Username, Password,Email)
		VALUES('','$account','$pwd','$mail')";

	if(mysqli_query($conn,$sql)){
		echo "帳號新增成功";
	}else{
		echo "帳號新增失敗";
	}
?>