<?php
	require_once("dbtools.inc.php");

	$link = creat_connect();

	$sql = "SELECT book_id, image_name, description FROM product";

	$result = excute_sql($link, "demoDB", $sql);

	if(mysqli_num_rows($result) > 0){
		$row = mysqli_fetch_assoc($result);
		// echo $row["book_id"].$row["image_name"].$row["description"];
		echo json_encode(array("book_id" => $row["book_id"], "image_name" => $row["image_name"], "description" => $row["description"]));
		
	}else {
		echo "查無資料";
	}


?>