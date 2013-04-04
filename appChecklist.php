<?php
	include 'db.php';
	include 'structure.php';
	
	get_header();
?>
<script>
	$(document).ready(function(){
	<?php
		get_ohsScript();
	?>
	
	$("#closeChecklist").click(function(){
		var x=confirm("Are you sure you want to exit the checklist?")
		if (x==false)
			return;
		if (x==true)
			location.href="appCheckOut.php";
		
	});
	
	});
		
		
</script>
	<div class="container-fluid v-background s-container">
  		<div class="row-fluid header text-center">
  			<div class="span12 headerText"><h3>Heartbeat</h3></div>
   		</div>
		<!--modal popup box-->
		<div class="row-fluid">
			 <div id="ohsAppChecklist" class="span10 offset1">
				<div class="row-fluid header text-center">
					<h3 id="ohsLabel">OHS Checklist</h3>
				</div>
				<div class="row-fluid">
					<form id="ohsChecklistForm" action="ohsChecklist_updb.php" method="post">
						<div id="question">
							
						</div>
					</form>
				</div>
				</br>
				<div class="row-fluid">
					<div class="span12">
						<button class="btn btn-danger pull-right" id="closeChecklist">Cancel</button>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php
	get_app_footer();
?>
