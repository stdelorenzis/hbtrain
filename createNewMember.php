<?php
	require 'db.php';
	require 'structure.php';
	
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	
	$sql = "INSERT INTO members(first_name, last_name, paid)
			VALUES('$fname', '$lname', 0)";
	mysql_query($sql);
			
	mysql_close($objConnect); //close db
	
	header("Location: index.php");
?>