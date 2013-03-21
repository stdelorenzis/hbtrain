<?php
	require 'db.php';
	require 'structure.php';
	
	get_header();
?>

	<div class="container-fluid v-background s-container">
  		<div class="row-fluid header">
			<div class="span4"><img class="heart" src="img/heartgif.gif"/></div>
  			<div class="span8 headerText"><h2>Heartbeat Training Centre</h2></div>
   		</div>
		<div class="row-fluid">
			<legend class="text-center"><h3>OHS Checklist</h3></legend>
		</div>
		<div class="row-fluid">
			<div class="span3"></div>
			<div class="span6">
				<a href="#ohsChecklist" role="button" class="btn btn-block btn-large btn-success" data-toggle="modal">Complete Daily Checklist</a>
			</div>
			<div class="span3"></div>
		</div>
		</p>
		<div class="row-fluid">
			<div class="span3"></div>
			<div class="span6">
				<div class="text-center"><h4>Completed Checklists</h4></div>
				<table class="table table-bordered">	
					<tr>
						<td>Name</td>
						<td>Date Completed</td>
						<td>Time Completed</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				</table>
			</div>
			<div class="span3"></div>
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