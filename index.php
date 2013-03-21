<?php 
	
	require "db.php";
	require "structure.php";
	
	
	get_header();
	
	$sql = "SELECT * FROM members";
	$res = mysql_query($sql);
	
	$paid = mysql_fetch_array($res);
	if (in_array(0,$paid))
	{
		$amount = count(in_array(0,$paid));
		$needToPay = TRUE;
		echo "Need to pay";
		echo $amount;
	}
	else
	{
		$needToPay = FALSE;
	}
	
?>
<script>
	$(document).ready(function()
	{
		$("#registeredBtn").tooltip('show');
	}
</script>

<!-- HTML CONTENT GOES HERE -->

	<div class="container-fluid v-background s-container">
  		<div class="row-fluid header">
			<div class="span4"><img class="heart" src="img/heartgif.gif"/></div>
  			<div class="span8 headerText"><h2>HEARTBEAT TRAINING CENTRE</h2></div>
   		</div>
		<div class="row-fluid menuButtons">
			<div class="span3"></div>
			<div class="span6">
				<a class="btn btn-block btn-large" href="details.php"><i class="icon-th"></i>&nbsp&nbspDetails</a>
				<a class="btn btn-success btn-block btn-large" href="newMembers.php"><i class="icon-user icon-white"></i>&nbsp&nbspNew Member</a>
				<a class="btn btn-block btn-large" href="viewMembers.php" id="registeredBtn"><i class="icon-search"></i>&nbsp&nbspRegistered Members</a>
				<a class="btn btn-block btn-large" href="index.php"><i class="icon-shopping-cart"></i>&nbsp&nbspPayment Options</a>
				<a class="btn btn-warning btn-block btn-large" href="trackMember.php"><i class="icon-tag icon-white"></i>&nbsp&nbspTrack Members</a>
			</div>
			<div class="span3"></div>
		</div>
	</div>
<?php

	get_footer();
	
?>