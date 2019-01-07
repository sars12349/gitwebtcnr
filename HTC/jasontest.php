<?php
$servername="localhost";
$username="jason";
$password="123456";
$dbname="jasonDBtest";

$connect=mysqli_connect($servername,$username,$password,$dbname);

if(!$connect){
	die("connection failed" .mysqli_connect_error());
}

$sqldata="SELECT ID,Name,Age,Sex From userdata";
$answer=mysqli_query($connect,$sqldata);

if(mysqli_num_rows($answer)>0){
	while($row=mysqli_fetch_assoc($answer)){
		echo "id: " .$row["ID"]. " 姓名: " .$row["Name"]. " 年齡: ".$row[Age]." 姓別: " .$row[Sex]."<br>";
	}
}else{
	echo "無資料";
}

mysqli_close($connect);
?>