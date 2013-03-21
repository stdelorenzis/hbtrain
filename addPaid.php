<?php
	
	require 'db.php';
	require 'structure.php';
	
	$paidUsers = $_POST['newPaid'];
	$num_boxes_checked = count($paidUsers);
		
	for ($i=0; $i<$num_boxes_checked; $i++)
		{
			$sql = "UPDATE members
					SET paid=1
					WHERE id=$paidUsers[$i]";
			$res = mysql_query($sql);		
	
		}
		
	header("location: index.php");
?>