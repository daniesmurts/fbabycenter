<?php 

# Database Connection here...
$dbc = mysqli_connect("ftp.u0470792.cp.regruhosting.ru", "u0470792_bcAdmin", "=V6F+?X1Pj)0", "u0470792_baby_center");
       mysqli_set_charset($dbc, "utf8"); 
if(!$dbc){die('Error - Could not connect to Database :'.mysqli_connect_error());}
	
?>