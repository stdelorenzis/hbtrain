<?php
require 'db.php';

print ("
<tr>
	<td>Name</td>
	<td>Workplace</td>
	<td>Date Completed</td>
	<td>Time Completed</td>
</tr>");



$sql = "SELECT * FROM ohschecklist 
		ORDER BY date, time";
$res = mysql_query($sql);

while ($row = mysql_fetch_array($res))
{
	
	$workplace = $row['q2'];
	if ($workplace == "Select")
		$workplace = "Office";
		
	$date = $row['date'];
	$dateArr  = explode("-",$date);
	$newDate = $dateArr[2]."-".$dateArr[1]."-".$dateArr[0];
	
	$time = $row['time'];
	
	print ("
	<tr>
		<td></td>
		<td>$workplace</td>
		<td>$newDate</td>
		<td>$time</td>
	</tr>");
}


	
mysql_close($objConnect);

?>		