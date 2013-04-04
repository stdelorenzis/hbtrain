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
		<div class="row-fluid">
			<div class="span4 text-center">
				<form method="post" action="appCheckOut.php">
					<a id="checkInBtn" class="btn btn-primary btn-large checkinBtn disabled"><p id="checkInTxt">Tap to Check In</p></a>
				</form>
			</div>
		</div>
		</br>
		<div class="row-fluid">
			<div class="span10 offset1 text-center">
				FirstName LastName
			</div>
		</div>		
		<div class="row-fluid">
			<div class="span12 text-center" >
				<form id="locationForm" method="post" action="appCheckOut.php">
					<p id="locationP"></p>
					<span id="lat"></span>&nbsp<span id="long"></span>
					<input type="hidden" name="longIn" id="longIn"/><input type="hidden" name="latIn" id="latIn"/>
				</form>
			</div>
		</div>
	</div>
<?php
	get_app_footer();
?>