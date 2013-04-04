<?php
	require 'db.php';
	require 'structure.php';
	
	get_header();
	
	$long = $_POST['longIn'];
	$lat = $_POST['latIn'];
?>
	<script>
		$(document).ready(function(){
			<?php
				//geo(); Not required to find location twice.
				get_ohsScript();
				close_ohsModal();
			?>
			
			$("#btnCheckOut").click(function(){
				location.href="appIndex.php";
			});
			
			$("#ohsChecklist").click(function(){
				location.href="appChecklist.php";
			});
			
		});
	</script>
	<div class="container-fluid v-background s-container">
  		<div class="row-fluid header text-center">
  			<div class="span12 headerText"><h2>Heartbeat</h2></div>
   		</div>
		</br>
		<div class="row-fluid">
			<div class="span10 offset1 text-center">
				<p>FirstName LastName</p>
				<p id="checkedInP">Checked In At:</p>
				<span id="lat"><? echo $lat ?></span></p><span id="long"><?php echo $long?></span> <!--will be taken from db in future, not geolocations-->
			</div>
		</div>
		</br>
		<div class="row-fluid">
			<div class="span10 offset1 text-center">
				<button id="ohsChecklist" type="submit" class="btn btn-primary btn-large btn-block">Complete Daily Checklist</button>
			</div>
		</div>
		</br>
		</br>
		<div class="row-fluid">
			<div class="span10 offset1 text-center">
				<button id="btnCheckOut" class="btn btn-danger btn-block">Tap To Check Out</button>
			</div>
		</div>
		</br>
		<div class="row-fluid">
			<div class="span10 offset1">
				<div class="pull-right">
				</div>
			</div>
		</div>
	</div>
	

<?php
	get_app_footer();

?>