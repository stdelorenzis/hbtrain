<?php
require 'db.php';

$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];
$q5 = $_POST['q5'];
$q6 = $_POST['q6'];
$q7 = $_POST['q7'];
$q8 = $_POST['q8'];
$q9 = $_POST['q9'];
$q10 = $_POST['q10'];
$q11 = $_POST['q11'];
$q12 = $_POST['q12'];

date_default_timezone_set('Australia/Melbourne');
$time = date("H:i:s");
$date = date("Y/m/d");

$sql = "INSERT INTO ohschecklist (date, time, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10, q11, q12)
		VALUES ('$date', '$time', '$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$q8', '$q9', '$q10', '$q11', '$q12')";
$res = mysql_query($sql);

if($res)
	echo "successful";
else
	echo mysql_error();

header("Location: ohsChecklistMain.php");	
	
mysql_close($objConnect);
		







		
?>     