<?php
require 'db.php';
require 'structure.php';

get_header();
?>
<script>
$(document).ready(function(){
	$("#checkInBtn").click(function(){
		
		function getLocation()
		{
			if (navigator.geolocation)
			{
				navigator.geolocation.getCurrentPosition(showPosition);
				
			}
			else
			{
				alert("Geolocation is not supported by this browser");
			}
		}
		
		function showPosition(position)
		{
			var latitude = position.coords.latitude;
			var longitude = position.coords.longitude;
			$("#latitude").val(latitude);
			$("#longitude").val(longitude);
			$("form").submit();
		}
		
		getLocation();
		
	});
});
</script>
	<div class="container-fluid v-background s-container">
  		<div class="row-fluid header">
			<div class="span4"><img class="heart" src="img/heartgif.gif"/></div>
  			<div class="span8 headerText"><h2>Heartbeat Training Centre</h2></div>
   		</div>
		<div class="row-fluid">
			<legend class="text-center"><h3>Track Members</h3></legend>
		</div>
		<div class="row-fluid">	
			<div class="span3"></div>
			<div class="span6 text-center">
				<form method="post" action="checkin_indb.php">
					<input name="checkinName" type="text" placeholder="Type your name here">
					<input type="hidden" name="latitude" id="latitude" value="-1">
					<input type="hidden" name="longitude" id="longitude" value="-1">
				</form>
				<a id="checkInBtn" class="btn btn-success btn-block btn-large">Check In</a>
			</div>
			</div class="span3"></div>
		</div>
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