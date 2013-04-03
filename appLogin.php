<?php

	require 'db.php';
	require 'structure.php';
	
	get_header();
?>
	<div class="container-fluid v-background s-container">
  		<div class="row-fluid header text-center">
  			<div class="span12 headerText"><h2>Heartbeat Training Centre</h2></div>
   		</div>
		</br>
		<div class="row-fluid">
			<form class="form-horizontal span10 offset1" method="post" action="appIndex.php">
				<div class="loginInputControl text-center">
					<input class="loginInput" type="text" id="inputUser" placeholder="Username">
					</br>
					</br>
					<input class="loginInput" type="text" id="inputPassword" placeholder="Password">
					</br>
					</br>
					<div class="control-group row-fluid">
						<div class="controls span10 offset1">
							<input type="checkbox"> Remember me
						</div>
					</div>
					</p>
					<button type="submit" class="btn">Sign in</button></div>
				</div>
			</form>
		</div>
	</div>
<?php
	get_footer();
?>