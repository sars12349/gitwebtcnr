<?php
$servername="localhost";
$username="hotel-user";
$password="123456";
$dbname="hotel";

$connect=mysqli_connect($servername,$username,$password,$dbname);

if(!$connect){
	die("connection failed" .mysqli_connect_error());
}

$sqldata="SELECT ID,post_author,post_date,post_date_gmt,post_content From hotel_posts";
$answer=mysqli_query($connect,$sqldata);

if(mysqli_num_rows($answer)>0){
	while($row=mysqli_fetch_assoc($answer)){
		echo "id: " .$row["ID"]. " 作者: " .$row["post_author"]. " 日期: ".$row[post_date]." date_gmt: " .$row[post_date_gmt]." post_content: " .$row[post_content]."<br>";
	}
}else{
	echo "無資料";
}

mysqli_close($connect);
?>