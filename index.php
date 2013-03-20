<?php 
	
	require "db.php";
	require "structure.php";
	
	
	get_header();
?>

<!-- HTML CONTENT GOES HERE -->

	<div class="container-fluid v-background s-container">
  		<div class="row-fluid header">
  			<div class="span10"><h2>HEARTBEAT TRAINING CENTRE</h2></div>
  			<div class="span2"><p>HELLO WORLD</p></div>
  		</div>
		<div class="row-fluid">
			<div class="span12">
				<a class="btn btn-block btn-large" href="details.php">Details</a>
				<a class="btn btn-success btn-block btn-large" href="members.php">Members</a>
				<a class="btn btn-danger btn-block btn-large" href="signUp.php">Sign Up</a>
			</div>
		</div>
	</div>
<?php

	get_footer();
	
?>