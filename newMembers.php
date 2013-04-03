<?php

	require 'db.php';
	require 'structure.php';
	
	get_header();
	
	$sql = "SELECT first_name AS 'fname', last_name AS 'lname' FROM members";
	$res = mysql_query($sql);

	if (mysql_num_rows($res) != 0)
		{
		for ($i=0; $i<mysql_num_rows($res); $i++)
			{
				$field = mysql_fetch_array($res);
				$fname = $field['fname'];
				$lname = $field['lname']; //find users names and create error if already exists.
			}
		}
	}
						
?>
	<script>
		$(document).ready(function(){
			$("#newMemberBtn").click(function(){
				var fname = $('#inputFname').val();
				var lname = $('#inputLname').val();
				alert(fname + ' ' + lname);
			<?php 	
				$fname = print("fname");
				$lname = print("lname");
				print ("alert($fname + ' ' + $lname);\n
						return;");
					
				?>
				
			});
		});
	</script>
	<div class="container-fluid v-background s-container">
  		<div class="row-fluid header">
			<div class="span4"><img class="heart" src="img/heartgif.gif"/></div>
  			<div class="span8 headerText"><h2>Heartbeat Training Centre</h2></div>
   		</div>
		<div class="row-fluid">
			<legend class="text-center"><h3>New Member</h3></legend>
		</div>
		<div class="row-fluid">
			<div class="span3"></div>
			<div class="span6">
			<input type="hidden" value="$fNameArr" id="fNameArr">
			<input type="hidden" value="$lNameArr" id="lNameArr">
				<form class="form-horizontal" action="createNewMember.php" method="post">
					<div class="control-group">
						<label class="control-label" for="inputFname">First Name</label>
						<div class="controls">
							<input class="input-xlarge" type="text" name="fname" id="inputFname" placeholder="First Name">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputLname">Last Name</label>
						<div class="controls">
							<input class="input-xlarge" type="text" name="lname" id="inputLname" placeholder="Last Name">
							</p>
							</p>
							<button type="submit" class="btn btn-success">Sign Up</button>
							<a class="btn btn-danger" href="index.php">Cancel</a>
						</div>
					</div>
				</form>
				<div>
					<button id="newMemberBtn" class="btn btn-warning">check</button>
				</div>
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