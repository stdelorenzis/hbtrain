<?php 
	
	require "db.php";
	require "structure.php";
	
	
	get_header();
?>

<!-- HTML CONTENT GOES HERE -->

	<div class="container-fluid v-background s-container">
  		<div class="row-fluid header">
			<div class="span4"><img class="heart" src="img/heartgif.gif"/></div>
  			<div class="span8 headerText"><h2>HEARTBEAT TRAINING CENTRE</h2></div>
   		</div>
		<div class="row-fluid menuButtons">
			<div class="span12">
				<a class="btn btn-block btn-large" href="details.php">Details</a>
				<a class="btn btn-success btn-block btn-large" href="newMembers.php">New Member</a>
				<a class="btn btn-block btn-large" href="viewMembers.php">Registered Members</a>
				<a class="btn btn-warning btn-block btn-large" href="trackMember.php">Track Members</a>
			</div>
		</div>
	</div>
<?php

	get_footer();
	
?>