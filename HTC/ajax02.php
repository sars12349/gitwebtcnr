<?php
	header("Access-Control-Allow-Origin:*");
	//echo '由PHP程式傳回的資料: '.$_POST['msn'] .$_POST['msh'] .$_POST['msw'];
	//msn姓名,msh身高,msw體重
	//$msw=$_POST['msw'];
	//$msh=$_POST['msh'];
	//$bmi=$msw/(($msh/100)^2);
	$bmi=($_POST['msw']/(($_POST['msh']/100)^2));
	if($bmi>25)
	{
		echo '姓名:'.$_POST['msn'].' BMI='.$bmi.' 你太胖了';

	}else
	{
		echo '姓名:'.$_POST['msn'].' BMI='.$bmi.' 身材不錯';
	}

?>