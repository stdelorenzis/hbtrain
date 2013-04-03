<?php
	require 'db.php';
	require 'structure.php';
	
	get_header();
?>
<script>
$(document).ready(function(){
<?php 
	geo();
?>
});
</script>
	<div class="container-fluid v-background s-container">
  		<div class="row-fluid header text-center">
  			<div class="span12 headerText"><h3>Heartbeat</h3></div>
   		</div>
		<div class="row-fluid text-center">
			<div class="span10 offset1">
				<button class="btn btn-primary btn-large checkinBtn span12" type="button">Tap To </p> Check In 
				</button>
			</div>
		</div>
		</br>
		<div class="row-fluid">
			<div class="span10 offset1 text-center" id="personName">
				FirstName LastName
			</div>
		</div>		
		<div class="row-fluid">
			<div class="span12 text-center">
				Location Identified: </p>
				<span id="long"></span>&nbsp <span id="lat"></span>
			</div>
		</div>
	</div>
<?php
	get_app_footer();
?>