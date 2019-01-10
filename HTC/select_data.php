<?php
	header("Access-Control-Allow-Origin:*");//開放權限
	require_once("dbtools.inc.php");
	$link=create_connection();

	$sql="SELECT book_id, image_name, description FROM product";
	$result=excute_sql($link, "demoDB", $sql);
	$rows=mysqli_fetch_assoc($result); //先抓一行
	$myArray=array(); //建立陣列

	if(mysqli_num_rows($result)>0){
		// $row=mysqli_fetch_assoc($result);
		do{
			$myArray[]=$rows; //將資料存入陣列
		}while($rows=mysqli_fetch_assoc($result));

		echo json_encode($myArray); //因出json格式資料
		
		//echo $row["book_id"].$row["image_name"].$row["description"];
		// echo json_encode(array("book_id" => $row["book_id"], "image_name" => $row["image_name"], "description" => $row["description"]));
	}else{
		echo "查無資料";
	}
	
?>