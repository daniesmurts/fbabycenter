<?php
$servername = "ftp.u0470792.cp.regruhosting.ru";
$username = "u0470792_bcAdmin";
$password = "=V6F+?X1Pj)0";
$dbname = "u0470792_baby_center";
$limit = 1;

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
} 
?> 