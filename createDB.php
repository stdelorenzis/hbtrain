<?php
 include 'db.php';
 
 $sql = "CREATE TABLE users
 (
	ID INT NOT NULL AUTO_INCREMENT,
	PRIMARY KEY(ID),
	firstName VARCHAR(30),
	lastName VARCHAR(30),
	username VARCHAR(30)
 )";
 $res = mysql_query($sql);
 
 if ($res)
 {
	echo "db created";
 }
 else
 {
	echo mysql_error();
 }

?>