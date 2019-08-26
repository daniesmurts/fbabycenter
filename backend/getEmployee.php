<?php
include_once("connexion.php");
if($_REQUEST['empid']) {
$sql = "SELECT id, title, descpt, cover FROM all_products WHERE id='".$_REQUEST['empid']."'";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
$data = array();
while( $rows = mysqli_fetch_assoc($resultset) ) {
$data = $rows;
}
echo json_encode($data);
} else {
echo 0;
}
?>