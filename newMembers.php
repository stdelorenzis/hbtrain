<?php

	require 'db.php';
	require 'structure.php';
	
	get_header();
	
	//trying to send db data to cross check if name exists already.
	/*$sql = "SELECT first_name AS 'fname', last_name AS 'lname' FROM members";
	$res = mysql_query($sql);

	if (mysql_num_rows($res) != 0)
		{
		for ($i=0; $i<mysql_num_rows($res); $i++)
			{
				$field = mysql_fetch_array($res);
				$fname = $field['fname'];
				$lname = $field['lname']; 
				print ("<input type=\"hidden\" id=\"fNameHidden[$i]\" value=\"$fname\">\n
						<input type=\"hidden\" id=\"lNameHidden[$i]\" value=\"$lname\">");
			}
		}*/
	
						
?>
	<script>
		$(document).ready(function(){
			$("#newMember").click(function(){
				var fname = $("#inputFname").val();
				var lname = $("#inputLname").val();
				
				if (lname =="" && fname=="")
				{
					$("#alertFname").text("Please enter a First Name");
					$("#alertFname").addClass("alert alert-error");
					$("#alertLname").text("Please enter a Last Name");
					$("#alertLname").addClass("alert alert-error");
					return false;
				}
				
				if (fname=="" && lname !="")
				{
					$("#alertFname").text("Please enter a First Name");
					$("#alertFname").addClass("alert alert-error");
					
					//if lname has text remove alert
					$("#alertLname").text("");
					$("#alertLname").removeClass("alert alert-error");
					return false;
				}
				
				
				if (lname =="" && fname != "")
				{
					$("#alertLname").text("Please enter a Last Name");
					$("#alertLname").addClass("alert alert-error");
					
					//if fname has text remove alert
					$("#alertFname").text("");
					$("#alertFname").removeClass("alert alert-error");
					return false;
				}
				
				
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
				<form class="form-horizontal" action="createNewMember.php" method="post">
					<div class="control-group">
						<label class="control-label" for="inputFname">First Name</label>
						<div class="controls">
							<input class="input-xlarge" type="text" name="fname" id="inputFname" placeholder="First Name">
							<span id="alertFname"></span>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputLname">Last Name</label>
						<div class="controls">
							<input class="input-xlarge" type="text" name="lname" id="inputLname" placeholder="Last Name">
							<span id="alertLname"></span>
							</p>
							</p>
							<button id="newMember" type="submit" class="btn btn-success">Sign Up</button>
							<a class="btn btn-danger" href="index.php">Cancel</a>
						</div>
					</div>
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