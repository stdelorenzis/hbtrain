<?php

	require 'structure.php';
	get_header();
	
	echo (date("Y/m/d"));
	echo $time = mktime();
	//find system time.
	
	echo "</br>";
	date_default_timezone_set('Australia/Victoria');
	$time = date("H:i:s");
	$date = date("Y/m/d"); 
	
	echo $time . " ". $date;
	
	
	get_footer();
?>
