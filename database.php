<?php		
	$sname = "localhost";
	$uname = "root";
	$passw= "";
	$db_name = "scheduling_entrance_exam";

	$conn = mysqli_connect($sname, $uname, $passw, $db_name);

	if(!$conn){
		echo "Connection Failed";
	}

			date_default_timezone_set("Asia/Manila");
?>