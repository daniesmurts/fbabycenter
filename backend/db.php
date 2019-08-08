<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com
*/

// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
$con = mysqli_connect("ftp.u0470792.cp.regruhosting.ru", "u0470792_bcAdmin", "=V6F+?X1Pj)0", "u0470792_baby_center");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
		}
?>