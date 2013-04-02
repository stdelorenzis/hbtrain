<?php

	require 'db.php';
	require 'structure.php';
	
	get_header();
?>
	<div class="container-fluid v-background s-container">
  		<div class="row-fluid header text-center">
  			<div class="span12 headerText"><h2>Heartbeat Training Centre</h2></div>
   		</div>
		<div class="row-fluid">
			<div class="span10 offset1">
				<form class="form-horizontal">
					<div class="control-group">
						<input class="span8" type="text" id="inputUser" placeholder="Username"/>
					</div>
					<div class="control-group">
						<input class="span8" type="text" id="inputPassword" placeholder="Password"/>
					</div>
					<div class="control-group">	
						<div class="span5 offset4">
							<input type="checkbox"> Remember me
							</p>
							<button type="submit" class="btn">Sign in</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php
	get_footer();
?>