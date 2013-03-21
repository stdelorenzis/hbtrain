<?php	
	require 'db.php';
	require 'structure.php';
	get_header();
	
	$sql = "SELECT * FROM members
			ORDER BY paid, first_name";
	$res = mysql_query($sql);


	echo "<table class=\"table table-striped table-bordered\" id=\"memberTable\">
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Paid</th>
			</tr>";
			
	while ($row = mysql_fetch_array($res))
		{
			$fname = $row['first_name'];
			$lname = $row['last_name'];
		
			if ($row['paid'] == 0)
				{
					$paid = "Nope :( ";
					$rowclass = "error";
					$textclass = "text-error";
				}
				else
				{
					$paid = "Yes :)";
					$rowclass = "success";
					$textclass = "text-success";
				}
	
			
	print ("<tr class=\"$rowclass\">
				<td>$fname</td>
				<td>$lname</td>
				<td><span class=\"$textclass\"><strong>$paid</strong></span></td>
			</tr>");
		}
	echo "</table>";
	
	mysql_close($objConnect);
?>	