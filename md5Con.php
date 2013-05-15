<?php

include ("db.php");

$sql = "SELECT * FROM members";
$res = mysql_query($sql);

while ($result = mysql_fetch_array($res))
{
	$id = $result['id'];
	$pass = $result['password'];
	
	$newPass = md5($pass);
	
	$upSql = "UPDATE members
				SET password = '$newPass'
				WHERE id = $id";
	$upRes = mysql_query($upSql);
		
	print ("$id <br/> $pass <br/> $newPass<br/><br/>");
}

?>