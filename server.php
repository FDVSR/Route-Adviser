<?php
header("Content-Type: application/json; charset=UTF-8");
 $connection = mysqli_connect('127.0.0.1', 'root', '', 'routeadviser');

 if ($connection == false) {
 echo mysqli_connect_error();
 exit();
 } else {
 //echo 'nice connection';
 }

$result = mysqli_query($connection, "SELECT connection.id, buses.type, buses.number, stations.name, buses.timetable, buses.rushhours FROM connection JOIN buses, stations WHERE connection.busID = buses.id and connection.stationID = stations.id and (stations.name = '" . $_POST['first'] . "' or stations.name = '" . $_POST['second'] . "')");



while(($r = mysqli_fetch_assoc($result)) ) {

 echo json_encode($r);
}
