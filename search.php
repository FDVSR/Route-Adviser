<?php
header("Content-Type: application/json; charset=UTF-8");
 $connection = mysqli_connect('127.0.0.1', 'root', '', 'routeadviser');

 if ($connection == false) {
 echo mysqli_connect_error();
 exit();
 } else {
 echo 'nice connection';
 }
$result = mysqli_query($connection, "SELECT * FROM `stations` WHERE name LIKE '%" . $_POST['key'] . "%'");



while(($r = mysqli_fetch_assoc($result)) ) {

echo json_encode($r);
}