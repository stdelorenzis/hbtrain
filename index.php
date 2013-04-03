<?php 
	
	require "db.php";
	require "structure.php";
	
	
	get_header();
	
	$sql = "SELECT * FROM members WHERE paid = 0";
	$res = mysql_query($sql);
	
	$count = mysql_num_rows($res);
	if ($count == 0)
		{
			$count = "";
		}
?>
<script>

</script>

<!-- HTML CONTENT GOES HERE -->
	<!-- This could probably be put in header. Left in html for now-->
	<div class="container-fluid v-background s-container">
  		<div class="row-fluid header">
			<div class="span4"><img class="heart" src="img/heartgif.gif"/></div>
  			<div class="span8 headerText"><h2>Heartbeat Training Centre</h2></div>
   		</div>
		<div class="row-fluid menuButtons">
			<div class="span6 offset3">
				<a class="btn btn-block btn-large" href="details.php"><i class="icon-th"></i>&nbsp&nbspDetails</a>
				<a class="btn btn-success btn-block btn-large" href="newMembers.php"><i class="icon-user icon-white"></i>&nbsp&nbspNew Member</a>
				<a class="btn btn-block btn-large" href="viewMembers.php"><span data-toggle="tooltip" title="New members need to pay" class="badge badge-important"><?php echo $count?></span>&nbsp&nbsp<i class="icon-search"></i>&nbsp&nbspRegistered Members</a>
				<a class="btn btn-block btn-large" href="paymentOptions.php"><i class="icon-shopping-cart"></i>&nbsp&nbspPayment Options</a>
				<a class="btn btn-warning btn-block btn-large" href="trackMember.php"><i class="icon-tag icon-white"></i>&nbsp&nbspTrack Members</a>
				<a class="btn btn-block btn-large" href="ohsChecklistMain.php"><i class="icon-tick"></i>&nbsp&nbspOHS Checklist</a>
			</div>
		</div>
	</div>
<?php

	get_footer();
	
?>