<?php 


	$con = mysqli_connect("localhost", "root", "", "yourcare");
	
	if (!$con) {
		echo "mysqli Error :" . mysqli_connect_errno();
		exit();
	}



?>