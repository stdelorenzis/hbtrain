<?php
	require 'db.php';
	require 'structure.php';
	
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	
	$fname_split = chunk_split($fname,1," ");
	$fname_split2 = chunk_split($fname,2," ");
	$fname_arr = explode(" ", $fname_split);
	$username = strtolower($fname_arr[0].$lname);
		
	$sql = "SELECT * FROM members WHERE username = '$username'";
	$res = mysql_query($sql);
	
	if (mysql_num_rows($res)!=0) //if username exists in db create a new one
	{
		$fname_arr = explode(" ", $fname_split2);
		$username = strtolower($fname_arr[0].$lname);
	}
	
	$sql = "INSERT INTO members(first_name, last_name, paid, username)
				VALUES('$fname', '$lname', 0, '$username')";
	$res = mysql_query($sql);
		
	if($res)
	{
		mysql_close($objConnect); //close db
		header("Location: index.php");
	}
	else
		echo mysql_error();
		
	
?>