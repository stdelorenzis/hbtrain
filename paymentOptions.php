<?php
	require 'db.php';
	require 'structure.php';
	
	get_header();
?>

	<div class="container-fluid v-background s-container">
  		<div class="row-fluid header">
			<div class="span4"><img class="heart" src="img/heartgif.gif"/></div>
  			<div class="span8 headerText"><h2>Heartbeat Training Centre</h2></div>
   		</div>
		<div class="row-fluid">
			<legend class="text-center"><h3>Have you paid?</h3></legend>
		</div>
		</p>
		<div class="row-fluid">
			<div class="span3"></div>
			<div class="span6">
			<!--table -->
			<form action="addPaid.php" method="post">
				<table class="table table-bordered">
					<tr>
						<td>First Name</td>
						<td>Last Name</td>
						<td class="text-center">Paid?</td>
					</tr>
			<?php
				$sql = "SELECT * FROM members WHERE paid = 0";
				$res = mysql_query($sql);
				
				while ($row = mysql_fetch_array($res))
				{
					$fname = $row['first_name'];
					$lname = $row['last_name'];
					$id = $row['id'];
				
					print ("
				
							<tr>
								<td>$fname</td>
								<td>$lname</td>
								<td><input name=\"newPaid[]\" type=\"checkbox\" value=\"$id\"></td>
							</tr>");
				}
				
			?>
				</table>
				<div class="span9"></div>
				<button class="btn btn-success positionRight" type="submit"> Submit </button>
			</form>
			</div>
			<div class="span3"></div>
		</div>
		</p>
		<div class="row-fluid">
			<div class="span3"></div>
			<div class="span6">
				<a class="btn btn-primary btn-block btn-large" href="index.php"><i class="icon-home icon-white"></i>&nbsp&nbspHome</a>
			</div>
			<div class="span3"></div>
		</div>
	</div>
	

<?php
	get_footer();
?>