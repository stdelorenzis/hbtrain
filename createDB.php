<?php
 include 'db.php';

 $sql = "ALTER TABLE members
 (
		ADD username VARCHAR(30);
 )";
 $res = mysql_query($sql);
 
 
 if ($res)
 {
	echo "db changed";
 }
 else
 {
	echo mysql_error();
 }


?>