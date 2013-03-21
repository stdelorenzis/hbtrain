<?php
	require 'db.php';
	require 'structure.php';

	get_header();
?>

	<div class="container-fluid">
		<div class="row-fluid header">
			<div class="span4"><img class="heart" src="img/heartgif.gif"/></div>
  			<div class="span8 headerText"><h2>Heartbeat Training Centre</h2></div>
   		</div>
		<div class="row-fluid">
			<legend class="text-center"><h3>Details</h3></legend>
		</div>
		<!--inside content-->
		<div class="row-fluid">
			<div class="span3"></div>
			<div class="span6 well">
				some details in here.
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