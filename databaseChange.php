<?php	
	require 'db.php';
	require 'structure.php';
	get_header();
	
	$sql = "SELECT * FROM members
			ORDER BY first_name";
	$res = mysql_query($sql);


	print ("<table class=\"table table-striped\" id=\"memberTable\">
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Paid</th>
			</tr>");
			
	while ($row = mysql_fetch_array($res))
		{
			$fname = $row['first_name'];
			$lname = $row['last_name'];
		
			if ($row['paid'] == 0)
				{
					$paid = "Nope :( ";
				}
				else
				{
					$paid = "Yes :)";
				}
	
	print ("<tr>
				<td>$fname</td>
				<td>$lname</td>
				<td>$paid</td>
			</tr>");
		}
	echo "</table>";
	
	mysql_close($objConnect);
?>	