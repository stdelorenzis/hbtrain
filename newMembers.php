<?php

	require 'db.php';
	require 'structure.php';
	
	get_header();
?>


	<div class="container-fluid v-background s-container">
  		<div class="row-fluid header">
			<div class="span4"><img class="heart" src="img/heartgif.gif"/></div>
  			<div class="span8 headerText"><h2>HEARTBEAT TRAINING CENTRE</h2></div>
   		</div>
		<div class="row-fluid">
			<div class="span12 text-center"><h3>Add New Members</h3></div>
		</div>
		<div class="row-fluid">
			<div class="span3"></div>
			<div class="span6">
				<form class="form-horizontal">
					<div class="control-group">
						<label class="control-label" for="inputFname">FirstName</label>
						<div class="controls">
							<input class="input-xlarge" type="text" id="inputFname" placeholder="First Name">
						</div>
					</div>
				</form>
			</div>
			<div class="span3"></div>
	</div>



<?php

	get_footer();

?>