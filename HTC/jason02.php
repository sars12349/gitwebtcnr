<?php
$severname="localhost";
$username="jason";
$password="123456";
$dbname="jasonDB";

$connection=mysqli_connect($servername,$username,$password,$dbname);
if(!$connection){
	die("Connection failed: " .mysqli_connect_error());
}

$sqli="SELECT ID,Name,Age FROM userprofile";
$resulta=mysqli_query($connection,$sqli);

if(mysqli_num_rows($resulta)>0){
	while($row=mysqli_fetch_assoc($resulta)){
		echo "id: ".$row["ID"]. " 姓名:" .$row["Name"] ." 年齡:" .$row["Age"]. "<br>";
	}
}else{
	echo "沒有資料";
}

mysqli_close($connection);
?>