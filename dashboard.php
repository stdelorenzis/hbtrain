<?php
	require 'db.php';
	require 'structure.php';
	
	get_header();
	date_default_timezone_set('Australia/Melbourne');
	$time = date("H:i:s");
	$date = date("Y/m/d");
?>
	<div class="container-fluid v-background s-container">
  		<div class="row-fluid header headerText">
			<div class="span1"></div>
			<div class="span5">
				<h2>Heartbeat 1.0</h2>
				</br>
				<h4><?php echo $date. "   " .$time?></h4>
			</div>
			<div class="span5"><img class="pull-right img-rounded" src="img/logo.png"/></div>
			<div class="span1"></div>
   		</div>
		</p>
		<div class="row-fluid">
			<div class="span1"></div>
			<div class="span10">
			<table class="table table-striped table-bordered">
				<tr>
					<th>
						Last Name
					</th>
					<th>
						First Name
					</th>
					<th>
						Time
					</th>
					<th>
						Loaction
					</th>
					<th>
						Status
					</th>
				</tr>
				<tr>
				</tr>
			</table>
			</div>
			<div class="span1"></div>
		</div>
	</div>
<?php
	get_footer();
?>