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
				<span id="long"><?php echo $long?></span></p><span id="lat"><? echo $lat ?></span> <!--will be taken from db in future, not geolocations-->
			</div>
		</div>
		</br>
		<div class="row-fluid">
			<div class="span10 offset1 text-center">
				<button id="ohsModal" type="submit" class="btn btn-primary btn-large btn-block">Complete Daily Checklist</button>
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
	
	<!--modal popup box-->
	 <div id="ohsChecklist" class="modal hide fade">
		<div class="modal-header">
			<button type="button" class="close ohsModalClose" aria-hidden="true">x</button>
			<h3 id="myModalLabel">OHS Checklist</h3>
			</div>
		<div class="modal-body">
			<form id="ohsChecklistForm" action="ohsChecklist_updb.php" method="post">
				<div id="question">
					<!--OHS questions-->
				</div>
			</form>
		</div>
		<div class="modal-footer">
			<button class="btn btn-danger ohsModalClose" aria-hidden="true">Close</button>
		</div>
	</div>
<?php
	get_app_footer();

?>