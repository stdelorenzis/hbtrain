<?php
require 'db.php';

$name = $_POST['checkinName'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

date_default_timezone_set('Australia/Melbourne');
$time = date("H:i:s");
$date = date("Y/m/d");


$sql = "INSERT INTO checkin (name, latitude, longitude, date, time)
		VALUES ('$name', '$latitude', '$longitude', '$date', '$time')";
$res = mysql_query($sql);


if ($res)
	echo "successful";
else
	echo mysql_error();

header("Location: trackMember.php");

?>